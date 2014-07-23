<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Penerimaangaji extends Eloquent {

    protected $table   = 'penerimaangaji';
    public $timestamps = false;

    public function dataguru() {
        return $this->belongsTo("App\\Models\\Dataguru");
    }

    public function kerja() {
        return $this->belongsTo("App\\Models\\Datakerja");
    }

}
