<?php
    //Conecção com o banco de dados
    require_once ('db_conn.php');
    echo "<hr>";
    
    //receber os dados do cliente
    $dados_client = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    
    $nome = $dados_client['nome'];
    $fone = $dados_client['fone'];
    $bairro = $dados_client['bairro'];
    $rua = $dados_client['rua'];
    $numero = $dados_client['numero'];
    $endereco = "$bairro $rua, $numero";
    $email = $dados_client['email'];
    $senha = $dados_client['password'];
    $email_exist = 'N/A';
    $id_cliente = 'N/A';

    require('envia_email.php'); 
    
    //Verificar se ja existe o cliente registrado
    $stmtcli = $conn->query( "SELECT id_cliente, email FROM clientes WHERE email = '$email'" );
        while( $linha_cli = $stmtcli->fetch(PDO::FETCH_ASSOC) ){
            $email_exist = $linha_cli['email'];
            $id_cliente = $linha_cli['id_cliente'];
        }
    
    //Se o cliente não existir cria um novo
    if ($email !== $email_exist) {
        //Inserir dados na tabela cliente
        $stmt = $conn->prepare("INSERT INTO clientes (nome_cliente,fone,endereco,email,senha) 
        VALUES (:nome, :fone, :endereco, :email, :senha)");
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':fone', $fone);
            $stmt->bindParam(':endereco', $endereco);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
        $stmt->execute();

    }   
   
?>


