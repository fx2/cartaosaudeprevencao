<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPeriodicityToPlanosSaudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('planos_saudes', function (Blueprint $table) {
            $table->string('periodicity')->nullable()->after('qtd_vidas');
            $table->integer('planGalaxPayId')->nullable()->after('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('planos_saudes', 'periodicity'))
        {
            Schema::table('planos_saudes', function (Blueprint $table)
            {
                $table->dropColumn('periodicity');
                $table->dropColumn('planGalaxPayId');
            });
        }
    }
}
