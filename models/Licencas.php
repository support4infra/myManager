<?php
class Licencas extends model {

    public function getQuantidade(){
        $sql = "SELECT COUNT(*) as quantidadeLicencas FROM licenca";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $sql = $sql->fetch();
            return $sql['quantidadeLicencas'];
        } else {
            return 0;
        }
    }

    public function getQuantidadeLicencaVencida(){
        $sql = "SELECT COUNT(*) as quantidadeLicencasVencidas FROM licenca where validade <= CURDATE( )";
        $sql = $this->db->query($sql);

            if ($sql->rowCount() > 0) {
                $sql = $sql->fetch();
                return $sql['quantidadeLicencasVencidas'];
            } else {
                return 0;
            }
    }

}