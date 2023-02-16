<?= $this->extend('layouts/v_Template'); ?>
<?= $this->section('content'); ?>
<section id="form-pegawai-store">
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

    <form action="<?= base_url('pegawai') ?>" method="post">
        <?= csrf_field(); ?>
        <div>
            <br><label for="nim">NIM</label> <br>
            <input type="number" name="nim" id="nim" value="<?= set_value('nim') ?>">
        </div>
        <div>
            <br><label for="nama">Nama Pegawai</label> <br>
            <input type="text" name="nama" id="nama" value="<?= set_value('nama') ?>">
        </div>
        <div>
            <br><label for="nama">Gender</label> <br>
            <input type="radio" name="gender" value="L" <?= set_radio('gender', 'L'); ?>> L
            <input type="radio" name="gender" value="P" <?= set_radio('gender', 'P'); ?>> P
        </div>
        <div>
            <br><label for="telepon">Telepon</label> <br>
            <input type="number" name="no_telepon" id="telepon" value="<?= set_value('no_telepon') ?>">
        </div>
        <div>
            <br><label for="email">Email</label> <br>
            <input type="text" name="email" id="email" value="<?= set_value('email') ?>">
        </div>
        <div>
            <br><label for="penddidikan">Pendidikan</label> <br>
            <select name="pendidikan" id="pendidikan">
                <option value="">Pilih Pendidikan</option>
                <option value="SD" <?= set_select('pendidikan', 'SD'); ?>>SD</option>
                <option value="SMP" <?= set_select('pendidikan', 'SMP'); ?>>SMP</option>
                <option value="SMA" <?= set_select('pendidikan', 'SMA'); ?>>SMA</option>
            </select>
        </div>
        <div>
            <br><a href="<?= base_url('pegawai') ?>">&laquo; Kembali</a>
            <input type="submit" name="simpan" value="Simpan">
        </div>
    </form>
</section>
<?= $this->endsection(); ?>