<?php
    switch ($_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5 ($_POST["senha"]);
            $data_nasc = $_POST["data-nasc"];

            $sql = "INSERT INTO cadastro (nome, email, senha, data_cadastro) values ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";
            $res= $conn->query($sql);

            if($res == true){
                print "<script>alert('Cadastro com sucesso'); </script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel cadastrar'); </script>";
                print "<script>location.href='?page=listar';</script>";
            }

        break;
        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5 ($_POST["senha"]);
            $data_nasc = $_POST["data-nasc"];

                $sql ="UPDATE cadastro SET 
                nome='{$nome}',
                email='{$email}',
                senha='{$senha}',
                data_cadastro='{$data_nasc}'
                WHERE id=".$_REQUEST["id"];

            $res= $conn->query($sql);

            if($res == true){
                print "<script>alert('Editado com sucesso'); </script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel editar'); </script>";
                print "<script>location.href='?page=listar';</script>";
            }


        break;
        
        case 'excluir':
            $sql = "DELETE FROM cadastro WHERE id=".$_REQUEST["id"];
            $res= $conn->query($sql);

            if($res == true){
                print "<script>alert('Excluido com sucesso'); </script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel excluir'); </script>";
                print "<script>location.href='?page=listar';</script>";
            }
      
            break;
    }

