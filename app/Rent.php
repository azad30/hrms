<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rents';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['start_date', 'end_date', 'owner_approve', 'renter_approve', 'admin_approve', 'renter_id', 'flat_id', 'user_id'];

    public function flat()
    {
        return $this->belongsTo('App\Flat');
    }
    public function renter()
    {
        return $this->belongsTo('App\User', 'renter_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
