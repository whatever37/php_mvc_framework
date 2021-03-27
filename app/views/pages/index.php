<?php

    //var_dump($data);

    foreach ($data['users'] as $user) {
        echo "Information: " . $user->name . " -- " . $user->email . "</br>";
    }

?>


