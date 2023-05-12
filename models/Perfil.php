<?php
class Perfil extends model {

    private $grupo;
    private $permissao;

    public function setGrupo($id, $id_entidade){
        $this->grupo = $id;
        $this->permissao = array();

        $sql = $this->db->prepare("SELECT parametros FROM grupo_permissao WHERE id = :id AND id_entidade = :id_entidade");
        $sql->bindValue(':id',$id);
        $sql->bindValue(':id_entidade', $id_entidade);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $row = $sql->fetch();

            if (empty($row['parametros'])) {
                $row['parametros'] = '0';
            }

            $parametros = $row['parametros'];

            $sql = $this->db->prepare("SELECT nome FROM permissao WHERE id IN ($parametros) AND id_entidade = :id_entidade");
            $sql->bindValue(':id_entidade', $id_entidade);
            $sql->execute();

            if ($sql->rowCount() > 0) {
                foreach($sql->fetchAll() as $item) {
                    $this->permissao[] = $item['nome'];
                }
            }
        }
    }

    public function getListPerfil($id_entidade){
        $array = array();

        $sql = $this->db->prepare("SELECT * FROM grupo_permissao WHERE id_entidade = :id_entidade");
        $sql->bindValue(':id_entidade', $id_entidade);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function getListPermissao($id_entidade){
        $array = array();

        $sql = $this->db->prepare("SELECT * FROM permissao WHERE id_entidade = :id_entidade");
        $sql->bindValue(':id_entidade', $id_entidade);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function addPerfil($nomePerfil, $listaPerfil, $id_entidade){
        $parametros = implode(',', $listaPerfil);
        $sql = $this->db->prepare("INSERT INTO grupo_permissao SET nome = :nomePerfil, id_entidade = :id_entidade, parametros = :parametros");
        $sql->bindValue(":nomePerfil", $nomePerfil);
        $sql->bindValue(":id_entidade", $id_entidade);
        $sql->bindValue(":parametros", $parametros);
        $sql->execute();
    }

    public function deletPerfil($id){
        $Usuarios = new Usuarios();
        if ($Usuarios->pesquisaUsuariosNoGrupo($id) == false) {
            $sql = $this->db->prepare("DELETE FROM grupo_permissao WHERE id = :id");
            $sql->bindValue(":id", $id);
            $sql->execute();    
        }
    }

    public function hasPermission($nome) {
        if (in_array($nome, $this->permissao)) {
            return true;
        } else {
            return false;
        }
    }

}