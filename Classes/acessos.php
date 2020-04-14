<?php

class acesso{
    public function newAcesso(){
        $acessos =  (int) file_get_contents('./acessos/acessos.txt');
        $acessos++;
        file_put_contents("./acessos/acessos.txt", $acessos);
    }

    public function getAcessos(){
        return $acessos = file_get_contents('./acessos/acessos.txt');
    }
}