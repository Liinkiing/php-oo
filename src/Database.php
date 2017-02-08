<?php

namespace App;
use Symfony\Component\Yaml\Yaml;



class Database {


    private static $instance;

    private $db;
    private $config;

    public static function getInstance() {
        if(is_null(self::$instance)) {
            echo "Création d'une nouvelle instance<br>";
            self::$instance = new Database();
        }
        echo "Utilisation d'une instance déjà créée (" . spl_object_hash(self::$instance) . ")<br>";
        return self::$instance;
    }

    /**
     * Return the current PDO object attached to the instance
     * @return \PDO
     */
    public function getDatabase() {
        return $this->db;
    }

    /**
     * Return the current configuration attached to the instance
     * @return mixed
     */
    public function getConfig(){
        return $this->config;
    }

    private function __construct()
    {
        echo "Instance créée<br>";
    }

    public function useConfig($configPath) {
        echo "Utilisation du fichier '" . realpath($configPath) . "' pour la configuration<br>";
        $this->config = Yaml::parse(file_get_contents($configPath))['Database'];
        $this->db = new \PDO("mysql:host=" . $this->config['host'] . ";dbname=" . $this->config['name'], $this->config['user'], $this->config['pass'],
            [\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);
    }

}

trait Findable {

    public static function findAll($order = "DESC") {
        $db = Database::getInstance()->getDatabase();
        $arr = preg_split('/(?=[A-Z])/', __CLASS__);
        array_pop($arr);
        unset($arr[0]);
        unset($arr[1]);
        unset($arr[2]);
        $cName = "App\\Model\\" . implode($arr);
        $tName = strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', implode($arr)));
        $query = "SELECT * FROM t_$tName ORDER BY '$order'";
        $stmt = $db->query($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_CLASS, $cName);
    }

    /**
     * @param $critera
     * @param string $order
     * @return mixed[]
     */
    public static function findBy($critera, $order = "DESC") {
        $db = Database::getInstance()->getDatabase();
        $arr = preg_split('/(?=[A-Z])/', __CLASS__);
        array_pop($arr);
        unset($arr[0]);
        unset($arr[1]);
        unset($arr[2]);
        $cName = "App\\Model\\" . implode($arr);
        $tName = strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', implode($arr)));
        $query = "SELECT * FROM t_$tName ";
        if(count($critera) > 0) {
            $query .= "WHERE ";
            $i = 0;
            foreach ($critera as $key => $value) {
                $query .= "$key = :$key ";
                if($i < count($critera) - 1) { $query .= "AND "; }
                $i++;
            }
        }
        $query .= "ORDER BY '$order'";
        $stmt = $db->prepare($query);
        foreach ($critera as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_CLASS, $cName);

    }
}