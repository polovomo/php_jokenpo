<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Jokenpô - PHP</title>

</head>
<body>
    <h1>Jokenpô</h1>
    
    <?php
    // Definir as opções do jogo
    $opcoes = [
        'pedra' => 'Pedra',
        'papel' => 'Papel', 
        'tesoura' => 'Tesoura'
    ];
    
    // Inicializar variáveis
    $jogadorEscolha = '';
    $computadorEscolha = '';
    $resultado = '';
    $classeResultado = '';
    
    // Processar a jogada se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['jogada'])) {
        $jogadorEscolha = $_POST['jogada'];
        
        // Computador faz escolha aleatória
        $opcoesArray = array_keys($opcoes);
        $computadorEscolha = $opcoesArray[array_rand($opcoesArray)];
        
        // Determinar o resultado
        if ($jogadorEscolha == $computadorEscolha) {
            $resultado = "Empate!";
            $classeResultado = "empate";
        } else if (
            ($jogadorEscolha == 'pedra' && $computadorEscolha == 'tesoura') ||
            ($jogadorEscolha == 'papel' && $computadorEscolha == 'pedra') ||
            ($jogadorEscolha == 'tesoura' && $computadorEscolha == 'papel')
        ) {
            $resultado = "Você venceu! ";
            $classeResultado = "vitoria";
        } else {
            $resultado = "Computador venceu! ";
            $classeResultado = "derrota";
        }
    }
    ?>
    
    <div class="jogador">
        <h2>Sua Escolha</h2>
        <div class="jogada">
            <?php if ($jogadorEscolha): ?>
                <img src="img/<?php echo $jogadorEscolha; ?>.png" alt="<?php echo $opcoes[$jogadorEscolha]; ?>">
                <p><?php echo $opcoes[$jogadorEscolha]; ?></p>
            <?php else: ?>
                <img src="img/usu.png" alt="Aguardando">
                <p>Faça sua escolha</p>
            <?php endif; ?>
        </div>
    </div>

    <div class="escolhas">
        <form method="post">
            <button type="submit" name="jogada" value="tesoura" class="escolha-btn">
                <img src="img/tesoura.png" alt="Tesoura">
                <br>Tesoura
            </button>
            
            <button type="submit" name="jogada" value="pedra" class="escolha-btn">
                <img src="img/pedra.png" alt="Pedra">
                <br>Pedra
            </button>
            
            <button type="submit" name="jogada" value="papel" class="escolha-btn">
                <img src="img/papel.png" alt="Papel">
                <br>Papel
            </button>
        </form>
    </div>
    
    
    <div class="vs">VS</div>
    
    <div class="maquina">
        <h2>Escolha da Máquina</h2>
        <div class="jogada">
            <?php if ($computadorEscolha): ?>
                <img src="img/<?php echo $computadorEscolha ; ?>.png" alt="<?php echo $opcoes[$computadorEscolha]; ?>">
                <p><?php echo $opcoes[$computadorEscolha]; ?></p>
            <?php else: ?>
                <img src="img/usu.png" alt="Aguardando">
                <p>Aguardando sua jogada</p>
            <?php endif; ?>
        </div>
    </div>
    
    <?php if ($resultado): ?>
        <div class="resultado <?php echo $classeResultado; ?>">
            <?php echo $resultado; ?>
        </div>
    <?php endif; ?>
    

    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
        <form method="get">
            <button type="submit" class="btn-jogar">Jogar Novamente</button>
        </form>
    <?php endif; ?>
</body>
</html>