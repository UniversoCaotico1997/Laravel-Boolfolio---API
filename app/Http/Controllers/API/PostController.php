<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Type;
use App\Models\Technology;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $project = Project::all();
        return response()->json([
            'success' => true,
            'data' => $project
        ]);
    }
}
