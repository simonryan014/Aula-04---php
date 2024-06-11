<!DOCTYPE html>
<html>
    <body>
        <?php
            // Variável para armazenar o nome do usuário
            $nome = "Till Lindemann";

            // Verifica se o nome do usuário é igual a "Richard Kruspe"
            if($nome == "Richard Kruspe") {

                echo "E ae Richard Kruspe!";

            // Se não for igual a "Richard Kruspe", verifica se o nome do usuário é igual a "Oliver Rindel"
            } elseif ($nome == "Oliver Rindel") {

                echo "E ae Oliver Rindel!";
                
            // Se não for igual a "Richard Kruspe" nem a "Oliver Rindel", verifica se o nome do usuário é igual a "Till Lindemann"
            } elseif ($nome == "Till Lindemann") {

                echo "E ae Till Lindemann!";

            // Se não for igual a nenhum dos nomes anteriores, exibe a mensagem "E ae $nome!" usando o nome armazenado na variável
            } else {
                echo "E ae $nome!";
            }
        ?>
    </body>
</html>