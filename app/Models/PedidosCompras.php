<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidosCompras extends Model
{
    use HasFactory;

    protected $table = 'pedidos_compras';

    protected $fillable = [
        'fk_id_produtos',
        'fk_id_clientes',
        'fk_id_status',
        'NumeroPedido',
        'DtPedido',
        'Quantidade',
    ];

    public function produtos()
    {
        return $this->belongsTo(Produtos::class, 'fk_id_produtos', 'id');
    }

    public function clientes()
    {
        return $this->belongsTo(Clientes::class, 'fk_id_clientes', 'id');
    }

    public function statusPedidos()
    {
        return $this->belongsTo(StatusPedidos::class, 'fk_id_status', 'id');
    }
}
