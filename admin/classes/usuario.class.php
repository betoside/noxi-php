<?php
class Usuarios {

    public function login($email, $senha)
    {
        global $pdo;

        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', $senha);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $dados = $sql->fetch();
            $_SESSION['noxiLogin'] = $dados['id'];
            return true;
        } else {
            return false;
        }


    }

    public function getUser($id)
    {
        global $pdo;

        $sql = $pdo->query("SELECT * FROM usuarios WHERE id = '$id'");
        $row = $sql->fetch();
        return $row;

    }

    public function editar($id, $nome, $email, $senha = '')
    {        
        global $pdo;

        $sql = "UPDATE usuarios SET nome = :nome, email = :email";

        if (!empty($senha)) {
            $senha = md5($senha);
            $sql .= ", senha = '$senha'";
        }
        $sql .= " WHERE id = '$id'";
        
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":email", $email);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $sql = $pdo->query("SELECT * FROM usuarios WHERE id = '$id'");
            $row = $sql->fetch();
            return $row;
        }
        
    }

}