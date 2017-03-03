<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UsersWidgets
 *
 * @property integer $user_widget_id
 * @property integer $user_id
 * @property integer $widget_id
 * @property boolean $col
 * @property boolean $row
 * @property boolean $size_x
 * @property boolean $size_y
 * @property string $title
 * @property boolean $refresh
 * @property string $settings
 * @property integer $dashboard_id
 * @property-read \App\Models\User $user
 * @property-read \App\Models\WidgetDefinition $widget
 * @property-read \App\Models\Dashboard $dashboard
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Widget whereUserWidgetId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Widget whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Widget whereWidgetId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Widget whereCol($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Widget whereRow($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Widget whereSizeX($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Widget whereSizeY($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Widget whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Widget whereRefresh($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Widget whereSettings($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Widget whereDashboardId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Widget getSettings($request)
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
    protected $table = 'users_widgets';
    /**
     * The primary key column name.
     *
     * @var string
     */
    protected $primaryKey = 'user_widget_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['widget_id', 'col', 'row', 'size_x', 'size_y', 'title', 'refresh', 'settings'];

    // ---- Accessors/Mutators ----

    /**
     * @param string $settings
     * @return array
     */
    public function getSettingsAttribute($settings)
    {
        return json_decode($settings);
    }

    /**
     * @param array $settings
     * @return string
     */
    public function gstSettingsAttribute($settings)
    {
        return json_encode($settings);
    }

    // ---- Query scopes ----

    public function scopeGetSettings($query, $request)
    {
        return $query->where([
            ['user_widget_id', '=', $request->id],
            ['user_id', '=', $request->user()->user_id]
        ])->select('settings');
    }

    // ---- Define Relationships ----

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    /**
     * Returns the base widget definition
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function widget()
    {
        return $this->hasOne('App\Models\Widget', 'widget_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dashboard()
    {
        return $this->belongsTo('App\Models\Dashboard', 'dashboard_id');
    }
}
