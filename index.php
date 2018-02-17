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
            $cards = []; //Array of the cards
            //$usedCards = []; //Array of the cards that is used
            //fillUsedCards($usedCards); // fills the array with false
            $player = []; // Array of users
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
                    $player4,
                    );
            
            function play(){
            for($i=0; $i<4; $i++){
                ${randomValue . $i } = rand(0,12);
                ${folder . $i } = rand(0,3);
                //
                displaySymbol(${randomValue . $i }, ${folder . $i });
            }
            points($randomValue0, $randomValue1, $randomValue2, $randomValue3);
                $usedCards = []; //Array of the cards that is used
                fillUsedCards($usedCards); // fills the array with false

                
                for($i=0; $i<2; $i++){
                    ${randomValue . $i } = rand(0,12);
                    ${folder . $i } = rand(0,3);
                    
                    // Loop to check if a card has been used
                    while(checkUsedCards(${randomValue . $i }, ${folder . $i }, $usedCards)){
                        ${randomValue . $i } = rand(0,12);
                        ${folder . $i } = rand(0,3);
                    }
                    
                    displaySymbol(${randomValue . $i }, ${folder . $i });
                    
                }
                
                points($randomValue0, $randomValue1);
            }
            

            function  printGameState($allPlayers){
                $i=0;
                
                foreach ($allPlayers as $player) {
                    echo "<img id ='reel$i' src='" . $player['imgURL'] . "' />";
                    echo "<br/>";
                    echo $player['name'] . "<br/>";
                    $i++;

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
            function points($num1, $num2, $num3, $num4){
                echo $num1 + $num2 + $num3 + $num4;
            }
             
            // used cards

          /*  function checkUsedCards($symbol, $folder, $usedCards){

            function checkUsedCards($symbol, $folder, &$usedCards){
                //$pick = rand(0, 52);
                $pickedCard = $symbol . $folder;
                if(!$usedCards[$pickedCard]){
                    $usedCards[$pickedCard] = true;
                    return false;
                }
                return true;
                
            }
            */
            play();
            
            function printGameState($allPlayers){
                $i=0;
                foreach ($allPlayers as $player) {
                    echo "<img id ='reel$i' src='" . $player['imgURL'] . "' />";
                    echo "<br/>";
                    echo $player['name'] . "<br>";

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

            }
           /* function generateHand($suit)
            {

                
                , 
            }*/
         // https://ide.c9.io/uuts/utsab    
            
            //printGameState($allPlayers);
            /* https://ide.c9.io/uuts/utsab */
            
            function fillUsedCards(& $usedCards){
                for($i=0; $i<52; $i++){
                    switch($i % 4){
                        case 0: $folder = "clubs";
                            break;
                        
                        case 1: $folder = "diamonds";
                            break;
                            
                        case 2: $folder = "hearts";
                            break;
                            
                        default: $folder = "spades";
                            break;
                    }
                    
                    switch($i % 13){
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
                    $key = $symbol . $folder;
                    $usedCards[$key] = false;
                }
            }
        ?>
        <div class="footer">
  			<p>Copyright @ Team 10 - CST 336 2018</p> <!-- Copyright @ Team 10 - CST336 2018 --> 
		</div>
    </body>
</html>