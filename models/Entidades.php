<?php
class Entidades extends model {
    
    private $entidadeInfo;

    public function __construct($id)
    {
        parent::__construct();

        $sql = $this->db->prepare("SELECT * FROM entidade WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $this->entidadeInfo = $sql->fetch();
        }
    }

    public function getNome(){
        if (isset($this->entidadeInfo['nome'])) {
            return $this->entidadeInfo['nome'];
        } else {
            return '';
        }
    }
}