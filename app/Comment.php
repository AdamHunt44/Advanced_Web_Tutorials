<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'name',
        'comment',
        'likes',
    ];

    public function upVoteAndSave() {
        $this -> likes += 1;
        $this -> update();
    }

    public function downVoteAndSave() {
        $this -> likes -= 1;
        $this -> update();
    }

}
