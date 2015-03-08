<?php namespace Transorder;

use Illuminate\Database\Eloquent\Model;

/**
 * Transorder\UserDetail
 *
 * @property integer $id 
 * @property string $name 
 * @property string $address 
 * @property string $telephone 
 * @property string $email 
 * @property string $photo 
 * @property integer $balance 
 * @property integer $user_id 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @method static \Illuminate\Database\Query\Builder|\Transorder\UserDetail whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\UserDetail whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\UserDetail whereAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\UserDetail whereTelephone($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\UserDetail whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\UserDetail wherePhoto($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\UserDetail whereBalance($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\UserDetail whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\UserDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\UserDetail whereUpdatedAt($value)
 */
class UserDetail extends Model {

    public $table = 'user_details';

}
