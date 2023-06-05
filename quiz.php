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
        $nome = '';
        $botao = '';

    ?>
    <form action="quiz.php" method="post">
        <table>
            <tr>
                <td colspan="2">
                    <h2>Principais Escritores Brasileiros</h2>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" value="<?php  ?>">
                    <input type="submit" name="enviar" value="Jogar" class="botao">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label><?php?></label><br/>
                    <input type="radio" name="alternativa" value="<?php ?>"><br/>
                    <input type="radio" name="alternativa" value="<?php ?>"><br/>
                    <input type="radio" name="alternativa" value="<?php ?>"><br/>
                    <input type="radio" name="alternativa" value="<?php ?>"><br/>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="enviar1" value="Responder" class="botao">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="enviar2" value="Continuar" class="botao">
                </td>
            </tr>
        </table>
    </form>
    
        <footer>
            <div></div>
        </footer>
</body>
</html>