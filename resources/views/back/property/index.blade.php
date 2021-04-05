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
                            <form action="{{route('properties.store')}}" method="post">
                                <div class="row">
                                    @csrf
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label>عنوان ویژگی (فارسی) </label>
                                        <input type="text" name="fapro" placeholder="عنوان">
                                    </div>
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label>عنوان ویژگی (Eng) </label>
                                        <input type="text" name="enpro" placeholder="title" style="direction: ltr">
                                    </div>
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label>عنوان ویژگی (Tur) </label>
                                        <input type="text" name="turpro" placeholder="ünvan" style="direction: ltr">
                                    </div>
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label>دسته بندی </label>
                                       <select name="type" class="form-control">
                                           <option value="1">خانه</option>
                                           <option value="2">ماشین</option>
                                       </select>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-sm col-md-1">ثبت</button>
                                </div>
                            </form>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <table class="table table-sm">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th class="text-center">عنوان</th>
                                            <th class="text-center">دسته بندی</th>
                                            <th class="text-center">تنظیمات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($properties->where('language','fa') as $property)
                                            <tr>
                                                <td class="text-center">{{$property->title}}</td>
                                                <td class="text-center">
                                                    @if($property->type == 1) <span>خانه</span> @endif
                                                    @if($property->type == 2) <span>خودرو</span> @endif
                                                </td>
                                                <td class="text-center">
                                                    <form method="post"
                                                          action="{{route('properties.destroy',['id',$property->id])}}"
                                                          style="display: inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-default btn-rounded btn-sm"
                                                                type="submit"> حذف
                                                        </button>
                                                    </form>
                                                    <a href="{{route('properties.edit',[$property->id])}}">
                                                        <button class="btn btn-default btn-rounded btn-sm"
                                                                type="button" data-toggle="modal" data-target="#exampleModal"> ویرایش
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <div class="col-md-4">
                                    <table class="table table-sm">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th class="text-center">عنوان</th>
                                            <th class="text-center">دسته بندی</th>
                                            <th class="text-center">تنظیمات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($properties->where('language','en') as $property)
                                            <tr>
                                                <td class="text-center">{{$property->title}}</td>
                                                <td class="text-center">
                                                    @if($property->type == 1) <span>خانه</span> @endif
                                                    @if($property->type == 2) <span>خودرو</span> @endif
                                                </td>
                                                <td class="text-center">
                                                    <form method="post"
                                                          action="{{route('properties.destroy',['id',$property->id])}}"
                                                          style="display: inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-default btn-rounded btn-sm"
                                                                type="submit"> حذف
                                                        </button>
                                                    </form>
                                                    <a href="{{route('properties.edit',[$property->id])}}">
                                                        <button class="btn btn-default btn-rounded btn-sm"
                                                                type="button"> ویرایش
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-4">
                                    <table class="table table-sm">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th class="text-center">عنوان</th>
                                            <th class="text-center">دسته بندی</th>
                                            <th class="text-center">تنظیمات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($properties->where('language','tur') as $property)
                                            <tr>
                                                <td class="text-center">{{$property->title}}</td>
                                                <td class="text-center">
                                                    @if($property->type == 1) <span>خانه</span> @endif
                                                    @if($property->type == 2) <span>خودرو</span> @endif
                                                </td>
                                                <td class="text-center">
                                                    <form method="post"
                                                          action="{{route('properties.destroy',['id',$property->id])}}"
                                                          style="display: inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-default btn-rounded btn-sm"
                                                                type="submit"> حذف
                                                        </button>
                                                    </form>
                                                    <a href="{{route('properties.edit',[$property->id])}}">
                                                        <button class="btn btn-default btn-rounded btn-sm"
                                                                type="button"> ویرایش
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
