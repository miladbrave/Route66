@extends('back.layout')

@section('content')
    <div class="row">
        <div class="column col-lg-12 col-md-12">
            <div class="comments-tab">
                <h2>مقاله ها</h2>
                <div class="tab-buttons">
                    <a href="{{route('blog.create')}}" class="btn btn-info mt-3">ثبت مقاله جدید</a>
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
                            <th class="text-center">وضعیت</th>
                            <th class="text-center">ابزار</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <td class="text-center">
                                    @if(isset($blog->photo->path))
                                        <img src="{{$blog->photo->path}}" alt="slider" style="height: 100px">
                                    @endif
                                </td>
                                <th class="text-center">{{$blog->titlefa}}</th>
                                <th class="text-center">
                                    @if($blog->status == 1)
                                        <span class="badge badge-success p-2">انتشار</span>
                                    @elseif($blog->status == 0)
                                        <span class="badge badge-danger p-2">عدم انتشار</span>
                                    @endif
                                </th>
                                <td class="text-center">
                                    <form method="post"
                                          action="{{route('blog.destroy',$blog->id)}}"
                                          style="display: inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-rounded btn-sm"
                                                type="submit"> حذف
                                        </button>
                                    </form>
                                    <a href="{{route('blog.edit',[$blog->id])}}">
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
