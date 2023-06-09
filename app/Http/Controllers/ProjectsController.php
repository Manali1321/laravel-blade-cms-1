<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Project;
use App\Models\Skill;

class ProjectsController extends Controller
{

    public function list()
    {

        return view('projects.list', [
            'projects' => Project::all()
        ]);

    }

    public function addForm()
    {
        return view('projects.add', [
            'allSkills' => Skill::all(),
        ]);
    }

    public function add()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'slug' => 'required|unique:projects|regex:/^[A-z\-]+$/',
            'live' => 'nullable|url',
            'source' => 'nullable|url',
            'content' => 'required',
            'skills' => 'nullable',
        ]);

        $project = new Project();
        $project->title = $attributes['title'];
        $project->slug = $attributes['slug'];
        $project->live = $attributes['live'];
        $project->source = $attributes['source'];
        $project->content = $attributes['content'];
        $project->user_id = Auth::user()->id;
        $project->save();


        return redirect('/console/projects/list')
            ->with('message', 'Project has been added!');
    }

    public function editForm(Project $project)
    {
        $projectS = Project::with('skills')->find(1);

        return view('projects.edit', [
            'project' => $project,
            'allSkills' => Skill::all(),
        ]);
    }

    public function edit(Project $project)
    {
        $projectS = Project::with('skills')->find(1);

        $attributes = request()->validate([
            'title' => 'required',
            'slug' => [
                'required',
                Rule::unique('projects')->ignore($project->id),
                'regex:/^[A-z\-]+$/',
            ],
            'live' => 'nullable|url',
            'source' => 'nullable|url',
            'content' => 'required',
        ]);

        $project->title = $attributes['title'];
        $project->slug = $attributes['slug'];
        $project->live = $attributes['live'];
        $project->source = $attributes['source'];
        $project->content = $attributes['content'];
        $project->save();

        return redirect('/console/projects/list')
            ->with('message', 'Project has been edited!');
    }

    public function delete(Project $project)
    {

        if ($project->image) {
            Storage::delete($project->image);
        }

        $project->delete();

        return redirect('/console/projects/list')
            ->with('message', 'Project has been deleted!');
    }

    public function imageForm(Project $project)
    {
        return view('projects.image', [
            'project' => $project,
        ]);
    }

    public function image(Project $project)
    {

        $attributes = request()->validate([
            'image' => 'required|image',
        ]);

        if ($project->image) {
            Storage::delete($project->image);
        }

        $path = request()->file('image')->store('projects');

        $project->image = $path;
        $project->save();

        return redirect('/console/projects/list')
            ->with('message', 'Project image has been edited!');
    }

}