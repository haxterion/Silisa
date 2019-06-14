<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // mengambil data dari table 
        $tim = DB::table('tim')->get();
 
        // mengirim data  ke view index
        return view('tim.index',['tim' => $tim]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
       return view('tim.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
      'logo'  => 'required'
     ]);
        $image = $request->file('logo');
     $new_name = rand() . '.' . $image->getClientOriginalExtension();
     $image->move(public_path('images'), $new_name);
        DB::table('tim')->insert([
        'nama_tim' => $request->nama_tim,
        'logo' => $new_name,
    ]);
        return redirect('/tim');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function squad($id)
    {
        $squad = DB::table('squad')
            ->join('tim', 'squad.tim', '=', 'tim.id')
            ->select('squad.*', 'tim.nama_tim')
            ->where('squad.tim',$id)
            ->get();
        return view('tim.squad',['squad' => $squad]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tim = DB::table('tim')->where('id',$id)->get();
        return view('tim.edit',['tim' => $tim]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
      'logo'  => 'required'
     ]);
        $image = $request->file('logo');
     $new_name = rand() . '.' . $image->getClientOriginalExtension();
     $image->move(public_path('images'), $new_name);
        DB::table('tim')->where('id',$request->id)->update([
            'nama_tim' => $request->nama_tim,
            'logo' => $new_name,
        ]);
        return redirect('/tim');
    }

    public function squadtambah()
    {
     $tim = DB::table('tim')->get();
 
        // mengirim data  ke view index
        return view('tim.squad-tambah',['tim' => $tim]);
    }

    public function squadstore(Request $request)
    {
        DB::table('squad')->insert([
        'nama' => $request->nama,
        'no_punggung' => $request->no_punggung,
        'tim' => $request->tim,
    ]);
        return redirect('/tim');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
        DB::table('tim')->where('id', $id)->delete();
        return redirect('/tim');
    }
}
