<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Video
 *
 * @property $id
 * @property $nombre
 * @property $categoria
 * @property $vistas
 * @property $posicion
 * @property $descripcion
 * @property $imagen
 * @property $video
 * @property $ruta
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Video extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'categoria' => 'required',
		'vistas' => 'required',
		'posicion' => 'required',
		'descripcion' => 'required',
		'imagen' => 'required',
		'video' => 'required',
		'ruta' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','categoria','vistas','posicion','descripcion','imagen','video','ruta'];



}
