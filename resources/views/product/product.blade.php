<div class="product">
    @if(isset($products) && count($products) > 0)
    @foreach ($products as $product)
    <ul class="card {{ $product['amount'] <= 0 ? 'not-in-stock' : 'in-stock' }} mb-3" style="width: 18rem;">
        <div class="card-body">
            <h2 class="card-title">Имя: {{ $product['name'] }}</h2>
            <li class="card-text">Стоимость: {{ number_format($product['cost'], 0, ',', ' ') }} тугриков</li>
            <li class="card-text">Количество: {{ $product['amount'] }}</li>
            @if(\Illuminate\Support\Facades\Auth::user() && \Illuminate\Support\Facades\Auth::user()->role === \App\Enums\RoleEnum::USER->value)
                <form action="/product/shop" method="get">
                    @csrf
                    <input type="text" name="id" value="{{ $product['name'] }}" class="non">
                    <button type="submit" class="btn btn-primary mt-2">Купить</button>
                </form>
            @endif      
        </div>
    </ul>
    @endforeach
    @else
    <p class="alert alert-warning">Нет продуктов для отображения.</p>
    @endif
</div>