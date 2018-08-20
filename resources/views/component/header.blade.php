<section class="header js-header">
    <div class="header__wrapper">
        <div class="header__logo"><a class="header__logo__link" href="/"><strong>ズボラ引っ越し</strong></a></div>
        <div class="header-menu js-pull-down-anchor">
            @if(isset($user))
                <a href="javascript:"><span class="header-user-name">{{ $user->name }}</span><i
                            class="material-icons">keyboard_arrow_down</i></a>
                <ul class="header__sections js-pull-down-menu pull-down-wrapper">
                    <li class="header__section"><a class="mypage-user-name"
                                                   href="{{ route('mypage', ['id' => $user->id]) }}">マイページ</a>
                    </li>
                    <li class="header__section"><a href="{{ route('logout') }}" class="header__logo__link logout-link"
                                                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">ログアウト</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            @else
                <ul class="header__sections">
                    <li class="header__section"><a href="{{ route('welcome') }}" class="header__logo__link">ログイン</a>
                    </li>
                </ul>
            @endif
        </div>
    </div>
</section>
