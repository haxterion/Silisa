<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KlasemenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	$klasemen = DB::table('tim')
    		->orderBy('total', 'desc')
            ->get();
        return view('klasemen.index',['klasemen' => $klasemen]);
    }
}
