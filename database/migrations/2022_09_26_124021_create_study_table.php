<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('study', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('randomised_patients');
            $table->string('code');
            $table->string('type');
            $table->string('description');
            $table->string('icon');
            $table->string('monitor');
            $table->string('algorithm_type');
            $table->string('algorithm_masking');
            $table->string('algorithm_rng_seed');
            $table->string('allocation_groups');
            $table->string('selection_options');
            $table->string('initial_sites');
            $table->string('system_messages');
            $table->string('item_groups');
            $table->string('item_study_id');
            $table->string('item_name');
            $table->string('item_control_type');
            $table->string('item_text');
            $table->string('item_compulsory');
            $table->string('item_rules');
            $table->string('item_group');
            $table->string('item_validation');
            $table->string('allocation_messages');
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
        Schema::dropIfExists('study');
    }
}
