<?php
class Licencas extends model {

    public function getLicencas(){
        $sql = "SELECT * FROM licenca";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $sql = $sql->fetch();
            print_r($sql);
        } else {
            return 0;
        }
    }

}