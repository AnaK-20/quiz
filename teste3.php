<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Principais Escritores Brasileiros</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='quiz.css'>
    <script src='main.js'></script>
</head>
<body>
<?php
session_start();
$quiz_title = "Filmes da Barbie";

// Verifica se o jogador já está registrado
if (!isset($_SESSION['player_name'])) {
    // Se o jogador não estiver registrado, verifica se o nome foi enviado via formulário
    if (isset($_POST['player_name'])) {
        $_SESSION['player_name'] = $_POST['player_name'];
    } else {
        // Se o nome não foi enviado, exibe o formulário de registro
        ?>
        <form method="POST" action="">
            <label for="player_name">Nome do jogador:</label>
            <input type="text" id="player_name" name="player_name" required>
            <button type="submit">Registrar</button>
        </form>
        <?php
        exit(); // Encerra o script até que o nome seja registrado
    }
}

// Define as perguntas e respostas
$questions = array(
   // Pergunta 01
   array(
    'question' => 'Complete a música:<br><br>
    Eu sou assim
    ____________
    Como você
    ____________',
    'points' => 10,
    'answers' => array(
        'a' => 'eu sou assim, como você',
        'b' => 'eu sei que é, eu posso ver',
        'c' => 'eu sou assim, eu sei que é',
        'd' => 'eu sei que é, igual a tu'
    ),
    'correct_answer' => 'a'
),
// Pergunta 02
array(
    'question' => 'De que filme é a gatinha Miette?',
    'points' => 10,
    'answers' => array(
        'a' => 'Barbie e o castelo de diamentes',
        'b' => 'Barbie em a princesa e a plebeia',
        'c' => 'Barbie e as três mosqueiteiras',
        'd' => 'Barbie Fairytopia'
    ),
    'correct_answer' => 'c'
),
// Pergunta 03
array(
    'question' => 'De qual personagem é essa frase?<br>
    "É isso! Quando a Barbie cair aqui vai virar porcaria igual ao filme dela."',
    'points' => 10,
    'answers' => array(
        'a' => 'Skipper',
        'b' => 'Raquelle',
        'c' => 'Teresa',
        'd' => 'Grace'
    ),
    'correct_answer' => 'b'
),
// Pergunta 04
array(
    'question' => 'De que filme é essa Barbie?',
    'points' => 10,
    'answers' => array(
        'a' => 'Barbie lago do cisnes',
        'b' => 'Barbie: O quebra nozes',
        'c' => 'Barbie em a princesa e aplebeia',
        'd' => 'Barbie como rapunzel'
    ),
    'correct_answer' => 'd'
),
// Pergunta 05
array(
    'question' => 'O primeiro filme da Barbie lançou em que ano?',
    'points' => 10,
    'answers' => array(
        'a' => '1980',
        'b' => '1987',
        'c' => '1991',
        'd' => '1997'
    ),
    'correct_answer' => 'b'
),
//Pergunta 06
array(
    'question' => 'No filme Barbie em A princesa e a Pebleia, as duas trocam de papel.<br>
    Em que outro filme da barbie o mesmo acontece?',
    'points' => 10,
    'answers' => array(
        'a' => 'Barbie escola de princesa',
        'b' => 'Barbie Butterfly',
        'c' => 'Barbie a princesa e a popstar',
        'd' => 'Barbie rainhas do rock'
    ),
    'correct_answer' => 'c'
),
//Pergunta 07
array(
    'question' => 'Qual o nome da personagem da Barbie em Barbie e as três mosqueteiras?',
    'points' => 10,
    'answers' => array(
        'a' => 'Corinni',
        'b' => 'Odette',
        'c' => 'Henna',
        'd' => 'Anneliese'
    ),
    'correct_answer' => 'a'
),
//Pergunta 08
array(
    'question' => 'Barbie era uma excelente atriz, porém foi despedida em Barbie Moda e Magia, por quê?',
    'points' => 10,
    'answers' => array(
        'a' => 'A Barbie foi rude e teve uma briga com o diretor do filme.',
        'b' => 'Uma outra atriz inventou uma mentira prejudicando a relação de Barbie com o diretor do filme.',
        'c' => 'Uma outra atriz brigou com a Barbie causando a demissão de ambas.',
        'd' => 'Barbie faltava muito aos ensaios.'
    ),
    'correct_answer' => 'b'
),
//Pergunta 09
array(
    'question' => 'Barbie tem uma mascote chamado Pipoca em qual filme?',
    'points' => 10,
    'answers' => array(
        'a' => 'Barbie e os golfinhos mágicos',
        'b' => 'Barbie: Aventura nas estrelas',
        'c' => 'Barbie em um mundo de videogame',
        'd' => 'Barbie e as agentes secretas'
    ),
    'correct_answer' => 'b'
),
// Pergunta 10
array(
    'question' => 'Em que ano, Barbie e o Quebra-Nozes foi lançado?',
    'points' => 10,
    'answers' => array(
        'a' => '1998',
        'b' => '1999',
        'c' => '2000',
        'd' => '2001'
    ),
    'correct_answer' => 'd'
)
);

// Verifica se o jogador já respondeu todas as perguntas
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
            <h1><?php echo $quiz_title; ?></h1>
            <h3>Pergunta <?php echo $current_question + 1; ?></h3>
            <h4><?php echo $question; ?></h4>
            <table>
                <tr>
                    <td><p>Valor da pergunta: <?php echo $points; ?> pontos</p></td>
                    <td><p>Jogador: <?php echo $_SESSION['player_name']; ?></p> <!-- Adiciona o nome do jogador --></td>
                </tr>
            </table>
            <form method="POST" action="">
                <?php foreach ($answers as $key => $answer) { ?>
                    <table>
                        <tr>
                            <td><input type="radio" id="<?php echo $key; ?>" name="answer" value="<?php echo $key; ?>" required hidden></td>
                            <td><label for="<?php echo $key; ?>"><?php echo $answer; ?></label><br><br></td>
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
    $_SESSION['quiz_completed'] = true;
    $score = $_SESSION['score'];
    ?>
    <h1><?php echo $quiz_title; ?></h1>
    <?php
    if ($score >= 60) {
        echo '<p>Parabéns, ' . $_SESSION['player_name'] . '! Sua pontuação final foi: ' . $score . ' pontos</p>';
    } else {
        echo '<p>Que pena, ' . $_SESSION['player_name'] . '! Sua pontuação final foi: ' . $score . ' pontos</p>';
        echo '<p>Tente mais uma vez!</p>';
    }
    ?>
    <div class="container">
        <div class="area">
            <form method="POST" action="">
                <button class="my-button" type="submit" name="restart">Jogar Novamente</button>
            </form>
            <form method="POST" action="">
                <button class="my-button" type="submit" name="register_new">Registrar Novo Jogador</button>
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
}
?>

    
</body>
</html>