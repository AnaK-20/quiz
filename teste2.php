<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Principais Escritores Brasileiros</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='estilo.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
    session_start();
    $quiz_title = "Principais Escritores Brasileiros";
    
    // Verifica se o jogador já está registrado
    if (!isset($_SESSION['player_name'])) {
        // Se o jogador não estiver registrado, verifica se o nome foi enviado via formulário
        if (isset($_POST['player_name'])) {
            $_SESSION['player_name'] = $_POST['player_name'];
        } else {
            // Se o nome não foi enviado, exibe o formulário de registro
            ?>
            <form method="POST" action="teste2.php">
                <table>
                    <tr>
                        <td colspan="2">
                            <h3>
                                <?php echo $quiz_title?>
                            </h3>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                           <label for="player_name">Nome do jogador:</label>
                            <input type="text" id="player_name" name="player_name" required>
                            <button type="submit">Registrar</button> 
                        </td>
                    </tr>
                    
                    
                </table>
            </form>
            <?php
            exit(); // Encerra o script até que o nome seja registrado
        }
    }
    
        $questions = array(
             array(
                'question'=>'Quem é a autora que recebeu ao nascer o nome Chaya Pinkhasovna( posteriormente o mudou) teve que fugir para o Brasil devido ao 
                aumento de antissemitismo em seu país de origem e aos  aos 10 anos compôs sua primeira peça para piano em homenagem a sua mãe.
                Além de ter se formado em direito na faculdade do Rio de Janeiro e ter trabalhado no ramo jornalístico? ',
                'points' => '100',
                'answers'=> array(
                'Cecília Meireles(1901-1964) - autora da obra “Romanceiro da Inconfidência”.',
                'Rachel de Queiroz(1910-2003) - autora da obra “O quinze”.',
                'Clarice Lispector(1920-1977) - autora de “A Hora da Estrela”.',
                'Cora Coralina(1889-1985) - autora de “Todas as Vidas”.'), 
                'correct_answers' => 'Clarice Lispector(1920-1977) - autora de “A Hora da Estrela”.'
            ),
            array(
                'question'=>'Tendo como romance mais famoso a obra “Ponciá Vicêncio”, essa autora não foi só escritora como também professora e suas  
                obras são caracterizadas, em maior parte, pelo protagonismo mulheres negras no contexto da temática de discriminação racial. <br/>',
                'points' => '100',
                'answers'=> array(
                'Adélia Prado',
                'Conceição Evaristo', 
                'Maria Firmina dos Reis',
                'Carolina Maria de Jesus'), 
                'correct_answers' => 'Conceição Evaristo'
            ),
            array(
                'question'=>'Este autor inspirou algumas músicas como “Até o fim”  e “Flor da Idade” do compositor brasileiro Chico Buarque e teve o seu poema denominado 
                “A Máquina do Mundo” escolhido  por um grupo significativo de escritores e críticos como o melhor poema brasileiro de todos os tempos. Atualmente, 
                sua obra mais importante é  a“ Rosa do Povo”(1945). <br/>',
                'points' => '100',
                'answers'=> array(
                'José de Alencar',
                'Mário Quintana', 
                'Jorge Amado',
                'Carlos Drummond de Andrade'), 
                'correct_answers' => 'Carlos Drummond de Andrade'
            ),
            array(
                'question'=>'Este é o autor brasileiro com mais adaptações para a tv e cinema, seu livro “Cacau” ganhou destaque ao ser apreendido pela polícia política de Getúlio Vargas,
                 a temática dos seus livros percorrem histórias reais da realidade das pessoas daquela época. <br/>',
                 'points' => '100',
                'answers'=> array(
                'Mário Quintana',
                'Jorge Amado', 
                'Machado de Assis',
                'Carlos Drummond de Andrade'), 
                'correct_answers' => 'Jorge Amado'
            ),
            array(
                'question'=>'Esta autora teve seu rosto posto no fundo das notas de 100 Cruzados Novos,como forma de homenagem na época (fato que não permaneceu por muito tempo), 
                foi a primeira mulher a ter um livro premiado pela academia Brasileira de Letras e sua última obra, denominada “Cânticos” foi publicado após sua morte.',
                'points'=> '100',
                'answers'=> array(
                'Cecília Meireles',
                'Cora Coralina', 
                'Rachel de Queiroz',
                'Hilda Hilst'), 
                'correct_answers' => 'Cecília Meireles'
            ),
            array(
                'question'=>'Este autor escreveu os contos Caçador de camurças, Chronos Kai Anagke (Tempo e Destino, em grego), O mistério de Higmore Hall e Makiné. 
                Todos foram levados a um concurso da revista O Cruzeiro e saíram vencedores.',
                'points'=> '100',
                'answers'=> array(
                'Mário de Andrade',
                'José Evaristo', 
                'Guimarães Rosa',
                'Ariano Suassuna'), 
                'correct_answers' => 'Guimarães Rosa'
            ),
            array(
                'question'=>'Esta autora começou a publicar os seus trabalhos quando tinha 76 anos, trabalhou como doceira enquanto levava a escrita como um hobby paralelo.',
                'points'=> '100',
                'answers'=> array(
                'Rachel de Queiroz',
                'Cora Coralina', 
                'Hilda Hilst',
                'Carolina de Jesus'), 
                'correct_answers' => 'Cora Coralina'
            ),
            array(
                'question'=>'Este autor foi escolhido por Machado de Assis para ser o Patrono da cadeira número 23 da Academia Brasileira de Letras. 
                Ingressou no meio político, quando foi eleito como deputado no Ceará.',
                'points'=> '100',
                'answers'=> array(
                'Graciliano Ramos',
                'Manuel Bandeira', 
                'Monteiro Lobato',
                'José de Alencar'), 
                'correct_answers' => 'José de Alencar'
            ),
            array(
                'question'=>'Este autor construiu um santuário ao ar livre. A construção foi feita em São José do Belmonte, no estado de Pernambuco, local onde ocorre a cavalgada 
                inspirada em seu primeiro romance, Romance d’a pedra do reino. As três primeiras imagens do santuário são Jesus, Nossa Senhora e São José, que é o padroeiro do município.',
                'points'=> '100',
                'answers'=> array(
                'Mário Quintana',
                'José Evaristo', 
                'Ariano Suassuna',
                'Manuel Bandeira'), 
                'correct_answers' => 'Ariano Suassuna'
            ),
            array(
                'question'=>'Aos 35 anos, esta autora passou a morar numa chácara em Campinas, a Casa do Sol, planejada com cuidado pela autora para ser um espaço de inspiração 
                e criação artística. Cercada por cachorros, morou lá até o fim de sua vida e não parou de produzir.',
                'points'=> '100',
                'answers'=> array(
                'Adélia Prado',
                'Ana Miranda', 
                'Carolina de Jesus',
                'Hilda Hilst'), 
                'correct_answers' => 'd'
            )
        );
        if (isset($_SESSION['quiz_completed']) && $_SESSION['quiz_completed']) {
            $score = $_SESSION['score'];
            unset($_SESSION['score']);
            unset($_SESSION['quiz_completed']);
            ?>
            <h1>Pontuação final</h1>
            <?php
            if ($score >= 6) {
                echo '<p>Parabéns, ' . $_SESSION['player_name'] . '! Sua pontuação final foi: ' . $score . '</p>';
            } else {
                echo '<p>Que pena, ' . $_SESSION['player_name'] . '! Sua pontuação final foi: ' . $score . '</p>';
                echo '<p>Tente mais uma vez!</p>';
            }
            ?>
            <div class="container">
                <div class="area">
                <form method="POST" action="">
                    <button type="submit" name="restart">Jogar Novamente</button>
                </form>
                <form method="POST" action="">
                    <button type="submit" name="register_new">Registrar Novo Jogador</button>
                </form>
                </div>
            </div>
            <?php
        
            if (isset($_POST['restart'])) {
                unset($_SESSION['current_question']);
                header("Location: " . $_SERVER['PHP_SELF']);
            }
        
            if (isset($_POST['register_new'])) {
                unset($_SESSION['player_name']);
                unset($_SESSION['current_question']);
                header("Location: " . $_SERVER['PHP_SELF']);
            }
        
            exit(); // Encerra o script
        }
        
        // Verifica se o jogador já respondeu a pergunta atual
        if (isset($_POST['answer'])) {
            // Verifica se a resposta está correta e atualiza a pontuação
            $current_question = $_SESSION['current_question'];
            $selected_answer = $_POST['answer'];
            if ($questions[$current_question]['correct_answer'] === $selected_answer) {
                $_SESSION['score'] += $questions[$current_question]['points'];
            }
            $_SESSION['current_question']++;
        }
        
        // Inicia o quiz se ainda não foi iniciado
        if (!isset($_SESSION['current_question'])) {
            $_SESSION['current_question'] = 0;
            $_SESSION['score'] = 0;
        }
        
        // Verifica se ainda há perguntas restantes
        if ($_SESSION['current_question'] < count($questions)) {
            $current_question = $_SESSION['current_question'];
            $question = $questions[$current_question]['question'];
            $points = $questions[$current_question]['points'];
            $answers = $questions[$current_question]['answers'];
        
            ?>
            <div class="container">
                <div class="area">
                    <table>
                        <tr>
                            <td colspan="2">
                                <h1><?php echo $quiz_title; ?></h1>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p>Jogador: <?php echo $_SESSION['player_name']; ?></p> <!-- Adiciona o nome do jogador -->
                                <p>Valor da pergunta: <?php echo $points; ?> pontos</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                               <h4><?php echo $question; ?></h4> 
                            </td>
                        </tr>
                        
                        
                        <form method="POST" action="">
                            <?php foreach ($answers as $key => $answer) { ?>
                                
                                    <tr>
                                        <td><input type="radio" id="<?php echo $key; ?>" name="answer" value="<?php echo $key; ?>" required hidden></td>
                                        <td><label for="<?php echo $key; ?>"><?php echo $answer; ?></label><br><br></td>
                                    </tr>
                            
                            <?php } ?>
                            <tr>
                                <td colspan="2">
                                    <button class="botao" type="submit">Responder</button>
                                </td>
                            </tr>
                                
                    </form>
                </table>
                    
                </div>
            </div>
            <?php
        } else {
            // O jogador respondeu todas as perguntas
            $_SESSION['quiz_completed'] = true;
            $score = $_SESSION['score'];
            ?>
            <table>
                <tr>
                    <td colspan="2">
                        <h1><?php echo $quiz_title; ?></h1>
                    </td>
                </tr>
            
            
            <?php
            if ($score >= 60) {?>
                 <tr>
                     <td colspan="2">
                        <?php echo '<p>Parabéns, ' . $_SESSION['player_name'] . '! Sua pontuação final foi: ' . $score . ' pontos</p>'?>
                     </td>
                 </tr>   
                
            <?php} else {?>
                <tr>
                    <td colspan="2">
                        <?php
                        echo '<p>Que pena, ' . $_SESSION['player_name'] . '! Sua pontuação final foi: ' . $score . ' pontos</p>';
                        echo '<p>Tente mais uma vez!</p>';
                        ?>
                    </td>
                </tr>
                
            <?php
            }
            ?>
            <div class="container">
                <div class="area">
                    <table>

                    
                    <form method="POST" action="teste2.php">
                        <button class="botao" type="submit" name="restart">Jogar Novamente</button>
                    </form>
                    <form method="POST" action="teste2.php">
                        <button class="botao" type="submit" name="register_new">Registrar Novo Jogador</button>
                    </form>
                </table>
                </div>
            </div>
            <?php
        
            if (isset($_POST['restart'])) {
                unset($_SESSION['current_question']);
                header("Location: " . $_SERVER['PHP_SELF']);
            }
        
            if (isset($_POST['register_new'])) {
                unset($_SESSION['player_name']);
                unset($_SESSION['current_question']);
                header("Location: " . $_SERVER['PHP_SELF']);
            }
        }
        ?>
        </table>
        

</body>
</html>