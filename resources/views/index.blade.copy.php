<?php
    use App\Models\Traning;
//     use App\Models\Users;
    foreach (Traning::all() as $traning) {
        echo $traning->iin;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Laragon</title>

        <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 30px;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Karla';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            .opt {
                margin-top: 30px;
            }

            .opt a {
              text-decoration: none;
              font-size: 150%;
            }

            a:hover {
              color: red;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
            <table>
              <tr>
                <td> <label for="iin">Iin:</label> </td>
                <td> <input type="text" id="iin" name="iin"> </td>
              </tr>
              <tr>
                <td> <label for="period">period:</label> </td>
                <td> <input type="text" id="period" name="period"> </td>
              </tr>
              <tr>
                <td> <label for="surname">surname:</label> </td>
                <td> <input type="text" id="surname" name="surname"> </td>
              </tr>
              <tr>
                <td> <label for="name">name:</label> </td>
                <td> <input type="text" id="name" name="name"> </td>
              </tr>
              <tr>
                <td> <label for="patronymic">patronymic:</label> </td>
                <td> <input type="text" id="patronymic" name="patronymic"> </td>
              </tr>
              <tr>
                <td> <label for="phonename">phone:</label> </td>
                <td> <input type="text" id="phonename" name="phonename"> </td>
              </tr>
              <tr>
                <td> <label for="email">email:</label> </td>
                <td> <input type="text" id="email" name="email"> </td>
              </tr>
              <tr>
                <td> <label for="declarationtype">declarationtype:</label> </td>
                <td> <input type="text" id="declarationtype" name="declarationtype"> </td>
              </tr>
              <tr>
                <td> <label for="b_1">b_1:</label> </td>
                <td> <input type="text" id="b_1" name="b_1"> </td>
              </tr>
              <tr>
                <td> <label for="b_2">b_2:</label> </td>
                <td> <input type="text" id="b_2" name="b_2"> </td>
              </tr>
              <tr>
                <td> <label for="b_2a">b_2a:</label> </td>
                <td> <input type="text" id="b_2a" name="b_2a"> </td>
              </tr>
              <tr>
                <td> <label for="b_2b">b_2b:</label> </td>
                <td> <input type="text" id="b_2b" name="b_2b"> </td>
              </tr>
              <tr>
                <td> <label for="b_2c">b_2c:</label> </td>
                <td> <input type="text" id="b_2c" name="b_2c"> </td>
              </tr>
              <tr>
                <td> <label for="b_2d">b_2d:</label> </td>
                <td> <input type="text" id="b_2d" name="b_2d"> </td>
              </tr>
              <tr>
                <td> <label for="c_1">c_1:</label> </td>
                <td> <input type="text" id="c_1" name="c_1"> </td>
              </tr>
              <tr>
                <td> <label for="d_1">d_1:</label> </td>
                <td> <input type="text" id="d_1" name="d_1"> </td>
              </tr>
              <tr>
                <td> <label for="e_1">e_1:</label> </td>
                <td> <input type="text" id="e_1" name="e_1"> </td>
              </tr>
              <tr>
                <td> <label for="e_1a">e_1a:</label> </td>
                <td> <input type="text" id="e_1a" name="e_1a"> </td>
              </tr>
              <tr>
                <td> <label for="e_1b">e_1b:</label> </td>
                <td> <input type="text" id="e_1b" name="e_1b"> </td>
              </tr>
              <tr>
                <td> <label for="e_1c">e_1c:</label> </td>
                <td> <input type="text" id="e_1c" name="e_1c"> </td>
              </tr>
              <tr>
                <td> <label for="e_1d">e_1d:</label> </td>
                <td> <input type="text" id="e_1d" name="e_1d"> </td>
              </tr>
              <tr>
                <td> <label for="e_2">e_2:</label> </td>
                <td> <input type="text" id="e_2" name="e_2"> </td>
              </tr>
              <tr>
                <td> <label for="e_3">e_3:</label> </td>
                <td> <input type="text" id="e_3" name="e_3"> </td>
              </tr>
              <tr>
                <td> <label for="e_4">e_4:</label> </td>
                <td> <input type="text" id="e_4" name="e_4"> </td>
              </tr>
              <tr>
                <td> <label for="e_5">e_5:</label> </td>
                <td> <input type="text" id="e_5" name="e_5"> </td>
              </tr>
              <tr>
                <td> <label for="f_1a">f_1a:</label> </td>
                <td> <input type="text" id="f_1a" name="f_1a"> </td>
              </tr>
              <tr>
                <td> <label for="f_1b">f_1b:</label> </td>
                <td> <input type="text" id="f_1b" name="f_1b"> </td>
              </tr>
              <tr>
                <td> <label for="f_1c">f_1c:</label> </td>
                <td> <input type="text" id="f_1c" name="f_1c"> </td>
              </tr>
              <tr>
                <td> <label for="f_1d">f_1d:</label> </td>
                <td> <input type="text" id="f_1d" name="f_1d"> </td>
              </tr>
              <tr>
                <td> <label for="f_1e">f_1e:</label> </td>
                <td> <input type="text" id="f_1e" name="f_1e"> </td>
              </tr>
              <tr>
                <td> <label for="f_1f_1">f_1f_1:</label> </td>
                <td> <input type="text" id="f_1f_1" name="f_1f_1"> </td>
              </tr>
              <tr>
                <td> <label for="f_1f_2">f_1f_2:</label> </td>
                <td> <input type="text" id="f_1f_2" name="f_1f_2"> </td>
              </tr>
              <tr>
                <td> <label for="f_1f_2">f_1f_2:</label> </td>
                <td> <input type="text" id="f_1f_2" name="f_1f_2"> </td>
              </tr>
              <tr>
                <td> <label for="f_1g_1">f_1g_1:</label> </td>
                <td> <input type="text" id="f_1g_1" name="f_1g_1"> </td>
              </tr>
              <tr>
                <td> <label for="f_1g_2">f_1g_2:</label> </td>
                <td> <input type="text" id="f_1g_2" name="f_1g_2"> </td>
              </tr>
              <tr>
                <td> <label for="f_1h_1">f_1h_1:</label> </td>
                <td> <input type="text" id="f_1h_1" name="f_1h_1"> </td>
              </tr>
              <tr>
                <td> <label for="f_1h_2">f_1h_2:</label> </td>
                <td> <input type="text" id="f_1h_2" name="f_1h_2"> </td>
              </tr>
              <tr>
                <td> <label for="f_2a">f_2a:</label> </td>
                <td> <input type="text" id="f_2a" name="f_2a"> </td>
              </tr>
              <tr>
                <td> <label for="f_2b">f_2b:</label> </td>
                <td> <input type="text" id="f_2b" name="f_2b"> </td>
              </tr>
              <tr>
                <td> <label for="f_2c">f_2c:</label> </td>
                <td> <input type="text" id="f_2c" name="f_2c"> </td>
              </tr>
              <tr>
                <td> <label for="f_2d">f_2d:</label> </td>
                <td> <input type="text" id="f_2d" name="f_2d"> </td>
              </tr>
              <tr>
                <td> <label for="f_2e">f_2e:</label> </td>
                <td> <input type="text" id="f_2e" name="f_2e"> </td>
              </tr>
              <tr>
                <td> <label for="f_2f_1">f_2f_1:</label> </td>
                <td> <input type="text" id="f_2f_1" name="f_2f_1"> </td>
              </tr>
              <tr>
                <td> <label for="f_2f_2">f_2f_2:</label> </td>
                <td> <input type="text" id="f_2f_2" name="f_2f_2"> </td>
              </tr>
              <tr>
                <td> <label for="f_2f_3">f_2f_3:</label> </td>
                <td> <input type="text" id="f_2f_3" name="f_2f_3"> </td>
              </tr>
              <tr>
                <td> <label for="f_2g_1">f_2g_1:</label> </td>
                <td> <input type="text" id="f_2g_1" name="f_2g_1"> </td>
              </tr>
              <tr>
                <td> <label for="f_2g_2">f_2g_2:</label> </td>
                <td> <input type="text" id="f_2g_2" name="f_2g_2"> </td>
              </tr>
              <tr>
                <td> <label for="f_2g_3">f_2g_3:</label> </td>
                <td> <input type="text" id="f_2g_3" name="f_2g_3"> </td>
              </tr>
              <tr>
                <td> <label for="f_2h_1">f_2h_1:</label> </td>
                <td> <input type="text" id="f_2h_1" name="f_2h_1"> </td>
              </tr>
              <tr>
                <td> <label for="f_2h_2">f_2h_2:</label> </td>
                <td> <input type="text" id="f_2h_2" name="f_2h_2"> </td>
              </tr>
              <tr>
                <td> <label for="f_2h_3">f_2h_3:</label> </td>
                <td> <input type="text" id="f_2h_3" name="f_2h_3"> </td>
              </tr>
              <tr>
                <td> <label for="g_1a">g_1a:</label> </td>
                <td> <input type="text" id="g_1a" name="g_1a"> </td>
              </tr>
              <tr>
                <td> <label for="g_1b">g_1b:</label> </td>
                <td> <input type="text" id="g_1b" name="g_1b"> </td>
              </tr>
              <tr>
                <td> <label for="g_1c">g_1c:</label> </td>
                <td> <input type="text" id="g_1c" name="g_1c"> </td>
              </tr>
              <tr>
                <td> <label for="g_1d">g_1d:</label> </td>
                <td> <input type="text" id="g_1d" name="g_1d"> </td>
              </tr>
              <tr>
                <td> <label for="g_1e">g_1e:</label> </td>
                <td> <input type="text" id="g_1e" name="g_1e"> </td>
              </tr>
              <tr>
                <td> <label for="g_1f">g_1f:</label> </td>
                <td> <input type="text" id="g_1f" name="g_1f"> </td>
              </tr>
              <tr>
                <td> <label for="g_1g">g_1g:</label> </td>
                <td> <input type="text" id="g_1g" name="g_1g"> </td>
              </tr>
              <tr>
                <td> <label for="h_1a">h_1a:</label> </td>
                <td> <input type="text" id="h_1a" name="h_1a"> </td>
              </tr>
              <tr>
                <td> <label for="h_1b">h_1b:</label> </td>
                <td> <input type="text" id="h_1b" name="h_1b"> </td>
              </tr>
              <tr>
                <td> <label for="h_1c">h_1c:</label> </td>
                <td> <input type="text" id="h_1c" name="h_1c"> </td>
              </tr>
              <tr>
                <td> <label for="h_1d">h_1d:</label> </td>
                <td> <input type="text" id="h_1d" name="h_1d"> </td>
              </tr>
              <tr>
                <td> <label for="h_1e">h_1e:</label> </td>
                <td> <input type="text" id="h_1e" name="h_1e"> </td>
              </tr>
              <tr>
                <td> <label for="h_1f">h_1f:</label> </td>
                <td> <input type="text" id="h_1f" name="h_1f"> </td>
              </tr>
              <tr>
                <td> <label for="i_1a">i_1a:</label> </td>
                <td> <input type="text" id="i_1a" name="i_1a"> </td>
              </tr>
              <tr>
                <td> <label for="i_1b">i_1b:</label> </td>
                <td> <input type="text" id="i_1b" name="i_1b"> </td>
              </tr>
              <tr>
                <td> <label for="i_1c">i_1c:</label> </td>
                <td> <input type="text" id="i_1c" name="i_1c"> </td>
              </tr>
              <tr>
                <td> <label for="i_1d">i_1d:</label> </td>
                <td> <input type="text" id="i_1d" name="i_1d"> </td>
              </tr>
              <tr>
                <td> <label for="i_1e">i_1e:</label> </td>
                <td> <input type="text" id="i_1e" name="i_1e"> </td>
              </tr>
              <tr>
                <td> <label for="i_1f">i_1f:</label> </td>
                <td> <input type="text" id="i_1f" name="i_1f"> </td>
              </tr>
              <tr>
                <td> <label for="i_1g">i_1g:</label> </td>
                <td> <input type="text" id="i_1g" name="i_1g"> </td>
              </tr>
              <tr>
                <td> <label for="i_2a">i_2a:</label> </td>
                <td> <input type="text" id="i_2a" name="i_2a"> </td>
              </tr>
              <tr>
                <td> <label for="i_2b">i_2b:</label> </td>
                <td> <input type="text" id="i_2b" name="i_2b"> </td>
              </tr>
              <tr>
                <td> <label for="i_2c">i_2c:</label> </td>
                <td> <input type="text" id="i_2c" name="i_2c"> </td>
              </tr>
              <tr>
                <td> <label for="i_2d">i_2d:</label> </td>
                <td> <input type="text" id="i_2d" name="i_2d"> </td>
              </tr>
              <tr>
                <td> <label for="i_2e">i_2e:</label> </td>
                <td> <input type="text" id="i_2e" name="i_2e"> </td>
              </tr>
              <tr>
                <td> <label for="i_2f">i_2f:</label> </td>
                <td> <input type="text" id="i_2f" name="i_2f"> </td>
              </tr>
              <tr>
                <td> <label for="i_2g">i_2g:</label> </td>
                <td> <input type="text" id="i_2g" name="i_2g"> </td>
              </tr>
              <tr>
                <td> <label for="j_1a">j_1a:</label> </td>
                <td> <input type="text" id="j_1a" name="j_1a"> </td>
              </tr>
              <tr>
                <td> <label for="j_1b">j_1b:</label> </td>
                <td> <input type="text" id="j_1b" name="j_1b"> </td>
              </tr>
              <tr>
                <td> <label for="j_1c">j_1c:</label> </td>
                <td> <input type="text" id="j_1c" name="j_1c"> </td>
              </tr>
              <tr>
                <td> <label for="j_1d">j_1d:</label> </td>
                <td> <input type="text" id="j_1d" name="j_1d"> </td>
              </tr>
              <tr>
                <td> <label for="j_1e">j_1e:</label> </td>
                <td> <input type="text" id="j_1e" name="j_1e"> </td>
              </tr>
              <tr>
                <td> <label for="k_1">k_1:</label> </td>
                <td> <input type="text" id="k_1" name="k_1"> </td>
              </tr>
              <tr>
                <td> <label for="k_2">k_2:</label> </td>
                <td> <input type="text" id="k_2" name="k_2"> </td>
              </tr>
              <tr>
                <td> <label for="l_1">l_1:</label> </td>
                <td> <input type="text" id="l_1" name="l_1"> </td>
              </tr>
              <tr>
                <td> <label for="n_b1">n_b1:</label> </td>
                <td> <input type="text" id="n_b1" name="n_b1"> </td>
              </tr>
              <tr>
                <td> <label for="n_b2">n_b2:</label> </td>
                <td> <input type="text" id="n_b2" name="n_b2"> </td>
              </tr>
              <tr>
                <td> <label for="n_b3">n_b3:</label> </td>
                <td> <input type="text" id="n_b3" name="n_b3"> </td>
              </tr>
              <tr>
                <td> <label for="n_b4">n_b4:</label> </td>
                <td> <input type="text" id="n_b4" name="n_b4"> </td>
              </tr>
              <tr>
                <td> <label for="n_b5">n_b5:</label> </td>
                <td> <input type="text" id="n_b5" name="n_b5"> </td>
              </tr>
              <tr>
                <td> <label for="n_b6">n_b6:</label> </td>
                <td> <input type="text" id="n_b6" name="n_b6"> </td>
              </tr>
              <tr>
                <td> <label for="n_b7">n_b7:</label> </td>
                <td> <input type="text" id="n_b7" name="n_b7"> </td>
              </tr>
              <tr>
                <td> <label for="n_b8">n_b8:</label> </td>
                <td> <input type="text" id="n_b8" name="n_b8"> </td>
              </tr>
              <tr>
                <td> <label for="n_b9">n_b9:</label> </td>
                <td> <input type="text" id="n_b9" name="n_b9"> </td>
              </tr>
              <tr>
                <td> <label for="n_b10">n_b10:</label> </td>
                <td> <input type="text" id="n_b10" name="n_b10"> </td>
              </tr>
              <tr>
                <td> <label for="n_b11">n_b11:</label> </td>
                <td> <input type="text" id="n_b11" name="n_b11"> </td>
              </tr>
              <tr>
                <td> <label for="n_b12">n_b12:</label> </td>
                <td> <input type="text" id="n_b12" name="n_b12"> </td>
              </tr>
              <tr>
                <td> <label for="n_c1">n_c1:</label> </td>
                <td> <input type="text" id="n_c1" name="n_c1"> </td>
              </tr>
              <tr>
                <td> <label for="n_c2">n_c2:</label> </td>
                <td> <input type="text" id="n_c2" name="n_c2"> </td>
              </tr>
              <tr>
                <td> <label for="n_c3">n_c3:</label> </td>
                <td> <input type="text" id="n_c3" name="n_c3"> </td>
              </tr>
              <tr>
                <td> <label for="n_c4">n_c4:</label> </td>
                <td> <input type="text" id="n_c4" name="n_c4"> </td>
              </tr>
              <tr>
                <td> <label for="n_c5">n_c5:</label> </td>
                <td> <input type="text" id="n_c5" name="n_c5"> </td>
              </tr>
              <tr>
                <td> <label for="n_c6">n_c6:</label> </td>
                <td> <input type="text" id="n_c6" name="n_c6"> </td>
              </tr>
              <tr>
                <td> <label for="n_c7">n_c7:</label> </td>
                <td> <input type="text" id="n_c7" name="n_c7"> </td>
              </tr>
              <tr>
                <td> <label for="n_c8">n_c8:</label> </td>
                <td> <input type="text" id="n_c8" name="n_c8"> </td>
              </tr>
              <tr>
                <td> <label for="n_c9">n_c9:</label> </td>
                <td> <input type="text" id="n_c9" name="n_c9"> </td>
              </tr>
              <tr>
                <td> <label for="n_c10">n_c10:</label> </td>
                <td> <input type="text" id="n_c10" name="n_c10"> </td>
              </tr>
              <tr>
                <td> <label for="n_c11">n_c11:</label> </td>
                <td> <input type="text" id="n_c11" name="n_c11"> </td>
              </tr>
              <tr>
                <td> <label for="n_c12">n_c12:</label> </td>
                <td> <input type="text" id="n_c12" name="n_c12"> </td>
              </tr>
              <tr>
                <td> <label for="p_name">p_name:</label> </td>
                <td> <input type="text" id="p_name" name="p_name"> </td>
              </tr>
              <tr>
                <td> <label for="p_code">p_code:</label> </td>
                <td> <input type="text" id="p_code" name="p_code"> </td>
              </tr>
              <tr>
                <td> <label for="p_date">p_date:</label> </td>
                <td> <input type="text" id="p_date" name="p_date"> </td>
              </tr>
            </table>
            <button type="button">Проверить!</button>
            </div>
        </div>
    </body>
</html>
