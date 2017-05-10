<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $table = 'house';
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
    protected $fillable = ['house_no','name','description','user_id', 'owner_id', 'address_id' ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
