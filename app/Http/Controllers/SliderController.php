<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    private $slider;
    public function __construct(Slider $slider)
    {
        $this->slider = $slider;
    }
    public function index()
    {
        $data = Slider::all()->sortDesc();
        return view('admin.pages.slider.index', compact('data'));
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
        $this->validate($request, [
            'file' => 'image|required|mimes:jpeg,png,jpg,gif,svg',
            'text' => 'required',
        ]);

        // upload de image
        if ($request->hasFile('file') && $request->file('file')->isValid()) {
            # code...
            $image = $request->file('file');

            // Define um aleatório para o arquivo baseado no timestamps atual
            $name = uniqid(date('HisYmd'));

            // Recupera a extensão do arquivo
            $extension = $image->extension();

            // Define finalmente o nome
            $nameFile = "{$name}.{$extension}";

            $image->move(public_path('upload/slider'), $nameFile);
            $this->slider->file = $nameFile;
            $this->slider->text = $request->text;
            $this->slider->save();
            return redirect()->back()->with('msg', 'Imagem cadastrada com sucesso!');
        }
    }

    /**x
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $data = Slider::find($id);
        return view('admin.pages.slider.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'image|required|mimes:jpeg,png,jpg,gif,svg',
            'text' => 'required',
        ]);

        $slider = $this->slider->find($id);
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

            $image->move(public_path('upload/images/slider'), $nameFile);
            $slider->file = $nameFile;
            $slider->text = $request->text;
        }
        $slider->update();
        return redirect()->back()->with('msg', 'Imagem editada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider, $id)
    {
        Slider::destroy($id);
        return redirect()->back()->with('msg', 'Imagem deletada com sucesso!');
    }
}
