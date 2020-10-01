<?php
  $text = <<< T
    zsl - Zespół
    Szkół
    Łączności<br>
    T;


    echo $text;
    echo nl2br($text);

    $name = 'jaNUsZ';

  //sanityzacja kodu - zamiana na małe litery
    $name = strtolower($name); //janusz
    echo $name;

  //zamiana na duże litery
    $name = 'Krystyna';
    echo strtoupper($name); /KRYSTYNA

  // zamiana pierwszej litery na dużą
    $name = 'aNNa noWaK';
    echo ucfirst($name); //ANNa noWaK

  //zamiana wszystkich pierwszych liter na duże
    $name = 'aNNa noWaK';
    echo ucwords($name); //ANNa NoWaK

  //zad. 1
  //zamień $name, aby wyglądała w nastepujacy sposób: Anna Nowak
    $name = 'aNNa noWAk'
    echo ucwords(strtolower($name)) <br>;
    //najpierw zamiena na male litery a potem pierwsze kazdego ze slow na duże

    //lorem Ipsum
    $lorem = <<<LOREM
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
LOREM;

echo "$lorem<br>";
$col = wordwrap($lorem, 40,'<br>');//zmienna, ilosc znakow w linii, czym
echo $col;


$col = wordwrap($lorem, 40,'<br>');
echo $col;

//czyscze4nie zawarrtosci bufora  (czysci ekran caly)

ob_clean();
 //usuwanie bialcyh znaków, tabulatorow
$name = 'Anna';
$name1 = '  Anna ';
echo 'Długość $name: ',strlen($name); //sprawdzaine dlugosci //4
echo 'Długość $name1: ',strlen($name); //sprawdcznie dlugosci //7

echo strlen(ltrim($name1)); //funckja w funkcji, najpierw czyscimy name1 z lewej strony z pustych znakow a potem sprawdzamy ile ma dlugosci //5
echo strlen(rtrim($name1)); //6 czyscimy z prawej strony, potem liczymy ilosc zn
echo strlen(trim($name1)); //4 czyscimy z kazdej strony

echo strlen($name1); //7
$name1 = trim($name1);
echo strlen($name1); //4

//przeszukiwanie ciągów znaków
$address = "Poznań, ul. Polna 2, tel. (61)123-45-67";
$search = strstr($address, 'tel');
echo "<br>$search<br>"; // tel. (61)123-45-67

$address = "Poznań, ul. Polna 2, tel. (61)123-45-67";
$search = strstr($address, 'tel', true);
echo '<br>Długość $search: ',strlen($search); //22 znaki, (polskie znaki liczy x2, na dwóch bajtach zapisane)
echo "<br>$search<br>"; //od telefonu "pokleciał" w druą strone ,Poznań, ul. Polna 2

$address = "Poznań, ul. Polna 2, tel. (61)123-45-67";
$search = strstr($address, 'Tel');
echo "<br>$search<br>"; //nie wyświetli nic, nie ma czegoś takiego jak duza litera T

$address = "Poznań, ul. Polna 2, tel. (61)123-45-67";
$search = stristr($address, 'Tel');
echo "<br>$search<br>"; //"i" pomiędzy strstr daje to ze podczas wyszukiwania nie bedzie zwracało uwagi na wielkosc liter , wypisze tel. (62)123.....
echo strstr('zsl@gmail.com','@'); //@gmail.com
echo strstr('zsl@gmail.com','64'); //@gmail.com znak @ binarnie podany

$domain = substr(strsrt('zal@gmail.com','@'),1); //'wycina" czesci stringa,  @ w zal@gmail.com
echo $domain; //wyswietli @gmail.com





 ?>
