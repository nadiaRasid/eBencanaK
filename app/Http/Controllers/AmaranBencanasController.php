<?php

namespace App\Http\Controllers;
use App\AmaranBencana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class AmaranBencanasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('AmaranBencana.index', compact('amaran_bencanas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $amaran_bencanas = AmaranBencana::with('user')->where('user_id', Auth::user()->id)->paginate(5);
          return view('AmaranBencana.create', compact('amaran_bencanas'));
    }

    public function noti()
    {
      $amaran_bencanas = AmaranBencana::with('user')->where('is_published', true)->paginate(5);
          return view('AmaranBencana.noti', compact('amaran_bencanas'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, ['tajuk' => 'required',   ]);
      $this->validate($request, ['sumber'=> 'required',   ]);
      $this->validate($request, [ 'berita'=> 'required|max:10000',   ]);
      $this->validate($request, ['tarikhLaporan'=> 'required',   ]);
      $this->validate($request, [ 'tarikhKemaskini'=> 'required',   ]);

    $AmaranBencana= new AmaranBencana;
    $AmaranBencana->tajuk = $request->tajuk;
    $AmaranBencana->sumber = $request->sumber;
    $AmaranBencana->berita = $request->berita;
    $AmaranBencana->tarikhLaporan = $request->tarikhLaporan;
    $AmaranBencana->tarikhKemaskini = $request->tarikhKemaskini;

    $AmaranBencana->user_id = Auth::user()->id;
    $AmaranBencana->save();

     return redirect()->action('AmaranBencanasController@store')->withMessage('Amaran Bencana telah dihantar');
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
      $AmaranBencana = AmaranBencana::findOrFail($id);
      return view('AmaranBencana.edit', compact('AmaranBencana'));
    }

    public function details($id)
    {
      $AmaranBencana = AmaranBencana::findOrFail($id);
      return view('AmaranBencana.details', compact('AmaranBencana'));
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
      $this->validate($request, ['tajuk' => 'required',   ]);
      $this->validate($request, ['sumber'=> 'required',   ]);
      $this->validate($request, [ 'berita'=> 'required',   ]);
      $this->validate($request, ['tarikhLaporan'=> 'required',   ]);
      $this->validate($request, [ 'tarikhKemaskini'=> 'required',   ]);


      $AmaranBencana = AmaranBencana::findOrFail($id);
      $AmaranBencana->tajuk = $request->tajuk;
      $AmaranBencana->sumber = $request->sumber;
      $AmaranBencana->berita = $request->berita;
      $AmaranBencana->tarikhLaporan = $request->tarikhLaporan;
      $AmaranBencana->tarikhKemaskini = $request->tarikhKemaskini;

      $AmaranBencana->user_id = Auth::user()->id;
      $AmaranBencana->save();

      return redirect()->action('AmaranBencanasController@create')->withMessage('Amaran Bencana telah dikemaskini');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $AmaranBencana = AmaranBencana::findOrFail($id);
      $AmaranBencana->delete();
      return back()->withError('Amaran Bencana telah dipadam');
    }

    /**
     *
     */
    public function published($id)
    {
      $amaranBencana = AmaranBencana::findOrFail($id);

      $amaranBencana->is_published = $amaranBencana->is_published == true ? false : true ;

      $amaranBencana->save();

      return back();
    }
}
