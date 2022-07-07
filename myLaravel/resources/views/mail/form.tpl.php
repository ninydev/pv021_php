 <form class="row g-3"
          action="<?=$_SERVER['PHP_SELF'];?>?controller=MailController&method=send"
          method="post">
        <div class="col-auto">
            <label for="email" class="visually-hidden">Email</label>
            <input type="text" name="Email" class="form-control" id="email"
                   value="<?php
                   if (isset($varBug['formData']['Email']))
                       echo $varBug['formData']['Email'];
                   ?>">
            <?php
            if (isset($varBug['err']['email'])){
                echo '<div  class="alert alert-danger" role="alert">';

                foreach ($varBug['err']['email'] as $key => $value ) {
                    echo "<p> $key => $value </p>";
                }
                echo "</div>";
            }
            ?>
        </div>
        <div class="col-auto">
            <label for="name" class="visually-hidden">Name</label>
            <input type="text" name="Name" class="form-control" id="name" placeholder="Name">
            <?php
            if (isset($varBug['err']['name'])){
                echo '<div  class="alert alert-danger" role="alert">';

                foreach ($varBug['err']['name'] as $key => $value ) {
                    echo "<p> $key => $value </p>";
                }
                echo "</div>";
            }
            ?>
        </div>
     <div class="col-auto">
         <label for="phone" class="visually-hidden">Phone</label>
         <input type="text" name="Phone" class="form-control" id="phone" placeholder="Phone">
     </div>
     <div class="col-auto">
         <label for="message" class="visually-hidden">Message</label>
         <textarea name="Message" class="form-control" id="message">
         </textarea>
     </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Послать форму</button>
        </div>

</form>

<?php
