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
<form action="action.php" method="post">
    <label>
        <input type="text" name="action" value="update" hidden>
    </label>
    <label>
        <input type="text" name="idOld" value="<?php echo $_POST['id']; ?>" hidden>
    </label>
    <fieldset>
        <legend>Sửa thông tin về sinh viên</legend>
        <label>
            <input type="number" name="id" placeholder="STT">
        </label><br>
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
            <input type="text" name="action" value="edit" hidden>
        </label><br>
        <button>Submit</button>
    </fieldset>
</form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $action = $_POST['action'];
    $id = $_POST['id'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $class = $_POST['class'];
    $birth = $_POST['birth'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $identity = $_POST['identity'];
}