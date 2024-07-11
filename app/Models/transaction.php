<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'transaction_id', 'amount', 'status'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
