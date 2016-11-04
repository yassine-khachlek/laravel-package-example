<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaravelPackageExampleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('laravel_package_example')) {

            Schema::create('laravel_package_example', function (Blueprint $table) {
                $table->increments('id');
            });
            
        }

        Schema::table('laravel_package_example', function ($table) {

            if (!Schema::hasColumn('laravel_package_example', 'created_at')) {
                $table->dateTimeTz('created_at')->nullable()->default(NULL);
            }

            if (!Schema::hasColumn('laravel_package_example', 'updated_at')) {
                $table->dateTimeTz('updated_at')->nullable()->default(NULL);
            }

            if (!Schema::hasColumn('laravel_package_example', 'deleted_at')) {
                $table->dateTimeTz('deleted_at')->nullable()->default(NULL);
            }

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('laravel_package_example');
    }
}
