<?php

class Connection
{
    public $host = "127.0.0.1";
    public $password = "";
    public $user = "root";
    public $port = "3080";
    public $db_name = "fadillah";
    public $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->host;port=$this->port;dbname=$this->db_name", $this->user, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}

class User extends Connection
{
    public function createUser($name, $email, $password)
    {
        try {
            $stmt = $this->conn->prepare("INSERT INTO users (email, name, password) VALUES (:email, :name, :password)");
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function getUser($email, $password)
    {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                if ($user['password'] = $password) {
                    return $user;
                } else {
                    return null;
                }
            } else {

                return null;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }
}
class Jujutsu extends Connection
{
    public function insertJujutsu($name, $cursed_technique, $domain_expansion, $type, $age)
    {
        try {
            $stmt = $this->conn->prepare("INSERT INTO jujutsu_sorcerer (name, cursed_technique, domain_expansion, type, age) VALUES (?, ?, ?, ?, ?)");
            $stmt->bindParam(1, $name);
            $stmt->bindParam(2, $cursed_technique);
            $stmt->bindParam(3, $domain_expansion);
            $stmt->bindParam(4, $type);
            $stmt->bindParam(5, $age);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        }
    }

    public function getJujutsuSorcerers()
    {
        try {
            $stmt = $this->conn->query("SELECT * FROM jujutsu_sorcerer");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        }
    }

    public function getSorcererById($sorcererId)
    {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM jujutsu_sorcerer WHERE id = :sorcerer_id");
            $stmt->bindParam(':sorcerer_id', $sorcererId);
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        }
    }
    public function updateJujutsu($id, $name, $cursed_technique, $domain_expansion, $type, $age)
    {
        try {
            $stmt = $this->conn->prepare("UPDATE jujutsu_sorcerer SET name = :name, cursed_technique = :cursedTechnique, domain_expansion = :domainExpansion, type = :type, age = :age WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':cursedTechnique', $cursed_technique);
            $stmt->bindParam(':domainExpansion', $domain_expansion);
            $stmt->bindParam(':type', $type);
            $stmt->bindParam(':age', $age);
            $stmt->execute();            
            return true;
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        }
    }

    public function deleteJujutsu($id)
    {
        try {
            $stmt = $this->conn->prepare("DELETE FROM jujutsu_sorcerer WHERE id = ?");
            $stmt->bindParam(1, $id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        }
    }
}

?>