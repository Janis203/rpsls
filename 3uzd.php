<?php
while (true) {
    $elements = [
        "rock" => 1,
        "paper" => 2,
        "scissors" => 3,
        "lizard" => 4,
        "spock" => 5
    ];
    $game = array_rand($elements);
    $user = strtolower(readline("Enter: "));
    if (array_key_exists($user, $elements)) {
        $user = $elements[$user];
        $play = $elements[$game];
        if ($play == $user) {
            echo "Draw " . PHP_EOL;
        } elseif (($play == 1 && in_array($user, [2, 5])) ||
            ($play == 2 && in_array($user, [3, 4])) ||
            ($play == 3 && in_array($user, [5, 1])) ||
            ($play == 4 && in_array($user, [1, 3])) ||
            ($play == 5 && in_array($user, [2, 4]))) {
            echo "You win! The game chose $game";
            exit;
        } else {
            echo "You lose! The game chose $game ";
            exit;
        }
    } else {
        echo "Invalid input ";
        exit;
    }
}