<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $casts = [
        'data' => 'array',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeLastOrder()
    {

    }
}
