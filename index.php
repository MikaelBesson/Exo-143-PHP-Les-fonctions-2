
<?php
echo "exo 1 <br><br>";

$monBooleen = true;

function test($monBooleen){
    if(is_bool($monBooleen)){
        echo "<p>On as bien un booleen <br></p>";
    }
}
test($monBooleen);

echo "exo 2 <br><br>";

function text($nom){
    echo "mon parametre est : $nom<br>";
}
text("mika");


echo "exo 3 <br><br>";

function person($nom, $prenom){
    echo "mes parametre sont nom= ".$nom." et prenom= ".$prenom."<br>";
}
person("mika","besson");


echo "exo 4 <br><br>";

function nombres($nbr1, $nbr2){
    if ($nbr1 > $nbr2){
        echo "nbr1 est plus grand que nbr2<br>";
    }
    elseif ($nbr1 < $nbr2){
        echo "nbr1 est plus petit que nbr2<br>";
    }
    elseif ($nbr1 === $nbr2){
        echo "nbr1 est egal a nbr2<br>";
    }
}

nombres(10,20);
nombres(20,10);
nombres(20,20);

echo "<br>exo 5 <br><br>";

function info($nom, $age){
    echo "je m'apelle $nom et j'ai $age ans<br>";
}
info("mika",43);

echo "<br>exo 6 <br><br>";

function presentation($nom, $prenom, $age){
    echo "Bonjour ".$nom." ".$prenom.",tu as ".$age." ans.<br>";
}
presentation("besson","mikael",43);

echo "<br>exo 7 <br><br>";

function info2($age, $genre){
    if ($genre === "homme" || $age < 18){
        echo "Vous êtes un homme et vous êtes mineur<br>";
    }
    elseif ($genre === "homme" || $age > 18){
        echo "Vous êtes un homme et vous êtes majeur<br>";
    }
    elseif ($genre === "femme" || $age < 18){
        echo "Vous êtes une femme et vous êtes mineur<br>";
    }
    elseif ($genre === "femme" || $age < 18){
        echo "Vous êtes une femme et vous êtes majeur<br>";
    }
}
info2(15,"homme");
info2(25,"homme");
info2(14,"femme");
info2(30,"femme");

echo "<br>exo 8 <br><br>";
$nbr1 =0;
$nbr2 = 0;
$nbr3 = 0;

function calcul($nbr1, $nbr2, $nbr3){
     $result8 = $nbr1 + $nbr2 + $nbr3;
    echo "le resultat est = ".$result8;
}
calcul(10,20,30);

