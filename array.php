<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Introduction to score with php</title>
  </head>
  <body>
    <h1>Score Card </h1>
    <?php
      $students = array('Prabesh', 'Roshan', 'Pujan', 'Nitesh', 'Sanam');
      $score = array(
        array(10, 11, 12),
        array(13,14,15),
        array(16,12,12),
        array(16,12,12),
        array(16,12,12),
      );
    ?>
    <table>
      <tr>
        <th>Students Name</th>
        <th>C Programming</th>
        <th>Java Programming</th>
        <th>Web Programming</th>
      </tr>
      <?php for ($i=0; $i<5; $i++) {?>
        <tr>
          <td><?php echo $students[$i]; ?></td>
          <?php for ($j=0; $j < 3; $j++) {
            echo "<td>". $score[$i][$j] . "</td>";
          } ?>
        </tr>
      <?php } ?>
    </table>
  </body>
</html>
