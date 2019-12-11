<?php

$ingredients = $app["database"]->selectAll("ingredientes");

require 'views/add-material.view.php';