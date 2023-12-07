
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Mã Danh Mục</th>
            <th scope="col">Tên Danh Mục</th>
            <th scope="col">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $danhmuc = loadall_danhmuc();
        foreach($danhmuc as $row):
        extract($row); ?>
        <tr>
            <th scope="row"><?=$id ?></th>
            <td><a href="index.php?act=allsp&id=<?=$id?>"><?=$name ?></td>       
            <td><a href="index.php?act=editdm&id=id&table=danh_muc&id_edit=<?=$id?>"><button class="btn btn-warning">Sửa</button></a>
                <a href="index.php?act=delete&header=alldm&id=id&table=danh_muc&iddl=<?=$id;?>"><button class="btn btn-danger">Xóa</button></a>
            </td>       
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</body>
</html>