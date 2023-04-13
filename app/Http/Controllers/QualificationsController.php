<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Qualification;

class QualificationsController extends Controller
{
    public function list()
    {
        return view('qualifications.list', [
            'qualifications' => Qualification::all()
        ]);
    }
    
    public function addForm()
    {
        return view('qualifications.add', [
            'qualifications' => Qualification::all(),
        ]);
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'degree' => 'required',
            'field' => 'required',
            'institute' => 'required',
            'location' => 'required',
            'started_at' => 'required',
            'ended_at' => 'required',
        ]);

        $qualification = new Qualification();
        $qualification->degree = $attributes['degree'];
        $qualification->field = $attributes['field'];
        $qualification->institute = $attributes['institute'];
        $qualification->location = $attributes['location'];
        $qualification->started_at = $attributes['started_at'];
        $qualification->ended_at = $attributes['ended_at'];
        $qualification->save();

        return redirect('/console/qualifications/list')
            ->with('message', 'Qualification has been added!');
    }

    public function editForm(Qualification $qualification)
    {
        return view('qualifications.edit', [
            'qualification' => $qualification,
        ]);
    }

    public function edit(Qualification $qualification)
    {

        $attributes = request()->validate([
            'degree' => 'required',
            'field' => 'required',
            'institute' => 'required',
            'location' => 'required',
            'started_at' => 'required',
            'ended_at' => 'required',
        ]);

        $qualification->degree = $attributes['degree'];
        $qualification->field = $attributes['field'];
        $qualification->institute = $attributes['institute'];
        $qualification->location = $attributes['location'];
        $qualification->started_at = $attributes['started_at'];
        $qualification->ended_at = $attributes['ended_at'];
        $qualification->save();

        return redirect('/console/qualifications/list')
            ->with('message', 'Qualification has been edited!');
    }

    public function delete(Qualification $qualification)
    {

        
        
        $qualification->delete();
        
        return redirect('/console/qualifications/list')
            ->with('message', 'Qualification has been deleted!');        
    }

}
