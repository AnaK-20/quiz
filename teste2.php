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
    session_start();
    $titulo = "Principais Escritores Brasileiros";
    
    // Verifica se o jogador já está registrado
    if (!isset($_SESSION['nome_jogador'])) {
        // Se o jogador não estiver registrado, verifica se o nome foi enviado via formulário
        if (isset($_POST['nome_jogador'])) {
            $_SESSION['nome_jogador'] = $_POST['nome_jogador'];
        } else {
            // Se o nome não foi enviado, exibe o formulário de registro
            ?>
            <form method="POST" action="">
                <label for="nome_jogador">Nome:</label>
                <input type="text" id="nome_jogador" name="nome_jogador" required>
                <button type="submit">Jogar</button>
            </form>
            <?php
            exit(); // Encerra o script até que o nome seja registrado
        }
    }
    
        $quiz = array(
             array(
                'pergunta'=>'Quem é a autora que recebeu ao nascer o nome Chaya Pinkhasovna( posteriormente o mudou) teve que fugir para o Brasil devido ao 
                aumento de antissemitismo em seu país de origem e aos  aos 10 anos compôs sua primeira peça para piano em homenagem a sua mãe.
                Além de ter se formado em direito na faculdade do Rio de Janeiro e ter trabalhado no ramo jornalístico? ',
                'opcoes'=> array(
                'Cecília Meireles(1901-1964) - autora da obra “Romanceiro da Inconfidência”.',
                'valor'=> '100'
                'Rachel de Queiroz(1910-2003) - autora da obra “O quinze”.',
                'valor'=> '100' 
                'Clarice Lispector(1920-1977) - autora de “A Hora da Estrela”.',
                'valor'=> '100'
                'Cora Coralina(1889-1985) - autora de “Todas as Vidas”.'), 
                'resposta' => 'Clarice Lispector(1920-1977) - autora de “A Hora da Estrela”.'
            ),
            array(
                'pergunta'=>'Tendo como romance mais famoso a obra “Ponciá Vicêncio”, essa autora não foi só escritora como também professora e suas  
                obras são caracterizadas, em maior parte, pelo protagonismo mulheres negras no contexto da temática de discriminação racial. <br/>',
                'opcoes'=> array(
                'Adélia Prado',
                'Conceição Evaristo', 
                'Maria Firmina dos Reis',
                'Carolina Maria de Jesus'), 
                'resposta' => 'Conceição Evaristo'
            ),
            array(
                'pergunta'=>'Este autor inspirou algumas músicas como “Até o fim”  e “Flor da Idade” do compositor brasileiro Chico Buarque e teve o seu poema denominado 
                “A Máquina do Mundo” escolhido  por um grupo significativo de escritores e críticos como o melhor poema brasileiro de todos os tempos. Atualmente, 
                sua obra mais importante é  a“ Rosa do Povo”(1945). <br/>',
                'opcoes'=> array(
                'José de Alencar',
                'Mário Quintana', 
                'Jorge Amado',
                'Carlos Drummond de Andrade'), 
                'resposta' => 'Carlos Drummond de Andrade'
            ),
            array(
                'pergunta'=>'Este é o autor brasileiro com mais adaptações para a tv e cinema, seu livro “Cacau” ganhou destaque ao ser apreendido pela polícia política de Getúlio Vargas,
                 a temática dos seus livros percorrem histórias reais da realidade das pessoas daquela época. <br/>',
                'opcoes'=> array(
                'Mário Quintana',
                'Jorge Amado', 
                'Machado de Assis',
                'Carlos Drummond de Andrade'), 
                'resposta' => 'Jorge Amado'
            ),
            array(
                'pergunta'=>'Esta autora teve seu rosto posto no fundo das notas de 100 Cruzados Novos,como forma de homenagem na época (fato que não permaneceu por muito tempo), 
                foi a primeira mulher a ter um livro premiado pela academia Brasileira de Letras e sua última obra, denominada “Cânticos” foi publicado após sua morte.',
                'valor'=> '100'
                'opcoes'=> array(
                'Cecília Meireles',
                'Cora Coralina', 
                'Rachel de Queiroz',
                'Hilda Hilst'), 
                'resposta' => 'Cecília Meireles'
            ),
            array(
                'pergunta'=>'Este autor escreveu os contos Caçador de camurças, Chronos Kai Anagke (Tempo e Destino, em grego), O mistério de Higmore Hall e Makiné. 
                Todos foram levados a um concurso da revista O Cruzeiro e saíram vencedores.',
                'valor'=> '100'
                'opcoes'=> array(
                'Mário de Andrade',
                'José Evaristo', 
                'Guimarães Rosa',
                'Ariano Suassuna'), 
                'resposta' => 'Guimarães Rosa'
            ),
            array(
                'pergunta'=>'Esta autora começou a publicar os seus trabalhos quando tinha 76 anos, trabalhou como doceira enquanto levava a escrita como um hobby paralelo.',
                'valor'=> '100'
                'opcoes'=> array(
                'Rachel de Queiroz',
                'Cora Coralina', 
                'Hilda Hilst',
                'Carolina de Jesus'), 
                'resposta' => 'Cora Coralina'
            ),
            array(
                'pergunta'=>'Este autor foi escolhido por Machado de Assis para ser o Patrono da cadeira número 23 da Academia Brasileira de Letras. 
                Ingressou no meio político, quando foi eleito como deputado no Ceará.',
                'valor'=> '100'
                'opcoes'=> array(
                'Graciliano Ramos',
                'Manuel Bandeira', 
                'Monteiro Lobato',
                'José de Alencar'), 
                'resposta' => 'José de Alencar'
            ),
            array(
                'pergunta'=>'Este autor construiu um santuário ao ar livre. A construção foi feita em São José do Belmonte, no estado de Pernambuco, local onde ocorre a cavalgada 
                inspirada em seu primeiro romance, Romance d’a pedra do reino. As três primeiras imagens do santuário são Jesus, Nossa Senhora e São José, que é o padroeiro do município.',
                'valor'=> '100'
                'opcoes'=> array(
                'Mário Quintana',
                'José Evaristo', 
                'Ariano Suassuna',
                'Manuel Bandeira'), 
                'resposta' => 'Ariano Suassuna'
            ),
            array(
                'pergunta'=>'Aos 35 anos, esta autora passou a morar numa chácara em Campinas, a Casa do Sol, planejada com cuidado pela autora para ser um espaço de inspiração 
                e criação artística. Cercada por cachorros, morou lá até o fim de sua vida e não parou de produzir.',
                'valor'=> '100'
                'opcoes'=> array(
                'Adélia Prado',
                'Ana Miranda', 
                'Carolina de Jesus',
                'Hilda Hilst'), 
                'resposta' => 'd'
            )
        );
        if (isset($_SESSION['fim_do_quiz']) && $_SESSION['fim_do_quiz']) {
            $pontuacao = $_SESSION['pontuacao'];
            unset($_SESSION['pontuacao']);
            unset($_SESSION['fim_do_quiz']);
            ?>
            <h1>Pontuação final</h1>
            <?php
            if ($pontuacao >= 600) {
                echo '<p>Parabéns, ' . $_SESSION['nome_jogador'] . '! Sua pontuação final foi: ' . $pontuacao . '</p>';
            } else {
                echo '<p>Que pena, ' . $_SESSION['nome_jogador'] . '! Sua pontuação final foi: ' . $pontuacao . '</p>';
                echo '<p>Tente mais uma vez!</p>';
            }
            ?>
            <div class="container">
                <div class="area">
                <form method="POST" action="">
                    <button type="submit" name="reiniciar">Jogar Novamente</button>
                </form>
                <form method="POST" action="">
                    <button type="submit" name="novo_jogador">Novo Jogador</button>
                </form>
                </div>
            </div>
            <?php
        
            if (isset($_POST['reiniciar'])) {
                unset($_SESSION['questao']);
                header("Location: " . $_SERVER['PHP_SELF']);
            }
        
            if (isset($_POST['novo_jogador'])) {
                unset($_SESSION['nome_jogador']);
                unset($_SESSION['questao']);
                header("Location: " . $_SERVER['PHP_SELF']);
            }
        
            exit(); // Encerra o script
        }
        
        // Verifica se o jogador já respondeu a pergunta atual
        if (isset($_POST['resposta'])) {
            // Verifica se a resposta está correta e atualiza a pontuação
            $questao = $_SESSION['questao'];
            $resposta_selecionada = $_POST['resposta'];
            if ($questoes[$questao]['correct_resposta'] === $resposta_selecionada) {
                $_SESSION['pontuacao'] += $questoes[$questao]['valor'];
            }
            $_SESSION['questao']++;
        }
        
        // Inicia o quiz se ainda não foi iniciado
        if (!isset($_SESSION['questao'])) {
            $_SESSION['questao'] = 0;
            $_SESSION['pontuacao'] = 0;
        }
        
        // Verifica se ainda há perguntas restantes
        if ($_SESSION['questao'] < count($questoes)) {
            $questao = $_SESSION['questao'];
            $questao = $questoes[$questao]['questao'];
            $valor = $questoes[$questao]['valor'];
            $respostas = $questoes[$questao]['respostas'];
        
            ?>
            <div class="container">
                <div class="area">
                    <h1><?php echo $titulo; ?></h1>
                    <h4><?php echo $questao; ?></h4>
                    <table>
                        <tr>
                            <td><p>Valor da pergunta: <?php echo $valor; ?> pontos</p></td>
                            <td><p>Jogador: <?php echo $_SESSION['nome_jogador']; ?></p> <!-- Adiciona o nome do jogador --></td>
                        </tr>
                    </table>
                    <form method="POST" action="teste2.php">
                        <?php foreach ($respostas as $key => $resposta) { ?>
                            <table>
                                <tr>
                                    <td><input type="radio" id="<?php echo $key; ?>" name="resposta" value="<?php echo $key; ?>" required hidden></td>
                                    <td><label for="<?php echo $key; ?>"><?php echo $resposta; ?></label><br><br></td>
                                </tr>
                            </table>
                        
                        <?php } ?>
                            <button class="my-button" type="submit">Responder</button>
                    </form>
                </div>
            </div>
            <?php
        } else {
            // O jogador respondeu todas as perguntas
            $_SESSION['fim_do_quiz'] = true;
            $pontuacao = $_SESSION['pontuacao'];
            ?>
            <h1><?php echo $titulo; ?></h1>
            <?php
            if ($pontuacao >= 60) {
                echo '<p>Parabéns, ' . $_SESSION['nome_jogador'] . '! Sua pontuação final foi: ' . $pontuacao . ' pontos</p>';
            } else {
                echo '<p>Que pena, ' . $_SESSION['nome_jogador'] . '! Sua pontuação final foi: ' . $pontuacao . ' pontos</p>';
                echo '<p>Tente mais uma vez!</p>';
            }
            ?>
            <div class="container">
                <div class="area">
                    <form method="POST" action="">
                        <button class="my-button" type="submit" name="reiniciar">Jogar Novamente</button>
                    </form>
                    <form method="POST" action="">
                        <button class="my-button" type="submit" name="novo_jogador">Registrar Novo Jogador</button>
                    </form>
                </div>
            </div>
            <?php
        
            if (isset($_POST['reiniciar'])) {
                unset($_SESSION['questao']);
                header("Location: " . $_SERVER['PHP_SELF']);
            }
        
            if (isset($_POST['novo_jogador'])) {
                unset($_SESSION['nome_jogador']);
                unset($_SESSION['questao']);
                header("Location: " . $_SERVER['PHP_SELF']);
            }
        }
        ?>
        

</body>
</html>