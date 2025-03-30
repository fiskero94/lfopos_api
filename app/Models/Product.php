<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'currency',
        'vat_rate',
        'tag_name',
        'tag_color',
        'sort'
    ];

    protected static function booted(): void
    {
        static::created(function (Product $product) {
            $product->sort = $product->id;
            $product->saveQuietly();
        });
    }
}
