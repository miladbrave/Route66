@extends('back.layout')

@section('content')
    <div class="row">
        <div class="column col-lg-12 col-md-12">
            <div class="comments-tab">
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
                <h2>برند ها</h2>
                <hr>
                <div>
                    <div class="inner-container">
                        <div class="property-submit-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="{{route('brand.store')}}" method="post">
                                        @csrf
                                        <div class="form-group col-lg-8 col-md-8 col-sm-12">
                                            <label>نام برند</label>
                                            <input type="text" name="brand" placeholder="نام">
                                            <small class="text-danger">لطفا نام برند را به انگلیسی وارد کنید.</small>
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-success btn-sm col-md-1">ثبت</button>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <table class="table table-sm">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th class="text-center">عنوان</th>
                                            <th class="text-center">تنظیمات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($brands as $brand)
                                            <tr>
                                                <td class="text-center">{{$brand->title}}</td>
                                                <td class="text-center">
                                                    <form method="post"
                                                          action="{{route('brand.destroy',$brand->id)}}"
                                                          style="display: inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-default btn-rounded btn-sm"
                                                                type="submit"> حذف
                                                        </button>
                                                    </form>
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
