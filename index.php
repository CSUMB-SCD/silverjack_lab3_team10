<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
            $player1 = array(
                'name' => 'Mathias',
                'imgURL' => '/profile_pictures/koala.jpg',
                'hand' => array(),
                'points' => 0
            );
            function printGameState($allPlayers){
                foreach ($allPlayers as $player) {
                    echo $player['name'] . "<br>";
                }
            }    
            printGameState($allPlayers);
        ?>
    </body>
</html>