//soal nomor 1
<?php
$array = array("12","9","30","A","M","99","82","J","N","B");

foreach ($array as $key => $value) {
    if (ctype_digit($value)) {
        $array[$key] = intval($value);
    }
}

sort($array);
print_r($array);
?>

//soal nomor 2
<!DOCTYPE html>
<html>
<body>

<?php
echo substr_count("Palindrom","ind");
echo substr_count("abakadabra","ab");
echo substr_count("hello","");
echo substr_count("ababab","aba");
echo substr_count("aaaaaaa","aa");
echo substr_count("hell","hello");

?>

</body>
</html>

//soal nomor 3

<?php
$string = "Hello World";
foreach (count_chars($string, 1) as $i => $val)
{
   echo "Huruf \"" , chr($i) , "\" muncul $val kali.<br>";
}
?>

<?php
$string = "Bismillah";
foreach (count_chars($string, 1) as $i => $val)
{
   echo "Huruf \"" , chr($i) , "\" muncul $val kali.<br>";
}
?>

<?php
$string = "Masyaallah";
foreach (count_chars($string, 1) as $i => $val)
{
   echo "Huruf \"" , chr($i) , "\" muncul $val kali.<br>";
}
?>

