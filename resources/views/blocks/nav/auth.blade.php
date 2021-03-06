@guest
    <ul class="nav justify-content-center">
        <li class="nav-item ml-auto">
            <a class="nav-link" href="{{ route('login') }}">Войти</a>
        </li>
        @if (Route::has('register'))
            <li class="nav-item pl-0">
                <a class="nav-link" href="{{ route('register') }}">Зарегистрироваться</a>
            </li>
        @endif
        <li class="nav-item pl-0">
            <a href="#">Домой</a>
{{--            <a class="nav-link" href="{{ route('lk', ['locale'=>$locale]) }}">Кабинет</a>--}}
        </li>
    </ul>

@else
    <ul class="nav justify-content-center">
        <li class="nav-item ml-auto">
            <a class="nav-link alert-link" href="#"> {{ Auth::user()->name }} </a>
{{--            <a class="nav-link alert-link" href="{{ route('lk', ['locale'=>$locale]) }}"> {{ Auth::user()->name }} </a>--}}
        </li>
        <li class="nav-item pl-0">
            <form action="{{ route('logout') }}" method="POST" >
                @csrf
                <button type="submit" class="btn btn-link">(logout)</button>
            </form>
        </li>
    </ul>
@endguest

<a class="text-warning" href="{{ route('cms')  }}">CMS</a>
<b><a href="{{ route('client-home')  }}">Мои объекты</a></b>