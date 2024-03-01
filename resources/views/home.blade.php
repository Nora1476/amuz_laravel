@extends('layouts.app')

@section('content')
    <div class="section_wrap">
        <div class="section sec1">
            <div class="sec__left">
                <div class="sec__left-con">
                    <small>인터넷 문자 메시지 전송의 모든 것</small>
                    <h1>가장 빠르고 안정적인 <br> 문자 서비스 SENDGO</h1>
                    <div class="btn_wrap">
                        @guest
                            @if (Route::has('login'))
                                <button class="sec__btn"><a href="{{ route('login') }}">{{ __('로그인') }}</a></button>
                            @endif
                            @if (Route::has('register'))
                                <button class="sec__btn"><a href="{{ route('register') }}">{{ __('회원가입') }}</a></button>
                            @endif
                        @else
                        @endguest
                    </div>
                </div>
            </div>
            <div class="sec__right">
                <div class="sec__right-con">
                    <div class="sec_img">
                        <div class="sec_img-wrap">
                            <img src="/img/images/main1.png" alt="main1" class="main1">
                            <img src="/img/images/main4.png" alt="main4"class="main4">
                        </div>
                    </div>
                    <div class="sec_img">
                        <div class="sec_img-wrap">
                            <img src="/img/images/main2.png" alt="main2"class="main2">
                            <img src="/img/images/main5.png" alt="main5"class="main5">
                        </div>
                    </div>
                    <div class="sec_img">
                        <div class="sec_img-wrap">
                            <img src="/img/images/main3.png" alt="main3"class="main3">
                            <div class="img_frame">
                                <img src="/img/images/main6.png" alt="main6"class="main6">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section sec2">
            <div class="sec__top">
                <img src="/img/icon/icon1.png" alt="icon1">
                <h3>복잡한 인터넷 문자 서비스를<br> 간편하게 만나보세요.</h3>
                <small>고객님들의 간편함을 고민하였습니다</small>
            </div>
            <div class="sec__main">
                <div class="sec__main-info">
                    <img src="/img/icon/icon2.png" alt="icon2">
                    <h5>메시지 용량에<br> 제한 받지 않고 전송</h5>
                    <p>메시지 용량 걱정없이 단문 메시지는 <span>물론 장문, 사진까지 전송이 가능합니다.</span></p>
                </div>
                <div class="sec__main-info">
                    <img src="/img/icon/icon3.png" alt="icon3">
                    <h5>모든 종류의 문자<br> 메시지를 한번에</h5>
                    <p>메시지 용량 걱정없이 단문 메시지는 <span>물론 장문, 사진까지 전송이 가능합니다.</span></p>
                </div>
                <div class="sec__main-info">
                    <img src="/img/icon/icon4.png" alt="icon4">
                    <h5>간편한 광고 <br>문자 메시지 설정</h5>
                    <p>광고 설정 버튼 클릭 한번으로<span> 080 수신 거부 번호가 적용됩니다.</span></p>

                </div>
            </div>
        </div>

        <div class="section sec3">
            <div class="sec__top">
                <img src="/img/icon/icon5.png" alt="icon2">
                <h3>샌드고의 다양한<br> 기능들을 살펴보세요</h3>
                <small>고객님들의 입장에서 고민하였습니다.</small>
            </div>
            <div class="sec__main">
                <div class="sec__main-top">
                    <div class="sec__main-top-info">
                        <div class="info_subtit">
                            <h4>자주 전송하는 내용이 있나요?</h4>
                            <p>템플릿으로 메시지 내용을 <span>저장하여 간편하게 전송하세요.</span></p>
                        </div>
                        <div class="info_img">
                            <img src="/img/images/main7.png" alt="main7">
                        </div>
                    </div>
                    <div class="sec__main-top-info">
                        <div class="info_subtit">
                            <h4>크레딧 구매 시 보너스 크레딧 증정</h4>
                            <p>크레딧 상품을 구매하면 상품 별<span> 보너스 크레딧을 증정합니다 </span></p>
                        </div>
                        <div class="info_img">
                            <img src="/img/images/main8.png" alt="main8">
                        </div>
                    </div>
                </div>
                <div class="sec__main-btm">
                    <div class="sec__main-btm-info">
                        <div class="info_subtit">
                            <h4>크레딧 구매 시 보너스 크레딧 증정</h4>
                            <p>크레딧 상품을 구매하면 상품 별<span> 보너스 크레딧을 증정합니다 </span></p>
                        </div>
                        <div class="info_img">
                            <img src="/img/images/main9.png" alt="main9">
                        </div>
                    </div>
                    <div class="sec__main-btm-info">
                        <div class="info_subtit">
                            <h4>누르면 바로 전송완료</h4>
                            <p>누르자마자 수신인에게 <span>바로 전달됩니다 </span></p>
                        </div>
                        <div class="info_img">
                            <img src="/img/images/main10.png" alt="main10">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section sec4">
            <div class="sec__top">
                <img src="/img/icon/icon6.png" alt="icon3">
                <h3>정확도와 다양함은 물론<br> 신뢰할 수 있는 보안까지</h3>
                <small>고객님들의 간편함을 고민하였습니다</small>
            </div>
            <div class="sec__main">
                <div class="sec__main-info">
                    <div class="info_subtit">
                        <h4>일반 SMS는 기본, 카카오톡까지</h4>
                        <p>종류와 상관없이 모두 전송해 드립니다</p>
                    </div>
                    <div class="info_img">
                        <img src="/img/images/main11.png" alt="main11">
                    </div>
                </div>
                <div class="sec__main-info">
                    <div class="info_subtit">
                        <h4>강력한 보안을 제공합니다.</h4>
                        <p>신뢰할 수 있는 최신의 보안 시스템을 <span>적용하여 개인정보를 보호합니다 </span></p>
                    </div>
                    <div class="info_img">
                        <img src="/img/images/main12.png" alt="main12">
                    </div>
                </div>
                <div class="sec__main-info">
                    <div class="info_subtit">
                        <h4>놀라운 수신율을 경험해 보세요</h4>
                        <p>샌드고의 정확한 수신율은 99.8%에 달합니다</p>
                    </div>
                    <div class="info_img">
                        <img src="/img/images/main13.png" alt="main13">
                    </div>
                </div>
            </div>
        </div>

        <div class="section sec5">
            <h2>비지니스 광고의 시작, <br>
                이제 샌드고와 함께 하세요.</h2>
            <button class="sec__btn"><a href="{{ url('/message') }}">메세지 바로가기</a></button>

        </div>
    </div>
@endsection
