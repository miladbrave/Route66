@extends('back.layout')

@section('content')
    <div class="row">
        <div class="column col-lg-12 col-md-12">
            <div class="comments-tab">
                <h2>پیام ها</h2>
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
                            <th class="text-center">نام فرستنده</th>
                            <th class="text-center">ایمیل</th>
                            <th class="text-center">شماره تماس</th>
                            <th class="text-center">پیام</th>
                            <th class="text-center">ابزار</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($messages as $message)
                            <tr>
                                <th class="text-center">{{$message->name}}</th>
                                <th class="text-center">{{$message->email}}</th>
                                <th class="text-center">{{$message->phone}}</th>
                                <th class="text-center">{{Str::limit($message->description,50)}}</th>
                                <td class="text-center">
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                            data-target="#exampleModal">
                                        خواندن
                                    </button>
                                    <form method="post"
                                          action="{{route('message.destroy',[$message->id])}}"
                                          style="display: inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-rounded btn-sm"
                                                type="submit"> حذف
                                        </button>
                                    </form>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" data-backdrop="false"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    {{$message->description}}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">بستن
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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
