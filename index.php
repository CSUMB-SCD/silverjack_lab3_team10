<!DOCTYPE html>
<html>
    <head>
        <title>SiverJack</title>
        <link href = "css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php
            $cards = []; //Array of the cards
            $usedCards = []; //Array of the cards that is used
            $player = []; // Array of users
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
            $player3 = array(
                'name' => 'Raju',
                'imgURL' => './img/profile_pictures/rk.png',
                'hand' => array(),
                'points' => 0
                );
            $player4 = array(
                'name' => 'Mayra',
                'imgURL' => './img/profile_pictures/mayra.JPG',
                'hand' => array(),
                'points' => 0
                );
                
            
         /*   function printGameState($allPlayers){
                foreach ($allPlayers as $player) {
                    echo $player['name'] . "<br>";
                }
            }
            function getImgURlForCardIndex($index) {
                
                // get a number from 0 to 51
                // return an image url 
                
                $suitIndex = floor($index / 13); 
                
                echo "suitIndex: $suitIndex"; 
            }
            
            function generateDeck() {
                for ($i = 0; $i < 51; $i++) {
                    $card = array(
                        'imgURL' => ""
                        ); 
                }
            } */
            
            printGameState($allPlayers);
        ?>
        <div class="footer">
  			<p>Copyright @ Team 10 - CST 336 2018</p> <!-- Copyright @ Team 10 - CST336 2018 --> 
		</div>
    </body>
</html>

/* https://ide.c9.io/uuts/utsab */