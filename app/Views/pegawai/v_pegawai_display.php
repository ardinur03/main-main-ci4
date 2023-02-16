<?= $this->extend('layouts/v_Template'); ?>
<?= $this->section('content'); ?>
<section id="form-pegawai-display">
    <h1><?= $title ?></h1>

    <?php if (session()->getFlashdata('pesan')) : ?>
        <div style="width: 300px; border-radius: 5px;">
            <ul style="background-color: green; color: white; padding: 10px;">
                <li><?= session()->getFlashdata('pesan') ?></li>
            </ul>
        </div>
    <?php endif; ?>

    <div style="display: flex;">
        <a href="<?= base_url('/pegawai/new') ?>">+ Tambah Data</a>
    </div>

    <table border="1" width="60%">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jenis Kelamin</th>
                <th>Pendidikan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pegawai as $pgw) : ?>
                <tr>
                    <td><?= $pgw['nim'] ?></td>
                    <td><?= $pgw['nama'] ?></td>
                    <td><?= $pgw['email'] ?></td>
                    <td><?= $pgw['gender'] ?></td>
                    <td><?= $pgw['pendidikan'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>
<?= $this->endsection(); ?>