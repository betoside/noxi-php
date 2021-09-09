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

}