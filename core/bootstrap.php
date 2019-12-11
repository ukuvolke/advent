<?php

$app = [];

$app['config'] = require 'config.php';

require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
require "controllers/pages_controller.php";

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);

function view($name, $data=[]) {

    extract($data);

    return require "views/{$name}.view.php";
}