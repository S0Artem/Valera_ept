<div class="product">
    @if(isset($products) && count($products) > 0)
    @foreach ($products as $product)
    <ul class=" {{ $product['amount'] <= 0 ? 'not-in-stock' : 'in-stock' }}">
        <h2>Имя: {{ $product['name'] }}</h2>
        <li>Стоимость: {{ number_format($product['cost'], 0, ',', ' ') }} тугриков</li>
        <li>Количество: {{ $product['amount'] }}</li>
    </ul>
    @endforeach
    @else
    <p>Нет продуктов для отображения.</p>
    @endif
</div>