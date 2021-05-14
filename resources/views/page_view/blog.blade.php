@extends('page_view/sub_core/main')

@section('title','Blog')

@section('container')
    <section id="blog" class="blog-section pt-40">
      <div class="shape shape-7">
        <img src="assets/img/shapes/shape-6.svg" alt="" />
      </div>
      <div class="container">
        <div class="row">
          @foreach ($views_last as $item)
          <div class="col-xl-8 mx-auto">
            <div class="section-title text-center mb-55">
              <span class="wow fadeInDown" data-wow-delay=".2s">Blog Post</span>
              <h2 class="mb-15 wow fadeInUp" data-wow-delay=".4s">Latest News</h2>
              <p class="wow fadeInUp" data-wow-delay=".4s">{!! nl2br($item->isi_thumbnail) !!}</p>
            </div>
          </div>
          @endforeach
        </div>
        <div class="row">
          @foreach ($views_blog as $item)
          <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="single-blog mb-30 wow fadeInUp" data-wow-delay=".2s">
              <div class="blog-img">
                <a href="#"><img src="{{ asset('/assets_post_blog/'.$item->foto) }}" alt="" /></a>
              </div>
              <div class="blog-content">
                <h4><a href="#">{{ $item->judul_blog }}</a></h4>
                <!-- <p>{!! nl2br($item->isi) !!}</p> -->
                <!-- <a class="read-more" href="/baca/{{ $item->slug_judul}}">Read More <i class="lni lni-arrow-right"></i></a> -->
                <p>{!! nl2br($item->isi_thumbnail) !!}</p>
                <a class="read-more" href="/baca/{{ $item->slug_judul}}">Read More <i class="lni lni-arrow-right"></i></a>
                <!-- <form action="/detail_blog" method="get">
                  @csrf
                  <input type="text" value="{{$item->id}}" name="id" hidden>
                <button style="background-color: rgba(255, 255, 255, 0); background-repeat:no-repeat;border: none;cursor:pointer; overflow: hidden;" type="submit" class="read-more">Read More <i class="lni lni-arrow-right"></i></button>
                </form> -->

              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
@endsection