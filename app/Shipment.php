<?php namespace Transorder;

use Illuminate\Database\Eloquent\Model;

/**
 * Transorder\Shipment
 *
 * @property integer $id
 * @property string $receiver_name
 * @property string $receiver_address
 * @property integer $total_price
 * @property string $status
 * @property integer $delivery_service_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Shipment whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Shipment whereReceiverName($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Shipment whereReceiverAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Shipment whereTotalPrice($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Shipment whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Shipment whereDeliveryServiceId($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Shipment whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Shipment whereUpdatedAt($value)
 */
class Shipment extends Model
{

    public $table = 'shipments';
}
