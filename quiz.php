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
        $a = 0;
        $i = 0;
        $nome = '';
        $botao = '';
        $pontuacao = 0;
        $pagina = '';
        $quiz = array(
            $q1 = array(
                'Quem é a autora que recebeu ao nascer o nome Chaya Pinkhasovna( posteriormente o mudou) teve que fugir para o Brasil devido ao 
                aumento de antissemitismo em seu país de origem e aos  aos 10 anos compôs sua primeira peça para piano em homenagem a sua mãe.
                Além de ter se formado em direito na faculdade do Rio de Janeiro e ter trabalhado no ramo jornalístico? ',
                'Cecília Meireles(1901-1964) - autora da obra “Romanceiro da Inconfidência”.',
                'Rachel de Queiroz(1910-2003) - autora da obra “O quinze”.', 
                'Clarice Lispector(1920-1977) - autora de “Perto do Coração Selvagem”.',
                'Cora Coralina(1889-1985) - autora de “Todas as Vidas”.', 'Clarice Lispector(1920-1977) - autora de “Perto do Coração Selvagem”.'),
            $q2 = array(
                'Tendo como romance mais famoso a obra “Ponciá Vicêncio”, essa autora não foi só escritora como também professora e suas  
                obras são caracterizadas, em maior parte, pelo protagonismo mulheres negras no contexto da temática de discriminação racial. <br/> A autora correspondente é:', 
                'Adélia Prado', 'Conceição Evaristo', 'Maria Firmina dos Reis', 'Carolina Maria de Jesus', 'Conceição Evaristo' ),
            $q3 = array(
                'Este autor inspirou algumas músicas como “Até o fim”  e “Flor da Idade” do compositor brasileiro Chico Buarque e teve o seu poema denominado 
                “A Máquina do Mundo” escolhido  por um grupo significativo de escritores e críticos como o melhor poema brasileiro de todos os tempos. Atualmente, 
                sua obra mais importante é  a“ Rosa do Povo”(1945).',
                'José de Alencar', ' Mário Quintana', 'Jorge Amado', 'Carlos Drummond de Andrade', 'Carlos Drummond de Andrade' ),
            $q4 = array(
                'Este é o autor brasileiro com mais adaptações para a tv e cinema, seu livro “Cacau” ganhou destaque ao ser apreendido pela polícia política de Getúlio Vargas,
                a temática dos seus livros percorrem histórias reais da realidade das pessoas daquela época.', 
                'Mário Quintana', 'Jorge Amado', 'Machado de Assis', 'Carlos Drummond de Andrade', 'Jorge Amado' ),
            $q5 = array(
                'Esta autora teve seu rosto posto no fundo das notas de 100 Cruzados Novos,como forma de homenagem na época (fato que não permaneceu por muito tempo), 
                foi a primeira mulher a ter um livro premiado pela academia Brasileira de Letras e sua última obra, denominada “Cânticos” foi publicado após sua morte.', 
                'Cecília Meireles', 'Cora Coralina', 'Rachel de Queiroz', 'Hilda Hilst', 'Cecília Meireles' ),
            $q6 = array(
                'Este autor escreveu os contos Caçador de camurças, Chronos Kai Anagke (Tempo e Destino, em grego), O mistério de Higmore Hall e Makiné. 
                Todos foram levados a um concurso da revista O Cruzeiro e saíram vencedores.', 
                'Mário de Andrade', 'José Evaristo', 'Guimarães Rosa', 'Ariano Suassuna', 'Guimarães Rosa' ),
            $q7 = array(
                'Esta autora começou a publicar os seus trabalhos quando tinha 76 anos, trabalhou como doceira enquanto levava a escrita como um hobby paralelo.',
                'Rachel de Queiroz', 'Cora Coralina', 'Hilda Hilst', 'Carolina de Jesus', 'Cora Coralina' ),
            $q8 = array(
                'Este autor foi escolhido por Machado de Assis para ser o Patrono da cadeira número 23 da Academia Brasileira de Letras. 
                Ingressou no meio político, quando foi eleito como deputado no Ceará.',
                'Graciliano Ramos', 'Manuel Bandeira', 'Monteiro Lobato', 'José de Alencar', 'José de Alencar' ),
            $q9 = array(
                'Este autor construiu um santuário ao ar livre. A construção foi feita em São José do Belmonte, no estado de Pernambuco, local onde ocorre a cavalgada 
                inspirada em seu primeiro romance, Romance d’a pedra do reino. As três primeiras imagens do santuário são Jesus, Nossa Senhora e São José, que é o padroeiro do município.', 
                'Mário Quintana', 'José Evaristo', 'Ariano Suassuna', 'Manuel Bandeira', 'Ariano Suassuna' ),
            $q10 = array(
                'Aos 35 anos, esta autora passou a morar numa chácara em Campinas, a Casa do Sol, planejada com cuidado pela autora para ser um espaço de inspiração 
                e criação artística. Cercada por cachorros, morou lá até o fim de sua vida e não parou de produzir.', 
                'Adélia Prado', 'Ana Miranda', 'Carolina de Jesus', 'Hilda Hilst', 'Hilda Hilst')
        );
        function Inicio()
        {
            echo 
            '<tr>
                <td colspan="2">
                    <h2>Principais Escritores Brasileiros</h2>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" >
                    <input type="submit" name="enviar" value="Jogar" class="botao">
                </td>
            </tr>';
        }
        function Funcao0($quiz, $nome)
        {
            echo 
            '<tr>
                <td colspan="2">
                    <h2>Principais Escritores Brasileiros</h2>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="nome">Jogador:</label>
                    <input type="text" name="nome" value="'.$nome.'" disabled>

                </td>
            </tr>
            <tr>
                <td colspan="2" class="alternativa">
                    <p><label>'. $quiz[0][0].'</label></p><br/>
                    <input type="radio" name="alternativa" value="'.$quiz[0][1].'">'.$quiz[0][1].'<br/>
                    <input type="radio" name="alternativa" value="'.$quiz[0][2].'">'.$quiz[0][2].'<br/>
                    <input type="radio" name="alternativa" value="'.$quiz[0][3].'">'.$quiz[0][3].'<br/>
                    <input type="radio" name="alternativa" value="'.$quiz[0][4].'">'.$quiz[0][4].'<br/>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                <input type="submit" name="responder" value="Responder" class="botao">
                </td>
            </tr>
            ';
        }
        function Funcao1($quiz, $nome)
        {
            echo 
            '<tr>
                <td colspan="2">
                    <h2>Principais Escritores Brasileiros</h2>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="nome">Jogador:</label>
                    <input type="text" name="nome" value="'.$nome.'" disabled>

                </td>
            </tr>
            <tr>
                <td colspan="2" class="alternativa">
                    <p><label>'. $quiz[1][0].'</label></p><br/>
                    <input type="radio" name="alternativa" value="'.$quiz[1][1].'">'.$quiz[1][1].'<br/>
                    <input type="radio" name="alternativa" value="'.$quiz[1][2].'">'.$quiz[1][2].'<br/>
                    <input type="radio" name="alternativa" value="'.$quiz[1][3].'">'.$quiz[1][3].'<br/>
                    <input type="radio" name="alternativa" value="'.$quiz[1][4].'">'.$quiz[1][4].'<br/>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                <input type="submit" name="responder" value="Responder" class="botao">
                </td>
            </tr>
            ';
        }
        function Funcao2($quiz, $nome)
        {
            echo 
            '<tr>
                <td colspan="2">
                    <h2>Principais Escritores Brasileiros</h2>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="nome">Jogador:</label>
                    <input type="text" name="nome" value="'.$nome.'" disabled>

                </td>
            </tr>
            <tr>
                <td colspan="2" class="alternativa">
                    <p><label>'. $quiz[2][0].'</label></p><br/>
                    <input type="radio" name="alternativa" value="'.$quiz[2][1].'">'.$quiz[2][1].'<br/>
                    <input type="radio" name="alternativa" value="'.$quiz[2][2].'">'.$quiz[2][2].'<br/>
                    <input type="radio" name="alternativa" value="'.$quiz[2][3].'">'.$quiz[2][3].'<br/>
                    <input type="radio" name="alternativa" value="'.$quiz[2][4].'">'.$quiz[2][4].'<br/>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                <input type="submit" name="responder" value="Responder" class="botao">
                </td>
            </tr>
            ';
        }
        function Funcao3($quiz, $nome)
        {
            echo 
            '<tr>
                <td colspan="2">
                    <h2>Principais Escritores Brasileiros</h2>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="nome">Jogador:</label>
                    <input type="text" name="nome" value="'.$nome.'" disabled>

                </td>
            </tr>
            <tr>
                <td colspan="2" class="alternativa">
                    <p><label>'. $quiz[3][0].'</label></p><br/>
                    <input type="radio" name="alternativa" value="'.$quiz[3][1].'">'.$quiz[3][1].'<br/>
                    <input type="radio" name="alternativa" value="'.$quiz[3][2].'">'.$quiz[3][2].'<br/>
                    <input type="radio" name="alternativa" value="'.$quiz[3][3].'">'.$quiz[3][3].'<br/>
                    <input type="radio" name="alternativa" value="'.$quiz[3][4].'">'.$quiz[3][4].'<br/>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                <input type="submit" name="responder" value="Responder" class="botao">
                </td>
            </tr>
            ';
        }
        function Funcao4($quiz, $nome)
        {
            echo 
            '<tr>
                <td colspan="2">
                    <h2>Principais Escritores Brasileiros</h2>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="nome">Jogador:</label>
                    <input type="text" name="nome" value="'.$nome.'" disabled>

                </td>
            </tr>
            <tr>
                <td colspan="2" class="alternativa">
                    <p><label>'. $quiz[4][0].'</label></p><br/>
                    <input type="radio" name="alternativa" value="'.$quiz[4][1].'">'.$quiz[4][1].'<br/>
                    <input type="radio" name="alternativa" value="'.$quiz[4][2].'">'.$quiz[4][2].'<br/>
                    <input type="radio" name="alternativa" value="'.$quiz[4][3].'">'.$quiz[4][3].'<br/>
                    <input type="radio" name="alternativa" value="'.$quiz[4][4].'">'.$quiz[4][4].'<br/>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                <input type="submit" name="responder" value="Responder" class="botao">
                </td>
            </tr>
            ';
        }
        function Funcao5($quiz, $nome)
        {
            echo 
            '<tr>
                <td colspan="2">
                    <h2>Principais Escritores Brasileiros</h2>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="nome">Jogador:</label>
                    <input type="text" name="nome" value="'.$nome.'" disabled>

                </td>
            </tr>
            <tr>
                <td colspan="2" class="alternativa">
                    <p><label>'. $quiz[5][0].'</label></p><br/>
                    <input type="radio" name="alternativa" value="'.$quiz[5][1].'">'.$quiz[5][1].'<br/>
                    <input type="radio" name="alternativa" value="'.$quiz[5][2].'">'.$quiz[5][2].'<br/>
                    <input type="radio" name="alternativa" value="'.$quiz[5][3].'">'.$quiz[5][3].'<br/>
                    <input type="radio" name="alternativa" value="'.$quiz[5][4].'">'.$quiz[5][4].'<br/>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                <input type="submit" name="responder" value="Responder" class="botao">
                </td>
            </tr>
            ';
        }
        function Funcao6($quiz, $nome)
        {
            echo 
            '<tr>
                <td colspan="2">
                    <h2>Principais Escritores Brasileiros</h2>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="nome">Jogador:</label>
                    <input type="text" name="nome" value="'.$nome.'" disabled>

                </td>
            </tr>
            <tr>
                <td colspan="2" class="alternativa">
                    <p><label>'. $quiz[6][0].'</label></p><br/>
                    <input type="radio" name="alternativa" value="'.$quiz[6][1].'">'.$quiz[6][1].'<br/>
                    <input type="radio" name="alternativa" value="'.$quiz[6][2].'">'.$quiz[6][2].'<br/>
                    <input type="radio" name="alternativa" value="'.$quiz[6][3].'">'.$quiz[6][3].'<br/>
                    <input type="radio" name="alternativa" value="'.$quiz[6][4].'">'.$quiz[6][4].'<br/>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                <input type="submit" name="responder" value="Responder" class="botao">
                </td>
            </tr>
            ';
        }
        function Funcao7($quiz, $nome)
        {
            echo 
            '<tr>
                <td colspan="2">
                    <h2>Principais Escritores Brasileiros</h2>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="nome">Jogador:</label>
                    <input type="text" name="nome" value="'.$nome.'" disabled>

                </td>
            </tr>
            <tr>
                <td colspan="2" class="alternativa">
                    <p><label>'. $quiz[7][0].'</label></p><br/>
                    <input type="radio" name="alternativa" value="'.$quiz[7][1].'">'.$quiz[7][1].'<br/>
                    <input type="radio" name="alternativa" value="'.$quiz[7][2].'">'.$quiz[7][2].'<br/>
                    <input type="radio" name="alternativa" value="'.$quiz[7][3].'">'.$quiz[7][3].'<br/>
                    <input type="radio" name="alternativa" value="'.$quiz[7][4].'">'.$quiz[7][4].'<br/>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                <input type="submit" name="responder" value="Responder" class="botao">
                </td>
            </tr>
            ';
        }
        function Funcao8($quiz, $nome)
        {
            echo 
            '<tr>
                <td colspan="2">
                    <h2>Principais Escritores Brasileiros</h2>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="nome">Jogador:</label>
                    <input type="text" name="nome" value="'.$nome.'" disabled>

                </td>
            </tr>
            <tr>
                <td colspan="2" class="alternativa">
                    <p><label>'. $quiz[8][0].'</label></p><br/>
                    <input type="radio" name="alternativa" value="'.$quiz[8][1].'">'.$quiz[8][1].'<br/>
                    <input type="radio" name="alternativa" value="'.$quiz[8][2].'">'.$quiz[8][2].'<br/>
                    <input type="radio" name="alternativa" value="'.$quiz[8][3].'">'.$quiz[8][3].'<br/>
                    <input type="radio" name="alternativa" value="'.$quiz[8][4].'">'.$quiz[8][4].'<br/>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                <input type="submit" name="responder" value="Responder" class="botao">
                </td>
            </tr>
            ';
        }
        function Funcao9($quiz, $nome)
        {
            echo 
            '<tr>
                <td colspan="2">
                    <h2>Principais Escritores Brasileiros</h2>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="nome">Jogador:</label>
                    <input type="text" name="nome" value="'.$nome.'" disabled>

                </td>
            </tr>
            <tr>
                <td colspan="2" class="alternativa">
                    <p><label>'. $quiz[9][0].'</label></p><br/>
                    <input type="radio" name="alternativa" value="'.$quiz[9][1].'">'.$quiz[9][1].'<br/>
                    <input type="radio" name="alternativa" value="'.$quiz[9][2].'">'.$quiz[9][2].'<br/>
                    <input type="radio" name="alternativa" value="'.$quiz[9][3].'">'.$quiz[9][3].'<br/>
                    <input type="radio" name="alternativa" value="'.$quiz[9][4].'">'.$quiz[9][4].'<br/>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                <input type="submit" name="responder" value="Responder" class="botao">
                </td>
            </tr>
            ';
        }
        function Funcao10()
        {
            echo 
            '<tr>
                <td colspan="2">
                    <h2>Principais Escritores Brasileiros</h2>
                </td>
            </tr>
            
            <tr>
                <td colspan="2">
                    Mensagem
                </td>
            </tr>

            <tr>
                <td colspan="2">
                <input type="submit" name="reiniciar" value="Reiniciar Jogo" class="botao">
                </td>
            </tr>
            ';
        }
    ?>
    <form action="quiz.php" method="post">
        <table>
        <?php
         if (empty($_POST["enviar"])) {
            echo Inicio();
         }
         else if (isset($_POST["enviar"])) {
            $botao = $_POST["enviar"];
            while ($a >= 0 && $a <= 10) {
                if (isset($_POST["nome"])) {
                    $nome = $_POST["nome"];
                    while ($i <= 5) {
                        if ($a < 10) {
                            if (isset($_POST["Responder"] )&& $_POST["alternativa"] == $quiz[$a][5]) {
                                $pagina = 'Funcao'.$a.'($quiz, $nome)';
                                
                                echo '
                                <tr>
                                    <td colspan="2">
                                        <h2>Principais Escritores Brasileiros</h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label for="nome">Jogador:</label>
                                        <input type="text" name="nome" value="'.$nome.'" disabled>

                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="alternativa">
                                        <p><label>'. $quiz[$a][$i].'</label></p><br/>
                                        <input type="radio" name="alternativa" value="'.$quiz[$a][$i].'" disabled>'.$quiz[$a][$i].'<br/>
                                        <input type="radio" name="alternativa" value="'.$quiz[$a][$i].'" disabled>'.$quiz[$a][$i].'<br/>
                                        <input type="radio" name="alternativa" value="'.$quiz[$a][$i].'" disabled>'.$quiz[$a][$i].'<br/>
                                        <input type="radio" name="alternativa" value="'.$quiz[$i][$i].'" disabled>'.$quiz[$a][$i].'<br/>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2">
                                    <input type="submit" name="responder" value="Responder" class="botao" disabled>
                                    </td>
                                </tr>
                                <tr class="mensagem">
                                    <td colspan="2" class="acerto">
                                        Mensagem
                                        <input type="submit" name="continuar" value="Continuar" class="botao">
                                    </td>
                                </tr>';
                                if (isset($_POST["continuar"])) {
                                    $botao = $_POST["continuar"];
                                    echo $pagina;
                                }
        
                            } 
                            elseif (isset($_POST["Responder"]) && $_POST["alternativa"] != $quiz[$a][5]) {
                                $pagina = 'Funcao'.$a.'($quiz, $nome)';
                                
                                echo '
                                <tr>
                                    <td colspan="2">
                                        <h2>Principais Escritores Brasileiros</h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label for="nome">Jogador:</label>
                                        <input type="text" name="nome" value="'.$nome.'" disabled>

                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="alternativa">
                                        <p><label>'. $quiz[$a][$i].'</label></p><br/>
                                        <input type="radio" name="alternativa" value="'.$quiz[$a][$i].'" disabled>'.$quiz[$a][$i].'<br/>
                                        <input type="radio" name="alternativa" value="'.$quiz[$a][$i].'" disabled>'.$quiz[$a][$i].'<br/>
                                        <input type="radio" name="alternativa" value="'.$quiz[$a][$i].'" disabled>'.$quiz[$a][$i].'<br/>
                                        <input type="radio" name="alternativa" value="'.$quiz[$i][$i].'" disabled>'.$quiz[$a][$i].'<br/>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2">
                                    <input type="submit" name="responder" value="Responder" class="botao" disabled>
                                    </td>
                                </tr>
                                <tr class="mensagem">
                                    <td colspan="2" class="erro">
                                        Mensagem. A alternativa correta é: '.$quiz[$i][5].'
                                        <input type="submit" name="continuar" value="Continuar" class="botao">
                                    </td>
                                </tr>';
                                if (isset($_POST["continuar"])) {
                                    $botao = $_POST["continuar"];
                                    echo $pagina;
                                }
                            }
                            
                        }
                        elseif (isset($_POST["continuar"]) && $a == 10) {
                                $pagina = Funcao10();
                                echo $pagina;
                            }
                        $i++;
                        
                    }
                    
                }
            }
            $a++;
        }
         
        ?>
                
        </table>
    </form>
    <div class="container body-content">
        <footer>
            <div>
            </div>
            <div>
                
            </div>
        </footer>
    </div>
        
</body>
</html>