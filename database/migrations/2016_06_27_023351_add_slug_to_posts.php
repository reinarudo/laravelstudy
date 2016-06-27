<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSlugToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //take note that the query below will result to error if the database table is not empty
        //so consider migration reset and seeding
        Schema::table('posts', function($table){
            $table->string('slug')->unique()->after('body'); //create an index for faster searching / reading
        });
    }

    /**
     * Reverse the migrations.
     *
     * Note from Rey:
     * the tutorial covers that the below line should be added on composer.json require/dev,
     * the step has been avoided since it downloads a doctrine library which can take long to download
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function($table){
            $table->dropColumn('slug');
        });
    }
}
