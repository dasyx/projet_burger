<?php

class Database {

    private static $dbHost = "localhost";
    private static $dbName = "burger_code";
    private static $dbUser = "root";
    private static $dbUserPassword = "";

    private static $connection = null;

    public static function connect() {

        try {
            self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" .self::$dbName,self::$dbUser,self::$dbUserPassword);
        }
        catch(PDOException $e) {
            die($e->getMessage());
        }
        return self::$connection;

    }

    public static function disconnect() {

        self::$connection = null;

    }

}
//connection à la base de données
//en spécifiant que l'on veut accéder à une fonction statique de la "class Database"
//je peux y accéder à l'extérieur parce que cette fonction est publique
Database::connect();

?>