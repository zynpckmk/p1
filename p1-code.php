<!DOCTYPE html>
<html>
<head>
<body>
<div>
<?php
 
//set up the values of the game
$values = array ('Rock', 'Paper', 'Scissors');

//Define variables to count how many times players won
$winA = 0;
$winB = 0;
$draw = 0;

for($i = 1; $i <11; $i++) {
    echo 'Round '.$i.': <br>';

    //computer randomly choose one option for players
    $playerA = rand(0,2);
    $playerB = rand(0,2);

    if ($playerA == 0) 
    {
        echo 'Player A: '.$values[0].' <br>';

        if ($playerB == 0) {
            echo 'Player B: '.$values[0].'<br>';
            echo "Same choice: It is a draw... <br><br>";
            $draw++;
        }
        else if ($playerB == 1) {
            echo 'Player B: '.$values[1].'<br>';
            echo "Paper covers Rock: Player B wins... <br><br>";
            $winB++;
        }
        else if ($playerB == 2) {
            echo 'Player B: '.$values[2].'<br>';
            echo "Rock crushes Scissors: Player A wins... <br><br>";
            $winA++;
        }
    }

    else if ($playerA == 1)
    {
        echo 'Player A: '.$values[1].'<br>';

        if ($playerB == 0) {
            echo 'Player B: '.$values[0].'<br>';
            echo "Paper covers Rock: Player A wins... <br><br>";
            $winA++;
        }
        else if ($playerB == 1) {
            echo 'Player B: '.$values[1].'<br>';
            echo "Same choice: It is a draw... <br><br>";
            $draw++;
        }
        else if ($playerB == 2) {
            echo 'Player B: '.$values[2].'<br>';
            echo "Scissors cut paper : Player B wins... <br><br>";
            $winB++;
        }
    }

    else if ($playerA == 2) 
    {
        echo 'Player A: '.$values[2].'<br>';

        if ($playerB == 0) {
            echo 'Player B: '.$values[0].'<br>';
            echo "Rock crushes Scissors: Player B wins... <br><br>";
            $winB++;
        }
        else if ($playerB == 1) {
            echo 'Player B: '.$values[1].'<br>';
            echo "Scissors cut paper : Player A wins... <br><br>";
            $winA++;
        }
        else if ($playerB == 2) {
            echo 'Player B: '.$values[2].'<br>';
            echo "Same choice: It is a draw... <br><br>";
            $draw++;
        }
    }
}

echo 'Player A: '.$winA.' wins<br><br>';
echo 'Player B: '.$winB.' wins<br><br>';
echo $draw.' Games were a draw.<br><br>';

?>
</div>
</body>
</head>
</html>