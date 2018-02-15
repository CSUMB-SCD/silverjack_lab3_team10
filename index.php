<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
            $player1 = array(
                'name' => 'Mathias',
                'imgURL' => '/profile_pictures/mathias.jpg',
                'hand' => array(),
                'points' => 0
            );
            
            $player2 = array(
                'name' => 'Josh',
                'imgURL' => './img/profile_pictures/josh.jpg',
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