<nav>
    <ul>
        <li>
            <a href="<?=$_SERVER['PHP_SELF'];?>">Главная</a>
        </li>
        <li>
            <a href="<?=$_SERVER['PHP_SELF'];?>?controller=PageController&method=about">Обо мне</a>
        </li>
        <li>
            <a href="<?=$_SERVER['PHP_SELF'];?>?controller=PageController&method=contact">Контакты</a>
        </li>
        <li>
            <a href="<?=$_SERVER['PHP_SELF'];?>?controller=AvatarController&method=form">Аватар</a>
        </li>
        <li>
            <a href="<?=$_SERVER['PHP_SELF'];?>?controller=MailController&method=show">Форма</a>
        </li>
    </ul>
</nav>
<?php
