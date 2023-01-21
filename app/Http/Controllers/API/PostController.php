<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $projects = Project::with('Types', 'Technologies')->paginate(3);
        return response()->json([
            'success' => true,
            'results' => $projects
        ]);
    }
}
