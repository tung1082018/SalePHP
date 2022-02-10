
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="./css/delete.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
<title>Delete employee data</title>
</head>
<body>
<?php
// // Tạo session 
// session_start();
 
// // Kiếm tra user có đang đăng nhập
// if(!isset($_SESSION["dangnhap"]) || $_SESSION["dangnhap"] !== true){
//     header("location: dangnhap.php");
//     exit;
// }
include_once 'connect.php';
if(isset($_POST['save'])){

	if(isset($_POST['check'])){
	  foreach($_POST['check'] as $del_ID)
	  {
	mysqli_query($connect,"DELETE FROM sanpham WHERE ID='".$del_ID."'");
    header('Location: trangchu.php').
	$message="Đã Xóa";

}
	}
	else{
		echo "<script>alert('Hãy Chọn Mục Cần Xóa')</script>";	}
}
$result = mysqli_query($connect,"SELECT * FROM sanpham");
?>
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<form class="form-delete" method="post" action="">
<table style="margin-left: 300px; width: 1000px; border: 2px solid black; border-radius: 10px">
<div class="content_delete">
<thead style="background: black; height: 60px; color: white">
    <tr>
      <th scope="col">
	  	<input type="checkbox" ID="checkAl" name='check[]' value="<?php echo $row["ID"]; ?>">
		  Chọn Tất Cả
	  </th>
      <th scope="col">ID</th>
      <th scope="col">Tên Sản Phẩm</th>
      <th scope="col">Ảnh</th>
	  <th scope="col">Thương Hiệu</th>
	  <th scope="col">Giá</th>
	  <th scope="col">Số Lượng</th>
      <th scope="col">Mô Tả</th>
    </tr>
  
</thead>
</div>
<tbody>
	<div class="tieude" style="margin-top: 20px">
		<h2 style="text-align: center"> DELETE SẢN PHẨM ✘ </h2><br/>
   </div>
    <div class="form-btn" style="margin-bottom: 40px">
        <button type="submit" class="btn btn-success" style="margin-left: 300px" id="btn-delete" name="save">DELETE</button>
        <a href="trangchu.php" class="btn btn-success" style="margin-left: 30px">Home</a>
    </div>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

<tr>
    <td><input type="checkbox" ID="checkItem" name='check[]' value="<?php echo $row["ID"]; ?>"></td>
	<td><?php echo $row["ID"]; ?><br/></td>
	<td><?php echo $row["Name"]; ?></td>
	<td>
    <img class="content__img" style="width: 70px; height: 80px;border:4px ; border-radius: 4px;"src=<?php echo"imgs/".$row['IMG'].""; ?>>
    </td>
	<td><?php echo $row["Brand"]; ?></td>
    <td><?php echo $row["Price"]; ?></td>
    <td><?php echo $row["Quantity"]; ?></td>
    <td><?php echo $row["Description"]; ?></td>

</tr>
<?php
$i++;
}
?>
</tbody>
</table>

</form>
<script>
	$("#checkAl").click(function () {
		$('input:checkbox').not(this).prop('checked', this.checked);
	});
</script>

</body>
</html>