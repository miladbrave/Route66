@extends('back.layout')

@section('content')
    <div class="row">
        <div class="column col-lg-12 col-md-12">
            <div class="comments-tab row">
                @foreach($searches as $search)
                    <div class="card col-md-3" style="width: 18rem;">
                        @if($home)
                            <a href="{{route('home.index')}}">
                                @elseif($cars)
                                    <a href="{{route('car.index')}}">
                                        @endif
                                        <img class="card-img-top" src="{{$search->photos->first()->path}}"
                                             alt="Card image cap"
                                             style="height: 250px">
                                        <div class="card-body">
                                            <p class="card-text">
                                                @if(isset($search->title))
                                                    <span>{{$search->title}}</span>
                                                @elseif(isset($search->entitle))
                                                    <span>{{$search->entitle}}</span>
                                                @elseif(isset($search->turtitle))
                                                    <span>{{$search->turtitle}}</span>
                                                @endif
                                            </p>
                                        </div>
                                    </a>
                            </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
