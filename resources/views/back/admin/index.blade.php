@extends('back.layout')

@section('content')
    <div class="row">
        <div class="column col-lg-12 col-md-12">
            <div class="comments-tab">
                <h2>ادمین ها</h2>
                <div class="tab-buttons">
                    <a href="{{route('admin.create')}}" class="btn btn-info mt-3">ثبت ادمین جدید</a>
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
                            <th class="text-center">نام و نام خانوادگی</th>
                            <th class="text-center">ایمیل</th>
                            <th class="text-center">وضعیت</th>
                            <th class="text-center">ابزار</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($admins as $admin)
                            <tr>
                                <th class="text-center">{{$admin->name}}</th>
                                <th class="text-center">{{$admin->email}}</th>
                                <th class="text-center">{{$admin->admin}}</th>
                                <td class="text-center">
                                    <form method="post"
                                          action="{{route('admin.destroy',[$admin->id])}}"
                                          style="display: inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-rounded btn-sm"
                                                type="submit"> حذف
                                        </button>
                                    </form>
                                    <a href="{{route('admin.edit',[$admin->id])}}">
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
