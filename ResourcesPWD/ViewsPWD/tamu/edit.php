<?php
$data = $data["tamu"];
?>
<div class="row">
    <div class="container">
        <br>
        <h1>EDIT TAMU</h1>
        <br>
        <form action="<?= BASEURL . 'tamu/prosesEdit' ?>" method="post">
            <fieldset>
                <div class="form-group">
                    <label for="username">Nama Tamu</label>
                    <input type="text" class="form-control" id="username" placeholder="nama tamu" name="nama" value="<?php echo $data['nama_tamu']; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Alamat Tamu</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Alamat Tamu" name="alamat" value="<?php echo $data['alamat_tamu']; ?>">
                </div>
            </fieldset>
            <input type="hidden" value="<?php echo $data['id_tamu']; ?>" name="id">
            <button type="submit" class="btn btn-primary">Edit</button>
            <a href="<?= BASEURL . 'tamu'; ?>" class="btn btn-secondary">Close</a>

        </form>
    </div>
</div>