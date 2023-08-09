<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Insercione
 *
 * @property $id
 * @property $noticia
 * @property $informacion
 * @property $datos
 * @property $fecha
 * @property $extra
 * @property $foto
 * @property $direccion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Insercione extends Model
{
    
    static $rules = [
		'noticia' => 'required',
		'informacion' => 'required',
		'datos' => 'required',
		'fecha' => 'required',
		'extra' => 'required',
		'foto' => 'required',
		'direccion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['noticia','informacion','datos','fecha','extra','foto','direccion'];



}
