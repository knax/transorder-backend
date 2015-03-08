<?php namespace Transorder;

use Illuminate\Database\Eloquent\Model;

/**
 * Transorder\Withdrawal
 *
 * @property integer $id 
 * @property string $for 
 * @property integer $amount 
 * @property integer $user_detail_id 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Withdrawal whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Withdrawal whereFor($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Withdrawal whereAmount($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Withdrawal whereUserDetailId($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Withdrawal whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Withdrawal whereUpdatedAt($value)
 */
class Withdrawal extends Model {

    public $table = 'withdrawals';

}
