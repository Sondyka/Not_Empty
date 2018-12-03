
<?php
echo'

<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModal" >
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header px-2">
   <h5 id="LoginModalLabel" class="modal-title ">Вхід в кабінет</h5>
  
<button class="close" type="button" data-dismiss="modal" aria-label="Close">
       <span aria-hidden="true">x</span></button></div>
<div class="modal-body row">

<div class="form">
  <div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/hat.svg"/></div>
    <form class="login-form" action="index.php" method="POST" >
    <input type="text" name="login" placeholder="логін" required="" />
    <input type="password" name="password" placeholder="пароль" required="" />
    <button name="log_in">увійти</button>
     </form>
</div>
</div>
</div>
</div>
</div>
';
 ?>