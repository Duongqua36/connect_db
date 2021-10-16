@extends('layout.default')
{{-- Content --}}
@section('content')
    <body>

    <div class="row">
        <?php
        if (isset($item)) {
            $a = route('items.update', $item);
        } else
            $a = route('items.store');
        ?>
        <form class="col-lg-9" method="post" action="{{$a}}" id="form-add">
            @if(isset($item))
                @method('PUT')
            @endif
            @csrf
{{--            <div>--}}
{{--                <label class="form-label">Title</label>--}}
{{--                <input type="text" class="form-control" onkeyup="ChangeToSlug()" name="title" id="title"--}}
{{--                       value="{{$item->Title??''}}">--}}
{{--            </div>--}}
{{--            <input type="text" name="slug" id="slug" value="{{$item->slug??''}}">--}}
{{--            <div>--}}
{{--                <label class="form-label">module</label>--}}
{{--                <input type="text" class="form-control" name="module" id="module" value="{{$item->module??''}}">--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <label class="form-label">status</label>--}}
{{--                <input type="text" class="form-control" name="status" id="status" value="{{$item->status??''}}">--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <label for="content" class="form-label">Content</label>--}}
{{--                <textarea type="text" class="ckeditor" name="content" id="content-edit">{!! $item->content??'' !!}--}}
{{--                </textarea>--}}
{{--            </div>--}}

            <div class="mt-2">
                <img src="https://buildercorp.id/assets/document/preview.jpg" id="finder" width="40" height="40">
                <input type="text" id="update_image" name="image">
                <button type="button" onclick="selectFileWithCKFinder('finder')">chọn</button>
                <button type="button" onclick="deleteImage()">xóa</button>

                <script>
                    function deleteImage() {
                        document.getElementById('finder').src = "https://buildercorp.id/assets/document/preview.jpg";
                        document.getElementById('update_image').value = '';
                    }

                    let button1 = document.getElementById( 'finder' );

                    button1.onclick = function() {
                        selectFileWithCKFinder( 'finder' );
                    };
                    function selectFileWithCKFinder(elementId) {
                        CKFinder.modal({
                            chooseFiles: true,
                            width: 800,
                            height: 600,
                            onInit: function (finder) {
                                finder.on('files:choose', function (evt) {
                                    let file = evt.data.files.first();
                                    document.getElementById(elementId).src = file.getUrl();
                                    document.getElementById('update_image').value = file.getUrl();
                                });
                                finder.on('file:choose:resizedImage', function (evt) {
                                    let output = document.getElementById(elementId);
                                    output.value = evt.data.resizedUrl;
                                });
                            }
                        });
                    }

                    // var button1 = document.getElementById( 'finder' );
                    // button1.onclick = function() {
                    //     selectFileWithCKFinder( 'finder' );
                    // };
                    //
                    // function selectFileWithCKFinder(elementId) {
                    //     CKFinder.modal({
                    //         chooseFiles: true,
                    //         width: 800,
                    //         height: 600,
                    //         onInit: function (finder) {
                    //             finder.on('files:choose', function (evt) {
                    //                 let file = evt.data.files.first();
                    //                 document.getElementById(elementId).src = file.getUrl();
                    //                 document.getElementById('update_image').value = file.getUrl();
                    //             });
                    //             finder.on('file:choose:resizedImage', function (evt) {
                    //                 let output = document.getElementById(elementId);
                    //                 output.value = evt.data.resizedUrl;
                    //             });
                    //         }
                    //     });
                    // }
                </script>
            </div>
            <div class="mt-2">
                <button type="submit" class="btn btn-primary " id="add-product">submit</button>
            </div>
        </form>
        <div class="col-lg-3">
            <div class="col-6">
                <label for="price" class="form-label">Ngày tạo</label>
            </div>
        </div>
    </div>
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"--}}
{{--            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"--}}
{{--            crossorigin="anonymous"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"--}}
{{--            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"--}}
{{--            crossorigin="anonymous"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"--}}
{{--            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"--}}
{{--            crossorigin="anonymous"></script>--}}
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
    </body>

    <script type="text/javascript">
        CKEDITOR.replace('content-edit', {
            filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
            filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
        });
    </script>

    <script>
        function ChangeToSlug() {
            var title, slug;

            //Lấy text từ thẻ input title
            title = document.getElementById("title").value;

            //Đổi chữ hoa thành chữ thường
            slug = title.toLowerCase();

            //Đổi ký tự có dấu thành không dấu
            slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
            slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
            slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
            slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
            slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
            slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
            slug = slug.replace(/đ/gi, 'd');
            //Xóa các ký tự đặt biệt
            slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
            //Đổi khoảng trắng thành ký tự gạch ngang
            slug = slug.replace(/ /gi, "-");
            //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
            //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
            slug = slug.replace(/\-\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-/gi, '-');
            slug = slug.replace(/\-\-/gi, '-');
            //Xóa các ký tự gạch ngang ở đầu và cuối
            slug = '@' + slug + '@';
            slug = slug.replace(/\@\-|\-\@|\@/gi, '');
            //In slug ra textbox có id “slug”
            document.getElementById('slug').value = slug;
        }
    </script>
@endsection

