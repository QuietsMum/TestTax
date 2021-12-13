$traning

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
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-custom">
        <div class="container-fluid">
            <div class="row" style="width:100%">
                <div class="col-sm-2">
                <img class="navbar-brand" src="img/logo.svg" style="width:60%" alt="">
                </div>
                <div class="col-sm-8" style="text-align:center; margin-top:1%">
                <p style="font-size:22px; font-weight:400; color:#fff">Тренажер по составлению декларации о доходах и имуществе физического лица (ФНО 270.00)</p>
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
    <div class="mainBg" style="height: 1000px;">
        <div class="whiteBox">
            <h1 style="color:#160B50; font-size:24px; font-weight:700;">Добро пожаловать!</h1>
            <div class="goldBorder">
                <p style="color:#282781; font-size:15px; font-weight:700; margin-bottom: 0rem;">Выберите один кейс, по которому пройдет тренинг.</p>
                <p style="color:#282781; font-size:15px; font-weight:700; margin-bottom: 0rem;">Используйте подсказки при заполнении полей. После заполнения у вас будет возможность проверить свои результаты.</p>
            </div>
            <div class="selectCase" id="selectCaseBtn">
                <p id="selectCaseText" style="color:#939DA8; font-size:15px; font-weight:700; margin-bottom: 0rem; text-align:left">Выберите один кейс <img id="selectCaseIcon" src="img/dropdownIcon.svg" alt="" style="float:right; margin-top:10px"></p>
            </div>
            <div class="selectCaseOpen close" id="selectCaseMenu">
                <div class="container" style="text-align:left">
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="cases" value="1" id="case1">
                            <label class="form-check-label" for="case1">
                                Кейс 1
                            </label>
                            </div>
                            <div class="form-check" style="margin-top:12px">
                            <input class="form-check-input"  type="radio" name="cases" value="2" id="case2">
                            <label class="form-check-label" for="case2">
                                Кейс 2
                            </label>
                            </div>
                            <div class="form-check" style="margin-top:12px">
                            <input class="form-check-input"  type="radio" name="cases" value="3" id="case3">
                            <label class="form-check-label" for="case3">
                                Кейс 3
                            </label>
                            </div>
                            <div class="form-check" style="margin-top:12px">
                            <input class="form-check-input"  type="radio" name="cases" value="4" id="case4">
                            <label class="form-check-label" for="case4">
                                Кейс 4
                            </label>
                            </div>
                            <div class="form-check" style="margin-top:12px">
                            <input class="form-check-input"  type="radio" name="cases" value="5" id="case5">
                            <label class="form-check-label" for="case5">
                                Кейс 5
                            </label>
                            </div>
                        </div>
                        <div class="col-sm">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="cases" value="6" id="case6">
                            <label class="form-check-label" for="case6">
                                Кейс 6
                            </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a  href="javascript:showfunction()" id="showlink" class="btn btnCustom2">Приступить</a>
        </div>
    </div>
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-1">
                    <img src="img/madeby.svg" alt="">
                </div>
                <div class="col-sm-3">
                    <p style="font-size:22px; font-weight:700; text-decoration: underline; color:#D2AB67; margin-top:6%">#ВМЕСТЕКРАЗВИТИЮ</p>
                </div>
                <div class="col-sm-8">
                    <a href="{{ route('admin') }}" class="btn btnCustom"><img src="img/supportIcon.svg" alt=""> Тех. поддержка</a>
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
            $("#selectCaseIcon").attr("src","img/dropdownIconUp.svg");
            $("#selectCaseText").css('color', '#5D6065');
        }
        else if ($("#selectCaseMenu" ).hasClass( "close" )){
            $("#selectCaseIcon").attr("src","img/dropdownIcon.svg");
            $("#selectCaseText").css('color', '#939DA8');
        }
    });
    </script>
    <script>
        function showfunction(){
           var id = document.querySelector('input[name = "cases"]:checked').value;
           var url = '{{route("training_show",":id")}}';
           url=url.replace(':id',id);
           document.location.href=url;
        }
    </script>
</body>
</html>

