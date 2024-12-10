<?php
include '../../inc/header.php';
include '../../inc/sidebar.php';
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Update Profile</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Update Profile</li>
            </ol>
            <div class="row">

                <div class="col-xl-4 col-md-6">
                    <div class="card mb-5" style="width: 22rem; ">
                        <div class="card-body text-center">
                            <img src="<?php echo BASE_URL ?>/assets/img/gn1.jpg" alt="" width="90px" class="rounded-circle mb-2">
                            <h5 class="card-title mb-2">Admin</h5>
                            <p class="card-text">08635463516783</p>
                            <a href="update.php" class="btn btn-primary ">Update</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card mb-5" style="width: 45rem; ">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Profil Saya</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                <tr>
                                    <td><b>Nama</b></td>
                                    <td><b>:</b></td>
                                    <td>Dhika</td>
                                </tr>
                                <tr>
                                    <td><b>Kontak</b></td>
                                    <td><b>:</b></td>
                                    <td>08635463516783</td>
                                </tr>
                                <tr>
                                    <td><b>Username</b></td>
                                    <td><b>:</b></td>
                                    <td>Admin</td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
    </main>

    <?php
    include '../../inc/footer.php';
    ?>