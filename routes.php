<?php

$router->get( "", 'Pages_Controller@home');
$router->get("about", 'Pages_Controller@about');
$router->get('about/culture', 'controllers/about-culture.php' );
$router->get("contact", 'Pages_Controller@contact');
$router->get("admin", "controllers/recipes.php");
$router->get("addmaterial", "controllers/add-material.php");
$router->get("feedback", "controllers/feedback.php");

$router->post("material", "controllers/material.php");
$router->post("add-feedback", "controller/add-feedback.php");
