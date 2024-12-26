<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>In hóa đơn</title>
    <style>
        @page {
            size: A5 landscape;
            margin: 0;
        }

        body {
            font-family: DejaVu Sans, sans-serif;
            margin: 0;
            padding: 6mm;
        }

        h5 {
            text-align: center;
            font-size: 18px;
            color: #1926e0;
            margin-bottom: 10px;
        }

        p {
            text-align: center;
            font-size: 12px;
            color: #000;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 12px 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #ffffff;
            color: white;
            font-size: 14px;
        }

        td {
            font-size: 14px;
            color: #000;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>

<body>
    <h5>Phiếu thanh toán</h5>
    <p>Ngày xuất: {{ \Carbon\Carbon::now()->format('d-m-Y H:i') }}</p>
    <table>
        <thead>
            <tr>
                <th style="width: 30%; text-align: center; color: #000;">Thông tin</th>
                <th style="width: 70%; text-align: center; color: #000;">Chi tiết</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($orderCT->orderDetails as $detail)
                <tr>
                    <td><strong>Người mua</strong></td>
                    <td>{{ $orderCT->fullname }}</td>
                </tr>
                <tr>
                    <td><strong>Số điện thoại</strong></td>
                    <td>{{ $orderCT->phone }}</td>
                </tr>
                <tr>
                    <td><strong>Địa chỉ</strong></td>
                    <td>{{ $orderCT->address }}</td>
                </tr>
                <tr>
                    <td><strong>Tên sản phẩm</strong></td>
                    <td>{{ $detail->product->name }}</td>
                </tr>
                <tr>
                    <td><strong>Số lượng</strong></td>
                    <td>{{ $detail->quantity }}</td>
                </tr>
                <tr>
                    <td><strong>Tổng số tiền</strong></td>
                    <td>{{ number_format($orderCT->total) }} VND</td>
                </tr>
                <tr>
                    <td><strong>Hình thức thanh toán</strong></td>
                    <td>
                        @if ($orderCT->paymentstatus == 1)
                            Thanh toán khi nhận hàng
                        @else
                            chuyển khoản
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
