<?php

namespace App\Http\Controllers;

use App\Models\Maestro;
use App\Models\Clase;

use Illuminate\Http\Request;
use PDF;

/**
 * Class MaestroController
 * @package App\Http\Controllers
 */
class MaestroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maestros = Maestro::paginate();

        return view('maestro.index', compact('maestros'))
            ->with('i', (request()->input('page', 1) - 1) * $maestros->perPage());
    }

    public function pdf()
    {
        $maestros = Maestro::paginate();
        
        $pdf = PDF::loadView('maestro.pdf', ['maestros'=>$maestros]);
        //$pdf->loadHTML('<h1>Test</h1>');
        //return $pdf->stream();
        return $pdf->download('___maestros.pdf');

        //return view('maestro.pdf', compact('maestros'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $maestro = new Maestro();
        $clases = Clase::pluck('nombre', 'id');
        return view('maestro.create', compact('maestro', 'clases'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Maestro::$rules);

        $maestro = Maestro::create($request->all());

        return redirect()->route('maestros.index')
            ->with('success', 'Maestro created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $maestro = Maestro::find($id);

        return view('maestro.show', compact('maestro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $maestro = Maestro::find($id);
        $clases = Clase::pluck('nombre', 'id');

        return view('maestro.edit', compact('maestro', 'clases'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Maestro $maestro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Maestro $maestro)
    {
        request()->validate(Maestro::$rules);

        $maestro->update($request->all());

        return redirect()->route('maestros.index')
            ->with('success', 'Maestro updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $maestro = Maestro::find($id)->delete();

        return redirect()->route('maestros.index')
            ->with('success', 'Maestro deleted successfully');
    }
}
