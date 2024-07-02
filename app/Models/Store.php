<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $table = 'store';
    protected $fillable = [
        'store_name',
        'store_url',
        'category_id',
        'logo',
        'network',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'description',
        'featured',
        'enable',
        'country',
        'store_title',
        'website',
        'tracking_link',
        'created_at',
        'updated_at'
    ];
}
