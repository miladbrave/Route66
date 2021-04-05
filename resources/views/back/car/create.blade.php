@extends('back.layout')

@section('content')
    <div class="row">
        <div class="column col-lg-12 col-md-12">
            <div class="comments-tab">
                <h2>ثبت خودرو جدید</h2>
                <hr>
                <div class="row">
                    <div class="column col-lg-12">
                        <div class="properties-box">
                            <div class="inner-container">
                                <div class="property-submit-form">
                                    <form method="post" action="{{route('car.store')}}">
                                        @csrf
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
                                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                        <label>نام خودرو (لاتین)<span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="faname" placeholder="نام خودرو"
                                                               required>
                                                    </div>
                                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                        <label>وضعیت خودرو <span class="text-danger">*</span></label>
                                                        <select class="custom-select-box" name="type">
                                                            <option value="0">جدید</option>
                                                            <option value="1">دست دوم</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                        <label>کشور <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="facountry" required placeholder="کشور">
                                                    </div>
                                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                        <label>شهر <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="facity" required placeholder="شهر">
                                                    </div>
                                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                        <label>سال ساخت </label>
                                                        <input type="text" name="year" placeholder="مدل">
                                                    </div>
                                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                        <label>قیمت <span class="text-danger">*</span></label>
                                                        <input type="text" name="price" placeholder="قیمت">
                                                    </div>
                                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                        <label>کیلومتر کارکرد <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="kilometer" placeholder="کیلومتر" required>
                                                    </div>
                                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                        <label>انتخاب مشاور</label>
                                                        <select class="custom-select-box" name="consult">
                                                            @foreach($consults as $consult)
                                                                <option  value="{{$consult->id}}">{{$consult->faname}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                        <label>برند </label>
                                                        <select class="form-control" name="brand" style="direction: ltr">
                                                            @foreach($brands as $brand)
                                                                <option value="{{$brand->title}}"
                                                                        style="direction: ltr">{{$brand->title}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                        <label>نوع خودرو</label>
                                                        <select class="form-control" name="cartype"
                                                                style="direction: ltr">
                                                            <option value="1">Sedon</option>
                                                            <option value="2">Coupe</option>
                                                            <option value="3">Suve</option>
                                                            <option value="4">Crossover</option>
                                                            <option value="5">Hatchback</option>
                                                            <option value="6">Hybrid</option>
                                                            <option value="7">Sport</option>
                                                            <option value="8">Pickup Truck</option>
                                                            <option value="9">Minivan</option>
                                                            <option value="10">Luxury</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                        <label>توضیحات </label>
                                                        <textarea id="textareaDes" name="des"
                                                                  class="editor form-control"> </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                                 aria-labelledby="pills-profile-tab">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group col-lg-12 col-md-2 col-sm-12">
                                                            <label class="pull-left">Country <span
                                                                class="text-danger">*</span></label>
                                                            <input class="text-left" type="text" name="encountry"
                                                                   required
                                                                   placeholder="country">
                                                        </div>
                                                        <div class="form-group col-lg-12 col-md-2 col-sm-12">
                                                            <label class="pull-left">City <span
                                                                class="text-danger">*</span></label>
                                                            <input class="text-left" type="text" name="encity" required
                                                                   placeholder="city">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 text-left">
                                                            <div class="form-group">
                                                                <label>Description </label>
                                                                <textarea id="entextareaDes" name="endes"
                                                                          class="editor form-control"> </textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                                 aria-labelledby="pills-contact-tab">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group col-lg-12 col-md-4 col-sm-12">
                                                            <label class="pull-left">ülke <span
                                                                    class="text-danger">*</span></label>
                                                            <input class="text-left" type="text" name="turcountry"
                                                                   required
                                                                   placeholder="ülke">
                                                        </div>
                                                        <div class="form-group col-lg-12 col-md-4 col-sm-12">
                                                            <label class="pull-left">şehir <span
                                                                    class="text-danger">*</span></label>
                                                            <input class="text-left" type="text" name="turcity" required
                                                                   placeholder="şehir">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 text-left">
                                                            <div class="form-group">
                                                                <label>Açıklama </label>
                                                                <textarea id="turtextareaDes" name="turdes"
                                                                          class="editor form-control"> </textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
                                            </div>
                                            <div class="col-md-4 ">
                                                <label style="margin-bottom: 7%">وضعیت نشر</label>
                                                <div class="clearfix">
                                                    <div class="radio radio-inline radio-replace radio-success">
                                                        <input type="radio" name="status" id="radioInput2" checked
                                                               value="1">
                                                        <label for="radioInput2">انتشار</label>
                                                    </div>
                                                    <div class="radio radio-inline radio-replace radio-danger">
                                                        <input type="radio" name="status" id="radioInput2"
                                                               value="0">
                                                        <label for="radioInput2">عدم انتشار</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title"><h3>ویژگی ها (اختیاری)</h3></div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="pros">سایر ویژگی ها(فارسی):</label>
                                                <select name="selectMultiplefa[]" class="select2 form-control"
                                                        id="pros" multiple>
                                                    @foreach($properties->where('language','fa') as $property)
                                                        <option value="{{$property->id}}">{{$property->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="pros">سایر ویژگی ها(En):</label>
                                                <select name="selectMultipleen[]" class="select2 form-control"
                                                        id="pros" multiple>
                                                    @foreach($properties->where('language','en') as $property)
                                                        <option value="{{$property->id}}">{{$property->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="pros">سایر ویژگی ها(Tur):</label>
                                                <select name="selectMultipletur[]" class="select2 form-control"
                                                        id="pros" multiple>
                                                    @foreach($properties->where('language','tur') as $property)
                                                        <option value="{{$property->id}}">{{$property->title}}</option>
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
                                            <button type="submit" class="theme-btn btn-style-one"
                                                    onclick="productGallery()"><span
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
        productGallery = function () {
            document.getElementById('product-photo').value = photosGallery
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
