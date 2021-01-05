<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center>
    <h1>Trang quản lý sinh viên</h1>
    <table>
        <tr>
            <td>
                <form method="post">
                    <fieldset>
                        <legend>Thêm sinh viên</legend>
                        <label>
                            <input type="text" name="code" placeholder="Mã sinh viên">
                        </label>
                        <label>
                            <input type="text" name="name" placeholder="Họ và tên">
                        </label><br>
                        <label>
                            <input type="text" name="gender" placeholder="Giới tính">
                        </label><br>
                        <label>
                            <input type="text" name="class" placeholder="Lớp">
                        </label><br>
                        <label>
                            <input type="text" name="birth" placeholder="Ngày sinh">
                        </label><br>
                        <label>
                            <input type="text" name="address" placeholder="Địa chỉ">
                        </label><br>
                        <label>
                            <input type="text" name="phone" placeholder="Số điện thoại">
                        </label><br>
                        <label>
                            <input type="text" name="identity" placeholder="Số CMND/thẻ căn cước">
                        </label><br>
                        <label>
                            <input type="text" name="action" value="add" hidden>
                        </label><br>
                        <button>Create</button>
                    </fieldset>
                </form>
            </td>
            <td>
                <form action="index.php" method="post">
                    <label>
                        Tìm kiếm:
                        <input type="text" name="name" placeholder="Họ và tên">
                        <input type="text" name="action" value="search" hidden>
                        <button>Search</button>
                    </label>
                </form><br>
                <form method="post">
                    <label>
                        Sắp xếp:
                        <select name="option">
                            <option value="a-z">A-Z</option>
                            <option value="z-a">Z-A</option>
                        </select>
                        <button>Sort</button>
                    </label>
                </form><br>
            </td>
        </tr>
    </table>
</center>
</body>
</html>