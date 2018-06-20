<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FoxMC - Консоль</title>
	<link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./assets/bootstrap.css">
    <link rel="stylesheet" href="./assets/site.css">
    <link rel="stylesheet" href="./assets/styles.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://bootswatch.com/_vendor/jquery/dist/jquery.min.js"></script>
    <script src="https://bootswatch.com/_vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./assets/jquery.countdown.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-inverse bg-inverse navbar-toggleable-md">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/"><span class="logo">Fox</span><strong>MC</strong></a>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item"><a href="/" class="nav-link"><i class="fa fa-home"></i> Главная</a></li>
				  <li class="nav-item"><a href="rules.php" class="nav-link"><i class="fa fa-pencil"></i> Правила</a></li>
				  <li class="nav-item"><a href="buy.php" class="nav-link"><i class="fa fa-money"></i> Как купить донат?</a></li>
				  <li class="nav-item"><a href="donate.php" class="nav-link"><i class="fa fa-database"></i> Описание привилегий</a></li>
				  <li class="nav-item"><a href="console.php" class="nav-link"><i class="fa fa-server"></i> Консоль</a></li>
				  <li class="nav-item"><a href="https://vk.me/fox_m_c" class="nav-link"><i class="fa fa-send"></i> Контакты</a></li>
                </ul>
<span class="navbar-text">
                <span class="wobble badge badge-danger">Онлайн: 2501/5000</span> <span class="badge badge-primary" onclick="prompt(&#39;Скопируйте наш IP адрес и вставьте в ваш клиент:&#39;,&#39;FoxMC.Ru:25565&#39;); return false;">IP: FoxMC.Ru</span>
                </span>
            </div>
        </div>
    </nav>
    <div class="container" >
        <div class="row">
	<div class="col-12">
		
	</div>
</div>
        <div class="row">
        <div class="card col-md-12" style="float: none; margin: 0 auto;">
            <div class="card-body">
				<center>
					<a href="/"  class="btn btn-success">Приобрести привилегию</a>
					<h1>1. Введи ник и выбери привилегию</h1>
					<p>которую хочешь купить, а затем <strong>нажми на кнопку</strong></p>
					<img src="assets/покупка/1.png" tppabs="http://FoxMC.ru/assets" class="img-fluid">
					<hr />
					<h1>2. Выбери нужный способ оплаты</h1>
					<p>QIWI, WebMoney, Яндекс.Деньги, все на твой выбор</p>
					<img src="assets/покупка/2.png" tppabs="http://FoxMC.ru/styles/how/2.png" class="img-fluid">
					<hr />
					<h1>3. Введи свой номер телефона</h1>
					<p>или лицевого счета, все зависит от выбранного способа оплаты</p>
					<img src="assets/покупка/3.png" tppabs="http://FoxMC.ru/styles/how/3.png" class="img-fluid">
					<hr />
					<h1>4. Перейди к оплате</h1>
					<p>но для начала введи пароль от сервиса оплаты (если требуется)</p>
					<img src="assets/покупка/4.png" tppabs="http://FoxMC.ru/styles/how/4.png" class="img-fluid">
					<hr />
					<h1>5. Успешно!</h1>
					вы будете перенаправлены на сайт платежной системы<br />
					теперь достаточно зайти на сервер под своим ником и наслаждаться игрой с привилегией!<br />
					<img src="assets/покупка/5.png" tppabs="http://FoxMC.ru/styles/how/5.png" class="img-fluid">
					<hr />
					<h1>Возникли проблемы?</h1>
					<p>Ты всегда можешь обратиться в нашу службу поддержки!</p>
					<a href="https://vk.me/Fox_M_C" class="btn btn-warning">Обратиться в техническую поддержку</a>
				</center>
            </div>
        </div>
    </div>
    </div>
<script>
    $(".spoiler-trigger").click(function() {
        $(this).parent().next().collapse('toggle');
    });
    var date = new Date();
    var day = date.getDate() + 1;
    var month = date.getMonth() + 1;
    if(day >= 32) { day = day - 1 }
    $(".row").countdown("2018/5/29", function(event) {
        $('.one').text(event.strftime('%D'));
        $('.second').text(event.strftime('%H'));
        $('.third').text(event.strftime('%M'));
        $('.four').text(event.strftime('%S'));
    });
</script>
</body>

</html>
