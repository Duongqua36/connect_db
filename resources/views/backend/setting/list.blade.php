{{-- Extends layout --}}
@extends('layout.default')
{{-- Content --}}
@section('content')

    <form method="post"  id="form-add" action="{{route('settings.update','--')}}">
        @method('PUT')
        @csrf
            <div class="card card-custom" style="width: 100%">
                <div class="card-header">
                    <div class="card-title mt-5">
                        <h3>Cấu hình hệ thống</h3>
                    </div>
                    <button class="btn btn-success mt-3" style="height: 40px; width: 110px" type="submit">
                        <i class="flaticon2-check-mark"></i>Cập nhật
                    </button>
                </div>
                   <div class="card-body">
                       <div class="example-preview mt-5">
                           <ul class="nav nav-tabs" id="myTab" role="tablist">
                               <li class="nav-item">
                                   <a class="nav-link active" id="home-tab" data-toggle="tab" href="#">
																	<span class="nav-icon">
																		<i class="fas fa-cog"></i>
																	</span>
                                       <span class="nav-text">Thông tin</span>
                                   </a>
                               </li>
                               <li class="nav-item">
                                   <a class="nav-link" id="profile-tab" data-toggle="tab" href="#" aria-controls="profile">
																	<span class="nav-icon">
																		<i class="fas fa-envelope-open-text"></i>
																	</span>
                                       <span class="nav-text">Email</span>
                                   </a>
                               </li>
                               <li class="nav-item">
                                   <a class="nav-link" id="contact-tab" data-toggle="tab" href="#" aria-controls="contact">
																	<span class="nav-icon">
																		<i class="flaticon2-rocket-1"></i>
																	</span>
                                       <span class="nav-text">Mã nhúng script</span>
                                   </a>
                               </li>
                           </ul>
                       </div>

                        @foreach($settings as $item)
                            <div class="form-group">
                                <label class="form-label" style="text-transform: uppercase">{{$item->name}}</label>
                                <input type="text" class="form-control"  name="{{$item->name}}" placeholder="{{$item->name}}" value="{{$item->val}}">
                            </div>
                        @endforeach
                   </div>
                   </div>
    </form>
        @endsection


        {{-- Styles Section --}}
        @section('styles')
            <link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
                  type="text/css"/>
        @endsection

        {{-- Scripts Section --}}
        @section('scripts')
            {{-- vendors --}}
            <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>
            {{-- page scripts --}}
            <script src="{{ asset('js/pages/crud/datatables/basic/basic.js') }}" type="text/javascript"></script>
            <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
@endsection

