<?php include 'header.php' ?>
<header class="navbar navbar-custom-color sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="index.php">Admin Panel</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav flex-row">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="javascript:void;">Logged in as Arefin</a>
        </div>
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="profile.php"><i class="fas fa-user"></i> Edit Profile</a>
        </div>
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="login.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
    </div>
</header>


<div class="right-part container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-3 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3 sidebar-sticky">
                <ul class="nav flex-column">

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">
                            <span data-feather="home" class="align-text-bottom"></span>
                            Dashboard
                        </a>
                    </li>

                    <li class="nav-item dd-item">
                        <a class="nav-link dd-link collapsed" data-bs-toggle="collapse" data-delay="0"
                            href="#collapseSetting" role="button" aria-expanded="false"
                            aria-controls="collapseSetting">
                            <span data-feather="folder" class="align-text-bottom"></span>
                            Settings
                        </a>
                        <div class="collapse" id="collapseSetting">
                            <a class="nav-link inner-item" href="#">
                                General Settings
                            </a>
                            <a class="nav-link inner-item" href="#">
                                Payment Settings
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="form.php">
                            <span data-feather="file-text" class="align-text-bottom"></span>
                            Form
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="form-tab.php">
                            <span data-feather="file-text" class="align-text-bottom"></span>
                            Form Tab
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="table.php">
                            <span data-feather="file-text" class="align-text-bottom"></span>
                            Table
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="datatable.php">
                            <span data-feather="file-text" class="align-text-bottom"></span>
                            Data Table
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-9 px-md-4 pb-3">

            <h1 class="page-heading">
                Datatable
                <a href="form.php" class="btn btn-primary btn-sm right"><i class="fas fa-plus"></i> Add New</a>
            </h1>

            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Property Name</th>
                            <th scope="col">Property Price</th>
                            <th scope="col">Location</th>
                            <th scope="col">Category</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>207 AB Villa</td>
                            <td>$10,000</td>
                            <td>NewYork</td>
                            <td>Villa</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>207 AB Villa</td>
                            <td>$10,000</td>
                            <td>NewYork</td>
                            <td>Villa</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>207 AB Villa</td>
                            <td>$10,000</td>
                            <td>NewYork</td>
                            <td>Villa</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>207 AB Villa</td>
                            <td>$10,000</td>
                            <td>NewYork</td>
                            <td>Villa</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </main>
    </div>
</div>

<?php include 'footer.php' ?>