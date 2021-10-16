@extends('layout.default')
@section('content')
    <body>
    <div class="row">
        <?php
        if (isset($item)) {
            $a = route('groups.update', $item);
        } else
            $a = route('groups.store');
        ?>
        <form class="col-lg-9" method="post" action="{{$a}}" id="form-add">
            @if(isset($item))
                @method('PUT')
            @endif
            @csrf
            <div>
                <label class="form-label">Tiêu đề</label>
                <input type="text" class="form-control"  name="title" id="title" value="{{$item->title??''}}">
            </div>
                <div>
                    <label class="form-label">Danh mục</label>
                    <input type="text" class="form-control" name="module" value="{{$item->module??''}}">
                </div>
                <div>
                    <label class="form-label">Trạng thái</label>
                    <input type="text" class="form-control"  name="title" id="title" value="{{$item->status??''}}">
                </div>
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


                    </script>
                </div>
            <div class="mt-2">
                <button type="submit" class="btn btn-primary " id="add-product">submit</button>
            </div>
        </form>
    </div>
    </body>
@endsection
