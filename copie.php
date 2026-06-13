<?php
$continuer = true;

/* boucle du menu */
while($continuer){
    echo "\n BIENVENU CHEZ BARHAM CHIFFRE \n";
    echo "1. Positif-Negatif-Nul\n";
    echo "2. Pair-Impaire\n";
    echo "3. Premier\n";
    echo "4. Parfait\n";
    echo "5. Quitter\n";

/* faire le choix */
$choix = readline("Choisissez votre option 1-5  ");

if($choix == "5"){
    echo "Ba benen yon!";
    $continuer = False;
    break;
}

if($choix >= 1 && $choix <= 4){
    $n = readline("Entrer votre nombre ");

switch ($choix) {
    case "1":
        /* partie positif-negatif-nul */
        if ($n>0){
            echo "Le nombre est positif";
        }elseif ($n<0){
              echo "Le nombre est negatif";
        }else {
            echo "Le nombre est nul";
        }
        break;

    case "2":
        /* partie paire impaire */
        if ($n % 2 == 0){
            echo "Le nombre est pair";
        }else{
            echo "Le nombre est impaire";
        }
        break;
      case "3":
        /* partie nbre premier */

                $estPremier = true;
                if ($n < 2) {
                    $estPremier = false;
                } else {
                    for ($i = 2; $i < $n; $i++) {
                        if ($n % $i == 0) {
                            $estPremier = false;
                            break; 
                        } 
                    }
                }

                if ($estPremier) {
                    echo  " $n est un nombre premier";
                } else {
                    echo " $n n'est pas un nombre premier";
                }
                break;
        echo "\n";
        case "4":
            $somme = 0;

            for($i = 1; $i < $n; $i++ ){
                if($n % $i == 0){
                    $somme = $somme + $i;
                }
            }
            if($somme == $n && $n > 0){
                echo "Le nombre $n est parfait! (la somme ddes diviseurs = $somme)";
            }else{
                echo "Le nombre $n n'est pas parfait! ( la somme de ses diviseurs = $somme";
            }
            break;


   }

  }
}
?>