<?php 

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_SERVER['REQUEST_METHOD'];


if ($method=='GET'){

require "views/check.view.php";

}

elseif($method=='POST'&& isset($_POST['calculate'])){

  require "controlers/check.php";

}

