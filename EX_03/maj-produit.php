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
            $sql = "UPDATE produit SET quantite='1' WHERE id=4";
        $pdo->exec($sql);
        echo "Modidification faite";
        } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        }

        $pdo = null;
    }
?>
<?php
connect_to_database();
?>