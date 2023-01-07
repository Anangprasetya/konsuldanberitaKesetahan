<div class="space">
    <div class="row">
        <div class="container">
            <h1>
                Data Pengunjung
            </h1>

        </div>
    </div>
</div>

<div class="row">
    <div class="container">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pengunjung</th>
                    <th scope="col">Alamat Pengunjung</th>
                    <th scope="col">Tanggal/Jam</th>
                    <?php if (isset($_SESSION['username'])) { ?>
                        <th scope="col">Aksi</th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($data["tamu"] as $data) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $no++; ?></th>
                        <td><?php echo $data['nama_tamu']; ?></td>
                        <td><?php echo $data['alamat_tamu']; ?></td>
                        <td><?php echo $data['tanggal_tamu']; ?></td>

                        <?php if (isset($_SESSION['username'])) { ?>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="edit_tamu.php?id=<?php echo $data['id_tamu']; ?>" class="btn btn-warning"> Edit
                                        <span class="fa fa-edit" aria-hidden="true"></span>
                                    </a>
                                    <a href="hapus_tamu.php?id=<?php echo $data['id_tamu']; ?>" class="btn btn-danger"> Hapus
                                        <span class="fa fa-trash" aria-hidden="true"></span>
                                    </a>
                                </div>
                            </td>
                        <?php } ?>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</div>

<?php if (!isset($_SESSION['username'])) { ?>
    <div class="container">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahPengunjung">Tambah Pengunjung</button>
    </div>
<?php } ?>


<div class="modal fade" id="tambahPengunjung">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Masuk ke buku tamu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="aksi_tambah_pengunjung.php" method="post">
                    <fieldset>
                        <div class="form-group">
                            <label for="username">Nama</label>
                            <input type="text" class="form-control" id="username" placeholder="nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Alamat</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Alamat" name="alamat">

                        </div>
                    </fieldset>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>