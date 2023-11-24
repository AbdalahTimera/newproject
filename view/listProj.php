<?php
    $prod = getProd();
?>
<div class="container spacer">
    <div class="card">
        <div class="card-header center">
            Liste des produits
        </div>
        <div class="card-body">
            <table class="center table table-bordered table-striped">
                <tr>
                    <th>Code</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Budget</th>
                    <th>Date-Debut</th>
                    <th>Date-Fin</th>
                    <th>Statut</th>
                    <th colspan="3">Action</th>
                </tr>
                <?php foreach($prod as $p){ ?>
                <tr>
                    <td><?= $p['code'] ?></td>
                    <td><?= ucwords($p['nom']) ?></td>
                    <td><?= $p['description'] ?></td>
                    <td><?= $p['budget'] ?></td>
                    <td><?= $p['date_debut'] ?></td>
                    <td><?= $p['date_fin'] ?></td>
                    <td><?= $p['statut'] ?></td>
                    <td>
                        <a href="?page=editProj&id=<?= $p['id'] ?>" class="btn btn-outline-primary btn-sm">Modifier</a>
                        <a href="?page=supProj&id=<?= $p['id'] ?>" class="btn btn-outline-danger btn-sm">Supprimer</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
            <a href="?page=addProj" class="btn btn-success">Ajouter</a>
        </div>
    </div>
</div>
