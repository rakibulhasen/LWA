<?php


include 'header.php' ?>

<?php include 'top-bar.php' ?>


<?php

$admin = $_SESSION['admin'];

if (isset($_POST['update_profile'])) {

    try {
        $name =  strip_tags($_POST['name']);
        $email = strip_tags($_POST['email']);
        $country = strip_tags($_POST['country']);
        $phone = strip_tags($_POST['phone']);
        $password = strip_tags($_POST['password']);
        $retype_password = strip_tags($_POST['retype_password']);

        $file = $_FILES['photo'];
        $filename  = $file['name'];
        $path = 'images/' . $filename;
        $temp_name = $file['tmp_name'];

        if (empty($name)) {
            // throw new Exception('Please write your name');
        }

        if ($name == '') {
            throw new Exception('Please enter your Category Name');
        }

        if ($email == '') {
            throw new Exception('Please write your Email');
        }

        if ($country == '') {
            throw new Exception('Please write your Country');
        }

        if ($filename == '') {
            $path = $admin['photo'];
        }

        $q = $pdo->prepare("SELECT * FROM admins WHERE email=? AND id!=?");
        $q->execute([$email, $admin['id']]);
        $result = $q->rowCount();
        if ($result) {
            throw new Exception('Email already exist');
        }


        $sql = "UPDATE admins SET name=?, email=?, country=?, phone=?, photo=?";
        $params = [$name, $email, $country, $phone, $path];


        $q = $pdo->prepare("SELECT * FROM admins WHERE id=?");
        $q->execute([$admin['id']]);
        $result = $q->fetch(PDO::FETCH_ASSOC);
        $db_pass = $result['password'];


        if ($password != '') {
            if (!password_verify($password, $db_pass)) {
                throw new Exception('Your password is incorrent');
            }


            if ($retype_password == '') {
                throw new Exception('Please write new password');
            }

            $final_password = password_hash($retype_password, PASSWORD_DEFAULT);
            $sql .= ", password=?";
            $params[] =  $final_password;
        }








        move_uploaded_file($temp_name, $path);

        $sql .= " WHERE id=?";
        $params[] = $admin['id'];

        // UPDATE category SET name=?, photo=?, item_order=? WHERE id=?
        $q = $pdo->prepare($sql);
        $q->execute($params);

        $_SESSION['admin']['name'] = $name;
        $_SESSION['admin']['email'] = $email;
        $_SESSION['admin']['country'] = $country;
        $_SESSION['admin']['phone'] = $phone;
        // $_SESSION['admin']['password'] = $password;
        $_SESSION['admin']['photo'] = $path;
        $_SESSION['success_message'] = "Account Updated Successfully";
        header('location: profile.php');
        exit;
    } catch (Exception $e) {
        $error_mssage = $e->getMessage();
    }
}


