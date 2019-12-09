<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    protected $request;
    protected $post;

    public function __construct(Request $request, Post $post) {

    $this->request = $request;
    $this->post = $post;
    $this->middleware('auth');
    // $this->middleware('permission:lista-categoria');
    // $this->middleware('permission:cria-categoria', ['only' => ['create','store']]);
    // $this->middleware('permission:atualiza-categoria', ['only' => ['edit','update']]);
    // $this->middleware('permission:deleta-categoria', ['only' => ['destroy']]);
    
    }

    public function index() {

        $posts = Post::with('autor')->with('categorias')->orderBy('id','desc')->paginate(6);

        // dd($posts);

        return view('posts.lista', compact('posts'));

    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        
          return view('posts.novo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {


        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        
    }
}
