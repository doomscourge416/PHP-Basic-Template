<h1>Добро Пожаловать!</h1>
<p>
    <img src="/images/office-small.jpg"> <a href="/"></br>Название компании</a>
</p>

<form style="border-style: solid;" method="post">
    <p>POST - запрос</p>
    <p style="margin-left:50px">Ваш логин: <input type="text" name="login" /></p>
    <p style="margin-left:50px">Пароль: <input type="text" name="password"></p>
    <p style="margin-left:50px">Отправить  <input type="submit"></p>
</form>


<!-- <form method="GET" style="border-style: solid;"> -->
<form method="post" style="border-style: solid;">
    <p>GET - запрос</p>
    <!-- <p>Ваш логин: <input type="text" name="userForm"[login]"></p>
    <p>Пароль: <input type="text" name="userForm"[password]"></p> -->
    <p>Ваш логин: <input type="text" name="login"></p>
    <p>Пароль: <input type="text" name="password"></p>
    <input type="checkbox" name="test[]" value="1">
    <input type="checkbox" name="test[]" value="2">
    <input type="checkbox" name="test[]" value="3">
    <input type="submit" />
</form>

<a href="?about.php">Test keys - 1</a>
</br>
<a href="about">Test keys - 2</a>
</br>
<a href="?">Null keys</a>