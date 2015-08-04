<?php
  require_once __DIR__."/../vendor/autoload.php";

  $app = new silex\Application();

  $app->get("/", function() {
    return "Home";
  });

  return $app;
?>
