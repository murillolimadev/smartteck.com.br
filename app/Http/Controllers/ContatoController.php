<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContatoController extends Controller
{
    private $contato;
    public function __construct(Contato $contato)
    {
        $this->contato = $contato;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home.pages.contato.index');
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
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $this->contato->name = $request->name;
        $this->contato->email = $request->email;
        $this->contato->subject = $request->subject;
        $this->contato->message = $request->message;
        $this->contato->save();

        return redirect()->back()->with('msg', 'Contato enviado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contato $contato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contato $contato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contato $contato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $this->contato->destroy($request->id);
        return redirect()->back()->with('msg', 'Deletado com sucesso!');
    }
}
