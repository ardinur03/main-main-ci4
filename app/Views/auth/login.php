<?= $this->extend('layouts/v_Template') ?>
<?= $this->section('content'); ?>
<section>
    <center>
        <h1>Login</h1>
        <?php if (session()->getFlashdata('error')) : ?>
            <div style="background-color: red; color: white; padding: 10px; width: 220px; margin-bottom: 10px; border-radius: 5%;">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>
        <form action="/login" method="post">
            <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
            <label for="email">Email</label>
            <input type="email" name="email" id="email"> <br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password"> <br>
            <button type="submit">Login</button>
        </form>
    </center>
</section>

<?= $this->endsection(); ?>