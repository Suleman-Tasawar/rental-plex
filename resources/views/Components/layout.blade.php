<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Plex--Rent movies enjoy holidays</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <nav class="bg-gray-800 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-2xl font-semibold">Rental Plex</a>
            <ul class="flex  flex-col lg:flex-row">
                <li class="ml-3"><a href="/" class="hover:text-yellow-500">Home</a></li>
                <li class="ml-3"><a href="/contact" class="hover:text-yellow-500">Contact</a></li>
                <li class="ml-3"><a href="/admin/movies" class="hover:text-yellow-500">Admin</a></li>
            </ul>
        </div>
    </nav>
    {{$slot}}

    <footer id="contact" class="bg-gray-800 text-white py-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 MovieRental. All rights reserved. </p>
            <span> Credits <strong>Suleman Tasawar,Addan Uzam,Muhammad Dawood,Zahra Aman</strong></span>
        </div>
    </footer>

</body>
</html>
