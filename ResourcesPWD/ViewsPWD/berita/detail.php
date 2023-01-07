<div class="space">
    <div class="row">
        <div class="container">
            <h1>Berita</h1>
        </div>
    </div>
</div>

<?php

$data = $data["berita"];

?>

<div class="row">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img style="height: 500px; width: 100%; display: block;" src="<?php echo static_file . $data['gambar_berita']; ?>" alt="Card image">
            </div>
            <div class="col-md-6">
                <h2><?php echo $data['judul_berita']; ?></h2>
                <p><?php echo $data['isi_berita']; ?></p>
                <h3>Di pos tanggal : <?php echo $data['tanggal_berita']; ?></h3>
            </div>
        </div>
    </div>
</div>