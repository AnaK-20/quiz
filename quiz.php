<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Principais Escritores Brasileiros</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='quiz.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
        $nome = '';
        $inicio = array('Título', 'Digite seu nome:','Jogador:', $nome , 'Jogar', 'Responder', 'Continuar', 'Reiniciar');
        $quiz = array(
            $q1 = array(
                'Quem é a autora que recebeu ao nascer o nome Chaya Pinkhasovna( posteriormente o mudou) teve que fugir para o Brasil devido ao 
                aumento de antissemitismo em seu país de origem e aos  aos 10 anos compôs sua primeira peça para piano em homenagem a sua mãe.
                Além de ter se formado em direito na faculdade do Rio de Janeiro e ter trabalhado no ramo jornalístico? ',
                'Cecília Meireles(1901-1964) - autora da obra “Romanceiro da Inconfidência”.',
                'Rachel de Queiroz(1910-2003) - autora da obra “O quinze”.', 
                'Clarice Lispector(1920-1977) - autora de “Perto do Coração Selvagem”.',
                'Cora Coralina(1889-1985) - autora de “Todas as Vidas”.', 'Clarice Lispector(1920-1977) - autora de “Perto do Coração Selvagem”.'
            ),
            $q2 = array('p2', 'r1', 'r2', 'r3', 'r4', 'correta' ),
            $q3 = array('p3', 'r1', 'r2', 'r3', 'r4', 'correta' ),
            $q4 = array('p4', 'r1', 'r2', 'r3', 'r4', 'correta' ),
            $q5 = array('p5', 'r1', 'r2', 'r3', 'r4', 'correta' ),
            $q6 = array('p6', 'r1', 'r2', 'r3', 'r4', 'correta' ),
            $q7 = array('p7', 'r1', 'r2', 'r3', 'r4', 'correta' ),
            $q8 = array('p8', 'r1', 'r2', 'r3', 'r4', 'correta' ),
            $q9 = array('p9', 'r1', 'r2', 'r3', 'r4', 'correta' ),
            $q10 = array('p10', 'r1', 'r2', 'r3', 'r4', 'correta')
        );
        
        $pagina = $inicio[1];
        while ($a = 0 && $a <= count($quiz)) {
            $a++;
        }
        while ($i = 1 && $i <= count($q1)) {
            $i++;
        }

    ?>
    <form action="quiz.php" method="post">
        <table>
            <tr>
                <td colspan="2">
                    <?php echo "<h2>".$inicio[0]."</h2>" ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="nome"><?php echo $inicio[1] ?></label>
                    <input type="text" name="nome" value="<?php  echo $inicio[3]?>">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label><?php echo $quiz[$a][0]?></label>
                    <input type="radio" name="alternativa" value="<?php echo $quiz[$a][$i]?>">
                </td>
            </tr>
        </table>
    </form>
    
</body>
</html>