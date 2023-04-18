<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Submit your Project Title</title>
    <style media="screen">
      .myinlines{
        display: block;
      }
      .myinlines label{
        width: 200px;
      }
    </style>
  </head>
  <body>
    <h1>Gandaki University</h1>
    <h2>BIT Program</h2>
    <h3>Add Project Title</h3>
    <div class="" style="background-color:yellow">
      <?php
      print_r($_POST);
       ?>
    </div>

    <form class="" action="/classroom.php"  method="post">
      <div class="myinlines">
        <label for="id">ID</label>
      <input type="text" name="id" value="">
      </div>
      <div class="myinlines">
        <label for="title">Project Title</label>
        <input type="text" name="title" value="">
      </div>
      <div class="myinlines">
        <label for="students">Name of Students</label>
        <input type="text" name="students" value="" placeholder="Separated by Commas , " onchange="superVisorEnable();">
      </div>

      <label for="supervisor">Supervisor</label>
      <input type="text" name="supervisor" value="" disabled>
      <label for="lang">Languages</label>
      <ul>
        <li><input type="checkbox" name="lang[]" value="PHP"> PHP</li>
        <li> <input type="checkbox" name="lang[]" value="JS">JavaScript </li>
        <li> <input type="checkbox" name="lang[]" value="HTML"> HTML </li>
        <li> <input type="checkbox" name="lang[]" value="CSS"> CSS </li>
        <li> <input type="checkbox" name="lang[]" value="other" onclick="enableOthers();"> Others </li>
        <li> <label for="others">Others Specify</label> <input type="text" name="others" value="" disabled> </li>
      </ul>
      <p id="myValues">First Enter the values</p>
      <input type="button" name="submit" value="Submit Form" onclick="importValues();">

      <input type="reset" name="reset" value="Reset">
    </form>
    <script type="text/javascript">
      function enableOthers() {
        var_others = document.querySelector('input[name="lang[]"][value="other"]');
        var_other = document.querySelector('input[name="others"]')
        if(var_others.checked){
          var_other.disabled=false;
        }else{
          var_other.disabled=true;
        }
      }

      function superVisorEnable() {
        students_var = document.querySelector('input[name="students"]');
        supervisor_var = document.querySelector('input[name="supervisor"]');
        if (students_var.value == ""){
          supervisor_var.disabled = true;
        }else{
          supervisor_var.disabled = false;
        }
      }

      function importValues(){
        message = document.getElementById('myValues');
        message.innerText = "Title is " + document.getElementsByName('title')[0].value ;
        // xyz = document.getElementsByName('title');
      }
    </script>
  </body>
</html>
