<?php
    if(isset($_POST['valider'])){
        $code = $_POST['code'];
        $nom = $_POST['nom'];
        $description = $_POST['description'];
        $budget = $_POST['budget'];
        $date_debut = $_POST['date_debut'];
        $date_fin = $_POST['date_fin'];
        $statut = isset($_POST['statut']) ? 1 : 0;
        #extract($_POST);
        $ok = addProd($code, $nom, $description, $budget, $date_debut, $date_fin, $statut);
        if($ok == 1){
            
            header("Location:?page=listProj");
        }else{
            echo "<div class='alert alert-danger'>Insertion échouée !</div>";
        }
        echo "<div class='alert alert-success'>Insertion réussie !</div>";
    }
?>
<div class="container col-md-6 spacer">
    <div class="card">
        <div class="card-header center">Ajout d'un produit</div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Code</label>
                    <input class="form-control" type="text" name="code" required>
                </div>
                <div class="form-group">
                    <label for="">Nom</label>
                    <input class="form-control" type="text" name="nom" required>
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <input class="form-control" type="text" name="description" required>
                </div>
                <div class="form-group">
                    <label for="">Budget </label>
                    <input class="form-control" type="number" name="budget" required>
                </div>
                <div class="form-group">
                    <label for="">Date-debut</label>
                    <input class="form-control" type="date" name="date_debut" required>
                </div>
                <div class="form-group">
                    <label for="">Date-Fin </label>
                    <input class="form-control" type="date" name="date_fin" required>
                </div>
                <div class="form-group">
                    <label for="">Statut </label>
                    <input class="form-control" type="checkbox" name="statut" >
                </div>
                <div class="form-group center">
                    <input class="btn btn-primary" type="submit" name="valider" value="Enregistrer">
                    <input class="btn btn-danger" type="reset" name="annuler" value="Annuler">
                </div>
            </form>
        </div>
    </div>
</div>