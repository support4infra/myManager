<?php
class Dominio extends model {

    public function getListDominio(){        
            $domain="4infra.com.br";
            $dados = dns_get_record($domain, DNS_MX);
            return $dados;
    }
}