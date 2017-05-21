<?php

namespace App\Http\Controllers;

use App\KawasanBencana;
use App\User;
use Charts;
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
     * Show the form for creating a new rejenisBencana.
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
        $kawasan_bencanas = KawasanBencana::with('user')->where('is_published', true)->paginate(5);
        // $searchResults =Input::get('search');
        // $kawasan_bencanas = KawasanBencana::where('namaKawasan','like','%'.$searchResults.'%')->paginate(5);
        return view('KawasanBencana.notifikasi', compact('kawasan_bencanas'));
      }

    /**
     * Store a newly created rejenisBencana in storage.
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
     * Display the specified rejenisBencana.
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
     * Remove the specified rejenisBencana from storage.
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

    public function published($id)
    {
      $KawasanBencana = KawasanBencana::findOrFail($id);

      $KawasanBencana->is_published = $KawasanBencana->is_published == true ? false : true ;

      $KawasanBencana->save();

      return back();
    }

    public function pieChart()
    {
      $KawasanBencana=KawasanBencana::selectRaw('count(jenisBencana) as count,jenisBencana')->groupBy('jenisBencana')->get();
      $kawasan_bencanas=array();
      foreach ($KawasanBencana as $result) {
          $kawasan_bencanas[$result->jenisBencana]=(int)$result->count;
      }

       return view('statistic',compact('kawasan_bencanas'));
   }

   public function barChart()
   {
     $chart1 = Charts::database(KawasanBencana::all(), 'bar', 'highcharts')
        ->title("Statistik Bencana Setiap Bulan 2017")
        ->elementLabel("Jenis Bencana")
        ->dimensions(1000, 500)
        ->responsive(false)
        ->groupByMonth('2017',true);

        $chart2 = Charts::database(KawasanBencana::all(), 'bar', 'highcharts')
           ->title("Statistik Bencana")
           ->elementLabel("Jenis Bencana")
           ->dimensions(1000, 500)
           ->responsive(false)
          ->groupBy('jenisBencana');

        return view('/statistic2', ['chart1' => $chart1], ['chart2' => $chart2]);

      }
}
