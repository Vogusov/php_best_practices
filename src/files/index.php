<?php
$file = __DIR__ . '/test.txt';

// Проверка наличия файла
print "Checking if file exist\n";
if(!file_exists($file)) {
    exit("File $file doesn't exist\n");
}

// Открытие файла для чтения
print "Open file for reading\n";
if(!($f = fopen($file, 'r'))) {
    exit("Can't open file $file\n");
}

// чтение данных
print "Reading file:\n";
$str = '';
while(!feof($f)) {
    $str = fread($f, 10);
//    $str = fgets($f, 10); // читает до перевода строки
//    $str = fgets($f, 10); // удаляет прочитанное
//    $str = fgetc($f); // один символ
    print $str;
}

// закрытие файла
print "Close descriptor.\n";
fclose($f);

/*
if($arr = file($file, "r+")) {
    for($i = 0; $i < count($arr); $i++) {
        printf("\n%s", $arr[$i]);
    }
}
*/
