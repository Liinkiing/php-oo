<?php

namespace App;
use App\Model\Diplome;
use Symfony\Component\Yaml\Yaml;



class Database {


    private static $instance;

    private $db;
    private $config;

    /**
     * Retourne l'instance de la base de données de l'application
     * @return Database
     */
    public static function getInstance() {
        if(is_null(self::$instance)) {
//            echo "Création d'une nouvelle instance<br>";
            self::$instance = new Database();
        }
//        echo "Utilisation d'une instance déjà créée (" . spl_object_hash(self::$instance) . ")<br>";
        return self::$instance;
    }

    /**
     * Retourne l'objet PDO attaché à l'instance
     * @return \PDO
     */
    public function getDatabase() {
        return $this->db;
    }

    /**
     * Retourne la configuration actuelle de l'instance
     * @return mixed
     */
    public function getConfig(){
        return $this->config;
    }

    /**
     * Le constructeur de la classe. Il est en privé afin d'être sûr qu'un utilisateur ne pourra pas instancier cette classe.
     * Elle n'est instancié qu'en interne.
     */
    private function __construct()
    {
        echo "Instance créée<br>";
        $this->useConfig(__DIR__ . '/../app/config.yml');
    }

    /**
     * Fonction utilisé en interne par la classe pour charger un fichier de configuration (par défaut dans le répertoire 'app/config.yml')
     * @param $configPath
     */
    private function useConfig($configPath) {
        echo "Utilisation du fichier '" . realpath($configPath) . "' pour la configuration<br>";
        $this->config = Yaml::parse(file_get_contents($configPath))['Database'];
        $this->db = new \PDO("mysql:host=" . $this->config['host'] . ";dbname=" . $this->config['name'], $this->config['username'], $this->config['password'],
            [\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);
    }

}

trait Findable {

    /**
     * Utilisé pour récupérer le nom complet de la classe en utilisant les namespaces
     * @return string
     */
    private static function getClassName() {
        $arr = preg_split('/(?=[A-Z])/', __CLASS__);
        array_pop($arr);
        unset($arr[0]);
        unset($arr[1]);
        unset($arr[2]);
        return "App\\Model\\" . implode($arr);
    }

    /**
     * Génère le nom de la table selon le nom de la classe
     * @return string
     */
    private static function getTableName() {
        return strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', explode("\\", self::getClassName())[2]));
    }

    /**
     * Récupère un enregistrement en base de données avec un id donné en paramètre.
     * @param $id
     * @return object
     */
    public static function find($id) {
        $db = Database::getInstance()->getDatabase();
        $cName = self::getClassName();
        $tName = self::getTableName();
        $id_field = 'id_' . $tName;
        switch ($tName) {
            case 'temoignage_professionnel':
                $id_field = 'id_temoignage';
                break;
            case 'evenement':
                $id_field = 'id_actualite';
                break;
            case 'usager_admin':
                $id_field = 'nom_usager_admin';
                break;
        }
        $stmt = $db->prepare("SELECT * FROM t_$tName WHERE $id_field = ?;");
        $stmt->execute([$id]);
        return $stmt->fetchObject($cName);
    }

    /**
     * Récupère tous les enregistrements d'une table
     * @param array $orders
     * @return object[]
     * @internal param string $order
     */
    public static function findAll($orders = []) {
        $db = Database::getInstance()->getDatabase();
        $cName = self::getClassName();
        $tName = self::getTableName();
        $query = "SELECT * FROM t_$tName ";
        self::handleOrders($query, $orders);
        $query .= ";";
        $stmt = $db->query($query);
        $stmt->execute();
        var_dump($query);
        return $stmt->fetchAll(\PDO::FETCH_CLASS, $cName);
    }

