<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congnghe.vn</title>
    <link href="bootstrap.min.css" type="text/css" rel="stylesheet">
    <style>
        .form-control {
            margin: 8px;
            width: 300px;
            height: 40px;
            border-radius: 10px;
            outline: none;
            padding-left: 10px;
            color: #000;
        }
    </style>
</head>
<body>

<?php require_once 'connect.php' ?>
<?php
$ID=$_GET['ID'];
$query=mysqli_query($connect,"SELECT * FROM `sanpham` WHERE ID='$ID'");
$row=mysqli_fetch_assoc($query);
if(isset($_POST['insert'])) {
    $ID = $_POST['ID'];
    $Name = $_POST['Name'];
    $IMG= $_POST['IMG'];
    $Brand = $_POST['Brand'];
    $Price = $_POST['Price'];
    $Description = $_POST['Description'];
    $Quantity = $_POST['Quantity'];
    if($connect-> query("UPDATE `sanpham` SET ID='$ID', Name='$Name', IMG='$IMG', Brand='$Brand', Price='$Price', Quantity='$Quantity',Description='$Description' WHERE ID='$ID'")) {
        header('Location:trangchu.php');
    }
    else {
        echo "<script>alert('Thêm Dữ liệu thất bại')</script>";
    }
    $connect-> close();
}
?>
<div class="container" style="margin-left: 500px">

    <div class="tieude">

        <h1>
            Sửa sản phẩm 🔨
        </h1>

        <form method ="post" action="" style="">
            <input type="text" name="ID" class="form-control" value="<?php echo $row['ID']; ?>"><br/>
            <input type="text" name="Name" class="form-control" value="<?php echo $row['Name']; ?>"><br/>
            <input type="file" name="IMG" class="form-control" value="<?php echo"imgs/".$row['IMG'].""; ?>" ><br/>
            <input type="text" name="Brand" class="form-control" value="<?php echo $row['Brand']; ?>"><br/>
            <input type="text" name="Price" class="form-control" value="<?php echo $row['Price']; ?>"><br/>
            <input type="text" name="Quantity" class="form-control" value="<?php echo $row['Quantity']; ?>"><br/>
            <input type="text" name="Description" class="form-control" style="height: 80px" value="<?php echo $row['Description']; ?>"><br/>
            <div>
                <input type="submit" name="insert" class="btn btn-success" style="margin-left: 20px" value="Update">
                <a href="trangchu.php" style="margin-left: 10px" class="btn btn-primary">Về trang chủ</a>
            </div>

        </form>
    </div>
</div>
</body>
</html>
