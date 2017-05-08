<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address_type extends Model
{
    protected $table = 'Address_type';
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
    protected $fillable = ['name'];
}
