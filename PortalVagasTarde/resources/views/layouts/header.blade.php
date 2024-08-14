@if (Auth::check())
@else
    <div class="nav-bar">
        <ul>
            <li><a href="">Login</a></li>
            <li><a href="">Registre-se</a></li>
        <ul>
    </div>
@endif
