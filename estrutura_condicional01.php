<!DOCTYPE html>
<html>
    <body>
        <?php
            // Variavel para armazenar idade do usuario
            $idade = 17;
            
            // Verifica se o usuario é menor de idade
            if($idade < 18) {
                echo "Você não pode entrar aqui!";
            } else {
                echo "Seja bem-vindo";
            }
        ?>

        <?php
            // Variável para armazenar a idade do usuário
            $idade = 21;
            // Variável para armazenar se o usuário possui identidade
            $identidade = true;

            // Verifica se o usuário é maior de idade e possui identidade
            if($idade > 18 && $identidade == true) {
                echo "Seja bem-vindo";
            }
        ?>
    </body>
</html>