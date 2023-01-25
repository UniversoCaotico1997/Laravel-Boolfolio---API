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
        $project = Project::with('Type', 'Technologies')->orderByDesc('id')->paginate(6);
        return response()->json([
            'success' => true,
            'results' => $project
        ]);
    }


    public function show($slug)
    {
        $project = Project::with('Type', 'Technologies', 'user')->where('slug', $slug)->first();
        if ($project) {
            return response()->json([
                'success' => true,
                'results' => $project
            ]);
        } else {
            return response()->json([
                'success' => false,
                'error' => 'Post Not Found'
            ]);
        }
    }
}
