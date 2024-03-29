<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table      = 'provincias';
    protected $primaryKey = 'provincia_id';
    protected $fillable = [
        'provincia_nombre',

        'region_id',
    ];
    public $timestamps = false;

    #hasMany's



    #belongsTo's
    public function region () {
        return $this->belongsTo(Region::class, 'id_region');
    }
}
