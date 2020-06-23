<?php
require_once "connection.php";

if (isset($_POST["str"])) {
    $str = $_POST["str"];
    $str = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $str);

    $str = str_replace(array('.', ',', ')', '(', '“', '”', ':'), '', $str);
    $str = strtolower($str);

    $lines = explode("\n", $str);
    $wordsArray = array();
    foreach ($lines as $line) {
        if ($line) {
            $arr = explode(" ", $line);
            $wordsArray = array_merge($wordsArray, $arr);
        }
    }

    $wordsCount = array();
    $count = 1;
    for ($i = 0; $i < sizeof($wordsArray); $i++) {
        if ($wordsArray[$i]) {
            for ($j = 0; $j < sizeof($wordsArray); $j++) {
                if (($wordsArray[$i] === $wordsArray[$j]) AND ($i !== $j)) {
                    $count++;
                }
            }
            $wordsCount[$wordsArray[$i]] = $count;
            $count = 1;
        }
    }


    foreach ($wordsCount as $word => $count) {
        $query = "select count from wordcount where word = '$word'";
        $result = mysqli_query($conn, $query);

        if ($result AND mysqli_fetch_array($result)) {
            $query = "update wordcount set count = count + $count where word = '$word'";
            mysqli_query($conn, $query);
        } else {
            $query = "insert into wordcount (word, count) values ('$word',$count)";
            mysqli_query($conn, $query);
        }
    }
}

if(isset($_POST["word"])){
    $word = $_POST["word"];

    $query = "select count from wordcount where word = '$word'";
    $result = mysqli_query($conn, $query);

    if ($result AND mysqli_fetch_array($result)) {
        $query = "update wordcount set count = count + 1 where word = '$word'";
        mysqli_query($conn, $query);
    } else {
        $query = "insert into wordcount (word, count) values ('$word',$count)";
        mysqli_query($conn, $query);
    }
}