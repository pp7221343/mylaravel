<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods',function(Blueprint $table){
            $table->string('good_id');                  //ID
            $table->string('good_name');                //名称
            $table->string('good_full_name');           //全称
            $table->string('good_retail_price');        //零售价
            $table->string('good_standard_price');      //标准价
            $table->string('good_cost_price');          //成本价
            $table->string('good_brand');               //品牌
            $table->string('good_image');               //图片
            $table->string('good_class');               //分类
            $table->string('good_label');               //标签
            $table->string('good_num');                 //库存
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goods');
    }
}
