<?php

namespace App\Models\Huker\Perka;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Harmonisasi extends Authenticatable
{
    /* @author : Daniel Andi */

    use Notifiable;
    protected $table      = 'huker_perka_harmonisasi';
    public $timestamps    = false;
    protected $guarded    = ['id'];

}
