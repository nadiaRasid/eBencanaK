<?php

namespace App\Http\Controllers;
use App\LaporKehilangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaporKehilangansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('LaporKehilangan.index', compact('lapor_kehilangans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $lapor_kehilangans = LaporKehilangan::with('user')->paginate(5);
          return view('LaporKehilangan.create', compact('lapor_kehilangans'));
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
      $this->validate($request, ['namaMangsa'=> 'required',   ]);
      $this->validate($request, [ 'alamatMangsa'=> 'required',   ]);
      $this->validate($request, ['phoneMangsa'=> 'required',   ]);
      $this->validate($request, [ 'tarikhHilang'=> 'required',   ]);

    $LaporKehilangan= new LaporKehilangan;
    $LaporKehilangan->jenisBencana = $request->jenisBencana;
    $LaporKehilangan->namaMangsa = $request->namaMangsa;
    $LaporKehilangan->alamatMangsa = $request->alamatMangsa;
    $LaporKehilangan->phoneMangsa = $request->phoneMangsa;
    $LaporKehilangan->tarikhHilang = $request->tarikhHilang;
    $LaporKehilangan->user_id = Auth::user()->id;
    $LaporKehilangan->save();

     return redirect()->action('LaporKehilangansController@store')->withMessage('Laporan Kehilangan Mangsa telah dihantar');
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
      $LaporKehilangan = LaporKehilangan::findOrFail($id);
      return view('LaporKehilangan.edit', compact('LaporKehilangan'));
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
      $this->validate($request, ['namaMangsa'=> 'required',   ]);
      $this->validate($request, [ 'alamatMangsa'=> 'required',   ]);
      $this->validate($request, ['phoneMangsa'=> 'required',   ]);
      $this->validate($request, [ 'tarikhHilang'=> 'required',   ]);

      $LaporKehilangan = LaporKehilangan::findOrFail($id);
      $LaporKehilangan->jenisBencana = $request->jenisBencana;
      $LaporKehilangan->namaMangsa = $request->namaMangsa;
      $LaporKehilangan->alamatMangsa = $request->alamatMangsa;
      $LaporKehilangan->phoneMangsa = $request->phoneMangsa;
      $LaporKehilangan->tarikhHilang = $request->tarikhHilang;
      $LaporKehilangan->user_id = Auth::user()->id;
      $LaporKehilangan->save();

      return redirect()->action('LaporKehilangansController@create')->withMessage('Laporan Kehilangan Mangsa telah dikemaskini');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
