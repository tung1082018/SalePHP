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
            if(isset($_POST['insert'])) {
            $ID = $_POST['ID'];
            $Name = $_POST['Name'];
            $IMG= $_POST['IMG'];
            $Brand = $_POST['Brand'];
            $Price = $_POST['Price'];
            $Description = $_POST['Description'];
            $Quantity = $_POST['Quantity'];
            if($connect-> query("INSERT INTO sanpham(ID, Name,IMG, Brand, Price, Description, Quantity) values (N'$ID', N'$Name',N'$IMG', N'$Brand', N'$Price',N'$Description', N'$Quantity')")) {
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
             Thêm Sản Phẩm 🎁
         </h1>
        
        <form method ="post" action="" style="">
            <input type="text" name="ID" class="form-control" placeholder="Nhập ID"><br/>
            <input type="text" name="Name" class="form-control" placeholder="Nhập Tên Sản Phẩm"><br/>
            <input type="file" name="IMG" class="form-control" ><br/>
            <input type="text" name="Brand" class="form-control" placeholder="Thương Hiệu"><br/>
            <input type="text" name="Price" class="form-control" placeholder="Giá "><br/>
            <input type="text" name="Quantity" class="form-control" placeholder="Số Lượng"><br/>
            <input type="text" name="Description" class="form-control" style="height: 80px" placeholder="Mô Tả"><br/>
            <div>
                <input type="submit" name="insert" class="btn btn-success" style="margin-left: 20px" value="Thêm">
                <a href="trangchu.php" style="margin-left: 10px" class="btn btn-primary">Về trang chủ</a>
            </div>
         
        </form>
    </div>
    </div>
</body>
</html> 