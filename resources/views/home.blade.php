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
        <img src="{{asset('assets/img/ramen.jpeg')}}" alt="Image" class="w-full h-auto rounded-lg">
        <h2 class="text-xl font-semibold mt-4">Title</h2>
        <p class="mt-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit consectetur nihil suscipit mollitia cum excepturi consequatur sapiente tempore odio libero.</p>
        <form action="/checkout" method="POST">
            @csrf
            <div class="mt-4">
                <label for="qty" class="block text-sm font-medium text-gray-700">Quantity:</label>
                <input type="number" name="qty" id="qty" class="mt-1 p-2 rounded-lg border border-gray-300 w-full" required>
            </div>
            <div class="mt-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                <input type="text" name="name" id="name" class="mt-1 p-2 rounded-lg border border-gray-300 w-full" required>
            </div>
            <div class="mt-4">
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number:</label>
                <input type="tel" name="phone" id="phone" class="mt-1 p-2 rounded-lg border border-gray-300 w-full" required>
            </div>
            <div class="mt-4">
                <label for="address" class="block text-sm font-medium text-gray-700">Address:</label>
                <textarea name="address" id="address" rows="3" class="mt-1 p-2 rounded-lg border border-gray-300 w-full" required></textarea>
            </div>
            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg mt-4">Checkout</button>
        </form>
    </div>
</body>
</html>
