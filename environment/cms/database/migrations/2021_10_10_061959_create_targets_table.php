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
            //[借りたor貸した]名前or金額
            $table->string('item_name');
            
            //数量(お金の場合は0個)
            $table->integer('item_number');
            
            //貸したか借りたか
            $table->string('lent_or_borrowed');
            
            //誰に貸したかor誰から借りたか
            $table->string('target_person');
            
            //対象者メールアドレス
            $table->string('target_mail');
            
            //実行日
            $table->date('execution_date');
            
            //期日（いつまでに返すか）
            $table->date('deadline');
            
            //画像アップロード機能
            $table->string('item_img');
            
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
