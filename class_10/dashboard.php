<?php include 'header.php';

?>

<div class="container mt-5 mb-5">
    <h2>Dashboard</h2>

    <div class="row">
        <div class="col-4">
            <?php include 'dashbord-nav.php' ?>
        </div>

        <div class="col-8">
            <div class="row">
                <div class="col-6">
                    <div class="box-item text-center bg-secondary text-white p-3 rounded">
                        <h4 class="text-white">Active Order</h4>
                        <p>4</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="box-item text-center bg-secondary text-white p-3 rounded">
                        <h4 class="text-white">Panding Order</h4>
                        <p>4</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php';
