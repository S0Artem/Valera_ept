<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <title>Products List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header class="bg-primary text-white text-center py-4 mb-4">
        <h1 class="h3">Products List</h1>
        <nav>
            <ul class="list-unstyled h5">
                <li class="mb-2">
                    <a href="{{ route('products.create') }}" class="text-white text-decoration-none">Список продуктов</a>
                </li>
                <li>
                    <a href="{{ 'login.form' }}" class="text-white text-decoration-none">Выход</a>
                </li>
            </ul>
        </nav>
    </header>
