@extends('layouts.app_frontend')

@section("title", $detail->meta_title)
@section("description", $detail->meta_description)
@section("content", $detail->description)

@section('content')
    @if(!\device::is_mobile())
        <div class="menu-other-insights">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <select class="form-control" id="other_insights" onChange="getOtherInsights(this)">
                            @if(count($other_insights) > 0)
                                @foreach($other_insights as $values)
                                    <option value="{{ $values->slug }}" {{ !empty($detail->slug) && $detail->slug == $values->slug ? "selected":"" }}>{!! Str::limit($values->judul, 60) !!}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <div class="right share-insights-sticky">
                            Share : &nbsp; 
                            <a href=""><i class="fab fa-instagram"></i></a>&nbsp;
                            <a href="http://www.linkedin.com/shareArticle?mini=true&url={{ url()->current() }}" target="_blank"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="sticky-detail-insights" style="background-image: url({{ url('upload/artikel/'.$detail->image) }});">
        <div class="bg-opacity-detail-insights"></div>
        <div class="text-sticky-detail-insights">
            <span>Home / Insights /</span>  <span><a href="">{{ $detail->judul }}</a></span>
            <h3>{{ $detail->judul }}</h3>
            <span>{{ date('F d', strtotime($detail->created_at))}}, {{ date('Y', strtotime($detail->created_at)) }}</span><br><br>
            <span>
                Share : &nbsp; 
                <a href=""><i class="fab fa-instagram"></i></a>&nbsp;
                <a href="http://www.linkedin.com/shareArticle?mini=true&url={{ url()->current() }}" target="_blank"><i class="fab fa-linkedin"></i></a>
            </span>
        </div>
    </div>
    <section id="insights">
        <div class="body-desc-insights">
            <div class="desc-insights">
                {!! $detail->deskripsi !!}
            </div>
            <div class="share-insights">
                <span>
                    Share : 
                    <a href=""><i class="fab fa-instagram" style="color: #2D2D2D;"></i></a>&nbsp;
                    <a href="http://www.linkedin.com/shareArticle?mini=true&url={{ url()->current() }}" target="_blank"><i class="fab fa-linkedin" style="color: #2D2D2D;"></i></a>
                </span>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script type="text/javascript">
        var $logo = $('.menu-other-insights');
        $(document).scroll(function() {
            if($(this).scrollTop()> 600){
                $('.menu-other-insights').css("display", "block").css("transition", "0.4s");
            }else{
                 $('.menu-other-insights').css("display", "none");
            }  
        });

        function getOtherInsights(element) {
            var links = element.value;
            document.location.href = "{{URL::to('insights')}}/"+links;
        }
    </script>
@endpush