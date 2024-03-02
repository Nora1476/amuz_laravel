@extends('layouts.app_menu')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>

        <script>
            // 페이지가 로드되면 실행되도록 수정
            document.addEventListener('DOMContentLoaded', function() {
                var alertDiv = document.querySelector('.alert');
                setTimeout(function() {
                    alertDiv.classList.add('slide-up');
                    setTimeout(function() {
                        alertDiv.style.display = 'none';
                    }, 500);
                }, 3000);
            });
        </script>
    @endif

    <div class="message">
        <div class="sub_nav">
            <ul>
                {{-- active 추가 스타일 변경 --}}
                <li class="sub_nav-menu active"><a href="">메세지 <span> 전송</span></a></li>
                <li class="sub_nav-menu"><a href="">발신번호 <span> 관리</span></a></li>
                <li class="sub_nav-menu"><a href="">주소록 <span> 관리</span></a></li>
                <li class="sub_nav-menu"><a href="">발송<span> 결과</span></a></li>
            </ul>
        </div>

        <div class="message_con">
            <div class="messege_container">

                <h3 class="message_tit">메세지 전송</h3>

                <div class="massage_tabs">
                    <button class="tab active">문자메세지</button>
                    <button class="tab">알림톡 (카카오)</button>
                    <button class="tab">친구톡 (카카오)</button>
                </div>

                <div class="message_small">
                    <span>간편하게 한 화면에서 단문, 장문 포토메세지를 발송할 수 있습니다.</span>
                    <span>90byte 초과 시 장문문자로 자동 전환되며, 최대 2,000byte까지 작성이 가능합니다.</span>
                </div>

                <hr>
                <form action="{{ route('messages.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="message_main">
                        <div class="main_left">
                            {{-- 수신자 번호 --}}
                            <div class="main_left-recivenum">
                                <h4 class="main_left-tit">수신번호</h4>

                                <div class="main_left-phone input-group mb-3">
                                    <input type="text" class="form-control" placeholder="휴대폰번호 (숫자만 입력)"
                                        onfocus="this.placeholder=''" onblur="this.placeholder='휴대폰번호 (숫자만 입력)'"
                                        aria-label="휴대폰번호 (숫자만 입력)" aria-describedby="button-addon2">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">+
                                        추가</button>
                                </div>


                                <div class="main_left-phonelist mb-3">
                                    <textarea class="form-control" id="message_area" name="msg_recivenum"
                                        placeholder="번호를 입력하거나 후 엔터 혹은 추가하기를 클릭해 주세요. &#13;&#10;최대 1만 건까지 붙여넣기 가능합니다." onfocus="this.placeholder=''"
                                        onblur="this.placeholder='번호를 입력하거나 후 엔터 혹은 추가하기를 클릭해 주세요. &#13;&#10;최대 1만 건까지 붙여넣기 가능합니다.'"></textarea>
                                    <div class="phonelist_total">
                                        <div class="phonelist_total_num">총 <span>0</span>명</div>
                                        <button class="phonelist_total_del">모두 삭제</button>
                                    </div>
                                </div>

                                <div class="btn_wrap">
                                    <button>주소록 불러오기</button>
                                    <button>파일 불러오기</button>
                                    <button>최근 전송내역</button>
                                </div>
                            </div>
                            <hr>
                            {{-- 발신자번호 --}}
                            <div class="main_left-sendnum">
                                <h4 class="main_left-tit">발신번호</h4>

                                <select class="form-select form-select-lg mb-3" aria-label="Large select example"
                                    name="msg_sendnum">
                                    <option selected>전송할 발신번호 선택</option>
                                    <option value="1">0510000000</option>
                                    <option value="2">01012345678</option>
                                </select>
                            </div>
                            <hr>
                            {{-- 메세지타이틀 --}}
                            <div class="main_left-typing">
                                <h4 class="main_left-tit">메세지 입력</h4>

                                <div class="typing_content">

                                    <input type="text" class="form-control msg_title" name="msg_title"
                                        placeholder="제목을 입력해주세요. (단문 SMS는 제외, 최대 30byte)" onfocus="this.placeholder=''"
                                        onblur="this.placeholder='제목을 입력해주세요. (단문 SMS는 제외, 최대 30byte)'">

                                    <div class="msg_midcon">
                                        <div class="midcon_status"><span>단문 SMS</span></div>
                                        <div class="midcon_byte">
                                            <span>0</span>
                                            &nbsp;/&nbsp;
                                            <span>90</span>
                                            byte
                                        </div>
                                        <button class="midcon_reset"></button>
                                    </div>
                                    {{-- 메세지내용 --}}
                                    <div class="msg_textarea">
                                        <textarea class="form-control msg_text" id="message_area" name="msg_text"
                                            placeholder="내용을 입력해 주세요. 90byte초과 시 장문 문자로 자동 전환되며, &#13;&#10;이미지 추가 시 문자로 자동 전환 횝니다."
                                            onfocus="this.placeholder=''"
                                            onblur="this.placeholder='내용을 입력해 주세요. 90byte초과 시 장문 문자로 자동 전환되며, &#13;&#10;이미지 추가 시 문자로 자동 전환 횝니다.'"></textarea>
                                        <div class="msg_option">
                                            <button class="option">치환코드</button>
                                            <button class="option">템플릿</button>
                                            <button class="option">문자도구</button>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="msg_addinclude">
                                        <h5 class="main_left-tit">광고성 문자(080 수신거부번호 포함)</h5>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="flexSwitchCheckDefault">
                                        </div>
                                    </div>

                                    <hr>
                                    {{-- 이미지 파일 --}}
                                    <div class="msg_images">
                                        <h5 class="main_left-tit">이미지 추가</h5>
                                        <div class="msg_img-wrap" id="upload-container">

                                            <label id="custom-upload-button" for="upload_img"></label>
                                            <input type="file" name="images[]" id="upload_img"
                                                accept=".jpg,.jpeg,.png,.gif" multiple onchange="validateAndAddFile(this);">

                                            <div id="image-preview"></div>

                                        </div>

                                        <div class="message_small">
                                            <span>이미지는 최대 3장까지 첨부 가능합니다.</span>
                                            <span>이미지 파일 형식은 JPG, PNG, GIF만 가능합니다.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="main_right">
                            <div class="main_right-text">
                                text
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="message_setting">
                        <h4 class="main_left-tit">발송 설정</h4>
                        <div class="message_setting-check">
                            <input type="radio" value="즉시발송" class="btn-check" name="msg_sendoption"
                                id="success-outlined" autocomplete="off" checked>
                            <label class="btn btn-outline-now" for="success-outlined">즉시 발송</label>

                            <input type="radio" value="예약발송" class="btn-check" name="msg_sendoption"
                                id="danger-outlined" autocomplete="off">
                            <label class="btn btn-outline-reverve" for="danger-outlined">예약발송</label>

                        </div>
                    </div>

                    <hr>
                    <button type="submit" class="massage_send">발송하기</button>
                </form>
            </div>


        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function validateAndAddFile(input) {
            var files = input.files;
            var imagePreview = document.getElementById("image-preview");

            // 유효성 검사: 이미지 파일 수가 3개 이하인지 확인
            if (files.length > 3) {
                alert("최대 3개의 이미지 파일만 업로드할 수 있습니다.");
                input.value = ""; // 파일 입력 필드 비우기
                return;
            }

            // 유효성 검사: 파일 크기 확인
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var fileSizeInMB = file.size / (1024 * 1024); // 파일 크기를 MB로 변환

                if (fileSizeInMB > 5) { // 5MB 이상의 파일 크기 허용하지 않음
                    alert("각 이미지 파일의 크기는 최대 5MB를 넘을 수 없습니다.");
                    input.value = ""; // 파일 입력 필드 비우기
                    return;
                }
            }

            // 파일이 유효한 경우 미리보기 생성
            imagePreview.innerHTML = ""; // Clear previous previews

            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var reader = new FileReader();

                reader.onload = function(event) {
                    var imageUrl = event.target.result;
                    var previewContainer = document.createElement("div");
                    previewContainer.className = "preview-container";

                    var image = document.createElement("img");
                    image.src = imageUrl;

                    var removeButton = document.createElement("span");
                    removeButton.innerHTML = "&times;";
                    removeButton.className = "remove-button";
                    removeButton.addEventListener("click", function() {
                        previewContainer.remove();
                    });

                    previewContainer.appendChild(image);
                    previewContainer.appendChild(removeButton);
                    imagePreview.appendChild(previewContainer);
                };

                reader.readAsDataURL(file);
            }
        }
    </script>
@endpush
