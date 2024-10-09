@include ('header')
<section class="product_section container my-5">
    <h1 class="text-center mb-4">Покупка</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
                <h2>{{ $name }}</h2> <!-- Безопасный вывод имени -->
                @if(isset($products) && count($products) > 0)
                    <ul class="list-group">
                        @foreach ($products as $product)
                            @if ($name === $product['name']) <!-- Строгое сравнение -->
                                <li class="list-group-item"> <!-- Использование Bootstrap классов для оформления -->
                                    <strong>Стоимость:</strong> {{ number_format($product['cost'], 0, ',', ' ') }} тугриков
                                </li>
                                @break <!-- Выход из цикла после нахождения первого совпадения -->
                            @endif
                        @endforeach
                    </ul>
                @else
                    <p>Нет продуктов для отображения.</p>
                @endif
        </div>
    </div>
</section>
@include ('footer')
</body>
</html>
