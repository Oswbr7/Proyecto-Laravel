<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Alumno
 *
 * @property $id
 * @property $maestro_id
 * @property $nombre
 * @property $apellido_p
 * @property $apellido_m
 * @property $domicilio
 * @property $created_at
 * @property $updated_at
 *
 * @property Maestro $maestro
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Alumno extends Model
{
    
    static $rules = [
		'maestro_id' => 'required',
		'nombre' => 'required',
		'apellido_p' => 'required',
		'apellido_m' => 'required',
		'domicilio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['maestro_id','nombre','apellido_p','apellido_m','domicilio'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function maestro()
    {
        return $this->hasOne('App\Models\Maestro', 'id', 'maestro_id');
    }
    

}
