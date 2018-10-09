<?php

namespace App\Models\Datin;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Callcenter extends Authenticatable
{
    /* @author : Daniel Andi */

    use Notifiable;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table      = 'datin_callcenter';
    public $timestamps    = true;
    protected $guarded    = ['id'];

}
