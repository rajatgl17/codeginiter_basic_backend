<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </li>
            <li>
                <a href="<?php echo BASE_URL; ?>"><i class="fa fa-dashboard fa-fw"></i> Home</a>
            </li>
            <?php if($this->session->userdata('user_type') == 1){ ?>
            <li>
                <a href="#"><i class="fa fa-user fa-fw"></i> Users<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo BASE_URL.'users'; ?>"><i class="fa fa-list-ol fa-fw"></i> Users List</a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL.'users/add_user'; ?>"><i class="fa fa-plus  fa-fw"></i> Add New User</a>
                    </li>
                </ul>
            </li>
            <?php } ?>
            <li>
                <a href="<?php echo BASE_URL; ?>profile"><i class="fa fa-user  fa-fw"></i> Profile</a>
            </li>
            <li>
                <a href="<?php echo BASE_URL; ?>profile/change_password"><i class="fa fa-wrench  fa-fw"></i> Change Password</a>
            </li>
        </ul>
    </div>
</div>