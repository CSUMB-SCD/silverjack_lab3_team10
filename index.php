<!DOCTYPE html>
<html>
    <head>
        <title>SiverJack</title>
        <link href = "css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <header>
            <strong>
                <h1>Silverjack</h1>
            </strong>
    </header>
    <body>
        <?php
            $player1 = array(
                'name' => 'Mathias',
                'imgURL' => './img/profiles_pictures/mathias.jpg',
                'hand' => array(),
                'points' => 0
            );
            
            $player2 = array(
                'name' => 'Josh',
                'imgURL' => './img/profiles_pictures/josh.jpg',
                'hand' => array(),
                'points' => 0
            );
            $player3 = array(
                'name' => 'Raju',
                'imgURL' => './img/profiles_pictures/rk.png',
                'hand' => array(),
                'points' => 0
            );
            $player4 = array(
                'name' => 'Mayra',
                'imgURL' => './img/profiles_pictures/mayra.JPG',
                'hand' => array(),
                'points' => 0
            );
                $allPlayers = array(
                    $player1,
                    $player2,
                    $player3,
                    $player4
                    );
                
            
            function  printGameState($allPlayers){
                $i=0;
                
                foreach ($allPlayers as $player) {
                    echo "<img id ='reel$i' src='" . $player['imgURL'] . "' />";
                    echo "<br/>";
                    echo $player['name'] . "<br/>";
                    $i++;
                }
                
            }
            printGameState($allPlayers);
            getImgURlForCardIndex(0);
            function getImgURlForCardIndex($index) {
                
                // get a number from 0 to 51
                // return an image url 
                
                $suitIndex = floor($index / 13); 
                echo "suitIndex:  $suitIndex"; 
            }
            
            function generateDeck() {
                for ($i = 0; $i < 51; $i++) {
                    $card = array(
                        'imgURL' => ""
                        ); 
                }
            } 
            
        ?>
        <form>
                <input type = "submit" value = "Play Again"/>
        </form>
    </body>
    
</html>