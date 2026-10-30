<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    use SoftDeletes;

    protected $table = 'produtos';

    protected $fillable = [
        'categoria_id',
        'empresa_id',
        'nome',
        'descricao',
        'valor',
        'imagem',
        'destaque',
        'disponivel',
    ];
    
    public function casts(): array
    {
        return [
            'valor' => 'decimal:2',
            'destaque' => 'boolean',
            'disponivel' => 'boolean',
        ];
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

}
