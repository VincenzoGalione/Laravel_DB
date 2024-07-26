<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $articles = Article::all();

        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
       $tags = Tag::all(); // Recupero tutti i tag dalla tabella tags

        return view('article.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        //
            $article = Article::create([
                'title'=> $request->title,
                'subtitle'=> $request->subtitle,
                'body'=> $request->body,
            ]);

            if ($request->file('img')){
                
                $article->img = $request->file('img')->store('public/img');
                $article->save();
            }

            $article->tags()->attach($request->tags); // con il metodo attach passo gli ID degli oggetti che voglio mettere in relazione al modello di partenza

        return redirect()->back()->with('message', 'articolo inserito con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {   
        $tags = Tag::all();
        //
        return view('article.edit', compact('article', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleRequest $request, Article $article)
    {
        //

        if ($request->file('img')) {

            Storage::delete(($article->img)); // Eliminare la vecchia immagine

            $img = $request->file('img')->store('public/img'); // La funzione store parte dal percorso storage/app
        }
        else{
            $img = $article->img;
        }

        $article->update([
            'title'=> $request->title,
            'subtitle'=> $request->subtitle,
            'body'=> $request->body,
            'img' => $img
        ]);

        $article->tags()->sync($request->tags);  

        return redirect(route('article.index'))->with('message', 'Articolo modificato');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {

        $article->tags()->detach();
        
        $article->delete();

        return redirect()->back()->with('message', 'articolo eliminato');
    }
}
