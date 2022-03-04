<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    protected $fillable = [
        'NomeCliente',
        'CPF',
        'EMAIL'
    ];

    public function clientes()
    {
        return $this->hasMany(Clientes::class, 'fk_id_clientes', 'id');
    }
}
