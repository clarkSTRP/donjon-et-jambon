<?php
$name = $_GET["playerName"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Intro</title>
</head>
<body>
    <main class="introMain">
        <pre>
                    ."  ."      ".  ".
                    ;  ."    /\    ".  ;
                    ;  '._,-/  \-,_.`  ;
                    \  ,`  / /\ \  `,  /
                    \/    \/  \/    \/
                    ,=_    \/\/    _=,
                    |  "_   \/   _"  |
                    |_   '"-..-"'   _|
                    | "-.        .-" |
                    |    "\    /"    |
                    |      |  |      |
            ___     |      |  |      |     ___
        _,-",  ",   '_     |  |     _'   ,"  ,"-,_
    _(  \  \   \"=--"-.  |  |  .-"--="/   /  /  )_
    ,"  \  \  \   \      "-'--'-"      /   /  /  /  ".
    !     \  \  \   \                  /   /  /  /     !
    :      \  \  \   \                /   /  /  /      
        </pre>

        <p class="introText">Welcome to Donjon and Jambon, an exhilarating adventure game where you play the role of a brave adventurer who must traverse a treacherous dungeon filled with traps, monsters,
            and hidden treasures. Your mission is to defeat the enemies that stand in your path, solve complex puzzles, and find the keys that will allow you to open the doors of the dungeon and reach the treasure room. But beware, each level of the dungeon is increasingly difficult, 
            so be sure to be well-equipped and prepared to face all the challenges that await you. Are you ready to take on the challenge? Enter the dungeon and begin your adventure now!</p>

<pre>
    ⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
    ⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
    ⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⢿⣿⣿⣿
    ⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡏⠀⠀⢹⣿⣿
    ⣿⣿⣿⣿⣿⣛⡛⠛⠿⠿⠿⢿⣿⣿⣿⣿⣿⡿⠿⠟⠛⠿⣿⡟⠃⠀⠀⠀⢹⣿
    ⣿⣿⠟⠉⠉⠉⠛⠳⣦⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠘⣷⣶⣿⣤⣤⣼⣿
    ⣿⡏⠀⠀⠀⠀⠀⠀⠈⠻⣄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣼⣿⣿⣿⣿⣿⣿⣿
    ⣿⡇⠀⠀⢀⣤⣄⠀⠀⠀⠹⡆⠀⠀⠀⠀⠀⠀⢀⣤⣾⣿⣿⣿⣿⣿⣿⣿⣿⣿
    ⣿⡇⠀⠀⠸⣿⣿⣧⠀⠀⠀⣿⠀⠀⠀⠀⠀⣰⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
    ⣿⣿⡀⠀⠀⠙⠛⠋⠀⠀⠀⣿⡇⠀⠀⢀⣾⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
    ⣿⣿⣷⡄⠀⠀⠀⠀⠀⠀⠀⣿⠁⠀⣴⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
    ⣿⣿⣿⣿⣦⣀⠀⠀⠀⢀⣴⣏⣠⣾⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
    ⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
    ⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
    ⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿</pre>

    <p>here is your Sword <span class="namePlayer"><?=$name?></span> good luck...</p>


    <form action="">
        <input name="playerName" type="hidden" value="<?=$name?>">
        <a><button>Next</button></a>
    </form>
</main>

</body>
</html>