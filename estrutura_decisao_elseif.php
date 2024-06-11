<!DOCTYPE html>
<html>
    <body>
        <?php
            // Variável para armazenar a idade do usuário
            $idade = 18;
            // Verifica se o usuário é maior de idade (18 anos ou mais)
            if($idade > 18) {
                echo "Você é maior de idade";
            } elseif ($idade == 18) {
                echo "Você acaba de atingir a maioridade";
            } else {
                echo "Você é menor de idade";
            }
        ?>
    </body>
</html>