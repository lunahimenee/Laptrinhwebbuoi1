<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Phép tính</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Chỉ định khoảng cách cho radio dòng 2 */
        .pheptinh-group {
            margin-left: 5px;
            /* Điều chỉnh sao cho căn lề bằng hàng 1 */
        }

        /* Nếu muốn các radio căn đều khoảng cách */
        .pheptinh-group input {
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <h2>PHÉP TÍNH TRÊN HAI SỐ</h2>
    <div class="table-container">
        <form action="ketqua.php" method="post">
            <table>
                <tr>
                    <td><label>Chọn phép tính:</label></td>
                    <td>
                        <!-- Hàng 1: phép tính cơ bản -->
                        <input type="radio" name="pheptinh" value="cong" checked> Cộng
                        <input type="radio" name="pheptinh" value="tru"> Trừ
                        <input type="radio" name="pheptinh" value="nhan"> Nhân
                        <input type="radio" name="pheptinh" value="chia"> Chia
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="pheptinh-group">
                        <!-- Hàng 2: kiểm tra số học -->
                        <input type="radio" name="pheptinh" value="nguyento"> Kiểm tra số nguyên tố
                        <input type="radio" name="pheptinh" value="sochan"> Kiểm tra số chẵn
                    </td>
                </tr>
                <tr>
                    <td class="input-label">Số thứ nhất :</td>
                    <td><input type="text" name="so1" required></td>
                </tr>
                <tr>
                    <td class="input-label">Số thứ hai :</td>
                    <td><input type="text" name="so2" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Tính"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>