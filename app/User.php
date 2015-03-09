<?php namespace Transorder;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

/**
 * Transorder\User
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $type
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Transorder\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\User whereUsername($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\User whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\User whereUpdatedAt($value)
 */
class User extends Model implements AuthenticatableContract
{

    use Authenticatable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'username', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
}
