<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>List of projects</title>
  </head>
  <body>
    <h1>Gandaki University BIT Program</h1>
    <h2>List of Projects</h2>
    <table>
      <thead>
        <tr>
          <th>S.N.</th>
          <th>Project Title</th>
          <th>Students</th>
          <th>Supervisor</th>
        </tr>
      </thead>
      <tbody>
        <?php
        class MyDB extends SQLite3 {
           function __construct() {
              $this->open('../bit2022.db');
           }
        }
        $db = new MyDB();
        if(!$db) {
           echo $db->lastErrorMsg();
        } else {
           echo "Opened database successfully\n";
        }

        $sql = <<<EOF
        SELECT * FROM BITPROJECTS
        EOF;
        $ret = $db->exec($sql);
        while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
              // echo "<tr><td>". $row['ID']."</td><td>".
              // $row['TITLE']."</td></tr>";
           }

         ?>
      </tbody>
    </table>
  </body>
</html>
