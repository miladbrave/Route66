@extends('back.layout')

@section('content')
    <div class="row">
        <div class="column col-lg-12 col-md-12">
            <div class="comments-tab">
                <h2>اسلایدر ها</h2>
                <div class="tab-buttons">
                    <a href="{{route('slider.create')}}" class="btn btn-info mt-3">ثبت اسلایدر جدید</a>
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
                            <th class="text-center">شماره اسلایدر</th>
                            <th class="text-center">وضعیت</th>
                            <th class="text-center">ابزار</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sliders as $slider)
                            <tr>
                                <td class="text-center">
                                    @if(isset($slider->photo->path))
                                        <img src="{{$slider->photo->path}}" alt="slider" style="height: 100px">
                                    @endif
                                </td>
                                <th class="text-center">{{$slider->textfa}}</th>
                                <th class="text-center">{{$slider->number}}</th>
                                <th class="text-center">
                                    @if($slider->status == 1)
                                        <span class="badge badge-success p-2">انتشار</span>
                                    @elseif($slider->status == 0)
                                        <span class="badge badge-danger p-2">عدم انتشار</span>
                                    @endif
                                </th>
                                <td class="text-center">
                                    <form method="post"
                                          action="{{route('slider.destroy',[$slider->id])}}"
                                          style="display: inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-rounded btn-sm"
                                                type="submit"> حذف
                                        </button>
                                    </form>
                                    <a href="{{route('slider.edit',[$slider->id])}}">
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
