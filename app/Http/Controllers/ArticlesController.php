<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    
    public function index()
    {
         //showing or load


        $articles = Article::paginate(2);
        return view("lara_crud")->with("articles", $articles);
    }
    public function store(Request $request)
    {
        // user inpurt/ insert add 
    }
    public function create()
    {
        //showing add form 
        # code...
    }
    public function show($id)
    {
        # code...
    }
    public function edit($id)
    {
        # code...
    }
    public function update(Request $request)
    {
        # code...
    }
    public function destroy($id)
    {//laravel implicit binding
        # code...
    }
   

}
