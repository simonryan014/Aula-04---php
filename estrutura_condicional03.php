<!DOCTYPE html>
<html>
    <body>
        <?php
            // Variável para armazenar o nome do usuário
            $nome = "Fulano";
            // Verifica o nome do usuário usando a instrução `switch`
            switch ($nome) {
                case "Fulano":
                    echo "E ai Fulano!";
                break;

                case "Sicrano":
                    echo "E ai Sicrano!";
                break;

                case "Beltrano":
                    echo "E ai Beltrano!";
                break;

                default:
                    echo "Qual é o seu nome?";
                break;
            }
        // Resultado é: E ai Fulano!
        ?>
    </body>
</html>