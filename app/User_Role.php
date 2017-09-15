<?php
/**
 * Created by PhpStorm.
 * User: PACER 23
 * Date: 7/9/2017
 * Time: 3:52 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Role extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_roles';

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
    protected $fillable = ['user_id', 'role_id'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function user_role()
    {
        return $this->hasOne('App\Role','id');
    }
}