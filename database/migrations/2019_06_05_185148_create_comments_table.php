<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('user_id')->unsigned()->index();
            $table->biginteger('parent_id')->unsigned()->nullable();
            $table->string('commentable_type');
            $table->biginteger('commentable_id')->unsigend();
            $table->text('content');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('parent_id')->references('id')->on('comments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments',function (Blueprint $table){
            $table->dropForeign('comments_parent_id_foreign');
            $table->dropForeign('comments_user_id_foreign');
        });
        Schema::dropIfExists('comments');
    }
}
