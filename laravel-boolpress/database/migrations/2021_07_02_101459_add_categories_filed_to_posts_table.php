<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoriesFiledToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
            $table->unsignedBigInteger("category_id")->nullable();

            $table->foreign("category_id")
                ->references("id")
                ->on("categories")
                //se la categoria a cui quel post facev riferimento 
                // post nn ha nessuna categoria 
                ->onDelete("set null");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
            $table->dropForeign("posts_category_id_foreign");
            $table->dropForeign("category_id");
        });
    }
}
