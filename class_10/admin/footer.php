<script src="dist/js/jquery-3.6.3.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script src="dist/js/feather.min.js"></script>
<script src="dist/js/jquery.dataTables.min.js"></script>
<script src="dist/js/dataTables.bootstrap5.min.js"></script>
<script src="dist/tinymce/tinymce.min.js"></script>
<script src="dist/js/select2.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/sweetalert.js"></script>
<script src="dist/js/custom.js"></script>

<script src="dist/js/chart.min.js"></script>
<script>
    // Graphs
    const ctx = document.getElementById('myChart');
    const myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
            ],
            datasets: [{
                data: [
                    1237,
                    1002,
                    1343,
                    1557,
                    1142,
                    1134,
                    1190,
                    1512,
                    889,
                    1606,
                    1370,
                    1275
                ],
                lineTension: 0,
                backgroundColor: 'transparent',
                borderColor: '#007bff',
                borderWidth: 4,
                pointStyle: 'circle',
                pointBackgroundColor: '#007bff',
            }]
        },
        options: {
            responsive: true,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        callback: function(value, index, values) {
                            return '$' + value;
                        }
                    }
                }]
            },
            legend: {
                display: false
            }
        }
    });
</script>

<?php

if (isset($error_mssage)) {
    // echo '<div class="alert alert-danger">'. $error_mssage .'</div>';

?>
    <script>
        Swal.fire({
            text: '<?= $error_mssage ?>',
            icon: 'error',
        })
    </script>
<?php
}

// var_dump($_SESSION['success_message']);

// $_SESSION['success_message'] = 'YOur have logied';

if (isset($_SESSION['success_message'])) {
    // echo '<div class="alert alert-success">'. $_SESSION['success_message'] .'</div>';
?>
    <script>
        Swal.fire({
            text: '<?php echo $_SESSION['success_message']; ?>',
            icon: 'success',
        })
    </script>
<?php
    unset($_SESSION['success_message']);
}
?>

</body>

</html>