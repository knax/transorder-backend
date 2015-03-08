<?php namespace Transorder;

use Illuminate\Database\Eloquent\Model;

/**
 * Transorder\ColorAvailable
 *
 * @property integer $id 
 * @property string $name 
 * @property integer $stock 
 * @property integer $product_id 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @method static \Illuminate\Database\Query\Builder|\Transorder\ColorAvailable whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\ColorAvailable whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\ColorAvailable whereStock($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\ColorAvailable whereProductId($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\ColorAvailable whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\ColorAvailable whereUpdatedAt($value)
 */
class ColorAvailable extends Model {

    public $table = 'colors_available';

    public $hidden = ['created_at', 'updated_at', 'product_id'];
}
