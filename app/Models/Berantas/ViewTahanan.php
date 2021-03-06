<?php

namespace App\Models\Berantas;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class ViewTahanan extends Authenticatable
{
    /* @author : Daniel Andi */

    use Notifiable;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $primaryKey = 'tahanan_id';
    protected $table      = 'v_berantas_tahanan_wilayah';
    public $timestamps    = false;
    protected $guarded    = ['tahanan_id'];

}
