{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
    <p>{{__('Tất cả bài viết')}}</p>
    <div class="container">
        <form action="{{route('filter.item')}}" method="get">
            <div class="row">
                <div class="col-4">
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><i
                                class="far fa-calendar-check"></i></span>
                        </div>
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="id" placeholder="ID" value="{{$old_data->id??''}}" >
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><i
                                class="far fa-calendar-check"></i></span>
                        </div>
                        <input type="text" name="title" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"
                               placeholder="Title" value="{{$old_data->title??''}}">
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><i
                                class="far fa-calendar-check"></i></span>
                        </div>
                        <select name="#" class="form-control">
                            <option value="">--Group_id--</option>
{{--                            @foreach($groups as $group)--}}
{{--                                @if($group_id == $group->id)--}}
{{--                                    <option value="{{$group->id}}" selected>{{$group->title}}</option>--}}
{{--                                @else--}}
{{--                                    <option value="{{$group->id}}">{{$group->title}}</option>--}}
{{--                                @endif--}}
{{--                            @endforeach--}}
                        </select>
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><i
                                class="far fa-calendar-check"></i></span>
                        </div>
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"
                               placeholder="Từ" >
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><i
                                class="far fa-calendar-check"></i></span>
                        </div>
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"
                               placeholder="Đến" >
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-light" ><i class="fas fa-search"></i> search</button>
            <button type="button" class="btn btn-light"><i class="fas fa-times"></i> reset</button>
        </form>
        <div class="row">
{{--            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">--}}
{{--                <i class="far fa-trash-alt"> xóa đã chọn</i>--}}
{{--            </button>--}}

    <div class="card card-custom mt-3" style="width: 100%">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">HTML Table

                </h3>
            </div>
            <div class="card-toolbar">
                <!--begin::Dropdown-->
                <div class="dropdown dropdown-inline mr-2">
                    <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="svg-icon svg-icon-md">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3"/>
                                <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000"/>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>Export
                    </button>
                </div>
                <!--end::Dropdown-->
                <!--begin::Button-->
                <a href="{{ route('items.create')}}" class="btn btn-primary font-weight-bolder">
                <span>
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"/>
                            <circle fill="#000000" cx="9" cy="15" r="6"/>
                            <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"/>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>New Record</a>
                <!--end::Button-->

            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover" >
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tiêu đề</th>
                    <th>Danh mục</th>
                    <th>Trạng thái</th>
                    <th>Ảnh</th>
                    <th>Thời gian</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody id="listItem">
          @foreach($items as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->title}}</td>
                    <td>
                        @if($item->groups[0])
                            <span class="label label-success label-inline font-weight-light mr-2" style="display: inherit">{{$item->groups[0]->title}}</span>
                        @else
                            <span class="label label-success label-inline font-weight-light mr-2" >không có</span>
                        @endif
                    </td>
                    <td >
                        @if($item->status == '1' )
                            <span class="label label-success label-inline font-weight-light mr-2">Hoạt động</span>
                            @else
                            <span class="label label-dark label-inline font-weight-light mr-2" style="display: inherit ">Không hoạt động</span>
                            @endif
                    </td>
                    <td><img src="{{$item->image}}" height="50" width="50" ></td>
                    <td>{{$item->created_at}}</td>
                    <td>
                        <a href="{{route('items.edit',$item->id)}}" class="btn btn-hover-white " style="width: 48px"><i class="fas fa-pen"></i></a>
                        <form action="{{route('items.destroy',$item)}}" method="post" class="mt-2">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-hover-white "><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
          @endforeach
                </tbody>
            </table>
        </div>
    </div>
        </div>
@endsection

{{-- Styles Section --}}
@section('styles')
    <link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
@endsection

{{-- Scripts Section --}}
@section('scripts')
    {{-- vendors --}}
    <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>
    {{-- page scripts --}}
    <script src="{{ asset('js/pages/crud/datatables/basic/basic.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

@endsection
