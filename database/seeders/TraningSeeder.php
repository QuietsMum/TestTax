<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Traning;

class TraningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Traning::create([
            'iin' => '840917300176',
            'period' => '2021',
            'surname' => 'Ахметов',
            'name' => 'К.',
            'patronymic' => 'Б.',
            'phonename' => '87010000000',
            'email' => 'ТТ@gmail.com',
            'declarationtype' => 'первоначальная',
            'b_1' => '2500000',
            'b_2' => '500000',
            'b_2a' => '500000',
            'b_2b' => '',
            'b_2c' => '',
            'b_2d' => '',
            'c_1' => '',
            'd_1' => '',
            'e_1' => '50000',
            'e_1a' => '',
            'e_1b' => '',
            'e_1c' => '',
            'e_1d' => '',
            'e_2' => '',
            'e_3' => '',
            'e_4' => '50000',
            'e_5' => '',
            'f_1a' => '1',
            'f_1b' => 'квартира',
            'f_1c' => '02:036:132:00:01:61',
            'f_1d' => 'KZ',
            'f_1e' => '18000000',
            'f_1f_1' => 'наличные',
            'f_1f_2' => '',
            'f_1g_1' => '731201400135',
            'f_1g_2' => '',
            'f_1h_1' => '18000000',
            'f_1h_2' => '',
            'f_2a' => '',
            'f_2b' => '',
            'f_2c' => '',
            'f_2d' => '',
            'f_2e' => '',
            'f_2f_1' => '',
            'f_2f_2' => '',
            'f_2f_3' => '',
            'f_2g_1' => '',
            'f_2g_2' => '',
            'f_2g_3' => '',
            'f_2h_1' => '',
            'f_2h_2' => '',
            'f_2h_3' => '',
            'g_1a' => '',
            'g_1b' => '',
            'g_1c' => '',
            'g_1d' => '',
            'g_1e' => '',
            'g_1f' => '',
            'g_1g' => '',
            'h_1a' => '',
            'h_1b' => '',
            'h_1c' => '',
            'h_1d' => '',
            'h_1e' => '',
            'h_1f' => '',
            'i_1a' => '',
            'i_1b' => '',
            'i_1c' => '',
            'i_1d' => '',
            'i_1e' => '',
            'i_1f' => '',
            'i_1g' => '',
            'i_2a' => '',
            'i_2b' => '',
            'i_2c' => '',
            'i_2d' => '',
            'i_2e' => '',
            'i_2f' => '',
            'i_2g' => '',
            'j_1a' => '',
            'j_1b' => '',
            'j_1c' => '',
            'j_1d' => '',
            'j_1e' => '',
            'k_1' => '',
            'k_2' => '',
            'l_1' => '',
            'm_1' => '',
            'n_b1' => '',
            'n_b2' => '',
            'n_b3' => '',
            'n_b4' => '',
            'n_b5' => '',
            'n_b6' => '',
            'n_b7' => '',
            'n_b8' => '',
            'n_b9' => '',
            'n_b10' => '',
            'n_b11' => '',
            'n_b12' => '',
            'n_c1' => '',
            'n_c2' => '',
            'n_c3' => '',
            'n_c4' => '',
            'n_c5' => '',
            'n_c6' => '',
            'n_c7' => '',
            'n_c8' => '',
            'n_c9' => '',
            'n_c10' => '',
            'n_c11' => '',
            'n_c12' => '',
            'p_name' => 'Ахметов К.Б.',
            'p_code' => '6009',
            'p_date' => '01/01/2022',
         ]);

         Traning::create([
                     'iin' => '7312014000135',
                     'period' => '2021',
                     'surname' => 'Байтурова',
                     'name' => 'А.',
                     'patronymic' => 'А.',
                     'phonename' => '87010000000',
                     'email' => 'ТТ@gmail.com',
                     'declarationtype' => 'первоначальная',
                     'b_1' => '',
                     'b_2' => '8000000',
                     'b_2a' => '3000000',
                     'b_2b' => '',
                     'b_2c' => '',
                     'b_2d' => '5000000',
                     'c_1' => '',
                     'd_1' => '',
                     'e_1' => '300000',
                     'e_1a' => '',
                     'e_1b' => '',
                     'e_1c' => '',
                     'e_1d' => '',
                     'e_2' => '',
                     'e_3' => '',
                     'e_4' => '300000',
                     'e_5' => '',
                     'f_1a' => '1',
                     'f_1b' => 'квартира',
                     'f_1c' => '02:036:132:00:01:61',
                     'f_1d' => 'KZ',
                     'f_1e' => '15000000',
                     'f_1f_1' => 'наличные',
                     'f_1f_2' => 'заем',
                     'f_1g_1' => '731201400135',
                     'f_1g_2' => '900103000000',
                     'f_1h_1' => '10000000',
                     'f_1h_2' => '5000000',
                     'f_2a' => '2',
                     'f_2b' => 'квартира',
                     'f_2c' => '02:036:132:00:01:00',
                     'f_2d' => 'KZ',
                     'f_2e' => '25000000',
                     'f_2f_1' => 'деньги от продажи квартиры',
                     'f_2f_2' => 'заем',
                     'f_2f_3' => '',
                     'f_2g_1' => '731201400135',
                     'f_2g_2' => '940140000385',
                     'f_2g_3' => '',
                     'f_2h_1' => '18000000',
                     'f_2h_2' => '7000000',
                     'f_2h_3' => '',
                     'g_1a' => '1',
                     'g_1b' => 'квартира',
                     'g_1c' => '02:036:132:00:01:61',
                     'g_1d' => 'KZ',
                     'g_1e' => 'Ахметову Б.Н.',
                     'g_1f' => '840917300176',
                     'g_1g' => '18000000',
                     'h_1a' => '',
                     'h_1b' => '',
                     'h_1c' => '',
                     'h_1d' => '',
                     'h_1e' => '',
                     'h_1f' => '',
                     'i_1a' => '1',
                     'i_1b' => 'К',
                     'i_1c' => '900103000000',
                     'i_1d' => 'КZ',
                     'i_1e' => 'KZT',
                     'i_1f' => '5000000',
                     'i_1g' => '872000000000',
                     'i_2a' => '1',
                     'i_2b' => 'К',
                     'i_2c' => '940140000385',
                     'i_2d' => 'КZ',
                     'i_2e' => 'KZT',
                     'i_2f' => '7000000',
                     'i_2g' => '872000000000',
                     'j_1a' => '',
                     'j_1b' => '',
                     'j_1c' => '',
                     'j_1d' => '',
                     'j_1e' => '',
                     'k_1' => '',
                     'k_2' => '',
                     'l_1' => '',
                     'm_1' => '',
                     'n_b1' => '',
                     'n_b2' => '',
                     'n_b3' => '',
                     'n_b4' => '',
                     'n_b5' => '',
                     'n_b6' => '',
                     'n_b7' => '',
                     'n_b8' => '',
                     'n_b9' => '',
                     'n_b10' => '',
                     'n_b11' => '',
                     'n_b12' => '',
                     'n_c1' => '',
                     'n_c2' => '',
                     'n_c3' => '',
                     'n_c4' => '',
                     'n_c5' => '',
                     'n_c6' => '',
                     'n_c7' => '',
                     'n_c8' => '',
                     'n_c9' => '',
                     'n_c10' => '',
                     'n_c11' => '',
                     'n_c12' => '',
                     'p_name' => 'Байтурова А.А.',
                     'p_code' => '6003',
                     'p_date' => '01/01/2022',
                  ]);
     Traning::create([
                         'iin' => '891126450799',
                         'period' => '2021',
                         'surname' => 'Байтурова',
                         'name' => 'А.',
                         'patronymic' => 'А.',
                         'phonename' => '87010000000',
                         'email' => 'ТТ@gmail.com',
                         'declarationtype' => 'первоначальная',
                         'b_1' => '16520000',
                         'b_2' => '13020000',
                         'b_2a' => '',
                         'b_2b' => '',
                         'b_2c' => '13020000',
                         'b_2d' => '',
                         'c_1' => '',
                         'd_1' => '',
                         'e_1' => '1302000',
                         'e_1a' => '',
                         'e_1b' => '',
                         'e_1c' => '',
                         'e_1d' => '1302000',
                         'e_2' => '1302000',
                         'e_3' => '',
                         'e_4' => '0',
                         'e_5' => '',
                         'f_1a' => '1',
                         'f_1b' => 'Машина',
                         'f_1c' => 'F122TY1245733',
                         'f_1d' => 'KZ',
                         'f_1e' => '0',
                         'f_1f_1' => 'договор дарения',
                         'f_1f_2' => '',
                         'f_1g_1' => '840917300176',
                         'f_1g_2' => '',
                         'f_1h_1' => '0',
                         'f_1h_2' => '',
                         'f_2a' => '2',
                         'f_2b' => 'Акции',
                         'f_2c' => '7707387034',
                         'f_2d' => 'RU',
                         'f_2e' => '2170000',
                         'f_2f_1' => 'наличные',
                         'f_2f_2' => '',
                         'f_2f_3' => '',
                         'f_2g_1' => '891126450799',
                         'f_2g_2' => '',
                         'f_2g_3' => '',
                         'f_2h_1' => '2170000',
                         'f_2h_2' => '',
                         'f_2h_3' => '',
                         'g_1a' => '',
                         'g_1b' => '',
                         'g_1c' => '',
                         'g_1d' => '',
                         'g_1e' => '',
                         'g_1f' => '',
                         'g_1g' => '',
                         'h_1a' => '1',
                         'h_1b' => 'ISO936200000',
                         'h_1c' => 'Сбербанк РФ',
                         'h_1d' => 'RU',
                         'h_1e' => 'RUB',
                         'h_1f' => '1500000',
                         'i_1a' => '',
                         'i_1b' => '',
                         'i_1c' => '',
                         'i_1d' => '',
                         'i_1e' => '',
                         'i_1f' => '',
                         'i_1g' => '',
                         'i_2a' => '',
                         'i_2b' => '',
                         'i_2c' => '',
                         'i_2d' => '',
                         'i_2e' => '',
                         'i_2f' => '',
                         'i_2g' => '',
                         'j_1a' => '1',
                         'j_1b' => 'акции',
                         'j_1c' => '7707387034',
                         'j_1d' => 'RU',
                         'j_1e' => 'Компания «DG»',
                         'k_1' => '',
                         'k_2' => '',
                         'l_1' => '',
                         'm_1' => '',
                         'n_b1' => '',
                         'n_b2' => '',
                         'n_b3' => '',
                         'n_b4' => '',
                         'n_b5' => '',
                         'n_b6' => '',
                         'n_b7' => '',
                         'n_b8' => '',
                         'n_b9' => '',
                         'n_b10' => '',
                         'n_b11' => '',
                         'n_b12' => '',
                         'n_c1' => '',
                         'n_c2' => '',
                         'n_c3' => '',
                         'n_c4' => '',
                         'n_c5' => '',
                         'n_c6' => '',
                         'n_c7' => '',
                         'n_c8' => '',
                         'n_c9' => '',
                         'n_c10' => '',
                         'n_c11' => '',
                         'n_c12' => '',
                         'p_name' => 'Байтурова А.А.',
                         'p_code' => '6004',
                         'p_date' => '01/01/2022',
                      ]);
      Traning::create([
                              'iin' => '891126450799',
                              'period' => '2021',
                              'surname' => 'Байтурова',
                              'name' => 'А.',
                              'patronymic' => 'А.',
                              'phonename' => '87010000000',
                              'email' => 'ТТ@gmail.com',
                              'declarationtype' => 'первоначальная',
                              'b_1' => '',
                              'b_2' => '2400000',
                              'b_2a' => '',
                              'b_2b' => '2400000',
                              'b_2c' => '',
                              'b_2d' => '',
                              'c_1' => '',
                              'd_1' => '750000',
                              'e_1' => '165000',
                              'e_1a' => '165000',
                              'e_1b' => '',
                              'e_1c' => '',
                              'e_1d' => '',
                              'e_2' => '',
                              'e_3' => '',
                              'e_4' => '',
                              'e_5' => '',
                              'f_1a' => '1',
                              'f_1b' => 'Зем участок',
                              'f_1c' => '03:000:0120:00:1',
                              'f_1d' => 'KZ',
                              'f_1e' => '4000000',
                              'f_1f_1' => 'наличные',
                              'f_1f_2' => '',
                              'f_1g_1' => '891126450799',
                              'f_1g_2' => '',
                              'f_1h_1' => '10000000',
                              'f_1h_2' => '',
                              'f_2a' => '2',
                              'f_2b' => 'Зем участок',
                              'f_2c' => '03:000:0120:00:2',
                              'f_2d' => 'KZ',
                              'f_2e' => '9000000',
                              'f_2f_1' => 'депозит',
                              'f_2f_2' => '',
                              'f_2f_3' => '',
                              'f_2g_1' => '080940010300',
                              'f_2g_2' => '',
                              'f_2g_3' => '',
                              'f_2h_1' => '3000000',
                              'f_2h_2' => '',
                              'f_2h_3' => '',
                              'g_1a' => '',
                              'g_1b' => '',
                              'g_1c' => '',
                              'g_1d' => '',
                              'g_1e' => '',
                              'g_1f' => '',
                              'g_1g' => '',
                              'h_1a' => '',
                              'h_1b' => '',
                              'h_1c' => '',
                              'h_1d' => '',
                              'h_1e' => '',
                              'h_1f' => '',
                              'i_1a' => '1',
                              'i_1b' => 'Д',
                              'i_1c' => '840917300176',
                              'i_1d' => 'KZ',
                              'i_1e' => 'EURO',
                              'i_1f' => '1000',
                              'i_1g' => '8911264507779',
                              'i_2a' => '',
                              'i_2b' => '',
                              'i_2c' => '',
                              'i_2d' => '',
                              'i_2e' => '',
                              'i_2f' => '',
                              'i_2g' => '',
                              'j_1a' => '',
                              'j_1b' => '',
                              'j_1c' => '',
                              'j_1d' => '',
                              'j_1e' => '',
                              'k_1' => '',
                              'k_2' => '',
                              'l_1' => '',
                              'm_1' => '',
                              'n_b1' => '200000',
                              'n_b2' => '200000',
                              'n_b3' => '200000',
                              'n_b4' => '200000',
                              'n_b5' => '200000',
                              'n_b6' => '200000',
                              'n_b7' => '200000',
                              'n_b8' => '200000',
                              'n_b9' => '200000',
                              'n_b10' => '200000',
                              'n_b11' => '200000',
                              'n_b12' => '200000',
                              'n_c1' => '13750',
                              'n_c2' => '13750',
                              'n_c3' => '13750',
                              'n_c4' => '13750',
                              'n_c5' => '13750',
                              'n_c6' => '13750',
                              'n_c7' => '13750',
                              'n_c8' => '13750',
                              'n_c9' => '13750',
                              'n_c10' => '13750',
                              'n_c11' => '13750',
                              'n_c12' => '13750',
                              'p_name' => 'Байтурова А.А.',
                              'p_code' => '6004',
                              'p_date' => '01/01/2022',
                           ]);
    Traning::create([
                                  'iin' => '880000000001',
                                  'period' => '2021',
                                  'surname' => 'Ахметов',
                                  'name' => 'К.',
                                  'patronymic' => 'Б.',
                                  'phonename' => '87010000000',
                                  'email' => 'ТТ@gmail.com',
                                  'declarationtype' => 'первоначальная',
                                  'b_1' => '3600000',
                                  'b_2' => '',
                                  'b_2a' => '',
                                  'b_2b' => '',
                                  'b_2c' => '',
                                  'b_2d' => '',
                                  'c_1' => '',
                                  'd_1' => '',
                                  'e_1' => '',
                                  'e_1a' => '',
                                  'e_1b' => '',
                                  'e_1c' => '',
                                  'e_1d' => '',
                                  'e_2' => '',
                                  'e_3' => '',
                                  'e_4' => '',
                                  'e_5' => '',
                                  'f_1a' => '',
                                  'f_1b' => '',
                                  'f_1c' => '',
                                  'f_1d' => '',
                                  'f_1e' => '',
                                  'f_1f_1' => '',
                                  'f_1f_2' => '',
                                  'f_1g_1' => '',
                                  'f_1g_2' => '',
                                  'f_1h_1' => '',
                                  'f_1h_2' => '',
                                  'f_2a' => '',
                                  'f_2b' => '',
                                  'f_2c' => '',
                                  'f_2d' => '',
                                  'f_2e' => '',
                                  'f_2f_1' => '',
                                  'f_2f_2' => '',
                                  'f_2f_3' => '',
                                  'f_2g_1' => '',
                                  'f_2g_2' => '',
                                  'f_2g_3' => '',
                                  'f_2h_1' => '',
                                  'f_2h_2' => '',
                                  'f_2h_3' => '',
                                  'g_1a' => '1',
                                  'g_1b' => 'квартира',
                                  'g_1c' => '02:00:001:00:215:1',
                                  'g_1d' => 'KZ',
                                  'g_1e' => 'Кумисбай С',
                                  'g_1f' => '090101000003',
                                  'g_1g' => '0',
                                  'h_1a' => '',
                                  'h_1b' => '',
                                  'h_1c' => '',
                                  'h_1d' => '',
                                  'h_1e' => '',
                                  'h_1f' => '',
                                  'i_1a' => '',
                                  'i_1b' => '',
                                  'i_1c' => '',
                                  'i_1d' => '',
                                  'i_1e' => '',
                                  'i_1f' => '',
                                  'i_1g' => '',
                                  'i_2a' => '',
                                  'i_2b' => '',
                                  'i_2c' => '',
                                  'i_2d' => '',
                                  'i_2e' => '',
                                  'i_2f' => '',
                                  'i_2g' => '',
                                  'j_1a' => '',
                                  'j_1b' => '',
                                  'j_1c' => '',
                                  'j_1d' => '',
                                  'j_1e' => '',
                                  'k_1' => '',
                                  'k_2' => '',
                                  'l_1' => '',
                                  'm_1' => '',
                                  'n_b1' => '',
                                  'n_b2' => '',
                                  'n_b3' => '',
                                  'n_b4' => '',
                                  'n_b5' => '',
                                  'n_b6' => '',
                                  'n_b7' => '',
                                  'n_b8' => '',
                                  'n_b9' => '',
                                  'n_b10' => '',
                                  'n_b11' => '',
                                  'n_b12' => '',
                                  'n_c1' => '',
                                  'n_c2' => '',
                                  'n_c3' => '',
                                  'n_c4' => '',
                                  'n_c5' => '',
                                  'n_c6' => '',
                                  'n_c7' => '',
                                  'n_c8' => '',
                                  'n_c9' => '',
                                  'n_c10' => '',
                                  'n_c11' => '',
                                  'n_c12' => '',
                                  'p_name' => 'Ахметов К.Б.',
                                  'p_code' => '6004',
                                  'p_date' => '01/01/2022',
                               ]);
    Traning::create([
                                  'iin' => '880000000001',
                                  'period' => '2021',
                                  'surname' => 'Ахметова',
                                  'name' => 'А.',
                                  'patronymic' => 'А.',
                                  'phonename' => '87010000000',
                                  'email' => 'ТТ@gmail.com',
                                  'declarationtype' => 'первоначальная',
                                  'b_1' => '',
                                  'b_2' => '',
                                  'b_2a' => '',
                                  'b_2b' => '',
                                  'b_2c' => '',
                                  'b_2d' => '',
                                  'c_1' => '',
                                  'd_1' => '',
                                  'e_1' => '',
                                  'e_1a' => '',
                                  'e_1b' => '',
                                  'e_1c' => '',
                                  'e_1d' => '',
                                  'e_2' => '',
                                  'e_3' => '',
                                  'e_4' => '',
                                  'e_5' => '',
                                  'f_1a' => '1',
                                  'f_1b' => 'квартира',
                                  'f_1c' => '02:036:000:000:1/3',
                                  'f_1d' => 'KZ',
                                  'f_1e' => '10000000',
                                  'f_1f_1' => 'наличные',
                                  'f_1f_2' => '',
                                  'f_1g_1' => '890000000001',
                                  'f_1g_2' => '',
                                  'f_1h_1' => '5000000',
                                  'f_1h_2' => '',
                                  'f_2a' => '2',
                                  'f_2b' => 'машина',
                                  'f_2c' => 'WDB514B12534091',
                                  'f_2d' => 'KZ',
                                  'f_2e' => '6000000',
                                  'f_2f_1' => 'ипотека',
                                  'f_2f_2' => 'депозит',
                                  'f_2f_3' => 'заем',
                                  'f_2g_1' => '030740001404',
                                  'f_2g_2' => '940140000385',
                                  'f_2g_3' => '740000000001',
                                  'f_2h_1' => '5000000',
                                  'f_2h_2' => '2000000',
                                  'f_2h_3' => '4000000',
                                  'g_1a' => '',
                                  'g_1b' => '',
                                  'g_1c' => '',
                                  'g_1d' => '',
                                  'g_1e' => '',
                                  'g_1f' => '',
                                  'g_1g' => '',
                                  'h_1a' => '',
                                  'h_1b' => '',
                                  'h_1c' => '',
                                  'h_1d' => '',
                                  'h_1e' => '',
                                  'h_1f' => '',
                                  'i_1a' => '1',
                                  'i_1b' => 'К',
                                  'i_1c' => '740000000001',
                                  'i_1d' => 'KZ',
                                  'i_1e' => 'KZT',
                                  'i_1f' => '4000',
                                  'i_1g' => '8911264507779',
                                  'i_2a' => '',
                                  'i_2b' => '',
                                  'i_2c' => '',
                                  'i_2d' => '',
                                  'i_2e' => '',
                                  'i_2f' => '',
                                  'i_2g' => '',
                                  'j_1a' => '',
                                  'j_1b' => '',
                                  'j_1c' => '',
                                  'j_1d' => '',
                                  'j_1e' => '',
                                  'k_1' => '',
                                  'k_2' => '',
                                  'l_1' => '',
                                  'm_1' => '',
                                  'n_b1' => '',
                                  'n_b2' => '',
                                  'n_b3' => '',
                                  'n_b4' => '',
                                  'n_b5' => '',
                                  'n_b6' => '',
                                  'n_b7' => '',
                                  'n_b8' => '',
                                  'n_b9' => '',
                                  'n_b10' => '',
                                  'n_b11' => '',
                                  'n_b12' => '',
                                  'n_c1' => '',
                                  'n_c2' => '',
                                  'n_c3' => '',
                                  'n_c4' => '',
                                  'n_c5' => '',
                                  'n_c6' => '',
                                  'n_c7' => '',
                                  'n_c8' => '',
                                  'n_c9' => '',
                                  'n_c10' => '',
                                  'n_c11' => '',
                                  'n_c12' => '',
                                  'p_name' => 'Ахметова А.А.',
                                  'p_code' => '6004',
                                  'p_date' => '01/01/2022',
                               ]);
    }
}