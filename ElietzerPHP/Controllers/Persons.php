<?php
    include_once '../Model/person.php';

    $persons = Person::Get();
    my_print($persons);