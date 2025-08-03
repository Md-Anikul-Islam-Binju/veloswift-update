<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectShowController extends Controller
{
    public function project($id)
    {
        $project = Project::where('status', 1)
            ->where('id', $id)
            ->first();
        return view('frontend.pages.project.projectDetails',compact('project'));
    }
}
