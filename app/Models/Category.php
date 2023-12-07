<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title','description'];

    public function preferable_class()
    {
        return $this->hasMany(Preferable_class::class);
    }
    public function subject()
    {
        return $this->hasMany(Subject::class);
    }
}
