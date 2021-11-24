<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Clase
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Maestro[] $maestros
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Clase extends Model
{
    
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function maestros()
    {
        return $this->hasMany('App\Models\Maestro', 'clase_id', 'id');
    }
    

}
