<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKnowedgeNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('knowedge_news', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('typeid');
            $table->integer('ismake');
            $table->integer('brandid')->nullable();
            $table->integer('click');
            $table->string('title');
            $table->string('shorttitle')->nullable();
            $table->string('bdname')->nullable();
            $table->integer('like')->default(0);
            $table->integer('unlike')->default(0);
            $table->string('flags')->nullable();
            $table->string('tags')->nullable();
            $table->integer('mid')->default(0);//文档类型
            $table->integer('ispush')->default(0)->index();
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('write');
            $table->string('litpic')->nullable();
            $table->smallInteger('dutyadmin');
            $table->mediumText('imagepics')->nullable();//品牌图集
            $table->mediumText('body')->nullable();
            $table->timestamp('published_at')->nullable();//预选发布时间
            $table->timestamp('origin_time')->nullable()->index();//原始发布时间
            $table->timestamps();
            $table->index('click');
            $table->index('typeid');
            $table->index('title');
            $table->index('shorttitle');
            $table->index('flags');
            $table->index('mid');
            $table->index('write');
            $table->index('dutyadmin');
            $table->index('published_at');
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('knowedge_news');
    }
}
