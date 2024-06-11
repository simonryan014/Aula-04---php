<!DOCTYPE html>
<html>
    <body>
        <?php
            // Variável para armazenar o dia da semana
            $hoje = "Quarta";
            // Verifica o dia da semana usando a instrução `switch`                 
            switch ($hoje) {
                case "Segunda";
                  echo "Hoje é segunda-feira";
                  break;
                case "Terça";
                  echo "Hoje é terça=feira";
                  break;
                case "Quarta";
                  echo "Hoje é quarta-feira";
                  break;
                default:
                  echo "Não é início da semana";
            }
        ?>
    </body>
</html>