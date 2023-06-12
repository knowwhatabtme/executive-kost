<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostManage extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = ['title','picture' ,'body', 'excerpt' ];
    
}