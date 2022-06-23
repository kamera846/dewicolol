@extends('layouts.main')

@section('page-content')


<!-- Start end page title -->
@foreach ($sections as $section)
    <?php 
    $image = json_decode($section->cover);
    ?>
    @if ($section->slug === 'blog' && $section->isActive === 'true' )
<section class="wow animate__fadeIn parallax" data-parallax-background-ratio="0.5" style="background-image: url(<?= asset($image != null ? 'storage/'.$image[0] : 'https://via.placeholder.com/1920x450' )?>); visibility: visible; animation-name: fadeIn;">
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-12 d-flex flex-column justify-content-center text-center extra-small-screen page-title-large">
                <!-- start page title -->
                <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">{{ $section->title }}</h1>
                <!-- end page title --> 
            </div>
        </div>
    </div>
</section>
@endif
@endforeach
<!-- end page title -->

<!-- Start page section -->
<section>
    <div class="container">
        <div class="row justify-content-center">
            <main class="col-12 col-xl-9 col-lg-8 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom">
                <!-- start post item -->
                @if($jumlah_blog >= 1 )

                @foreach($blogs as $blog)
                <div class="blog-post-content d-flex align-items-center flex-wrap margin-60px-bottom padding-60px-bottom border-bottom border-color-extra-light-gray md-margin-30px-bottom md-padding-30px-bottom text-center text-md-start md-no-border">
                    <div class="col-12 col-lg-5 blog-image p-0 md-margin-30px-bottom sm-margin-20px-bottom margin-45px-right md-no-margin-right">
                        <a href="/blog/{{ $blog->slug }}"><img src="{{ 'storage/' . $blog->gambar_blog }}" alt="" data-no-retina=""></a>
                    </div>
                    <div class="col-12 col-lg-6 blog-text p-0">
                        <div class="content margin-20px-bottom md-no-padding-left">
                            <a href="/blog/{{ $blog->slug }}" class="text-extra-dark-gray margin-5px-bottom alt-font text-extra-large font-weight-600 d-inline-block">{{ $blog->title }}</a>
                            <div class="text-medium-gray text-extra-small margin-15px-bottom text-uppercase alt-font"><span>Oleh <a href="/blog/{{ $blog->slug }}" class="text-medium-gray">{{ ucwords($blog->penulis) }}</a></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span>{{ $blog->created_at->isoFormat('d MMMM Y') }}</span>&nbsp;&nbsp;&nbsp;</div>
                            <p class="m-0 w-95 lg-w-100">{{ substr(strip_tags($blog->konten), 0, 285) }}...</p>
                        </div>
                        <a class="btn btn-very-small btn-dark-gray text-uppercase" href="/blog/{{ $blog->slug }}">Selengkapnya</a>
                    </div>
                </div>
                @endforeach
                <div class="row justify-content-center">
                    {{ $blogs->links() }}
                </div>
                @else
                        
                    @if(request('cari'))
                        <h4 class="text-center">Tidak ada hasil.</h3>
                    @else
                        <h4 class="text-center">Belum ada postingan.</h3>
                    @endif

                @endif
                <!-- end pagination -->
            </main>
            <aside class="col-12 col-xl-3 col-lg-4 col-md-7">
                <div class="d-inline-block w-100 margin-45px-bottom sm-margin-25px-bottom">
                    <form action="/blog" class="position-relative">
                        <div class="position-relative">
                            <input name="cari" id="text"  type="search" placeholder="Cari artikel..." class="bg-transparent padding-40px-right text-small mb-0 border-color-extra-light-gray medium-input float-start" value="{{ request('cari') }}">
                            <button type="submit" class="bg-transparent btn position-absolute right-0 top-1 search-button"><i class="fas fa-search ms-0"></i></button>
                        </div>   
                    </form>
                </div>
                {{-- <div class="bg-deep-pink padding-30px-all text-white-2 text-center margin-45px-bottom sm-margin-25px-bottom">
                    <i class="fas fa-quote-left icon-small margin-15px-bottom d-block"></i>
                    <span class="text-extra-large font-weight-300 margin-20px-bottom d-block">The future belongs to those who believe in the beauty of their dreams.</span>
                </div> --}}
                @if (request('cari'))
                @foreach($blogs as $blog)
                <div class="blog-post-content d-flex align-items-center flex-wrap margin-60px-bottom padding-60px-bottom border-bottom border-color-extra-light-gray md-margin-30px-bottom md-padding-30px-bottom text-center text-md-start md-no-border">
                    <div class="col-12 col-lg-5 blog-image p-0 md-margin-30px-bottom sm-margin-20px-bottom margin-45px-right md-no-margin-right">
                        <a href="/blog/{{ $blog->slug }}"><img src="{{ 'storage/' . $blog->gambar_blog }}" alt="" data-no-retina=""></a>
                    </div>
                    <div class="col-12 col-lg-6 blog-text p-0">
                        <div class="content margin-20px-bottom md-no-padding-left">
                            <a href="/blog/{{ $blog->slug }}" class="text-extra-dark-gray margin-5px-bottom alt-font text-extra-large font-weight-600 d-inline-block">{{ $blog->title }}</a>
                            <div class="text-medium-gray text-extra-small margin-15px-bottom text-uppercase alt-font"><span>Oleh <a href="/blog/{{ $blog->slug }}" class="text-medium-gray">{{ ucwords($blog->penulis) }}</a></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span>{{ $blog->created_at->isoFormat('d MMMM Y') }}</span>&nbsp;&nbsp;&nbsp;</div>
                            <p class="m-0 w-95 lg-w-100">{{ substr(strip_tags($blog->konten), 0, 285) }}...</p>
                        </div>
                        <a class="btn btn-very-small btn-dark-gray text-uppercase" href="/blog/{{ $blog->slug }}">Selengkapnya</a>
                    </div>
                </div>
                @endforeach
                <div class="row justify-content-center">
                    {{ $blogs->links() }}
                </div>
                @else
                    @if(request('cari'))
                        <h4 class="text-center">Tidak ada hasil.</h3>
                    @endif
                <div class="margin-45px-bottom sm-margin-25px-bottom">
                    <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Artikel Terbaru</span></div>
                    <ul class="latest-post position-relative">
                        @foreach($recentPosts as $post)
                        <li class="media d-flex">
                            <figure class="flex-shrink-0">
                                <a href="/blog/{{ $post->slug }}"><img src="{{ asset('storage/' . $post->gambar_blog) }}" alt="" data-no-retina=""></a>
                            </figure>
                            <div class="media-body flex-grow-1 text-small"><a href="blog-post-layout-01.html" class="text-extra-dark-gray"><span class="d-block margin-5px-bottom">{{ $post->judul }}</span></a> <span class="d-block text-medium-gray text-small">{{ $blog->created_at->isoFormat('d MMMM Y') }}</span></div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </aside>
        </div>
    </div>
</section>
<!-- end page section -->


@endsection