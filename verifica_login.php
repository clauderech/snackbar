<?php
    //Inicia a sessão
    session_start();
    //Conecção com o banco de dados.
    include_once('db_conn.php');
    
    //Recebe os dados da pagina de login
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $nome = 'user';
    $id = '';
    
    //pesquisa usuario no banco de dados
    $stmtusr = $conn->query("SELECT * FROM clientes WHERE email = '$login' AND senha = '$senha'");
    
    //Verifica se usuario exite
    while( $linha = $stmtusr->fetch(PDO::FETCH_ASSOC) ){
        $nome = $linha['nome_cliente'];
        $id = $linha['id_cliente'];
    }

    if($nome !== 'user') {
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        $_SESSION['nome'] = $nome;
        $_SESSION['id_cliente'] = $id;
        
        header('location:cardapio.php');
    }
    else {
        unset ($_SESSION['login']);
        unset ($_SESSION['senha']);
        unset ($_SESSION['nome']);
        unset ($_SESSION['id_cliente']);
        header('location:login.php');
    }
?>
