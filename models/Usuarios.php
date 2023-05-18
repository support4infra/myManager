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
            $_SESSION['sessionGrupo'] = $row['grupo'];
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

        $sql = $this->db->prepare("SELECT usuario.id, usuario.nome, usuario.email, grupo_permissao.nome as nomegrupo FROM usuario LEFT JOIN grupo_permissao ON grupo_permissao.id = usuario.grupo WHERE usuario.id_entidade = :id_entidade");
        $sql->bindValue(':id_entidade', $id_entidade);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function getUsuario($id, $id_entidade){
        $array = array();

        $sql = $this->db->prepare("SELECT usuario.id, usuario.nome, usuario.password, usuario.email, grupo_permissao.nome as nomegrupo FROM usuario LEFT JOIN grupo_permissao ON grupo_permissao.id = usuario.grupo WHERE usuario.id_entidade = :id_entidade AND usuario.id = :id");
        $sql->bindValue(':id', $id);
        $sql->bindValue(':id_entidade', $id_entidade);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
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

    public function pesquisaUsuariosNoGrupo($id){
        $sql = $this->db->prepare("SELECT COUNT(*) as c FROM usuario WHERE grupo = :grupo");
        $sql->bindValue(':grupo', $id);
        $sql->execute();
        $row = $sql->fetch();
        if ($row['c'] == '0') {
            return false;
        } else {
            return true;
        }
    }

    public function addUsuario($email, $nome, $password, $grupo, $id_entidade){
        $sql = $this->db->prepare("INSERT INTO usuario SET id_entidade = :id_entidade, grupo = :grupo, nome = :nome, email = :email, password = :password");
        $sql->bindValue(":id_entidade", $id_entidade);
        $sql->bindValue(":grupo", $grupo);
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":password", $password);
        $sql->execute();
    }

    public function editUsuario($email, $nome, $password, $grupo, $id){
        $sql = $this->db->prepare("UPDATE usuario SET email = :email, nome = :nome, password = :password, grupo = :grupo WHERE id = :id");
        $sql->bindValue(":email", $email);
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":password", $password);
        $sql->bindValue(":grupo", $grupo);
        $sql->bindValue(":id", $id);
        $sql->execute();
    }

    public function deletUsuario($id){
        $sql = $this->db->prepare("DELETE FROM usuario WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
    }
}