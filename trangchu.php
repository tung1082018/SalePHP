<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" href="./css/Home.css">
    <link rel="stylesheet" href="./fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    

</head>
<body >

<?php require_once 'connect.php' ?>
  <?php
  $connect =  mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  $page = $_GET['page'] ?? 1;
  $perPage = 5;
  $offSet = ($page - 1) * $perPage;
  $sql="SELECT * FROM sanpham limit $perPage offset $offSet";
  $query=mysqli_query($connect, $sql);
  ?>
<h2 style="text-align: center; margin-top: 30px">🐶 Quản lý sản phẩm 🐱</h2>
<div style="margin-top: 40px; margin-left: 220px">
   <form class="form-search" action="trangchu.php" method="post">
       <a class="btn btn-success" href="search.php">Tìm kiếm sản phẩm</a>
       <a class="btn btn-primary" href="insert.php">Thêm sản phẩm</a>
       <a class="btn btn-info" href="userPage.php">Trang người dùng</a>
   </form>
</div>
<table class="table" style="margin-top: 20px; width: 1200px; margin-left: 220px">
 <thead class="thead-dark">
 <tr>
       <th scope="col">Mã Sản Phẩm</th>
       <th scope="col">Tên Sản Phẩm</th>
       <th scope="col">Ảnh</th>
       <th scope="col">Thương Hiệu</th>
       <th scope="col">Giá</th>
       <th scope="col">Số Lượng</th>
       <th scope="col">Mô Tả</th>
       <th colspan="2"></th>
</tr>
 </thead> 
 <?php
 while($row = $query->fetch_assoc()){
     ?>
     <tr style="margin-top: 20px">
         <td><?php echo $row["ID"]; ?></td>
         <td><?php echo $row["Name"]; ?></td>
         <td><img class="content__img" style="width: 70px; height: 80px;border:4px ; border-radius: 4px;"src=<?php echo"imgs/".$row['IMG'].""; ?>></td>
         <td><?php echo $row["Brand"]; ?></td>
         <td><?php echo $row["Price"]; ?></td>
         <td><?php echo $row["Quantity"]; ?></td>
         <td><?php echo $row["Description"]; ?></td>
         <td>
             <a href="editsp.php?ID=<?php echo $row['ID'];?>" class="btn btn-primary">Sửa</a>
             <a href="delete.php" class=" btn btn-danger">Xóa</a>
         </td>
         
     </tr>
 
     <?php
 }
 ?> 
 </table>
<div>
    <?php
    $sql = "select count(*) as total from sanpham";
    $result = $connect->query($sql);
    $resultObject = $result->fetch_object();
    $total = $resultObject->total;

    $totalPages = ceil($total / $perPage);
    for ($i = 1; $i <= $totalPages; $i++) {
        echo "<a class='btn btn-success' style='margin-left: 20px' href='trangchu.php?page=$i'>$i</a>|";
    }
    ?>
</div>
 
 </body>
 </html>
