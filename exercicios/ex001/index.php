<?php 
$arquivo_jogadores = file('jogadores.txt');
$arquivo_times = file('times.txt');
$arquivo_jogador_time = file('jogadortime.txt');

for ($i = 0; $i < count($arquivo_jogadores); $i++) {
    $dados_jogador = explode(';', $arquivo_jogadores[$i]);
    $codigo_jogador = $dados_jogador[0];
    $nome_jogador = $dados_jogador[1];
    $codigo_time_jogador = $dados_jogador[2];

    for ($j = 0; $j < count($arquivo_times); $j++) {
        $dados_time = explode(';', $arquivo_times[$j]);
        $codigo_time = $dados_time[0];
        $nome_time = $dados_time[1];

        if ($codigo_time_jogador == $codigo_time) {
            echo "$nome_jogador -> $nome_time<br>";
            break; 
        }
    }
}

$mapa_jogadores = [];
foreach ($arquivo_jogadores as $linha) {
    $dados_jogador = explode(';', $linha);
    $codigo_jogador = $dados_jogador[0];
    $codigo_time_jogador = $dados_jogador[1];

    if ($codigo_time_jogador == 2) {
        $mapa_jogadores[$codigo_jogador] = true;
    }
}



?>