@extends('layouts.layout')

@section('content')
    <div class="mypage-top">
        <h2>{{$user->name}}さんのページ</h2>
    </div>
    @if(is_null($reservation))
        <div class="content-wrapper">
            <div class="yet-reservation-comment">
                引っ越し情報を登録して下さい！
            </div>
            <div class="content-wrapper">
                <a href="{{ route('reservation.edit', ['id' => $user->id]) }}" class="btn conversion"><span
                            class="push">ズボラ引っ越しを使ってみる</span></a>
            </div>
        </div>
    @else
        <section>
            <table class="mypage-table">
                <tr class="user_registration-informations">
                    <th class="user_registration-information mypage-column">項目</th>
                    <td class="user_registration-information mypage-column">登録情報</td>
                </tr>
                <tr class="user_registration-informations">
                    <th class="user_registration-information">登録現在居住地域</th>
                    <td class="user_registration-information">{{ $reservation->old_address }}</td>
                </tr>
                <tr class="user_registration-informations">
                    <th class="user_registration-information">登録希望引っ越し地域</th>
                    <td class="user_registration-information">{{ $reservation->new_address }}</td>
                </tr>
                <tr class="user_registration-informations">
                    <th class="user_registration-information">登録希望家賃</th>
                    <td class="user_registration-information">{{ $reservation->rent }}</td>
                </tr>
                <tr class="user_registration-informations">
                    <th class="user_registration-information">登録写真</th>
                    <td class="user_registration-information">
                        <img class="user_registration-information-image"
                             src="{{ route('mypage.image.display')}}">
                    </td>
                </tr>
                <tr class="user_registration-informations">
                    <th class="user_registration-information">その他</th>
                    <td class="user_registration-information">{{ $reservation->other }}</td>
                </tr>
            </table>
        </section>
    @endif
@endsection