<nav class="navbar navbar-expand navbar-light bg-gradient-light topbar mb-4 static-top shadow p-3 mb-5">

    <style>
        .button-48 {
            appearance: none;
            background-color: #FFFFFF;
            border-radius: 12px;
            box-sizing: border-box;
            color: #000000;
            cursor: pointer;
            display: inline-block;
            border: none;
            font-family: Poppins, sans-serif;
            letter-spacing: 0;
            line-height: 0.1em;
            margin: 0;
            opacity: 1;
            outline: 0;
            padding: 1.3em 1.1em;
            position: relative;
            text-align: center;
            text-decoration: none;
            text-rendering: geometricprecision;
            transition: opacity 300ms cubic-bezier(.694, 0, 0.335, 1), background-color 100ms cubic-bezier(.694, 0, 0.335, 1), color 100ms cubic-bezier(.694, 0, 0.335, 1);
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: baseline;
            white-space: nowrap;
        }

        .button-48:before {
            animation: opacityFallbackOut .5s step-end forwards;
            backface-visibility: hidden;
            background-color: #EBEBEB;
            clip-path: polygon(-1% 0, 0 0, -25% 100%, -1% 100%);
            content: "";
            height: 100%;
            left: 0;
            border-radius: 12px;
            position: absolute;
            top: 0;
            transform: translateZ(0);
            transition: clip-path .5s cubic-bezier(.165, 0.84, 0.44, 1), -webkit-clip-path .5s cubic-bezier(.165, 0.84, 0.44, 1);
            width: 100%;
        }

        .button-48:hover:before {
            animation: opacityFallbackIn 0s step-start forwards;
            clip-path: polygon(0 0, 101% 0, 101% 101%, 0 101%);
            border-radius: 12px;
        }

        .button-48:after {
            background-color: #FFFFFF;
        }

        .button-48 span {
            z-index: 1;
            position: relative;
        }
    </style>

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('aircraft_data/dashboard'); ?>">
        <div class="sidebar-brand-icon ">
            <img src="<?php echo base_url('assets\images\gmf_logo.png'); ?>" class="img-fluid col-md-7" alt="logo" style="width:330px ;">
        </div>
    </a>


    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
        </li>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <button class="button-48"><span>Aircraft</span></button>
                <!-- <span class="mr-2 d-none d-lg-inline text-gray-100">Aircraft</span> -->
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="aircraft-dataDropdown">
                <a class="dropdown-item" href="<?php echo site_url('aircraft/aircraft_data'); ?>">
                    Aircraft Data
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo site_url('aircraft/aircraft_type'); ?>">
                    Aircraft Type
                </a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <button class="button-48"><span>Documents</span></button>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="aircraft-dataDropdown">
                <a class="dropdown-item" href="<?php echo site_url('documents/document_type'); ?>">
                    Document Type
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo site_url('documents/job_type'); ?>">
                    Job Type
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo site_url('documents/status'); ?>">
                    Status
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo site_url('documents/pic'); ?>">
                    PIC
                </a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <button class="button-48"><span>Work Order</span></button>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="aircraft-dataDropdown">
                <a class="dropdown-item" href="<?php echo site_url('work_order/ndt_wo'); ?>">
                    NDT
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo site_url('work_order/ppe_wo'); ?>">
                    PPE
                </a>
            </div>
        </li>
        <div class="topbar-divider d-none d-sm-block"></div>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-100"><?php echo $this->session->userdata('user_name') ?></span>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo site_url('dashboard'); ?>">
                    Dashboard
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                    Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo site_url('user/logout'); ?>">
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>