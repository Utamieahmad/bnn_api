<?php

namespace App\Models\Huker;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class KerjasamaLuarnegeri extends Authenticatable
{
    /* @author : Daniel Andi */

    use Notifiable;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table      = 'hukerkerjasama_luarnegeri';
    public $timestamps    = false;
    protected $guarded    = ['id'];

}
