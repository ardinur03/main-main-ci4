<?= $this->extend('layouts/v_master_layout'); ?>
<?= $this->section('content'); ?>
<section id="form-mahasiswa-display">
    <h1><?= $title ?></h1>

    <a href="/mahasiswa/create">+ Tambah Data</a>

    <table border="1">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Mahasiswa</th>
                <th>Umur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswa as $mhs) : ?>
                <tr>
                    <td><?= $mhs['nim'] ?></td>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['umur'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>
<?= $this->endsection(); ?>