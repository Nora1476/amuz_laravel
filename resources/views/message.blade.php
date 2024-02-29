@extends('layouts.app')

@section('content')
    <div class="message">
        <div class="sub_nav">
            <ul>
                {{-- active 추가 스타일 변경 --}}
                <li class="sub_nav-menu active"><a href="">메세지 전송</a></li>
                <li class="sub_nav-menu"><a href="">발신번호 관리</a></li>
                <li class="sub_nav-menu"><a href="">주소록 관리</a></li>
                <li class="sub_nav-menu"><a href="">발송 결과</a></li>
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
                <form action="">
                    <div class="message_main">
                        <div class="main_left">
                            <div class="main_left-recivenum">
                                <h4 class="main_left-tit">수신번호</h4>

                                <div class="main_left-phone input-group mb-3">
                                    <input type="text" class="form-control" placeholder="휴대폰번호 (숫자만 입력)"
                                        aria-label="휴대폰번호 (숫자만 입력)" aria-describedby="button-addon2">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">+
                                        추가</button>
                                </div>

                                <div class="main_left-phonelist mb-3">
                                    <textarea class="form-control" id="message_area"
                                        placeholder="번호를 입력하거나 후 엔터 혹은 추가하기를 클릭해 주세요. &#13;&#10;최대 1만 건까지 붙여넣기 가능합니다."></textarea>
                                    <div class="phonelist_total">
                                        <div class="phonelist_total_num">총 <span>0</span>명</div>
                                        <button class="phonelist_total_del">모두 삭제</button>
                                    </div>
                                </div>

                                <div class="btn_wrap">
                                    <button>주소록 불러오기</button>
                                    <button>파일 불러오기</button>
                                    <button>최근 전송 내역</button>
                                </div>

                            </div>
                            <hr>
                            <div class="main_left-sendnum">
                                <h4 class="main_left-tit">발신번호</h4>

                                <select class="form-select form-select-lg mb-3" aria-label="Large select example">
                                    <option selected>전송할 발신번호 선택</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <hr>
                            <div class="main_left-typing">
                                <h4 class="main_left-tit">메세지 입력</h4>

                                <div class="typing_content">

                                    <input type="text" class="form-control msg_title" name="msg_title"
                                        placeholder="제목을 입력해주세요. (단문 SMS는 제외, 최대 30byte)">

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

                                    <div class="msg_textarea">
                                        <textarea class="form-control msg_text" id="message_area" name="msg_text"
                                            placeholder="내용을 입력해 주세요. 90byte초과 시 장문 문자로, &#13;&#10;이미지 추가 시 문자로 자동 전환 횝니다."></textarea>
                                        <div class="msg_option">
                                            <button class="option">치환코드</button>
                                            <button class="option">템플릿</button>
                                            <button class="option">문자도구</button>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="msg_addinclude">
                                        <h5 class="main_left-tit">광고성 문자(080 수신거부번호 포함)</h5>
                                        <img src="/img/icon/icon14.png" alt="icon14">
                                    </div>

                                    <hr>
                                    <div class="msg_images">
                                        <h5 class="main_left-tit">이미지 추가</h5>
                                        <div class="msg_img-wrap">
                                            <img src="/img/icon/icon11.png"alt="icon11" class="msg_img">
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


                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="message_setting">
                        <h4 class="main_left-tit">발송 설정</h4>
                        <div class="message_setting-check">
                            <input type="radio" class="btn-check" name="options-outlined" id="success-outlined"
                                autocomplete="off" checked>
                            <label class="btn btn-outline-now" for="success-outlined">즉시 발송</label>

                            <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined"
                                autocomplete="off">
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
