<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="Quản%20Lý%20Bán%20Đồ%20Công%20Nghệ/css/search.css">
    <link rel="stylesheet" href="./fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <title>Untitled Document</title>
</head>
<body>
  <?php
//   // Tạo session 
// session_start();
 
// // Kiếm tra user có đang đăng nhập
// if(!isset($_SESSION["dangnhap"]) || $_SESSION["dangnhap"] !== true){
//     header("location: dangnhap.php");
//     exit;
// }
?>
<?php require_once 'connect.php' ?>
    <form class="form-search" action="search.php" method="post" style="margin-left: 500px; margin-top: 40px">
        <a href="trangchu.php" class="btn btn-success">Trang chủ</a>
        <table style="width: 200px">
            <thead>
                <tr>
                    <th><input class="form-search__input" type="text" style="border-radius: 10px; height: 40px" name="search" placeholder="Nhập từ khóa tìm kiếm "/></th>
                    <th><input class="btn btn-success" type="submit" value="Tìm kiếm️🔍" name="search1"></th>
                </tr>
            </thead>
        </table>
    </form>

  
<?php
    $keyword = "";
    if(isset($_POST['search'])=="search1"){
	    $keyword = $_POST['search'];
	    if($keyword == ""){
        echo "<br/><center> Nhập Từ Khóa Tìm Kiếm /.../</center>";
        }
        else{
     
$sql = "SELECT * from sanpham where Name like '%$keyword%'";
$result = $connect->query($sql);
if (mysqli_num_rows($result)==0) {

  echo "<br/><center> Không Tìm Thấy Kết Quả Với Từ Khóa / $keyword /</center>";
}
else{
?>
</div>
  </div>
  <div class="form__group-list">
    <?php
     
    
	    while($row = $result->fetch_assoc()) {
      
        ?>
        
        <div class="content">
         
            <img class="content__img" src=<?php echo"imgs/".$row['IMG'].""; ?>>
            <div class="container">
              <h1 class="container__name"><?php echo $row['Name']; ?></h1>
              <div class="container__info">
                <p class="container__info-creator">Thương Hiệu: <?php echo $row['Brand']; ?></p>
                <p class="container__info-singer"> Giá: <?php echo $row['Price']; ?></p>
                <p class="container__info-singer"> Số Lượng: <?php echo $row['Quantity']; ?></p>
                <p class="container__info-singer"> Mô Tả: <?php echo $row['Description']; ?></p>
              </div>
            </div>
          </a> 
          <div class="content-select">
            <a href="editsp.php?ID=<?php echo $row['ID'];?>" class="btn btn-primary">Sửa</a>
            <a href="delete.php?ID=<?php echo $row['ID'];?>" class="btn btn-danger" style="margin-left: 10px">Xóa</a>
          </div>
        </div>
      <?php
    }

}
}
}
?>
  </div>
</div>
</form>
</body>
</html>