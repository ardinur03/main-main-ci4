<?= $this->extend('layouts/v_Template'); ?>
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
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswa as $mhs) : ?>
                <tr>
                    <td><?= $mhs['nim'] ?></td>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['umur'] ?></td>
                    <td>
                        <a href="/mahasiswa/<?= $mhs['nim'] ?>/detail">Detail</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>
<?= $this->endsection(); ?>