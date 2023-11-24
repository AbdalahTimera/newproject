<?php
    require_once 'DB/connexion.php';
    /*
        PDO::FETCH_ASSOC = 3
        PDO::FETCH_NUM = 2
    */
    function getProd(){
        global $db;
        $sql = "SELECT * FROM prodtmr ORDER BY nom ASC";
        return $db->query($sql)->fetchAll(2);
    }

    function addProd($code, $nom, $description, $budget, $date_debut, $date_fin, $statut){
        global $db;
        $sql = "INSERT INTO prodtmr VALUES(null, '$code', '$nom', '$description', '$budget', '$date_debut', '$date_fin', '$statut')";
        return $db->exec($sql); //1 ou 0
    }

    function getProdById($id){
        global $db;
        $sql = "SELECT * FROM prodtmr WHERE id = $id";
        return $db->query($sql)->fetch(2);
    }

    function updateProd($id, $code, $nom, $description, $budget, $date_debut, $date_fin, $statut){
        global $db;
        $sql = "UPDATE prodtmr 
                SET code = '$code', 
                    nom = '$nom',
                    description = '$description',
                    budget = '$budget',
                    date_debut = '$date_debut',
                    date_fin = '$date_fin',
                    statut = '$statut'
                WHERE id = $id";
        return $db->exec($sql);
    }
    


    function deleteProd($id){
        global $db;
        $sql = "DELETE FROM prodtmr WHERE id = $id";
        return $db->exec($sql);
    }