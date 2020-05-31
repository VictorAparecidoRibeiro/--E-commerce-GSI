<?php
/* Protege contra SQL Injection, que são 'Aspas Simples' em querySQL */

    function PGEscape($dados) {
        $link = PGConnect();
        /* Se a minha variavel não for um array */
        if (!is_array($dados)) {
            $dados = pg_escape_string($link, $dados);
        } else {
            $arr = $dados;
            foreach ($arr as $key => $value) {
                $key = pg_escape_string($link, $key);
                $value = pg_escape_string($link, $value);

                $dados[$key] = $value;
            }
        }
        PGClose($link);
        return $dados;
    }

    /* Fecha Conexão do Postgres */

    function PGClose($link) {
        @pg_close($link) or die(@pg_result_error($link));
    }

    /* abrir com a Conexão do Postgres */

    function PGConnect() {
        /*$link = pg_connect("host=localhost port=5432 dbname=bd-turma73 user=turma73 password=turma73");*/
        $link = pg_connect(PG_HOSTNAME . PG_PORTHOST . PG_DATABASE . PG_USERNAME . PG_PASSWORD) or die("Não foi possivel conectar ao servidor PostGreSQL");
        /* Definindo a codifição de caracteres */

        return $link;
    }

?>
