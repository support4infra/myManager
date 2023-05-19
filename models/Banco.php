<?php
class Banco extends model {

    public function getListBanco($id_entidade){
        $array = array();

        $sql = $this->db->prepare("SELECT * FROM cadastro_banco WHERE id_entidade = :id_entidade");
        $sql->bindValue(':id_entidade', $id_entidade);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

}