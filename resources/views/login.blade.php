@include ('header')

<section class="container mt-5">
    <h1 class="mb-4">Вход</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('login.process') }}" method="POST" class="p-4 border rounded shadow-sm">
        @csrf
        <div class="mb-3">
            <label for="login" class="form-label">Логин</label>
            <input type="text" 
                   id="login" 
                   name="login" 
                   class="form-control @error('login') is-invalid @enderror" 
                   required>
            @error('login')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Пароль</label>
            <input type="password" 
                   id="password" 
                   name="password" 
                   class="form-control @error('password') is-invalid @enderror" 
                   minlength="6" 
                   required>
            @error('password')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <input type="submit" class="btn btn-primary w-100" value="Войти">
    </form>
</section>

@include ('footer')
