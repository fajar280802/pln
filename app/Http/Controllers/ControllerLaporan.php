<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class ControllerLaporan extends Controller
{
    public function input(request $request) 
    {
       return view('welcome'); 
    }
    


function add(Request $request){
    $request->validate([
    'nama'=>'required',
    'jabatan'=> 'required',
    'nama_pengisi'=> 'required',
]);
$query = DB::table('kuesioners')->insert([
    'nama_pengisi'=> $request->input('nama_pengisi'),
    'nama'=> $request->input('nama'),
    'rating'=> $request->input('rating'),
    'tanggal'=> $request->input('tanggal'),

]);
$query = DB::table('pengaduans')->insert([
    'pengaduan'=> $request->input('pengaduan'),
   ]);
if($query){
    return back()->with('success','sukses bro');
}else{
    return back()->with('error','check your code');}
}
}