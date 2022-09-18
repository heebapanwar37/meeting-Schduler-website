<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class PostController extends Controller
{
    public static function routes()
    {
        Route::prefix('post')->group(function (){
            Route::get('/',[static::class,'index']);
            Route::get('/create',[static::class,'form']);
            Route::post('/create',[static::class,'store']);
        });
    }
    public static function index()
    {
        return view('post.list',['posts'=>Post::all()]);
    }

    public static function form()
    {
        return view('post.create');
    }
    public static function store(Request $request)
    {
        $data = $request->validate([
           'title'=>'required',
           'type'=>'required',
           'content'=>'required',
            'author'=>'required',
            'date'=>'required',
        ]);
        $post = new Post();
        $post->fill($data);
        $post->save();
        return redirect('/post');
    }
}
