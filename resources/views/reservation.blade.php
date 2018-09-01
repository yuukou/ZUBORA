@extends('layouts.layout')

@section('content')
    <section>
        <h2 class="reservation-title">✍️　登録フォーム　✍️</h2>
        @if(is_null($reservation))
            <div class="container">
                <form method="POST" action="{{ route('reservation.add')}}"
                      enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-element">
                        <label class="form-label">今住んでいる地域</label>
                        <input required class="form-input" type="text" name="old_address"
                               value="{{ old("old_address") }}" placeholder="渋谷区">
                    </div>
                    <div class="form-element">
                        <label class="form-label">引っ越したい地域</label>
                        <input required class="form-input" type="text" name="new_address"
                               value="{{ old("new_address") }}" placeholder="品川区五反田付近">
                    </div>
                    <div class="form-element">
                        <label class="form-label">希望家賃</label>
                        <select required name="rent">
                            <option name="rent" value="~10万円">~10万円</option>
                            <option name="rent" value="~15万円">~15万円</option>
                            <option name="rent" value="~20万円">~20万円</option>
                            <option name="rent" value="~30万円">~30万円</option>
                            <option name="rent" value="30万円~">30万円~</option>
                        </select>
                    </div>
                    <div class="form-element">
                        <label class="form-label">写真アップロード</label>
                        <input accept="image/*" required class="form-file js-picture-form" name="house" type="file"
                               onChange="imgPreView(event)">
                        <div class="js-preview">
                        </div>
                    </div>
                    <div class="form-element">
                        <label class="form-label">その他</label>
                        <textarea class="form-textarea" name='other'
                                  placeholder="◯◯駅から徒歩10分以内/コンビニが近い等">{{ old("other") }}</textarea>
                    </div>
                    <div class="form-element">s
                        <input class="form-submit" type="submit" value="登録する">
                    </div>
                </form>
            </div>
        @else
            <div class="container">
                <form method="POST" action="{{ route('reservation.update')}}"
                      enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-element">
                        <label class="form-label">今住んでいる地域</label>
                        <input required class="form-input" type="text" name="old_address"
                               value="{{ old("old_address", $reservation->old_address) }}" placeholder="渋谷区">
                    </div>
                    <div class="form-element">
                        <label class="form-label">引っ越したい地域</label>
                        <input required class="form-input" type="text" name="new_address"
                               value="{{ old("new_address", $reservation->new_address) }}" placeholder="品川区五反田付近">
                    </div>
                    <div class="form-element">
                        <label class="form-label">希望家賃</label>
                        <select required name="rent">
                            <option name="rent" value="~10万円">~10万円</option>
                            <option name="rent" value="~15万円">~15万円</option>
                            <option name="rent" value="~20万円">~20万円</option>
                            <option name="rent" value="~30万円">~30万円</option>
                            <option name="rent" value="30万円~">30万円~</option>
                        </select>
                    </div>
                    <div class="form-element">
                        <label class="form-label">写真アップロード</label>
                        <input accept="image/*" required class="form-file js-picture-form" name='house' type="file"
                               onChange="imgPreView(event)">
                        <div class="js-preview">
                        </div>
                    </div>
                    <div class="form-element">
                        <label class="form-label">その他</label>
                        <textarea class="form-textarea" type="file" name="other"
                                  placeholder="◯◯駅から徒歩10分以内/コンビニが近い等">{{ old("other", $reservation->other) }}</textarea>
                    </div>
                    <div class="form-element">
                        <input class="form-submit" type="submit" value="更新">
                    </div>
                </form>
            </div>
        @endif
    </section>
    <script>
      function imgPreView(event) {
        const file = event.target.files[0];
        const reader = new FileReader();
        const preview = document.querySelector('.js-preview');
        const previewImage = document.getElementById("previewImage");

        if (previewImage != null)
          preview.removeChild(previewImage);

        reader.onload = function (event) {
          const img = document.createElement("img");
          img.setAttribute("src", reader.result);
          img.setAttribute("id", "previewImage");
          img.setAttribute("class", "preview-image");
          preview.appendChild(img);
        };

        reader.readAsDataURL(file);
      }
    </script>
@endsection
