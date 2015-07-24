@layout('template.layout')

@section('content')
    <main>

        <section class="container-fluid">
            <div class="row">
                <ul class="bxslider">
                    @foreach($slides as $slide)
                        <li>
                            <img src="{{url('imgMainSlider/'. $slide->post->id)}}" alt="">

                            <div class="caption">
                                <h1 class="text-center">{{$slide->post->title}}</h1>

                                <p class="description">{{$slide->post->description}}</p>
                                <a href="{{url('posts/'.$slide->post->id)}}" class="btn read-more">Read more</a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
        <section id="bx-pager" class="pager">
            <div class="container">
                <div class="row-pager">
                    <?php $i = 0; ?>
                    @foreach($slides as $slide)
                        <a href="" data-slide-index="{{$i}}">
                            <h5>{{$slide->post->category->title}}</h5>
                            <h4>
                                {{$slide->post->title}}
                            </h4>
                        </a>
                        <?php $i++; ?>
                    @endforeach

                </div>
            </div>
        </section>
        <section class="articles">
            <div class="container">
                <div class="row">
                    @foreach($posts as $item)
                        @if($item->thumbnail !== '' && $item->typecol == 0)
                            <article class="col-md-3 col-sm-6 article">
                                <div class="card">
                                    <div class="thumb">
                                        <a href="{{url('posts/'.$item->id)}}">
                                            <img src="{{url('imgPostThumbnail/'.$item->id)}}" alt="">
                                        </a>
                                        <a href="{{url('post/'.$item->id)}}" class="visible-xs-block"></a>
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
                        @elseif($item->typecol == 2 && $item->thumbnail !== '')
                </div>
            </div>
        </section>
        <section class="container-fluid">
            <div class="row">
                <article class="promo-post" data-speed="0.04" data-parallax="scroll"
                         data-image-src="{{asset('images/thumbnails/'.$item->thumbnail)}}">
                    <div class="info">
                        <h2><a href="#">{{$item->title}}</a></h2>

                        <p class="description">
                            <a href="#">
                                {{$item->description}}
                            </a>
                        </p>
                        <a href="{{url('posts/'.$item->id)}}" class="btn read-more">Read more</a>
                    </div>
                </article>
            </div>
        </section>
        <section class="articles">
            <div class="container">
                <div class="row">
                    @endif
                    @endforeach

                            <!-- Button more load -->
                    <div class="col-xs-12" id="more">
                        <button class="btn btn-block btn-lg btn-load" id="moreHome" data-page="2">Load More</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="most-popular articles">
            <div class="container">
                <h2 class="text-center">Most Popular</h2>

                <div class="row">
                    @foreach($most_popular as $item)
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
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@stop