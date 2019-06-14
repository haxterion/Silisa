<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PertandinganController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	$pertandingan = DB::table('pertandingan')
            ->join('tim', 'pertandingan.tim_a', '=', 'tim.id')
			->select('pertandingan.*', 'tim.nama_tim')
            ->orderBy('pertandingan.id', 'desc')
            ->get();
        return view('pertandingan.index',['pertandingan' => $pertandingan]);
    }

    public function tambah($id)
    {
    	$timtamu = DB::table('tim')->get();
    	$tim = DB::table('tim')->where('id', $id)->get();
    	return view('pertandingan.tambah')->with(compact('timtamu','tim'));
    }

    public function store(Request $request)
    {
    	$tgl = date('Y-m-d');
    	DB::table('pertandingan')->insert([
        'tim_a' => $request->tim_a,
        'tim_b' => $request->tim_b,
        'skor_tim_a' => $request->skor_tim_a,
        'skor_tim_b' => $request->skor_tim_b,
        'tgl_pertandingan' => $tgl,
    ]);
    	$skora = $request->skor_tim_a;
    	$skorb = $request->skor_tim_b;
    	if ($skora > $skorb){ 
    		DB::table('tim')->where('id', $request->tim_a)->update([
    			'menang' => +1,
    			'total' => +3,
    		]);
    		}elseif ($skora == $skorb) {
    			DB::table('tim')->where('id', $request->tim_a)->update([
    			'imbang' => +1,
    			'total' => +1,	
    		]);
    		}elseif ($skora < $skorb) {
    			DB::table('tim')->where('id', $request->tim_a)->update([
    				'kalah' => +1,
    			]);
    		}elseif ($skorb > $skora){ 
    		DB::table('tim')->where('id', $request->tim_b)->update([
    			'menang' => +1,
    			'total' => +3,
    		]);
    		}elseif ($skorb == $skora) {
    			DB::table('tim')->where('id', $request->tim_b)->update([
    			'imbang' => +1,
    			'total' => +1,	
    		]);
    		}else{
    			DB::table('tim')->where('id', $request->tim_b)->update([
    				'kalah' => +1,
    			]);
    		}
    	return redirect('/pertandingan');
    }
}
