<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'preferable_class_id', 'name'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function preferable_class()
    {
        return $this->belongsTo(Preferable_class::class);
    }

}
