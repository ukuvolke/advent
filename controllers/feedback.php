<?php
$users=$app["database"]->selectAll("feedback");
require 'views/feedback.view.php';