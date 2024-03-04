<template>
    <h3 class="message_tit">메세지 전송</h3>

    <div class="message_small">
        <span
            >간편하게 한 화면에서 단문, 장문 포토메세지를 발송할 수
            있습니다.</span
        >
        <span
            >90byte 초과 시 장문문자로 자동 전환되며, 최대 2,000byte까지 작성이
            가능합니다.</span
        >
    </div>

    <hr />
    <form
        @submit.prevent="submitForm"
        method="post"
        enctype="multipart/form-data"
    >
        <div class="message_main">
            <div class="main_left">
                <!-- {{-- 수신자 번호 --}} -->
                <div class="main_left-recivenum">
                    <h4 class="main_left-tit">수신번호</h4>

                    <div class="main_left-phone input-group mb-3">
                        <input
                            type="text"
                            class="form-control"
                            placeholder="휴대폰번호 (숫자만 입력)"
                            onfocus="this.placeholder=''"
                            onblur="this.placeholder='휴대폰번호 (숫자만 입력)'"
                            aria-label="휴대폰번호 (숫자만 입력)"
                            aria-describedby="button-addon2"
                        />
                        <button
                            class="btn btn-outline-secondary"
                            type="button"
                            id="button-addon2"
                        >
                            + 추가
                        </button>
                    </div>

                    <div class="main_left-phonelist mb-3">
                        <textarea
                            class="form-control msg_recivenum"
                            id="message_area"
                            name="msg_recivenum"
                            v-model="formData.msg_recivenum"
                            placeholder="번호를 입력하거나 후 엔터 혹은 추가하기를 클릭해 주세요. &#13;&#10;최대 1만 건까지 붙여넣기 가능합니다."
                            onfocus="this.placeholder=''"
                            onblur="this.placeholder='번호를 입력하거나 후 엔터 혹은 추가하기를 클릭해 주세요. &#13;&#10;최대 1만 건까지 붙여넣기 가능합니다.'"
                        ></textarea>
                        <div class="phonelist_total">
                            <div class="phonelist_total_num">
                                총 <span>0</span>명
                            </div>
                            <button class="phonelist_total_del">
                                모두 삭제
                            </button>
                        </div>
                    </div>

                    <div class="btn_wrap">
                        <button disabled>주소록 불러오기</button>
                        <button disabled>파일 불러오기</button>
                        <button disabled>최근 전송내역</button>
                    </div>
                </div>
                <hr />
                <!-- {{-- 발신자번호 --}} -->
                <div class="main_left-sendnum">
                    <h4 class="main_left-tit">발신번호</h4>

                    <select
                        class="form-select form-select-lg mb-3 msg_sendnum"
                        aria-label="Large select example"
                        name="msg_sendnum"
                        v-model="formData.msg_sendnum"
                    >
                        <option value="" selected>전송할 발신번호 선택</option>
                        <option value="1">0510000000</option>
                        <option value="2">01012345678</option>
                    </select>
                </div>
                <hr />
                <!-- {{-- 메세지타이틀 --}} -->
                <div class="main_left-typing">
                    <h4 class="main_left-tit">메세지 입력</h4>

                    <div class="typing_content">
                        <input
                            type="text"
                            class="form-control msg_title"
                            name="msg_title"
                            v-model="formData.msg_title"
                            placeholder="제목을 입력해주세요. (단문 SMS는 제외, 최대 30byte)"
                            onfocus="this.placeholder=''"
                            onblur="this.placeholder='제목을 입력해주세요. (단문 SMS는 제외, 최대 30byte)'"
                        />

                        <div class="msg_midcon">
                            <div class="midcon_status">
                                <span>단문 SMS</span>
                            </div>
                            <div class="midcon_byte">
                                <span>0</span>
                                &nbsp;/&nbsp;
                                <span>90</span>
                                byte
                            </div>
                            <button class="midcon_reset"></button>
                        </div>
                        <!-- {{-- 메세지내용 --}} -->
                        <div class="msg_textarea">
                            <textarea
                                class="form-control msg_text"
                                id="message_area"
                                name="msg_text"
                                v-model="formData.msg_text"
                                placeholder="내용을 입력해 주세요. 90byte초과 시 장문 문자로 자동 전환되며, &#13;&#10;이미지 추가 시 문자로 자동 전환 횝니다."
                                onfocus="this.placeholder=''"
                                onblur="this.placeholder='내용을 입력해 주세요. 90byte초과 시 장문 문자로 자동 전환되며, &#13;&#10;이미지 추가 시 문자로 자동 전환 횝니다.'"
                            ></textarea>
                            <div class="msg_option">
                                <button class="option" disabled>
                                    치환코드
                                </button>
                                <button class="option" disabled>템플릿</button>
                                <button class="option" disabled>
                                    문자도구
                                </button>
                            </div>
                        </div>

                        <hr />
                        <div class="msg_addinclude">
                            <h5 class="main_left-tit">
                                광고성 문자(080 수신거부번호 포함)
                            </h5>
                            <div class="form-check form-switch">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    role="switch"
                                    id="flexSwitchCheckDefault"
                                />
                            </div>
                        </div>

                        <hr />
                        <!-- {{-- 이미지 파일 --}} -->
                        <div class="msg_images">
                            <h5 class="main_left-tit">이미지 추가</h5>
                            <div class="msg_img-wrap" id="upload-container">
                                <label
                                    id="custom-upload-button"
                                    for="upload_img"
                                ></label>
                                <input
                                    type="file"
                                    name="images[]"
                                    id="upload_img"
                                    accept=".jpg,.jpeg,.png,.gif"
                                    ref="fileInput"
                                    multiple
                                    @change="handleFileUpload"
                                />

                                <div id="image-preview"></div>
                            </div>

                            <div class="message_small">
                                <span
                                    >이미지는 최대 3장까지 첨부
                                    가능합니다.</span
                                >
                                <span
                                    >이미지 파일 형식은 JPG, PNG, GIF만
                                    가능합니다.</span
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main_right">
                <div class="main_right-text">
                    <span class="material-symbols-outlined">
                        arrow_back_ios </span
                    ><br /><br />

                    {{ msgText }}
                </div>
            </div>
        </div>

        <hr />
        <div class="message_setting">
            <h4 class="main_left-tit">발송 설정</h4>
            <div class="message_setting-check">
                <input
                    type="radio"
                    value="즉시발송"
                    class="btn-check"
                    name="msg_sendoption"
                    v-model="formData.msg_sendoption"
                    id="success-outlined"
                    autocomplete="off"
                />
                <label class="btn btn-outline-now" for="success-outlined"
                    >즉시 발송</label
                >

                <input
                    type="radio"
                    value="예약발송"
                    class="btn-check"
                    name="msg_sendoption"
                    v-model="formData.msg_sendoption"
                    id="danger-outlined"
                    autocomplete="off"
                />
                <label class="btn btn-outline-reverve" for="danger-outlined"
                    >예약발송</label
                >
            </div>
        </div>

        <hr />
        <button type="submit" class="massage_send">발송하기</button>
    </form>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            msg_sendoption: "즉시발송",
            formData: {
                msg_recivenum: "",
                msg_sendnum: "",
                msg_title: "",
                msg_text: "",
                msg_sendoption: "즉시발송",
                images: [], // 이미지 파일들을 저장할 배열 추가
            },
        };
    },
    methods: {
        handleFileUpload(event) {
            //이미지 유료성검사 및 미리보기 함수
            this.validateAndAddFile(event.target);

            //이미지 파일경로 리스트로 변환
            const files = event.target.files;
            for (let i = 0; i < files.length; i++) {
                this.formData.images.push(files[i]);
            }
        },
        submitForm() {
            var recivenum = document.querySelector(".msg_recivenum");
            var sendnum = document.querySelector(".msg_sendnum");
            var title = document.querySelector(".msg_title");
            var text = document.querySelector(".msg_text");

            if (!this.formData.msg_recivenum.trim()) {
                alert("수신번호를 입력해주세요.");
                recivenum.focus();
                return;
            }
            if (!this.formData.msg_sendnum) {
                alert("발신번호를 선택해주세요.");
                sendnum.focus();
                return;
            }
            if (!this.formData.msg_title.trim()) {
                alert("제목을 입력해주세요.");
                title.focus();
                return;
            }
            if (!this.formData.msg_text.trim()) {
                alert("내용을 입력해주세요.");
                text.focus();
                return;
            }

            console.log("Form Data:", this.formData);
            const formData = new FormData();
            formData.append("msg_recivenum", this.formData.msg_recivenum);
            formData.append("msg_sendnum", this.formData.msg_sendnum);
            formData.append("msg_title", this.formData.msg_title);
            formData.append("msg_text", this.formData.msg_text);
            formData.append("msg_sendoption", this.formData.msg_sendoption);
            for (let i = 0; i < this.formData.images.length; i++) {
                formData.append("images[]", this.formData.images[i]);
            }

            axios
                .post("/message", formData, {
                    headers: {
                        "Content-Type": "multipart/form-data",
                    },
                })
                .then((response) => {
                    // 데이터 전송 성공 시 처리
                    alert("데이터가 성공적으로 전송되었습니다.");
                    // input 창 비우기
                    this.formData.msg_recivenum = "";
                    this.formData.msg_sendnum = "";
                    this.formData.msg_title = "";
                    this.formData.msg_text = "";
                    this.formData.msg_sendoption = "";
                    // 추가로 이미지 미리보기도 비워주어야 합니다.
                    var imagePreview = document.getElementById("image-preview");
                    imagePreview.innerHTML = "";

                    window.location.reload();
                })
                .catch((error) => {
                    console.error(error);
                    alert("데이터가 전송에 실패하였습니다.");
                    // 데이터 전송 실패 시 처리
                });
        },
        validateAndAddFile(input) {
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

                if (fileSizeInMB > 5) {
                    // 5MB 이상의 파일 크기 허용하지 않음
                    alert(
                        "각 이미지 파일의 크기는 최대 5MB를 넘을 수 없습니다."
                    );
                    input.value = ""; // 파일 입력 필드 비우기
                    return;
                }
            }

            // 파일이 유효한 경우 미리보기 생성
            imagePreview.innerHTML = ""; // Clear previous previews

            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var reader = new FileReader();

                reader.onload = function (event) {
                    var imageUrl = event.target.result;
                    var previewContainer = document.createElement("div");
                    previewContainer.className = "preview-container";

                    var image = document.createElement("img");
                    image.src = imageUrl;

                    var removeButton = document.createElement("span");
                    removeButton.innerHTML = "&times;";
                    removeButton.className = "remove-button";
                    removeButton.addEventListener("click", function () {
                        previewContainer.remove();
                    });

                    previewContainer.appendChild(image);
                    previewContainer.appendChild(removeButton);
                    imagePreview.appendChild(previewContainer);
                };

                reader.readAsDataURL(file);
            }
        },
    },
    computed: {
        msgText() {
            return this.formData.msg_text; // v-movel 실시간 바인딩
        },
    },
};
</script>
