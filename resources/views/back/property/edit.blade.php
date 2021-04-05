@extends('back.layout')

@section('content')
    <div class="row">
        <div class="column col-lg-12 col-md-12">
            <div class="comments-tab">
                <h2>ویژگی ها</h2>
                <hr>
                <div>
                    <div class="inner-container">
                        <div class="property-submit-form">
                            <form action="{{route('properties.update',[$property->id])}}" method="post">
                                <div class="row">
                                    @csrf
                                    @method('PATCH')
                                    @if($property->language == 'fa')
                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                            <label>عنوان ویژگی (فارسی) </label>
                                            <input type="text" name="fapro" required value="{{$property->title}}">
                                        </div>
                                    @endif
                                    @if($property->language == 'en')
                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                            <label>عنوان ویژگی (Eng) </label>
                                            <input type="text" name="enpro" value="{{$property->title}}" class="text-left">
                                        </div>
                                    @endif
                                    @if($property->language == 'tur')
                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                            <label>عنوان ویژگی (Tur) </label>
                                            <input type="text" name="turpro" value="{{$property->title}}">
                                        </div>
                                    @endif
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label>دسته بندی </label>
                                        <select name="type" class="form-control">
                                            <option @if($property->type == 1) selected @endif value="1">خانه</option>
                                            <option @if($property->type == 2) selected @endif value="2">ماشین</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                    <button type="submit" class="btn btn-success btn-sm col-md-1">ثبت</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
