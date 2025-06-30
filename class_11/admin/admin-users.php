<?php include 'header.php' ?>
<?php include 'top-bar.php' ?>

<?php

$statement = $pdo->prepare("SELECT * FROM admins");
$statement->execute();
$users = $statement->fetchAll(PDO::FETCH_ASSOC);

?>


<?php 

if ($_SESSION['admin']['role'] != 'Super Admin' && $_SESSION['admin']['role'] != 'Admin') {
    header('location: index.php');
    exit;
}

?>


<div class="right-part container-fluid">
    <div class="row">
        <?php include 'sidebar.php' ?>

        <main class="col-md-9 ms-sm-auto col-lg-9 px-md-4 pb-3">

            <h1 class="page-heading">
                Admin Users
                <a href="create-admin.php" class="btn btn-primary btn-sm right"><i class="fas fa-plus"></i> Add New</a>
            </h1>

            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Status</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        foreach ($users as $user) {

                            if ($user['role'] == 'Super Admin') {
                                if($_SESSION['admin']['role'] != 'Super Admin'){
                                    continue;
                                }
                            }

                            if ($user['role'] == 'Admin') {
                                if($_SESSION['admin']['role'] == 'Admin'){
                                    continue;
                                }
                            }

                        

                            $i++;

                        ?>

                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $user['name'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td>
                                    <?php 
                                        if($user['status'] == 'Active'): ?>
                                        <span class="badge bg-success">Active</span>
                                        <?php else: ?>
                                        <span class="badge bg-danger">Inactive</span>
                                        <?php endif; ?>
                            </td>
                                <td><?= $user['role'] ?></td>

                                <td>
                                    <?php
                                    if ($user['role'] != 'Super Admin') {

                                        if($_SESSION['admin']['role'] == 'Admin') {
                                            if($user['role'] == 'Admin'){
                                            ?>

                                            <a href="admin-edit.php?id=<?= $user['id'] ?>" class="btn btn-warning btn-sm disabled">Edit</a>
                                            <a href="delete-user.php?id=<?= $user['id'] ?>" class="btn btn-danger btn-sm disabled" onclick="return confirm('Are you sure you want to delete this user')">Delete</a>
                                        

                                        <?php }elseif($user['role'] == 'Moderator') {
                                            ?>
                                            <a href="admin-edit.php?id=<?= $user['id'] ?>" class="btn btn-warning btn-sm ">Edit</a>
                                            <a href="delete-user.php?id=<?= $user['id'] ?>" class="btn btn-danger btn-sm " onclick="return confirm('Are you sure you want to delete this user')">Delete</a>
                                            <?php
                                        } ?>

                                        <?php }if($_SESSION['admin']['role'] == 'Moderator') { ?>
                                            <a href="admin-edit.php?id=<?= $user['id'] ?>" class="btn btn-warning btn-sm disabled">Edit</a>
                                            <a href="delete-user.php?id=<?= $user['id'] ?>" class="btn btn-danger btn-sm disabled" onclick="return confirm('Are you sure you want to delete this user')">Delete</a>
                                        <?php } 
                                        if($_SESSION['admin']['role'] == 'Super Admin') {
                                        ?>

                                        <a href="admin-edit.php?id=<?= $user['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="delete-user.php?id=<?= $user['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user')">Delete</a>
                                        

                                    <?php } } ?>
                                </td>
                            </tr>

                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </main>
    </div>
</div>

<?php include 'footer.php' ?>