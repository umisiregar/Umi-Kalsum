<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function incommingGoods(){
        return $this->hasMany(IncommingGoods::class);
    }

    public function exitGoods(){
        return $this->hasMany(ExitGoods::class);
    }

    public function category(){
        return $this->belongsto(Category::class);
    }
}
