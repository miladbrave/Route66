@extends('back.layout')

@section('content')
    <div class="row">
        <div class="column col-lg-12 col-md-12">
            <div class="comments-tab">
                <h2>ویرایش اسلایدر</h2>
                <hr>
                <div class="row">
                    <div class="column col-lg-12 col-md-12">
                        <div class="inner-container">
                            <div class="property-submit-form">
                                <form method="post" action="{{route('slider.update',$slider->id)}}">
                                    @csrf
                                    @method('PATCH')
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="photo">تصویر</label>
                                                <input type="hidden" name="photo_id[]" id="product-photo">
                                                <div id="photo" class="dropzone"></div>
                                            </div>
                                            @if(isset($slider->photo->path))
                                                <div class="col-sm-2" id="photo_{{$slider->photo->id}}"
                                                     style="margin:2%;">
                                                    <img class="img-responsive" src="{{asset($slider->photo->path)}}"
                                                         alt="image" style="height: 100px">
                                                    <a href="{{route('photodestroy',$slider->photo->id)}}"
                                                       class="pull-left small btn btn-danger btn-sm"
                                                       type="submit" style="margin-top: 2%">حذف
                                                    </a>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-md-4">
                                            <div class="col-md-12">
                                                <label style="margin-bottom: 7%">وضعیت نشر</label>
                                                <div class="clearfix">
                                                    <div class="radio radio-inline radio-replace radio-success">
                                                        <input type="radio" name="status" id="radioInput2"
                                                               @if($slider->status == 1) checked @endif value="1">
                                                        <label for="radioInput2">انتشار</label>
                                                    </div>
                                                    <div class="radio radio-inline radio-replace radio-danger">
                                                        <input type="radio" name="status" id="radioInput2"
                                                               @if($slider->status == 0) checked @endif value="0">
                                                        <label for="radioInput2">عدم انتشار</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="col-md-12">
                                                <label for="number"></label>
                                                <select name="number" id="number" class="form-control">
                                                    <option @if($slider->number == 1) selected @endif value="1">1
                                                    </option>
                                                    <option @if($slider->number == 2) selected @endif value="2">2
                                                    </option>
                                                    <option @if($slider->number == 3) selected @endif value="3">3
                                                    </option>
                                                    <option @if($slider->number == 4) selected @endif value="4">4
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="text">متن (فارسی)</label>
                                            <input type="text" name="textfa" value="{{$slider->textfa}}"
                                                   class="form-control" id="text">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="text">متن (انگلیسی)</label>
                                            <input type="text" name="texten" value="{{$slider->texten}}"
                                                 style="direction: ltr"  class="form-control" id="text">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="text">متن (ترکی)</label>
                                            <input type="text" name="texttur" value="{{$slider->texttur}}"
                                                 style="direction: ltr"  class="form-control" id="text">
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
@endsection
@section('js')
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
    </script>
@endsection
