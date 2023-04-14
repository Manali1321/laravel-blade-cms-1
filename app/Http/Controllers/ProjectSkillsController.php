<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\ProjectSkill;

class ProjectSkillsController extends Controller
{

    public function list()
    {
        return view('projectSkills.list', [
            'projectSkills' => ProjectSkill::all()
        ]);
    }

    public function addForm()
    {
        return view('projectSkills.add');
    }

    public function add()
    {

        $attributes = request()->validate([
            'project_id' => 'required',
            'skill_id' => 'required',
        ]);

        $projectSkill = new ProjectSkill();
        $projectSkill->project_id = $attributes['project_id'];
        $projectSkill->skill_id = $attributes['skill_id'];

        $projectSkill->save();

        return redirect('/console/projectSkills/list')
            ->with('message', 'projectSkill has been added!');
    }

    public function editForm(ProjectSkill $projectSkill)
    {
        return view('projectSkills.edit', [
            'projectSkill' => $projectSkill,
        ]);
    }

    public function edit(ProjectSkill $projectSkill)
    {

        $attributes = request()->validate([
            'project_id' => 'required',
            'skill_id' => 'required',
        ]);

        $projectSkill->project_id = $attributes['project_id'];
        $projectSkill->skill_id = $attributes['skill_id'];
        $projectSkill->save();

        return redirect('/console/projectSkills/list')
            ->with('message', 'projectSkill has been edited!');
    }

    public function delete(ProjectSkill $projectSkill)
    {


        $projectSkill->delete();

        return redirect('/console/projectSkills/list')
            ->with('message', 'projectSkill has been deleted!');
    }



}