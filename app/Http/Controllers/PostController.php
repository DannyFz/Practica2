<?php

namespace App\Http\Controllers;

use App\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index()
    {
        $data = post::all();
        return response()->json($data);
    }
    
    public function store(Request $request)
    {
        $input = $request->all();
        post::create($input);
        return response()->json([

            'res' => true,
            'message' => 'Post creado exitosamente'
        ]);
    }

    public function show(post $post)
    {
        
    }

    public function update(Request $request, post $post)
    {
        $input = $request->all();
        $post->update($input);
        return response()->json([

            'res' => true,
            'message' => 'Post actualizado exitosamente'
        ]);
    }

    public function destroy($id)
    {
      post::destroy($id);
      return response()->json([

        'res' => true,
        'message' => 'Post eliminado correctamente'
      ]);
    }


}

