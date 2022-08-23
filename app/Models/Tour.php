<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tour
 *
 * @property $id
 * @property $categoria_id
 * @property $nombre_tour
 * @property $lugar_tour
 * @property $recomendacion
 * @property $numero_de_personas
 * @property $fecha_tour
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tour extends Model
{
    
    static $rules = [
		'categoria_id' => 'required',
		'nombre_tour' => 'required',
		'lugar_tour' => 'required',
		'recomendacion' => 'required',
		'numero_de_personas' => 'required',
		'fecha_tour' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['categoria_id','nombre_tour','lugar_tour','recomendacion','numero_de_personas','fecha_tour'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'categoria_id');
    }
    

}
