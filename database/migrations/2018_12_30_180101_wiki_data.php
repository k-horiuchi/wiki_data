<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WikiData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wiki_datas', function (Blueprint $table) {
//            $table->smallInteger('COMMENT_CD');
            $table->increments('id');
            $table->string('url',50);
            $table->string('music_nm',300);
            $table->string('artist_nm',300);
            $table->timestamp('UPD_DATE')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->char('DEL_FLG',1)->default('0');
            $table->rememberToken();
            $table->unique('url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wiki_datas');
    }
}
