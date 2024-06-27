<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display the blog page.
     */
    public function index(Request $request)
    {
        $query = Todo::query();

        // Filter berdasarkan kategori
        if ($request->has('category')) {
            if ($request->category != '') {
                $query->where('category_id', $request->category);
            }
        }

        // Pencarian berdasarkan judul todo
        if ($request->has('search')) {
            $query->where('title', 'like', '%'.$request->search.'%');
        }

        // Urutkan berdasarkan tanggal pembuatan secara descending
        $query->orderBy('created_at', 'desc');

        $todos = $query->paginate(12);

        return view('blog', [
            'todos' => $todos,
            'categories' => Category::all(), // Sesuaikan dengan model Category Anda
        ]);
    }
}
