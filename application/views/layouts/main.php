<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/myMVC/css/bootstrap.min.css">
    <link rel="stylesheet" href="/myMVC/css/style.css">
    <script type="text/javascript" src="/myMVC/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="/myMVC/js/bootstrap.min.js"></script>
    <title>Главная</title>
</head>
<body>
<header>
    <div class="navbar navbar-default navbar-static-top">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav">
                <li>
                    <a href="http://localhost/myMVC/main/index">Главная</a>
                </li>
                <li>
                    <a href="http://localhost/myMVC/main/add">Добаление</a>
                </li>
            </ul>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <?php include 'application/views/'.$contentView; ?>
        </div>
    </div>
</div>
</body>
</html>