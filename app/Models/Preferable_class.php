<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preferable_class extends Model
{
    use HasFactory;
    
    protected $fillable = ['category_id', 'class_name','numaric_value'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
