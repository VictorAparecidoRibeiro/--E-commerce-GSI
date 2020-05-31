<?php

    function PGChecarSessao($id, $login, $nome){
        $logado = PGSeleciona("usuarios","idusuario = $id and loginusuario = '$login' and nomeusuario = '$nome'","*","LIMIT 1");
        if($logado){
            return true;
        } else {
            return false;
        }
    }

    function PGChecarLogin( $login, $senha ) {
        $UsuarioLogado = PGSeleciona("usuarios", "loginusuario = '$login' and senhausuario = '$senha'","*","LIMIT 1");
        if ($UsuarioLogado) {
            session_cache_expire(30);
            session_start();
                foreach ($UsuarioLogado as $tab_usuario) {
                    $_SESSION['mv_user_id'] = $tab_usuario['idusuario'];
                    $_SESSION['mv_user_login'] = $tab_usuario['loginusuario'];
                    $_SESSION['mv_user_nome'] = $tab_usuario['nomeusuario'];
                }
               /* $logacesso = array (
                    'usuario'       => $_SESSION['user_login'],
                    'ipcomputador'  => getenv("REMOTE_ADDR")
                );
                $gravaLog = PGInsert('faz_logacesso', $logacesso);*/
            return true;
        } else {
            return false;
        }
    }

    //Alterar Registros no Banco de dados
    function PGAlterar($tabela, $dados, $condicao = null) {
        foreach ($dados as $key => $value) {
            $colunas[] = "{$key} = '{$value}'";
        }
        $colunas = implode(", ", $colunas);
        $condicao = ($condicao) ? " WHERE {$condicao}" : null;
        /* var_dump($condicao); */
        $query = "UPDATE {$tabela} SET {$colunas}{$condicao}";
        var_dump($query);exit();
        return PGExecute($query);
    }

    function PGInsert($tabela, $dados, $insertID = false) {
        $dados = PGEscape($dados);
        /* Retorna o indice do Array DADOS que foi passado nessa função */
        /* a função array_keys Retorna o nome do indice e não o valor */
        $colunas = implode(", ", array_keys($dados));
        /* var_dump($colunas);exit(); */
        /* Retorna os valores do Array DADOS que foi passado nessa função */
        $valores = "'" . implode("','", $dados) . "'";
        /* Montando a query para inserir no banco de dados */
        $query = "INSERT INTO {$tabela} ( {$colunas} ) VALUES ( {$valores});";
        /*var_dump($query);exit();*/

        /* Retorna  Verdadeiro ou Falso, retornado pela funcao DBExecute() */
        return PGExecute($query);
    }

        function PGDelete($tabela, $condicao = null) {
        $dados = PGEscape($dados);
        $condicao = ($condicao) ? " WHERE {$condicao}" : null;
        /* Montando a query para inserir no banco de dados */
        $query = "DELETE FROM {$tabela} WHERE {$condicao};";
        // var_dump($query);
        /* Retorna  Verdadeiro ou Falso, retornado pela funcao DBExecute() */
        return PGExecute($query);
    }
    // Ler Resgistros no Banco de dados
    function PGSeleciona($tabela, $parametros = null, $campos = '*', $ordem = null) {
    $parametros = ($parametros) ? " WHERE {$parametros}" : null;
    $query = "SELECT {$campos} FROM {$tabela}{$parametros} {$ordem}" ;
    //var_dump($query);exit();
    $resultado = PGExecute($query);
//    if (!pg_affected_rows($resultado)) {
    if (!pg_num_rows($resultado)) {
        return false;
    } else {
        while ($res = pg_fetch_assoc($resultado)) {
            $dados[] = $res;
        }
        return $dados;
    }
}

/* Executa Querys no Banco de Dados e returna Verdadeiro(true) se caso der certo. */

function PGExecute($query, $insertID = false) {
    $link = PGConnect();
    $resultado = @pg_query($link, $query) or die(false); 
    /*
"<script>alert('Ocorreu um erro na URL informada ou o usuário não está logado. Contacte o Administrador do sistema.');window.location.href = 'index.php';</script>"
    */
        if (!$link) {
            echo "<script type='text/javascript'> alert('Erro ao conectar ao banco de dados!)</script>";
            exit;
        }
    PGClose($link);
    return $resultado;
    }

?>