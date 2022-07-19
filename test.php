<?php
   class MyDB extends SQLite3 {
      function __construct() {
         $this->open('bit2021.db');
      }
   }
   $db = new MyDB();
   if(!$db) {
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }

   $sql =<<<EOF
      CREATE TABLE BITSCORE
      (ID INT PRIMARY KEY     NOT NULL,
      NAME           TEXT    NOT NULL,
      ROLL_NO        TEXT     NOT NULL,
      ADDRESS        CHAR(100),
      SCORE         REAL);
EOF;
/*
$ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Table created successfully\n";
   }
   */
//    $db->close();



// $sql =<<<EOF
//       INSERT INTO BITSCORE (ID,NAME,ROLL_NO,ADDRESS,SCORE)
//       VALUES (1, 'Alisha Kunwar', 1, 'Australia', 4 );
//
//       INSERT INTO BITSCORE (ID,NAME,ROLL_NO,ADDRESS,SCORE)
//       VALUES (4, 'Bil Bahadur', 4, 'Dolakha', 3.9);
//
// EOF;
//    $ret = $db->exec($sql);
//    if(!$ret){
//       echo $db->lastErrorMsg();
//    } else {
//       echo "Records inserted successfully\n";
//    }


// $sql =<<<EOF
//   SELECT * from BITSCORE;
// EOF;
// $ret = $db->query($sql);
// // // SQLITE3_ASSOC, SQLITE3_NUM, or SQLITE3_BOTH.
//    while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
//     //   echo "ID = ". $row['ID'] . "\n";
//     //   echo "NAME = ". $row['NAME'] ."\n";
//     //   echo "ADDRESS = ". $row['ADDRESS'] ."\n";
//     //   echo "SALARY = ".$row['SALARY'] ."\n\n";
//     print_r($row);
//     echo '<br/>';
//    }
//    echo "Operation done successfully\n";

$sql =<<<EOF
   UPDATE BITSCORE set SCORE = 4.00 where SCORE<4;
EOF;
$ret = $db->exec($sql);
if(!$ret) {
   echo $db->lastErrorMsg();
} else {
   echo $db->changes(), " Record updated successfully\n";
}
   $db->close();
?>
