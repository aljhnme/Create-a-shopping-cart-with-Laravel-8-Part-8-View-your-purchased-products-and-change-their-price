<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    protected $table='cart';

    protected $fillable=[
       'buyer_user',
       'product_owner',
       'product_price',
       'id_product'
    ];
}
