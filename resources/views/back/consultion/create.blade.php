@extends('back.layout')

@section('content')
    <div class="row">
        <div class="column col-lg-12 col-md-12">
            <div class="comments-tab">
                <h2>ثبت مشاور جدید</h2>
                <hr>
                <div class="row">
                    <div class="column col-lg-12">
                        <div class="properties-box">
                            <div class="inner-container">
                                <div class="property-submit-form">
                                    <form method="post" action="{{route('consult.store')}}">
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
                                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                        <label>نام و نام خانوادگی (فارسی) <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="faname" placeholder="نام" required>
                                                    </div>
                                                    <div class="form-group col-lg-4 col-md-3 col-sm-12">
                                                        <label>تلفن تماس<span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="phone" placeholder="تلفن">
                                                    </div>
                                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                        <label>ایمیل<span class="text-danger">*</span></label>
                                                        <input type="text" name="email" placeholder="ایمیل">
                                                    </div>
                                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                        <label>فیسبوک </label>
                                                        <input type="text" name="facebook" placeholder="facebook">
                                                    </div>
                                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                        <label>واتس آپ </label>
                                                        <input type="text" name="whatsup" placeholder="whats">
                                                    </div>
                                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                        <label>اینستاگرام</label>
                                                        <input type="text" name="twitter" placeholder="instagram">
                                                    </div>
                                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                        <label>تلگرام </label>
                                                        <input type="text" name="telegram" placeholder="telegram">
                                                    </div>
                                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                        <label>توضیحات </label>
                                                        <textarea id="textareaDes" name="description"
                                                                  class="editor form-control"> </textarea>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                                 aria-labelledby="pills-profile-tab">
                                                <div class="row">
                                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                        <label class="pull-left">full-name </label>
                                                        <input type="text" name="enname" placeholder="name"  style="direction: ltr">
                                                    </div>
                                                    <div class="col-lg-9 col-md-12 col-sm-12 text-left">
                                                        <div class="form-group">
                                                            <label>Description </label>
                                                            <textarea id="entextareaDes" name="endes"
                                                                      class="editor form-control"> </textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                                 aria-labelledby="pills-contact-tab">
                                                <div class="row">
                                                    <div class="form-group col-lg-3 col-md-2 col-sm-12">
                                                        <label class="pull-left">Ad</label>
                                                        <input class="text-left" type="text" name="turname"
                                                               placeholder="Ad">
                                                    </div>
                                                    <div class="col-lg-9 col-md-12 col-sm-12 text-left">
                                                        <div class="form-group">
                                                            <label>Açıklama </label>
                                                            <textarea id="turtextareaDes" name="turdes"
                                                                      class="editor form-control"> </textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="title"><h3>گالری</h3></div>
                                        <div class="row">
                                            <div class="col-md-8 ">
                                                <div class="form-group">
                                                    <label for="photo">تصویر مشاور</label>
                                                    <input type="hidden" name="photo_id[]" id="product-photo">
                                                    <div id="photo" class="dropzone"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                            <button type="submit" class="theme-btn btn-style-one" onclick="productGallery()"
                                                    ><span
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
            maxFiles: 1,
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
            language: 'fa',
            removePlugins: 'cloudservices , easyimage'
        })
        CKEDITOR.replace('turtextareaDes', {
            customConfig: 'config.js',
            language: 'fa',
            removePlugins: 'cloudservices , easyimage'
        })

    </script>
@endsection
