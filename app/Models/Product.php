<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'image'];

    const CATEGORY_FOOD = 'food';
    const CATEGORY_DRINK = 'drink';

    public static function categories()
    {
        return [
            self::CATEGORY_FOOD => 'Food',
            self::CATEGORY_DRINK => 'Drink',
        ];
    }
}
