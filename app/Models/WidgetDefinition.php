<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\WidgetDefinition
 *
 * @property integer $widget_id
 * @property string $widget_title
 * @property string $widget
 * @property string $base_dimensions
 * @method static \Illuminate\Database\Query\Builder|\App\Models\WidgetDefinition whereWidgetId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\WidgetDefinition whereWidgetTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\WidgetDefinition whereWidget($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\WidgetDefinition whereBaseDimensions($value)
 * @mixin \Eloquent
 */
class WidgetDefinition extends Model
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
