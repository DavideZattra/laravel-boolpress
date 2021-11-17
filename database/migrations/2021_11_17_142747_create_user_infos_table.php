<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
        
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('country', 100)->nullable();
            $table->string('region')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('telephone_number')->unique()->nullable();

            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('set null'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        Schema::table('user_infos', function (Blueprint $table) {
            
            $table->dropForeign('user_infos_user_id_foreign');
        });
        Schema::dropIfExists('user_infos');
    }
}
