<?php

namespace App\Views\Forms;

class Input
{
    /**
     * Построить элемент формы input
     * --------------------------------------------------------------------
     * @param $label - Метка для инпута
     * @param $type -  тип нипута
     * @param $name - название для инпута
     * @param $attr - массив атрибутов для тега инпут
     * @param $val - значение инпута
     * @param $err - список ошибок
     * @return void
     */
    static public function render($label, $type, $name, $attr, $val, $err)
    {
?>

        <div class="col-auto">
            <label for="<?=$name?>" class="visually-hidden"><?=$label?></label>
            <input type="<?=$type?>" name="<?=$name?>" class="form-control" id="<?=$name?>"

                   <?php
                   foreach ($attr as $key => $value ) {
                       echo $key .'="' . $value . '"';
                   }
                   ?>

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