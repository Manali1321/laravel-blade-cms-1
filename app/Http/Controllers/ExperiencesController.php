<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Experience;

class ExperiencesController extends Controller
{
    public function list()
    {
        return view('experience.list', [
            'experience' => Experience::all()
        ]);
    }

    public function addForm()
    {
        return view('experience.add', [
            'experience' => Experience::all(),
        ]);
    }

    public function add()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'company' => 'required',
            'detail' => 'required',
            'location' => 'required',
            'start' => 'required',
            'end' => 'required',
        ]);

        $experience = new Experience();
        $experience->title = $attributes['title'];
        $experience->company = $attributes['company'];
        $experience->detail = $attributes['detail'];
        $experience->location = $attributes['location'];
        $experience->start = $attributes['start'];
        $experience->end = $attributes['end'];
        $experience->save();

        return redirect('/console/experiences/list')
            ->with('message', 'experience has been added!');
    }

    public function editForm(Experience $experience)
    {
        return view('experience.edit', [
            'experience' => $experience,
        ]);
    }

    public function edit(Experience $experience)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'company' => 'required',
            'detail' => 'required',
            'location' => 'required',
            'start' => 'required',
            'end' => 'required',
        ]);

        $experience->title = $attributes['title'];
        $experience->company = $attributes['company'];
        $experience->detail = $attributes['detail'];
        $experience->location = $attributes['location'];
        $experience->start = $attributes['start'];
        $experience->end = $attributes['end'];
        $experience->save();

        return redirect('/console/experiences/list')
            ->with('message', 'experience has been edited!');
    }

    public function delete(Experience $experience)
    {



        $experience->delete();

        return redirect('/console/experiences/list')
            ->with('message', 'experience has been deleted!');
    }

}