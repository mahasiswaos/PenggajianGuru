<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Datakerja extends Eloquent {

    protected $table = 'datakerja';
    public $timestamps = false;

    public function penerimaangaji() {
        return $this->hasMany("App\\Models\\Penerimaangaji");
    }

}
