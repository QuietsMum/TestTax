<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tranings', function (Blueprint $table) {
            $table->id();
            $table->text('iin');
            $table->text('period');
            $table->text('surname');
            $table->text('name');
            $table->text('patronymic');
            $table->text('phonename');
            $table->text('email');
            $table->text('declarationtype');
            $table->text('b_1');
            $table->text('b_2');
            $table->text('b_2a');
            $table->text('b_2b');
            $table->text('b_2c');
            $table->text('b_2d');
            $table->text('c_1');
            $table->text('d_1');
            $table->text('e_1');
            $table->text('e_1a');
            $table->text('e_1b');
            $table->text('e_1c');
            $table->text('e_1d');
            $table->text('e_2');
            $table->text('e_3');
            $table->text('e_4');
            $table->text('e_5');
            $table->text('f_1a');
            $table->text('f_1b');
            $table->text('f_1c');
            $table->text('f_1d');
            $table->text('f_1e');
            $table->text('f_1f');
            $table->text('f_2f');
            $table->text('f_1g');
            $table->text('f_2g');
            $table->text('f_1h');
            $table->text('f_2h');
            $table->text('f_2a');
            $table->text('f_2b');
            $table->text('f_2c');
            $table->text('f_2d');
            $table->text('f_2e');
            $table->text('f_3f');
            $table->text('f_4f');
            $table->text('f_5f');
            $table->text('f_3g');
            $table->text('f_4g');
            $table->text('f_5g');
            $table->text('f_3h');
            $table->text('f_4h');
            $table->text('f_5h');
            $table->text('g_1a');
            $table->text('g_1b');
            $table->text('g_1c');
            $table->text('g_1d');
            $table->text('g_1e');
            $table->text('g_1f');
            $table->text('g_1g');
            $table->text('h_1a');
            $table->text('h_1b');
            $table->text('h_1c');
            $table->text('h_1d');
            $table->text('h_1e');
            $table->text('h_1f');
            $table->text('i_1a');
            $table->text('i_1b');
            $table->text('i_1c');
            $table->text('i_1d');
            $table->text('i_1e');
            $table->text('i_1f');
            $table->text('i_1g');
            $table->text('i_2a');
            $table->text('i_2b');
            $table->text('i_2c');
            $table->text('i_2d');
            $table->text('i_2e');
            $table->text('i_2f');
            $table->text('i_2g');
            $table->text('j_1a');
            $table->text('j_1b');
            $table->text('j_1c');
            $table->text('j_1d');
            $table->text('j_1e');
            $table->text('k_1');
            $table->text('k_2');
            $table->text('l_1');
            $table->text('m_1');
            $table->text('n_b1');
            $table->text('n_b2');
            $table->text('n_b3');
            $table->text('n_b4');
            $table->text('n_b5');
            $table->text('n_b6');
            $table->text('n_b7');
            $table->text('n_b8');
            $table->text('n_b9');
            $table->text('n_b10');
            $table->text('n_b11');
            $table->text('n_b12');
            $table->text('n_c1');
            $table->text('n_c2');
            $table->text('n_c3');
            $table->text('n_c4');
            $table->text('n_c5');
            $table->text('n_c6');
            $table->text('n_c7');
            $table->text('n_c8');
            $table->text('n_c9');
            $table->text('n_c10');
            $table->text('n_c11');
            $table->text('n_c12');
            $table->text('p_name');
            $table->text('p_code');
            $table->text('p_date');
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
        Schema::dropIfExists('tranings');
    }
}
