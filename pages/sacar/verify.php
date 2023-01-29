<?php 

    include('../../app/sql_conection.php');
    include('../../app/user_vars.php');

    $id = $user_id;
    $all_name = $user_name . ' ' . $user_lastName . ' - ' . $user_cpf;
    $valor = $_REQUEST['valor'];
    $new_balance = $user_balance - $valor;
    $date = date('Y-m-d');
    
    if ($valor <= $user_balance){

        $sql = "INSERT INTO withdrawal_request (client_id, nome, valor, data) VALUES ('$user_id', '$all_name', '$valor', '$date')";
    
        if ($conn->query($sql) === TRUE) {
    
            $sql = "UPDATE usuarios SET saldo='$new_balance' WHERE cpf='$user_cpf'";
    
            if ($conn->query($sql) === TRUE) {
                echo $valor;
                echo '<br>';
                echo $user_balance;
                // echo '<script>window.location.href = "../dashboard/";</script>';
            } else {
                echo $valor;
                echo '<br>';
                echo $user_balance;
                // echo '<script>window.location.href = "../dashboard/";</script>';
            }    
    
        }
        
    }else{
        echo '<script>alert("Valor invalido!");</script>';
        echo $valor;
        echo '<br>';
        echo $user_balance;
        // echo '<script>window.location.href = "./";</script>';
    }

 ?>