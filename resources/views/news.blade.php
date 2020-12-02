@extends('layouts.app')

@section('content')

    @include('partials.news-header')

    <!-- blog start-->
    <section class="section blog background--brown"><img class="blog__bg" src="img/events_inner-bg.png" alt="img"/>
        <div class="container">
            <div class="row offset-margin">
                @foreach ($news as $item)
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item blog-item--style-1">
                            <div class="blog-item__img">
                                <img class="img--bg" src="img/blog_5.jpg" alt="img"/>
                                <span class="blog-item__badge" style="background-color: #F8AC3A;">News</span>
                            </div>
                            <div class="blog-item__content">
                            <h6 class="blog-item__title"><a href="blog-post.html">{{ $item->title }}</a></h6>
                            <p>{{ $item->description }}</p>
                            <div class="blog-item__details"><span class="blog-item__date"><?php echo date('F d, Y h:m:i', strtotime($item->created_at)); ?></span></div>
                            </div>
                        </div>
                    </div>

                @endforeach
                
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- pagination start-->
                    {{-- <ul class="pagination">
                        <li class="pagination__item pagination__item--prev"><i class="fa fa-angle-left" aria-hidden="true"></i><span>Back</span>
                        </li>
                        <li class="pagination__item"><span>1</span></li>
                        <li class="pagination__item pagination__item--active"><span>2</span></li>
                        <li class="pagination__item"><span>3</span></li>
                        <li class="pagination__item"><span>4</span></li>
                        <li class="pagination__item"><span>5</span></li>
                        <li class="pagination__item pagination__item--disabled">...</li>
                        <li class="pagination__item"><span>12</span></li>
                        <li class="pagination__item pagination__item--next"><span>Next</span><i class="fa fa-angle-right" aria-hidden="true"></i>
                        </li>
                    </ul> --}}
                    <!-- pagination end-->
                    {{ $news->links() }}
                </div>
            </div>
        </div>
    </section>
    
@endsection