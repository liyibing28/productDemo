<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productions', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('kebian');
            $table->string('xiadanshijian');            //下单时间
            $table->string('jihuajiaoqi'); //计划交期
            $table->string('guige');       //规格
            $table->string('xinghao');               //型号
            $table->string('cuche')->nullable();       //粗车
            $table->string('cuche_type')->nullable(); //正林/红日
            $table->string('rechuli')->nullable();                  //热处理
            $table->string('jingche')->nullable();       //精车
            $table->string('kaidaoyi')->nullable();              //开刀翼
            $table->boolean('kaidaoyi_banci')->nullable();     //开刀翼班次
            $table->integer('kaidaoyi_renyuan')->nullable();   //开刀翼人员
            $table->string('kaiding')->nullable();               //开顶
            $table->boolean('kaiding_banci')->nullable();     //开刀翼班次
            $table->integer('kaiding_renyuan')->nullable();   //开刀翼人员
            $table->string('zuankong')->nullable();                   // 钻孔
            $table->boolean('zuankong_banci')->nullable();     //开刀翼班次
            $table->integer('zuankong_renyuan')->nullable();   //开刀翼人员
            $table->boolean('is_finished')->default(false);          //是否完成
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
        Schema::dropIfExists('productions');
    }
}
