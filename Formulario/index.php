<?php
  if (isset($_POST["submit"])) {
    $username = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];

    $message = "Nome:".$username." Email:". $email." Senha:". $password ." Telefone:".$phone;

    echo "<p>Usuário criado com sucesso ✓</p>";
    
    $myfile = fopen("userlog.txt", "w") or die("Não foi possivel abrir o arquivo!");
 
     fwrite($myfile, $message);
     fclose($myfile);
  }
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Seja Bem-Vindo, caro leitor!</h3>
          <p class="text">
            Venha ser nosso cliente :-)
          </p>

		
          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <p>Avenida Conde da Boa Vista, 96</p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p>livrariabeiramar@hotmail.com</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
               <p>(81)98457037</p>
            </div>
              
          </div>

          <div class="social-media">
            <p>Em breve nas redes sociais:</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="" method="post" autocomplete="off">
            <h3 class="title">Cadastre-se</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Nome Completo</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            
        <div class="input-container">
              <input type="text" name="password" class="input" />
              <label for="">Senha</label>
              <span>Password</span>
            </div>
            
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Telefone</label>
              <span>Phone</span>
            </div>
          
            <input type="submit" name="submit" value="Enviar" class="btn" />
          </form>
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
