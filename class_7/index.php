<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .links{
      display: inline-block;
      width: 40px;
      height: 40px;
      line-height: 40px;
      font-size: 20px;
      margin-right: 5px;
      text-decoration: none;
      background: #ddd;
      text-align: center;
    }
  </style>
</head>
<body>

<?php 

// $dbhost = 'localhost';
// $dbname = 'ecommerce_project';
// $dbuser = 'root';
// $dbpassword = '';

// try {

//     $pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpassword);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// } catch (PDOException $e) {

//     echo $e->getMessage();

// }


// // Fetch column
// $statement = $pdo->prepare("SELECT email FROM users");
// $statement->execute();

// $result = $statement->fetchAll(PDO::FETCH_COLUMN);


// echo "<pre>";
// print_r($result);


// // Fetch Group
// $statement = $pdo->prepare("SELECT country, name FROM admins");
// $statement->execute();

// $result = $statement->fetchAll(PDO::FETCH_GROUP | PDO::FETCH_COLUMN);


// echo "<pre>";
// print_r($result);


// // Fetch botth
// $statement = $pdo->prepare("SELECT country, name FROM admins");
// $statement->execute();

// $result = $statement->fetchAll(PDO::FETCH_BOTH);


// echo "<pre>";
// print_r($result);


// // Distinct statement
// $statement = $pdo->prepare("SELECT distinct(country) FROM admins");
// $statement->execute();

// $result = $statement->fetchAll(PDO::FETCH_NUM);


// echo "<pre>";
// print_r($result);


// // MIN() AND MAX()
// // $statement = $pdo->prepare("SELECT MIN(item_order) AS 'top selse' FROM category");
// $statement = $pdo->prepare("SELECT MAX(item_order) AS 'top selse' FROM category");
// $statement->execute();

// $result = $statement->fetchAll(PDO::FETCH_ASSOC);


// echo "<pre>";
// print_r($result);


// // SUM()
// // $statement = $pdo->prepare("SELECT MIN(item_order) AS 'top selse' FROM category");
// // $statement = $pdo->prepare("SELECT COUNT(item_order) AS 'Total Selse' FROM category");
// $statement = $pdo->prepare("SELECT SUM(item_order) AS 'Total Selse' FROM category");
// $statement->execute();

// $result = $statement->fetch(PDO::FETCH_ASSOC);


// echo "<pre>";
// print_r($result);



// // Where 
// $statement = $pdo->prepare("SELECT name FROM users WHERE status=? AND address=?");
// $statement->execute(['Active', 'Sherpur']);
// $result = $statement->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($result);


$dbhost = 'localhost';
$dbname = 'crud_project';
$dbuser = 'root';
$dbpassword = '';

try {

    $pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    echo $e->getMessage();

}


// // BETWEEN 
// $statement = $pdo->prepare("SELECT first_name, last_name, age FROM students WHERE age BETWEEN 22 AND 40 ORDER BY age ASC");
// $statement->execute();
// $result = $statement->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($result);



// // LIKE 
// $statement = $pdo->prepare("SELECT first_name, last_name, email FROM students WHERE email LIKE ? ");
// $statement->execute(['%s%']);
// $result = $statement->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($result);



// // WHERE IN 
// $statement = $pdo->prepare("SELECT first_name, last_name, email, city FROM students WHERE city IN (?, ?)");
// $statement->execute(['Dhaka', 'Comilla']);
// $result = $statement->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($result);


// // WHERE IN 
// $statement = $pdo->prepare("SELECT first_name, last_name, email, city FROM students WHERE city NOT IN (?, ?)");
// $statement->execute(['Dhaka', 'Comilla']);
// $result = $statement->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($result);



// // when subquery
// $statement = $pdo->prepare("SELECT first_name, last_name, city
//                             FROM students 
//                             WHERE city 
//                             IN (SELECT city FROM institutes)
//                             ORDER BY city ASC
//                             LIMIT 2
//                             OFFSET 1
//                             ");


// $statement->execute();
// $result = $statement->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($result);



// // One to one join query 
// $statement = $pdo->prepare("SELECT 
//                 s.first_name,
//                 s.last_name,
//                 s.email,
//                 -- s.city,
//                 i.city AS institute_name  -- 
//                 FROM students s
//                 INNER JOIN institutes i
//                 ON s.institute_id = i.id
//     ");


