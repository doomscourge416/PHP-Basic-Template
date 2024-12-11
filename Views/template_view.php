<!DOCTYPE html>
<html lang="ru">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Компания Компаний</title>
    </head>

    <body>
        <!-- Меню перехода по прямым ссылкам (Отображения + Темплейт) -->
        <header>       
            <nav>
                <a href="/">Главная</a>
                <a href="/about">О нас</a>
                <a href="/contacts">Контакты</a>
            </nav>
        </header>

        <main>
        <?php include $content_view; ?>
        </main>

    </body>
</html>