
<!------ Include the above in your HEAD tag ---------->
    <?php  
    include("navbar.php");
    ?>
    <body style="background-image: url(https://i.pinimg.com/originals/37/32/9d/37329d3c14684b03701b11de0c07a085.jpg););">
    <center>
      <form class="form-horizontal" action='' method="GET">
        <input type="text" id="username" name="username" placeholder="Nome de usuário" class="form-control">
        <br>
        <input type="text" id="email" name="email" placeholder="E-mail" class="form-control">
        <br>
        <input type="password" id="password" name="password" placeholder="Digite uma senha" class="form-control">
        <br>
        <input type="password" id="password_confirm" name="password_confirm" placeholder="Confirme sua senha" class="form-control">
        <br>
        <button class="btn btn-success">Register</button>
      </form></center>
    </body>
    <?php  
    include("rodape_alt.php");
    ?>