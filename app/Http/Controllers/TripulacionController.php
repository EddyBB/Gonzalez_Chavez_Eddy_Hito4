<?php

namespace App\Http\Controllers;

use App\Models\Tripulacion;
use Illuminate\Http\Request;

/**
 * Class TripulacionController
 * @package App\Http\Controllers
 */
class TripulacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tripulacions = Tripulacion::paginate();

        return view('tripulacion.index', compact('tripulacions'))
            ->with('i', (request()->input('page', 1) - 1) * $tripulacions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tripulacion = new Tripulacion();
        return view('tripulacion.create', compact('tripulacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tripulacion::$rules);

        $tripulacion = Tripulacion::create($request->all());

        return redirect()->route('tripulacions.index')
            ->with('success', 'Tripulacion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tripulacion = Tripulacion::find($id);

        return view('tripulacion.show', compact('tripulacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tripulacion = Tripulacion::find($id);

        return view('tripulacion.edit', compact('tripulacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tripulacion $tripulacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tripulacion $tripulacion)
    {
        request()->validate(Tripulacion::$rules);

        $tripulacion->update($request->all());

        return redirect()->route('tripulacions.index')
            ->with('success', 'Tripulacion updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tripulacion = Tripulacion::find($id)->delete();

        return redirect()->route('tripulacions.index')
            ->with('success', 'Tripulacion deleted successfully');
    }
}
