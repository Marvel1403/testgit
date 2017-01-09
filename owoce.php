<?php
$owoce = ['ananas', 'arbuz', 'banan', 'sliwka', 'kiwi', 'mango', 'pomarancza', 'mandarynka', 'jablko', 'brzoskwinia'];
$szukana = $_POST['zmienna1'];
$wzorzec = substr($szukana, 0, strlen($szukana));
$wyniki = [];
for ($i = 0; $i < count($owoce); $i++) {
    if ($szukana == substr($owoce[$i], 0, strlen($szukana))) {
        array_push($wyniki, $owoce[$i]);
    }
}
if (count($wyniki) == 0) {
    array_push($wyniki, "Brak powiązań z wpisaną frazą !!!");
}
echo json_encode($wyniki);


