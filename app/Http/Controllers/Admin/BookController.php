<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        $books = DB::table('books')->join('categories','categories.id', '=','books.category_id')
        ->select('books.*','categories.name as categoryName')
        ->get();
        return view('list', compact('books'));
    }
    public function add()
    {
        $categories = DB::table('categories')->get();
        return view('add', compact('categories'));
    }
    public function create(Request $request)
    {
        $books = $request->all();
        DB::table('books')->insert([
            'title' => $books['title'],
            'thumbnail' => $books['thumbnail'],
            'author' => $books['author'],
            'publisher' => $books['publisher'],
            'publication' => $books['publication'],
            'price' => $books['price'],
            'quantity' => $books['quantity'],
            'category_id' => $books['category_id'],
        ]);
        return redirect()->route('index');
    }
    public function delete($id)
    {
        DB::table('books')->where('id', $id)->delete();
        return back();
    }
    public function editform($id)
    {
        $editbook = DB::table('books')->where('id', $id)->first();
        $categories = DB::table('categories')->get();
        return view('edit', compact('editbook', 'categories'));
    }

}
