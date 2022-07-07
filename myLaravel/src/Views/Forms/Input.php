<?php

namespace App\Views\Forms;

class Input
{
    static public function input($label, $type, $name, $val, $err)
    {
?>

        <div class="col-auto">
            <label for="<?=$name?>" class="visually-hidden"><?=$label?></label>
            <input type="<?=$type?>" name="<?=$name?>" class="form-control" id="<?=$name?>"
                   value="<?php
                   if (!is_null($val))
                       echo $val;
                   ?>">
            <?php
            if (!is_null($err)){
                echo '<div  class="alert alert-danger" role="alert">';

                foreach ($err as $key => $value ) {
                    echo "<p> $key => $value </p>";
                }
                echo "</div>";
            }
            ?>
        </div>

<?php

    }
}