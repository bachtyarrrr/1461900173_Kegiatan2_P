<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class NurmansyahController extends Controller
{
    public function anggota()
    {
    	$anggota = DB::table('anggota')->get();
    	return view('anggota0173',['anggota' => $anggota]);
    }
    public function home()
    {
        return view('home0173');
    }
    public function like()
    {
        $like = DB::table('anggota','LIKE',"%e%")->get();
        return view('like0173',['like' => $like]);
    }
}