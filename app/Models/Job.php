<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected  $guarded=[];
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public  function category()
    {
        return $this->belongsTo(Category::class);
    }
}