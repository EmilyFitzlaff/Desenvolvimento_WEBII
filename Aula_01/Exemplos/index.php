<?php

    require('./lib/autoload.php');
    
    echo $link = new Link('http://unidavi.edu.br', 'Unidavi', '_blank', 'btn');

    $ul = new Ul();
    $li1 = new Li('Item 1', 'btn');
    $li2 = new Li('Item 2', 'btn');
    $ul->addLi($li1);
    $ul->addLi($li2);

    echo $ul;
   
?>