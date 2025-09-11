<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="info.php" method="post">
        <h1>Nhập Thông Tin Sinh Viên</h1>
        <a >MSSV:</a>
         <input type="text " name="mssv"><br>
         <a>Họ tên:</a> 
         <input type="text" name="hoten"><br>
       <a>Giới Tính:</a>
       <label><input type="radio" name="gioitinh" /> Nam</label>
       <label><input type="radio" name="gioitinh" /> Nữ</label> <br />
       <a>Ngôn ngữ lập trình: </a>
       C++ <input type="checkbox" name="c" value="0">
       ,PHP <input type="checkbox" name="php" value="1"><br>
       <a>Thành Phố:</a>
       <select name="thanhpho">
        <option>Bến Tre</option>
        <option>TP HCM</option>
        <option>Tây Ninh</option>
        <option>Bình Thuận</option>
        <option>Vĩnh Long</option>
       </select><br>
       <a>Tin Nhắn:</a><br>
       <textarea name="tinhan" rows="5"cols="30">

       </textarea><br>
       <button type="submit">Gửi</button>



    </form>
</body>
</html>