<?php

namespace App\Models\Rehab;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ViewPascaKlienHeader extends Authenticatable
{
    /* @author : Daniel Andi */

    use Notifiable;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $primaryKey = 'id_header';
    protected $table      = 'v_rehab_pasca_klien_header';
    public $timestamps    = false;
    protected $guarded    = ['id_header'];

}
