<?php

namespace App\Http\Controllers;

use App\Models\Insercione;
use Illuminate\Http\Request;

/**
 * Class InsercioneController
 * @package App\Http\Controllers
 */
class InsercioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inserciones = Insercione::paginate();

        return view('insercione.index', compact('inserciones'))
            ->with('i', (request()->input('page', 1) - 1) * $inserciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $insercione = new Insercione();
        return view('insercione.create', compact('insercione'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Insercione::$rules);

        $insercione = Insercione::create($request->all());

        return redirect()->route('inserciones.index')
            ->with('success', 'Insercione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $insercione = Insercione::find($id);

        return view('insercione.show', compact('insercione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $insercione = Insercione::find($id);

        return view('insercione.edit', compact('insercione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Insercione $insercione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Insercione $insercione)
    {
        request()->validate(Insercione::$rules);

        $insercione->update($request->all());

        return redirect()->route('inserciones.index')
            ->with('success', 'Insercione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $insercione = Insercione::find($id)->delete();

        return redirect()->route('inserciones.index')
            ->with('success', 'Insercione deleted successfully');
    }
}