$countries = [
    "Afghanistan",
    "Albania",
    "Algeria",
    "Andorra",
    "Angola",
    "Antigua and Barbuda",
    "Argentina",
    "Armenia",
    "Australia",
    "Austria",
    "Azerbaijan",
    "Bahamas",
    "Bahrain",
    "Bangladesh",
    "Barbados",
    "Belarus",
    "Belgium",
    "Belize",
    "Benin",
    "Bhutan",
    "Bolivia",
    "Bosnia and Herzegovina",
    "Botswana",
    "Brazil",
    "Brunei",
    "Bulgaria",
    "Burkina Faso",
    "Burundi",
    "Cabo Verde",
    "Cambodia",
    "Cameroon",
    "Canada",
    "Central African Republic",
    "Chad",
    "Chile",
    "China",
    "Colombia",
    "Comoros",
    "Congo (Congo-Brazzaville)",
    "Costa Rica",
    "Croatia",
    "Cuba",
    "Cyprus",
    "Czech Republic",
    "Democratic Republic of the Congo",
    "Denmark",
    "Djibouti",
    "Dominica",
    "Dominican Republic",
    "Ecuador",
    "Egypt",
    "El Salvador",
    "Equatorial Guinea",
    "Eritrea",
    "Estonia",
    "Eswatini",
    "Ethiopia",
    "Fiji",
    "Finland",
    "France",
    "Gabon",
    "Gambia",
    "Georgia",
    "Germany",
    "Ghana",
    "Greece",
    "Grenada",
    "Guatemala",
    "Guinea",
    "Guinea-Bissau",
    "Guyana",
    "Haiti",
    "Honduras",
    "Hungary",
    "Iceland",
    "India",
    "Indonesia",
    "Iran",
    "Iraq",
    "Ireland",
    "Israel",
    "Italy",
    "Ivory Coast",
    "Jamaica",
    "Japan",
    "Jordan",
    "Kazakhstan",
    "Kenya",
    "Kiribati",
    "Kuwait",
    "Kyrgyzstan",
    "Laos",
    "Latvia",
    "Lebanon",
    "Lesotho",
    "Liberia",
    "Libya",
    "Liechtenstein",
    "Lithuania",
    "Luxembourg",
    "Madagascar",
    "Malawi",
    "Malaysia",
    "Maldives",
    "Mali",
    "Malta",
    "Marshall Islands",
    "Mauritania",
    "Mauritius",
    "Mexico",
    "Micronesia",
    "Moldova",
    "Monaco",
    "Mongolia",
    "Montenegro",
    "Morocco",
    "Mozambique",
    "Myanmar (Burma)",
    "Namibia",
    "Nauru",
    "Nepal",
    "Netherlands",
    "New Zealand",
    "Nicaragua",
    "Niger",
    "Nigeria",
    "North Korea",
    "North Macedonia",
    "Norway",
    "Oman",
    "Pakistan",
    "Palau",
    "Palestine State",
    "Panama",
    "Papua New Guinea",
    "Paraguay",
    "Peru",
    "Philippines",
    "Poland",
    "Portugal",
    "Qatar",
    "Romania",
    "Russia",
    "Rwanda",
    "Saint Kitts and Nevis",
    "Saint Lucia",
    "Saint Vincent and the Grenadines",
    "Samoa",
    "San Marino",
    "Sao Tome and Principe",
    "Saudi Arabia",
    "Senegal",
    "Serbia",
    "Seychelles",
    "Sierra Leone",
    "Singapore",
    "Slovakia",
    "Slovenia",
    "Solomon Islands",
    "Somalia",
    "South Africa",
    "South Korea",
    "South Sudan",
    "Spain",
    "Sri Lanka",
    "Sudan",
    "Suriname",
    "Sweden",
    "Switzerland",
    "Syria",
    "Taiwan",
    "Tajikistan",
    "Tanzania",
    "Thailand",
    "Timor-Leste",
    "Togo",
    "Tonga",
    "Trinidad and Tobago",
    "Tunisia",
    "Turkey",
    "Turkmenistan",
    "Tuvalu",
    "Uganda",
    "Ukraine",
    "United Arab Emirates",
    "United Kingdom",
    "United States of America",
    "Uruguay",
    "Uzbekistan",
    "Vanuatu",
    "Vatican City",
    "Venezuela",
    "Vietnam",
    "Yemen",
    "Zambia",
    "Zimbabwe"
];



?>


<div class="right-part container-fluid">
    <div class="row">
        <?php include 'sidebar.php' ?>

        <main class="col-md-9 ms-sm-auto col-lg-9 px-md-4 pb-3">

            <h1 class="page-heading">Edit Profile</h1>

            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-3">
                        <img src="<?php echo ($admin['photo']) ? $admin['photo'] : 'images/default_admin.jpg' ?>" class="img-thumbnail mb_10" alt="">
                        <input type="file" name="photo" class="form-control">
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" value="<?php echo $admin['name'] ?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" value="<?php echo $admin['email'] ?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="" class="form-label">Country</label>
                                <select name="country" id="" class="form-control">
                                    <?php

                                    foreach ($countries as $country) {
                                        if ($_SESSION['admin']['country'] == $country) {
                                            $selected = 'selected';
                                        } else {
                                            $selected = '';
                                        }
                                        printf('<option value="%s" %s>%s</option>', htmlspecialchars($country), $selected, htmlspecialchars($country));
                                    }

                                    ?>

                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="" class="form-label">Phone</label>
                                <input type="text" class="form-control" name="phone" value="<?php echo $admin['phone'] ?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="" class="form-label">Old Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="" class="form-label">Retype Password</label>
                                <input type="password" class="form-control" name="retype_password">
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="submit" value="Update" name="update_profile" class="btn btn-primary">
                                <!-- <button type="aubmit" class="btn btn-primary" name="update_profile">Update</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </main>
    </div>
</div>

<?php include 'footer.php' ?>