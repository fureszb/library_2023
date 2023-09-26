<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function show($id)
    {
        $book = response()->json(Book::all()); 
    }

    public function index()
    {
    }

    public function delete($id)
    {
    }

    public function store(Request $request)
    {
    }


    public function update(Request $request, $id)
    {
    }

    
    public function newView(){

    }
    
}
