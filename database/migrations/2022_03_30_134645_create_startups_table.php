<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStartupsTable extends Migration
{
    public function up()
    {
        Schema::create('startups', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->foreignId('direction_id')->constrained('directions');
            $table->unsignedTinyInteger('members');
            $table->foreignId('model_id')->constrained('models');
            $table->string('file',255);
            $table->string('sales');
            $table->string('link');
            $table->string('full_name');
            $table->string('role');
            $table->unsignedTinyInteger('age');
            $table->string('duration');
            $table->string('phone');
            $table->string('telegram');
            $table->string('email');
            $table->text('resource_description');
            $table->foreignId('social_id')->constrained('socials');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('startups');
    }
}
