<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    private $title;
    private $content;
    private $userId;

    public static function getAll(){
        $posts = DB::table('posts')
            ->join('users', 'posts.userId', '=', 'users.id')
            ->paginate(3);
        return $posts;
    } 

   
}
