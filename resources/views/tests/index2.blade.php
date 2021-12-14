<!doctype html>
<html lang="en" style="height: 100%;">
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
<body style="height:100%;">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-custom" style="position: sticky;">
        <div class="container-fluid">
            <div class="row" style="width:100%">
                <div class="col-sm-2">
                <img class="navbar-brand small1" src="{{ asset('img/logo.svg') }}" style="width:60%" alt="">
                </div>
                <div class="col-sm-8" style="text-align:center; margin-top:1%">
                <p style="font-size:24px; font-weight:700; color:#fff;">Тестирование по составлению декларации о доходах и имуществе физического лица (ФНО 270.00)</p>
                </div>
                <div class="col-sm-2" style="text-align:right; margin-top:1%; font-size:18px; font-weight:400">
                    <a class="dropdown-toggle"href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Русский
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#" style="font-size:18px; font-weight:400">Казахский</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="mainBg h-100">
    <div class="container-fluid h-100">
       <div class="row h-100">
           <div class="col-sm-5 leftBox">
                <p style="font-size: 29px; font-weight: 700; color:#fff; margin-top: 90px;">Добро пожаловать на тестирование по составлению декларации о доходах и имуществе
                    физического лица</p>
                <form style="margin-top: 50px;">
                    <div class="form-group">
                        <input type="text" class="form-control"  placeholder="Код">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control"  placeholder="ИИН">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control"  placeholder="Фамилия Имя Отчество">
                    </div>
                    <div class="form-group">
                        <select class="form-control formPlaceholderStyle" id="departmentSelect">
                            <option selected disabled>Подразделение</option>
                        </select>
                      </div>
                </form>
                <div style="text-align: center;">
                    <button type="button" class="btn btnCustom8" onclick="location.href='{{ route('test_show', rand(1,6)) }}';">Начать тест</button>
                </div>
           </div>
           <div class="col-sm-7 rightBox">
                <div style="text-align: center;">
                    <p style="font-size: 24px; font-weight: 700; color:#2C2567; margin-top: 90px;">Ознакомьтесь с правилами </br>и рекомендациями</p>
                </div>
                <div class="whiteBox4">
                    <ul>
                        <li>У вас есть 20 минут на выполнение теста;</li>
                        <li>не закрывайте, не обновляйте и не покидайте страницу до завершения теста;</li>
                        <li>убедитесь, что время и дата тестирования наступили;</li>
                        <li>проверяйте правильность введенных вами данных;</li>
                        <li>внимательно прочитайте условия перед заполнением декларации;</li>
                        <li>рекомендуем пройти пробное тестирование на нашем тренажере</li>
                    </ul>
                </div>
                <p style="font-size: 24px; font-weight: 700; color:#2C2567; text-align: center; margin-top: 50px; margin-bottom: 80px;">Удачного тестирования!</p>

           </div>
       </div>
    </div>
    </div>
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-1">
                    <img src="{{ asset('img/madeby.svg') }}" alt="">
                </div>
                <div class="col-sm-3">
                    <p class="small" style="font-size:22px; font-weight:700; text-decoration: underline; color:#D2AB67; margin-top:6%">#ВМЕСТЕКРАЗВИТИЮ</p>
                </div>
                <div class="col-sm-8">
                    <a href="{{ route('admin') }}" class="btn btnCustom"><img src="{{ asset('img/supportIcon.svg') }}" alt=""> Тех. поддержка</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
    $("#selectCaseBtn").click(function(){
        $("#selectCaseMenu").toggleClass("open close");

        if ($("#selectCaseMenu" ).hasClass( "open" )){
            $("#selectCaseIcon").attr("src","{{ asset('img/dropdownIconUp.svg') }}");
            $("#selectCaseText").css('color', '#5D6065');
        }
        else if ($("#selectCaseMenu" ).hasClass( "close" )){
            $("#selectCaseIcon").attr("src","{{ asset('img/dropdownIcon.svg') }}");
            $("#selectCaseText").css('color', '#939DA8');
        }
    });

    </script>
</body>
</html>

