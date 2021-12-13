<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Styles -->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">

    <title>Тестирование</title>
</head>
<body>
    <div class="container-fluid mainBg">
    <div class="row no-gutter">
        <div class="col-sm-1 sidebar">
            <!-- <div style="position:fixed;"> -->
                <img src="{{ asset('img/logo.svg') }}" style="width:70%" alt="">
            <!-- </div> -->
            <div>
            <div class="sectionTab first" style="margin-top: 20px;">
                <a class="sectionTabLink" href="#sectionA">Раздел А.</a>
            </div>
            <div class="sectionTab">
                <a class="sectionTabLink" href="#sectionB">Раздел B.</a>
            </div>
            <div class="sectionTab">
                <a class="sectionTabLink" href="#sectionC">Раздел C.</a>
            </div>
            <div class="sectionTab">
                <a class="sectionTabLink" href="#sectionD">Раздел D.</a>
            </div>
            <div class="sectionTab">
                <a class="sectionTabLink" href="#sectionE">Раздел E.</a>
            </div>
            <div class="sectionTab">
                <a class="sectionTabLink" href="#sectionF">Раздел F.</a>
            </div>
            <div class="sectionTab">
                <a class="sectionTabLink" href="#sectionG">Раздел G.</a>
            </div>
            <div class="sectionTab">
                <a class="sectionTabLink" href="#sectionH">Раздел H.</a>
            </div>
            <div class="sectionTab">
                <a class="sectionTabLink" href="#sectionI">Раздел I.</a>
            </div>
            <div class="sectionTab">
                <a class="sectionTabLink" href="#sectionJ">Раздел J.</a>
            </div>
            <div class="sectionTab">
                <a class="sectionTabLink" href="#sectionK">Раздел K.</a>
            </div>
            <div class="sectionTab">
                <a class="sectionTabLink" href="#sectionL">Раздел L.</a>
            </div>
            <div class="sectionTab">
                <a class="sectionTabLink" href="#sectionM">Раздел M.</a>
            </div>
            <div class="sectionTab">
                <a class="sectionTabLink" href="#sectionN">Раздел N.</a>
            </div>
            <div class="sectionTab">
                <a class="sectionTabLink" href="#sectionO">Раздел O.</a>
            </div>
            <div class="sectionTab">
                <a class="sectionTabLink" href="#sectionP">Раздел P.</a>
            </div>
            </div>
            <!-- <div style="position: fixed; bottom:3%"> -->
            <!-- <img src="{{ asset('img/madeby2.svg') }}" alt="" class="madeBy"> -->
            <!-- </div> -->
        </div>
        <div class="col-sm">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-custom2 navbarCustom" style="position: sticky;">
                <div class="container-fluid">
                    <div class="row" style="width:100%">
                        <div class="col-sm-4" style="margin-top:1%">
                            <a href="{{ route('test') }}" class="homeBtn"> <img src="{{ asset('img/home.svg') }}" alt="" style="margin-top: -9px; margin-right: 5px;"> На главную</a>
                            <span style="font-size:20px; font-weight:400; color:#000;text-decoration-line: underline; margin-left: 10px;">Тестирование</span>
                        </div>
                        <div class="col-sm-8" style="text-align:right; font-size:18px; font-weight:400">
                            <div class="row" style="float:right;">
                                <div class="col-sm" style="padding-right: unset; padding-left: unset;">
                                    <div class="selectCase2">
                                        <p id="caseDiscSmall" class="selectCaseText" style="color:#160B50; font-size:18px; font-weight:400; margin-bottom: 0rem; text-align:left">Кейс 1: Государственный служащий («М», ИИН 731201400135), в 2021 году</p>
                                    </div>
                                </div>
                                <div class="col-sm" style="padding-left: unset;">
                                    <button type="button" class="btn btnCustom3" id="showCaseBtn">Свернуть <img id="showCaseIcon" src="{{ asset('img/dropdownIconUpWhite.svg') }}" alt="" style="float:right; margin-top:10px"></button>
                                    <p id="time" class="timer" style="display: inline-block; margin-left: 30px;">20:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div >
                <div class="whiteBox2 open" id="showCaseBlock">
                    <p id="caseDisc">Государственный служащий («М», ИИН 731201400135), в 2021 году:</p>
                </div>
                <div class="whiteBox3" id="formBox" style="  font-family: 'Times New Roman', Times, serif!important;">
                    <form method="post" id="myform" action="{{ route('test_store', $id) }}">
                    @csrf
                    <div class="container">
                        <p class="formText">ДЕКЛАРАЦИЯ О ДОХОДАХ И ИМУЩЕСТВЕ</br>ФИЗИЧЕСКОГО ЛИЦА</p>
                        <!-- <p class="formText2 sideText">Форма 270.00 стр. 01</p> -->
                        <!-- РАЗДЕЛ A -->
                        <p id="sectionA" class="formText">Раздел A. Общая информация о налогоплательщике </p>
                        <div class="row" >
                            <div class="col-sm-6" style="text-align: left;">
                                <label class="formText" for="iinInput">1. ИИН</label>
                                <input type="number" class="formTextBox" style="width:50%" id="iin" name="iin" value="{{ old('iin') }}">
                            </div>
                            <div class="col-sm-6" style="text-align: left;">
                                <label class="formText" for="taxYearInput">2. Налоговый период:</label>
                                <input type="number" class="formTextBox" style="width:10%" id="period" name="period" value="{{ old('period') }}"><span class="formText">год</span>
                            </div>
                        </div>
                        <div class="row"  style="padding-left:15px; padding-right:15px;">
                            <div style="display:flex; width:100%">
                                <label class="formText" for="surnameInput" style="text-align: left; white-space: nowrap;">3. Фамилия</label>
                                <input type="text" class="formTextBox" style="width:100%"  id="surname" name="surname" value="{{ old('surname') }}">
                            </div>
                        </div>
                        <div class="row"  style="padding-left:15px; padding-right:15px;">
                            <div style="display:flex; width:100%">
                                <label class="formText" for="nameInput" style="text-align: left; white-space: nowrap;">Имя</label>
                                <input type="text" class="formTextBox" style="width:100%" id="name" name="name" value="{{ old('name') }}">
                            </div>
                        </div>
                        <div class="row"  style="padding-left:15px; padding-right:15px;">
                            <div style="display:flex; width:100%">
                                <label class="formText" for="surnameInput2" style="text-align: left; white-space: nowrap;">Отчество (при его наличии)</label>
                                <input type="text" class="formTextBox" style="width:100%" id="patronymic" name="patronymic" value="{{ old('patronymic') }}">
                            </div>
                        </div>
                        <div class="row"  style="padding-left:15px; padding-right:15px;">
                            <div style="display:flex; width:100%">
                                <label class="formText" for="phoneInput" style="text-align: left; white-space: nowrap;">Номер телефона</label>
                                <input type="tel" class="formTextBox" style="width:100%" id="phonename" name="phonename" value="{{ old('phonename') }}">
                                <label class="formText" for="emailInput" style="text-align: left; white-space: nowrap;">Электронный адрес</label>
                                <input type="email" class="formTextBox" style="width:100%" id="email" name="email" value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="row"  style="padding-left:15px; padding-right:15px;">
                            <div style="display:flex; width:100%">
                                <label class="formText" for="iinInput2" style="text-align: left; white-space: nowrap;">4. Лицо, являющееся законным представителем, укажите ИИН представляемого лица​</label>
                                <input type="text" class="formTextBox" style="width:100%" id="iinInput2">
                            </div>
                            <p class="formText2">(несовершеннолетнего и (или) недееспособного или ограниченно дееспособного)</p>
                        </div>
                        <div class="row"  style="padding-left:15px; padding-right:15px;">
                            <p class="formText">5. Вид декларации (укажите X в соответствующей ячейке)</p>
                        </div>
                        <div class="row"  style="padding-left:15px; padding-right:15px;">
                            <div style="display:flex; width:100%">
                                <label class="formText" for="declTypeInput" style="text-align: left; white-space: nowrap;">первоначальная</label>
                                <input type="checkbox" class="formTextBox" style="width:2%" id="declarationtype" name="declarationtype" value="первоначальная" <?php if(isset($_POST['declarationtype'])) echo "checked='checked'"; ?>>
                                <label class="formText" for="declTypeInput2" style="text-align: left; white-space: nowrap;">очередная</label>
                                <input type="checkbox" class="formTextBox" style="width:2%" id="declarationtype" name="declarationtype" value="очередная">
                                <label class="formText" for="declTypeInput3" style="text-align: left; white-space: nowrap;">дополнительная</label>
                                <input type="checkbox" class="formTextBox" style="width:2%" id="declarationtype" name="declarationtype" value="дополнительная">
                                <label class="formText" for="declTypeInput4" style="text-align: left; white-space: nowrap;">дополнительная по уведомлению</label>
                                <input type="checkbox" class="formTextBox" style="width:2%" id="declarationtype" name="declarationtype" value="дополнительная по уведомлению">
                            </div>
                        </div>
                         <!-- РАЗДЕЛ B -->
                         <p id="sectionB" class="formText newSection">Раздел В. Сведения о доходах </p>
                         <table class="tableCustom">
                             <th>(A) №</th>
                             <th>(B) Виды дохода</th>
                             <th>(C) Сумма</th>
                             <th class="iconCol"></th>

                             <tr>
                                 <td>01</td>
                                 <td style="text-align: left;">Доход, подлежащий налогообложению у источника выплаты</td>
                                 <td><input type="number" class="tableInput" id="b_1" name="b_1" value="{{ old('b_1') }}"></td>
                             </tr>
                             <tr>
                                 <td>02</td>
                                 <td style="text-align: left;">Доход, подлежащий налогообложению физическим лицом самостоятельно, в том числе:</td>
                                 <td><input type="number" class="tableInput" id="b_2" name="b_2" value="{{ old('b_2') }}"></td>
                             </tr>
                             <tr>
                                 <td>02A</td>
                                 <td style="text-align: left;">Имущественный доход</td>
                                 <td><input type="number" class="tableInput" id="b_2a" name="b_2a" value="{{ old('b_2a') }}"></td>
                             </tr>
                             <tr>
                                 <td>02B</td>
                                 <td style="text-align: left;">Доход лица, занимающегося частной практикой (сумма строк графы В раздела N)</td>
                                 <td><input type="number" class="tableInput" id="b_2b" name="b_2b" value="{{ old('b_2b') }}"></td>
                             </tr>
                             <tr>
                                 <td>02C</td>
                                 <td style="text-align: left;">Доход из источников за пределами Республики Казахстан</td>
                                 <td><input type="number" class="tableInput" id="b_2c" name="b_2c" value="{{ old('b_2c') }}"></td>
                             </tr>
                             <tr>
                                 <td>02D</td>
                                 <td style="text-align: left;">Доход индивидуального предпринимателя</td>
                                 <td><input type="number" class="tableInput" id="b_2d" name="b_2d" value="{{ old('b_2d') }}"></td>
                             </tr>
                         </table>
                        <!-- РАЗДЕЛ C -->
                        <div id="sectionC" class="row newSection" style="padding-left:15px; padding-right:15px;">
                            <div style="display:flex; width:100%; justify-content: center;">
                                <label class="formText" for="sectionCInput" style="white-space: nowrap;">Раздел C. Общая сумма корректировки дохода в соответствии со статьей 341 НК </label>
                                <input type="text" class="formTextBox" style="width:10%" id="sectionCInput">
                            </div>
                        </div>
                        <!-- РАЗДЕЛ D -->
                        <div id="sectionD" class="row newSection" style="padding-left:15px; padding-right:15px;">
                        <div style="display:flex; width:100%; justify-content: center;">
                            <label class="formText" for="sectionDInput" style="white-space: nowrap;">Раздел D. Сумма налоговых вычетов, не примененных налоговым агентом </label>
                            <input type="text" class="formTextBox" style="width:10%" id="sectionDInput">
                        </div>
                        </div>
                            <!-- РАЗДЕЛ E -->
                            <p id="sectionE" class="formText newSection">Раздел E. Исчисление индивидуального подоходного налога (ИПН) </p>
                            <table class="tableCustom">
                                <th style=" white-space: nowrap;">(A) №</th>
                                <th>(B) Наименование</th>
                                <th>(C) Сумма</th>
                                <th class="iconCol"></th>

                                <tr>
                                    <td>01</td>
                                    <td style="text-align: left;">Сумма исчисленного ИПН по доходам, подлежащим налогообложению самостоятельно (за исключением доходов от деятельности индивидуального предпринимателя), в том числе:</td>
                                    <td><input type="number" class="tableInput" id="e_1" name="e_1" value="{{ old('e_1') }}"></td>
                                </tr>
                                <tr>
                                    <td>01A</td>
                                    <td style="text-align: left;">Сумма ИПН с дохода лица, занимающегося частной практикой (сумма строк графы С раздела N)</td>
                                    <td><input type="number" class="tableInput" id="e_1a" name="e_1a" value="{{ old('e_1a') }}"></td>
                                </tr>
                                <tr>
                                    <td>01B</td>
                                    <td style="text-align: left;">Сумма исчисленного ИПН с суммарной прибыли КИК и ПУ КИК, за исключением зарегистрированных в государствах с льготным налогообложением</td>
                                    <td><input type="number" class="tableInput" id="e_1b" name="e_1b" value="{{ old('e_1b') }}"></td>
                                </tr>
                                <tr>
                                    <td>01C</td>
                                    <td style="text-align: left;">Сумма исчисленного ИПН с суммарной прибыли КИК и ПУ КИК, зарегистрированных в государстве с льготным налогообложением</td>
                                    <td><input type="number" class="tableInput" id="e_1c" name="e_1c" value="{{ old('e_1c') }}"></td>
                                </tr>
                                <tr>
                                    <td>01D</td>
                                    <td style="text-align: left;">Сумма ИПН с доходов из источников за пределами Республики Казахстан</td>
                                    <td><input type="number" class="tableInput" id="e_1d" name="e_1d" value="{{ old('e_1d') }}"></td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td style="text-align: left;">Зачет иностранного налога с доходов из источников за пределами Республики Казахстан</td>
                                    <td><input type="number" class="tableInput" id="e_2" name="e_2" value="{{ old('e_2') }}"></td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                    <td style="text-align: left;">Зачет предварительных платежей по ИПН</td>
                                    <td><input type="number" class="tableInput" id="e_3" name="e_3" value="{{ old('e_3') }}"></td>
                                </tr>
                                <tr>
                                    <td>04</td>
                                    <td style="text-align: left;">Итого ИПН, подлежащего уплате (строка 01 - строка 01А - строка 01В - строка 01С - строка 02 - строка 03)</td>
                                    <td><input type="number" class="tableInput" id="e_4" name="e_4" value="{{ old('e_4') }}"></td>
                                </tr>
                                <tr>
                                    <td>05</td>
                                    <td style="text-align: left;">БИН аппаратов акимов городов районного значения, сел, поселков и сельских округов</td>
                                    <td><input type="text" class="tableInput"></td>
                                </tr>
                            </table>
                         <!-- РАЗДЕЛ F -->
                         <p id="sectionF" class="formText newSection">Раздел F. Сведения о приобретении (получении) имущества и об источниках покрытия расходов на приобретение имущества </p>
                         <table class="tableCustom">
                             <th colspan="4">(01) Сведения о приобретении (получении) имущества</th>
                             <th></th>
                             <th colspan="2">(02) Сведения об источниках покрытия расходов на приобретение имущества</th>
                             <th></th>

                             <tr>
                                <td>(А) №</td>
                                <td>(В) Вид имущества</td>
                                <td>(С) Идентификацион-ный номер</td>
                                <td>(D) Код страны</td>
                                <td>(E) Стоимость (цена) в тенге</td>
                                <td>(F) Источник покрытия расходов</td>
                                <td>(G) ИИН/БИН источника</td>
                                <td>(H) Сумма</td>
                             </tr>
                             <tr>
                                <td><input type="text" class="tableInput" id="f_1a" name="f_1a" value="{{ old('f_1a') }}"></td>
                                <td><input type="text" class="tableInput" id="f_1b" name="f_1b" value="{{ old('f_1b') }}"></td>
                                <td><input type="text" class="tableInput" id="f_1c" name="f_1c" value="{{ old('f_1c') }}"></td>
                                <td><input type="text" class="tableInput" id="f_1d" name="f_1d" value="{{ old('f_1d') }}"></td>
                                <td><input type="text" class="tableInput" id="f_1e" name="f_1e" value="{{ old('f_1e') }}"></td>
                                <td><input type="text" class="tableInput" id="f_1f_1" name="f_1f_1" value="{{ old('f_1f_1') }}"></td>
                                <td><input type="text" class="tableInput" id="f_1g_1" name="f_1g_1" value="{{ old('f_1g_1') }}"></td>
                                <td><input type="text" class="tableInput" id="f_1h_1" name="f_1h_1" value="{{ old('f_1h_1') }}"></td>
                             </tr>
                             <tr>
                                <td><input type="text" class="tableInput" id="f_2a" name="f_2a" value="{{ old('f_2a') }}"></td>
                                <td><input type="text" class="tableInput" id="f_2b" name="f_2b" value="{{ old('f_2b') }}"></td>
                                <td><input type="text" class="tableInput" id="f_2c" name="f_2c" value="{{ old('f_2c') }}"></td>
                                <td><input type="text" class="tableInput" id="f_2d" name="f_2d" value="{{ old('f_2d') }}"></td>
                                <td><input type="text" class="tableInput" id="f_2e" name="f_2e" value="{{ old('f_2e') }}"></td>
                                <td><input type="text" class="tableInput" id="f_1f_2" name="f_1f_2" value="{{ old('f_1f_2') }}"></td>
                                <td><input type="text" class="tableInput" id="f_1g_2" name="f_1g_2" value="{{ old('f_1g_2') }}"></td>
                                <td><input type="text" class="tableInput" id="f_1h_2" name="f_1h_2" value="{{ old('f_1h_2') }}"></td>
                             </tr>
                             <tr>
                                <td><input type="text" class="tableInput" id="f_2a" name="f_2a" value="{{ old('f_2a') }}"></td>
                                <td><input type="text" class="tableInput" id="f_2b" name="f_2b" value="{{ old('f_2b') }}"></td>
                                <td><input type="text" class="tableInput" id="f_2c" name="f_2c" value="{{ old('f_2c') }}"></td>
                                <td><input type="text" class="tableInput" id="f_2d" name="f_2d" value="{{ old('f_2d') }}"></td>
                                <td><input type="text" class="tableInput" id="f_2e" name="f_2e" value="{{ old('f_2e') }}"></td>
                                <td><input type="text" class="tableInput" id="f_2f_1" name="f_2f_1" value="{{ old('f_2f_1') }}"></td>
                                <td><input type="text" class="tableInput" id="f_2g_1" name="f_2g_1" value="{{ old('f_2g_1') }}"></td>
                                <td><input type="text" class="tableInput" id="f_2h_1" name="f_2h_1" value="{{ old('f_2h_1') }}"></td>
                             </tr>
                             <tr>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput" id="f_2f_2" name="f_2f_2" value="{{ old('f_2f_2') }}"></td>
                                <td><input type="text" class="tableInput" id="f_2g_2" name="f_2g_2" value="{{ old('f_2g_2') }}"></td>
                                <td><input type="text" class="tableInput" id="f_2h_2" name="f_2h_2" value="{{ old('f_2h_2') }}"></td>
                             </tr>
                             <tr>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput" id="f_2f_3" name="f_2f_3" value="{{ old('f_2f_3') }}"></td>
                                <td><input type="text" class="tableInput" id="f_2g_3" name="f_2g_3" value="{{ old('f_2g_3') }}"></td>
                                <td><input type="text" class="tableInput" id="f_2h_3" name="f_2h_3" value="{{ old('f_2h_3') }}"></td>
                             </tr>
                             <tr>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                             </tr>
                             <tr>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                             </tr>
                             <tr>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                             </tr>
                             <tr>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                             </tr>
                             <tr>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                             </tr>
                         </table>
                          <!-- РАЗДЕЛ G -->
                          <p id="sectionG" class="formText newSection">Раздел G. Сведения об отчуждении имущества </p>
                          <table class="tableCustom">
                            <th>(A) №</th>
                            <th>(B) Вид имущества</th>
                            <th>(C) Идентификаци-онный номер</th>
                            <th>(D) Код страны</th>
                            <th>(E) Ф.И.О./наименова-ние покупателя</th>
                            <th>(F) ИНН/БИН покупателя</th>
                            <th>(G) Стоимость (цена) реализации  (в тенге)</th>

                            <tr>
                                <td><input type="text" class="tableInput" id="g_1a" name="g_1a" value="{{ old('g_1a') }}"></td>
                                <td><input type="text" class="tableInput" id="g_1b" name="g_1b" value="{{ old('g_1b') }}"></td>
                                <td><input type="text" class="tableInput" id="g_1c" name="g_1c" value="{{ old('g_1c') }}"></td>
                                <td><input type="text" class="tableInput" id="g_1d" name="g_1d" value="{{ old('g_1d') }}"></td>
                                <td><input type="text" class="tableInput" id="g_1e" name="g_1e" value="{{ old('g_1e') }}"></td>
                                <td><input type="text" class="tableInput" id="g_1f" name="g_1f" value="{{ old('g_1f') }}"></td>
                                <td><input type="text" class="tableInput" id="g_1g" name="g_1g" value="{{ old('g_1g') }}"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                            </tr>
                        </table>
                          <!-- РАЗДЕЛ H -->
                          <p id="sectionH" class="formText newSection">Раздел H. Сведения о деньгах на банковских счетах в иностранных банках, находящихся за пределами Республики Казахстан, в сумме, в совокупности превышающей 1000-кратный размер МРП, установленного законом о республиканском бюджете и действующего на 31 декабря отчетного налогового периода </p>
                          <table class="tableCustom">
                            <th>(A) №</th>
                            <th>(B) Идентификационный номер банковского учреждения</th>
                            <th>(C) Наименование банковского учреждения</th>
                            <th>(D) Код страны</th>
                            <th>(E) Код валюты</th>
                            <th>(F) Сумма</th>

                            <tr>
                                <td><input type="text" class="tableInput" id="h_1a" name="h_1a" value="{{ old('h_1a') }}"></td>
                                <td><input type="text" class="tableInput" id="h_1b" name="h_1b" value="{{ old('h_1b') }}"></td>
                                <td><input type="text" class="tableInput" id="h_1c" name="h_1c" value="{{ old('h_1c') }}"></td>
                                <td><input type="text" class="tableInput" id="h_1d" name="h_1d" value="{{ old('h_1d') }}"></td>
                                <td><input type="text" class="tableInput" id="h_1e" name="h_1e" value="{{ old('h_1e') }}"></td>
                                <td><input type="text" class="tableInput" id="h_1f" name="h_1f" value="{{ old('h_1f') }}"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                            </tr>
                        </table>
                         <!-- РАЗДЕЛ I -->
                         <p id="sectionI" class="formText newSection">Раздел I. Сведения о наличии дебиторской/кредиторской задолженности,
                            в том числе за пределами Республики Казахстан
                            на 31 декабря отчетного налогового периода
                            </p>
                         <table class="tableCustom">
                           <th>(A) №</th>
                           <th>(B) Вид задолженности (Д/К)</th>
                           <th>(C) ИИН/БИН дебитора/кредитора</th>
                           <th>(D) Код страны регистрации дебитора/кредитора</th>
                           <th>(E) Код валюты</th>
                           <th>(F) Сумма задолженности</th>
                           <th>(G) ИИН нотариуса, проводившего нотариальные действия</th>

                           <tr>
                               <td><input type="text" class="tableInput" id="i_1a" name="i_1a" value="{{ old('i_1a') }}"></td>
                               <td><input type="text" class="tableInput" id="i_1b" name="i_1b" value="{{ old('i_1b') }}"></td>
                               <td><input type="text" class="tableInput" id="i_1c" name="i_1c" value="{{ old('i_1c') }}"></td>
                               <td><input type="text" class="tableInput" id="i_1d" name="i_1d" value="{{ old('i_1d') }}"></td>
                               <td><input type="text" class="tableInput" id="i_1e" name="i_1e" value="{{ old('i_1e') }}"></td>
                               <td><input type="text" class="tableInput" id="i_1f" name="i_1f" value="{{ old('i_1f') }}"></td>
                               <td><input type="text" class="tableInput" id="i_1g" name="i_1g" value="{{ old('i_1g') }}"></td>
                           </tr>
                           <tr>
                            <td><input type="text" class="tableInput" id="i_2a" name="i_2a" value="{{ old('i_2a') }}"></td>
                            <td><input type="text" class="tableInput" id="i_2b" name="i_2b" value="{{ old('i_2b') }}"></td>
                            <td><input type="text" class="tableInput" id="i_2c" name="i_2c" value="{{ old('i_2c') }}"></td>
                            <td><input type="text" class="tableInput" id="i_2d" name="i_2d" value="{{ old('i_2d') }}"></td>
                            <td><input type="text" class="tableInput" id="i_2e" name="i_2e" value="{{ old('i_2e') }}"></td>
                            <td><input type="text" class="tableInput" id="i_2f" name="i_2f" value="{{ old('i_2f') }}"></td>
                            <td><input type="text" class="tableInput" id="i_2g" name="i_2g" value="{{ old('i_2g') }}"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                        </tr>
                        </table>
                        <!-- РАЗДЕЛ J -->
                        <p id="sectionJ" class="formText newSection">Раздел J. Сведения о наличии имущества и активов за пределами Республики Казахстан на 31 декабря отчетного налогового периода </p>
                         <table class="tableCustom">

                            <th>(A) №</th>
                            <th>(B) Вид имущества</th>
                            <th>(C) Идентификационный номер</th>
                            <th>(D) Код страны</th>
                            <th>(E) Адрес регистрации</th>

                           <tr>
                            <td><input type="text" class="tableInput" id="j_1a" name="j_1a" value="{{ old('j_1a') }}"></td>
                            <td><input type="text" class="tableInput" id="j_1b" name="j_1b" value="{{ old('j_1b') }}"></td>
                            <td><input type="text" class="tableInput" id="j_1c" name="j_1c" value="{{ old('j_1c') }}"></td>
                            <td><input type="text" class="tableInput" id="j_1d" name="j_1d" value="{{ old('j_1d') }}"></td>
                            <td><input type="text" class="tableInput" id="j_1e" name="j_1e" value="{{ old('j_1e') }}"></td>
                           </tr>
                           <tr>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                           </tr>
                           <tr>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                           </tr>
                           <tr>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                           </tr>
                           <tr>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                            <td><input type="text" class="tableInput"></td>
                           </tr>
                        </table>
                        <!-- РАЗДЕЛ K -->
                        <div class="row newSection" style="padding-left:15px; padding-right:15px;">
                        <div style="display:flex; width:100%; justify-content: center;">
                            <label id="sectionK" class="formText" for="sectionDInput" style="white-space: nowrap;">Раздел K. Требование о зачете превышения по ИПН в сумме: </label>
                            <input type="text" class="formTextBox" style="width:30%" id="sectionDInput">
                        </div>
                        </div>
                        <table class="tableCustom">
                            <th>№</th>
                            <th colspan="5">Превышение по ИПН,  прошу зачесть в счет:</th>

                            <tr>
                                <th rowspan="2">01</th>
                                <th rowspan="2">Имеющейся налоговой задолженности по:</th>
                                <td>КБК</td>
                                <td>Сумма налога</td>
                                <td>Сумма пени</td>
                                <td>Код ОГД</td>
                            </tr>
                            <tr>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                            </tr>
                            <tr>
                                <th rowspan="2">02</th>
                                <th rowspan="2">Предстоящих платежей по:</th>
                                <td>КБК</td>
                                <td>Сумма налога</td>
                                <td>-</td>
                                <td>Код ОГД</td>
                            </tr>
                            <tr>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                            </tr>
                        </table>
                        <!-- РАЗДЕЛ L -->
                        <p id="sectionL" class="formText newSection">Раздел L. Требование о возврате превышения по ИПН, если «Да» заполните таблицу </p>
                            <table class="tableCustom">
                                <th>№</th>
                                <th colspan="3">Сумму ИПН, после погашения имеющейся налоговой задолженности, а также  внесения в счет предстоящих платежей прошу вернуть на банковский счет</th>
                                <th><input type="text" class="tableInput"></th>

                                <tr>
                                    <td>01</td>
                                    <td>ИИК бенефициара (номер счета)</td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td>Код банка (Банковский идентификационный код)</td>
                                    <td><input type="text" class="tableInput"></td>
                                </tr>
                            </table>
                        <!-- РАЗДЕЛ M -->
                        <p id="sectionM" class="formText newSection">Раздел M. Согласие налогоплательщика на раскрытие сведений (укажите Х в соответствующей ячейке): </p>
                            <table class="tableCustom">
                                <th>Настоящим я даю согласие на представление банковскими учреждениями сведений о расходах физического лица на погашение вознаграждения по ипотечным жилищным займам, полученным на приобретение жилья в Республике Казахстан</th>
                                <th><input type="text" class="tableInput"></th>
                            </table>
                        <!-- РАЗДЕЛ N -->
                        <p id="sectionN" class="formText newSection">Раздел N. Для заполнения частными нотариусом, судебным исполнителем
                            адвокатом, профессиональным медиатором
                            </p>
                            <table class="tableCustom">
                                <th>(А) Период (месяц)</th>
                                <th>(В) Всего доходов от осуществления деятельности</th>
                                <th>(С) Всего сумма ИПН, подлежащего уплате в бюджет</th>
                                <th>(А) Период (месяц)</th>
                                <th>(В) Всего доходов от осуществления деятельности</th>
                                <th>(С) Всего сумма ИПН, подлежащего уплате в бюджет</th>

                                <tr>
                                    <td>Январь</td>
                                    <td><input type="text" class="tableInput" id="n_b1" name="n_b1" value="{{ old('n_b1') }}"></td>
                                    <td><input type="text" class="tableInput" id="n_c1" name="n_c1" value="{{ old('n_c1') }}"></td>
                                    <td>Июль</td>
                                    <td><input type="text" class="tableInput" id="n_b7" name="n_b7" value="{{ old('n_b7') }}"></td>
                                    <td><input type="text" class="tableInput" id="n_c7" name="n_c7" value="{{ old('n_c7') }}"></td>
                                </tr>
                                <tr>
                                    <td>Февраль</td>
                                    <td><input type="text" class="tableInput" id="n_b2" name="n_b2" value="{{ old('n_b2') }}"></td>
                                    <td><input type="text" class="tableInput" id="n_c2" name="n_c2" value="{{ old('n_c2') }}"></td>
                                    <td>Август</td>
                                    <td><input type="text" class="tableInput" id="n_b8" name="n_b8" value="{{ old('n_b8') }}"></td>
                                    <td><input type="text" class="tableInput" id="n_c8" name="n_c8" value="{{ old('n_c8') }}"></td>
                                </tr>
                                <tr>
                                    <td>Март</td>
                                    <td><input type="text" class="tableInput" id="n_b3" name="n_b3" value="{{ old('n_b3') }}"></td>
                                    <td><input type="text" class="tableInput" id="n_c3" name="n_c3" value="{{ old('n_c3') }}"></td>
                                    <td>Сентябрь</td>
                                    <td><input type="text" class="tableInput" id="n_b9" name="n_b9" value="{{ old('n_b9') }}"></td>
                                    <td><input type="text" class="tableInput" id="n_c9" name="n_c9" value="{{ old('n_c9') }}"></td>
                                </tr>
                                <tr>
                                    <td>Апрель</td>
                                    <td><input type="text" class="tableInput" id="n_b4" name="n_b4" value="{{ old('n_b4') }}"></td>
                                    <td><input type="text" class="tableInput" id="n_c4" name="n_c4" value="{{ old('n_c4') }}"></td>
                                    <td>Октябрь</td>
                                    <td><input type="text" class="tableInput" id="n_b10" name="n_b10" value="{{ old('n_b10') }}"></td>
                                    <td><input type="text" class="tableInput" id="n_c10" name="n_c10" value="{{ old('n_c10') }}"></td>
                                </tr>
                                <tr>
                                    <td>Май</td>
                                    <td><input type="text" class="tableInput" id="n_b5" name="n_b5" value="{{ old('n_b5') }}"></td>
                                    <td><input type="text" class="tableInput" id="n_c5" name="n_c5" value="{{ old('n_c5') }}"></td>
                                    <td>Ноябрь</td>
                                    <td><input type="text" class="tableInput" id="n_b11" name="n_b11" value="{{ old('n_b11') }}"></td>
                                    <td><input type="text" class="tableInput" id="n_c11" name="n_c11" value="{{ old('n_c11') }}"></td>
                                </tr>
                                <tr>
                                    <td>Июнь</td>
                                    <td><input type="text" class="tableInput" id="n_b6" name="n_b6" value="{{ old('n_b6') }}"></td>
                                    <td><input type="text" class="tableInput" id="n_c6" name="n_c6" value="{{ old('n_c6') }}"></td>
                                    <td>Декабрь</td>
                                    <td><input type="text" class="tableInput" id="n_b12" name="n_b12" value="{{ old('n_b12') }}"></td>
                                    <td><input type="text" class="tableInput" id="n_c12" name="n_c12" value="{{ old('n_c12') }}"></td>
                                </tr>
                            </table>
                        <!-- РАЗДЕЛ O -->
                            <p id="sectionO" class="formText newSection">Раздел O. Финансовая прибыль контролируемой иностранной компании (КИК) </p>
                            <table class="tableCustom">
                                <th>(А) №</th>
                                <th>(В) Наименование   КИК или ПУ КИК</th>
                                <th>(С) Код страны регистрации</th>
                                <th>(D) Номер Государственной (налоговой) регистрации КИК или ПУ КИК</th>
                                <th>(E) Коэффици-ент  участия или контроля</th>
                                <th>(F) Код валюты</th>
                                <th>(G) Финансовая прибыль до налого-обложения в иностранной валюте</th>
                                <th>(H) Примечание *</th>

                                <tr>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                    <td><input type="text" class="tableInput"></td>
                                </tr>
                            </table>
                            <div style="font-size: 12px; font-weight: 400; text-align: left; margin-top:20px">
                                <p>* Заполняется в случае наличия:</p>
                                <p>Суммы убытков КИК или ПУ КИК, возникающих в двух периодах, последовательно предшествующих отчетному периоду; суммы уменьшений в иностранной валюте; суммы уменьшений в иностранной валюте в соответствии с подпунктом 1) пункта 3 статьи 340 НК; суммы уменьшений в иностранной валюте в соответствии с подпунктом 2) пункта 3 статьи 340 НК; суммы уменьшений в иностранной валюте в соответствии с подпунктом 3) пункта 3 статьи 340 НК; суммы уменьшений в иностранной  валюте в соответствии с подпунктом                4) пункта 3 статьи 340 НК; суммы уменьшений в иностранной  валюте в соответствии с подпунктом 5) пункта 3 статьи 340 НК; суммы уменьшений в иностранной  валюте в соответствии с подпунктом 6) пункта 3 статьи 340 НК; суммы уменьшений в иностранной валюте в соответствии с подпунктом 7) пункта 3 статьи 340 НК; суммы уменьшений в иностранной  валюте в соответствии с подпунктом 8) пункта               3 статьи 340 НК; суммы уменьшений в иностранной валюте в соответствии с подпунктом 9) пункта 3 статьи  340 НК; суммы уменьшений в иностранной валюте в соответствии с подпунктом 10) пункта 3 статьи 340 Налогового кодекса; Финансовой прибыли, с учетом уменьшений и убытков КИК или ПУ КИК в иностранной валюте; финансовой прибыли, подлежащей налогообложению в иностранной валюте; Финансовой прибыли, подлежащей налогообложению в национальной валюте; суммы иностранного налога на прибыль по финансовой отчетности в иностранной валюте; суммы уплаченного иностранного налога на прибыль в иностранной валюте; суммы иностранного налога на прибыль, подлежащей отнесению в зачет, в национальной валюте; суммарная прибыль КИК и ПУ КИК; суммы облагаемого дохода КИК и ПУ КИК за исключением зарегистрированных в государствах с льготным налогообложением; суммы облагаемого дохода КИК и ПУ КИК, зарегистрированных в государствах с льготным налогообложением; Зачет иностранного налога с финансовой прибыли КИК или ПУ КИК.</p>
                            </div>
                            <!-- РАЗДЕЛ P -->
                            <p id="sectionP" class="formText newSection">Раздел P. Ответственность налогоплательщика</p>
                            <p class="formText">Я подтверждаю достоверность и полноту сведений, приведенных в данной декларации, и уведомлен(а) об ответственности в соответствии с законодательством Республики Казахстан</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="formText">Фамилия, имя, отчество (при его наличии) налогоплательщика/законного или уполномоченного представителя</p>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="tableInput" style="border-bottom: 1px solid;" id="p_name" name="p_name" value="{{ old('p_name') }}">
                                </div>
                            </div>
                            <div class="row" style="margin-bottom: 20px;">
                                <div class="col-sm-6">
                                    <label class="formText" for="sectionPInput" style="white-space: nowrap;">Код органа государственных доходов </label>
                                    <input type="text" class="tableInput" style="width:20%; border-bottom: 1px solid; margin-left: 10px;" id="p_code" name="p_code" value="{{ old('p_code') }}">
                                </div>
                                <div class="col-sm-6">
                                    <label class="formText" for="sectionPInput2" style="white-space: nowrap;">Дата подачи заявки </label>
                                    <input type="text" class="tableInput" style="width:20%; border-bottom: 1px solid; margin-left: 10px;" id="p_date" name="p_date" value="{{ old('p_date') }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="formText">Фамилия, имя, отчество (при его наличии) должностного лица, принявшего декларацию</p>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="tableInput" style="border-bottom: 1px solid;">
                                </div>
                            </div>
                            <div class="row" style="margin-bottom: 20px;">
                                <div class="col-sm-6">
                                </div>
                                <div class="col-sm-6">
                                    <label class="formText" for="sectionPInput3" style="white-space: nowrap;">Дата приема декларации </label>
                                    <input type="text" class="tableInput" style="width:20%; border-bottom: 1px solid; margin-left: 10px;" id="sectionPInput3">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="formText" for="sectionPInput4" style="white-space: nowrap;">Входящий номер документа </label>
                                    <input type="text" class="tableInput" style="width:20%; border-bottom: 1px solid; margin-left: 10px;" id="sectionPInput4">
                                </div>
                                <div class="col-sm-6">
                                    <label class="formText" for="sectionPInput5" style="white-space: nowrap;">Дата почтового штемпеля </label>
                                    <input type="text" class="tableInput" style="width:20%; border-bottom: 1px solid; margin-left: 10px;" id="sectionPInput5">
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
            <button onclick="topFunction()" id="toTop"> <img src="{{ asset('img/upBtn.svg') }}" alt=""> </button>
            <button onclick="bottomFunction()" id="toBottom"> <img src="{{ asset('img/downBtn.svg') }}" alt=""> </button>
            <div class="footer2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-1">
                            <img src="{{ asset('img/madeby.svg') }}" alt="">
                        </div>
                        <div class="col-sm-3">
                            <p style="font-size:22px; font-weight:700; text-decoration: underline; color:#D2AB67; margin-top:5%; margin-left: 10px;">#ВМЕСТЕКРАЗВИТИЮ</p>
                        </div>
                        <div class="col-sm-4">
                            <div style="background: #E84A4A;
                            border-radius: 4px;padding: 8px; margin-top: 3%;">
                            <p style="font-size:13px; font-weight:500; color:#fff; margin-bottom: 0;">У вас есть 20 минут на выполнение теста.
                                Не закрывайте, не обновляйте и не покидайте страницу до завершения.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <button type="button" class="btn btnCustom4" style="background-color: #282781;"  onclick="showInfoPopupCheck()"> Завершить</button>
                            <button type="button" class="btn btnCustom"><img src="{{ asset('img/supportIcon.svg') }}" alt=""> Тех. поддержка</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Info PopUps -->
            <div class="popupInfo" id="infoA" style="display: none;">
                <img src="{{ asset('img/closeIcon.svg') }}" class="closeIcon" alt="" onclick="closeInfoPopupA()">
                <div class="infoText">
                <p style="font-weight:700; font-size: 16px;">Раздел А «Общая информация о налогоплательщике»</p>
                <p style="font-weight:400; font-size: 16px;">
                    в строке 1 – указывается индивидуальный идентификационный номер  (ИИН) физического лица;</br>
                    в строке 2 – указывается налоговый период, за который представляется Декларация ( налоговым периодом для представления Декларации является календарный год);</br>
                    в строке 3 – указывается фамилия, имя, отчество (при его наличии) физического лица в соответствии с документами, удостоверяющими личность, номер телефона (по желанию) и электронный адрес (по желанию);</br>
                    в строке 4 – заполняется, в случае если физическое лицо, составляющее Декларацию, является законным представителем и указывается ИИН представляемого лица (несовершеннолетнего и (или) недееспособного или ограничено дееспособного). (данная строка заполняется с 2025 года)</br>
                    в строке 5 – указывается вид Декларации (первоначальная, очередная, дополнительная, доолнительная по уведомлению)</br>
                    !!! в случае представление декларации впервые, вид декларации указывается Первоначальная.
                </p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionA';">Читать полностью</button>
            </div>

            <div class="popupInfo" id="infoB" style="display: none;">
                <img src="{{ asset('img/closeIcon.svg') }}" class="closeIcon" alt="" onclick="closeInfoPopupB()">
                <div class="infoText">
                <p style="font-weight:700; font-size: 16px;">Раздел В «Начисленная сумма полученных  доходов»</p>
                <p style="font-weight:400; font-size: 16px;">
                    Годовой доход физического лица включает 18 видов доходов, согласно статье 321 Налогового кодекса, из которых 13 видов доходов облагает налоговый агент (работодатель), остальные 5 видов дохода физическое лицо может исчислить самостоятельно.</br>
                    *(Исчисление, удержание и уплата в бюджет индивидуального подоходного налога осуществляются у источника выплаты налоговым агентом по указанным доходам, в случае, если такие доходы подлежат выплате (выплачиваются) указанным налоговым агентом:</br>
                        1) доход работника, в том числе доход домашнего работника и доход трудового иммигранта-резидента;</br>
                        2) доход от реализации товаров, выполнения работ, оказания услуг, кроме имущественного дохода, полученный физическим лицом, не являющимся индивидуальным предпринимателем, лицом, занимающимся частной практикой;</br>
                        3) доход в виде оплаты третьим лицом стоимости товаров, выполненных работ, оказанных услуг, полученных физическим лицом;</br>
                        4) доход в виде работ, услуг, выполненных, оказанных в счет погашения задолженности перед физическим лицом;</br>
                        5) доход в виде безвозмездно полученного имущества, в том числе работ, услуг;</br>
                        6) доход в виде прощения долга;</br>
                        7) доход в виде уменьшения размера требования к должнику, за исключением списанных штрафа, пени и других видов санкций;</br>
                        8) доход в виде выплаты вознаграждения по операциям репо;</br>
                        9) доход в виде пенсионных выплат, единовременных пенсионных выплат;</br>
                        10) доход в виде дивидендов, вознаграждений, выигрышей;</br>
                        11) доход в виде стипендии;</br>
                        12) доход по договорам накопительного страхования;</br>
                        17) другие доходы, полученные от налогового агента или из источников за пределами Республики Казахстан;</br>
                    Исчисление, удержание и уплата в бюджет индивидуального подоходного налога по вышеуказанным доходам (в случае, если такие доходы не начислены налоговым агентом), а также по следующим видам доходов осуществляются физическим лицом самостоятельно:</br>
                        13) имущественный доход;</br>
                        14) доход индивидуального предпринимателя;</br>
                        15) доход лица, занимающегося частной практикой;</br>
                        16) доходы от личного подсобного хозяйства, учтенного в книге похозяйственного учета в соответствии с законодательством Республики Казахстан, подлежащие налогообложению, по которым не было произведено удержание индивидуального подоходного налога у источника выплаты в связи с представлением налоговому агенту недостоверных сведений лицом, занимающимся личным подсобным хозяйством;</br>
                        Другие доходы, не указанные в подпункте 1)-16) настоящей статьи, полученные от налогового агента или из источников за пределами Республика Казахстан;</br>
                        18) суммарная прибыль контролируемых иностранных компаний или постоянных учреждений контролируемых иностранных компаний, определяемая в соответствии со статьей 340 Налогового кодекса).</br>
                </p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionB';">Читать полностью</button>
            </div>

            <div class="popupInfo" id="infoB1" style="display: none;">
                <img src="{{ asset('img/closeIcon.svg') }}" class="closeIcon" alt="" onclick="closeInfoPopupB1()">
                <div class="infoText">
                <p style="font-weight:700; font-size: 16px;">Строка 01. Виды дохода, подлежащего налогообложению у источника выплаты (включает доходы согласно статьи 322, 323, 324, 325, 326, 327, 328, 329 Налогового кодекса)</p>
                <p style="font-weight:400; font-size: 16px;">
                   <ul>
                       <li>Доход работника, начисленный работодателем, доход работника может быть выражен в деньгах, в  натуральном виде и в виде материальной выгоды; </li>
                       <li>Доход в виде безвозмездно полученного имущества;</li>
                       <li>Доход в виде безвозмездно полученных работ и (или) услуг;</li>
                       <li>Доход в виде пенсионных выплат;</li>
                       <li>Доход в виде дивидендов, вознаграждений, выигрышей;</li>
                       <li>Доход в виде стипендий;</li>
                       <li>Доход по договорам накопительного страхования;</li>
                   </ul>
                </p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionB1';">Читать полностью</button>
            </div>

            <div class="popupInfo" id="infoB2" style="display: none;">
                <img src="{{ asset('img/closeIcon.svg') }}" class="closeIcon" alt="" onclick="closeInfoPopupB2()">
                <div class="infoText">
                <p style="font-weight:700; font-size: 16px;">Строка 02. Доход, подлежащий налогообложению физическим лицом самостоятельно, в том числе (параграф 2 главы 36 Налогового кодекса):</p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionB2';">Читать полностью</button>
            </div>

            <div class="popupInfo" id="infoB2A" style="display: none;">
                <img src="{{ asset('img/closeIcon.svg') }}" class="closeIcon" alt="" onclick="closeInfoPopupB2A()">
                <div class="infoText">
                <p style="font-weight:700; font-size: 16px;">Строка 02А. Имущественный доход (доходы в соответствии со статьей 330 Налогового кодекса):</p>
                <p style="font-weight:400; font-size: 16px;">
                    - Доход от прироста стоимости при реализации физическим лицом имущества в РК (применяются в отношении физических лиц, в том числе индивидуальных предпринимателей, применяющих специальный налоговый режим для субъектов малого бизнеса либо для крестьянских или фермерских хозяйств) (статья 331 Налогового кодекса);</br>
                    - Доход физического лица от реализации имущества, полученный из источников за пределами Республики Казахстан (статья 332 Налогового кодекса);</br>
                    - Доход от прироста стоимости при передаче физическим лицом имущества (кроме денег) в качестве вклада в уставный капитал (применяются в отношении физических лиц, в том числе индивидуальных предпринимателей, применяющих специальный налоговый режим для субъектов малого бизнеса либо для крестьянских или фермерских хозяйств) (статья 333 Налогового кодекса);</br>
                    - Доход, полученный физическим лицом, не являющимся индивидуальным предпринимателем и (или) плательщиком единого совокупного платежа, от сдачи в имущественный наем (аренду) имущества лицам, не являющимся налоговыми агентами;</br>
                    - Доход от уступки права требования, в том числе доли в жилом доме (здании) по договору о долевом участии в жилищном строительстве (статья 335 Налогового кодекса);</br>
                    - Доход от прироста стоимости при реализации прочих активов индивидуального предпринимателя, применяющего специальный налоговый режим для субъектов малого бизнеса либо для крестьянских или фермерских хозяйств (статья 334 Налогового кодекса).
                </p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionB2A';">Читать полностью</button>
            </div>

            <div class="popupInfo" id="infoB2B" style="display: none;">
                <img src="{{ asset('img/closeIcon.svg') }}" class="closeIcon" alt="" onclick="closeInfoPopupB2B()">
                <div class="infoText">
                <p style="font-weight:700; font-size: 16px;">Строка 02В. Доход лица, занимающегося частной практикой</p>
                <p style="font-weight:400; font-size: 16px;">
                    Отражаются доходы частного нотариуса, частного судебного исполнителя, адвоката, профессионального медиатора (статья 336 Налогового кодекса).
                </p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionB2B';">Читать полностью</button>
            </div>

            <div class="popupInfo" id="infoB2C" style="display: none;">
                <img src="{{ asset('img/closeIcon.svg') }}" class="closeIcon" alt="" onclick="closeInfoPopupB2C()">
                <div class="infoText">
                <p style="font-weight:700; font-size: 16px;">Строка 02С. Доход из источников за пределами Республики Казахстан (статья 338 Налогового кодекса)</p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionB2C';">Читать полностью</button>
            </div>
            <div class="popupInfo" id="infoB2D" style="display: none;">
                <img src="{{ asset('img/closeIcon.svg') }}" class="closeIcon" alt="" onclick="closeInfoPopupB2D()">
                <div class="infoText">
                <p style="font-weight:700; font-size: 16px;"">Строка 02D. Доход индивидуального предпринимателя (статья 338 Налогового кодекса)</p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionB2D';">Читать полностью</button>
            </div>
            <div class="popupInfo" id="infoC" style="display: none;">
                <img src="{{ asset('img/closeIcon.svg') }}" class="closeIcon" alt="" onclick="closeInfoPopupC()">
                <div class="infoText">
                <p style="font-weight:700; font-size: 16px;">Раздел С «Общая сумма корректировки дохода в соответствии со статьей 341 Налогового кодекса» налогоплательщик указывает сумму корректировки при их наличии в отчетном периоде</p>
                <p style="font-weight:400; font-size: 16px;">Из доходов физического лица, подлежащих налогообложению, исключаются 54 вида доходов указанные в статье 341 Налогового кодекса.</p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionC';">Читать полностью</button>
            </div>
            <div class="popupInfo" id="infoD" style="display: none;">
                <img src="{{ asset('img/closeIcon.svg') }}" class="closeIcon" alt="" onclick="closeInfoPopupD()">
                <div class="infoText">
                <p style="font-weight:700; font-size: 16px;">Раздел D «Cумма налоговых вычетов, не примененных налоговым агентом»</p>
                <p style="font-weight:400; font-size: 16px;">Указывается  сумма налоговых вычетов в соответствии со статьей 342 Налогового кодекса при их наличии в отчетном периоде. </p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionD';">Читать полностью</button>
            </div>
            <div class="popupInfo" id="infoE" style="display: none;">
                <img src="{{ asset('img/closeIcon.svg') }}" class="closeIcon" alt="" onclick="closeInfoPopupE()">
                <div class="infoText">
                <p style="font-weight:700; font-size: 16px;">Раздел Е. Исчисление индивидуального подоходного налога (ИПН)</p>
                <p style="font-weight:400; font-size: 16px;">Указывается сумма исчисленного индивидуального подоходного налога (далее – ИПН) с доходов, полученных в отчетном периоде.</p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionE';">Читать полностью</button>
            </div>
            <div class="popupInfo" id="infoE1" style="display: none;">
                <img src="{{ asset('img/closeIcon.svg') }}" class="closeIcon" alt="" onclick="closeInfoPopupE1()">
                <div class="infoText">
                <p style="font-weight:700; font-size: 16px;">Строка 01. Сумма исчисленного ИПН по доходам, подлежащим налогообложению самостоятельно (за исключением доходов от деятельности индивидуального предпринимателя), в том числе:</p>
                <p style="font-weight:400; font-size: 16px;">Налоговой базой для исчисления ИПН является доход полученный за налоговый период от сдачи в аренду недвижимости, от прироста стоимости при реализации физическим лицом имущества, от прироста стоимости при передаче имущества (кроме денег) в качестве вклада в уставный капитал, а также доход от уступки права требования.</p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionE1';">Читать полностью</button>
            </div>
            <div class="popupInfo" id="infoE1A" style="display: none;">
                <img src="{{ asset('img/closeIcon.svg') }}" class="closeIcon" alt="" onclick="closeInfoPopupE1A()">
                <div class="infoText">
                <p style="font-weight:700; font-size: 16px;">Строка 01А. Сумма ИПН с дохода лица, занимающегося частной практикой (сумма строк графы С раздела N):</p>
                <p style="font-weight:400; font-size: 16px;">Налоговая база для исчисления ИПН, является доход частного нотариуса, доход частного судебного исполнителя, доход адвоката, доход профессионального медиатора;</p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionE1A';">Читать полностью</button>
            </div>
            <div class="popupInfo" id="infoE1B" style="display: none;">
                <img src="{{ asset('img/closeIcon.svg') }}" class="closeIcon" alt="" onclick="closeInfoPopupE1B()">
                <div class="infoText">
                <p style="font-weight:700; font-size: 16px;">Строка 01 В. Сумма исчисленного ИПН с суммарной прибыли КИК и ПУ КИК, за исключением зарегистрированных в государствах с льготным налогообложением</p>
                <p style="font-weight:400; font-size: 16px;">Налоговой базой для исчисления ИПН является прибыль контролируемой иностранной компании (КИК) и финансовая прибыль Постоянных учреждений контролируемых иностранных компаний (ПУ КИК), , за исключением зарегистрированных в государствах с льготным налогообложением</p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionE1B';">Читать полностью</button>
            </div>
            <div class="popupInfo" id="infoE1C" style="display: none;">
                <img src="{{ asset('img/closeIcon.svg') }}" class="closeIcon" alt="" onclick="closeInfoPopupE1C()">
                <div class="infoText">
                <p style="font-weight:700; font-size: 16px;">Строка 01 С. Сумма исчисленного ИПН с суммарной прибыли КИК и ПУ КИК, зарегистрированных в государстве с льготным налогообложением</p>
                <p style="font-weight:400; font-size: 16px;">Налоговой базой для исчисления ИПН является прибыль контролируемой иностранной компании (КИК) и финансовая прибыль Постоянных учреждений контролируемых иностранных компаний (ПУ КИК), зарегистрированных в государстве с льготным налогообложением.</p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionE1C';">Читать полностью</button>
            </div>
            <div class="popupInfo" id="infoE1D" style="display: none;">
                <img src="{{ asset('img/closeIcon.svg') }}" class="closeIcon" alt="" onclick="closeInfoPopupE1D()">
                <div class="infoText">
                <p style="font-weight:700; font-size: 16px;">Строка 01 D Сумма ИПН  с доходов из источников за пределами Республики Казахстан</p>
                <p style="font-weight:400; font-size: 16px;">Налоговая база для исчисления ИПН:
                    <ul>
                        <li>все виды доходов, не указанных в подпунктах 1) – 16) статьи 321 Налогового кодекса, полученных (подлежащих получению) налогоплательщиком в течение отчетного налогового периода от лица, не являющегося налоговым агентом, и не являющихся доходами из источников в Республике Казахстан независимо от места выплаты</li>
                    </ul>
                </p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionE1D';">Читать полностью</button>
            </div>
            <div class="popupInfo" id="infoE2" style="display: none;">
                <img src="{{ asset('img/closeIcon.svg') }}" class="closeIcon" alt="" onclick="closeInfoPopupE2()">
                <div class="infoText">
                <p style="font-weight:700; font-size: 16px;">Строка 02 Зачет иностранного налога с доходов из источников за пределами Республики Казахстан (статья 259 Налогового кодекса)</p>
                <p style="font-weight:400; font-size: 16px;">
                    Отражается сумма уплаченного за пределами РК налога на доходы, аналогичного ИПН, с доходов, полученных физическим лицом-резидентом из источников за пределами РК, подлежат зачету в счет уплаты ИПН в РК</br>
                    То есть, сумма уплаченного налога в иностранном государстве от дохода  полученного за рубежом, подлежит зачету при исчислении ИПН в РК.
                </p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionE2';">Читать полностью</button>
            </div>
            <div class="popupInfo" id="infoE3" style="display: none;">
                <img src="{{ asset('img/closeIcon.svg') }}" class="closeIcon" alt="" onclick="closeInfoPopupE3()">
                <div class="infoText">
                <p style="font-weight:700; font-size: 16px;">Строка 03 Зачет предварительных платежей</p>
                <p style="font-weight:400; font-size: 16px;">
                    Сумма налога, уплаченная трудовым иммигрантом в качестве предварительного платежа по ИПН, исчисленного в размере двух кратного размера МРП.
                </p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionE3';">Читать полностью</button>
            </div>
            <div class="popupInfo" id="infoE4" style="display: none;">
                <img src="{{ asset('img/closeIcon.svg') }}" class="closeIcon" alt="" onclick="closeInfoPopupE4()">
                <div class="infoText">
                <p style="font-weight:700; font-size: 16px;">Строка 04  Итого ИПН, подлежащего уплате</p>
                <p style="font-weight:400; font-size: 16px;">
                    Итоговая сумма ИПН, подлежащего уплате в бюджет.
                </p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionE4';">Читать полностью</button>
            </div>
            <div class="popupInfo" id="infoF" style="display: none;">
                <img src="{{ asset('img/closeIcon.svg') }}" class="closeIcon" alt="" onclick="closeInfoPopupF()">
                <div class="infoText">
                <p style="font-weight:700; font-size: 16px;">В разделе F «Сведения о приобретении (получении) имущества и об источниках покрытия расходов на приобретение имущества</p>
                <p style="font-weight:400; font-size: 16px;">
                    Физическое лицо указывает сведения о  приобретенном (полученном) имуществе в отчетном периоде (отражается общая сумма стоимостей (цен) приобретенного имущества, общая сумма источников дохода, предназначенного для покрытия расходов на приобретение имущества; вид приобретенного (полученного) имущества; идентификационный номер имущества, на основании правоустанавливающих документов; код страны приобретенного имущества; стоимость (цена) по которой приобретено имущество, в тенге; наименование, ИИН/БИН источника дохода, предназначенного для покрытия расходов на приобретение имущества; сумма источника дохода в тенге, предназначенного для покрытия расходов на приобретение имущества.
                </p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionF';">Читать полностью</button>
            </div>
            <div class="popupInfo" id="infoG" style="display: none;">
                <img src="{{ asset('img/closeIcon.svg') }}" class="closeIcon" alt="" onclick="closeInfoPopupG()">
                <div class="infoText">
                <p style="font-weight:700; font-size: 16px;">В разделе G «Информация об отчуждении имущества»</p>
                <p style="font-weight:400; font-size: 16px;">
                    Физическое лицо указывает сведения по отчужденному (переданному имуществу в отчетном периоде ( вид, идентификационный номер имущества отчужденного (переданного) имущества, на основании правоустанавливающих документов; код страны, в которой находится отчужденное имущество; фамилия, имя, отчество (при его наличии), ИИН/БИН покупателя (получателя) имущества; стоимость (цена) в тенге, по которой реализовано имущество).
                </p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionG';">Читать полностью</button>
            </div>
            <div class="popupInfo" id="infoH" style="display: none;">
                <img src="{{ asset('img/closeIcon.svg') }}" class="closeIcon" alt="" onclick="closeInfoPopupH()">
                <div class="infoText">
                <p style="font-weight:700; font-size: 16px;">В разделе H «Сведения о деньгах на банковских счетах в иностранных банках, находящихся за пределами Республики Казахстан в сумме, в совокупности превышающей тысячекратный размер МРП, установленного законом о республиканском бюджете и действующего на 31 декабря отчетного налогового периода»</p>
                <p style="font-weight:400; font-size: 16px;">
                    Отражаем при наличии денег на банковских счетах в иностранных банках, находящихся за пределами Республики Казахстан, в сумме, совокупно превышающих по всем банковским вкладам тысячекратный размер месячного расчетного показателя идентификационный номер банковского учреждения (наименование банковского учреждения, в котором хранятся деньги; код страны регистрации банковского учреждения; код валюты и сумма денег на банковских счетах в иностранных банках, находящихся за пределами Республики Казахстан).
                </p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionH';">Читать полностью</button>
            </div>
            <div class="popupInfo" id="infoI" style="display: none;">
                <img src="{{ asset('img/closeIcon.svg') }}" class="closeIcon" alt="" onclick="closeInfoPopupI()">
                <div class="infoText">
                <p style="font-weight:700; font-size: 16px;">Раздел I. Сведения о наличии дебиторской/кредиторской задолженности, в том числе за пределами Республики Казахстан
                    на 31 декабря отчетного налогового периода
                </p>
                <p style="font-weight:400; font-size: 16px;">
                    Заполняется, в случае наличия задолженности других лиц перед физическим лицом (дебиторской задолженности) и (или) задолженности физического лица перед другими лицами (кредиторской задолженности) при наличии договора или иного документа, являющегося основанием возникновения обязательства или требования, нотариально засвидетельствованного (удостоверенного), за исключением задолженности банкам и организациям, осуществляющим отдельные виды банковских операций, созданным в соответствии с законодательством РК о банках и банковской деятельности в РК.
                </p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionI';">Читать полностью</button>
            </div>
            <div class="popupInfo" id="infoJ" style="display: none;">
                <img src="{{ asset('img/closeIcon.svg') }}" class="closeIcon" alt="" onclick="closeInfoPopupJ()">
                <div class="infoText">
                <p style="font-weight:700; font-size: 16px;">Раздел J. Сведения о наличии имущества и активов за пределами Республики Казахстан на 31 декабря отчетного налогового периода</p>
                <p style="font-weight:400; font-size: 16px;">
                    Заполняется при их наличии на отчетную дату имущества, которое подлежит государственной или иной регистрации (учету) либо права и (или) сделки по которому подлежат государственной или иной регистрации (учету) в компетентном органе иностранного государства в соответствии с законодательством иностранного государства; ценные бумаги, эмитенты, доля участия в уставном капитале юридического лица, зарегистрированного за пределами РК.
                </p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionJ';">Читать полностью</button>
            </div>
            <div class="popupInfo" id="infoK" style="display: none;">
                <img src="{{ asset('img/closeIcon.svg') }}" class="closeIcon" alt="" onclick="closeInfoPopupK()">
                <div class="infoText">
                <p style="font-weight:700; font-size: 16px;">Раздел К «Требование о зачете превышения по ИПН в сумме»</p>
                <p style="font-weight:400; font-size: 16px;">
                    Предназначен для проведения зачета суммы превышения по ИПН в счет имеющейся налоговой задолженности и (или) предстоящих платежей, с отражением кода бюджетной классификации, суммы налога, суммы пени, кода органа государственных доходов.
                    ! Вводится в действие с 01.01.2025 года в соответствии с Законом РК от 25.12.2017 № 121-VI
                </p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionK';">Читать полностью</button>
            </div>
            <div class="popupInfo" id="infoL" style="display: none;">
                <img src="{{ asset('img/closeIcon.svg') }}" class="closeIcon" alt="" onclick="closeInfoPopupL()">
                <div class="infoText">
                <p style="font-weight:700; font-size: 16px;">Разделе L «Требование о возврате превышения по ИПН»</p>
                <p style="font-weight:400; font-size: 16px;">
                    Заполняется в случае требования о возврате на банковский счет суммы превышения по ИПН, необходимо указать сумму, подлежащую возврату на банковский счет, индивидуальный идентификационный код (ИИК) бенефициара и банковский идентификационный код (БИК).
                    ! Вводится в действие с 01.01.2025 года в соответствии с Законом РК от 25.12.2017 № 121-VI</br>
                    В случае требования о возврате превышения по ИПН, необходимо указать сумму, подлежащую возврату на банковский счет, индивидуальный идентификационный код (ИИК) бенефициара и банковский идентификационный код (БИК).
                </p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionL';">Читать полностью</button>
            </div>
            <div class="popupInfo" id="infoM" style="display: none;">
                <img src="{{ asset('img/closeIcon.svg') }}" class="closeIcon" alt="" onclick="closeInfoPopupM()">
                <div class="infoText">
                <p style="font-weight:700; font-size: 16px;">В разделе M «Согласие налогоплательщика на раскрытие сведений»</p>
                <p style="font-weight:400; font-size: 16px;">
                    Физическое лицо дает согласие на получение сведения о расходах на вознаграждения по ипотечным займам.
                    ! Вводится в действие с 01.01.2025 года в соответствии с Законом РК от 25.12.2017 № 121-VI
                </p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionM';">Читать полностью</button>
            </div>
            <div class="popupInfo" id="infoN" style="display: none;">
                <img src="{{ asset('img/closeIcon.svg') }}" class="closeIcon" alt="" onclick="closeInfoPopupN()">
                <div class="infoText">
                <p style="font-weight:700; font-size: 16px;">В разделе N «Для заполнения частными нотариусом, судебным исполнителем, адвокатом, профессиональным медиатором» </p>
                <p style="font-weight:400; font-size: 16px;">
                    Заполняется частным нотариусом, судебным исполнителем, адвокатом, профессиональным медиатором, где указывают месяц в котором получен доход; сумму дохода, полученного за каждый месяц отчетного налогового периода; сумма ИПН, подлежащего уплате в бюджет, за каждый месяц отчетного налогового периода.
                </p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionN';">Читать полностью</button>
            </div>
            <div class="popupInfo" id="infoO" style="display: none;">
                <img src="{{ asset('img/closeIcon.svg') }}" class="closeIcon" alt="" onclick="closeInfoPopupO()">
                <div class="infoText">
                <p style="font-weight:700; font-size: 16px;">Раздел O. Финансовая прибыль контролируемой иностранной компании (КИК)</p>
                <p style="font-weight:400; font-size: 16px;">
                    * Заполняется в случае наличия:</br>
                    Суммы убытков КИК или ПУ КИК, возникающих в двух периодах, последовательно предшествующих отчетному периоду; суммы уменьшений в иностранной валюте; суммы уменьшений в иностранной валюте в соответствии с подпунктом 1) пункта 3 статьи 340 НК; суммы уменьшений в иностранной валюте в соответствии с подпунктом 2) пункта 3 статьи 340 НК; суммы уменьшений в иностранной валюте в соответствии с подпунктом 3) пункта 3 статьи 340 НК; суммы уменьшений в иностранной  валюте в соответствии с подпунктом 4) пункта 3 статьи 340 НК; суммы уменьшений в иностранной  валюте в соответствии с подпунктом 5) пункта 3 статьи 340 НК; суммы уменьшений в иностранной  валюте в соответствии с подпунктом 6) пункта 3 статьи 340 НК; суммы уменьшений в иностранной валюте в соответствии с подпунктом 7) пункта 3 статьи 340 НК; суммы уменьшений в иностранной  валюте в соответствии с подпунктом 8) пункта               3 статьи 340 НК; суммы уменьшений в иностранной валюте в соответствии с подпунктом 9) пункта 3 статьи  340 НК; суммы уменьшений в иностранной валюте в соответствии с подпунктом 10) пункта 3 статьи 340 Налогового кодекса; Финансовой прибыли, с учетом уменьшений и убытков КИК или ПУ КИК в иностранной валюте; финансовой прибыли, подлежащей налогообложению в иностранной валюте; Финансовой прибыли, подлежащей налогообложению в национальной валюте; суммы иностранного налога на прибыль по финансовой отчетности в иностранной валюте; суммы уплаченного иностранного налога на прибыль в иностранной валюте; суммы иностранного налога на прибыль, подлежащей отнесению в зачет, в национальной валюте; суммарная прибыль КИК и ПУ КИК; суммы облагаемого дохода КИК и ПУ КИК за исключением зарегистрированных в государствах с льготным налогообложением; суммы облагаемого дохода КИК и ПУ КИК, зарегистрированных в государствах с льготным налогообложением; Зачет иностранного налога с финансовой прибыли КИК или ПУ КИК.
                </p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionO';">Читать полностью</button>
            </div>
            <div class="popupCheck" id="popupComplete" style="display: none;">
                <div style="text-align: center;">
                    <p style="color:#282781; font-size:22px; font-weight:400">Тестирование завершено!</p>
                    <img id="percentimg" src="{{ asset('img/sucessIcon.svg') }}" alt="">
                    <p className='element' id="percent" style="color:#282781; font-size:18px; font-weight:400; margin-top: 25px; margin-bottom: 25px;"></p>
                    <button type="button" class="btn btnCustom6" onclick="location.href='{{ route('test') }}';">OK</button>
                </div>
            </div>
            <!-- <div class="popupCheck" id="popupCheck" style="display: none;">
                <div style="text-align: center;">
                    <p style="color:#282781; font-size:22px; font-weight:400">Тестирование завершено!</p>
                    <img src="assets/img/sucessIcon.svg" alt="">
                    <p style="color:#282781; font-size:18px; font-weight:400; margin-top: 25px; margin-bottom: 25px;">Вы ответили правильно на 75%</p>
                    <button type="button" class="btn btnCustom6" onclick="location.href='index.html';">OK</button>
                </div>
            </div> -->
            <div class="popupCheck" id="popupCheck" style="display: none;">
                <div style="text-align: center;">
                    <p style="color:#282781; font-size:22px; font-weight:400">Завершить тест?</p>
                    <p style="color:#000; font-size:18px; font-weight:400; margin-top: 25px; margin-bottom: 25px;">Время тестирования еще не закончилось. Уверены, что хотите завершить досрочно?</p>
                    <!-- <button type="button" class="btn btnCustom7" onclick="showPopupComplete()">Завершить</button> -->
                    <input type="submit" form="myform" class="btn btnCustom7" name="submit" value="Завершить"/>
                    <button type="button" class="btn btnCustom6" onclick="closeInfoPopupCheck()">Продолжить тест</button>
                </div>
            </div>
            <div class="popupMask"  id="popupMask" style="display: none;"></div>
        </div>
    </div>
