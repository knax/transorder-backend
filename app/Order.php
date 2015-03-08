<?php namespace Transorder;

use Illuminate\Database\Eloquent\Model;

/**
 * Transorder\Order
 *
 * @property integer $id 
 * @property integer $amount 
 * @property boolean $isSent 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property integer $user_id 
 * @property integer $product_id 
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Order whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Order whereAmount($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Order whereIsSent($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Order whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Order whereProductId($value)
 */
class Order extends Model {

    public $table = 'orders';

}
