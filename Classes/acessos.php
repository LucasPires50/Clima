<?php

class acesso{
    public function newAcesso(){
        $acessos =  (int) file_get_contents('./acessos/acessos.txt');
        file_put_contents("./acessos/acessos.txt", $acessos + 1);
    }

    public function getAcessos(){
        return $acessos = file_get_contents('./acessos/acessos.txt');
    }
}
