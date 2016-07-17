<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Article;
use Carbon\Carbon;

class ArticlesController extends Controller
{
    /*
     * Show all articles
     * 
     * @return Response
     * 
     */
     public function index(){
        
        $articles = Article::latest('published_at')->published()->get();
        
        return view('articles.index',compact('articles'));
        
    }
    
    /*
     * Show a single article
     * 
     * @param integer $id
     * @return Response
     * 
     */
    public function show($id){
        
        $article = Article::findOrFail($id);
       
        return view('articles.show', compact('article'));
        
    }
    
    /*
     * Show the page to create an article
     * 
     * @return Response
     */
    public function create(){
        return view('articles.create');
    }
    
    /*
     * Save a new article
     * 
     * @return Response
     */
    public function store(Requests\CreateArticle $request){
        
        // validation
        
        Article::create(Request::all());
        
        return redirect('articles');
        
    }
    

}
