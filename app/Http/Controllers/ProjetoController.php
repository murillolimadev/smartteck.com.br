<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    private $project;

    public function __construct(Projeto $project)
    {
        $this->project = $project;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Projeto::all();
        return view('admin.pages.project', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'tec' => 'required',
            'img' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('img')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        $this->project::create($input);
        return redirect()->back()->with('msg', 'Projeto enviado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Projeto $projeto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projeto $projeto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projeto $projeto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $this->project->destroy($request->id);
        return redirect()->back()->with('msg', 'Projeto deletado com sucesso!');
        
    }
}
