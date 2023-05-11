<?php
class Bancada extends model {

    public function getBancada(){
        $sql = "SELECT * FROM glpi_consult_website WHERE categoria like 'INFRAESTRUTURA > EQUIPAMENTO BANCADA%' order by ticket desc;";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $sql = $sql->fetch();
        } else {
            return 0;
        }
    }

    public function getSpecificBancada($ticket){
        $sql = "SELECT * FROM glpi_consult_website WHERE ticket = :ticket AND categoria like 'INFRAESTRUTURA > EQUIPAMENTO BANCADA%'";
        $sql = $this->db->query($sql);
        $sql->bindValue(':ticket', $ticket);
        $sql->execute();

        $sql = $sql->fetch();

        //Variaveis
        $emails = "";
        $i = 0;
        
        //Repetição para amarzenar todos os e-mails existentes no chamado
        if ($sql->rowCount() > 0) {
            //Recebe o número da ID do usuário requerente do chamado
            $id_usuario = $sql['id_usuario'];

            //Caso a ID seja 0, o requerente tem um e-mail que não é cadastrado no glpi.
            //Caso a ID seja diferente de 0, o requerente tem cadastro no glpi.
            if($id_usuario != 0){
                //Pesquisa no banco as usuários com acesso criado no glpi - Solução para campos do e-mail em branco na View glpi_consult_website
                $sql2 = "SELECT name FROM glpi_users WHERE id = :id_usuario";
                $sql2 = $this->db->query($sql2);
                $sql2->bindValue(':id_usuario', $id_usuario);
                $sql2->execute();

                $email_linha_atual = $sql2['name'];
            }else{
                $email_linha_atual = $sql['email_inserido'];
            }

            //Condição para inserir |, caso tenha mais de 1 e-mail - SEPARAR
            if($email_linha_atual != ""){
                if($i >= 1){
                    $emails.= " | ".$email_linha_atual;
                }else{
                    $emails .= $email_linha_atual;
                }
            }
            else{
            }
            $i++;

            return true;
        } else {
            return false;
        }
    }

    public function insertEndBancada($numero_chamado, $data_retirada, $nome_resposavel_retirada, $documento_resposavel_retirada, $telefone_resposavel_retirada, $tecnico_resposavel_entrega, $observacao){
        //Data no fuso horario de SP
        date_default_timezone_set('America/Sao_Paulo');
        
        /* COMO POSSO PEGAR A VARIAVEL DO INPUT DA FOTO?
        //pega a extensao do arquivo
        $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); 
        //Codição para adicionar um . no inicio da extensão para extensões que não entregam com o .
        $validar = strpos($extensao, '.');
        if($validar === false){
            $extensao = ".".$extensao; 
        }
        //define o nome do arquivo
        $novo_nome_arquivo = md5(time()).$extensao; 
        //define o diretorio para onde enviaremos o arquivo
        $diretorio = "upload/"; 
        //Move o arquivo para a pasta que irá ficar salvo
        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome_arquivo);
        */


        //Texto da Interação do chamado e 'ADDSLASHER' para nao conflitar as aspas com o banco
        $interacao_chamado = "&#60;p&#62;Olá,&#60;/p&#62; &#60;p&#62;&#60;strong&#62;Seu equipamento foi retirado por:&#60;/strong&#62;&#60;/p&#62; &#60;p&#62;".$nome_resposavel_retirada."&#60;/p&#62; &#60;p&#62;&#60;strong&#62;Documento da pessoa que retirou:&#60;/strong&#62;&#60;/p&#62; &#60;p&#62;".$documento_resposavel_retirada."&#60;/p&#62; &#60;p&#62;&#60;strong&#62;Telefone da pessoa que retirou:&#60;/strong&#62;&#60;/p&#62; &#60;p&#62;".$telefone_resposavel_retirada."&#60;/p&#62; &#60;p&#62;&#60;strong&#62;Técnico responsável pela entrega:&#60;/strong&#62;&#60;/p&#62; &#60;p&#62;".$tecnico_resposavel_entrega."&#60;/p&#62; &#60;p&#62;&#60;strong&#62;Observação:&#60;/strong&#62;&#60;/p&#62; &#60;p&#62;".$observacao."&#60;/p&#62; &#60;p&#62;&#60;strong&#62;Foto da ficha da Máquina:&#60;/strong&#62;&#60;/p&#62; &#60;p&#62;"."http://192.168.100.198/formulario_bancada/upload/".$novo_nome_arquivo."&#60;/p&#62; &#60;p&#62;&#60;strong&#62;Número do ticket:&#60;/strong&#62;&#60;/p&#62; &#60;p&#62;&#60;strong&#62;".$numero_chamado."&#60;/strong&#62;&#60;/p&#62;";
        $interacao_chamado = addslashes($interacao_chamado);


        //Inserir Interação no chamado
        $sql = $this->db->prepare("insert into GLPI_4INFRA.glpi_itilfollowups (id, itemtype, items_id, date, users_id, users_id_editor, content, is_private, requesttypes_id, date_mod, date_creation, timeline_position, sourceitems_id, sourceof_items_id) values (NULL, 'Ticket', :numero_chamado, :data_retirada, 1285, 0, ':interacao_chamado', 0, 14, :data_retirada, :data_retirada, 4, 0, 0)");
        $sql->bindValue(':numero_chamado', $numero_chamado);
        $sql->bindValue(':data_retirada', Date("'".$data_retirada." H:i:s'"));
        $sql->bindValue(':interacao_chamado', $interacao_chamado);
        $sql->execute();

        //Fechar o chamado, atualizando o status para FECHADO
        $sql = $this->db->prepare("UPDATE glpi_tickets SET Status = 6 where id = :numero_chamado");
        $sql->bindValue(':numero_chamado', $numero_chamado);
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


}