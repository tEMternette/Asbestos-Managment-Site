<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Premises extends Model
{
    //
    protected $table = 'Premises';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'premisesID', 'siteID', 'userID', 'orgID', 'premisesAdr',
    ];

   /* protected $guarded = [
        'userID',  'certExpiry',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function org()
    {
        return $this->belongsTo(Organisation::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public $timestamps = false;
}
