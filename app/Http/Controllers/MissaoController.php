<?php

namespace App\Http\Controllers;

use App\Models\Missao;
use Illuminate\Http\Request;

class MissaoController extends Controller
{
    private $missao;
    public function __construct(Missao $missao)
    {
        $this->missao = $missao;
    }
    public function index()
    {
        $missao = Missao::find(1);
        return view('admin.pages.missao.index', compact('missao'));
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


        // upload de image
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            # code...
            $image = $request->file('image');
            // Recupera a extensão do arquivo
            $name = uniqid(date('HisYmd'));
            $extension = $image->extension();

            // Define finalmente o nome
            $nameFile = "{$name}.{$extension}";

            $image->move(public_path('upload/noticias'), $nameFile);
            $this->missao->image = $nameFile;
            $this->missao->content = $request->content;
            $this->missao->save();
        }
        return redirect()->back()->with('msg', 'Cadastrado com sucesso!');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visao  $visao
     * @return \Illuminate\Http\Response
     */
    public function show(Missao $visao)
    {
        //
    }

    public function edit($id)
    {
        $missao = Missao::find($id);
        return view('admin.pages.missao.edit', compact('missao'));
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

            $noticia = $this->missao->find($id);
            $image->move(public_path('upload/missao'), $nameFile);
            $noticia->image = $nameFile;
            $noticia->content = $request->get('content');
            $noticia->update();
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
        Missao::destroy($id);
        return redirect()->back()->with('msg', 'Deletada com sucesso!');
    }
}
