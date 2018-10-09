<?php

namespace App\Models\Irtama;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class RikturiksusTerperiksa extends Authenticatable
{
    /* @author : Daniel Andi */

    use Notifiable;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $primaryKey = 'id_terperiksa';
    protected $table      = 'irtama_rikturiksus_terperiksa';
    public $timestamps    = false;
    protected $guarded    = ['id_terperiksa'];

}
