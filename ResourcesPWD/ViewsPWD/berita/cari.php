<div class="space">
    <div class="row">
        <div class="container">
            <h1>
                Hasil Pencarian "<?php echo  $data["key"]; ?>"
            </h1>
        </div>
    </div>
</div>



<div class="row">
    <div class="container">
        <div class="row">
            <?php if ($data["berita"] == null) : ?>
                <h4>Kata kunci "<?php echo  $data["key"]; ?>" tidak ditemukan </h4>
            <?php else : ?>
                <!--==========================LOOP============ -->
                <?php foreach ($data["berita"] as $data) : ?>
                    <div class="col-sm-4">
                        <div class="card mb-3">
                            <h3 class="card-header"><?php echo $data["judul_berita"]; ?></h3>

                            <img style="height: 200px; width: 100%; display: block;" src="<?php echo static_file . $data['gambar_berita']; ?>" alt="Card image">
                            <div class="card-body">
                                <p class="card-text"><?php echo $data["isi_berita"]; ?></p>
                            </div>
                            <div class="card-body">
                                <a href="<?php echo BASEURL . 'berita/detail/' . $data['slug_berita']; ?>" class="card-link">Lihat Selengkapnya</a>
                            </div>
                            <div class="card-footer text-muted">
                                <?php echo $data["tanggal_berita"]; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- =====================END LOOP================== -->
            <?php endif; ?>
        </div>
    </div>
</div>