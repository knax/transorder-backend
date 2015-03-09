<?php namespace Transorder;

use Illuminate\Database\Eloquent\Model;

/**
 * Transorder\Info
 *
 * @property integer $id
 * @property string $type
 * @property string $value
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Info whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Info whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Info whereValue($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Info whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Transorder\Info whereUpdatedAt($value)
 */
class Info extends Model
{

    public $table = 'info';
}
