@extends('back.layout')

@section('content')
    <div class="row">
        <div class="column col-lg-12 col-md-12">
            <div class="comments-tab">
                <h2>ثبت اسلایدر جدید</h2>
                <hr>
                <div class="row">
                    <div class="column col-lg-12 col-md-12">
                        <div class="inner-container">
                            <div class="property-submit-form">
                                <form method="post" action="{{route('slider.store')}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="photo">تصویر</label>
                                                <input type="hidden" name="photo_id[]" id="product-photo">
                                                <div id="photo" class="dropzone"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="col-md-12">
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
                                            <hr>
                                            <div class="col-md-12">
                                                <label for="number"></label>
                                                <select name="number" id="number" class="form-control">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="text">متن (فارسی)</label>
                                            <input type="text" name="textfa" class="form-control" id="text">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="text">متن (انگلیسی)</label>
                                            <input type="text" name="texten" class="form-control" id="text" style="direction: ltr">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="text">متن (ترکی)</label>
                                            <input type="text" name="texttur" class="form-control" id="text" style="direction: ltr">
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
