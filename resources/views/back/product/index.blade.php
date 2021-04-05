@extends('back.layout')

@section('content')
    <div class="row">
        <div class="column col-lg-12 col-md-12">
            <div class="comments-tab">
                <h2>لیست املاک</h2>
                <div class="tab-buttons">
                    <a href="{{route('home.create')}}" class="btn btn-info mt-3">ثبت ملک جدید</a>
                </div>
                <hr>
                @foreach($products as $product)
                    <div class="property-block">
                        <div class="inner-box clearfix">
                            <div class="image-box">
                                <figure class="image">
                                    @if(isset($product->photos->first()->path))
                                    <img src="{{$product->photos->first()->path}}" alt=""
                                                           style="height: 150px">
                                        @endif
                                </figure>
                            </div>
                            <div class="content-box">
                                <h3>{{$product->title}}</h3>
                                <ul class="property-info clearfix">
                                    <li><i class="flaticon-dimension"></i> {{$product->productcompletes[0]->meter}}مساحت
                                    </li>
                                    <li><i class="flaticon-bed"></i>{{$product->productcompletes[0]->room}} اتاق خواب
                                    </li>
                                    <li><i class="flaticon-floor"></i>طبقه {{$product->productcompletes[0]->floor}}</li>
                                    <li><i class="flaticon-bathtub"></i>{{$product->productcompletes[0]->bath}} حمام
                                    </li>
                                    <li><i class="la la-eur"></i>{{number_format($product->price)}}</li>
                                    <li>
                                        <i class="la la-calendar"></i>{{Verta::instance($product->created_at)->format('%B %d، %Y')}}
                                    </li>
                                    <li><i class="la la-user"></i>
                                        @if(isset($product->cosult_id))
                                            <span
                                                class="badge badge-success"> {{\App\Cosult::whereId($product->cosult_id)->first()->faname}} </span>
                                        @else
                                            <span class="badge badge-danger">بدون مشاور</span>
                                        @endif
                                    </li>
                                </ul>
                                <div class="location"><i class="la la-map-marker"></i>{{$product->address}}</div>
                            </div>
                            <div class="option-box clearfix">
                                <ul class="action-list">
                                    <li><a href="{{route('home.edit',$product->id)}}"><i class="la la-edit"></i> ویرایش</a>
                                    </li>
                                    <li><a href="{{route('home.show',$product->id)}}"><i class="la la-eye-slash"></i>
                                            @if($product->status == 0)
                                                نمایش
                                            @else
                                                مخفی
                                            @endif
                                        </a></li>
                                    <li>
                                        <form method="post"
                                              action="{{route('home.destroy',[$product->id])}}"
                                              style="display: inline">
                                            @csrf
                                            @method('delete')
                                            <button class="la la-trash-o"
                                                    type="submit"> حذف
                                            </button>
                                        </form>
                                    </li>
                                    <li>
                                        @if($product->status == 1)
                                            <span class="p-1 badge-success"> انتشار</span>
                                        @elseif($product->status == 0)
                                            <span class="p-1 badge-danger"> عدم انتشار</span>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
