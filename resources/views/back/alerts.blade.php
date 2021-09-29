{{--@if(Session::has('success'))--}}
{{--    <div class="alert alert-success alert-dismissible fade show withalert" role="alert">--}}
{{--        <i class="ri-check-line"></i>--}}
{{--        {!! Session::get('success') !!}--}}
{{--        <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--            <span aria-hidden="true">×</span>--}}
{{--        </button>--}}
{{--    </div>--}}
{{--@elseif(Session::has('danger'))--}}
{{--    <div class="alert alert-danger alert-dismissible fade show withalert" role="alert">--}}
{{--        <i class="ri-close-line"></i>--}}
{{--        {!! Session::get('danger') !!}--}}
{{--        <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--            <span aria-hidden="true">×</span>--}}
{{--        </button>--}}
{{--    </div>--}}
{{--@endif--}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
