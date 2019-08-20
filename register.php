
<!------ Include the above in your HEAD tag ---------->
    <?php  
    include("navbar.php");
    ?>
    <body style="background-image: url(https://steamcdn-a.akamaihd.net/steamcommunity/public/images/items/526920/7d3c2adfab2fa148b7b657e6af4a54413b71ab72.jpg););">
        <br><br>
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