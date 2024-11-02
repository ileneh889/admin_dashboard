<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'shop_product';

    protected $fillable = [
        'id',
        'product_name',
        'category',
        'price',
        'onshelf_status',
        'product_desc',
        'image',
    ];
}

class Inventory extends Model
{
    use HasFactory;

    protected $table = 'inventory_management';

    protected $fillable = [
        'id',
        'fk_product_id',
        'inventory_date',
        'inventory_purchased',
    ];
}