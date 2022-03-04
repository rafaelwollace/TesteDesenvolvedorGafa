<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

    protected $table = 'produtos';

    protected $fillable = [
        'NomeProduto',
        'CodBarras',
        'ValorUnitario'
    ];

    public function produtos()
    {
        return $this->hasMany(Produtos::class, 'fk_id_produtos', 'id');
    }
}
