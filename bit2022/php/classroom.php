<?php
class MyDB extends SQLite3 {
   function __construct() {
      $this->open('bit2022.db');
   }
}
$db = new MyDB();
if(!$db) {
   echo $db->lastErrorMsg();
} else {
   // echo "Opened database successfully\n";
}

// $sql =<<<EOF
//    CREATE TABLE BITPROJECTS
//    (ID        INT PRIMARY KEY     NOT NULL,
//    TITLE           VARCHAR(300)    NOT NULL,
//    STUDENTS        VARCHAR(400)     NOT NULL,
//    SUPERVISOR        VARCHAR(100),
//    LANG            VARCHAR(300),
//    OTHERS         VARCHAR(300)
//    );
// EOF;
//
// $ret = $db->exec($sql);
// if(!$ret){
//    echo $db->lastErrorMsg();
// } else {
//    echo "Table created successfully\n";
// }

//    $db->close();

// var_dump($_POST);

// $sql = <<<EOF
//   INSERT  INTO BITPROJECTS(ID,TITLE, STUDENTS, SUPERVISOR, OTHERS) VALUES(
//     1, "Airlines School", "Babita ", "Aishwarya", ""
//     )
// EOF;
$sql = "INSERT INTO BITPROJECTS(ID, TITLE, STUDENTS, SUPERVISOR, OTHERS) VALUES  " . $_POST['id'] . ",\"". $_POST['title']."\",\"". $_POST['students'] . "\",\"". $_POST['supervisor']."\",\"".$_POST['others']   . "\")";
echo $sql;

$sql = <<<EOF
{$sql}
EOF;

// $_POST["title"], $_POST["students"], $_POST["supervisor"], $_POST["others"]
$ret = $db->exec($sql);
if($ret){
  echo "Data Inserted Successfully";
} else{
  echo "Data Error";
}

$db->close();

 ?>
