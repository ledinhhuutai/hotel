@extends('admin.layouts.master')
@section('content')
	<div class="m-content">
        <div class="row">
            <div class="col-xl-8 mx-auto">
                <div class="m-portlet">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Thêm người dùng
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div class="m-section">
                            <div class="m-section__content">
                                <form method="post" action="{{ route('admin.users.store') }}">
                                    @csrf
                                    <div class="form-group m-form__group m--margin-top-10">
                                        <div class="alert alert-danger m-alert m-alert--default" role="alert">
                                            Những field có dấu * bắt buộc phải điền
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group">
                                        <label>Họ và tên <b class="text-danger">*</b></label>
                                        <input type="text" class="form-control m-input" name="full_name"
                                               value="{{ old('full_name') }}">
                                        @if ($errors->has('full_name'))
                                            <b class="text-danger">{{ $errors->first('full_name') }}</b>
                                        @endif
                                    </div>
                                    <div class="form-group m-form__group">
                                        <label>Email <b class="text-danger">*</b></label>
                                        <input type="text" class="form-control m-input" name="email"
                                               value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <b class="text-danger">{{ $errors->first('email') }}</b>
                                        @endif
                                    </div>
                                    <div class="form-group m-form__group">
                                        <label>Mật khẩu <b class="text-danger">*</b></label>
                                        <input type="password" class="form-control m-input" name="password">
                                        @if ($errors->has('password'))
                                            <b class="text-danger">{{ $errors->first('password') }}</b>
                                        @endif
                                    </div>
                                    <div class="form-group m-form__group">
                                        <label>Xác nhận mật khẩu <b class="text-danger">*</b></label>
                                        <input type="password" id="password_confirmation" class="form-control m-input" name="password_confirmation">
                                        @if ($errors->has('password_confirmation'))
                                            <b class="text-danger">{{ $errors->first('password_confirmation') }}</b>
                                        @endif
                                    </div>
                                    <div class="form-group m-form__group">
                                        <label>Vai trò <b class="text-danger">*</b></label>
                                        <select class="form-control" name="role_id" id="role_id">
                                            @foreach ($roles as $role)
                                                <option></option>
                                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('role_id'))
                                            <b class="text-danger">{{ $errors->first('role_id') }}</b>
                                        @endif
                                    </div>
                                    <div class="form-group m-form__group">
                                        <label>Điện thoại <b class="text-danger">*</b></label>
                                        <input type="text" class="form-control m-input" name="phone"
                                               value="{{ old('phone') }}">
                                        @if ($errors->has('phone'))
                                            <b class="text-danger">{{ $errors->first('phone') }}</b>
                                        @endif
                                    </div>
                                    <div class="form-group m-form__group">
                                        <label>Địa chỉ</label>
                                        <input type="text" class="form-control m-input" name="address"
                                               value="{{ old('address') }}">
                                        @if ($errors->has('address'))
                                            <b class="text-danger">{{ $errors->first('address') }}</b>
                                        @endif
                                    </div>
                                    <div class="form-group m-form__group">
                                        <button class="btn btn-primary">Thêm</button>
                                        <a class="btn btn-danger" href="{{ route('admin.users.index') }}">Quay lại</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $("#role_id").select2({placeholder: "Chọn vai trò"});
        });
    </script>
@endsection
