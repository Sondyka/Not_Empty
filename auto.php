
<?php
echo'<style>
.form {
    position: relative;
    z-index: 1;
    background: #FFFFFF;
    max-width: 300px;
    margin: 0 auto;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
    border-bottom-left-radius: 3px;
    border-bottom-right-radius: 3px;
    text-align: center;
  }
  .form .thumbnail {
    background: #195883;
    width: 150px;
    height: 150px;
    margin: 0 auto 30px;
    padding: 50px 30px;
    border-top-left-radius: 100%;
    border-top-right-radius: 100%;
    border-bottom-left-radius: 100%;
    border-bottom-right-radius: 100%;
    box-sizing: border-box;
  }
  .form .thumbnail img {
    display: block;
    width: 100%;
  }
  .form input {
    outline: 0;
    background: #f2f2f2;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
    border-bottom-left-radius: 3px;
    border-bottom-right-radius: 3px;
    box-sizing: border-box;
    font-size: 14px;
  }
  .form button {
    outline: 0;
    background: #195883;
    width: 100%;
    border: 0;
    padding: 15px;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
    border-bottom-left-radius: 3px;
    border-bottom-right-radius: 3px;
    color: #FFFFFF;
    font-size: 14px;
    transition: all 0.3 ease;
    cursor: pointer;
  }
  .form .message {
    margin: 15px 0 0;
    color: #b3b3b3;
    font-size: 12px;
  }
  .form .message a {
    color: #195883;
    text-decoration: none;
  }
  .form .register-form {
    display: none;
  }
</style>

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