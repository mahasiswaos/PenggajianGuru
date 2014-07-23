<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Dataguru extends Eloquent {

    protected $table = 'dataguru';
    public $timestamps = false;

    public function penerimaangaji() {
        return $this->hasMany("App\\Models\\Penerimaangaji");
    }

}
