<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CategoryToAgencyMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'categoryToAgency';
        Schema::dropIfExists($tableName);
        Schema::create($tableName, function (Blueprint $table) {
            $table->unsignedBigInteger('categoryId');
            $table->unsignedBigInteger('agencyId');
            $table->string('comment');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('categoryId')->references('id')->on('categories');
            $table->foreign('agencyId')->references('id')->on('agencies');
              $table->bigIncrements('id')->unsigned();
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
