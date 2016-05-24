<?php

namespace SATIS;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'nocta','nombre','id_deleg','id_plantel','grupo','cveprograma',
    ];

}
