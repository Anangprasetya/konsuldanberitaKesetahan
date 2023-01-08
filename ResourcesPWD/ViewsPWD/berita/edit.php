<?php $data = $data["berita"]; ?>
<div class="row">
    <div class="container">
        <br>
        <h1>EDIT BERITA</h1>
        <br>
        <form action="<?= BASEURL . 'berita/prosesEditBerita' ?>" method="post" enctype="multipart/form-data">
            <fieldset>
                <div class="form-group">
                    <label for="username">Judul Berita</label>
                    <input type="text" class="form-control" id="username" placeholder="judul 
                    berita" name="judul" value="<?php echo $data['judul_berita']; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Isi Berita</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Isi berita" name="isi" value="<?php echo $data['isi_berita']; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Foto Berita</label>
                    <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Foto" name="foto" value="<?php echo $data['gambar_berita']; ?>">
                </div>
            </fieldset>
            <input type="hidden" value="<?php echo $data['slug_berita']; ?>" name="slug">
            <button type="submit" class="btn btn-primary">Edit</button>
            <a href="<?= BASEURL . 'berita'; ?>" class="btn btn-secondary">Close</a>


        </form>
    </div>
</div>