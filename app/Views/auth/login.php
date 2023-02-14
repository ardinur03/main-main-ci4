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
            <table border="0">
                <tr>
                    <td> <label for="username">Username</label></td>
                    <td>:</td>
                    <td><input type="text" name="email_or_username" id="username"></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td>:</td>
                    <td><input type="password" name="password" id="password"></td>
                </tr>
                <tr>
                    <td>
                        <button type="submit">Login</button>
                    </td>
                </tr>
            </table>
        </form>

    </center>
</section>

<?= $this->endsection(); ?>