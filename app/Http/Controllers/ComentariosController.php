<?php

namespace App\Http\Controllers;

use App\comentarios;
use Illuminate\Http\Request;

class ComentariosController extends Controller
{
    public function index()
    {
        $data = comentarios::all();
        return response()->json($data);
    }
    
    public function store(Request $request)
    {
        $input = $request->all();
        comentarios::create($input);
        return response()->json([

            'res' => true,
            'message' => 'Comentario creado exitosamente'
        ]);
    }

    public function show(post $post)
    {
        
    }

    public function update(Request $request, comentarios $comentarios)
    {
        $input = $request->all();
        $comentarios->update($input);
        return response()->json([

            'res' => true,
            'message' => 'comentario actualizado exitosamente'

        ]);
        $comentarios->save();
     }
    

    public function destroy($id)
    {
      comentarios::destroy($id);
      return response()->json([

        'res' => true,
        'message' => 'Comentarios eliminado correctamente'
      ]);
    }


}

