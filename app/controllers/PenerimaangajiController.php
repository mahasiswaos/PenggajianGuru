<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Penerimaangaji;
use App\Models\Dataguru;
use App\Models\Datakerja;
use Input;
use View;
use Redirect;

class PenerimaangajiController extends BaseController {

    public function view() {
        $t = Penerimaangaji::paginate(3);
        $data = array(
            'penerimaangaji' => $t,
        );
        return View::make('penerimaangaji.view', $data);
    }

    public function add() {
        $dataguru = Dataguru :: all();
        $data = ['dataguru' =>$dataguru];
    
        $datakerja = Datakerja :: all();
        $dt = ['datakerja' =>$datakerja];
        
        return View::make('penerimaangaji.add',$data,$dt);
        
    }

    public function addProses() {
      $in = Input ::all();
      $penggajian = new Penerimaangaji;
      $penggajian->dataguru_id  =$in['iddataguru'];
      $penggajian->datakerja_id =$in['iddatakerja'];
      $penggajian->tgl          =$in['tgl'];
      $penggajian->save();
      
      return redirect::to('/penerimaangaji');
      
    }

    public function edit($id) {
        $penerimaangaji = Penerimaangaji::find($id);
        $datakerja      = Datakerja::all();
        $data = [
            'datakerja'      => $datakerja,
            'penerimaangaji' => $penerimaangaji,
        ];
        return View::make('penerimaangaji.edit', $data);
    }
    
    public function editProses(){
        
           $in = Input::all();
           $penggajian = Penerimaangaji ::find($in['id']);
           $penggajian->datakerja_id  = $in['iddatakerja'];
           $penggajian->tgl           = $in['tgl'];
           $penggajian->update();
        
        return Redirect::to('/penerimaangaji');    
        
    }
    
    public function delete($id){
       $t = Penerimaangaji::find($id);
       $t-> delete();
       
       return Redirect::to('/penerimaaangaji');
    }

}
