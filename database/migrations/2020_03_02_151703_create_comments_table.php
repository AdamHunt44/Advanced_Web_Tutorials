<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{

    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table -> bigIncrements ('id');
            $table -> string ('name', 64) -> nullable (false);
            $table -> text ('comment') -> nullable (false);
            $table -> integer ('likes');
            $table -> timestamps ();
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
