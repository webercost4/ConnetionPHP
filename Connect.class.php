<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Connect
 *
 * @author weber
 */
class Connect {
    
    private $db;
    private $host;
    private $user;
    private $password;
    
    public function __construct($db, $host, $user, $password) {
        $this->db = $db;
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        
        $this->ConnectDB();
    }
    
    public function ConnectDB(){
        try{
            $this->conexao = new PDO("mysql:host=$this->host;dbname=".$this->db.';',$this->user, $this->password);
        } catch (Exception $ex) {
            
            die("Erro: <code>" . $ex->getMessage() . "</code>");
        }
    }

    
}

$new = new Connect('test', 'localhost', 'root', '');
