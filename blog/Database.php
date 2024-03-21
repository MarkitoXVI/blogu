<?php

class Database {

    private $connection;

    public function __construct($config) {
        $connection_string = "mysql:" . http_build_query($config, "", ";");
        $this->connection = new PDO($connection_string);
        $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
   }
    //Metode
    public function execute($query_string, $params) {
        //1. Padot, sagatvot SQL vaicājumu
        $query = $this->connection->prepare($query_string);
        //2. Izpilda
        $query->execute($params);
        //3. Saņem datuss
        return $query->fetchAll();
    }
}