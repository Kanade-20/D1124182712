<?php
    $row_count = $_GET['row_num'];
    $col_count = $_GET['col_num'];
    $gender = $_GET['gender'];
    $dept = $_GET['department'];
    $mes = $_GET['message'];
   
    echo '表格大小:'. $row_count .'列，'. $col_count .'行。<br/>' ;
    echo '性別:' . $gender . '<br/>';
    echo '科系:'. $dept . '<br/>';
    echo '留言:'. $mes;
    echo '<table border="1">';

    for ($i = 0; $i < $row_count; $i++) {
        echo '<tr>';

        for ($j = 0; $j < $col_count; $j++) {
            echo '<td>行' . ($i + 1) . '列' . ($j + 1) . '行' . '</td>';
        }

        echo '</tr>';
    }

    echo '</table>';
?>