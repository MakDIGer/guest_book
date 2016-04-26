<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Гостевая книга" />
    <meta name="keywords" content="Книга, гостева, PHP, ООП, учебный проект" />
    <title>ГОСТЕВАЯ КНИГА</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="wrapper">
        <header id="main_header">
            <h1>Гостевая книга</h1>
            <h2>ОСТАВЬ СВОЙ ОТЗЫВ!</h2>
        </header>
        <nav id="main_nav">
            <ul>
                <li><a href="#">О ПРОЕКТЕ</a></li>
                <li><a href="#">ГЛАВНАЯ</a></li>
            </ul>
        </nav>
        <section id="main_section">
            <article>
                <header>
                    <h3><a href="#">Заголовок первой записи</a></h3>
                </header>
                <p>Тестовый тест, проверка, и ещё раз проверка номер два. Тестовый тест, проверка, и ещё раз проверка номер два. Тестовый тест, проверка, и ещё раз проверка номер два. Тестовый тест, проверка, и ещё раз проверка номер два. Тестовый тест, проверка, и ещё раз проверка номер два. Тестовый тест, проверка, и ещё раз проверка номер два. Тестовый тест, проверка, и ещё раз проверка номер два. Тестовый тест, проверка, и ещё раз проверка номер два. ...</p>
                <footer>
                    <time datetime="2016-04-24"><em>Опубликовал <a href="email:admin@obj.kgdnet.ru">admin</a> 2016-04-24 18:45</em></time>
                    </footer>
            </article>
            <article>
                <header>
                    <h3><a href="#">Заголовок второй записи</a></h3>
                </header>
                <p>Тестовый тест, проверка, и ещё раз проверка номер два. Тестовый тест, проверка, и ещё раз проверка номер два. Тестовый тест, проверка, и ещё раз проверка номер два. Тестовый тест, проверка, и ещё раз проверка номер два. Тестовый тест, проверка, и ещё раз проверка номер два. Тестовый тест, проверка, и ещё раз проверка номер два. Тестовый тест, проверка, и ещё раз проверка номер два. Тестовый тест, проверка, и ещё раз проверка номер два. ...</p>
                <footer>
                    <time datetime="2016-04-24"><em>Опубликовал <a href="email:admin@obj.kgdnet.ru">admin</a> 2016-04-24 18:30</em></time>
                </footer>
            </article>                
        </section>
        <section id="otziv">
            <form method="POST" action="index.php">
                <fieldset>
                    <legend>Оставить свой отзыв:</legend>
                    <div id="bigbox">
                    <div id="box1">
                        <p><label>Заголовок записи:</label></p>
                        <p><label>Ник:</label></p>
                        <p><label>Почта:</label></p>
                    </div>
                    <div id="box2">
                        <p><input type="text" name="title" maxlength="128" size="45"></p>
                        <p><input type="text" name="nickname" maxlength="64" size="45"></p>
                        <p><input type="email" name="email" size="45" maxlength="128"></p>
                    </div>
                    </div>
                    <textarea name="text" cols="80" rows="10" maxlength="800" placeholder="Оставить отзыв тут."></textarea>
                </fieldset>
                <p><input type="submit" value="Отправить"><input type="reset" value="Очистить"></p>
            </form>
        </section>
        <footer id="main_footer">
            &copy; 2016 Все права защищены. Гостевая книга.
        </footer>
    </div>
</body>
</html>