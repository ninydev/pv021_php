 <form class="row g-3"
          action="<?=$_SERVER['PHP_SELF'];?>?controller=MailController&method=send"
          method="post">
        <div class="col-auto">
            <label for="email" class="visually-hidden">Email</label>
            <input type="text" name="Email" class="form-control" id="email"
                   value="email@example.com">
        </div>
        <div class="col-auto">
            <label for="name" class="visually-hidden">Name</label>
            <input type="text" name="Name" class="form-control" id="name" placeholder="Name">
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
