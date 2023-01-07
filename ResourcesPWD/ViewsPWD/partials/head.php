<!DOCTYPE html>
<html>

<head>

    <title>Sistem Informasi Dinas Kesehatan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= static_file; ?>css/bootstrap.min.css">
    <style>
        .jumbotron {
            /* background-image: url('<?= static_file; ?>img/header.jpg'); */
            background-size: cover;
            width: 100%;
        }

        .space {
            margin-top: 20px;
        }
    </style>

</head>

<body>

    <?php if (isset($_SESSION['username'])) { ?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <?php } else { ?>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <?php } ?>

            <a class="navbar-brand" href="<?= BASEURL; ?>">SIKES</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= BASEURL . 'berita'; ?>">Berita</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= BASEURL . 'homecontroller/about'; ?>">Profil</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Layanan Publik</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Program</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= BASEURL . 'tamu'; ?>">Buku Tamu</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="admin.php">Admin</a>
                    </li>
                </ul>

                <?php if (isset($_SESSION['username'])) { ?>
                    <p class="my-2 my-sm-0 text-white">Selamat datang, <?php echo $_SESSION['username']; ?></p>
                    <p class="my-2 my-sm-0 text-black"> ..... </p>

                    <a class="btn btn-secondary my-2 my-sm-0" href="logout.php">Logout</a>
                <?php } else { ?>
                    <button type="button" class="btn btn-secondary my-2 my-sm-0" data-toggle="modal" data-target="#myModal">Login</button>
                <?php } ?>

            </div>
            </nav>


            <div class="modal fade" id="myModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Login Admin</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="aksi_login.php" method="post">
                                <fieldset>
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
                                    </div>
                                </fieldset>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Login</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>