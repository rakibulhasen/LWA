<?php

require 'config.php';

require 'header.php';

$city = $_REQUEST['city'];


function render_date($date) {
    return date("d/m/Y H:m:s A");
  }




?>


<div class="container mt-5 mb-5">

<?php

  if(isset($_REQUEST['er_msg'])){
    echo '<p class="alert alert-danger">';
    $er_msg = $_REQUEST['er_msg'];
    echo $er_msg;
    echo '</p>';
  }

  
  $statement = $pdo->prepare("SELECT * FROM students WHERE city=?");
  $statement->execute([$city]);
  $students = $statement->fetchAll(PDO::FETCH_ASSOC);

  echo "<pre>";
  print_r($students);
  echo "<pre>";

  echo count($students);
  


?>


  <h2 class="text-center text-bg-primary p-2 mb-5"><?php echo $city .'  ('. count($student) . ')'?></h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Date</th>
        <th scope="col">City</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

    <?php

        foreach($students as $student) {
          ?>
          <tr>
            <th scope="row"><?= $student['id'] ?></th>
            <td><?= $student['first_name'] ?></td>
            <td><?= $student['last_name'] ?></td>
            <td><?= $student['email'] ?></td>
            <td><?= render_date($student['date']) ?></td>
            <td><?= $student['city'] ?></td>
            <td>
              <a href="edit.php?id=<?= $student['id'] ?>" class="btn btn-success">Edit</a>
              <a href="delete.php?id=<?= $student['id'] ?>" class="btn btn-danger" confirm("Press a button!\nEither OK or Cancel.");>Delete</a>
            </td>
          </tr>
          <?php
        }
    ?>

   
    
    </tbody>
  </table>
</div>



<?php

require 'footer.php';

?>