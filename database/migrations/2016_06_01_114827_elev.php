<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Elev extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elev', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('id_specialitate');
            $table->unsignedInteger('id_specialitate2');
            $table->unsignedInteger('id_specialitate3');
            $table->unsignedInteger('nationality_id');
            $table->unsignedInteger('nota1')->unique();
            $table->unsignedInteger('nota2');
            $table->unsignedInteger('nota3');
            $table->boolean('buget1');
            $table->boolean('buget2');
            $table->boolean('buget3');
            $table->boolean('contract1');
            $table->boolean('contract2');
            $table->boolean('contract3');
            $table->integer('limba1');
            $table->integer('limba2');
            $table->integer('limba3');
            $table->string('nume');
            $table->string('prenume');
            $table->string('patronimic');
            $table->string('email')->unique();
            $table->integer('cod_personal');
            $table->integer('numar_buletin');
            $table->integer('oficiu');
            $table->integer('an_abs');
            $table->string('acte');
            $table->string('sex');
            $table->date('datanasterii');
            $table->date('certificat_data_eliberarii');
            $table->date('buletin_data_eliberarii');
            $table->string('tat_nume');
            $table->string('tat_prenume');
            $table->string('mam_nume');
            $table->string('mam_prenume');
            $table->string('cetatanie');
            $table->string('loc_nas');
            $table->string('seria_certificat');
            $table->string('seria_buletin');
            $table->string('liv_mil_nr');

            $table->string('num_sat_oras');
            $table->string('strada');
            $table->string('raion');
            $table->integer('nr_bloc');

            $table->string('telefon');
            $table->string('telefon_mobil');
            $table->string('sat_oras');
            $table->string('inst_abs');
            $table->string('distinc_abs');
            $table->string('doc_seria');
            $table->string('limba_de_instruire');
            $table->string('limba_studiata');
            $table->decimal('media_discipline');
            $table->decimal('media_exam');
            $table->decimal('media1');
            $table->decimal('media2');
            $table->decimal('media3');
            //$table->boolean('gimnaziu');
            $table->boolean('livret_militar');
            $table->boolean('camin');
            //$table->boolean('aloling');
            $table->boolean('cop_orfan');
            $table->boolean('cop_invalid');
            $table->boolean('cop_deficiente');
            $table->boolean('parinti_invalizi');
            $table->boolean('parinti_Cernobil');
            $table->boolean('mm_patru_copii');
            $table->boolean('raion_est');
            $table->boolean('cop_roman');
            //$table->boolean('serv_milit');
            $table->boolean('ucrainean');
            $table->boolean('un_par_inv');
            //$table->boolean('dipl_rep');

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

        Schema::drop('elev');
    }
}
