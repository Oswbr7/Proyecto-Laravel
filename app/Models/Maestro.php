<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Maestro
 *
 * @property $clase_id
 * @property $id
 * @property $nombre
 * @property $apellido_p
 * @property $apellido_m
 * @property $domicilio
 * @property $horario
 * @property $created_at
 * @property $updated_at
 *
 * @property Clase $clase
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Maestro extends Model
{
    
    static $rules = [
		'clase_id' => 'required',
		'nombre' => 'required',
		'apellido_p' => 'required',
		'apellido_m' => 'required',
		'domicilio' => 'required',
		'horario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['clase_id','nombre','apellido_p','apellido_m','domicilio','horario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function clase()
    {
        return $this->hasOne('App\Models\Clase', 'id', 'clase_id');
    }
    

}
