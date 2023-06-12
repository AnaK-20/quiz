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
        $quiz = array(
             array(
                'pergunta'=>'Quem é a autora que recebeu ao nascer o nome Chaya Pinkhasovna( posteriormente o mudou) teve que fugir para o Brasil devido ao 
                aumento de antissemitismo em seu país de origem e aos  aos 10 anos compôs sua primeira peça para piano em homenagem a sua mãe.
                Além de ter se formado em direito na faculdade do Rio de Janeiro e ter trabalhado no ramo jornalístico? ',
                'opcoes'=> array(
                'a'=>'Cecília Meireles(1901-1964) - autora da obra “Romanceiro da Inconfidência”.',
                'b'=>'Rachel de Queiroz(1910-2003) - autora da obra “O quinze”.', 
                'c'=>'Clarice Lispector(1920-1977) - autora de “Perto do Coração Selvagem”.',
                'd'=>'Cora Coralina(1889-1985) - autora de “Todas as Vidas”.'), 
                'resposta' => 'c'
            ),
            array(
                'pergunta'=>'Tendo como romance mais famoso a obra “Ponciá Vicêncio”, essa autora não foi só escritora como também professora e suas  
                obras são caracterizadas, em maior parte, pelo protagonismo mulheres negras no contexto da temática de discriminação racial. <br/>',
                'opcoes'=> array(
                'a'=>'Adélia Prado',
                'b'=>'Conceição Evaristo', 
                'c'=>'Maria Firmina dos Reis',
                'd'=>'Carolina Maria de Jesus'), 
                'resposta' => 'b'
            ),
            array(
                'pergunta'=>'Este autor inspirou algumas músicas como “Até o fim”  e “Flor da Idade” do compositor brasileiro Chico Buarque e teve o seu poema denominado 
                “A Máquina do Mundo” escolhido  por um grupo significativo de escritores e críticos como o melhor poema brasileiro de todos os tempos. Atualmente, 
                sua obra mais importante é  a“ Rosa do Povo”(1945). <br/>',
                'opcoes'=> array(
                'a'=>'José de Alencar',
                'b'=>'Mário Quintana', 
                'c'=>'Jorge Amado',
                'd'=>'Carlos Drummond de Andrade'), 
                'resposta' => 'd'
            ),
            array(
                'pergunta'=>'Este é o autor brasileiro com mais adaptações para a tv e cinema, seu livro “Cacau” ganhou destaque ao ser apreendido pela polícia política de Getúlio Vargas,
                 a temática dos seus livros percorrem histórias reais da realidade das pessoas daquela época. <br/>',
                'opcoes'=> array(
                'a'=>'Mário Quintana',
                'b'=>'Jorge Amado', 
                'c'=>'Machado de Assis',
                'd'=>'Carlos Drummond de Andrade'), 
                'resposta' => 'b'
            ),
            array(
                'pergunta'=>'Esta autora teve seu rosto posto no fundo das notas de 100 Cruzados Novos,como forma de homenagem na época (fato que não permaneceu por muito tempo), 
                foi a primeira mulher a ter um livro premiado pela academia Brasileira de Letras e sua última obra, denominada “Cânticos” foi publicado após sua morte.',
                'opcoes'=> array(
                'a'=>'Cecília Meireles',
                'b'=>'Cora Coralina', 
                'c'=>'Rachel de Queiroz',
                'd'=>'Hilda Hilst'), 
                'resposta' => 'a'
            ),
            array(
                'pergunta'=>'Este autor escreveu os contos Caçador de camurças, Chronos Kai Anagke (Tempo e Destino, em grego), O mistério de Higmore Hall e Makiné. 
                Todos foram levados a um concurso da revista O Cruzeiro e saíram vencedores.',
                'opcoes'=> array(
                'a'=>'Mário de Andrade',
                'b'=>'José Evaristo', 
                'c'=>'Guimarães Rosa',
                'd'=>'Ariano Suassuna'), 
                'resposta' => 'c'
            ),
            array(
                'pergunta'=>'Esta autora começou a publicar os seus trabalhos quando tinha 76 anos, trabalhou como doceira enquanto levava a escrita como um hobby paralelo.',
                'opcoes'=> array(
                'a'=>'Rachel de Queiroz',
                'b'=>'Cora Coralina', 
                'c'=>'Hilda Hilst',
                'd'=>'Carolina de Jesus'), 
                'resposta' => 'b'
            ),
            array(
                'pergunta'=>'Este autor foi escolhido por Machado de Assis para ser o Patrono da cadeira número 23 da Academia Brasileira de Letras. 
                Ingressou no meio político, quando foi eleito como deputado no Ceará.',
                'opcoes'=> array(
                'a'=>'Graciliano Ramos',
                'b'=>'Manuel Bandeira', 
                'c'=>'Monteiro Lobato',
                'd'=>'José de Alencar'), 
                'resposta' => 'd'
            ),
            array(
                'pergunta'=>'Este autor construiu um santuário ao ar livre. A construção foi feita em São José do Belmonte, no estado de Pernambuco, local onde ocorre a cavalgada 
                inspirada em seu primeiro romance, Romance d’a pedra do reino. As três primeiras imagens do santuário são Jesus, Nossa Senhora e São José, que é o padroeiro do município.',
                'opcoes'=> array(
                'a'=>'Mário Quintana',
                'b'=>'José Evaristo', 
                'c'=>'Ariano Suassuna',
                'd'=>'Manuel Bandeira'), 
                'resposta' => 'c'
            ),
            array(
                'pergunta'=>'Aos 35 anos, esta autora passou a morar numa chácara em Campinas, a Casa do Sol, planejada com cuidado pela autora para ser um espaço de inspiração 
                e criação artística. Cercada por cachorros, morou lá até o fim de sua vida e não parou de produzir.',
                'opcoes'=> array(
                'a'=>'Adélia Prado',
                'b'=>'Ana Miranda', 
                'c'=>'Carolina de Jesus',
                'd'=>'Hilda Hilst'), 
                'resposta' => 'd'
            )
        );
        $pontuacao = 0;
        $questionIndex = isset($_POST['questionIndex']) ? $_POST["questionIndex"] : 0;
        $questoes = count($quiz);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST["anwser"])) {
                $selectedAnswer = strtoupper($_POST['answer']);
                if ($selectedAnswer === $quiz[$questionIndex]['resposta']) {
                    $pontuacao++;
                }
            }
        }
        $questionIndex++;

        if ($questionIndex === $questoes) {?>
            <table>
                <tr>
                    <td colspan="2">
                    <?php 
                            echo "<h1>Quiz completo!</h1>";
                                echo "<p>Questões: $questoes</p>";
                                echo "<p>Respostas corretas: $pontuacao</p>";
                                echo "<p>Respostas incorretas " . ($questoes - $pontuacao) . "</p>";
                                
                                
                                ?>
                    </td>
                </tr>
            </table>
           
       <?php }
    
    ?>
    <table>
    <?php if ($questionIndex === 0 || $questionIndex === $questoes) : ?>
        
        <tr>
            <td colspan="2">
                <h1>Principais Escritores Brasileiros</h1>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <form action="teste2.php" method="post">
                    <input type="hidden" name="questionIndex" value="0">
                    <input type="submit" name="jogar" value="Jogar" class="botao">
                </form> 
            </td>
        </tr>
        <?php elseif ($questionIndex < $questoes) : ?>
            <tr>
                <td>
                <h1>Principais Escritores Brasileiros</h1>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h3><?php echo $quiz[$questionIndex]['pergunta']; ?></h3>
                </td>
            </tr>
            
            <form method="post" action="teste2.php">
            <input type="hidden" name="questionIndex" value="<?php echo $questionIndex; ?>">
            <?php foreach ($quiz[$questionIndex]['opcoes'] as $opcao) : ?>
                <tr>
                    <td colspan="2">
                        <input type="radio" name="answer" value="<?php echo substr($opcao, 0, 1); ?>" required> <?php echo substr($opcao, 3); ?><br>
                        
                    </td>
                </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Continuar" class="botao">
                    </td>
                </tr>
            
        </form>
        <?php endif; ?>
    </table>
    
</body>
</html>