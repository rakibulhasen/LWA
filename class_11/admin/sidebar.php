<nav id="sidebarMenu" class="col-md-3 col-lg-3 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">

            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>

            <?php

            // Admin can not eit any admin data 
            if ($_SESSION['admin']['role'] == 'Super Admin' || $_SESSION['admin']['role'] == 'Admin') : ?>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo ADMIN_URL ?>admin-users.php">
                        <span data-feather="file-text" class="align-text-bottom"></span>
                        Admin Users
                    </a>
                </li>

            <?php endif; ?>

            <?php
            // Admin can not eit any admin data 
            if ($_SESSION['admin']['role'] == 'Super Admin' || $_SESSION['admin']['role'] == 'Admin') : ?>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo ADMIN_URL ?>category-view.php">
                        <span data-feather="file-text" class="align-text-bottom"></span>
                        Category
                    </a>
                </li>

            <?php endif; ?>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo ADMIN_URL ?>product-view.php">
                        <span data-feather="file-text" class="align-text-bottom"></span>
                        Products
                    </a>
                </li>

            <!-- <li class="nav-item dd-item">
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
                    </li> -->
        </ul>
    </div>
</nav>