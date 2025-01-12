<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStartupResourcesTable extends Migration
{
    public function up()
    {
        Schema::create('startup_resources', function (Blueprint $table) {
            $table->foreignId('startup_id')->constrained('startups');
            $table->foreignId('resource_id')->constrained('resources');
            $table->unique(['startup_id','resource_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('startup_resources');
    }
}