// $statement->execute();
// $result = $statement->fetchAll(PDO::FETCH_ASSOC);

?>
<!---
<style>
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 900px;
  margin: 50px auto;
}

th, td {
  padding: 15px;
}
</style>

<table>
  <tr>
    <th>ID</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Email</th>
    <th>Institure Name</th>
  </tr>

  
  <?php
  $i = 0;
foreach ($result as $row) {
    $i++
    ?>
    <tr>
    <td><?= $i ?></td>
    <td><?= $row['first_name'] ?></td>
    <td><?= $row['last_name'] ?></td>
    <td><?= $row['email'] ?></td>
    <td><?= $row['institute_name'] ?></td>
  </tr>

    <?php
}
?>
</table>

-->


<?php 

if(isset($_POST['create_student'])) {
  $data = [];
  try {

    $first_name = strip_tags( $_POST['first_name']);
    $last_name = strip_tags( $_POST['last_name']);
    $email = strip_tags( $_POST['email']);
    $age = strip_tags( $_POST['age']);
    $institute = strip_tags( $_POST['institute']);
    $date = time();
    $city = strip_tags( $_POST['city']);



    $data['institute_id'] = strip_tags( $_POST['institute']);
    $data['first_name'] = strip_tags( $_POST['first_name']);
    $data['last_name'] = strip_tags( $_POST['last_name']);
    $data['email'] = strip_tags( $_POST['email']);
    $data['age'] = strip_tags( $_POST['age']);
    $data['date'] = time();
    $data['city'] = strip_tags( $_POST['city']);
   
    // print_r(implode(",", array_keys($data)));
    // print_r(implode(",", $data));

    // $key = implode(",", array_keys($data));

    // $values = implode("`,`", $data);


    if(!$first_name || !$last_name || !$email || !$age || !$institute || !$city) {
      throw new Exception("Please filed out the form");
    }

    // $stmt = $pdo->prepare("INSERT INTO students ($key) VALUE (?, ?, ?, ?, ?, ?, ?)");
    // $stmt->execute([$values]);


    // INSERT INTO `students` (`id`, `institute_id`, `first_name`, `last_name`, `email`, `age`, `date`, `city`) VALUES (NULL, '3', 'Janana', 'Kalamn', 'janna@gmail.com', '21', '31243124', 'Dhaka');

    $stmt = $pdo->prepare("INSERT INTO students (institute_id, first_name, last_name, email, age, date, city) VALUE (?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$institute, $first_name, $last_name, $email, $age, $date, $city]);

    echo "Data successfully inserted";



  } catch (Exception $e) {

      echo $e->getMessage();

  }
}

?>

<div class="container" style="width:900px; margin:50px auto">
  <form action="" method="post">
    <label for="first_name">First name:</label><br>
    <input type="text" id="first_name" name="first_name"><br>
    <label for="last_name">Last name:</label><br>
    <input type="text" id="last_name" name="last_name"><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br>
    <label for="age">Age:</label><br>
    <input type="text" id="age" name="age"><br>
    <label for="institute">Institute:</label><br>
    <select name="institute" id="institute">
      <?php 
        $q = $pdo->prepare("SELECT * FROM institutes");
        $q->execute();
        $result = $q->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as $row) {
          ?>
            <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
          <?php
        }
      ?>
      
    </select><br>
    <label for="city">City:</label><br>
    <input type="text" id="city" name="city"><br><br>
    <button type="submit" name="create_student">Create Student</button>
  </form>
</div>

<?php
// // One to one join query 
// $statement = $pdo->prepare("SELECT 
//               s.first_name,
//               s.last_name,
//               s.email,
//               s.age,
//               s.date,
//               s.city,
//               i.name AS institute_name
//               FROM students s
//               JOIN institutes i
//               ON s.institute_id = i.id

// ");

// // One to one join query 
// $statement = $pdo->prepare("SELECT 
//               s.first_name,
//               s.last_name,
//               s.email,
//               s.age,
//               s.date,
//               s.city,
//               i.name AS institute_name
//               FROM institutes i
//               LEFT JOIN students s
//               ON i.id = s.id 

// ");

