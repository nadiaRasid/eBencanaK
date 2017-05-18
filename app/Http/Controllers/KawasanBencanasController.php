<?php

namespace App\Http\Controllers;

use App\KawasanBencana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class KawasanBencanasController extends Controller
{

    public function index()
    {
      return view('KawasanBencana.index', compact('kawasan_bencanas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $searchResults =Input::get('search');
      $kawasan_bencanas = KawasanBencana::where('namaKawasan','like','%'.$searchResults.'%')->paginate(5);
      return view('KawasanBencana.create', compact('kawasan_bencanas'));

}
      public function notifikasi()
      {
        $searchResults =Input::get('search');
        $kawasan_bencanas = KawasanBencana::where('namaKawasan','like','%'.$searchResults.'%')->paginate(5);
        return view('KawasanBencana.notifikasi', compact('kawasan_bencanas'));
      }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, ['namaKawasan' => 'required',   ]);
      $this->validate($request, ['jenisBencana'=> 'required',   ]);
      $this->validate($request, ['tarikhBerlaku'=> 'required',   ]);
      $this->validate($request, ['punca'=> 'required',   ]);
      $this->validate($request, ['noPindah'=> 'required',   ]);
      $this->validate($request, ['noKorban'=> 'required',   ]);


    $KawasanBencana= new KawasanBencana;
    $KawasanBencana->namaKawasan = $request->namaKawasan;
    $KawasanBencana->jenisBencana = $request->jenisBencana;
    $KawasanBencana->tarikhBerlaku = $request->tarikhBerlaku;
    $KawasanBencana->punca = $request->punca;
    $KawasanBencana->noPindah = $request->noPindah;
    $KawasanBencana->noKorban = $request->noKorban;

    $KawasanBencana->user_id = Auth::user()->id;
    $KawasanBencana->save();

     return redirect()->action('KawasanBencanasController@store')->withMessage('Kawasan Bencana telah dihantar');
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


    public function edit($id)
    {
      $KawasanBencana = KawasanBencana::findOrFail($id);
      return view('KawasanBencana.edit', compact('KawasanBencana'));
    }

    public function details($id)
    {
      $KawasanBencana = KawasanBencana::findOrFail($id);
      return view('KawasanBencana.details', compact('KawasanBencana'));
    }

    public function update(Request $request, $id)
    {
      $this->validate($request, ['namaKawasan' => 'required',   ]);
      $this->validate($request, ['jenisBencana'=> 'required',   ]);
      $this->validate($request, ['tarikhBerlaku'=> 'required',   ]);
      $this->validate($request, ['punca'=> 'required',   ]);
      $this->validate($request, [ 'noPindah'=> 'required',   ]);
      $this->validate($request, [ 'noKorban'=> 'required',   ]);


    $KawasanBencana = KawasanBencana::findOrFail($id);
    $KawasanBencana->namaKawasan = $request->namaKawasan;
    $KawasanBencana->jenisBencana = $request->jenisBencana;
    $KawasanBencana->tarikhBerlaku = $request->tarikhBerlaku;
    $KawasanBencana->punca = $request->punca;
    $KawasanBencana->noPindah = $request->noPindah;
    $KawasanBencana->noKorban = $request->noKorban;

    $KawasanBencana->user_id = Auth::user()->id;
    $KawasanBencana->save();

     return redirect()->action('KawasanBencanasController@create')->withMessage('Kawasan Bencana telah dikemaskini');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $KawasanBencana = KawasanBencana::findOrFail($id);
      $KawasanBencana->delete();
      return back()->withError('Kawasan Bencana telah dipadam');
    }
}
