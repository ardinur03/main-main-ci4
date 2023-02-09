<?= $this->extend('layouts/v_Template'); ?>
<?= $this->section('content'); ?>
<section id="form-mahasiswa-store">
    <?php
    if (isset($errors)) {
        echo '<div style="width: 300px"; border-radius: 5px; >';
        echo '<ul style="background-color: red; color: white; padding: 10px;">';
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo '</ul>';
        echo '</div>';
    }
    ?>

    <h1><?= $title ?></h1>

    <form action="<?= base_url('mahasiswa') ?>" method="post">
        <?= csrf_field(); ?>
        <div>
            <label for="nim">NIM</label> <br>
            <input type="number" name="nim" id="nim" value="<?= set_value('nim') ?>">
        </div>
        <div>
            <label for="nama">Nama Mahasiswa</label> <br>
            <input type="text" name="nama" id="nama" value="<?= set_value('nama') ?>">
        </div>
        <div>
            <label for="umur">Umur</label> <br>
            <input type="number" name="umur" id="umur" value="<?= set_value('umur') ?>">
        </div>
        <div>
            <a href="<?= base_url('mahasiswa') ?>">&laquo; Kembali</a>
            <input type="submit" name="simpan" value="Simpan">
        </div>
    </form>
</section>
<?= $this->endsection(); ?>