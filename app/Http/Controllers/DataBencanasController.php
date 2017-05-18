<?php

namespace App\Http\Controllers;
use App\DataBencana;
use App\LaporKehilangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class DataBencanasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('DataBencana.index', compact('data_bencanas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $searchResults =Input::get('search');
       $data_bencanas = DataBencana::where('namaMangsa','like','%'.$searchResults.'%')->paginate(5);
      //  ->orWhere('jenisBencana', 'like', "%" .$searchResults . "%")

       return view('DataBencana.create', compact('data_bencanas'));
    }

    public function maklumat()
    {
       $searchResults =Input::get('search');
       $data_bencanas = DataBencana::where('namaMangsa','like','%'.$searchResults.'%')->paginate(5);
       $lapor_kehilangans= LaporKehilangan::where('namaMangsa','like','%'.$searchResults.'%')->paginate(5);
       return view('DataBencana.maklumat', compact('data_bencanas','lapor_kehilangans'));
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
      $this->validate($request, [ 'ic'=> 'required',   ]);
      $this->validate($request, [ 'umur'=> 'required',   ]);
      $this->validate($request, [ 'bangsa'=> 'required',   ]);
      $this->validate($request, [ 'alamatMangsa'=> 'required',   ]);
      $this->validate($request, ['phoneMangsa'=> 'required',   ]);
      $this->validate($request, [ 'tarikh'=> 'required',   ]);
      $this->validate($request, [ 'status'=> 'required',   ]);
      $this->validate($request, [ 'namaPusat'=> 'required',   ]);

      $DataBencana= new DataBencana;
      $DataBencana->jenisBencana = $request->jenisBencana;
      $DataBencana->namaMangsa = $request->namaMangsa;
      $DataBencana->ic = $request->ic;
      $DataBencana->umur = $request->umur;
      $DataBencana->bangsa = $request->bangsa;
      $DataBencana->alamatMangsa = $request->alamatMangsa;
      $DataBencana->phoneMangsa = $request->phoneMangsa;
      $DataBencana->tarikh = $request->tarikh;
      $DataBencana->status = $request->status;
      $DataBencana->namaPusat = $request->namaPusat;
      $DataBencana->user_id = Auth::user()->id;
      $DataBencana->save();

   return redirect()->action('DataBencanasController@store')->withMessage('Data Mangsa telah direkodkan');
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
      $DataBencana = DataBencana::findOrFail($id);
      return view('DataBencana.edit', compact('DataBencana'));
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
      $this->validate($request, [ 'alamatMangsa'=> 'required',   ]);
      $this->validate($request, ['phoneMangsa'=> 'required',   ]);
      $this->validate($request, [ 'tarikh'=> 'required',   ]);
      $this->validate($request, [ 'status'=> 'required',   ]);
      $this->validate($request, [ 'namaPusat'=> 'required',   ]);

      $DataBencana = DataBencana::findOrFail($id);
      $DataBencana->jenisBencana = $request->jenisBencana;
      $DataBencana->namaMangsa = $request->namaMangsa;
      $DataBencana->ic = $request->ic;
      $DataBencana->umur = $request->umur;
      $DataBencana->bangsa = $request->bangsa;
      $DataBencana->alamatMangsa = $request->alamatMangsa;
      $DataBencana->phoneMangsa = $request->phoneMangsa;
      $DataBencana->tarikh = $request->tarikh;
      $DataBencana->status = $request->status;
      $DataBencana->namaPusat = $request->namaPusat;
      $DataBencana->user_id = Auth::user()->id;
      $DataBencana->save();

   return redirect()->action('DataBencanasController@create')->withMessage('Data Mangsa Bencana telah dikemaskini');
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
       $DataBencana = DataBencana::findOrFail($id);
       $DataBencana->delete();
       return back()->withError(' Maklumat Mangsa telah berjaya dipadam');

     }
}
