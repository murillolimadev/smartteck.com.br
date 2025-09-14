<?php

namespace App\Http\Controllers;

use App\Models\Valores;
use App\Models\Visao;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class ValoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valores = Valores::first();
        return view('admin.pages.valores.index', compact('valores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
        ]);
        Valores::create(['content' => $request->content]);
        return redirect()->back()->with('msg', 'Cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Valores  $valores
     * @return \Illuminate\Http\Response
     */
    public function show(Valores $valores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Valores  $valores
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $valores = Valores::find($id);
        return view('admin.pages.valores.edit', compact('valores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Endereco  $endereco
     * @return \Illuminate\Http\Response
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

            $visao = Valores::find(1);

            $image->move(public_path('upload/valores'), $nameFile);
            $visao->image = $nameFile;
            $visao->content = $request->get('content');
            $visao->update();
            return redirect()->back()->with('msg', 'Edição efetuada com sucesso!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Endereco  $endereco
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Valores::destroy($id);
        return redirect()->back()->with('msg', 'Deletada com sucesso!');
    }
}
