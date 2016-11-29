<?php
require 'Config.php';

class DB
{
    private $mysqli;
    private $config;

    public function __construct(){
        $this->config = new Config();
        $this->mysqli = new mysqli($this->config->host, $this->config->username, 
                $this->config->passwd, $this->config->dbname);
        $this->mysqli->query("SET NAMES 'utf8'");
    }
    
    public function select($table_name, $fields, $where = ""){
        if($fields != "*"){
            for ($i=0; $i < count($fields); $i++) {
                $fields[$i] = "`".$fields[$i]."`";
            }
            $fields = implode(",", $fields);
        }
        if($where){
            $result = $this->mysqli->query("SELECT $fields FROM $table_name WHERE = $where");
        } else {
            $result = $this->mysqli->query("SELECT $fields FROM $table_name");
        }
        if (!$result) return false;
        $i = 0;
        while ($row = $result->fetch_assoc()) {
            $data[$i] = $row;
            $i++;
        }
        $result->close();
        return $data;
    }
    
    public function __destruct() {
        if($this->mysqli) $this->mysqli->close();
    }
}

?>