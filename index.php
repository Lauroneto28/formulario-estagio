<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css" type="text/css">
     <title>Formulario</title>

    </head>
    <body>
    <div class="container">
  <div class="form-image">
   <img src="img/undraw_sign__up_nm4k.svg">
  </div>
    <div class="form">
    <form action="config.php">
     <div class="form-header">
     <div class="title">
    <h1>Cadastre-se</h1>
   </div>
         <div class="login-button">
          <button><a href="#">Entrar</a></button>
         </div>
</div>

            <div class="input-group">
              <div class="input-box">
                 <label for="nome">Nome:</label>
                 <input type="text" name="nome" placeholder="Digite seu nome" required>
              </div>

              <div class="input-box">
                <label for="data">Idade:</label>
                <input type="text" name="idade"  placeholder="Digite sua idade" required>
             </div>

             <div class="input-box">
              <label for="cpf">Cpf:</label>
              <input type="password" name="cpf"  placeholder="Digite seu Cpf" required>
           </div>
         </div>

         <div class="input-box">
          <label for="email">Email:</label>
          <input type="text" name="email"  placeholder="Digite seu email" required>
       </div>
         <div class="gender-inputs">
            <div class="gender-title">
 Estado civil
            </div>
            <div class="gender-group"> 
              <div class="gender-input">
                <input type="radio" id="Casado" name="estado">
                <label for="Casado">Casado</label>
              </div>
              <div class="gender-input">
                <input type="radio" id="Solteiro"name="estado">
                <label for="Solteiro">Solteiro</label>
              </div>
              <div class="gender-input">
                <input type="radio" id="outro"name="estado">
                <label for="Outro">Outro</label>
              </div>
            </div>
            <br>
         </div>
         <div class="input-box">
          <label for="estado">Cep</label>
          <input type="cep" name="cep"  required placeholder="Digite seu Cep">
         </div>
         <div class="input-box">
          <label for="estado">Idade</label>
          <input type="idade" name="idade"  required placeholder="Digite sua idade">
         </div>
         <div class="continue-button">
          
          <input type="submit" name="submit" id="submit">
       </div>
  </div>

     </div>


           </div>
            </div>

          
    </form>
  </div>
</div>
      
</body>
</html>
</body>
</html>