<?php $data = $data["admin"]; ?>
<div class="row">
    <div class="container">
        <br>
        <h1>EDIT ADMIN</h1>
        <br>
        <form action="<?= BASEURL . 'admin/editAdmin'; ?>" method="post" enctype="multipart/form-data">
            <fieldset>
                <div class="form-group">
                    <label for="username">Nama Admin</label>
                    <input type="text" class="form-control" id="username" placeholder="nama admin" name="nama" value="<?php echo $data['nama_admin']; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Username</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="username" name="username" value="<?php echo $data['username']; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="password" name="password" value="<?php echo $data['password']; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jabatan Admin</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="jabatan" name="jabatan" value="<?php echo $data['jabatan_admin']; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Foto Berita</label>
                    <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Foto" name="foto" value="<?php echo $data['foto_admin']; ?>">
                </div>
            </fieldset>
            <input type="hidden" value="<?php echo $data['id_admin']; ?>" name="id">
            <button type="submit" class="btn btn-primary">Edit</button>
            <a href="<?= BASEURL . 'admin'; ?>" class="btn btn-secondary">Close</a>

        </form>
    </div>
</div>