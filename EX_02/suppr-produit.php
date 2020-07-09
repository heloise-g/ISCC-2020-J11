<?php
    function connect_to_database(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $databasename = "basetest1";

        try {
            $pdo = new PDO("mysql:host=$servername; dbname=$databasename", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        $sql = "DELETE FROM produit WHERE id=8";
        $pdo->exec($sql);
        echo "La table a bien été supprimé";
        } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        }

        $pdo = null;
    }
?>
<?php
connect_to_database();
?>