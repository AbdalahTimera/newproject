<?php
    $id = $_GET['id'];
    $prod = getProdById($id);
    if(isset($_POST['editer'])){
        $code = $_POST['code'];
        $nom = $_POST['nom'];
        $description = $_POST['description'];
        $budget = $_POST['budget'];
        $date_debut = $_POST['date_debut'];
        $date_fin = $_POST['date_fin'];
        $statut = isset($_POST['statut']) ? 1 : 0;
        
        #extract($_POST);
        $ok = updateProd($id, $code, $nom, $description, $budget, $date_debut, $date_fin, $statut);
        if($ok == 1){
            echo "<div class='alert alert-success'>Insertion réussie !</div>";
            var_dump($_POST);
        }else{
            echo "<div class='alert alert-danger'>Insertion échouée !</div>";
        }
        header("Location:?page=listProj");
    }
?>
<div class="container col-md-6 spacer">
    <div class="card">
        <div class="card-header center">Edition d'un produit</div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Code</label>
                    <input class="form-control" type="text" name="code" value="<?= $prod['code'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="">Nom</label>
                    <input class="form-control" type="text" name="nom" value="<?= $prod['nom'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <input class="form-control" type="text" name="description" value="<?= $prod['description'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="">Budget </label>
                    <input class="form-control" type="number" name="budget" value="<?= $prod['budget'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="">Date-Debut </label>
                    <input class="form-control" type="date" name="date_debut" value="<?= $prod['date_debut'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="">Date-Fim </label>
                    <input class="form-control" type="date" name="date_fin" value="<?= $prod['date_fin'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="">Statut </label>
                    <input class="form-control" type="checkbox" name="statut" value="<?= $prod['statut'] ?>" >
                </div>
                <div class="form-group center">
                    <input class="btn btn-primary" type="submit" name="editer" value="Modifier">
                    <input class="btn btn-danger" type="reset" name="annuler" value="Annuler">
                </div>
            </form>
        </div>
    </div>
</div>