<?php

namespace App\Http\Controllers;

use App\Models\Visao;
use Illuminate\Http\Request;

class VisaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visao = Visao::first();
        return view('admin.pages.visao.index', compact('visao'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Visao $visao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Visao $visao)
    {
        $visao = Visao::first();
        return view('admin.pages.visao.edit', compact('visao'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // upload de image
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            # code...
            $image = $request->file('image');
            // Define um aleatório para o arquivo baseado no timestamps atual
            $name = uniqid(date('HisYmd'));

            // Recupera a extensão do arquivo
            $extension = $image->extension();

            // Define finalmente o nome
            $nameFile = "{$name}.{$extension}";

            $noticia = Visao::find($id);
            $image->move(public_path('upload/visao'), $nameFile);
            $noticia->image = $nameFile;
            $noticia->content = $request->get('content');
            $noticia->update();
            return redirect()->back()->with('msg', 'Edição efetuada com sucesso!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visao $visao)
    {
        //
    }
}
