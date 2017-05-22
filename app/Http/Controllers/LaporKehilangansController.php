<?php

namespace App\Http\Controllers;
use App\LaporKehilangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class LaporKehilangansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  $lapor_kehilangans = LaporKehilangan::with('user')->paginate(5);
        return view('LaporKehilangan.index', compact('lapor_kehilangans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $lapor_kehilangans = LaporKehilangan::with('user')->where('user_id', Auth::user()->id)
        ->orderBy('tarikhHilang', 'DESC')->paginate(5);
      // dd($lapor_kehilangans);
          return view('LaporKehilangan.create', compact('lapor_kehilangans'));
          //$pendaftarans = Pendaftaran::with('user')->where('user_id', Auth::user()->id)->paginate(5);
    }

    public function semakan()
    {
      $lapor_kehilangans = LaporKehilangan::with('user')->where('user_id', Auth::user()->id)
        ->orderBy('tarikhHilang', 'DESC')->paginate(5);
          return view('LaporKehilangan.semakan', compact('lapor_kehilangans'));
    }

    public function store(Request $request)
    {
      $this->validate($request, ['jenisBencana' => 'required',   ]);
      $this->validate($request, ['namaMangsa'=> 'required',   ]);
      $this->validate($request, ['ic' => 'required',  ]);
      $this->validate($request, ['umur'=> 'required',   ]);
      $this->validate($request, ['bangsa'=> 'required',   ]);
      $this->validate($request, [ 'alamatMangsa'=> 'required',   ]);
      $this->validate($request, ['phoneMangsa'=> 'required',   ]);
      $this->validate($request, [ 'tarikhHilang'=> 'required',   ]);
      $this->validate($request, [ 'status']);
      $this->validate($request, [ 'namaPusat']);

    $LaporKehilangan= new LaporKehilangan;
    $LaporKehilangan->jenisBencana = $request->jenisBencana;
    $LaporKehilangan->namaMangsa = $request->namaMangsa;
    $LaporKehilangan->ic = $request->ic;
    $LaporKehilangan->umur = $request->umur;
    $LaporKehilangan->bangsa = $request->bangsa;
    $LaporKehilangan->alamatMangsa = $request->alamatMangsa;
    $LaporKehilangan->phoneMangsa = $request->phoneMangsa;
    $LaporKehilangan->tarikhHilang = $request->tarikhHilang;
    // $LaporKehilangan->status = $request->status;
    $LaporKehilangan->namaPusat = $request->namaPusat;

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
      // dd($id);
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
      $this->validate($request, ['ic'=> 'required',   ]);
      $this->validate($request, ['umur'=> 'required',   ]);
      $this->validate($request, ['bangsa'=> 'required',   ]);
      $this->validate($request, ['alamatMangsa'=> 'required',   ]);
      $this->validate($request, ['phoneMangsa'=> 'required',   ]);
      $this->validate($request, ['tarikhHilang'=> 'required',   ]);

      $LaporKehilangan = LaporKehilangan::findOrFail($id);
      $LaporKehilangan->jenisBencana = $request->jenisBencana;
      $LaporKehilangan->namaMangsa = $request->namaMangsa;
      $LaporKehilangan->ic = $request->ic;
      $LaporKehilangan->umur = $request->umur;
      $LaporKehilangan->bangsa = $request->bangsa;
      $LaporKehilangan->alamatMangsa = $request->alamatMangsa;
      $LaporKehilangan->phoneMangsa = $request->phoneMangsa;
      $LaporKehilangan->tarikhHilang = $request->tarikhHilang;
      $LaporKehilangan->user_id = Auth::user()->id;
      $LaporKehilangan->save();

   return redirect()->action('LaporKehilangansController@create')->withMessage('Data Mangsa Bencana telah dikemaskini');



}
public function lapor()
{
  $searchResults =Input::get('search');
  $lapor_kehilangans = LaporKehilangan::with('user')->where('jenisBencana','like','%'.$searchResults.'%')
    ->orderBy('tarikhHilang', 'DESC')->paginate(7);
  return view('LaporKehilangan.lapor', compact('lapor_kehilangans'));
}

    public function edit2($id)
    {
      $LaporKehilangan = LaporKehilangan::findOrFail($id);
      return view('LaporKehilangan.edit2', compact('LaporKehilangan'));
    }


    public function simpan(Request $request, $id)
    {

      $this->validate($request, [ 'status']);
      $this->validate($request, [ 'namaPusat']);

      $LaporKehilangan = LaporKehilangan::findOrFail($id);
      $LaporKehilangan->status = $request->status;
      $LaporKehilangan->namaPusat = $request->namaPusat;
      $LaporKehilangan->save();

      return redirect()->action('LaporKehilangansController@lapor')->withMessage('Laporan Kehilangan Mangsa telah dikemaskini');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $LaporKehilangan = LaporKehilangan::findOrFail($id);
      $LaporKehilangan->delete();
      return back()->withError('Laporan Kehilangan Mangsa telah dipadam');

    }
}
