<html>
    <head>
        <title>SPA - авторизация</title>
        <link rel="stylesheet" href='/styles/login.css'>
        <meta charset="utf-8">
    </head>
    <body>
        <div class="header">
        </div>
        <div class="container"> 
			<div class="login">
                <form class="form" action="/sripts/general.php" method="POST">
                    <h3>Авторизация</h3>
                    <p>Логин</p>
                    <input type="text" name="login">
                    <p>Пароль</p>
                    <input type="password" name="password">             
                    <button type="submit" value="Отправить">Войти</button>
                </form>
			</div>
        </div>
        <div class="footer">
            <p>©Ваша красота 2000-2023. Все права защищены</p>
        </div>
</html>