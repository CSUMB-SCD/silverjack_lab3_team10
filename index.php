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
                
            function play(){
            for($i=0; $i<2; $i++){
                ${randomValue . $i } = rand(0,12);
                ${folder . $i } = rand(0,3);
                displaySymbol(${randomValue . $i }, ${folder . $i });
            }
            points($randomValue0, $randomValue1);
            }
            
            function displaySymbol($randomValue, $folder) {
            switch ($folder) {
                case 0: $folder = "clubs";
                        break;
                case 1: $folder = "diamonds";
                        break;
                case 2: $folder = "hearts";
                        break;
                case 3: $folder = "spades";
                        break;
            }
            switch ($randomValue){
                case 0: $symbol = "1";
                        break;
                case 1: $symbol = "2";
                        break;
                case 2: $symbol = "3";
                        break;
                case 3: $symbol = "4"; 
                        break;
                case 4: $symbol = "5";
                        break;
                case 5: $symbol = "6";
                        break;
                case 6: $symbol = "7";
                        break;
                case 7: $symbol = "8";
                        break;
                case 8: $symbol = "9"; 
                        break;
                case 9: $symbol = "10";
                        break;
                case 10: $symbol = "11";
                        break;
                case 11: $symbol = "12";
                        break;
                case 12: $symbol = "13";
                        break;
            }
            echo "<img id='reel$pos' src='img/cards/$folder/$symbol.png' alt='$symbol' title='". ucfirst($symbol) . "' width='70' >";
            }
            play();
            
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
            
            //printGameState($allPlayers);
<<<<<<< HEAD
            /* https://ide.c9.io/uuts/utsab */
=======
>>>>>>> refs/remotes/origin/master
        ?>
        <div class="footer">
  			<p>Copyright @ Team 10 - CST 336 2018</p> <!-- Copyright @ Team 10 - CST336 2018 --> 
		</div>
    </body>
</html>