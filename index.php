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
                <form action="action.php" method="post">
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
                <fieldset>
                    <legend>Danh sách sinh viên</legend>
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>Mã sinh viên</th>
                            <th>Họ và tên</th>
                            <th>Giới tính</th>
                            <th>Lớp</th>
                            <th>Ngày sinh</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th>Số CMND/thẻ căn cước</th>
                            <th>Sửa</th>
                            <th>Xoá</th>
                        </tr>
                        <?php include_once 'StudentManagement.php' ?>
                        <?php include_once 'action.php' ?>
                        <?php foreach ($this->students as $key=>$student): ?>
                            <tr>
                                <td><?php echo $key ?></td>
                                <td><?php echo $student->code() ?></td>
                                <td><?php echo $student->name() ?></td>
                                <td><?php echo $student->gender() ?></td>
                                <td><?php echo $student->class() ?></td>
                                <td><?php echo $student->birth() ?></td>
                                <td><?php echo $student->address() ?></td>
                                <td><?php echo $student->phone() ?></td>
                                <td><?php echo $student->identity() ?></td>
                                <td>
                                    <form action="edit.php" method="post" style="display: inline">
                                        <input type="text" name="action" value="edit" hidden>
                                        <input type="text" name="index" value="<?php echo $key?>" hidden>
                                        <button>Edit</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="action.php" method="post" style="display: inline">
                                        <input type="text" name="action" value="delete" hidden>
                                        <input type="text" name="index" value="<?php echo $key?>" hidden>
                                        <button>Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </fieldset>
            </td>
        </tr>
    </table>
</center>
</body>
</html>