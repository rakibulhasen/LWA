<?php

require 'config.php';

if(!isset($_COOKIE["username"]) || !isset($_COOKIE["password"])) {
    header("Location: login.php");
}

require 'header.php';

?>


<div class="container">
    <h2>Welcome to Deshboard</h2>
</div>

<?php

require 'footer.php';

?>