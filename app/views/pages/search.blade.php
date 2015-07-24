@layout('template.layout')

@section('content')
    <div class="container">
        <h2>Results: "{{$q}}"</h2>
        <div class="row">
            @foreach($posts as $item)
                @if($item->thumbnail !== '' && $item->typecol == 0)
                    <article class="col-md-3 article">
                        <div class="card">
                            <div class="thumb">
                                <a href="{{url('posts/'.$item->id)}}">
                                    <img src="{{url('imgPostThumbnail/'.$item->id)}}" alt="">
                                </a>
                            </div>
                            <div class="caption">
                                <h4>
                                    <a href="{{url('posts/'.$item->id)}}">{{str_limit($item->title, 40)}}</a>
                                </h4>

                                <p class="description">
                                    <a href="{{url('posts/'.$item->id)}}">{{str_limit($item->description, 40)}}</a>
                                </p>
                            </div>
                            <a href="#" class="category-label"
                               style="background-color: {{$item->category->color}}; color: {{$item->category->color}}; border: 1px solid {{$item->category->color}}"><span>{{$item->category->title}}</span></a>
                        </div>
                    </article>
                @elseif($item->typecol == 0 && $item->thumbnail == '')
                    <article class="col-md-3 article">
                        <div class="card-no-thumb" style="background-color: {{$item->category->color}}">
                            <a href="{{url('categories/'.$item->category->id)}}" class="category-label" style="color: {{$item->category->color}}"><span>{{$item->category->title}}</span></a>
                            <h3><a href="{{url('posts/'.$item->id)}}">{{str_limit($item->title, 40)}}</a></h3>
                            <p class="description">
                                <a href="{{url('posts/'.$item->id)}}">{{str_limit($item->description, 75)}}</a>
                            </p>
                            <a href="{{url('posts/'.$item->id)}}" class="btn read-more"><span>Read more</span></a>
                        </div>
                    </article>
                @elseif($item->typecol == 1 && $item->thumbnail !== '')
                    <article class="col-md-6 col-xs-12 article column2">
                        <div class="card">
                            <div class="thumb col-md-5 col-md-push-7">
                                <a href="{{url('posts/'.$item->id)}}">
                                    <img src="{{asset('imgPostThumbnail2col/'.$item->id)}}" alt="">
                                </a>
                            </div>
                            <div class="caption col-md-7 col-md-pull-5">
                                <h3><a href="{{url('posts/'.$item->id)}}">{{$item->title}}</a></h3>

                                <p class="description"><a
                                            href="{{url('posts/'.$item->id)}}">{{$item->description}}</a></p>

                                <div class="text-center">
                                    <a href="{{url('posts/'.$item->id)}}" class="btn read-more">Read more</a>
                                </div>
                            </div>
                            <a href="#" class="category-label"
                               style="background-color: {{$item->category->color}}; color: {{$item->category->color}}; border: 1px solid {{$item->category->color}}"><span>{{$item->category->title}}</span></a>
                        </div>
                    </article>
                @endif
            @endforeach
        </div>
    </div>
@stop