<?php
class acesso{
    public function newAcesso(){
        file_put_contents("./acessos/acessos.txt", (int) file_get_contents('./acessos/acessos.txt') + 1);
    }
    public function getAcessos(){
        return $acessos = file_get_contents('./acessos/acessos.txt');
    }
}
