<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Midtrans</title>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="bg-white rounded-lg shadow-md p-5 max-w-sm">
        <h2 class="text-xl font-semibold text-center">Invoice</h2>
        <table>
            <tr>
                <td>Nama</td>
                <td> : {{$order->name}}</td>
            </tr>
            <tr>
                <td>No Hp</td>
                <td> : {{$order->phone}}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td> : {{$order->address}}</td>
            </tr>
            <tr>
                <td>Qty</td>
                <td> : {{$order->qty}}</td>
            </tr>
            <tr>
                <td>Total Harga</td>
                <td> : {{$order->total_price}}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td> : {{$order->status}}</td>
            </tr>
        </table>
    </div>
</body>
</html>
