<?php

echo "Yavuz Selim Parmaksız - 114200042";
echo "Hasan Kemik - 116207076";


    $serverName = "denemesunucusu.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "denemeveritabani", // update me
        "Uid" => "yonetici", // update me
        "PWD" => "Selim95!" // update me
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    $tsql= "SELECT TOP (1000) * FROM [SalesLT].[Customer]";
    $getResults= sqlsrv_query($conn, $tsql);
    echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['CategoryName'] . " " . $row['ProductName'] . PHP_EOL);
    }
    sqlsrv_free_stmt($getResults);


?>