{{-- Nav --}}
<ul class="navi navi-hover py-4">
    {{-- Item --}}
    <li class="navi-item">
        <a href="{{route('logout')}}" class="navi-link">
            <span class="navi-text"><i class="fas fa-sign-out-alt"></i></span>
        </a>
    </li>

    {{-- Item --}}
    <li class="navi-item active">
        <a href="{!! route('user.changeLanguage',['en']) !!}" class="navi-link">
            <span class="symbol symbol-20 mr-3">
                <img src="{{ asset('media/svg/flags/128-spain.svg') }}" alt=""/>
            </span>
            <span class="navi-text">EN</span>
        </a>
    </li>

    {{-- Item --}}
    <li class="navi-item">
        <a href="{!! route('user.changeLanguage',['vi']) !!}" class="navi-link">
            <span class="symbol symbol-20 mr-3">
                <img src="{{ asset('media/svg/flags/220-vietnam.svg') }}" alt=""/>
            </span>
            <span class="navi-text">VI</span>
        </a>
    </li>

</ul>
