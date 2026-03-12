<h1>Dashboard Kasir</h1>

<p>Selamat datang, {{ auth()->user()->name }}</p>
<p>Role: {{ auth()->user()->role }}</p>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" style="padding:8px 16px;background:red;color:white;border:none;border-radius:5px;">
        Logout
    </button>
</form>