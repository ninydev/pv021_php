<html>
<body>
<?php
require_once ('layout/header.php');
?>

<main>
    <?php
        $page = 'null';
        $pageTitle = "MyPageTitle";
        if(isset($_GET['page'])) $page =  $_GET['page'];
        include ('pages/' . $page . '.php');
//        switch ($page) {
//            case '1':
//                echo '<h1> Page 1 </h1>';
//                break;
//            case '2':
//                echo '<h1> Page 2 </h1>';
//                break;
//            case '3':
//                echo '<h1> Page 3 </h1>';
//                break;
//            default:
//                echo '<h1> Not Found</h1>';
//                break;
//        }
    ?>
</main>

<?php
include ('layout/footer.php');
?>
</body>
</html>

<?php
