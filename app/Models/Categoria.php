<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    use SoftDeletes;

    protected $table = 'categorias';

    protected $fillable = [
        'empresa_id',
        'nome',
        'icone',
    ];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
}
