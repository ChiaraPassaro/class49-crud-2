<?php

namespace App\Http\Controllers;

use App\Pen;
use Illuminate\Http\Request;

class PenController extends Controller
{

    //creiamo un unico array che ci serve per entrambe le validazioni
    public $validator = [
        'name' => 'required|max:80',
        'brand' => 'required|max:60',
        'series' => 'required|max:80',
        'color' => 'required|max:100',
        'type' => 'required|max:80',
        'refill' => 'required|max:100',
        'body_material' => 'required|max:100',
        'closed_length' => 'required|integer',
        'body_length' => 'required|integer',
        'cap_length' => 'required|integer',
        'diameter' => 'required|numeric',
        'weight' => 'required|integer',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //mostriamo tutti i dati - rotta '/pens' metodo GET
    {
        $pens = Pen::paginate(15);

        return view('admin.pens.index', ['pens' => $pens]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() // visualizziamo un form - rotta /pens/create - metodo GET
    {
        return view('admin.pens.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //salviamo i dati in db - rotta '/pens' metodo POST
    {
        // dd($request->all());
        $request->validate($this->validator);
        //se non sono rispettati questi parametri allora torna automaticamente indietro

        $data = $request->all();

        //validazione
        $newPen = new Pen();
        $newPen->fill($data);
        $saved = $newPen->save();

        if (!$saved) {
            dd('Salvataggio no riuscito');
        }

        return redirect()
            ->route('pens.show', $newPen->id)
            ->with('status', "Pen $newPen->name Saved!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pen  $pen
     * @return \Illuminate\Http\Response
     */
    public function show(Pen $pen)
    {
        return view('admin.pens.show', ['pen' => $pen]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pen  $pen
     * @return \Illuminate\Http\Response
     */
    public function edit(Pen $pen)
    {
        return view('admin.pens.edit', ['pen' => $pen]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pen  $pen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pen $pen)
    {
        // dd($request->all(), $pen);
        //prendere i dati nuovi che sono in $request->all()
        $request->validate($this->validator);
        $data = $request->all();
        //validazione
        // $pen->name = $data['name'];
        // $pen->name = $data['name'];
        // $pen->name = $data['name'];
        // $pen->name = $data['name'];
        // $pen->name = $data['name'];
        // $pen->save();
        $updated = $pen->update($data);
        //modifico il mio record su DB

        if (!$updated) {
            dd('update non riuscito');
        }

        //mostriamo un messaggio con una sessione
        return redirect()
            ->route('pens.show', $pen->id)
            ->with('status', "Pen $pen->name Saved!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pen  $pen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pen $pen)
    {
        $deleted = $pen->delete();
        return redirect()
            ->route('pens.index')
            ->with('status', "Pen: $pen->name - id $pen->id Deleted!");
    }
}
