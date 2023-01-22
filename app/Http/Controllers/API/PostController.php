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
        $project = Project::with('Type', 'Technologies')->orderByDesc('id')->paginate(5);
        return response()->json([
            'success' => true,
            'results' => $project
        ]);
    }
}
