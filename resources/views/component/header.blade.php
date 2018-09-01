<section class="header js-header">
    <div class="header__wrapper pc-only">
        <div class="header__logo pc-only"><a class="header__logo__link" href="/"><strong>ズボラ引っ越し</strong></a></div>
        <div class="header-menu js-pull-down-anchor pc-only">
            @if(isset($user))
                <a href="javascript:"><span class="header-user-name">{{ $user->name }}</span><i
                            class="material-icons">keyboard_arrow_down</i></a>
                <div class="pull-down-wrapper js-pull-down-menu">
                    <ul class="header__sections pull-down-menu">
                        <li class="header__section"><a class="mypage-user-name"
                                                       href="{{ route('mypage', ['id' => $user->id]) }}">マイページ</a>
                        </li>
                        <li class="header__section"><a class="mypage-user-name"
                                                          href="{{ route('reservation.edit') }}">登録情報を編集</a>
                        </li>
                        <li class="header__section"><a href="{{ route('logout') }}"
                                                       class="header__logo__link logout-link"
                                                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">ログアウト</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
            @else
                <ul class="header__sections">
                    <li class="header__section"><a href="{{ route('welcome') }}" class="header__logo__link">ログイン</a>
                    </li>
                </ul>
            @endif
        </div>
    </div>
    <div class="header__wrapper sp-only" style="display: none">
        <div class="header__logo"><a class="header__logo__link" href="/"><strong>ズボラ引っ越し</strong></a></div>
        <a class="close js-sp-close-button" href="javascript:"><i class="material-icons">clear</i></a>
    </div>
    <div class="header-menu sp-right-menu-anchor sp-only">
        <div class="header__logo right-menu">
            <a class="header__logo__link" href="/">
                <strong>ズボラ引っ越し</strong>
            </a>
        </div>
        <a href="javascript:">
            <i class="material-icons">view list</i>
        </a>
        <ul class="header__sections sp-right-menus">
            @if(isset($user))
                <li class="sp-right-menu"><a class="mypage-user-name"
                                             href="{{ route('mypage', ['id' => $user->id]) }}">マイページ</a>
                </li>
                <li class="sp-right-menu"><a class="mypage-user-name"
                                             href="{{ route('reservation.edit') }}">登録情報を編集</a>
                </li>
                <li class="sp-right-menu"><a href="{{ route('logout') }}"
                                             class="header__logo__link logout-link"
                                             onclick="event.preventDefault();document.getElementById('logout-form').submit();">ログアウト</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            @else
                <li class="header__section"><a href="{{ route('welcome') }}" class="header__logo__link">ログイン</a>
                </li>
            @endif
        </ul>
    </div>
</section>
