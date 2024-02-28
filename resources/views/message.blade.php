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

                <div class="massage_tags">
                    <div class="tab active">문자메세지</div>
                    <div class="tab">알림톡 (카카오)</div>
                    <div class="tab">친구톡 (카카오)</div>
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
                            </div>
                            <hr>

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
