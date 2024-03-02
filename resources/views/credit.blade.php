@extends('layouts.app_menu')

@section('content')
    <div class="credit">
        <div class="sub_nav">
            <ul>
                {{-- active 추가 스타일 변경 --}}
                <li class="sub_nav-menu active"><a href="">크레딧 구매</a></li>
                <li class="sub_nav-menu"><a href="">크레딧 내역</a></li>
            </ul>
        </div>

        <div class="credit_con">
            <div class="credit_con_tit">
                <h2>크레딧 구매</h2>
                <small>메시지 전송을 위해 사용할 크레딧 상품을 선택해 주세요</small>
            </div>
            <div class="credit_con_cards">
                <div class="credit_card">
                    <div class="option_top">
                        <h3 class="option_top-won">30,000 원</h3>
                        <div class="option_top-detail">
                            <span class="deail_1">총 66,667건 발송가능합니다 </span>
                            <span class="deail_2">1건당 15원에 결제가능합니다</span>
                        </div>
                    </div>
                    <div class="option_mid">
                        <div class="option_mid-total">
                            <h4>330,000 크레딧</h4>
                            <small>+ 10%</small>
                        </div>
                        <div class="option_mid-detail">
                            <div class="ditail_con">
                                <span>기본 크레딧</span>
                                <span>300,000</span>
                            </div>
                            <div class="ditail_con">
                                <span>추가 크레딧</span>
                                <span>+ 30,000</span>
                            </div>
                        </div>
                    </div>
                    <button class="option_btm">구매하기</button>
                </div>

                <div class="credit_card">
                    <div class="option_top">
                        <h3 class="option_top-won">10,000 원</h3>
                        <div class="option_top-detail">
                            <span class="deail_1">총 76,667건 발송가능합니다 </span>
                            <span class="deail_2">1건당 15원에 결제가능합니다</span>
                        </div>
                    </div>
                    <div class="option_mid">
                        <div class="option_mid-total">
                            <h4>110,000 크레딧</h4>
                            <small>+ 10%</small>
                        </div>
                        <div class="option_mid-detail">
                            <div class="ditail_con">
                                <span>기본 크레딧</span>
                                <span>100,000</span>
                            </div>
                            <div class="ditail_con">
                                <span>추가 크레딧</span>
                                <span>+ 10,000</span>
                            </div>
                        </div>
                    </div>
                    <button class="option_btm">구매하기</button>
                </div>

                <div class="credit_card">
                    <div class="option_top">
                        <h3 class="option_top-won">30,000 원</h3>
                        <div class="option_top-detail">
                            <span class="deail_1">총 66,667건 발송가능합니다 </span>
                            <span class="deail_2">1건당 15원에 결제가능합니다</span>
                        </div>
                    </div>
                    <div class="option_mid">
                        <div class="option_mid-total">
                            <h4>330,000 크레딧</h4>
                            <small>+ 10%</small>
                        </div>
                        <div class="option_mid-detail">
                            <div class="ditail_con">
                                <span>기본 크레딧</span>
                                <span>300,000</span>
                            </div>
                            <div class="ditail_con">
                                <span>추가 크레딧</span>
                                <span>+ 30,000</span>
                            </div>
                        </div>
                    </div>
                    <button class="option_btm">구매하기</button>
                </div>

                <div class="credit_card">
                    <div class="option_top">
                        <h3 class="option_top-won">10,000 원</h3>
                        <div class="option_top-detail">
                            <span class="deail_1">총 66,667건 발송가능합니다 </span>
                            <span class="deail_2">1건당 15원에 결제가능합니다</span>
                        </div>
                    </div>
                    <div class="option_mid">
                        <div class="option_mid-total">
                            <h4>110,000 크레딧</h4>
                            <small>+ 10%</small>
                        </div>
                        <div class="option_mid-detail">
                            <div class="ditail_con">
                                <span>기본 크레딧</span>
                                <span>100,000</span>
                            </div>
                            <div class="ditail_con">
                                <span>추가 크레딧</span>
                                <span>+ 10,000</span>
                            </div>
                        </div>
                    </div>
                    <button class="option_btm">구매하기</button>
                </div>



            </div>
        </div>
    @endsection
