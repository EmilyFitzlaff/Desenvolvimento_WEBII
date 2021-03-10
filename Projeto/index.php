<?php

    include_once('lib/autoload.php');

    $metaCharset = new Meta("UTF-8", "", "");
    $metaViewport = new Meta("", "viewport", "width=device-width, initial-scale=1");

    $title = new Title("Página Inicial");

    $link = new Link("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css", "stylesheet", "sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl", "anonymous");

    $head = new Head();
    $elementosHead = array($metaCharset, $metaViewport, $title, $link);
    $head->addElemento($elementosHead);

?>



    <!doctype html>
<html lang="en">
  <head>

  </head>
