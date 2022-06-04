<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="utf-8">
       
        <link rel="stylesheet" href="../css/estilosLogin.css">

       


    </head>


        <body>
            <?php
            session_start();
            unset($_SESSION["id"]);
            ?>
            
            <div onclick="window.location.href = '../paginas/paginaMenuPrincipal.html'" class="divLogo"></div>
            <div class="divLogin">
                <div class="divBemVindo">  Bem Vindo(a) </div>
                <div class="LinhaBemVindo"></div>
                
                <form action="logarAbrigo.php" method="post">
                    <input  type="text" placeholder="Abrigo" minlength="4" maxlength="60" name="nome" required > <br>

                    <input  type="text" placeholder="E-mail" maxlength="60" name="email" 
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                    title="E-mail inválido, exemplo: exemplo@exemplo.com" required > <br>

                    <input  type="password" placeholder="Senha" maxlength="40" name="senha" 
                    pattern="(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{6,40}" 
                    title="Senha entre 6 e 40 caracteres, com letra maiúscula, minúscula e número" required> <br>

                    <button> Entrar </button>
                </form>
            </div>
    
         
            
        </body>
   
</html>