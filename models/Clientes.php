<?php
class Clientes extends model {

    public function getQuantidade(){
        $sql = "SELECT COUNT(*) as quantidadeClientes FROM cliente";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $sql = $sql->fetch();
            return $sql['quantidadeClientes'];
        } else {
            return 0;
        }
    }

}