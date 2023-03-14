<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>

<body>
    <h1>Registration Form</h1>
    <form action="form_handler.php" method="POST"><!--fungsi method agar password tidak terlihat di url-->
        <table>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td>
                    <input type="text" name="name" placeholder="Input your name" required>
                </td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td>:</td>
                <td>
                    <input type="number" name="phone" placeholder="Input your phone number" required>
                </td>
            </tr>
            <tr>
                <td>interest</td>
                <td>:</td>
                <td>

                    <!--agar bisa select lebih dari 1-->
                    <select name="interest" multiple>
                        <option value="AI">AI</option>
                        <option value="Data Science">Data Science</option>
                        <option value="Computer Vision">Computer Vision</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <span>
                        <input type="checkbox" name="agree" value="1" required>
                        I'm agree with T&C.
                    </span>
                </td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td>
                    <button type="submit">submit</button>
                    <button type="reset">reset</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>