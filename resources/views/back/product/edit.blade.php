@extends('back.layout')

@section('content')
    <div class="row">
        <div class="column col-lg-12 col-md-12">
            <div class="comments-tab">
                <h2>ویرایش ملک</h2>
                <hr>
                <div class="row">
                    <div class="properties-box">
                        <div class="inner-container">
                            <div class="property-submit-form">
                                <form method="post" action="{{route('home.update',$product->id)}}">
                                    @csrf
                                    @method('PUT')
                                    <div class="title">
                                        <h3>اطلاعات پایه</h3></div>
                                    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab"
                                        role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill"
                                               href="#pills-home" role="tab" aria-controls="pills-home"
                                               aria-selected="true">فارسی</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill"
                                               href="#pills-profile" role="tab" aria-controls="pills-profile"
                                               aria-selected="false">انگلیسی</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill"
                                               href="#pills-contact" role="tab" aria-controls="pills-contact"
                                               aria-selected="false">ترکی</a>
                                        </li>
                                    </ul>
                                    <hr class="bg-danger" width="20%" style="margin-right: 40%">
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                             aria-labelledby="pills-home-tab">
                                            <div class="row">
                                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                    <label>نام ملک (فارسی) <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="faname" value="{{$product->title}}"
                                                           required>
                                                </div>
                                                <div class="form-group col-lg-2 col-md-6 col-sm-12">
                                                    <label>نوع ملک <span class="text-danger">*</span></label>
                                                    <select class="custom-select-box" name="type">
                                                        <option @if($product->type == 0) selected @endif value="0">
                                                            مسکونی
                                                        </option>
                                                        <option @if($product->type == 1) selected @endif value="1">
                                                            تجاری
                                                        </option>
                                                        <option @if($product->type == 2) selected @endif value="2">
                                                            صنعتی
                                                        </option>
                                                        <option @if($product->type == 3) selected @endif value="3">
                                                            آپارتمان
                                                        </option>
                                                        <option @if($product->type == 4) selected @endif value="4">
                                                            مجتمع
                                                        </option>
                                                        <option @if($product->type == 5) selected @endif value="5">
                                                            ویلایی
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-2 col-md-6 col-sm-12">
                                                    <label>کشور <span class="text-danger">*</span></label>
                                                    <input type="text" name="facountry" required
                                                           value="{{$product->country}}">
                                                </div>
                                                <div class="form-group col-lg-2 col-md-6 col-sm-12">
                                                    <label>شهر <span class="text-danger">*</span></label>
                                                    <input type="text" name="facity" required
                                                           value="{{$product->city}}">
                                                </div>
                                                <div class="form-group col-lg-2 col-md-6 col-sm-12">
                                                    <label>منطقه </label>
                                                    <input type="text" name="fazone" value="{{$product->zone}}">
                                                </div>
                                                <div class="form-group col-lg-2 col-md-6 col-sm-12">
                                                    <label>وضعیت ملک</label>
                                                    <select class="custom-select-box" name="sellstatus">
                                                        <option value="">وضعیت ملک</option>
                                                        <option @if($product->sellstatus == 1) selected
                                                                @endif value="1">اجاره
                                                        </option>
                                                        <option @if($product->sellstatus == 2) selected
                                                                @endif value="2">فروش
                                                        </option>
                                                        <option @if($product->sellstatus == 3) selected
                                                                @endif value="3">رهن
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-2 col-md-6 col-sm-12">
                                                    <label>قیمت <span class="text-danger">*</span></label>
                                                    <input type="number" name="price" value="{{$product->price}}">
                                                </div>
                                                <div class="form-group col-lg-8 col-md-6 col-sm-12">
                                                    <label>آدرس </label>
                                                    <input type="text" name="address" value="{{$product->address}}">
                                                </div>
                                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                    <label>توضیحات </label>
                                                    <textarea id="textareaDes" name="des"
                                                              class="editor form-control">{{$product->address}}</textarea>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                             aria-labelledby="pills-profile-tab">
                                            <div class="row">
                                                <div class="form-group col-lg-2 col-md-2 col-sm-12">
                                                    <label class="pull-left">Country <span
                                                            class="text-danger">*</span></label>
                                                    <input class="text-left" type="text" name="encountry" required
                                                           value="{{$product->encountry}}">
                                                </div>
                                                <div class="form-group col-lg-2 col-md-2 col-sm-12">
                                                    <label class="pull-left">City <span
                                                            class="text-danger">*</span></label>
                                                    <input class="text-left" type="text" name="encity" required
                                                           value="{{$product->encity}}">
                                                </div>
                                                <div class="form-group col-lg-2 col-md-2 col-sm-12">
                                                    <label class="pull-left">Zone </label>
                                                    <input class="text-left" type="text" name="enzone"
                                                           value="{{$product->enzone}}">
                                                </div>
                                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                    <label class="pull-left"><span
                                                            class="text-danger">*</span> Title</label>
                                                    <input class="text-left" type="text" name="enname"
                                                           value="{{$product->entitle}}" required>
                                                </div>
                                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                    <label class="pull-left">Address </label>
                                                    <input class="text-left" type="text" name="enaddress"
                                                           value="{{$product->enaddress}}">
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 text-left">
                                                    <div class="form-group">
                                                        <label>Description </label>
                                                        <textarea id="entextareaDes" name="endes"
                                                                  class="editor form-control">{{$product->endescription}} </textarea>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                             aria-labelledby="pills-contact-tab">
                                            <div class="row">
                                                <div class="form-group col-lg-2 col-md-2 col-sm-12">
                                                    <label class="pull-left">ülke <span
                                                            class="text-danger">*</span></label>
                                                    <input class="text-left" type="text" name="turcountry" required
                                                           value="{{$product->turcountry}}">
                                                </div>
                                                <div class="form-group col-lg-2 col-md-2 col-sm-12">
                                                    <label class="pull-left">şehir <span
                                                            class="text-danger">*</span></label>
                                                    <input class="text-left" type="text" name="turcity" required
                                                           value="{{$product->turcity}}">
                                                </div>
                                                <div class="form-group col-lg-2 col-md-2 col-sm-12">
                                                    <label class="pull-left">Bölge </label>
                                                    <input class="text-left" type="text" name="turzone"
                                                           value="{{$product->turzone}}">
                                                </div>
                                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                    <label class="pull-left">ünvan <span
                                                            class="text-danger">*</span></label>
                                                    <input class="text-left" type="text" name="turname"
                                                           value="{{$product->turtitle}}" required>
                                                </div>
                                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                    <label class="pull-left">Adres </label>
                                                    <input class="text-left" type="text" name="turaddress"
                                                           value="{{$product->turaddress}}">
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 text-left">
                                                    <div class="form-group">
                                                        <label>Açıklama </label>
                                                        <textarea id="turtextareaDes" name="turdes"
                                                                  class="editor form-control">{{$product->turdescription}} </textarea>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="title"><h3>اطلاعات تکمیلی</h3></div>
                                    <div class="row">
                                        <div class="form-group col-lg-3 col-md-3 col-sm-12">
                                            <label><span
                                                    class="text-danger">*</span> متراز (متر مربع)</label>
                                            <input type="text" name="meter"
                                                   value="{{$product->productcompletes[0]->meter}}">
                                        </div>
                                        <div class="form-group col-lg-3 col-md-3 col-sm-12">
                                            <label> سال ساخت</label>
                                            <input type="text" name="year"
                                                   value="{{$product->productcompletes[0]->age}}">
                                        </div>
                                        <div class="form-group col-lg-3 col-md-3 col-sm-12">
                                            <label>تعداد اتاق</label>
                                            <input type="text" name="room"
                                                   value="{{$product->productcompletes[0]->room}}">
                                        </div>
                                        <div class="form-group col-lg-3 col-md-3 col-sm-12">
                                            <label>سرویس بهداشتی</label>
                                            <input type="text" name="bath"
                                                   value="{{$product->productcompletes[0]->bath}}">
                                        </div>
                                        <div class="form-group col-lg-3 col-md-3 col-sm-12">
                                            <label>طبقه</label>
                                            <input type="text" name="floor"
                                                   value="{{$product->productcompletes[0]->floor}}">
                                        </div>
                                        <div class="form-group col-lg-3 col-md-3 col-sm-12">
                                            <label>سیستم گرمایش / سرمایشی</label>
                                            <input type="text" name="heating"
                                                   value="{{$product->productcompletes[0]->heating}}">
                                        </div>
                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                            <label>انتخاب مشاور</label>
                                            <select class="custom-select-box" name="consult">
                                                @foreach($consults as $consult)
                                                    <option @if($consult->id == $product->cosult_id) selected @endif value="{{$consult->id}}">{{$consult->faname}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="title"><h3>گالری</h3></div>
                                    <div class="row">
                                        <div class="col-md-8 ">
                                            <div class="form-group">
                                                <label for="photo">تصاویر</label>
                                                <input type="hidden" name="photo_id[]" id="product-photo">
                                                <div id="photo" class="dropzone"></div>
                                            </div>
                                            <div class="row">
                                                @foreach($product->photos as $photo)
                                                    <div class="col-sm-2" id="photo_{{$photo->id}}"
                                                         style="margin:2%;">
                                                        <img class="img-responsive" src="{{asset($photo->path)}}"
                                                             alt="image" style="height: 100px">
                                                        <a href="{{route('photodestroy',$photo->id)}}"
                                                           class="pull-left small btn btn-danger btn-sm"
                                                           type="submit" style="margin-top: 2%">حذف
                                                        </a>

                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="col-md-4 ">
                                            <label>وضعیت نشر(نشر آگهی در سایت)</label>
                                            <div class="clearfix border p-2">
                                                <div class="radio radio-inline radio-replace radio-success">
                                                    <input type="radio" name="status" id="radioInput2"
                                                           @if($product->status == 1) checked
                                                           @endif                                                           value="1">
                                                    <label for="radioInput2">انتشار</label>
                                                </div>
                                                <div class="radio radio-inline radio-replace radio-danger">
                                                    <input type="radio" name="status" id="radioInput2"
                                                           @if($product->status == 0) checked
                                                           @endif                                                           value="2">
                                                    <label for="radioInput2">عدم انتشار</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title"><h3>ویژگی ها (اختیاری)</h3></div>
                                    <div class="row">
{{--                                        @dd($product->productproperty->where('title',3)->first()->title)--}}
                                        <div class="col-md-4">
                                            <label for="pros">سایر ویژگی ها(فارسی):</label>
                                            <select name="selectMultiplefa[]" class="select2 form-control"
                                                    id="pros" multiple>
                                                @foreach($properties->where('language','fa') as $property)
                                                        <option
                                                            @if($property->id == isset($product->productproperty->where('title',$property->id)->first()->title)) selected
                                                            @endif value="{{$property->id}}">{{$property->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="pros">سایر ویژگی ها(En):</label>
                                            <select name="selectMultipleen[]" class="select2 form-control"
                                                    id="pros" multiple>
                                                @foreach($properties->where('language','en') as $property)
                                                    <option
                                                        @if($property->id == isset($product->productproperty->where('title',$property->id)->first()->title)) selected
                                                        @endif value="{{$property->id}}">{{$property->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="pros">سایر ویژگی ها(Tur):</label>
                                            <select name="selectMultipletur[]" class="select2 form-control"
                                                    id="pros" multiple>
                                                @foreach($properties->where('language','tur') as $property)
                                                    <option
                                                        @if($property->id == isset($product->productproperty->where('title',$property->id)->first()->title)) selected
                                                        @endif value="{{$property->id}}">{{$property->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <br>
                                        <div class="col-lg-12">
                                            <div class="pros text-danger"></div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <button type="submit" class="theme-btn btn-style-one" onclick="productGallery({{$product->photos->pluck('id')}})"><span
                                                class="btn-title">ارسال</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('js')
    <script type="text/javascript" src="{{asset('/back/js/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript" src="{{asset('/back/js/dropzone/dropzone.js')}}"></script>
    <script>
        Dropzone.autoDiscover = false;
        var photosGallery = []
        var drop = new Dropzone('#photo', {
            addRemoveLinks: true,
            maxFilesize: 5,
            url: "{{route('photosave')}}",
            sending: function (file, xhr, formData) {
                formData.append("_token", "{{csrf_token()}}")
            },
            success: function (file, response) {
                photosGallery.push(response.photo_id)
            },
            removedfile: function (file) {
                $.post('/administrator/removeimage', {
                    "_token": "{{ csrf_token() }}",
                    "filename": file.name,
                    success: function (data) {
                        console.log("File has been successfully removed!!");
                    },
                    error: function (e) {
                        console.log(e);
                    }
                })
                var fileRef;
                return (fileRef = file.previewElement) != null ?
                    fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },
        });
        productGallery = function (photos) {
            if (photos) {
                document.getElementById('product-photo').value = photosGallery.concat(photos)
            } else {
                document.getElementById('product-photo').value = photosGallery
            }
        }
        CKEDITOR.replace('textareaDes', {
            customConfig: 'config.js',
            language: 'fa',
            removePlugins: 'cloudservices , easyimage'
        })
        CKEDITOR.replace('entextareaDes', {
            customConfig: 'config.js',
            language: 'en',
            removePlugins: 'cloudservices , easyimage'
        })
        CKEDITOR.replace('turtextareaDes', {
            customConfig: 'config.js',
            language: 'tur',
            removePlugins: 'cloudservices , easyimage'
        })

    </script>
@endsection
