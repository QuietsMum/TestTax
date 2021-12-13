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

    <title>Тренажер</title>
</head>
<body>
    <div class="container-fluid mainBg">
    <div class="row no-gutter">
        <div class="col-sm-1 sidebar">
            <!-- <div style="position:fixed;"> -->
                 <img src="{{ asset('img/logo.svg') }}" style="width:100%" alt="">
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
            <img src="{{ asset('img/madeby2.svg') }}" alt="" class="madeBy">
            <!-- </div> -->
        </div>
        <div class="col-sm">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-custom2 navbarCustom" style="position: sticky;">
                <div class="container-fluid">
                    <div class="row" style="width:100%">
                        <div class="col-sm-4" style="margin-top:1%">
                            <a href="{{ route('training') }}" class="homeBtn"> <img src="{{ asset('img/home.svg') }}" alt="" style="margin-top: -9px; margin-right: 5px;"> На главную</a>
                            <span style="font-size:20px; font-weight:400; color:#000;text-decoration-line: underline; margin-left: 10px;">Тренажер</span>
                        </div>
                        <div class="col-sm-8" style="text-align:right; font-size:18px; font-weight:400">
                            <div class="row" style="float:right">
                                <div class="col-sm" style="padding-right: unset; padding-left: unset;">
                                    <div class="selectCase2">
                                        <p class="selectCaseText" style="color:#160B50; font-size:18px; font-weight:400; margin-bottom: 0rem; text-align:left">Кейс 1: Государственный служащий («М», ИИН 731201400135), в 2021 году</p>
                                    </div>
                                </div>
                                <div class="col-sm-2" style="padding-left: unset;"><button type="button" class="btn btnCustom3" id="showCaseBtn">Открыть <img id="showCaseIcon" src="{{ asset('img/dropdownIconWhite.svg') }}" alt="" style="float:right; margin-top:10px"></button> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div >
                <div class="whiteBox2 close" id="showCaseBlock">
                    <p>Государственный служащий («М», ИИН 731201400135), в 2021 году:</p>
                    <ul>
                        <li>получил доход (заработную плату) 2 500 000 тенге;</li>
                        <li>имеет депозитный счет в банке РК на сумму 5 000 000 тенге с вознаграждением 9 % годовых;</li>
                        <li>начиная с августа 2021 года сдает в аренду квартиру за 100 000 тенге в месяц (за 5 месяцев 2021 года доход от аренды квартиры 500 000 тенге), в июле 2021 года купил квартиру за 18 000 000 тенге на собственные сбережения, которые отразил во входной декларации об активах и обязательствах (форма 250.00).</li>
                    </ul>
                    <div class="goldHighlight">*(дебиторская/кредиторская задолженность банкам и организациям, осуществляющим отдельные виды банковских операций, созданным в соответствии с законодательством РК о банках и банковской деятельности в РК в декларации не отражается, таким образом находящийся в банке РК депозитный счет в сумме 5 000 000 тенге не подлежит отражению в форме 270.00)</div>
                </div>
                <div class="whiteBox3" id="formBox">
                    <form method="post" id="myform" action="{{ route('training_store', $id) }}">
                    @csrf
                    <div class="container">
                        <p class="formText">ДЕКЛАРАЦИЯ О ДОХОДАХ И ИМУЩЕСТВЕ</br>ФИЗИЧЕСКОГО ЛИЦА</p>
                        <!-- <p class="formText2 sideText">Форма 270.00 стр. 01</p> -->
                        <!-- РАЗДЕЛ A -->
                        <p id="sectionA" class="formText">Раздел A. Общая информация о налогоплательщике</p>
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
                                <input type="text" class="formTextBox" style="width:100%" id="phonename" name="phonename" value="{{ old('phonename') }}">
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
                        <p id="sectionB" class="formText newSection">Раздел В. Сведения о доходах</p>
                        <table class="tableCustom">
                            <th>(A) №</th>
                            <th>(B) Виды дохода</th>
                            <th>(C) Сумма</th>

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
                                <label class="formText" for="sectionCInput" style="white-space: nowrap;">Раздел C. Общая сумма корректировки дохода в соответствии со статьей 341 НК</label>
                                <input type="number" class="formTextBox" style="width:10%" id="sectionCInput">
                            </div>
                        </div>
                        <!-- РАЗДЕЛ D -->
                        <div id="sectionD" class="row newSection" style="padding-left:15px; padding-right:15px;">
                        <div style="display:flex; width:100%; justify-content: center;">
                            <label class="formText" for="sectionDInput" style="white-space: nowrap;">Раздел D. Сумма налоговых вычетов, не примененных налоговым агентом</label>
                            <input type="number" class="formTextBox" style="width:10%" id="sectionDInput">
                        </div>
                        </div>
                            <!-- РАЗДЕЛ E -->
                        <p id="sectionE" class="formText newSection">Раздел E. Исчисление индивидуального подоходного налога (ИПН)</p>
                        <table class="tableCustom">
                            <th style=" white-space: nowrap;">(A) №</th>
                            <th>(B) Наименование</th>
                            <th>(C) Сумма</th>

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
                         <p id="sectionF" class="formText newSection">Раздел F. Сведения о приобретении (получении) имущества и об источниках покрытия расходов на приобретение имущества</p>
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
                          <p id="sectionG" class="formText newSection">Раздел G. Сведения об отчуждении имущества</p>
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
                          <p id="sectionH" class="formText newSection">Раздел H. Сведения о деньгах на банковских счетах в иностранных банках, находящихся за пределами Республики Казахстан, в сумме, в совокупности превышающей 1000-кратный размер МРП, установленного законом о республиканском бюджете и действующего на 31 декабря отчетного налогового периода</p>
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
                        <p id="sectionJ" class="formText newSection">Раздел J. Сведения о наличии имущества и активов за пределами Республики Казахстан на 31 декабря отчетного налогового периода</p>
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
                        <p id="sectionL" class="formText newSection">Раздел L. Требование о возврате превышения по ИПН, если «Да» заполните таблицу</p>
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
                        <p id="sectionM" class="formText newSection">Раздел M. Согласие налогоплательщика на раскрытие сведений (укажите Х в соответствующей ячейке):</p>
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
                            <p id="sectionO" class="formText newSection">Раздел O. Финансовая прибыль контролируемой иностранной компании (КИК)</p>
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
            <div class="footer2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-3">
                            <p style="font-size:22px; font-weight:700; text-decoration: underline; color:#D2AB67; margin-top:9%">#ВМЕСТЕКРАЗВИТИЮ</p>
                        </div>
                        <div class="col-sm-9">
                            <input type="submit" form="myform" class="btn btnCustom4" name="submit" value="Проверить"/>
                            <button type="button" class="btn btnCustom"><img src="{{ asset('img/supportIcon.svg') }}" alt=""> Тех. поддержка</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
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
            console.log(mistakes);

            for (let i=0; mistakes.length; i++) {
              document.getElementById(mistakes[i]).style = "background-color: #fcb6b6;";
            }
        @endif
    </script>
</body>
</html>
 <!--
    <body>
        <div class="container">
            <div class="content">
            @if (isset($request))
            {{$request}}
            @endif
            <form method="post" action="{{ route('training_store', $id) }}">
            @csrf
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
            <input type="submit" class="button" name="submit" value="Проверить!"/>
            </form>
            </div>
        </div>
    </body>
     -->



