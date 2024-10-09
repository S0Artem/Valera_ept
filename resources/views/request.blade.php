@include ('header')

<section class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center mb-4">Регистрация</h1>
            <form action="{{ route('register.process') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="fio" class="form-label">ФИО</label>
                    <input type="text" 
                           pattern="^([А-ЯЁ][а-яё]+) ([А-ЯЁ][а-яё]+) ([А-ЯЁ][а-яё]+)$" 
                           title="Введите ФИО" 
                           id="fio" 
                           name="fio" 
                           class="form-control" 
                           placeholder="Софронов Артем Павлович" 
                           required>
                    @error('fio')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="login" class="form-label">Логин</label>
                    <input type="text" 
                           id="login" 
                           name="login" 
                           class="form-control" 
                           required>
                    @error('login')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input type="password" 
                           id="password" 
                           name="password" 
                           class="form-control" 
                           minlength="6" 
                           required>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <input type="submit" class="btn btn-primary" value="Зарегистрироваться">
            </form>
        </div>
    </div>
</section>

@include ('footer')
