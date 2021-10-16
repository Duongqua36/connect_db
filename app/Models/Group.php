<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $fillable = ['title'];

    function items(){
        return $this->belongsToMany(Item::class,'groups_items','group_id','item_id');
    }
}
