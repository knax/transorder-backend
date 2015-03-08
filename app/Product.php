<?php namespace Transorder;

use Illuminate\Database\Eloquent\Model;

/**
 * Transorder\Product
 *
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property string $description
 * @property integer $price
 * @property string $photo
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Product whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Product whereCode($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Product whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Product whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Product wherePrice($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Product wherePhoto($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Product whereUpdatedAt($value)
 */
class Product extends Model {

	public $table = 'products';

    public $hidden = ['created_at', 'updated_at'];

    public function colors()
    {
        return $this->hasMany('Transorder\ColorAvailable', 'product_id', 'id');
    }
}
