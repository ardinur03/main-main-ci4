<?= $this->extend('layouts/v_Template'); ?>
<?= $this->section('content'); ?>
<section id="form-mahasiswa-display">
    <h1><?= $title ?></h1>

    <?php if (session()->getFlashdata('pesan')) : ?>
        <div style="width: 300px" ; border-radius: 5px;>
            <ul style="background-color: green; color: white; padding: 10px;">
                <li><?= session()->getFlashdata('pesan') ?></li>
            </ul>
        </div>
    <?php endif; ?>

    <a href="/mahasiswa/create">+ Tambah Data</a>
    <table border="1" width="60%">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Mahasiswa</th>
                <th>Umur</th>
                <th colspan="3">Aksi</th>
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
                    <td>
                        <a href="/mahasiswa/<?= $mhs['nim'] ?>/edit">Edit</a>
                    </td>
                    <td>
                        <form action="/mahasiswa/<?= $mhs['nim'] ?>/delete" method="post">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" onclick="return confirm('Apakah anda yakin?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>
<?= $this->endsection(); ?>