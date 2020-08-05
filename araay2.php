<?php

// 1次元配列
$stmt = [1000,	'ノート',	200];
  echo $stmt[0] , $stmt[1] ,$stmt[2] ;

// 2次元配列
$stmt = [ 
  [1000,	'ノート',	200],
  [1001,	'鉛筆',	50],
  [1002,	'ボールペン',	100]
];
  // 上と同じように ノートの一行をechoしてください｡
  foreach ($stmt as $value) {
    foreach ($value as $val) {
          echo   $val	;
    }
}
exit; //中断
echo $stmt[0][0], $stmt[0][1] ,$stmt[0][2] , '<br>';
echo $stmt[1][0], $stmt[1][1] ,$stmt[1][2] , '<br>';
echo $stmt[2][0], $stmt[2][1] ,$stmt[2][2];

?>