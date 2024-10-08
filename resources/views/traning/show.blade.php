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
                <img src="{{ asset('img/logo.svg') }}" style="width:80%" alt="">
            <!-- </div> -->
            <div>
            <div class="sectionTab first" style="margin-top: 20px;">
                <a class="sectionTabLink" href="#sectionA">Раздел А.</a>
                <img id="imgA" src="" style="margin-left: 20px;" alt="">
            </div>
            <div class="sectionTab">
                <a class="sectionTabLink" href="#sectionB">Раздел B.</a>
                <img id="imgB" src="" style="margin-left: 20px;" alt="">
            </div>
            <div class="sectionTab">
                <a class="sectionTabLink" href="#sectionC">Раздел C.</a>
                <img id="imgC" src="" style="margin-left: 20px;" alt="">
            </div>
            <div class="sectionTab">
                <a class="sectionTabLink" href="#sectionD">Раздел D.</a>
                <img id="imgD" src="" style="margin-left: 20px;" alt="">
            </div>
            <div class="sectionTab">
                <a class="sectionTabLink" href="#sectionE">Раздел E.</a>
                <img id="imgE" src="" style="margin-left: 20px;" alt="">
            </div>
            <div class="sectionTab">
                <a class="sectionTabLink" href="#sectionF">Раздел F.</a>
                <img id="imgF" src="" style="margin-left: 20px;" alt="">
            </div>
            <div class="sectionTab">
                <a class="sectionTabLink" href="#sectionG">Раздел G.</a>
                <img id="imgG" src="" style="margin-left: 20px;" alt="">
            </div>
            <div class="sectionTab">
                <a class="sectionTabLink" href="#sectionH">Раздел H.</a>
                <img id="imgH" src="" style="margin-left: 20px;" alt="">
            </div>
            <div class="sectionTab">
                <a class="sectionTabLink" href="#sectionI">Раздел I.</a>
                <img id="imgI" src="" style="margin-left: 20px;" alt="">
            </div>
            <div class="sectionTab">
                <a class="sectionTabLink" href="#sectionJ">Раздел J.</a>
                <img id="imgJ" src="" style="margin-left: 20px;" alt="">
            </div>
            <div class="sectionTab">
                <a class="sectionTabLink" href="#sectionK">Раздел K.</a>
                <img id="imgK" src="" style="margin-left: 20px;" alt="">
            </div>
            <div class="sectionTab">
                <a class="sectionTabLink" href="#sectionL">Раздел L.</a>
                <img id="imgL" src="" style="margin-left: 20px;" alt="">
            </div>
            <div class="sectionTab">
                <a class="sectionTabLink" href="#sectionM">Раздел M.</a>
                <img id="imgM" src="" style="margin-left: 20px;" alt="">
            </div>
            <div class="sectionTab">
                <a class="sectionTabLink" href="#sectionN">Раздел N.</a>
                <img id="imgN" src="" style="margin-left: 20px;" alt="">
            </div>
            <div class="sectionTab">
                <a class="sectionTabLink" href="#sectionO">Раздел O.</a>
                <img id="imgO" src="" style="margin-left: 20px;" alt="">
            </div>
            <div class="sectionTab">
                <a class="sectionTabLink" href="#sectionP">Раздел P.</a>
                <img id="imgP" src="" style="margin-left: 20px;" alt="">
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
                        <div class="col-sm-6" style="margin-top:1%">
                            <a href="{{ route('training') }}" class="homeBtn"> <img src="{{ asset('img/home.svg') }}" alt="" style="margin-top: -9px; margin-right: 5px;"> На главную</a>
                            <span style="font-size:22px; font-weight:400; color:#000;text-decoration-line: underline; margin-left: 10px;">Тренажерный модуль</span>
                        </div>
                        <div class="col-sm-6" style="text-align:right; font-size:18px; font-weight:400">
                            <div class="row" style="float:right">
                                <div class="col-sm" style="padding-right: unset; padding-left: unset;">
                                    <div class="selectCase2">
                                        <p id="caseDiscSmall" class="selectCaseText" style="color:#160B50; font-size:18px; font-weight:400; margin-bottom: 0rem; text-align:left">Кейс 1: Государственный служащий («М», ИИН 731201400135), в 2021 году</p>
                                    </div>
                                </div>
                                <div class="col-sm-2" style="padding-left: unset;"><button type="button" class="btn btnCustom3" id="showCaseBtn">Свернуть <img id="showCaseIcon" src="{{ asset('img/dropdownIconUpWhite.svg') }}" alt="" style="float:right; margin-top:10px"></button> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div >
                <div class="whiteBox2 open" id="showCaseBlock">
                    <p id="caseDisc">Государственный служащий («М», ИИН 731201400135), в 2021 году:</p>
                    <div id="caseDiscPlus" class="goldHighlight"></div>
                </div>
                <div class="whiteBox3small" id="formBox" style="  font-family: 'Times New Roman', Times, serif!important;">
                    <form method="post" id="myform" action="{{ route('training_store', $id) }}">
                    @csrf
                    <div class="container">
                        <p class="formText">ДЕКЛАРАЦИЯ О ДОХОДАХ И ИМУЩЕСТВЕ<br>ФИЗИЧЕСКОГО ЛИЦА</p>
                        <!-- <p class="formText2 sideText">Форма 270.00 стр. 01</p> -->
                        <!-- РАЗДЕЛ A -->
                        <p id="sectionA" class="formText">Раздел A. Общая информация о налогоплательщике <span><img class="infoBtn" src="{{ asset('img/infoIcon.svg') }}" alt="" onclick="showInfoPopupA()"></span></p>
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
                            <p class="formText">5. Вид декларации (укажите ✔ в соответствующей ячейке)</p>
                        </div>
                        <div class="row"  style="padding-left:15px; padding-right:15px;">
                            <div style="display:flex; width:100%">
                                <label class="formText" for="declTypeInput" style="text-align: left; white-space: nowrap;">первоначальная</label>
                                <input type="checkbox" class="formTextBox checkboxSmall" style="width:2%" id="declarationtype" name="declarationtype" value="первоначальная" <?php if(isset($_POST['declarationtype'])) echo "checked='checked'"; ?>>
                                <label class="formText" for="declTypeInput2" style="text-align: left; white-space: nowrap;">очередная</label>
                                <input type="checkbox" class="formTextBox checkboxSmall" style="width:2%" id="declarationtype" name="declarationtype" value="очередная">
                                <label class="formText" for="declTypeInput3" style="text-align: left; white-space: nowrap;">дополнительная</label>
                                <input type="checkbox" class="formTextBox checkboxSmall" style="width:2%" id="declarationtype" name="declarationtype" value="дополнительная">
                                <label class="formText" for="declTypeInput4" style="text-align: left; white-space: nowrap;">дополнительная по уведомлению</label>
                                <input type="checkbox" class="formTextBox checkboxSmall" style="width:2%" id="declarationtype" name="declarationtype" value="дополнительная по уведомлению">
                            </div>
                        </div>
                         <!-- РАЗДЕЛ B -->
                         <p id="sectionB" class="formText newSection">Раздел В. Сведения о доходах <span><img onclick="showInfoPopupB()" class="infoBtn" src="{{ asset('img/infoIcon.svg') }}" alt=""></span></p>
                         <table class="tableCustom">
                             <th>(A) №</th>
                             <th>(B) Виды дохода</th>
                             <th>(C) Сумма</th>
                             <th class="iconCol"></th>

                             <tr id="table_b_1">
                                 <td>01</td>
                                 <td style="text-align: left;">Доход, подлежащий налогообложению у источника выплаты</td>
                                 <td><input type="number" class="tableInput" id="b_1" name="b_1" value="{{ old('b_1') }}"></td>
                                 <td class="iconCol"><span><img onclick="showInfoPopupB1()" class="infoBtn" src="{{ asset('img/infoIcon.svg') }}" alt=""></span></td>
                                 <td  class="iconCol"><span><img id="table_b_1_error" src="" alt=""></span></td>
                             </tr>
                             <tr id="table_b_2">
                                 <td>02</td>
                                 <td style="text-align: left;">Доход, подлежащий налогообложению физическим лицом самостоятельно, в том числе:</td>
                                 <td><input type="number" class="tableInput" id="b_2" name="b_2" value="{{ old('b_2') }}"></td>
                                 <td class="iconCol"><span><img onclick="showInfoPopupB2()" class="infoBtn" src="{{ asset('img/infoIcon.svg') }}" alt=""></span></td>
                                 <td  class="iconCol"><span><img id="table_b_2_error" src="" alt=""></span></td>
                             </tr>
                             <tr id="table_b_2a">
                                 <td>02A</td>
                                 <td style="text-align: left;">Имущественный доход</td>
                                 <td><input type="number" class="tableInput" id="b_2a" name="b_2a" value="{{ old('b_2a') }}"></td>
                                 <td class="iconCol"><span><img onclick="showInfoPopupB2A()" class="infoBtn" src="{{ asset('img/infoIcon.svg') }}" alt=""></span></td>
                                 <td  class="iconCol"><span><img id="table_b_2a_error" src="" alt=""></span></td>
                             </tr>
                             <tr id="table_b_2b">
                                 <td>02B</td>
                                 <td style="text-align: left;">Доход лица, занимающегося частной практикой (сумма строк графы В раздела N)</td>
                                 <td><input type="number" class="tableInput" id="b_2b" name="b_2b" value="{{ old('b_2b') }}"></td>
                                 <td class="iconCol"><span><img onclick="showInfoPopupB2B()" class="infoBtn" src="{{ asset('img/infoIcon.svg') }}" alt=""></span></td>
                                 <td  class="iconCol"><span><img id="table_b_2b_error" src="" alt=""></span></td>
                             </tr>
                             <tr id="table_b_2c">
                                 <td>02C</td>
                                 <td style="text-align: left;">Доход из источников за пределами Республики Казахстан</td>
                                 <td><input type="number" class="tableInput" id="b_2c" name="b_2c" value="{{ old('b_2c') }}"></td>
                                 <td class="iconCol"><span><img onclick="showInfoPopupB2C()" class="infoBtn" src="{{ asset('img/infoIcon.svg') }}" alt=""></span></td>
                                 <td  class="iconCol"><span><img id="table_b_2c_error" src="" alt=""></span></td>
                             </tr>
                             <tr id="table_b_2d">
                                 <td>02D</td>
                                 <td style="text-align: left;">Доход индивидуального предпринимателя</td>
                                 <td><input type="number" class="tableInput" id="b_2d" name="b_2d" value="{{ old('b_2d') }}"></td>
                                 <td class="iconCol"><span><img onclick="showInfoPopupB2D()" class="infoBtn" src="{{ asset('img/infoIcon.svg') }}" alt=""></span></td>
                                 <td  class="iconCol"><span><img id="table_b_2d_error" src="" alt=""></span></td>
                             </tr>
                         </table>
                        <!-- РАЗДЕЛ C -->
                        <div id="sectionC" class="row newSection" style="padding-left:15px; padding-right:15px;">
                            <div style="display:flex; width:100%; justify-content: center;">
                                <label class="formText" for="sectionCInput" style="white-space: nowrap;">Раздел C. Общая сумма корректировки дохода в соответствии со статьей 341 НК <span><img onclick="showInfoPopupC()" class="infoBtn" src="{{ asset('img/infoIcon.svg') }}" alt=""></span></label>
                                <input type="number" class="formTextBox" style="width:10%"  id="c_1" name="c_1" value="{{ old('c_1') }}">
                            </div>
                        </div>
                        <!-- РАЗДЕЛ D -->
                        <div id="sectionD" class="row newSection" style="padding-left:15px; padding-right:15px;">
                        <div style="display:flex; width:100%; justify-content: center;">
                            <label class="formText" for="d_1" style="white-space: nowrap;">Раздел D. Сумма налоговых вычетов, не примененных налоговым агентом <span><img onclick="showInfoPopupD()" class="infoBtn" src="{{ asset('img/infoIcon.svg') }}" alt=""></span></label>
                            <input type="number" class="formTextBox" style="width:10%" id="d_1" name="d_1" value="{{ old('d_1') }}">
                        </div>
                        </div>
                            <!-- РАЗДЕЛ E -->
                            <p id="sectionE" class="formText newSection">Раздел E. Исчисление индивидуального подоходного налога (ИПН) <span><img onclick="showInfoPopupE()" class="infoBtn" src="{{ asset('img/infoIcon.svg') }}" alt=""></span></p>
                            <table class="tableCustom">
                                <th style=" white-space: nowrap;">(A) №</th>
                                <th>(B) Наименование</th>
                                <th>(C) Сумма</th>
                                <th class="iconCol"></th>

                                <tr id="table_e_1">
                                    <td>01</td>
                                    <td style="text-align: left;">Сумма исчисленного ИПН по доходам, подлежащим налогообложению самостоятельно (за исключением доходов от деятельности индивидуального предпринимателя), в том числе:</td>
                                    <td><input type="number" class="tableInput" id="e_1" name="e_1" value="{{ old('e_1') }}"></td>
                                    <td class="iconCol"><span><img onclick="showInfoPopupE1()" class="infoBtn" src="{{ asset('img/infoIcon.svg') }}" alt=""></span></td>
                                    <td  class="iconCol"><span><img id="table_e_1_error" src="" alt=""></span></td>
                                </tr>
                                <tr id="table_e_1a">
                                    <td>01A</td>
                                    <td style="text-align: left;">Сумма ИПН с дохода лица, занимающегося частной практикой (сумма строк графы С раздела N)</td>
                                    <td><input type="number" class="tableInput" id="e_1a" name="e_1a" value="{{ old('e_1a') }}"></td>
                                    <td class="iconCol"><span><img onclick="showInfoPopupE1A()" class="infoBtn" src="{{ asset('img/infoIcon.svg') }}" alt=""></span></td>
                                    <td  class="iconCol"><span><img id="table_e_1a_error" src="" alt=""></span></td>
                                </tr>
                                <tr id="table_e_1b">
                                    <td>01B</td>
                                    <td style="text-align: left;">Сумма исчисленного ИПН с суммарной прибыли КИК и ПУ КИК, за исключением зарегистрированных в государствах с льготным налогообложением</td>
                                    <td><input type="number" class="tableInput" id="e_1b" name="e_1b" value="{{ old('e_1b') }}"></td>
                                    <td class="iconCol"><span><img onclick="showInfoPopupE1B()" class="infoBtn" src="{{ asset('img/infoIcon.svg') }}" alt=""></span></td>
                                    <td  class="iconCol"><span><img id="table_e_1b_error" src="" alt=""></span></td>
                                </tr>
                                <tr id="table_e_1c">
                                    <td>01C</td>
                                    <td style="text-align: left;">Сумма исчисленного ИПН с суммарной прибыли КИК и ПУ КИК, зарегистрированных в государстве с льготным налогообложением</td>
                                    <td><input type="number" class="tableInput" id="e_1c" name="e_1c" value="{{ old('e_1c') }}"></td>
                                    <td class="iconCol"><span><img onclick="showInfoPopupE1C()" class="infoBtn" src="{{ asset('img/infoIcon.svg') }}" alt=""></span></td>
                                    <td  class="iconCol"><span><img id="table_e_1c_error" src="" alt=""></span></td>
                                </tr>
                                <tr id="table_e_1d">
                                    <td>01D</td>
                                    <td style="text-align: left;">Сумма ИПН с доходов из источников за пределами Республики Казахстан</td>
                                    <td><input type="number" class="tableInput" id="e_1d" name="e_1d" value="{{ old('e_1d') }}"></td>
                                    <td class="iconCol"><span><img onclick="showInfoPopupE1D()" class="infoBtn" src="{{ asset('img/infoIcon.svg') }}" alt=""></span></td>
                                    <td  class="iconCol"><span><img id="table_e_1d_error" src="" alt=""></span></td>
                                </tr>
                                <tr id="table_e_2">
                                    <td>02</td>
                                    <td style="text-align: left;">Зачет иностранного налога с доходов из источников за пределами Республики Казахстан</td>
                                    <td><input type="number" class="tableInput" id="e_2" name="e_2" value="{{ old('e_2') }}"></td>
                                    <td class="iconCol"><span><img onclick="showInfoPopupE2()" class="infoBtn" src="{{ asset('img/infoIcon.svg') }}" alt=""></span></td>
                                    <td  class="iconCol"><span><img id="table_e_2_error" src="" alt=""></span></td>
                                </tr>
                                <tr id="table_e_3">
                                    <td>03</td>
                                    <td style="text-align: left;">Зачет предварительных платежей по ИПН</td>
                                    <td><input type="number" class="tableInput" id="e_3" name="e_3" value="{{ old('e_3') }}"></td>
                                    <td class="iconCol"><span><img onclick="showInfoPopupE3()" class="infoBtn" src="{{ asset('img/infoIcon.svg') }}" alt=""></span></td>
                                    <td  class="iconCol"><span><img id="table_e_3_error" src="" alt=""></span></td>
                                </tr>
                                <tr id="table_e_4">
                                    <td>04</td>
                                    <td style="text-align: left;">Итого ИПН, подлежащего уплате (строка 01 - строка 01А - строка 01В - строка 01С - строка 02 - строка 03)</td>
                                    <td><input type="number" class="tableInput" id="e_4" name="e_4" value="{{ old('e_4') }}"></td>
                                    <td class="iconCol"><span><img onclick="showInfoPopupE4()" class="infoBtn" src="{{ asset('img/infoIcon.svg') }}" alt=""></span></td>
                                    <td  class="iconCol"><span><img id="table_e_4_error" src="" alt=""></span></td>
                                </tr>
                                <tr>
                                    <td>05</td>
                                    <td style="text-align: left;">БИН аппаратов акимов городов районного значения, сел, поселков и сельских округов</td>
                                    <td><input type="text" class="tableInput"></td>
                                </tr>
                            </table>
                         <!-- РАЗДЕЛ F -->
                         <p id="sectionF" class="formText newSection">Раздел F. Сведения о приобретении (получении) имущества и об источниках покрытия расходов на приобретение имущества <span><img  onclick="showInfoPopupF()" class="infoBtn" src="{{ asset('img/infoIcon.svg') }}" alt=""></span></p>
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
                             <tr id="table_f_1">
                                <td><input type="text" class="tableInput" id="f_1a" name="f_1a" value="{{ old('f_1a') }}"></td>
                                <td><input type="text" class="tableInput" id="f_1b" name="f_1b" value="{{ old('f_1b') }}"></td>
                                <td><input type="text" class="tableInput" id="f_1c" name="f_1c" value="{{ old('f_1c') }}"></td>
                                <td><input type="text" class="tableInput" id="f_1d" name="f_1d" value="{{ old('f_1d') }}"></td>
                                <td><input type="number" class="tableInput" id="f_1e" name="f_1e" value="{{ old('f_1e') }}"></td>
                                <td id="table_f_1f"><input type="text" class="tableInput" id="f_1f" name="f_1f" value="{{ old('f_1f') }}"></td>
                                <td id="table_f_1g"><input type="text" class="tableInput" id="f_1g" name="f_1g" value="{{ old('f_1g') }}"></td>
                                <td id="table_f_1h"><input type="number" class="tableInput" id="f_1h" name="f_1h" value="{{ old('f_1h') }}"></td>
                                <td id="table_f_1_img"  class="iconCol"><span><img id="table_f_1_error" src="" alt=""></span></td>
                             </tr>
                             <tr id="table_f_2">
                                <td><input type="text" class="tableInput" id="f_2a" name="f_2a" value="{{ old('f_2a') }}"></td>
                                <td><input type="text" class="tableInput" id="f_2b" name="f_2b" value="{{ old('f_2b') }}"></td>
                                <td><input type="text" class="tableInput" id="f_2c" name="f_2c" value="{{ old('f_2c') }}"></td>
                                <td><input type="text" class="tableInput" id="f_2d" name="f_2d" value="{{ old('f_2d') }}"></td>
                                <td><input type="number" class="tableInput" id="f_2e" name="f_2e" value="{{ old('f_2e') }}"></td>
                                <td id="table_f_2f"><input type="text" class="tableInput" id="f_2f" name="f_2f" value="{{ old('f_2f') }}"></td>
                                <td id="table_f_2g"><input type="text" class="tableInput" id="f_2g" name="f_2g" value="{{ old('f_2g') }}"></td>
                                <td id="table_f_2h"><input type="number" class="tableInput" id="f_2h" name="f_2h" value="{{ old('f_2h') }}"></td>
                                <td id="table_f_2_img"  class="iconCol"><span><img id="table_f_2_error" src="" alt=""></span></td>
                             </tr>
                             <tr>
                                <td><input type="text" class="tableInput" id="f_3a" name="f_3a" value="{{ old('f_3a') }}"></td>
                                <td><input type="text" class="tableInput" id="f_3b" name="f_3b" value="{{ old('f_3b') }}"></td>
                                <td><input type="text" class="tableInput" id="f_3c" name="f_3c" value="{{ old('f_3c') }}"></td>
                                <td><input type="text" class="tableInput" id="f_3d" name="f_3d" value="{{ old('f_3d') }}"></td>
                                <td><input type="number" class="tableInput" id="f_3e" name="f_3e" value="{{ old('f_3e') }}"></td>
                                <td id="table_f_3f"><input type="text" class="tableInput" id="f_3f" name="f_3f" value="{{ old('f_3f') }}"></td>
                                <td id="table_f_3g"><input type="text" class="tableInput" id="f_3g" name="f_3g" value="{{ old('f_3g') }}"></td>
                                <td id="table_f_3h"><input type="number" class="tableInput" id="f_3h" name="f_3h" value="{{ old('f_3h') }}"></td>
                                <td id="table_f_3_img"  class="iconCol"><span><img id="table_f_3_error" src="" alt=""></span></td>
                             </tr>
                             <tr>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td id="table_f_4f"><input type="text" class="tableInput" id="f_4f" name="f_4f" value="{{ old('f_4f') }}"></td>
                                <td id="table_f_4g"><input type="text" class="tableInput" id="f_4g" name="f_4g" value="{{ old('f_4g') }}"></td>
                                <td id="table_f_4h"><input type="number" class="tableInput" id="f_4h" name="f_4h" value="{{ old('f_4h') }}"></td>
                                <td id="table_f_4_img" class="iconCol"><span><img id="table_f_4_error" src="" alt=""></span></td>
                             </tr>
                             <tr>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td><input type="text" class="tableInput"></td>
                                <td id="table_f_5f"><input type="text" class="tableInput" id="f_5f" name="f_5f" value="{{ old('f_5f') }}"></td>
                                <td id="table_f_5g"><input type="text" class="tableInput" id="f_5g" name="f_5g" value="{{ old('f_5g') }}"></td>
                                <td id="table_f_5h"><input type="number" class="tableInput" id="f_5h" name="f_5h" value="{{ old('f_5h') }}"></td>
                                <td id="table_f_5_img" class="iconCol"><span><img id="table_f_5_error" src="" alt=""></span></td>
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
                          <p id="sectionG" class="formText newSection">Раздел G. Сведения об отчуждении имущества <span><img onclick="showInfoPopupG()" class="infoBtn" src="{{ asset('img/infoIcon.svg') }}" alt=""></span></p>
                          <table class="tableCustom">
                            <th>(A) №</th>
                            <th>(B) Вид имущества</th>
                            <th>(C) Идентификаци-онный номер</th>
                            <th>(D) Код страны</th>
                            <th>(E) Ф.И.О./наименова-ние покупателя</th>
                            <th>(F) ИНН/БИН покупателя</th>
                            <th>(G) Стоимость (цена) реализации  (в тенге)</th>

                            <tr id="table_g_1">
                                <td><input type="text" class="tableInput" id="g_1a" name="g_1a" value="{{ old('g_1a') }}"></td>
                                <td><input type="text" class="tableInput" id="g_1b" name="g_1b" value="{{ old('g_1b') }}"></td>
                                <td><input type="text" class="tableInput" id="g_1c" name="g_1c" value="{{ old('g_1c') }}"></td>
                                <td><input type="text" class="tableInput" id="g_1d" name="g_1d" value="{{ old('g_1d') }}"></td>
                                <td><input type="text" class="tableInput" id="g_1e" name="g_1e" value="{{ old('g_1e') }}"></td>
                                <td><input type="text" class="tableInput" id="g_1f" name="g_1f" value="{{ old('g_1f') }}"></td>
                                <td><input type="text" class="tableInput" id="g_1g" name="g_1g" value="{{ old('g_1g') }}"></td>
                                <td class="iconCol"><span><img id="table_g_1_error" src="" alt=""></span></td>
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
                          <p id="sectionH" class="formText newSection">Раздел H. Сведения о деньгах на банковских счетах в иностранных банках, находящихся за пределами Республики Казахстан, в сумме, в совокупности превышающей 1000-кратный размер МРП, установленного законом о республиканском бюджете и действующего на 31 декабря отчетного налогового периода <span><img onclick="showInfoPopupH()" class="infoBtn" src="{{ asset('img/infoIcon.svg') }}" alt=""></span></p>
                          <table class="tableCustom">
                            <th>(A) №</th>
                            <th>(B) Идентификационный номер банковского учреждения</th>
                            <th>(C) Наименование банковского учреждения</th>
                            <th>(D) Код страны</th>
                            <th>(E) Код валюты</th>
                            <th>(F) Сумма</th>

                            <tr id="table_h_1">
                                <td><input type="text" class="tableInput" id="h_1a" name="h_1a" value="{{ old('h_1a') }}"></td>
                                <td><input type="text" class="tableInput" id="h_1b" name="h_1b" value="{{ old('h_1b') }}"></td>
                                <td><input type="text" class="tableInput" id="h_1c" name="h_1c" value="{{ old('h_1c') }}"></td>
                                <td><input type="text" class="tableInput" id="h_1d" name="h_1d" value="{{ old('h_1d') }}"></td>
                                <td><input type="text" class="tableInput" id="h_1e" name="h_1e" value="{{ old('h_1e') }}"></td>
                                <td><input type="text" class="tableInput" id="h_1f" name="h_1f" value="{{ old('h_1f') }}"></td>
                                <td class="iconCol"><span><img id="table_h_1_error" src="" alt=""></span></td>
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
                            на 31 декабря отчетного налогового периода <span><img onclick="showInfoPopupI()" class="infoBtn" src="{{ asset('img/infoIcon.svg') }}" alt=""></span>
                            </p>
                         <table class="tableCustom">
                           <th>(A) №</th>
                           <th>(B) Вид задолженности (Д/К)</th>
                           <th>(C) ИИН/БИН дебитора/кредитора</th>
                           <th>(D) Код страны регистрации дебитора/кредитора</th>
                           <th>(E) Код валюты</th>
                           <th>(F) Сумма задолженности</th>
                           <th>(G) ИИН нотариуса, проводившего нотариальные действия</th>

                           <tr id="table_i_1">
                               <td><input type="text" class="tableInput" id="i_1a" name="i_1a" value="{{ old('i_1a') }}"></td>
                               <td><input type="text" class="tableInput" id="i_1b" name="i_1b" value="{{ old('i_1b') }}"></td>
                               <td><input type="text" class="tableInput" id="i_1c" name="i_1c" value="{{ old('i_1c') }}"></td>
                               <td><input type="text" class="tableInput" id="i_1d" name="i_1d" value="{{ old('i_1d') }}"></td>
                               <td><input type="text" class="tableInput" id="i_1e" name="i_1e" value="{{ old('i_1e') }}"></td>
                               <td><input type="text" class="tableInput" id="i_1f" name="i_1f" value="{{ old('i_1f') }}"></td>
                               <td><input type="text" class="tableInput" id="i_1g" name="i_1g" value="{{ old('i_1g') }}"></td>
                               <td class="iconCol"><span><img id="table_i_1_error" src="" alt=""></span></td>
                           </tr>
                           <tr id="table_i_2">
                            <td><input type="text" class="tableInput" id="i_2a" name="i_2a" value="{{ old('i_2a') }}"></td>
                            <td><input type="text" class="tableInput" id="i_2b" name="i_2b" value="{{ old('i_2b') }}"></td>
                            <td><input type="text" class="tableInput" id="i_2c" name="i_2c" value="{{ old('i_2c') }}"></td>
                            <td><input type="text" class="tableInput" id="i_2d" name="i_2d" value="{{ old('i_2d') }}"></td>
                            <td><input type="text" class="tableInput" id="i_2e" name="i_2e" value="{{ old('i_2e') }}"></td>
                            <td><input type="text" class="tableInput" id="i_2f" name="i_2f" value="{{ old('i_2f') }}"></td>
                            <td><input type="text" class="tableInput" id="i_2g" name="i_2g" value="{{ old('i_2g') }}"></td>
                            <td class="iconCol"><span><img id="table_i_2_error" src="" alt=""></span></td>
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
                        <p id="sectionJ" class="formText newSection">Раздел J. Сведения о наличии имущества и активов за пределами Республики Казахстан на 31 декабря отчетного налогового периода <span><img onclick="showInfoPopupJ()"class="infoBtn" src="{{ asset('img/infoIcon.svg') }}" alt=""></span></p>
                         <table class="tableCustom">

                            <th>(A) №</th>
                            <th>(B) Вид имущества</th>
                            <th>(C) Идентификационный номер</th>
                            <th>(D) Код страны</th>
                            <th>(E) Адрес регистрации</th>

                           <tr id="table_j_1">
                            <td><input type="text" class="tableInput" id="j_1a" name="j_1a" value="{{ old('j_1a') }}"></td>
                            <td><input type="text" class="tableInput" id="j_1b" name="j_1b" value="{{ old('j_1b') }}"></td>
                            <td><input type="text" class="tableInput" id="j_1c" name="j_1c" value="{{ old('j_1c') }}"></td>
                            <td><input type="text" class="tableInput" id="j_1d" name="j_1d" value="{{ old('j_1d') }}"></td>
                            <td><input type="text" class="tableInput" id="j_1e" name="j_1e" value="{{ old('j_1e') }}"></td>
                            <td class="iconCol"><span><img id="table_j_1_error" src="" alt=""></span></td>
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
                            <label id="sectionK" class="formText" for="sectionDInput" style="white-space: nowrap;">Раздел K. Требование о зачете превышения по ИПН в сумме: <span><img onclick="showInfoPopupK()" class="infoBtn" src="{{ asset('img/infoIcon.svg') }}" alt=""></span></label>
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
                        <p id="sectionL" class="formText newSection">Раздел L. Требование о возврате превышения по ИПН, если «Да» заполните таблицу <span><img onclick="showInfoPopupL()" class="infoBtn" src="{{ asset('img/infoIcon.svg') }}" alt=""></span></p>
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
                        <p id="sectionM" class="formText newSection">Раздел M. Согласие налогоплательщика на раскрытие сведений (укажите Х в соответствующей ячейке): <span><img onclick="showInfoPopupM()" class="infoBtn" src="{{ asset('img/infoIcon.svg') }}" alt=""></span></p>
                            <table class="tableCustom">
                                <th>Настоящим я даю согласие на представление банковскими учреждениями сведений о расходах физического лица на погашение вознаграждения по ипотечным жилищным займам, полученным на приобретение жилья в Республике Казахстан</th>
                                <th><input type="text" class="tableInput"></th>
                            </table>
                        <!-- РАЗДЕЛ N -->
                        <p id="sectionN" class="formText newSection">Раздел N. Для заполнения частными нотариусом, судебным исполнителем
                            адвокатом, профессиональным медиатором <span><img onclick="showInfoPopupN()" class="infoBtn" src="{{ asset('img/infoIcon.svg') }}" alt=""></span>
                            </p>
                            <table class="tableCustom">
                                <th>(А) Период (месяц)</th>
                                <th>(В) Всего доходов от осуществления деятельности</th>
                                <th>(С) Всего сумма ИПН, подлежащего уплате в бюджет</th>
                                <th>(А) Период (месяц)</th>
                                <th>(В) Всего доходов от осуществления деятельности</th>
                                <th>(С) Всего сумма ИПН, подлежащего уплате в бюджет</th>

                                <tr>
                                    <td id="table_n_1_name">Январь</td>
                                    <td id="table_n_b1"><input type="text" class="tableInput" id="n_b1" name="n_b1" value="{{ old('n_b1') }}"></td>
                                    <td id="table_n_c1"><input type="text" class="tableInput" id="n_c1" name="n_c1" value="{{ old('n_c1') }}"></td>
                                    <td id="table_n_7_name">Июль</td>
                                    <td id="table_n_b7"><input type="text" class="tableInput" id="n_b7" name="n_b7" value="{{ old('n_b7') }}"></td>
                                    <td id="table_n_c7"><input type="text" class="tableInput" id="n_c7" name="n_c7" value="{{ old('n_c7') }}"></td>
                                </tr>
                                <tr>
                                    <td id="table_n_2_name">Февраль</td>
                                    <td id="table_n_b2"><input type="text" class="tableInput" id="n_b2" name="n_b2" value="{{ old('n_b2') }}"></td>
                                    <td id="table_n_c2"><input type="text" class="tableInput" id="n_c2" name="n_c2" value="{{ old('n_c2') }}"></td>
                                    <td id="table_n_8_name">Август</td>
                                    <td id="table_n_b8"><input type="text" class="tableInput" id="n_b8" name="n_b8" value="{{ old('n_b8') }}"></td>
                                    <td id="table_n_c8"><input type="text" class="tableInput" id="n_c8" name="n_c8" value="{{ old('n_c8') }}"></td>
                                </tr>
                                <tr>
                                    <td id="table_n_3_name">Март</td>
                                    <td id="table_n_b3"><input type="text" class="tableInput" id="n_b3" name="n_b3" value="{{ old('n_b3') }}"></td>
                                    <td id="table_n_c3"><input type="text" class="tableInput" id="n_c3" name="n_c3" value="{{ old('n_c3') }}"></td>
                                    <td id="table_n_9_name">Сентябрь</td>
                                    <td id="table_n_b9"><input type="text" class="tableInput" id="n_b9" name="n_b9" value="{{ old('n_b9') }}"></td>
                                    <td id="table_n_c9"><input type="text" class="tableInput" id="n_c9" name="n_c9" value="{{ old('n_c9') }}"></td>
                                </tr>
                                <tr>
                                    <td id="table_n_4_name">Апрель</td>
                                    <td id="table_n_b4"><input type="text" class="tableInput" id="n_b4" name="n_b4" value="{{ old('n_b4') }}"></td>
                                    <td id="table_n_c4"><input type="text" class="tableInput" id="n_c4" name="n_c4" value="{{ old('n_c4') }}"></td>
                                    <td id="table_n_10_name">Октябрь</td>
                                    <td id="table_n_b10"><input type="text" class="tableInput" id="n_b10" name="n_b10" value="{{ old('n_b10') }}"></td>
                                    <td id="table_n_c10"><input type="text" class="tableInput" id="n_c10" name="n_c10" value="{{ old('n_c10') }}"></td>
                                </tr>
                                <tr>
                                    <td id="table_n_5_name">Май</td>
                                    <td id="table_n_b5"><input type="text" class="tableInput" id="n_b5" name="n_b5" value="{{ old('n_b5') }}"></td>
                                    <td id="table_n_c5"><input type="text" class="tableInput" id="n_c5" name="n_c5" value="{{ old('n_c5') }}"></td>
                                    <td id="table_n_11_name">Ноябрь</td>
                                    <td id="table_n_b11"><input type="text" class="tableInput" id="n_b11" name="n_b11" value="{{ old('n_b11') }}"></td>
                                    <td id="table_n_c11"><input type="text" class="tableInput" id="n_c11" name="n_c11" value="{{ old('n_c11') }}"></td>
                                </tr>
                                <tr>
                                    <td id="table_n_6_name">Июнь</td>
                                    <td id="table_n_b6"><input type="text" class="tableInput" id="n_b6" name="n_b6" value="{{ old('n_b6') }}"></td>
                                    <td id="table_n_c6"><input type="text" class="tableInput" id="n_c6" name="n_c6" value="{{ old('n_c6') }}"></td>
                                    <td id="table_n_12_name">Декабрь</td>
                                    <td id="table_n_b12"><input type="text" class="tableInput" id="n_b12" name="n_b12" value="{{ old('n_b12') }}"></td>
                                    <td id="table_n_c12"><input type="text" class="tableInput" id="n_c12" name="n_c12" value="{{ old('n_c12') }}"></td>
                                </tr>
                            </table>
                        <!-- РАЗДЕЛ O -->
                            <p id="sectionO" class="formText newSection">Раздел O. Финансовая прибыль контролируемой иностранной компании (КИК) <span><img onclick="showInfoPopupO()" class="infoBtn" src="{{ asset('img/infoIcon.svg') }}" alt=""></span></p>
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
                                <p class="small2" style="font-size:22px; font-weight:700; text-decoration: underline; color:#D2AB67; margin-top:5%; margin-left: 10px;">#ВМЕСТЕКРАЗВИТИЮ</p>
                            </div>
                            <div class="col-sm-8">
                                <!-- <button type="button" class="btn btnCustom4"  onclick="showInfoPopupCheck()"> Проверить</button> -->
                                <input type="submit" form="myform" class="btn btnCustom4" name="submit" value="Проверить"/>
                                <!-- <button type="button" class="btn btnCustom"><img src="{{ asset('img/supportIcon.svg') }}" alt=""> Тех. поддержка</button> -->
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
                    в строке 1 – указывается индивидуальный идентификационный номер  (ИИН) физического лица;<br>
                    в строке 2 – указывается налоговый период, за который представляется Декларация ( налоговым периодом для представления Декларации является календарный год);<br>
                    в строке 3 – указывается фамилия, имя, отчество (при его наличии) физического лица в соответствии с документами, удостоверяющими личность, номер телефона (по желанию) и электронный адрес (по желанию);<br>
                    в строке 4 – заполняется, в случае если физическое лицо, составляющее Декларацию, является законным представителем и указывается ИИН представляемого лица (несовершеннолетнего и (или) недееспособного или ограничено дееспособного). (данная строка заполняется с 2025 года)<br>
                    в строке 5 – указывается вид Декларации (первоначальная, очередная, дополнительная, доолнительная по уведомлению)<br>
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
                    Годовой доход физического лица включает 18 видов доходов, согласно статье 321 Налогового кодекса, из которых 13 видов доходов облагает налоговый агент (работодатель), остальные 5 видов дохода физическое лицо может исчислить самостоятельно.<br>
                    *(Исчисление, удержание и уплата в бюджет индивидуального подоходного налога осуществляются у источника выплаты налоговым агентом по указанным доходам, в случае, если такие доходы подлежат выплате (выплачиваются) указанным налоговым агентом:<br>
                        1) доход работника, в том числе доход домашнего работника и доход трудового иммигранта-резидента;<br>
                        2) доход от реализации товаров, выполнения работ, оказания услуг, кроме имущественного дохода, полученный физическим лицом, не являющимся индивидуальным предпринимателем, лицом, занимающимся частной практикой;<br>
                        3) доход в виде оплаты третьим лицом стоимости товаров, выполненных работ, оказанных услуг, полученных физическим лицом;<br>
                        4) доход в виде работ, услуг, выполненных, оказанных в счет погашения задолженности перед физическим лицом;<br>
                        5) доход в виде безвозмездно полученного имущества, в том числе работ, услуг;<br>
                        6) доход в виде прощения долга;<br>
                        7) доход в виде уменьшения размера требования к должнику, за исключением списанных штрафа, пени и других видов санкций;<br>
                        8) доход в виде выплаты вознаграждения по операциям репо;<br>
                        9) доход в виде пенсионных выплат, единовременных пенсионных выплат;<br>
                        10) доход в виде дивидендов, вознаграждений, выигрышей;<br>
                        11) доход в виде стипендии;<br>
                        12) доход по договорам накопительного страхования;<br>
                        17) другие доходы, полученные от налогового агента или из источников за пределами Республики Казахстан;<br>
                    Исчисление, удержание и уплата в бюджет индивидуального подоходного налога по вышеуказанным доходам (в случае, если такие доходы не начислены налоговым агентом), а также по следующим видам доходов осуществляются физическим лицом самостоятельно:<br>
                        13) имущественный доход;<br>
                        14) доход индивидуального предпринимателя;<br>
                        15) доход лица, занимающегося частной практикой;<br>
                        16) доходы от личного подсобного хозяйства, учтенного в книге похозяйственного учета в соответствии с законодательством Республики Казахстан, подлежащие налогообложению, по которым не было произведено удержание индивидуального подоходного налога у источника выплаты в связи с представлением налоговому агенту недостоверных сведений лицом, занимающимся личным подсобным хозяйством;<br>
                        Другие доходы, не указанные в подпункте 1)-16) настоящей статьи, полученные от налогового агента или из источников за пределами Республика Казахстан;<br>
                        18) суммарная прибыль контролируемых иностранных компаний или постоянных учреждений контролируемых иностранных компаний, определяемая в соответствии со статьей 340 Налогового кодекса).<br>
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
                    *(1. Доход работника – доход, начисленный работодателем, являющимся налоговым агентом включает:<br>
                    а) передачу денег на основании трудовых  договоров (заработная плата);<br>
                    б) в натуральном виде<br>
                    - стоимость товаров, ценных бумаг, доли участия и иного имущества (кроме денег), подлежащего передаче работодателем работнику (члену совета директоров или иного органа управления) в собственность;<br>
                    - выполнение работодателем работ, оказание услуг в пользу работника (члена совета директоров или иного органа управления)<br>
                    - стоимость имущества, полученного от работодателя на безвозмездной основе;<br>
                    - оплата работодателем работнику или третьим лицам стоимости товаров, выполненных работ, оказанных услуг, полученных работником от работодателя или третьих лиц (договор ГПХ).<br>
                    в) в виде материальной выгоды<br>
                    - отрицательная разница между стоимостью товаров, реализованных работнику, и их балансовой стоимостью или ценой их приобретения – при реализации товаров работнику;<br>
                    - отрицательная разница между стоимостью работ, услуг, реализованных работнику, и общей суммой расходов работодателя, понесенных в связи с таким выполнением работ, оказанием услуг – при реализации работ, услуг работнику.<br>
                    - списание по решению работодателя суммы долга или обязательства работника перед ним – при списании суммы долга работнику;<br>
                    - расходы работодателя на уплату страховых премий по договорам страхования своих работников, заключенным в том числе работниками, – при уплате суммы страховых премий по договорам страхования;<br>
                    - расходы работодателя на возмещение затрат работника, не связанных с деятельностью работодателя, – при возмещении затрат работнику.<br>
                    2. Доход в виде безвозмездно полученного имущества определяется в следующем размере с учетом соответствующей суммы налога на добавленную стоимость и акцизов балансовой стоимости имущества либо стоимости имущества, определенной договором или иным документом, на основании которого имущество передается физическому лицу, в случае отсутствия балансовой стоимости такого имущества.<br>
                    3. Доход в виде безвозмездно полученных работ и (или) услуг определяется в виде стоимости выполненных работ, оказанных услуг в размере расходов налогового агента, понесенных в связи с таким выполнением работ, оказанием услуг, с учетом соответствующей суммы налога на добавленную стоимость.<br>
                    4. Доход в виде пенсионных выплат, относятся выплаты, осуществляемые единым накопительным пенсионным фондом и (или) добровольными накопительными пенсионными фондами:<br>
                          	- из пенсионных накоплений налогоплательщиков;<br>
                          	- физическим лицам-резидентам РК, достигшим пенсионного возраста и выехавшим на постоянное место жительства за пределы РК;<br>
                          	- физическим лицам-резидентам РК, не достигшим пенсионного возраста и выехавшим на постоянное место жительства за РК;<br>
                          	- физическим лицам в виде пенсионных накоплений, унаследованных в порядке, установленном законодательством РК;<br>
                          	- физическим лицам в виде единовременной выплаты на погребение умершего лица, имеющего пенсионные накопления.<br>
                    5. Доход в виде дивидендов, вознаграждений, выигрышей, являются:<br>
                          	- выплаченные (подлежащие выплате) дивиденды, определенные подпунктом 16) пункта 1 статьи 1 Налогового кодекса;<br>
                           	- выплаченные (подлежащие выплате) вознаграждения;<br>
                          	- выплаченные (подлежащие выплате) выигрыши.<br>
                          К доходу в виде дивидендов, подлежащему налогообложению, относится также чистый доход от доверительного управления учредителя доверительного управления, полученный от юридического лица, являющегося доверительным управляющим.<br>
                    6. Доход в виде стипендий - сумма денег, назначенная налоговым агентом к выплате:<br>
                          	- обучающимся в организациях образования в соответствии с законодательством РК в области образования;<br>
                          	- деятелям культуры, науки, работникам средств массовой информации и другим физическим лицам в соответствии с законодательством РК.<br>
                    7. Доход по договорам накопительного страхования, является:<br>
                          	- страховые выплаты, осуществляемые страховыми организациями по договорам накопительного страхования, страховые премии по которым были оплачены: 	за счет пенсионных накоплений в едином накопительном пенсионном фонде и добровольных накопительных пенсионных фондах;<br>
              		физическим лицом в свою пользу;<br>
              		работодателем в пользу работника;<br>
                  	- выкупные суммы, выплачиваемые в случаях досрочного прекращения таких договоров;<br>
                  	- превышение суммы страховых выплат, осуществляемых страховой организацией, над суммой страховых премий, оплаченных за счет средств).<br>
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
                    - Доход от прироста стоимости при реализации физическим лицом имущества в РК (применяются в отношении физических лиц, в том числе индивидуальных предпринимателей, применяющих специальный налоговый режим для субъектов малого бизнеса либо для крестьянских или фермерских хозяйств) (статья 331 Налогового кодекса);<br>
                    - Доход физического лица от реализации имущества, полученный из источников за пределами Республики Казахстан (статья 332 Налогового кодекса);<br>
                    - Доход от прироста стоимости при передаче физическим лицом имущества (кроме денег) в качестве вклада в уставный капитал (применяются в отношении физических лиц, в том числе индивидуальных предпринимателей, применяющих специальный налоговый режим для субъектов малого бизнеса либо для крестьянских или фермерских хозяйств) (статья 333 Налогового кодекса);<br>
                    - Доход, полученный физическим лицом, не являющимся индивидуальным предпринимателем и (или) плательщиком единого совокупного платежа, от сдачи в имущественный наем (аренду) имущества лицам, не являющимся налоговыми агентами;<br>
                    - Доход от уступки права требования, в том числе доли в жилом доме (здании) по договору о долевом участии в жилищном строительстве (статья 335 Налогового кодекса);<br>
                    - Доход от прироста стоимости при реализации прочих активов индивидуального предпринимателя, применяющего специальный налоговый режим для субъектов малого бизнеса либо для крестьянских или фермерских хозяйств (статья 334 Налогового кодекса).<br>
                    * К имущественному доходу физического лица, подлежащему налогообложению, относятся:<br>
                    Доход от прироста стоимости при реализации физическим лицом имущества в РК (применяются в отношении физических лиц, в том числе индивидуальных предпринимателей, применяющих специальный налоговый режим для субъектов малого бизнеса либо для крестьянских или фермерских хозяйств). Возникает при реализации следующего имущества находящихся на территории РК: <br>
                    находящегося на праве собственности менее года: жилищ, дачных строений, гаражей, объектов личного подсобного хозяйства; Земельных участков и (или) земельных долей с целевым назначением «индивидуальное жилищное строительство», «дачное строительство», «ведение личного подсобного хозяйства», «под гараж» или на которых расположены такие объекты; механические транспортные средства и (или) прицепы, подлежащие государственной регистрации в РК;
                    независимо от времени нахождения на праве собственности: Земельные участки и (или) земельные доли с целевым назначением, не связанным с индивидуальным жилищным, дачным строительством, ведение личного подсобного хозяйства, под гараж; инвестиционное золото; недвижимое имущество, не относящееся к жилищу, дачным строениям, гаражам, объектам личного подсобного хозяйства; ценные бумаги, производные финансовые инструментов, эмитенты которых зарегистрированы в РК; доля участия в уставном капитале юридического лица, зарегистрированного в РК.
                    Доход физического лица от реализации имущества, полученный из источников за пределами Республики Казахстан.<br>
                    3) Доход от прироста стоимости при передаче физическим лицом имущества (кроме денег) в качестве вклада в уставный капитал (применяются в отношении физических лиц, в том числе индивидуальных предпринимателей, применяющих специальный налоговый режим для субъектов малого бизнеса либо для крестьянских или фермерских хозяйств);<br>
                    4) Доход, полученный физическим лицом, не являющимся индивидуальным предпринимателем и (или) плательщиком единого совокупного платежа, от сдачи в имущественный наем (аренду) имущества лицам, не являющимся налоговыми агентами;<br>
                    5) Доход от уступки права требования, в том числе доли в жилом доме (здании) по договору о долевом участии в жилищном строительстве; (Доход от уступки права требования является положительная разница между стоимостью уступки права требования и стоимостью, по которой физическое лицо приобрело такое право. Доход от уступки права требования доли в жилом здании по договору о долевом участии в жилищном строительстве является положительная разница между стоимостью уступки права требования и ценой договора о долевом участии в жилищном строительстве. Доход от уступки права требования доли в жилом здании по договору о долевом участии в жилищном строительстве, ранее приобретенного путем уступки права требования по договору о долевом участии в жилищном строительстве, является положительная разница между стоимостью уступки права требования и стоимостью, по которой физическое лицо ранее приобрело такое право).  <br>
                    6) Доход от прироста стоимости при реализации прочих активов индивидуального предпринимателя, применяющего специальный налоговый режим для субъектов малого бизнеса либо для крестьянских или фермерских хозяйств.<br>
                    (К прочим активам относятся следующие активы, не являющиеся товарно-материальными запасами и требованиями:<br>
                        1) основные средства, используемые в предпринимательской деятельности;<br>
                        2) объекты незавершенного строительства;<br>
                        3) неустановленное оборудование;<br>
                        4) нематериальные активы;<br>
                        5) биологические активы;<br>
                        6) основные средства, стоимость которых полностью отнесена на вычеты в соответствии с налоговым законодательством Республики Казахстан, действовавшим до 1 января 2000 года, в случае, если такие основные средства являлись фиксированными активами в налоговых периодах, в течение которых индивидуальный предприниматель осуществлял расчеты с бюджетом в общеустановленном порядке и актив являлся фиксированным активом;<br>
                        7) активы, введенные в эксплуатацию в рамках инвестиционного проекта по контрактам, заключенным до 1 января 2009 года в соответствии с законодательством Республики Казахстан об инвестициях, стоимость которых полностью отнесена на вычеты, в случае, если индивидуальный предприниматель осуществлял ранее расчеты с бюджетом в общеустановленном порядке и актив являлся фиксированным активом.<br>
                    При реализации прочих активов индивидуальным предпринимателем, применяющим специальный налоговый режим для субъектов малого бизнеса либо для крестьянских или фермерских хозяйств, прирост определяется по каждому активу как положительная разница между ценой (стоимостью) реализации и первоначальной стоимостью).
                </p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionB2A';">Читать полностью</button>
            </div>

            <div class="popupInfo" id="infoB2B" style="display: none;">
                <img src="{{ asset('img/closeIcon.svg') }}" class="closeIcon" alt="" onclick="closeInfoPopupB2B()">
                <div class="infoText">
                <p style="font-weight:700; font-size: 16px;">Строка 02В. Доход лица, занимающегося частной практикой</p>
                <p style="font-weight:400; font-size: 16px;">
                    Отражаются доходы частного нотариуса, частного судебного исполнителя, адвоката,
                    профессионального медиатора (статья 336 Налогового кодекса). *Доход лица,
                    занимающегося частной практикой<br>
                    К доходу лица, занимающегося частной практикой, относятся:<br>
                    1) доход частного нотариуса;<br>
                    2) доход частного судебного исполнителя;<br>
                    3) доход адвоката;<br>
                    4) доход профессионального медиатора.<br>
                    Доходом лиц, занимающихся частной практикой, являются все виды доходов,
                    полученных от осуществления деятельности по исполнению исполнительных
                    документов, нотариальной, адвокатской деятельности, деятельности
                    профессионального медиатора, включая соответственно оплату за оказание
                    юридической помощи, совершение нотариальных действий, а также полученные суммы
                    возмещения расходов, связанных с защитой и представительством.
                </p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionB2B';">Читать полностью</button>
            </div>

            <div class="popupInfo" id="infoB2C" style="display: none;">
                <img src="{{ asset('img/closeIcon.svg') }}" class="closeIcon" alt="" onclick="closeInfoPopupB2C()">
                <div class="infoText">
                <p style="font-weight:700; font-size: 16px;">Строка 02С. Доход из источников за пределами Республики Казахстан (статья 338 Налогового кодекса)</p>
                <p style="font-weight:400; font-size: 16px;">
                    *Доходами из источников за пределами Республики Казахстан признаются все виды
                    доходов, полученных (подлежащих получению) налогоплательщиком в течение
                    отчетного налогового периода от лица, не являющегося налоговым агентом, и не
                    являющихся доходами из источников в Республике Казахстан независимо от места
                    выплаты, за исключением доходов указанных в подпунктах 1) – 16) статьи 321
                    Налогового кодекса.
                </p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionB2C';">Читать полностью</button>
            </div>
            <div class="popupInfo" id="infoB2D" style="display: none;">
                <img src="{{ asset('img/closeIcon.svg') }}" class="closeIcon" alt="" onclick="closeInfoPopupB2D()">
                <div class="infoText">
                <p style="font-weight:700; font-size: 16px;"">Строка 02D. Доход индивидуального предпринимателя (статья 338 Налогового кодекса)</p>
                <p style="font-weight:400; font-size: 16px;">
                    *  1. Доход индивидуального предпринимателя, применяющего общеустановленный
                    режим, определяется в соответствии со статьей 366 Налогового кодекса.<br>
                    2. Доход индивидуального предпринимателя, применяющего специальный налоговый
                    режим, определяется в соответствии со статьей 366 Налогового кодекса, если иной
                    порядок не установлен разделом 20 Налогового кодекса (статья 681 Налогового
                    кодекса).
                </p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionB2D';">Читать полностью</button>
            </div>
            <div class="popupInfo" id="infoC" style="display: none;">
                <img src="{{ asset('img/closeIcon.svg') }}" class="closeIcon" alt="" onclick="closeInfoPopupC()">
                <div class="infoText">
                <p style="font-weight:700; font-size: 16px;">Раздел С «Общая сумма корректировки дохода в соответствии со статьей 341 Налогового кодекса» налогоплательщик указывает сумму корректировки при их наличии в отчетном периоде</p>
                <p style="font-weight:400; font-size: 16px;">
                    Из доходов физического лица, подлежащих налогообложению, исключаются 54 вида доходов указанные в статье 341 Налогового кодекса.<br>
                        * 1) алименты, полученные на детей и иждивенцев;<br>
                    2) вознаграждения, выплачиваемые физическим лицам по их вкладам (депозитам) в банках и организациях, осуществляющих отдельные виды банковских операций, на основании лицензии;<br>
                    3) вознаграждения по долговым ценным бумагам;<br>
                    4) вознаграждения по государственным эмиссионным ценным бумагам, агентским облигациям;<br>
                    5) доходы от прироста стоимости при реализации государственных эмиссионных ценных бумаг;<br>
                    6) доходы от прироста стоимости при реализации агентских облигаций;<br>
                    7) дивиденды и вознаграждения по ценным бумагам, находящимся на дату начисления таких дивидендов и вознаграждений в официальном списке фондовой биржи, функционирующей на территории Республики Казахстан;<br>
                    8) дивиденды, при одновременном выполнении следующих условий:<br>
                    на день начисления дивидендов налогоплательщик владеет акциями или долями участия, по которым выплачиваются дивиденды, более трех лет;<br>
                    юридическое лицо-резидент, выплачивающее дивиденды, не является недропользователем в течение периода, за который выплачиваются дивиденды;<br>
                    имущество лиц (лица), являющихся (являющегося) недропользователями (недропользователем), в стоимости активов юридического лица-резидента, выплачивающего дивиденды, на день выплаты дивидендов составляет не более 50 процентов.<br>
                    Положения настоящего подпункта применяются к дивидендам, полученным от юридического лица-резидента<br>
                    9) доходы военнослужащего в связи с исполнением обязанностей воинской службы, сотрудника специальных государственных органов, сотрудника правоохранительных органов (за исключением сотрудника таможенных органов), сотрудника государственной фельдъегерской службы в связи с исполнением служебных обязанностей;<br>
                    10) все виды выплат, получаемых в связи с исполнением служебных обязанностей в других войсках и воинских формированиях, правоохранительных органах (за исключением таможенных органов), на государственной фельдъегерской службе лицами, права которых иметь воинские, специальные звания, классные чины и носить форменную одежду упразднены с 1 января 2012 года;<br>
                    11) выигрыш по одной лотерее в пределах 6-кратного размера месячного расчетного показателя, установленного на соответствующий финансовый год законом о республиканском бюджете и действующего на дату начисления таких выигрышей;<br>
                    12) выплаты в связи с выполнением общественных работ и профессиональным обучением, осуществляемые за счет средств бюджета и (или) грантов, в 12-кратном размере МРП;<br>
                    13) выплаты в соответствии с законами Республики Казахстан "О социальной защите граждан, пострадавших вследствие экологического бедствия в Приаралье" и "О социальной защите граждан, пострадавших вследствие ядерных испытаний на Семипалатинском испытательном ядерном полигоне".<br>
                    Применяются при представлении физическим лицом:<br>
                    заявления для применения корректировки дохода в пределах, установленных законами Республики Казахстан "О социальной защите граждан, пострадавших вследствие экологического бедствия в Приаралье" и "О социальной защите граждан, пострадавших вследствие ядерных испытаний на Семипалатинском испытательном ядерном полигоне» копий подтверждающих документов;<br>
                    34) стоимость имущества, полученного в виде благотворительной и спонсорской помощи;<br>
                    35) стоимость путевок в детские лагеря для детей, не достигших шестнадцатилетнего возраста;<br>
                    36) страховые выплаты, связанные со страховым случаем, наступившим в период действия договора, выплачиваемые при любом виде страхования, за исключением доходов, предусмотренных статьей 329 Налогового кодекса;<br>
                    37) страховые выплаты, осуществляемые страховыми организациями по договорам накопительного страхования, страховые премии по которым были оплачены физическим лицом в свою пользу и (или) в пользу близких родственников, супруга (супруги) и (или) работодателем в пользу работника;<br>
                    37-1) выкупные суммы, выплачиваемые страховыми организациями по договорам накопительного страхования в соответствии с законодательством РК о страховании и страховой деятельности;<br>
                    38) чистый доход от доверительного управления учредителя доверительного управления, полученный от физического лица-резидента, в том числе индивидуального предпринимателя, являющегося доверительным управляющим;<br>
                    39) дивиденды, распределенные из финансовой прибыли (или ее части) контролируемой иностранной компании и (или) иностранной компании, входящих в единую организационную структуру консолидированной группы, ранее обложенные индивидуальным подоходным налогом согласно статье 340 Налогового Кодекса;<br>
                    40) доход по инвестиционному депозиту, размещенному в исламском банке;<br>
                    41) государственная адресная социальная помощь, пособия и компенсации, выплачиваемые за счет средств бюджета, в размерах, установленных законодательством Республики Казахстан;<br>
                    42) возмещение вреда, причиненного жизни и здоровью физического лица, в соответствии с законодательством Республики Казахстан, за исключением морального вреда;<br>
                    43) страховые выплаты по договорам страхования работника от несчастных случаев при исполнении им трудовых (служебных) обязанностей и договорам аннуитетного страхования, заключенным работодателем, в части возмещения вреда, причиненного жизни и (или) здоровью работника в связи с исполнением им трудовых (служебных) обязанностей;<br>
                    44) суммы возмещения материального ущерба, присуждаемые по решению суда, а также судебных расходов;<br>
                    45) стоимость имущества, полученного в виде гуманитарной помощи;<br>
                    46) страховые премии, уплачиваемые работодателем по договорам обязательного страхования своих работников;<br>
                    47) выплаты за счет средств грантов (кроме выплат в виде оплаты труда);<br>
                    48) доход от реализации лома и отходов цветных и черных металлов юридическому лицу, осуществляющему деятельность по сбору такого лома и отходов, – в размере 85 процентов от суммы такого дохода.<br>
                    При определении дохода, предусмотренного настоящим подпунктом, налоговые вычеты, указанные в главе 37 настоящего Кодекса, не применяются;<br>
                    50) доходы работников юридических лиц, указанных в подпункте 6) пункта 1 статьи 293 Налогового кодекса;<br>
                    52) доходы физического лица, полученные в виде расходов некоммерческой организации, определенной пунктом 1 статьи 289 Налогового кодекса, в рамках реализации уставных целей и задач на проезд, проживание и питание физического лица, не состоящего в трудовых отношениях с такой организацией и (или) не в рамках договора об оказании услуг, выполнении работ;<br>
                    53) страховые премии (страховые взносы – в случае, если договором предусмотрена уплата страховых премий в рассрочку) в пределах 320-кратного размера МРП, оплаченные в течение календарного года физическим лицом-резидентом по договору накопительного страхования, заключенному на срок три года и более.<br>
                    Корректировка дохода применяется в том налоговом периоде, на который приходится дата уплаты страховой премии (страхового взноса), и подтверждающими документами для применения такой корректировки являются: заявление о применении налогового вычета; договор накопительного страхования; график уплаты страховых взносов (при наличии);<br>
                    документ, подтверждающий уплату страховой премии (страховых взносов).
                </p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionC';">Читать полностью</button>
            </div>
            <div class="popupInfo" id="infoD" style="display: none;">
                <img src="{{ asset('img/closeIcon.svg') }}" class="closeIcon" alt="" onclick="closeInfoPopupD()">
                <div class="infoText">
                <p style="font-weight:700; font-size: 16px;">Раздел D «Cумма налоговых вычетов, не примененных налоговым агентом»</p>
                <p style="font-weight:400; font-size: 16px;">
                    Указывается сумма налоговых вычетов в соответствии со статьей 342 Налогового кодекса при их наличии в отчетном периоде. <br>
                        * Физическое лицо имеет право на применение следующих видов налоговых вычетов:<br>
                        1) налоговый вычет в виде обязательных пенсионных взносов – в размере, установленном законодательством РК о пенсионном обеспечении;<br>
                        1-1) налоговый вычет по взносам на обязательное социальное медицинское страхование – в размере, установленном законодательством РК об обязательном социальном медицинском страховании;<br>
                        2) налоговый вычет по пенсионным выплатам и договорам накопительного страхования;<br>
                        3) стандартные налоговые вычеты (далее – стандартные вычеты);<br>
                        4) прочие налоговые вычеты (далее – прочие вычеты), которые включают в себя:<br>
                        налоговый вычет по добровольным пенсионным взносам;<br>
                        налоговый вычет на медицину;<br>
                        налоговый вычет по вознаграждениям.<br>
                    Налоговые вычеты подлежат применению:<br>
                        1) налоговым агентом – по доходам, подлежащим налогообложению у источника выплаты, в порядке и случаях, предусмотренных статьей 343 Налогового кодекса. Налоговые вычеты, за исключением налоговых вычетов в виде обязательных пенсионных взносов, по взносам на обязательное социальное медицинское страхование и по пенсионным выплатам, применяются налоговым агентом у источника выплаты на основании:<br>
                        - заявления физического лица о применении налоговых вычетов; - копий подтверждающих документов. <br>
                        Физическое лицо вправе применить за налоговый период определенный вид налогового вычета только у одного налогового агента, за исключением налоговых вычетов в виде обязательных пенсионных взносов и по взносам на обязательное социальное медицинское страхование.<br>
                        2) физическим лицом самостоятельно – по доходам, подлежащим налогообложению физическим лицом самостоятельно, если указанные вычеты не были произведены при определении дохода работника.<br>
                        Налоговые вычеты применяются на основании документов, подтверждающих право на применение налоговых вычетов (далее – подтверждающие документы). Оригиналы таких документов хранятся у физического лица в течение срока исковой давности, установленного пунктом 2 статьи 48 настоящего Кодекса.<br>
                    Налоговые вычеты применяются последовательно в том порядке, в котором они отражены в пункте 1 статьи 342 Налогового кодекса.
                </p>
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
                    Отражается сумма уплаченного за пределами РК налога на доходы, аналогичного ИПН, с доходов, полученных физическим лицом-резидентом из источников за пределами РК, подлежат зачету в счет уплаты ИПН в РК<br>
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
                    ! Вводится в действие с 01.01.2025 года в соответствии с Законом РК от 25.12.2017 № 121-VI<br>
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
                    * Заполняется в случае наличия:<br>
                    Суммы убытков КИК или ПУ КИК, возникающих в двух периодах, последовательно предшествующих отчетному периоду; суммы уменьшений в иностранной валюте; суммы уменьшений в иностранной валюте в соответствии с подпунктом 1) пункта 3 статьи 340 НК; суммы уменьшений в иностранной валюте в соответствии с подпунктом 2) пункта 3 статьи 340 НК; суммы уменьшений в иностранной валюте в соответствии с подпунктом 3) пункта 3 статьи 340 НК; суммы уменьшений в иностранной  валюте в соответствии с подпунктом 4) пункта 3 статьи 340 НК; суммы уменьшений в иностранной  валюте в соответствии с подпунктом 5) пункта 3 статьи 340 НК; суммы уменьшений в иностранной  валюте в соответствии с подпунктом 6) пункта 3 статьи 340 НК; суммы уменьшений в иностранной валюте в соответствии с подпунктом 7) пункта 3 статьи 340 НК; суммы уменьшений в иностранной  валюте в соответствии с подпунктом 8) пункта               3 статьи 340 НК; суммы уменьшений в иностранной валюте в соответствии с подпунктом 9) пункта 3 статьи  340 НК; суммы уменьшений в иностранной валюте в соответствии с подпунктом 10) пункта 3 статьи 340 Налогового кодекса; Финансовой прибыли, с учетом уменьшений и убытков КИК или ПУ КИК в иностранной валюте; финансовой прибыли, подлежащей налогообложению в иностранной валюте; Финансовой прибыли, подлежащей налогообложению в национальной валюте; суммы иностранного налога на прибыль по финансовой отчетности в иностранной валюте; суммы уплаченного иностранного налога на прибыль в иностранной валюте; суммы иностранного налога на прибыль, подлежащей отнесению в зачет, в национальной валюте; суммарная прибыль КИК и ПУ КИК; суммы облагаемого дохода КИК и ПУ КИК за исключением зарегистрированных в государствах с льготным налогообложением; суммы облагаемого дохода КИК и ПУ КИК, зарегистрированных в государствах с льготным налогообложением; Зачет иностранного налога с финансовой прибыли КИК или ПУ КИК.
                </p>
                </div>
                <button type="button" class="btn btnCustom5" onclick="location.href='{{ route('info') }}#sectionO';">Читать полностью</button>
            </div>
             <div class="popupCheck" id="popupCheck" style="display: none;">
                <div style="text-align: center;">
                    <p style="color:#2C2567; font-size:22px; font-weight:400">Тестирование завершено!</p>
                    <img id="blocksImg" src="{{ asset('img/errorIcon.svg') }}" alt="">
                    <p id="blocksHeader" style="color:#2C2567; font-size:18px; font-weight:400; margin-top: 25px; margin-bottom: 0;">Вы допустили ошибки в разделах:</p>
                    <p className='element' id="blocks" style="color:#e84a4a; font-size:18px; font-weight:400; margin-bottom:25px"></p>
                    <button type="button" class="btn btnCustom7" onclick="location.href='{{ route('training') }}';">Выйти</button>
                    <button type="button" class="btn btnCustom6" onclick="closeInfoPopupCheck()">Исправить</button>
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
          var infoPopup = document.getElementById("popupCheck");
          var popupMask = document.getElementById("popupMask");
          infoPopup.style.display = "none";
          popupMask.style.display = "none";
    }
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
            let discplus =  @json($disc['disc_plus']);
            let id =  @json($id);
            document.getElementById('caseDisc').innerHTML = disc;
            document.getElementById('caseDiscPlus').innerHTML = discplus;
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
            let blocks =  @json($blocks);
            console.log(mistakes);
            showInfoPopupCheck();
            console.log(blocks);
            document.getElementById('blocks').innerHTML = blocks;
            if(mistakes.length == 0){
            document.getElementById('blocksHeader').innerHTML = "Вы ответили правильно на 100%";
            document.getElementById("blocksImg").src = "{{ asset('img/sucessIcon.svg') }}";
            }
            for (let i=0; mistakes.length; i++) {
              document.getElementById(mistakes[i]).style = "background-color: #ffcfcf";

              if(mistakes[i] == 'iin' || mistakes[i] == 'period' || mistakes[i] == 'surname' || mistakes[i] == 'name' || mistakes[i] == 'patronymic' || mistakes[i] == 'email' || mistakes[i] == 'phonename' || mistakes[i] == 'declarationtype' ){
              document.getElementById("imgA").src = "{{ asset('img/errorDot.svg') }}";
              }

              if(mistakes[i] == 'b_1'){
              document.getElementById("table_b_1").className = "error";
              document.getElementById("table_b_1_error").src = "{{ asset('img/errorIcon2.svg') }}";
              document.getElementById("imgB").src = "{{ asset('img/errorDot.svg') }}";
              }if(mistakes[i] == 'b_2'){
              document.getElementById("table_b_2").className = "error";
              document.getElementById("table_b_2_error").src = "{{ asset('img/errorIcon2.svg') }}";
              document.getElementById("imgB").src = "{{ asset('img/errorDot.svg') }}";
              }if(mistakes[i] == 'b_2a'){
              document.getElementById("table_b_2a").className = "error";
              document.getElementById("table_b_2a_error").src = "{{ asset('img/errorIcon2.svg') }}";
              document.getElementById("imgB").src = "{{ asset('img/errorDot.svg') }}";
              }if(mistakes[i] == 'b_2b'){
              document.getElementById("table_b_2b").className = "error";
              document.getElementById("table_b_2b_error").src = "{{ asset('img/errorIcon2.svg') }}";
              document.getElementById("imgB").src = "{{ asset('img/errorDot.svg') }}";
              }if(mistakes[i] == 'b_2c'){
              document.getElementById("table_b_2c").className = "error";
              document.getElementById("table_b_2c_error").src = "{{ asset('img/errorIcon2.svg') }}";
              document.getElementById("imgB").src = "{{ asset('img/errorDot.svg') }}";
              }if(mistakes[i] == 'b_2d'){
              document.getElementById("table_b_2d").className = "error";
              document.getElementById("table_b_2d_error").src = "{{ asset('img/errorIcon2.svg') }}";
              document.getElementById("imgB").src = "{{ asset('img/errorDot.svg') }}";
              }

              if(mistakes[i] == 'c_1'){
              document.getElementById("imgC").src = "{{ asset('img/errorDot.svg') }}";
              }
              if(mistakes[i] == 'd_1'){
              document.getElementById("imgD").src = "{{ asset('img/errorDot.svg') }}";
              }

              if(mistakes[i] == 'e_1'){
              document.getElementById("table_e_1").className = "error";
              document.getElementById("table_e_1_error").src = "{{ asset('img/errorIcon2.svg') }}";
              document.getElementById("imgE").src = "{{ asset('img/errorDot.svg') }}";
              }if(mistakes[i] == 'e_1a'){
              document.getElementById("table_e_1a").className = "error";
              document.getElementById("table_e_1a_error").src = "{{ asset('img/errorIcon2.svg') }}";
              document.getElementById("imgE").src = "{{ asset('img/errorDot.svg') }}";
              }if(mistakes[i] == 'e_1b'){
              document.getElementById("table_e_1b").className = "error";
              document.getElementById("table_e_1b_error").src = "{{ asset('img/errorIcon2.svg') }}";
              document.getElementById("imgE").src = "{{ asset('img/errorDot.svg') }}";
              }if(mistakes[i] == 'e_1c'){
              document.getElementById("table_e_1c").className = "error";
              document.getElementById("table_e_1c_error").src = "{{ asset('img/errorIcon2.svg') }}";
              document.getElementById("imgE").src = "{{ asset('img/errorDot.svg') }}";
              }if(mistakes[i] == 'e_1d'){
              document.getElementById("table_e_1d").className = "error";
              document.getElementById("table_e_1d_error").src = "{{ asset('img/errorIcon2.svg') }}";
              document.getElementById("imgE").src = "{{ asset('img/errorDot.svg') }}";
              }if(mistakes[i] == 'e_2'){
              document.getElementById("table_e_2").className = "error";
              document.getElementById("table_e_2_error").src = "{{ asset('img/errorIcon2.svg') }}";
              document.getElementById("imgE").src = "{{ asset('img/errorDot.svg') }}";
              }if(mistakes[i] == 'e_3'){
              document.getElementById("table_e_3").className = "error";
              document.getElementById("table_e_3_error").src = "{{ asset('img/errorIcon2.svg') }}";
              document.getElementById("imgE").src = "{{ asset('img/errorDot.svg') }}";
              }if(mistakes[i] == 'e_4'){
              document.getElementById("table_e_4").className = "error";
              document.getElementById("table_e_4_error").src = "{{ asset('img/errorIcon2.svg') }}";
              document.getElementById("imgE").src = "{{ asset('img/errorDot.svg') }}";
              }

              if(mistakes[i] == 'f_1a'){
              document.getElementById("table_f_1").className = "error";
              document.getElementById("table_f_1_error").src = "{{ asset('img/errorIcon2.svg') }}";
              document.getElementById("imgF").src = "{{ asset('img/errorDot.svg') }}";
              }if(mistakes[i] == 'f_2a'){
              document.getElementById("table_f_2").className = "error";
              document.getElementById("table_f_2_error").src = "{{ asset('img/errorIcon2.svg') }}";
              document.getElementById("imgF").src = "{{ asset('img/errorDot.svg') }}";

              }if(mistakes[i] == 'f_1f'){
              document.getElementById("table_f_1f").className = "error";
              document.getElementById("table_f_1g").className = "error";
              document.getElementById("table_f_1h").className = "error";
              document.getElementById("table_f_1_img").style = "background-color: #ffcfcf";
              document.getElementById("table_f_1_error").src = "{{ asset('img/errorIcon2.svg') }}";
              document.getElementById("imgF").src = "{{ asset('img/errorDot.svg') }}";
              }if(mistakes[i] == 'f_2f'){
              document.getElementById("table_f_2f").className = "error";
              document.getElementById("table_f_2g").className = "error";
              document.getElementById("table_f_2h").className = "error";
              document.getElementById("table_f_2_img").style = "background-color: #ffcfcf";
              document.getElementById("table_f_2_error").src = "{{ asset('img/errorIcon2.svg') }}";
              document.getElementById("imgF").src = "{{ asset('img/errorDot.svg') }}";
              }if(mistakes[i] == 'f_3f'){
              document.getElementById("table_f_3f").className = "error";
              document.getElementById("table_f_3g").className = "error";
              document.getElementById("table_f_3h").className = "error";
              document.getElementById("table_f_3_img").style = "background-color: #ffcfcf";
              document.getElementById("table_f_3_error").src = "{{ asset('img/errorIcon2.svg') }}";
              document.getElementById("imgF").src = "{{ asset('img/errorDot.svg') }}";
              }if(mistakes[i] == 'f_4f'){
              document.getElementById("table_f_4f").className = "error";
              document.getElementById("table_f_4g").className = "error";
              document.getElementById("table_f_4h").className = "error";
              document.getElementById("table_f_4_img").style = "background-color: #ffcfcf";
              document.getElementById("table_f_4_error").src = "{{ asset('img/errorIcon2.svg') }}";
              document.getElementById("imgF").src = "{{ asset('img/errorDot.svg') }}";
              }if(mistakes[i] == 'f_5f'){
              document.getElementById("table_f_5f").className = "error";
              document.getElementById("table_f_5g").className = "error";
              document.getElementById("table_f_5h").className = "error";
              document.getElementById("table_f_5_img").style = "background-color: #ffcfcf";
              document.getElementById("table_f_5_error").src = "{{ asset('img/errorIcon2.svg') }}";
              document.getElementById("imgF").src = "{{ asset('img/errorDot.svg') }}";
              }

              if(mistakes[i] == 'g_1a'){
              document.getElementById("table_g_1").className = "error";
              document.getElementById("table_g_1_error").src = "{{ asset('img/errorIcon2.svg') }}";
              document.getElementById("imgG").src = "{{ asset('img/errorDot.svg') }}";
              }

              if(mistakes[i] == 'h_1a'){
              document.getElementById("table_h_1").className = "error";
              document.getElementById("table_h_1_error").src = "{{ asset('img/errorIcon2.svg') }}";
              document.getElementById("imgH").src = "{{ asset('img/errorDot.svg') }}";
              }

              if(mistakes[i] == 'i_1a'){
              document.getElementById("table_i_1").className = "error";
              document.getElementById("table_i_1_error").src = "{{ asset('img/errorIcon2.svg') }}";
              document.getElementById("imgI").src = "{{ asset('img/errorDot.svg') }}";
              } if(mistakes[i] == 'i_2a'){
              document.getElementById("table_i_2").className = "error";
              document.getElementById("table_i_2_error").src = "{{ asset('img/errorIcon2.svg') }}";
              document.getElementById("imgI").src = "{{ asset('img/errorDot.svg') }}";
              }

              if(mistakes[i] == 'j_1a'){
              document.getElementById("table_j_1").className = "error";
              document.getElementById("table_j_1_error").src = "{{ asset('img/errorIcon2.svg') }}";
              document.getElementById("imgJ").src = "{{ asset('img/errorDot.svg') }}";
              }

              if(mistakes[i] == 'n_b1'){
              document.getElementById("table_n_1_name").className = "error";
              document.getElementById("table_n_b1").className = "error";
              document.getElementById("table_n_c1").className = "error";
              document.getElementById("imgN").src = "{{ asset('img/errorDot.svg') }}";
              }if(mistakes[i] == 'n_b2'){
              document.getElementById("table_n_2_name").className = "error";
              document.getElementById("table_n_b2").className = "error";
              document.getElementById("table_n_c2").className = "error";
              document.getElementById("imgN").src = "{{ asset('img/errorDot.svg') }}";
              }if(mistakes[i] == 'n_b3'){
              document.getElementById("table_n_3_name").className = "error";
              document.getElementById("table_n_b3").className = "error";
              document.getElementById("table_n_c3").className = "error";
              document.getElementById("imgN").src = "{{ asset('img/errorDot.svg') }}";
              }if(mistakes[i] == 'n_b4'){
              document.getElementById("table_n_4_name").className = "error";
              document.getElementById("table_n_b4").className = "error";
              document.getElementById("table_n_c4").className = "error";
              document.getElementById("imgN").src = "{{ asset('img/errorDot.svg') }}";
              }if(mistakes[i] == 'n_b5'){
              document.getElementById("table_n_5_name").className = "error";
              document.getElementById("table_n_b5").className = "error";
              document.getElementById("table_n_c5").className = "error";
              document.getElementById("imgN").src = "{{ asset('img/errorDot.svg') }}";
              }if(mistakes[i] == 'n_b6'){
              document.getElementById("table_n_6_name").className = "error";
              document.getElementById("table_n_b6").className = "error";
              document.getElementById("table_n_c6").className = "error";
              document.getElementById("imgN").src = "{{ asset('img/errorDot.svg') }}";
              }if(mistakes[i] == 'n_b7'){
              document.getElementById("table_n_7_name").className = "error";
              document.getElementById("table_n_b7").className = "error";
              document.getElementById("table_n_c7").className = "error";
              document.getElementById("imgN").src = "{{ asset('img/errorDot.svg') }}";
              }if(mistakes[i] == 'n_b8'){
              document.getElementById("table_n_8_name").className = "error";
              document.getElementById("table_n_b8").className = "error";
              document.getElementById("table_n_c8").className = "error";
              document.getElementById("imgN").src = "{{ asset('img/errorDot.svg') }}";
              }if(mistakes[i] == 'n_b9'){
              document.getElementById("table_n_9_name").className = "error";
              document.getElementById("table_n_b9").className = "error";
              document.getElementById("table_n_c9").className = "error";
              document.getElementById("imgN").src = "{{ asset('img/errorDot.svg') }}";
              }if(mistakes[i] == 'n_b10'){
              document.getElementById("table_n_10_name").className = "error";
              document.getElementById("table_n_b10").className = "error";
              document.getElementById("table_n_c10").className = "error";
              document.getElementById("imgN").src = "{{ asset('img/errorDot.svg') }}";
              }if(mistakes[i] == 'n_b11'){
              document.getElementById("table_n_11_name").className = "error";
              document.getElementById("table_n_b11").className = "error";
              document.getElementById("table_n_c11").className = "error";
              document.getElementById("imgN").src = "{{ asset('img/errorDot.svg') }}";
              }if(mistakes[i] == 'n_b12'){
              document.getElementById("table_n_12_name").className = "error";
              document.getElementById("table_n_b12").className = "error";
              document.getElementById("table_n_c12").className = "error";
              document.getElementById("imgN").src = "{{ asset('img/errorDot.svg') }}";
              }

            }

        @endif
    </script>
</body>
</html>

