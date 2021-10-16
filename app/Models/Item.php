<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable =[
        'module','parent_id','title','content','image','author_id','price','slug','shop_id','locale','is_slug_override','duplicate','image_extension','image_banner','image_icon','url','url_type','target','price_input','price_old','price_old','percent_sale','params','totalitems','position','totalviews','display_type','sticky','is_display','seo_title','seo_description','seo_robots','status','started_at','ended_at','published_at','created_at','updated_at','deleted_at'
    ];
    function groups(){
        return $this->belongsToMany(Group::class,'groups_items','item_id','group_id');
    }
}
