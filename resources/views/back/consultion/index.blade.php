@extends('back.layout')

@section('content')
    <div class="row">
        <div class="column col-lg-12 col-md-12">
            <div class="comments-tab">
                <h2>لیست مشاورین</h2>
                <div class="tab-buttons">
                    <a href="{{route('consult.create')}}" class="btn btn-info mt-3">ثبت مشاور جدید</a>
                </div>
                <hr>
                @foreach($consults as $consult)
                    <div class="property-block">
                        <div class="inner-box clearfix">
                            <div class="image-box">
                                <figure class="image">
                                    @if(isset($consult->photo->path))
                                        <img src="{{$consult->photo->path}}" alt="" style="height: 150px">
                                    @endif
                                </figure>
                            </div>
                            <div class="content-box">
                                <ul class="property-info clearfix">
                                    <li><i class="flaticon-user"></i> {{$consult->faname}}</li>
                                    <li><i class="flaticon-phone"></i>{{$consult->phone}} </li>
                                    <li><i class="flaticon-email"></i> {{$consult->email}} </li>
                                    <li><i class="la la-instagram"></i>{{$consult->instagram}}  </li>
                                    <li><i class="la la-whatsapp"></i>{{$consult->whatsup}}  </li>
                                    <li><i class="la la-home"></i>{{\App\Product::where('cosult_id',$consult->id)->count()}}  </li>
                                    <li><i class="la la-car"></i>{{\App\Car::where('cosult_id',$consult->id)->count()}}  </li>
                                </ul>
                            </div>
                            <div class="option-box clearfix">
                                <ul class="action-list">
                                    <li><a href="{{route('consult.edit',$consult->id)}}"><i class="la la-edit"></i> ویرایش</a>
                                    </li>
                                    <li>
                                        <form method="post"
                                              action="{{route('consult.destroy',$consult->id)}}"
                                              style="display: inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-outline-danger btn-rounded btn-sm "
                                                    type="submit"><i class="la la-trash-o"></i> حذف
                                            </button>
                                        </form></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
