<?php 

    $app['database']->insert("ingredientes"); [
        "name" => $_POST["material_name"],
        "unit" => $_POST["material_unit"]
    ];

header("/");