$per_page = 4;
$q = $pdo->prepare("SELECT * FROM students");
$q->execute();
$total = $q->rowCount();
$result = $q->fetchAll(PDO::FETCH_ASSOC);
$total_pages = ceil($total / $per_page);
echo $total_pages;
echo "<pre>";
// 4 4 4 4 3
// print_r($result);
echo "</pre>";






if(!isset($_REQUEST['p'])) {
  $start = 1;
} else {
  $start = $per_page * ($_REQUEST['p'] -1 ) + 1;
}
echo $start;

// echo "<div>";
// $j = 0;
// $k = 0;
// $arr_p = [];
// foreach($result as $row) {
//   $j++;
//   if($j >= $start){
//     $k++;
//     if($k > $per_page) continue;
//     $arr_p[] = $row['id'] . ' ';
//   }
// }
// echo "</div>";

// echo "<pre>";
// print_r($arr_p);
// echo "</pre>";
$arr_p = [];
$j = 0;
$k = 0;
foreach($result as $row){
  $j++;
  if($j >= $start) {
    $k++;
    if($k > $per_page) {
      continue;
    }
    $arr_p[] = $row['id'];
  }
}



// echo "<pre>";
// print_r($arr_p);
// echo "</pre>";



/*

p = 1 -> 1 2 3 4          start = 4 
p = 2 -> 5 6 7 8          start = 4 * (2 - 1) + 1    
p = 3 -> 9 10 11 12       start = 4 * (3 - 1) + 1     
p = 4 -> 13 14 15 16      start = 4   (4 - 1) + 1   
p = 5 -> 17 18 19 20      start = 4 * (5 - 1) + 1



p = 1 -> 1 2 3 4          start = per_page 
p = 2 -> 5 6 7 8          start = per_page * (p - 1) + 1    
p = 3 -> 9 10 11 12       start = per_page * (p - 1) + 1     
p = 4 -> 13 14 15 16      start = per_page   (p - 1) + 1   
p = 5 -> 17 18 19 20      start = per_page * (p - 1) + 1

*/














// One to one join query 
$statement = $pdo->prepare("SELECT 
              s.*,
              i.name AS institute_name
              FROM students s
              RIGHT JOIN institutes i
              ON s.institute_id = i.id
");


$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
// print_r($result);
echo "</pre>";


?>
<style>
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 900px;
  margin: 50px auto;
}

th, td {
  padding: 15px;
}
</style>

<table>
  <tr>
    <th>ID</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Email</th>
    <th>Age</th>
    <th>City</th>
    <th>Date</th>
    <th>Institure Name</th>
  </tr>
  <?php
  $i = 0;
foreach ($result as $row) {
    $i++;
    if(in_array($row['id'], $arr_p)):
    ?>
    <tr>
    <td><?= $i ?></td>
    <td><?= $row['first_name'] ?></td>
    <td><?= $row['last_name'] ?></td>
    <td><?= $row['email'] ?></td>
    <td><?= $row['age'] ?></td>
    <td><?= $row['city'] ?></td>
    <td><?php
      echo date('d-m-Y', $row['date']);
    ?></td>
    <td><?= $row['institute_name'] ?></td>
  </tr>

  <?php endif; ?>

    <?php
}
?>
</table>

<?php 

if(isset($_REQUEST['p'])){
  if($_REQUEST['p'] == 1) {
    printf("<a class='links' href='Javascript:void'>%s</a>","<<");
  } else {
    printf("<a class='links' href='http://localhost:8080/LWR/class_7/?p=%s'>%s</a>", $_REQUEST['p'] - 1, "<<");
  }
} else {
  printf("<a class='links' href='Javascript:void'>%s</a>","<<");
}

for($i=1; $i<=$total_pages;$i++) {
  printf("<a class='links' href='http://localhost:8080/LWR/class_7/?p=%s'>%s</a>", $i, $i);
}

if(isset($_REQUEST['p'])){
  if($_REQUEST['p'] == $total_pages) {
    printf("<a class='links' href='Javascript:void'>%s</a>",">>");
  } else {
    printf("<a class='links' href='http://localhost:8080/LWR/class_7/?p=%s'>%s</a>", $_REQUEST['p'] + 1, ">>");
  }
} else {
  printf("<a class='links' href='http://localhost:8080/LWR/class_7/?p=%s'>%s</a>", 2,">>");
}

?>




 

  
</body>
</html>