@extends('layouts.layout')

@section('content')
    <section class="top-page">
        <div class="content-wrapper">
            <h1 class="top-title">ズボラ引っ越し</h1>
        </div>
    </section>
    <section class="zubora-detail">
        <div class="content-wrapper">
            <img class="zubora-display" src="{{ asset('/images/スマホ画面.png') }}">
            <div class="zubora-description">
                <h2 class="zubora-description-title">😙 ズボラ引っ越し 😙</h2>
                <div class="zubora-description-text">
                    これまでの引っ越しは、考えることが多すぎました<br>
                    これからは「引っ越したい！」という<br>
                    気持ちだけで大丈夫。面倒なことはおまかせして<br>
                    もっと気軽に引っ越しちゃいましょう!!!<br>
                    そんな、あたらしい引っ越しのかたちが<br>
                    <p class="reason-under-comment">『ズボラ引っ越し』なのです</p>
                </div>
                <div class="zubora-description-induction">
                    <div class="induction-accent">まずは、基本情報を入力！</div>
                    <br>
                    下記のボタンから、入力画面に飛んで、<br><br>
                    基本情報を入力して下さい。<br><br>
                    記入項目はたったの4つ！
                </div>
            </div>
        </div>
    </section>
    <section class="conversion-btn-wrapper">
        <div class="content-wrapper">
            @if(isset($user))
                <a href="{{ route('reservation.edit') }}" class="btn conversion"><span
                            class="push">ズボラ引っ越しを使ってみる</span></a>
            @else
                <a href="{{ route('welcome') }}" class="btn conversion"><span class="push">ズボラ引っ越しを使ってみる</span></a>
            @endif
        </div>
    </section>
    <section>
        <div class="content-wrapper">
            <div class="reasons">
                <h2>🤔 引っ越したいけど 🤔</h2>
                <div class="reason-title">考えるだけで気が重たくなる事がこんなにたくさん...</div>
                <div class="reason-detail-wrapper">
                    <div class="reason-details">
                        <div class="reason-detail">💣 役所等の手続き</div>
                        <img class="reason-image" src="{{ asset('/images/手続き.png') }}">
                    </div>
                    <div class="reason-details">
                        <div class="reason-detail">💣 自分で満足のいく物件探し</div>
                        <img class="reason-image" src="{{ asset('/images/部屋探し.png') }}">
                    </div>
                    <div class="reason-details">
                        <div class="reason-detail">💣 水道・ガス・電気の手続き</div>
                        <img class="reason-image" src="{{ asset('/images/電気・ガス・水道.png') }}">
                    </div>
                </div>
                <div class="zubora-reason-title">ズボラ引っ越しならこんなに簡単</div>
                <div class="reason-detail-wrapper">
                    <div class="zubora-reason-details">
                        <div class="reason-detail">サイトで4つの質問に回答</div>
                        <img class="zubora-reason-image" src="{{ asset('/images/記入画面１.png') }}">
                    </div>
                    <div class="zubora-reason-details">
                        <div class="reason-detail">ラインで少しやり取りして</div>
                        <img class="zubora-reason-image" src="{{ asset('/images/ラインやりとり.png') }}">
                    </div>
                    <div class="zubora-reason-details">
                        <div class="reason-detail">あとは、流れに身を任せるだけ！</div>
                        <img class="zubora-reason-image" src="{{ asset('/images/終了画面1.png') }}">
                    </div>
                </div>
                <div class="reason-conversion-title">オススメの引っ越しプランの提案に加え、手続きの代行まで行います</div>
            </div>
            <div class="content-wrapper">
                @if(isset($user))
                    <a href="{{ route('reservation.edit') }}" class="btn conversion"><span
                                class="push">ズボラ引っ越しを使ってみる</span></a>
                @else
                    <a href="{{ route('welcome') }}" class="btn conversion"><span class="push">ズボラ引っ越しを使ってみる</span></a>
                @endif
            </div>
        </div>
    </section>
    <section>
        <div class="content-wrapper">
            <h2>💪 つよみ 💪</h2>
            <ul class="features">
                <li class="feature-detail">面倒な手続き一切になしで引っ越しが出来る</li>
                <li class="feature-detail">部屋の写真と最低限のチャットだけで引っ越しができる</li>
                <li class="feature-detail">水道・電気・インターネットの立ち合いから役所の書類関係まで全て代行</li>
            </ul>
        </div>
        <div class="content-wrapper">
            @if(isset($user))
                <a href="{{ route('reservation.edit') }}" class="btn conversion"><span
                            class="push">ズボラ引っ越しを使ってみる</span></a>
            @else
                <a href="{{ route('welcome') }}" class="btn conversion"><span class="push">ズボラ引っ越しを使ってみる</span></a>
            @endif
        </div>
    </section>
    {{--<section class="conversion-btn-wrapper">--}}
    {{--<div class="content-wrapper">--}}
    {{--<a href="{{ route('reservation.edit') }}" class="btn conversion"><span class="push">ズボラ引っ越しを使ってみる</span></a>--}}
    {{--</div>--}}
    {{--</section>--}}
@endsection
