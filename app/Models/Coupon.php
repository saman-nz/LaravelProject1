<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $table = 'coupon';
    protected $fillable = [
        'store_id', 'title', 'code', 'discount', 'description',  'status'
    ];
    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
