<?php

namespace App\Models\Datin;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class TindaklanjutCallcenterBnnp extends Authenticatable
{
    /* @author : Daniel Andi */

    use Notifiable;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table      = 'datin_tindaklanjut_callcenter_bnnpbnnk';
    public $timestamps    = false;
    protected $guarded    = ['id'];

}
