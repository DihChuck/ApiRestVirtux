<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Models\Articles;
use Illuminate\Http\Response;


class ArticlesController extends Controller
{
    private $articles;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Articles $articles)
    {
        $this->articles = $articles;
    }

    public function index(){
        return Articles::all();
    }

    public function show($article){
        return $this->articles->find($article);
    }

    public function create(Request $request)
    {
        $article = $this->articles->create($request->all());
        return response()->json($article, 201);
    }

    public function store(Request $request){
        $article =  $this->articles->create($request->all());
        return response()->json($article, 201);
    }

    public function update($article, Request $request){
        $data = $this->articles->find($article);
        $data->update($request->all());
        return response()->json($data, 200);
    }

    public function destroy($article){
        $data = $this->articles->find($article);
        $data->delete();
        return response('Deletado com Successo', 204);
    }
}
