<?php
  require_once 'header.php';
?>


 <div class="container">

           <form id="login" method="post" class="formLogin" action="../controller/logar.php" >

               <div class="row">
                 <div class="col-sm-6">
                   <label>Login</label>
                   <div class="">
                     <input id="login" name="login" type="text" placeholder="Login" class="input" size="30" required autofocus>
                   </div>
                 </div>
               </div>

               <div class="row">
                 <div class="col-sm-6">
                   <br><label>Senha</label>
                   <div>
                     <input id="senha"  name = "senha" type="password" placeholder="Senha" class="input" min="6" max="16" size="30" required >
                   </div>
                 </div>
               </div>

               <div class="buttonLogin">
                 <div class="col-md-6">
                   <input type="submit" value="Entrar" class="button" onClick="">
                 </div>
               </div>

           </form>
</div>

<?php
  require_once 'footer.php';
 ?>
