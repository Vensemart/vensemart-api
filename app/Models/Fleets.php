<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $banner
 * @property string $description
 * @property string $fleet_number
 * @property string $location
 * @property string $name
 * @property string $next_maintenance
 * @property string $route
 * @property int    $created_at
 * @property int    $updated_at
 */
class Fleets extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fleets';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'agent_id', 'banner', 'business_id', 'created_at', 'description', 'fleet_number', 'location', 'name', 'next_maintenance', 'route', 'status', 'type_id', 'updated_at'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'banner' => 'string', 'created_at' => 'timestamp', 'description' => 'string', 'fleet_number' => 'string', 'location' => 'string', 'name' => 'string', 'next_maintenance' => 'string', 'route' => 'string', 'updated_at' => 'timestamp'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at', 'updated_at'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = true;

    // Scopes...

    // Functions ...

    // Relations ...
}