    /**
     * Rechercher des enregistrements selons plusieurs critères
     * @param array $criterias
     * @param array $orders
     * @return object[]
     * @internal param array|string $order
     */
    public static function findBy($criterias = [], $orders = []) {
        $db = Database::getInstance()->getDatabase();
        $cName = self::getClassName();
        $tName = self::getTableName();
        $query = "SELECT * FROM t_$tName ";
        self::handleCriterias($query, $criterias);
        self::handleOrders($query, $orders);
        $stmt = $db->prepare($query);
        foreach ($criterias as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        $query .= ";";
        var_dump($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_CLASS, $cName);
    }

    /**
     * Rechercher un enregistrement selons plusieurs critères
     * @param $criterias
     * @param array $orders
     * @return object
     * @internal param string $order
     */
    public static function findOneBy($criterias = [], $orders = []) {
        $db = Database::getInstance()->getDatabase();
        $cName = self::getClassName();
        $tName = self::getTableName();
        $query = "SELECT * FROM t_$tName ";
        self::handleCriterias($query, $criterias);
        self::handleOrders($query, $orders);
        $query .= "LIMIT 1;";
        $stmt = $db->prepare($query);
        foreach ($criterias as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        var_dump($query);
        $stmt->execute();
        return $stmt->fetchObject($cName);
    }

    /**
     * Fonction utilisée en interne afin de gérer les différents WHERE (critères) passé en paramètre
     * @param $query
     * @param $criterias
     */
    private static function handleCriterias(&$query, $criterias) {
        if(count($criterias) > 0) {
            $query .= "WHERE ";
            $i = 0;
            foreach ($criterias as $key => $value) {
                $query .= "$key = :$key ";
                if($i < count($criterias) - 1) { $query .= "AND "; }
                $i++;
            }
        }
    }

    /**
     * Fonction utilisée en interne afin de gérer les différents ORDER BY passé en paramètre
     * @param $query
     * @param $orders
     */
    private static function handleOrders(&$query, $orders) {
        if(count($orders) > 0) {
            $query .= "ORDER BY ";
            $i = 0;
            foreach ($orders as $key => $value) {
                if($i < count($orders) - 1) $query .= "$key $value, ";
                else $query .= "$key $value ";
                $i++;
            }
        }
    }


}

trait Editable {

    public static function edit(&$entity, $parameters) {
        try {
            $db = Database::getInstance()->getDatabase();
            $tName = self::getTableName();
            $id_field = 'id_' . $tName;
            switch ($tName) {
                case 'temoignage_professionnel':
                    $id_field = 'id_temoignage';
                    break;
                case 'evenement':
                    $id_field = 'id_actualite';
                    break;
                case 'usager_admin':
                    $id_field = 'nom_usager_admin';
                    break;
            }
            $query = "UPDATE t_$tName SET ";
            $i = 0;
            $db->beginTransaction();
            foreach ($parameters as $key => $value) {
                if($i < count($parameters) - 1) $query .= $key . " = :$key, ";
                else $query .= $key . " = :$key ";
                $i++;
            }
            $query .= "WHERE $id_field = " . $entity->getId() . ";";
            $stmt = $db->prepare($query);
            foreach ($parameters as $key => $value) {
                $stmt->bindValue(":$key", $value);
            }
            $stmt->execute();
            $db->commit();
            header('Location: ' . $_SERVER['PHP_SELF'] . '?id=' . $entity->getId());
            die();
        } catch (\Exception $ex) {
            throw $ex;
        }
    }

    public static function add($parameters) {
        try {
            $db = Database::getInstance()->getDatabase();
            $tName = self::getTableName();
            $query = "INSERT INTO t_$tName (";
            $i = 0;
            $db->beginTransaction();
            foreach ($parameters as $key => $value) {
                if($i < count($parameters) - 1) $query .= "$key, ";
                else $query .= "$key) ";
                $i++;
            }
            $query .= "VALUES (";
            $i = 0;
            foreach ($parameters as $key => $value) {
                if($i < count($parameters) - 1) $query .= ":$key, ";
                else $query .= ":$key) ";
                $i++;
            }
            $stmt = $db->prepare($query);
            foreach ($parameters as $key => $value) {
                $stmt->bindValue(":$key", $value);
            }
            $stmt->execute();
            $db->commit();
            header('Location: /');
            die();
        } catch (\Exception $ex) {
            throw $ex;
        }
    }

}