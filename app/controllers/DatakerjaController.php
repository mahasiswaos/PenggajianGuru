<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Dataguru;
use App\Models\Datakerja;
use Input;
use View;
use Illuminate\Support\Facades\Redirect;

class DatakerjaController extends BaseController {

    public function view() {
        $t = Datakerja::paginate(3);
        $data = array(
            'datakerja' => $t,
        );
        return View::make('datakerja.view', $data);
    }

    public function add() {
        $dataguru =Dataguru ::all();
        $data = [
            'dataguru' => $dataguru,
        ];

        
        return View::make('datakerja.add', $data);
    }

    public function addProses() {
        $in = Input::all();
        $kerja = new Datakerja;
        $kerja->nip    = $in['nip'];
        $kerja->status = $in['status'];
        $kerja->jam_mengajar = $in['jam_mengajar'];
        $kerja->gaji   = $in['gaji'];
        $kerja->save();

        return Redirect::to('/datakerja');
    }

    public function edit($id) {
        $k = Datakerja::find($id);
        $dataguru = Dataguru::all();
        $data = [
            'dataguru'  => $dataguru,
            'datakerja' => $k,
        ];
        return View::make('datakerja.edit', $data);
    }
    
    public function editProses(){
        
           $in = Input::all();
           $kerja = Datakerja::find($in['id']);
           $kerja->nip     = $in['nip'];
           $kerja->status  = $in['status'];
           $kerja->jam_mengajar = $in['jam_mengajar'];
           $kerja->gaji    = $in['gaji'];
           $kerja->update();
        
        return Redirect::to('/datakerja');    
        
    }
    
    public function delete($id){
       $t = Datakerja::find($id);
       $t->delete();
       
       return Redirect::to('/datakerja');
    }

}
