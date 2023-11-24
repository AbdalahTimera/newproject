<?php
    $id = $_GET['id'];
    deleteProd($id);
    header("Location:?page=listProj"); 