<?php

namespace App\Models\Dayamas;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class TesUjiNarkoba extends Authenticatable
{
    /* @author : Daniel Andi */

    use Notifiable;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $primaryKey = 'peserta_id';
    protected $table      = 'dayamas_tes_uji_narkoba';
    public $timestamps    = false;
    protected $guarded    = ['peserta_id'];

}
