<?php
class Usuarios extends model {

    private $userInfo;
    private $perfil;

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

    public function setLoggedUsuario(){
        if(isset($_SESSION['sessionName']) && !empty($_SESSION['sessionName'])){
            $id = $_SESSION['sessionId'];
            $sql = $this->db->prepare("SELECT * FROM usuario WHERE id = :id");
            $sql->bindValue(':id', $id);
            $sql->execute();

            if ($sql->rowCount() > 0) {
                $this->userInfo = $sql->fetch();
                $this->perfil = new Perfil();
                $this->perfil->setGrupo($this->userInfo['grupo'], $this->userInfo['id_entidade']);
            }
        }
    }

    public function getEntidade() {
        if (isset($this->userInfo['id_entidade'])) {
            return $this->userInfo['id_entidade'];
        } else {
            return 0;
        }
    }

    public function logout(){
        unset($_SESSION['sessionName']);
    }

    public function getListUsuario($id_entidade){
        $array = array();

        $sql = $this->db->prepare("SELECT * FROM usuario WHERE id_entidade = :id_entidade");
        $sql->bindValue(':id_entidade', $id_entidade);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function hasPermission($nome){
        return $this->perfil->hasPermission($nome);
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