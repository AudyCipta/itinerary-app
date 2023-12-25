<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;

class BlogController extends Controller
{
    public function index(): View
    {
        return view('blog.index');
    }

    public function detail(string $id)
    {
        return view('blog.detail', compact('id'));
    }

    public function getAll(): JsonResponse
    {
        $posts = Blog::all();

        return response()->json([
            'status' => 'success',
            'data' => ['posts' => $posts]
        ]);
    }
}
