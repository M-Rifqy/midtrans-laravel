<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Midtrans</title>
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key={{config('midtrans.client_key')}}></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="bg-white rounded-lg shadow-md p-5 max-w-sm">
        <img src="{{asset('assets/img/ramen.jpeg')}}" alt="Image" class="w-full h-auto rounded-lg">
        <h2 class="text-xl font-semibold mt-4">Detail Title</h2>
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
        </table>
        <button id="pay-button" type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg mt-4">Bayar Sekarang</button>
    </div>
</body>
<script type="text/javascript">
    // For example trigger on button clicked, or any time you need
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {
      // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
      window.snap.pay('{{$snapToken}}', {
        onSuccess: function(result){
          /* You may add your own implementation here */
          //alert("payment success!"); console.log(result);
          window.location.href = '/invoice/{{$order->id}}';
        },
        onPending: function(result){
          /* You may add your own implementation here */
          alert("wating your payment!"); console.log(result);
        },
        onError: function(result){
          /* You may add your own implementation here */
          alert("payment failed!"); console.log(result);
        },
        onClose: function(){
          /* You may add your own implementation here */
          alert('you closed the popup without finishing the payment');
        }
      })
    });
</script>
</html>
