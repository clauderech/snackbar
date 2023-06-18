<?php
    //Conecção com o banco de dados
    require_once ('db_conn.php');
    
    session_start();
    
    if(isset($_SESSION['id_cliente'])) {
        try {
            //receber os dados do pedido
            $dados_pedido = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            //$pedido = $dados_pedido['pedido'];
            $id_cliente = $_SESSION['id_cliente'];
            //Inserir o id do cliente na tabela NumPedido e gerar um numero de pedido.
            $stmtNP = $conn->prepare("INSERT INTO NumPedido (id_cliente) VALUES(:id_cliente)");
            //passar a string $linha para inteiro.
            $id_cliente = intval($id_cliente);
            $stmtNP->bindParam(':id_cliente', $id_cliente);
            $stmtNP->execute();

            //Pesquisar o ultimo numero de pedido e o id_cliente
            $numpedido = $conn->query("SELECT id_pedido, id_cliente FROM NumPedido ORDER BY id_pedido DESC LIMIT 1");
            $id_pedido = '';
            $num_cliente = '';
            while( $linha = $numpedido->fetch(PDO::FETCH_ASSOC) ){
                $id_pedido = $linha['id_pedido'];
                $num_cliente = $linha['id_cliente'];
            }

            //Inserir pedido na tabela pedidos
            $stmtP = $conn->prepare("INSERT INTO Pedido (id_pedido,id_cliente,id_item,qtde,val_unit,observ)
            VALUES (:id_pedido, :id_cliente, :id_item, :qtde, :val_unit, :observ)");
            //Passar a string $pedido para um objeto json.
            $cart = json_decode($dados_pedido['pedido']);
            //Extrair os dados com foreach e inserir na tabela pedido
            foreach ($cart as $c) {
                $stmtP->bindParam(':id_pedido', $id_pedido);
                $stmtP->bindParam(':id_cliente', $num_cliente);
                $stmtP->bindParam(':id_item', $c->id);
                $stmtP->bindParam(':qtde', $c->qt);
                $stmtP->bindParam(':val_unit', $c->price);
                $stmtP->bindParam(':observ', $c->observacao);
                $stmtP->execute();
            }
            echo "Tudo certo!\nLogo retornamos para confirmar seu pedido.";
        } catch (Exception $e) {
            echo 'Houve um erro:';
            echo 'Exceção capturada: ' . $e->getMessage(), "\n";
        }

    }else{
        echo "Desculpe!\n\nVocê precisa estar logado, para fazer um pedido.";
    }
   
?>
