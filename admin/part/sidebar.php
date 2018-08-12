<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="../images/user.png" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username'] ?></div>
                <div class="email">john.doe@example.com</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">person</i>PROFIL</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">input</i>KELUAR</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active">
                    <a href="index.php">
                        <i class="material-icons">home</i>
                        <span>DASHBOARD</span>
                    </a>
                </li>
                <li>
                    <a href="dosen.php">
                        <i class="material-icons">supervisor_account</i>
                        <span>DATA DOSEN</span>
                    </a>
                </li>
                <li>
                    <a href="mahasiswa.php">
                        <i class="material-icons">supervised_user_circle</i>
                        <span>DATA MAHASISWA</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <i class="material-icons">input</i>
                        <span>KELUAR</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2018 <b>Universitas KH. A. Hasbullah.</b>
            </div>
            <div class="version">
                <b>Version: </b> 1.0.5
            </div>
        </div>
        <!-- #Footer -->
    </aside>