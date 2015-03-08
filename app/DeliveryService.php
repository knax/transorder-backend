<?php namespace Transorder;

use Illuminate\Database\Eloquent\Model;

/**
 * Transorder\DeliveryService
 *
 * @property integer $id 
 * @property string $name 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @method static \Illuminate\Database\Query\Builder|\Transorder\DeliveryService whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\DeliveryService whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\DeliveryService whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\DeliveryService whereUpdatedAt($value)
 */
class DeliveryService extends Model {

    public $table = 'delivery_services';

}
