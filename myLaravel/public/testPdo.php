<pre>
<?php

print_r(PDO::getAvailableDrivers());


try {
    $dbh = new PDO('mysql:host=localhost;dbname=pu021', 'pv021', 'Qwerty123');
    foreach($dbh->query('SELECT * from users') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>
    </pre>
