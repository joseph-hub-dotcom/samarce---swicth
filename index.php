<!DOCTYPE html>

<html lang="en">

<head>

<style>

        table {

          font-family: arial, sans-serif;

          border-collapse: collapse;

          width: 100%;

        }

       

        td, th {

          border: 1px solid #dddddd;

          text-align: left;

          padding: 8px;

        }

       

        tr:nth-child(even) {

          background-color: #dddddd;

        }

        </style>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

</head>

<body>

    <h2><b>Внеси студент:</b></h2>



    <form action="" method="post">

  <label for="ime">Име*:</label>

  <input type="text"  name="ime"><br><br>

  <label for="prezime">Презиме*:</label>

  <input type="text"  name="prezime"><br><br>

  <label for="indeks">Број на индекс*:</label>

  <input type="text"  name="indeks"><br><br>

  <label for="fakultet">Факултет*:</label>

  <input type="text"  name="fakultet"><br><br>

  <label for="nasoka">Насока*:</label>

  <input type="text"  name="nasoka"><br><br>

  <input type="submit"  name="vnesi" value="Внеси студент"><br><br>

      </form>




<h1>Преглед на студентите по факултети</h2>

  <form action="" method="post">

  <select id="fakulteti" name="fakulteti">

    <option   value="inf">Факултет за информатика</option>

    <option   value="Економски факултет">Економски факултет</option>

    <option  value="praven">Правен факултет</option>

  </select><br>

  <input type="submit" name="pregled" value="Прегледај">

</form>



<!-- TABELA  1 -->



<?php if(isset($_POST['pregled'])){

  $selected=$_POST['fakulteti'];

  switch($selected)

  {

    case "inf": ?>

 

<table class="table table-bordered table-hover">

    <thead>

    <h2>Студенти на факултет за информатика</h2>

    <tr>

            <th>Име</th>

            <th>Презиме</th>

            <th>Индекс</th>

            <th>Факултет</th>

             <th>Насока</th>

        </tr>

    </thead>

    <tbody>

   

    <?php

    $connection=mysqli_connect('localhost','root','','studenti');

    $query="SELECT * FROM student WHERE fakultet='Факултет за информатика'";

    $result = mysqli_query($connection,$query);

   

   

    while($row = mysqli_fetch_assoc($result)){



    $ime = $row['ime'];

    $prezime = $row['prezime'];

    $indeks = $row['indeks'];

    $fakultet = $row['fakultet'];

    $nasoka = $row['nasoka'];

   

    echo "<tr>";

    echo "<td>$ime</td>";

    echo "<td>$prezime</td>";

    echo "<td>$indeks</td>";

    echo "<td>$fakultet</td>";

    echo "<td>$nasoka</td>";

    echo "</tr>";

    }

    ?>

   

    </tbody>

    </table>

    <?php

    break;

    case "praven": ?>

 

<!-- TABELA  2 -->

<table class="table table-bordered table-hover">

    <thead>

        <h2>Студенти на правен факултет</h2>

        <tr>

            <th>Име</th>

            <th>Презиме</th>

            <th>Индекс</th>

            <th>Факултет</th>

             <th>Насока</th>

        </tr>

    </thead>

    <tbody>

   

    <?php

    $connection=mysqli_connect('localhost','root','','studenti');

    $query="SELECT * FROM student WHERE fakultet='Правен факултет'";

    $result = mysqli_query($connection,$query);

   

   

    while($row = mysqli_fetch_assoc($result)){



    $ime = $row['ime'];

    $prezime = $row['prezime'];

    $indeks = $row['indeks'];

    $fakultet = $row['fakultet'];

    $nasoka = $row['nasoka'];

   

    echo "<tr>";

    echo "<td>$ime</td>";

    echo "<td>$prezime</td>";

    echo "<td>$indeks</td>";

    echo "<td>$fakultet</td>";

    echo "<td>$nasoka</td>";

    echo "</tr>";

    }

    ?>

   

    </tbody>

    </table>

<?php break;

 }

}?>




</body>

</html>



<?php



$ime=$_POST['ime'];

$prezime=$_POST['prezime'];

$indeks=$_POST['indeks'];

$fakultet=$_POST['fakultet'];

$nasoka=$_POST['nasoka'];




$connection=mysqli_connect('localhost','root','','studenti');



$query="INSERT INTO student(ime,prezime,indeks,fakultet,nasoka)";

$query.="VALUES('$ime','$prezime','$indeks','$fakultet','$nasoka')";



$added_student=mysqli_query($connection,$query);





?>