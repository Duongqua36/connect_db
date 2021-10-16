@extends('layout.default')
{{-- Content --}}
@section('content')
    <body>
    <div class="row">
        <?php
        if (isset($group)) {
            $a = route('groups.update', $group);
        } else
            $a = route('groups.store');
        ?>
        <form class="col-lg-9" method="post" action="{{$a}}" id="form-add">
            @if(isset($group))
                @method('PUT')
            @endif
            @csrf
            <div>
                <label class="form-label">Title</label>
                <input type="text" class="form-control"  name="title" id="title" value="{{$group->title??''}}">
            </div>
                <div class="mt-2">
                    <button type="submit" class="btn btn-primary " id="add-product">submit</button>
                </div>
        </form>
    </div>
    </body>
@endsection
