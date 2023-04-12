<?php
// array indexing
$ar_buah = ['pisang' , 'mangga' , 'pepaya'];
//  mencetak salah satu index array
echo $ar_buah[2];

echo "<ol>";
foreach ($ar_buah as $buah) {
    echo"<li>$buah</li>";
}
echo "</ol>";