</div>
    <script>
    function showInfoPopupA() {
      var infoPopup = document.getElementById("infoA");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "block";
      popupMask.style.display = "block";
    }
    function closeInfoPopupA() {
      var infoPopup = document.getElementById("infoA");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "none";
      popupMask.style.display = "none";

    }
    function showInfoPopupB() {
      var infoPopup = document.getElementById("infoB");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "block";
      popupMask.style.display = "block";
    }
    function closeInfoPopupB() {
      var infoPopup = document.getElementById("infoB");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "none";
      popupMask.style.display = "none";

    }
    function showInfoPopupB1() {
      var infoPopup = document.getElementById("infoB1");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "block";
      popupMask.style.display = "block";
    }
    function closeInfoPopupB1() {
      var infoPopup = document.getElementById("infoB1");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "none";
      popupMask.style.display = "none";

    }
    function showInfoPopupB2() {
      var infoPopup = document.getElementById("infoB2");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "block";
      popupMask.style.display = "block";
    }
    function closeInfoPopupB2() {
      var infoPopup = document.getElementById("infoB2");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "none";
      popupMask.style.display = "none";

    }
    function showInfoPopupB2A() {
      var infoPopup = document.getElementById("infoB2A");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "block";
      popupMask.style.display = "block";
    }
    function closeInfoPopupB2A() {
      var infoPopup = document.getElementById("infoB2A");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "none";
      popupMask.style.display = "none";

    }
    function showInfoPopupB2B() {
      var infoPopup = document.getElementById("infoB2B");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "block";
      popupMask.style.display = "block";
    }
    function closeInfoPopupB2B() {
      var infoPopup = document.getElementById("infoB2B");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "none";
      popupMask.style.display = "none";

    }
    function showInfoPopupB2C() {
      var infoPopup = document.getElementById("infoB2C");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "block";
      popupMask.style.display = "block";
    }
    function closeInfoPopupB2C() {
      var infoPopup = document.getElementById("infoB2C");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "none";
      popupMask.style.display = "none";

    }
    function showInfoPopupB2D() {
      var infoPopup = document.getElementById("infoB2D");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "block";
      popupMask.style.display = "block";
    }
    function closeInfoPopupB2D() {
      var infoPopup = document.getElementById("infoB2D");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "none";
      popupMask.style.display = "none";
    }
    function showInfoPopupC() {
      var infoPopup = document.getElementById("infoC");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "block";
      popupMask.style.display = "block";
    }
    function closeInfoPopupC() {
      var infoPopup = document.getElementById("infoC");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "none";
      popupMask.style.display = "none";
    }
    function showInfoPopupD() {
      var infoPopup = document.getElementById("infoD");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "block";
      popupMask.style.display = "block";
    }
    function closeInfoPopupD() {
      var infoPopup = document.getElementById("infoD");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "none";
      popupMask.style.display = "none";
    }
    function showInfoPopupE() {
      var infoPopup = document.getElementById("infoE");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "block";
      popupMask.style.display = "block";
    }
    function closeInfoPopupE() {
      var infoPopup = document.getElementById("infoE");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "none";
      popupMask.style.display = "none";
    }
    function showInfoPopupE1() {
      var infoPopup = document.getElementById("infoE1");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "block";
      popupMask.style.display = "block";
    }
    function closeInfoPopupE1() {
      var infoPopup = document.getElementById("infoE1");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "none";
      popupMask.style.display = "none";
    }
    function showInfoPopupE1A() {
      var infoPopup = document.getElementById("infoE1A");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "block";
      popupMask.style.display = "block";
    }
    function closeInfoPopupE1A() {
      var infoPopup = document.getElementById("infoE1A");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "none";
      popupMask.style.display = "none";
    }
    function showInfoPopupE1B() {
      var infoPopup = document.getElementById("infoE1B");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "block";
      popupMask.style.display = "block";
    }
    function closeInfoPopupE1B() {
      var infoPopup = document.getElementById("infoE1B");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "none";
      popupMask.style.display = "none";
    }
    function showInfoPopupE1C() {
      var infoPopup = document.getElementById("infoE1C");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "block";
      popupMask.style.display = "block";
    }
    function closeInfoPopupE1C() {
      var infoPopup = document.getElementById("infoE1C");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "none";
      popupMask.style.display = "none";
    }
    function showInfoPopupE1D() {
      var infoPopup = document.getElementById("infoE1D");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "block";
      popupMask.style.display = "block";
    }
    function closeInfoPopupE1D() {
      var infoPopup = document.getElementById("infoE1D");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "none";
      popupMask.style.display = "none";
    }
    function showInfoPopupE2() {
      var infoPopup = document.getElementById("infoE2");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "block";
      popupMask.style.display = "block";
    }
    function closeInfoPopupE2() {
      var infoPopup = document.getElementById("infoE2");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "none";
      popupMask.style.display = "none";
    }
    function showInfoPopupE3() {
      var infoPopup = document.getElementById("infoE3");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "block";
      popupMask.style.display = "block";
    }
    function closeInfoPopupE3() {
      var infoPopup = document.getElementById("infoE3");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "none";
      popupMask.style.display = "none";
    }
    function showInfoPopupE4() {
      var infoPopup = document.getElementById("infoE4");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "block";
      popupMask.style.display = "block";
    }
    function closeInfoPopupE4() {
      var infoPopup = document.getElementById("infoE4");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "none";
      popupMask.style.display = "none";
    }
    function showInfoPopupF() {
      var infoPopup = document.getElementById("infoF");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "block";
      popupMask.style.display = "block";
    }
    function closeInfoPopupF() {
      var infoPopup = document.getElementById("infoF");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "none";
      popupMask.style.display = "none";
    }
    function showInfoPopupG() {
      var infoPopup = document.getElementById("infoG");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "block";
      popupMask.style.display = "block";
    }
    function closeInfoPopupG() {
      var infoPopup = document.getElementById("infoG");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "none";
      popupMask.style.display = "none";
    }
    function showInfoPopupH() {
      var infoPopup = document.getElementById("infoH");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "block";
      popupMask.style.display = "block";
    }
    function closeInfoPopupH() {
      var infoPopup = document.getElementById("infoH");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "none";
      popupMask.style.display = "none";
    }
    function showInfoPopupI() {
      var infoPopup = document.getElementById("infoI");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "block";
      popupMask.style.display = "block";
    }
    function closeInfoPopupI() {
      var infoPopup = document.getElementById("infoI");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "none";
      popupMask.style.display = "none";
    }
    function showInfoPopupJ() {
      var infoPopup = document.getElementById("infoJ");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "block";
      popupMask.style.display = "block";
    }
    function closeInfoPopupJ() {
      var infoPopup = document.getElementById("infoJ");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "none";
      popupMask.style.display = "none";
    }
    function showInfoPopupK() {
      var infoPopup = document.getElementById("infoK");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "block";
      popupMask.style.display = "block";
    }
    function closeInfoPopupK() {
      var infoPopup = document.getElementById("infoK");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "none";
      popupMask.style.display = "none";
    }
    function showInfoPopupL() {
      var infoPopup = document.getElementById("infoL");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "block";
      popupMask.style.display = "block";
    }
    function closeInfoPopupL() {
      var infoPopup = document.getElementById("infoL");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "none";
      popupMask.style.display = "none";
    }
    function showInfoPopupM() {
      var infoPopup = document.getElementById("infoM");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "block";
      popupMask.style.display = "block";
    }
    function closeInfoPopupM() {
      var infoPopup = document.getElementById("infoM");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "none";
      popupMask.style.display = "none";
    }
    function showInfoPopupN() {
      var infoPopup = document.getElementById("infoN");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "block";
      popupMask.style.display = "block";
    }
    function closeInfoPopupN() {
      var infoPopup = document.getElementById("infoN");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "none";
      popupMask.style.display = "none";
    }
    function showInfoPopupO() {
      var infoPopup = document.getElementById("infoO");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "block";
      popupMask.style.display = "block";
    }
    function closeInfoPopupO() {
      var infoPopup = document.getElementById("infoO");
      var popupMask = document.getElementById("popupMask");
      infoPopup.style.display = "none";
      popupMask.style.display = "none";
    }
    function showInfoPopupCheck() {
      var checkPopup = document.getElementById("popupCheck");
      var popupMask = document.getElementById("popupMask");
      checkPopup.style.display = "block";
      popupMask.style.display = "block";
    }
    function closeInfoPopupCheck() {
     var checkPopup = document.getElementById("popupCheck");
      var popupMask = document.getElementById("popupMask");
      checkPopup.style.display = "none";
      popupMask.style.display = "none";
    }
    function showPopupComplete() {
        var popupComplete = document.getElementById("popupComplete");
        var popupMask = document.getElementById("popupMask");
        popupMask.style.display = "block";
        popupComplete.style.display = "block";
    }

    function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
    }

    window.onload = function () {
        var twentyMinutes = 60 * 20,
            display = document.querySelector('#time');
        startTimer(twentyMinutes, display);
    };
    var toBottom = document.getElementById("toBottom");
    var toTop = document.getElementById("toTop");

    document.getElementById("formBox").onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.getElementById("formBox").scrollTop > 20) {
        toBottom.style.display = "block";
        toTop.style.display = "none";
    } else {
        toBottom.style.display = "none";
    }
    if (document.getElementById("formBox").scrollTop > 3000) {
        toTop.style.display = "block";
        toBottom.style.display = "none";
    } else {
        toTop.style.display = "none";
    }
    }

    function topFunction() {
    document.getElementById("formBox").scrollTop = 0;
    }
    function bottomFunction() {
    document.getElementById("formBox").scrollTop = document.getElementById("formBox").scrollHeight;
    }

    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
        let disc =  @json($disc['disc']);
        let id =  @json($id);
        document.getElementById('caseDisc').innerHTML = disc;
        document.getElementById('caseDiscSmall').innerHTML = 'Кейс ' + id + ' ' + disc.slice(0, 100);
        $("#showCaseBtn").click(function(){
            $("#showCaseBlock").toggleClass("open close");

            if ($("#showCaseBlock" ).hasClass( "open" )){
                $("#showCaseBtn").html('Свернуть <img id="showCaseIcon" src="{{ asset('img/dropdownIconUpWhite.svg') }}" alt="" style="float:right; margin-top:10px">');
                // $(".whiteBox3").css('height', '40vh');
                $("#formBox").addClass("whiteBox3small");
                $("#formBox").removeClass("whiteBox3");
            }
            else if ($("#showCaseBlock" ).hasClass( "close" )){
                $("#showCaseBtn").html('Открыть <img id="showCaseIcon" src="{{ asset('img/dropdownIconWhite.svg') }}" alt="" style="float:right; margin-top:10px">');
                $("#formBox").addClass("whiteBox3");
                $("#formBox").removeClass("whiteBox3small");
            }
        });
        @if (isset($mistakes))
                    let mistakes =  @json($mistakes);
                    let percent =  @json($percent);
                    console.log(mistakes);
                    console.log(percent);
                    document.getElementById('percent').innerHTML = 'Вы ответили правильно на ' + parseInt(percent) + '%';
                    if(parseInt(percent)>95){
                    document.getElementById("percentimg").src= "{{ asset('img/sucessIcon.svg') }}";
                    } else document.getElementById("percentimg").src= "{{ asset('img/errorIcon.svg') }}";
                    showPopupComplete();

        @endif
    </script>
</body>
</html>

