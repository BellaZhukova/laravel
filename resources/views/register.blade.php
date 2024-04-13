<form action="{{ route('register') }}" method="post" novalidate>
    @csrf
    <label for="name">Имя</label>
    <input type="text" placeholder="Имя" id="name">
    <label for="login">Логин</label>
    <input type="text" placeholder="логин" id="login">
    <label for="password">Пароль</label>
    <input type="password" placeholder="password" id="password">
    <button type="submit">Отправить</button>
</form>
