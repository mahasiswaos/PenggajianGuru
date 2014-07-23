<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Dataguru;
use View;
use Illuminate\Support\Facades\Redirect;
use Input;



class DataguruController extends BaseController{
    
    public function view(){
        $t = Dataguru::paginate(4);
        $data = array (
            'dataguru' => $t,
    );
        return View::make('dataguru.view',$data);
    }
    public function add(){
        return View::make('dataguru.add');
    }
    public function addProses(){
        $in = Input::all();
        $t  = new Dataguru();
        $t->nip  = $in['nip'];
        $t->nama = $in['nama'];
        $t->jk   = $in['jk'];
        $t->jabatan = $in['jabatan'];
        $t->alamat  = $in['alamat'];
        $t->no_telp = $in['notelp'];
        $t->save();
        
        return Redirect::to('/dataguru');    
    }
     public function edit($id){
        $t = Dataguru::find($id);
        $data = array (
            'dataguru'=>$t,
        );
        return View::make('dataguru.edit',$data); 
    }
    public function editProses(){
        
        $in = Input::all();
        $t = Dataguru::find($in['id']);
        $t->nip      = $in['nip'];
        $t->nama     = $in['nama'];
        $t->jk       = $in['jk'];
        $t->jabatan  = $in['jabatan'];
        $t->alamat   = $in['alamat'];
        $t->no_telp  = $in['notelp'];
        $t->update();
        
        return Redirect::to('/dataguru');    
        
    }
    public function delete($id){
       $t = Dataguru::find($id);
       $t->delete();
       return Redirect::to('/dataguru');
    }
}
