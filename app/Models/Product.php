<?php
//php artisan make:model New -m -> to make model with migration
//php artisan migrate -> to implement migration
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [ 'name', 'color', 'size', 'image', 'about', 'descreption', 'price', 'category_id' ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

}
