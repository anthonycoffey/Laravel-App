<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
    public function store(ArticleRequest $request){
        
        // validation
        
        Article::create($request->all());
        
        return redirect('articles');
        
    }
    
    /*
     * Save a new article
     * 
     * @param $id
     * @return Response
     * 
     */
    
    public function edit($id){
        
        $article = Article::findOrFail($id);
        
        return view('articles.edit', compact('article'));
        
    }
    
    public function update($id, ArticleRequest $request){
        
        $article = Article::findOrFail($id);
        
        $article->update($request->all());
        
        return redirect('articles');
    }
}
