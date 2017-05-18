<?php

namespace App\Http\Controllers;

use App\pusatPemindahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class PusatPemindahanUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $searchResults = Input::get('search');
      $pusat_pemindahans = PusatPemindahan::where('jenisBencana','like','%'.$searchResults.'%')->paginate(5);

      return view('pusatPemindahan.index', compact('pusat_pemindahans'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {
      return view('pusatPemindahan.index2');

    }

    public function create()
    {
        $searchResults =Input::get('search');
        $pusat_pemindahans = PusatPemindahan::where('jenisBencana','like','%'.$searchResults.'%')->paginate(5);
        return view('pusatPemindahan.create', compact('pusat_pemindahans'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, ['jenisBencana' => 'required',   ]);
      $this->validate($request, ['namaPusat'=> 'required',   ]);
      $this->validate($request, [ 'namaKawasan'=> 'required',   ]);
      $this->validate($request, ['noTelPusat'=> 'required',   ]);
      $this->validate($request, [ 'tarikhBuka'=> 'required',   ]);
      $this->validate($request, [ 'tarikhTutup'=> 'required',   ]);

      $pusatPemindahan= new PusatPemindahan;
      $pusatPemindahan->jenisBencana = $request->jenisBencana;
      $pusatPemindahan->namaPusat = $request->namaPusat;
      $pusatPemindahan->namaKawasan = $request->namaKawasan;
      $pusatPemindahan->noTelPusat = $request->noTelPusat;
      $pusatPemindahan->tarikhBuka = $request->tarikhBuka;
      $pusatPemindahan->tarikhTutup = $request->tarikhTutup;
      $pusatPemindahan->user_id = Auth::user()->id;
      $pusatPemindahan->save();

      return redirect()->action('PusatPemindahanUsController@store')->withMessage('Pusat Pemindahan telah dihantar dan direkodkan');
      //  dd ($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $pusatPemindahan = PusatPemindahan::findOrFail($id);
    return view('pusatPemindahan.edit', compact('pusatPemindahan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, ['jenisBencana' => 'required',   ]);
      $this->validate($request, ['namaPusat'=> 'required',   ]);
      $this->validate($request, [ 'namaKawasan'=> 'required',   ]);
      $this->validate($request, ['noTelPusat'=> 'required',   ]);
      $this->validate($request, [ 'tarikhBuka'=> 'required',   ]);
      $this->validate($request, [ 'tarikhTutup'=> 'required',   ]);

      $pusatPemindahan = PusatPemindahan::findOrFail($id);
      $pusatPemindahan->jenisBencana = $request->jenisBencana;
      $pusatPemindahan->namaPusat = $request->namaPusat;
      $pusatPemindahan->namaKawasan = $request->namaKawasan;
      $pusatPemindahan->noTelPusat = $request->noTelPusat;
      $pusatPemindahan->tarikhBuka = $request->tarikhBuka;
      $pusatPemindahan->tarikhTutup = $request->tarikhTutup;
      $pusatPemindahan->user_id = Auth::user()->id;
      $pusatPemindahan->save();

      return redirect()->action('PusatPemindahanUsController@create')->withMessage('Pusat Pemindahan telah dikemaskini');
      //  dd ($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $pusatPemindahan = PusatPemindahan::findOrFail($id);
      $pusatPemindahan->delete();
      return back()->withError('Senarai pusat pemindahan  telah dipadam');
    }
}
