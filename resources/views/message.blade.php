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

        {{-- vue 컴포넌트 삽입 --}}
        <message-tabs></message-tabs>


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
