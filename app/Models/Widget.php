<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Widgets
 *
 * @property integer $widget_id
 * @property string $widget_title
 * @property string $widget
 * @property string $base_dimensions
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Widget whereWidgetId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Widget whereWidgetTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Widget whereWidget($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Widget whereBaseDimensions($value)
 * @mixin \Eloquent
 */
class Widget extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'widgets';
    /**
     * The primary key column name.
     *
     * @var string
     */
    protected $primaryKey = 'widget_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['widget_title', 'widget', 'base_dimensions'];
}
