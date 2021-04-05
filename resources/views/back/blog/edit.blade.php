@extends('back.layout')

@section('content')
    <div class="row">
        <div class="column col-lg-12 col-md-12">
            <div class="comments-tab">
                <h2>ویرایش مقاله</h2>
                <hr>
                <div class="row">
                    <div class="column col-lg-12 col-md-12">
                        <div class="inner-container">
                            <div class="property-submit-form">
                                <form method="post" action="{{route('blog.update',$blog->id)}}">
                                    @csrf
                                    @method('PATCH')
                                    <div class="row">
                                        <div class="col-md-8 ">
                                            <div class="form-group">
                                                <label for="photo">تصاویر</label>
                                                <input type="hidden" name="photo_id[]" id="product-photo">
                                                <div id="photo" class="dropzone"></div>
                                            </div>
                                            @if(isset($blog->photo->path))
                                                <div class="col-sm-2" id="photo_{{$blog->photo->id}}"
                                                     style="margin:2%;">
                                                    <img class="img-responsive" src="{{asset($blog->photo->path)}}"
                                                         alt="image" style="height: 100px">
                                                    <a href="{{route('photodestroy',$blog->photo->id)}}"
                                                       class="pull-left small btn btn-danger btn-sm"
                                                       type="submit" style="margin-top: 2%">حذف
                                                    </a>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-md-4 ">
                                            <div class="col-md-12">
                                                <label style="margin-bottom: 7%">وضعیت نشر</label>
                                                <div class="clearfix">
                                                    <div class="radio radio-inline radio-replace radio-success">
                                                        <input type="radio" name="status" id="radioInput2"
                                                               @if($blog->status == 1) checked @endif value="1">
                                                        <label for="radioInput2">انتشار</label>
                                                    </div>
                                                    <div class="radio radio-inline radio-replace radio-danger">
                                                        <input type="radio" name="status" id="radioInput2"
                                                               @if($blog->status == 0) checked @endif value="0">
                                                        <label for="radioInput2">عدم انتشار</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                    <hr>
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

                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                             aria-labelledby="pills-home-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="text">متن (فارسی)<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="textfa" class="form-control" required id="text" value="{{$blog->titlefa}}">
                                                </div>
                                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                    <label>توضیحات (فارسی)</label>
                                                    <textarea id="textareaDes" name="fades"
                                                              class="editor form-control">{{$blog->textfa}} </textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                             aria-labelledby="pills-profile-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="text">متن (انگلیسی)<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="texten" class="form-control" required id="text" value="{{$blog->titleen}}"
                                                           style="direction: ltr">
                                                </div>
                                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                    <label>توضیحات (انگلیسی)</label>
                                                    <textarea id="entextareaDes" name="endes"
                                                              class="editor form-control">{{$blog->texten}} </textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                             aria-labelledby="pills-contact-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="text">متن (ترکی)<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="texttur" class="form-control" required id="text" value="{{$blog->titletur}}"
                                                           style="direction: ltr">
                                                </div>
                                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                    <label>توضیحات (ترکی)</label>
                                                    <textarea id="turtextareaDes" name="turdes"
                                                              class="editor form-control">{{$blog->texttur}} </textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <button type="submit" class="theme-btn btn-style-one"
                                                onclick="productGallery()"><span
                                                class="btn-title">ثبت تغییرات</span></button>
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
