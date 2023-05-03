<?php
class Usuarios extends model {

    public function isLogged(){
        if(isset($_SESSION['sessionName']) && !empty($_SESSION['sessionName'])){
            return true;
        } else {
            return false;
        }
    }

    public function doLogin($email, $password){
        $sql = $this->db->prepare("SELECT * FROM usuario WHERE email = :email AND password = :password");
        $sql->bindValue(':email', $email);
        $sql->bindValue(':password', md5($password));
        $sql->execute();

        if($sql->rowCount() > 0){
            $row = $sql->fetch();
            $_SESSION['sessionName'] = $row['nome'];
            $_SESSION['sessionEmail'] = $row['email'];
            $_SESSION['sessionId'] = $row['id'];
            $_SESSION['sessionIdEntidade'] = $row['id_entidade'];
            return true;
        } else {
            return false;
        }
    }

    public function getQuantidade(){
        $sql = "SELECT COUNT(*) as quantidadeUsuarios FROM usuario";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $sql = $sql->fetch();
            return $sql['quantidadeUsuarios'];
        } else {
            return 0;
        }
    }
}