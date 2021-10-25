<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTargetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('targets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            //---------------追加---------------------
            //物の名前(お金の場合は説明を書く)
            $table->string('item_name');
            //物の数(ない場合は0個)
            $table->integer('item_number');
            //物の金額(ない場合は0円)
            $table->integer('item_amount');
            //画像アップロード機能
            $table->string('item_img');
            //誰に貸したかor誰から借りたか
            $table->string('target_person');
            //貸したか借りたか
            $table->string('lent_or_borrowed');
            //借りた日or貸した日
            $table->datetime('execution_date');
            //期限（いつまでに返すか）
            $table->datetime('deadline');
            //-----------ここまで追加---------------------
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
        Schema::dropIfExists('targets');
    }
}
