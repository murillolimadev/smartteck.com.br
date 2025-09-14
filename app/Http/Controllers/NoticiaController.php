<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NoticiaController extends Controller
{
    private $noticia;
    public function __construct(Noticia $noticia)
    {
        $this->noticia = $noticia;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Noticia::orderBy('id', 'desc')->get();
        return view('admin.pages.noticias.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function view($slug)
    {
        dd($slug);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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

            $image->move(public_path('upload/noticias'), $nameFile);
            $this->noticia->image = $nameFile;
            $this->noticia->title = $request->title;
            $this->noticia->desc = $request->desc;
            $this->noticia->slug = Str::of($request->title)->slug('-');
            $this->noticia->content = $request->content;
            $this->noticia->save();
            return redirect()->back()->with('msg', 'Noticia cadastrada com sucesso!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Noticia $noticia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Noticia::find($id);
        return view('admin.pages.noticias.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Noticia $noticia, $id)
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

            $noticia = $this->noticia->find($id);
            $image->move(public_path('upload/noticias'), $nameFile);
            $noticia->image = $nameFile;
            $noticia->title = $request->get('title');
            $noticia->desc = $request->get('desc');
            $noticia->slug = $request->get('title');
            $noticia->content = $request->get('content');
            $noticia->update();
            return redirect()->back()->with('msg', 'Edição efetuada com sucesso!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $this->noticia->destroy($id);
        return redirect()->back()->with('msg', 'Noticia deletada com sucesso!');
    }
}
