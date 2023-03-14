<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai</title>
</head>

<body>
    <form action="formLat1handler.php" method="POST">
        <table style="background-color: cyan;">
        <tr style="background-color:orange"> 
        <td colspan="2"><b>Daftar Nilai</b></td>
</tr>
            <tr>
                <td>Matematika:</td>
                <td>
                    <input type="number" name="mat" required>
                </td>
            </tr>
            <tr>
                <td>Biologi:</td>
                <td>
                    <input type="number" name="bio" required>
                </td>
            </tr>
            <tr>
                <td>Fisika:</td>
                <td>
                    <input type="number" name="fis" required>
                </td>
            </tr>
            <tr>
                <td>Kimia:</td>
                <td>
                    <input type="number" name="kim" required>
                </td>
            </tr>
            <tr>
                <td>Bahasa Indonesia:</td>
                <td>
                    <input type="number" name="bin" required>
                </td>
            </tr>
            <tr>
                <td>Bahasa Inggris:</td>
                <td>
                    <input type="number" name="bing" required>
                </td>
            </tr>
            <tr>
                <td colspan="1"></td>
                <td>
                    <button type="submit">Hitung</button>
                    <button type="reset">Reset</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>