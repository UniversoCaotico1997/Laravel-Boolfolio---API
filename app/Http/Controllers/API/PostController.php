<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $projects = Project::with('Types', 'Technologies')->orderByDesc('id')->paginate(5);
        return response()->json([
            'success' => true,
            'data' => $projects
        ]);
    }
}
