<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){

    $articles = Article::all();
    
    return view('articles.index', [
        'articles' => $articles,
    ]);
    }

    public function admin()
    {
        $articles = Article::all();

        return view('admin.admin', ['articles' => $articles,]);
    }

    public function show(int $id)
    {
        $article = Article::findOrFail($id);

        return view ('articles.show', ['article' => $article,]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store (Request $request)
    {
        
        $data = $request->except((['_token']));

        $request->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'content' => ['required', 'min:10'],
            'release_date' => 'required',
        ],
        [
            'title.required' => 'El campo titulo es obligatorio',
            'title.min' => 'El campo titulo debe tener al menos :min caracteres',
            'title.max' => 'El campo titulo debe tener como maximo :max caracteres',
            'content.required' => 'El campo contenido es obligatorio',
            'content.min' => 'El campo contenido debe tener al menos 10 caracteres',
            'release_date.required' => 'El campo fecha de publicacion es obligatorio',
        ]);

        Article::create($data);

        return redirect(url('/admin'))
        ->with("feedback", [
            "message" => 'La noticia ' .e($data['title']). ' fue creada con exito!',
            "class" => "alert-success",
        ]);
    }

    public function edit(int $id)
    {
        return view('admin.edit', [
            'article' => Article::findOrFail($id),
        ]);
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'content' => ['required', 'min:10'],
            'release_date' => 'required',
        ],
        [
            'title.required' => 'El campo titulo es obligatorio',
            'title.min' => 'El campo titulo debe tener al menos :min caracteres',
            'title.max' => 'El campo titulo debe tener como maximo :max caracteres',
            'content.required' => 'El campo contenido es obligatorio',
            'content.min' => 'El campo contenido debe tener al menos 10 caracteres',
            'release_date.required' => 'El campo fecha de publicacion es obligatorio',
        ]);

        $article = Article::findOrFail($id);

        $article->update($request->except(['_token']));

        return redirect(url('/admin'))
        ->with("feedback", [
            "message" => 'La noticia ' .e($article->title). ' fue actualizada con exito!',
            "class" => "alert-success",
        ]);
    }

    public function delete(int $id)
    {
        return view('admin.delete', [
            'article' => Article::findOrFail($id),
        ]);
    }

    public function destroy(int $id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect(url('/admin'))
        ->with("feedback", [
            "message" => 'La noticia ' .e($article->title). ' fue eliminada con exito!',
            "class" => "alert-success",
        ]);
    }

}
