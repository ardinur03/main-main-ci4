<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? "PPL" ?></title>
</head>

<body>
    <main>

        <table width="100%" height="520px">
            <tr>
                <th colspan="2" height="40px" bgcolor="lightblue">
                    <h1>Selamat datang di <?= $title ?? "Tugas web PPL" ?></h1>
                </th>
            </tr>
            <tr bgcolor="lightgray" height="10px">
                <td>
                    <a href="/">HOME</a>
                    <a href="/info">INFO</a>
                    <?php if (session()->get('isLoggedIn')) : ?>
                        <a href="/mahasiswa">MAHASISWA</a>
                    <?php endif; ?>
                </td>
                <td align="center">
                    <?php if (session()->get('isLoggedIn')) : ?>
                        <a href="/logout">Logout</a>
                    <?php else : ?>
                        <a href="/login">Login</a>
                    <?php endif; ?>
                </td>
            </tr>
            <tr bgcolor="lavender">
                <td colspan="2" height="504px">
                    <?= $this->renderSection('content') ?>
                </td>
            </tr>
            <tr bgcolor="lightgreen">
                <td colspan="2">
                    <center>
                        <h3>&copy; Ardinurinsan 2023</h3>
                    </center>
                </td>
            </tr>
        </table>
    </main>
</body>

</html>