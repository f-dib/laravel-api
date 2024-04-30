<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {

        $projects = Project::with(['type', 'technologies'])->paginate(1);

        
        return response()->json([
            "success" => true,
            "results" => $projects
        ]);

    }

    public function show($id) {

        $project = Project::with(['type', 'technologies'])->where('id', '=', $id)->first();


        return response()->json([
            "success" => true,
            "project" => $project
        ]);

    }
}