@extends('back.layout')

@section('content')
    <div class="row">
        <div class="column col-lg-12 col-md-12">
            <div class="comments-tab">
                <h2>خودرو ها</h2>
                <div class="tab-buttons">
                    <a href="{{route('car.create')}}" class="btn btn-info mt-3">ثبت خودرو جدید</a>
                </div>
                <hr>
                @if(session('success'))
                    <div class="alert alert-success">
                        <span>{{session('success')}}</span>
                    </div>
                @endif
                @if(session('danger'))
                    <div class="alert alert-danger">
                        <span>{{session('danger')}}</span>
                    </div>
                @endif
                <div class="row">
                    <table class="table table-sm">
                        <thead class="bg-dark text-danger">
                        <tr>
                            <th class="text-center">تصویر</th>
                            <th class="text-center">عنوان</th>
                            <th class="text-center">برند</th>
                            <th class="text-center">قیمت</th>
                            <th class="text-center">مشاور</th>
                            <th class="text-center">وضعیت</th>
                            <th class="text-center">ابزار</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cars as $car)
                            <tr>
                                <td class="text-center" width="20%">
                                    @if(isset($car->photos->first()->path))
                                        <img src="{{$car->photos->first()->path}}" alt="slider" style="height: 100px;">
                                    @endif
                                </td>
                                <th class="text-center">{{$car->title}}</th>
                                <th class="text-center">{{$car->brand}}</th>
                                <th class="text-center">{{number_format($car->price)}}</th>
                                <th class="text-center">
                                    @if(isset($car->cosult_id))
                                        <span
                                            class="badge badge-success">  {{\App\Cosult::whereId($car->cosult_id)->first()->faname}} </span>
                                    @else
                                        <span class="badge badge-danger">بدون مشاور</span>
                                    @endif
                                </th>
                                <th class="text-center">
                                    @if($car->status == 1)
                                        <span class="badge badge-success p-2">انتشار</span>
                                    @elseif($car->status == 0)
                                        <span class="badge badge-danger p-2">عدم انتشار</span>
                                    @endif
                                </th>
                                <td class="text-center">
                                    <form method="post"
                                          action="{{route('car.destroy',[$car->id])}}"
                                          style="display: inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-rounded btn-sm"
                                                type="submit"> حذف
                                        </button>
                                    </form>
                                    <a href="{{route('car.edit',[$car->id])}}">
                                        <button class="btn btn-warning btn-rounded btn-sm"
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
@endsection
