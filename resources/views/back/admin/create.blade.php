@extends('back.layout')
@section('content')
    <div class="row">
        <div class="column col-lg-12 col-md-12">
            <div class="comments-tab">
                <h2>ثبت ادمین جدید</h2>
                <hr>
                <div class="row">
                    <div class="column col-lg-12 col-md-12">
                        <div class="inner-container">
                            <div class="property-submit-form">
                                <form method="post" action="{{route('admin.store')}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="text"> نام و نام خانوادگی <span class="text-danger">*</span></label>
                                            <input type="text" name="name" required value="{{old('name')}}"
                                                   class="form-control @error('name') is-invalid @enderror" id="text">
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="text">ایمیل <span class="text-danger">*</span></label>
                                            <input type="email" name="email" required value="{{old('email')}}"
                                                   class="form-control @error('email') is-invalid @enderror" id="text">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="text">رمزعبور <span class="text-danger">*</span></label>
                                            <input type="password" name="password" required value="{{old('password')}}"
                                                   class="form-control @error('password') is-invalid @enderror"
                                                   id="text">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="text">تکرار رمز عبور <span class="text-danger">*</span></label>
                                            <input type="password" name="password_confirmation" required value="{{old('password_confirmation')}}"
                                                   class="form-control  @error('password_confirmation') is-invalid @enderror"
                                                   id="text">
                                            @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <button type="submit" class="theme-btn btn-style-one"
                                                onclick="productGallery()"><span
                                                class="btn-title">ارسال</span></button>
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
