<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ItemCart extends Model
{
    use HasFactory;
    protected $fillable = ['cart_id', 'product_id', 'quantidade'];
    public function carrinho(): BelongsTo
    {
        return $this->belongsTo(Cart::class);
    }
    public function produto(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
