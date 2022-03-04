<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPedidos extends Model
{
    use HasFactory;

    protected $table = 'status_pedidos';

    protected $fillable = [
        'status',
    ];

    public function statusPedidos()
    {
        return $this->hasMany(StatusPedidos::class, 'fk_id_status', 'id');
    }
}
