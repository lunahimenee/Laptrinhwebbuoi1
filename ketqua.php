<?php
$pheptinh = $_POST['pheptinh'];
$so1 = $_POST['so1'];
$so2 = $_POST['so2'];

// Kiểm tra nhập số hợp lệ
if (!is_numeric($so1) || ($pheptinh != 'nguyento' && $pheptinh != 'sochan' && !is_numeric($so2))) {
    $ketqua = "Vui lòng nhập số hợp lệ.";
    $pt = "Lỗi";
} else {
    switch ($pheptinh) {
        case "cong":
            $ketqua = $so1 + $so2;
            $pt = "Cộng";
            break;
        case "tru":
            $ketqua = $so1 - $so2;
            $pt = "Trừ";
            break;
        case "nhan":
            $ketqua = $so1 * $so2;
            $pt = "Nhân";
            break;
        case "chia":
            $ketqua = ($so2 == 0) ? "Không thể chia cho 0!" : $so1 / $so2;
            $pt = "Chia";
            break;
        case "nguyento":
            $ketqua = isPrime($so1) ? "$so1 là số nguyên tố" : "$so1 không phải số nguyên tố";
            $pt = "Kiểm tra số nguyên tố";
            break;
        case "sochan":
            $ketqua = ($so1 % 2 == 0) ? "$so1 là số chẵn" : "$so1 không phải số chẵn";
            $pt = "Kiểm tra số chẵn";
            break;
        default:
            $ketqua = "Phép tính không hợp lệ.";
            $pt = "Lỗi";
            break;
    }
}

function isPrime($num)
{
    if ($num < 2)
        return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0)
            return false;
    }
    return true;
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Kết quả</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>KẾT QUẢ PHÉP TÍNH</h2>
    <div class="table-container">
        <form>
            <table>
                <tr>
                    <td class="input-label">Phép tính:</td>
                    <td><?php echo $pt; ?></td>
                </tr>
                <tr>
                    <td class="input-label">Số thứ nhất:</td>
                    <td><input type="text" value="<?php echo $so1; ?>" readonly></td>
                </tr>
                <?php if ($pheptinh == "cong" || $pheptinh == "tru" || $pheptinh == "nhan" || $pheptinh == "chia") { ?>
                    <tr>
                        <td class="input-label">Số thứ hai:</td>
                        <td><input type="text" value="<?php echo $so2; ?>" readonly></td>
                    </tr>
                <?php } ?>
                <tr>
                    <td class="input-label">Kết quả:</td>
                    <td><input type="text" value="<?php echo $ketqua; ?>" readonly></td>
                </tr>
                <tr>
                    <td></td>
                    <td><a href="index.html">Quay lại</a></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>