<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPetugasSlikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permohonan_slik', function(Blueprint $table) {
            $table->dropColumn('petugas_slik');
        });

        Schema::table('slik', function(Blueprint $table) {
            $table->string('petugas_slik')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('slik', function(Blueprint $table) {
            $table->dropColumn('petugas_slik');
        });

        Schema::table('permohonan_slik', function(Blueprint $table) {
            $table->string('petugas_slik')->nullable()->default(null);
        });
    }
}
