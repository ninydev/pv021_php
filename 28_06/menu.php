<html>
<body>

<header>
    <nav>
        <ul>
            <li><a href="<?=$_SERVER['PHP_SELF']?>?page=1"> Page 1</a> </li>
            <li><a href="<?=$_SERVER['PHP_SELF']?>?page=2"> Page 2</a> </li>
            <li><a href="<?=$_SERVER['PHP_SELF']?>?page=3"> Pagr 3</a> </li>
        </ul>
    </nav>
</header>

<main>
    <?php
        $page = 'null';
        if(isset($_GET['page'])) $page =  $_GET['page'];
        switch ($page) {
            case '1':
                echo '<h1> Page 1 </h1>';
                break;
            case '2':
                echo '<h1> Page 2 </h1>';
                break;
            case '3':
                echo '<h1> Page 3 </h1>';
                break;
            default:
                echo '<h1> Not Found</h1>';
                break;
        }
    ?>
</main>


<footer>
    &copy 2022 IT Step
</footer>


</body>
</html>

<?php
