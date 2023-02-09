<?= $this->extend('layouts/v_Template'); ?>
<?= $this->section('content'); ?>
<section id="form-mahasiswa-display">
    <h1><?= $title ?></h1>
    <ul>
        <li>NIM : <?= $mahasiswa['nim'] ?></li>
        <li>Nama : <?= $mahasiswa['nama'] ?></li>
        <li>Umur : <?= $mahasiswa['umur'] ?></li>
    </ul>

    <a href="<?= base_url('mahasiswa') ?>">&laquo; Kembali</a>
</section>
<?= $this->endsection(); ?>