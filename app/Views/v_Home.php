<?= $this->extend('layouts/v_Template') ?>
<?= $this->section('content'); ?>
<center>

    <h1>Home</h1>

    <!-- cek jika user sudah login maka sapa -->
    <?php if (session()->get('isLoggedIn')) : ?>
        <h3>Selamat datang, <?= session()->get('user_name') ?> 👋</h3>
    <?php else : ?>
        <h3>Selamat datang, Guest</h3>
    <?php endif; ?>


</center>
<?= $this->endsection(); ?>