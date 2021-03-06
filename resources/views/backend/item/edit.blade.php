
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
            <div>
                <label class="form-label">Title</label>
                <input type="text" class="form-control" onkeyup="ChangeToSlug()" name="title" id="title"
                       value="{{$item->title??''}}">
            </div>
                <input type="text" name="slug" id="slug" value="{{$item->slug??''}}">
            <div>
                <label class="form-label">group_id</label>
                <select type="number" class="form-control" name="group_id" id="group_id" required>
                @foreach($groups as $group)
                    @if(isset($item))
                            <option value="{{$group->id}}"  @if($item->groups[0]->id == $group->id )selected @endif>{{$group->title}}</option>
                        @else
                            <option value="{{$group->id}}">{{$group->title}}</option>
                        @endif
                @endforeach
                </select>
            </div>
            <div>
                <label class="form-label">status</label>
                <input type="text" class="form-control" name="status" id="status" value="{{$item->status??''}}">
            </div>
            <div>
                <label for="content" class="form-label">Content</label>
                <textarea type="text" class="ckeditor" name="content" id="content-edit">{!! $item->content??'' !!}
                </textarea>
            </div>
            <div class="mt-2">
                <img src="https://buildercorp.id/assets/document/preview.jpg" id="finder" width="40" height="40">
                <input type="text" id="update_image" name="image">
                <button type="button" onclick="selectFileWithCKFinder('finder')">ch???n</button>
                <button type="button" onclick="deleteImage()">x??a</button>

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
        <div class="col-lg-3">
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

            //L???y text t??? th??? input title
            title = document.getElementById("title").value;

            //?????i ch??? hoa th??nh ch??? th?????ng
            slug = title.toLowerCase();

            //?????i k?? t??? c?? d???u th??nh kh??ng d???u
            slug = slug.replace(/??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'a');
            slug = slug.replace(/??|??|???|???|???|??|???|???|???|???|???/gi, 'e');
            slug = slug.replace(/i|??|??|???|??|???/gi, 'i');
            slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'o');
            slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???/gi, 'u');
            slug = slug.replace(/??|???|???|???|???/gi, 'y');
            slug = slug.replace(/??/gi, 'd');
            //X??a c??c k?? t??? ?????t bi???t
            slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
            //?????i kho???ng tr???ng th??nh k?? t??? g???ch ngang
            slug = slug.replace(/ /gi, "-");
            //?????i nhi???u k?? t??? g???ch ngang li??n ti???p th??nh 1 k?? t??? g???ch ngang
            //Ph??ng tr?????ng h???p ng?????i nh???p v??o qu?? nhi???u k?? t??? tr???ng
            slug = slug.replace(/\-\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-/gi, '-');
            slug = slug.replace(/\-\-/gi, '-');
            //X??a c??c k?? t??? g???ch ngang ??? ?????u v?? cu???i
            slug = '@' + slug + '@';
            slug = slug.replace(/\@\-|\-\@|\@/gi, '');
            //In slug ra textbox c?? id ???slug???
            document.getElementById('slug').value = slug;
        }
    </script>
@endsection

