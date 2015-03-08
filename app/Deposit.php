<?php namespace Transorder;

use Illuminate\Database\Eloquent\Model;

/**
 * Transorder\Deposit
 *
 * @property integer $id 
 * @property string $bank_type 
 * @property string $account_number 
 * @property string $account_name 
 * @property integer $amount 
 * @property string $description 
 * @property boolean $isApproved 
 * @property integer $user_detail_id 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Deposit whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Deposit whereBankType($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Deposit whereAccountNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Deposit whereAccountName($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Deposit whereAmount($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Deposit whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Deposit whereIsApproved($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Deposit whereUserDetailId($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Deposit whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Deposit whereUpdatedAt($value)
 */
class Deposit extends Model {

    public $table = 'deposits';

}
