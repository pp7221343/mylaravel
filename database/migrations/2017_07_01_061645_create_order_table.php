<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders',function(Blueprint $table){
            $table->string('order_id');     //订单ID
            $table->string('good_id');      //商品ID
            $table->string('user_id');      //用户ID
            $table->string('user_name');    //用户名称
            $table->string('good_name');    //商品名称
            $table->string('good_');        //商品类别
            $table->string('good_much');    //商品总价
            $table->string('good_num');     //商品数量
            $table->string('delivery_courier');       //发货物流
            $table->string('pay_method');             //支付方式

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
        Schema::dropIfExists('orders');
    }
}
