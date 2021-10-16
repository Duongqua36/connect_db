<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class ItemGroup extends Model
{
    use HasFactory;
    protected $table ='groups_items';
    protected $fillable =['id','item_id','group_id'];
}
