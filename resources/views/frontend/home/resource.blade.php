@extends('layouts.app_frontend')

@section('content')
    <link href="{{ url('frontend/css/resource.css') }}" rel="stylesheet" type="text/css" /> 

    <div class="resource-container-1">
        <div class="container">
            <div class="display-resource">
                <div class="resource-1">
                    <div class="resource-content">
                        <div class="resource-text">
                            <p class="resource-category">M&A</p>
                            <p class="resource-title">The Landscape of mergers and acquisitions law</p>
                            <p class="resource-date">24 May 2024 • 5 min</p>
                            <p class="resource-preview">M&A law is a branch of corporate law and refers to the legal framework that governs the process of companies merging or acquiring one another. However...</p>
                            <button href="" class="resource-btn">Read more</button>
                        </div>
                        <div class="resource-image">
                            <img src="{{ url('frontend/images/resource_banner/banner1.png') }}"> 
                        </div>
                    </div>
                </div>
                <img class="slider" src="{{ url('frontend/images/resource_banner/slider.png') }}"> 
            </div>
        </div>
    </div>

    <div class="resource-container-2">
        <div class="container">
            <div class="category">
                <a href="{{ route('resource', ['page' => 1, 'category' => 'all' ]) }}">All categories</a>
                @foreach($categories as $category)
                    <a href="{{ route('resource', ['page' => 1, 'category' => $category->id ]) }}">{{ $category->nama_kategori }}</a>
                @endforeach
                <!--<a href="">Deals</a>
                <a href="">Due diligence</a>
                <a href="">Finances</a>
                <a href="">M&A</a>
                <a href="">industries</a>
                <a href="">Virtual data room</a> -->
            </div>
            
            <div class="content-container">
                @php $counter = 0;@endphp
                @foreach($articles as $article)
                    @if($counter % 3 == 0)
                        <div class="content-row">
                    @endif

                    <div class="content-item">
                        <img src="{{ url('frontend/images/resource_banner/khalid.png') }}"> 
                        <p class="resource-category">{{ DB::table('category_article')->where('id', $article->category_article_id)->value('nama_kategori') }}</p>
                        <p class="content-title">{{ $article->judul }}</p>
                        <p class="content-preview">{{ $article->deskripsi }}</p>
                        <p class="resource-date">{{ (new DateTime($article->created_at))->format('j F Y') }} • 5 min</p>
                    </div>
                    
                    @php $counter++; @endphp

                    @if($counter % 3 == 0)
                        </div> 
                    @endif
                @endforeach

                @if($counter % 3 != 0)
                    @for($i = 1; $i <= (($counter % 3) - 3) * -1; $i++)
                        <div class="content-item-hidden">
                        </div>
                    @endfor
                    </div>
                @endif
            </div>

                    
            <!-- <div class="content-row">
                <div class="content-item">
                    <img src="{{ url('frontend/images/resource_banner/khalid.png') }}"> 
                    <p class="resource-category">M&A</p>
                    <p class="content-title">How AI is Revolutionizing M&A Processes</p>
                    <p class="content-preview">Learn how VDRs provide robust data protection during financial transactions, safeguarding sensitive information.</p>
                    <p class="resource-date">24 May 2024 • 5 min</p>
                </div>
                <div class="content-item">
                    <img src="{{ url('frontend/images/resource_banner/khalid.png') }}"> 
                    <p class="resource-category">M&A</p>
                    <p class="content-title">How AI is Revolutionizing M&A Processes</p>
                    <p class="content-preview">Learn how VDRs provide robust data protection during financial transactions, safeguarding sensitive information.</p>
                    <p class="resource-date">24 May 2024 • 5 min</p>
                </div>
                <div class="content-item">
                    <img src="{{ url('frontend/images/resource_banner/khalid.png') }}"> 
                    <p class="resource-category">M&A</p>
                    <p class="content-title">How AI is Revolutionizing M&A Processes</p>
                    <p class="content-preview">Learn how VDRs provide robust data protection during financial transactions, safeguarding sensitive information.</p>
                    <p class="resource-date">24 May 2024 • 5 min</p>
                </div>
            </div> -->

            <div class="content-page-number">
                <center>
                    <div class="paging">
                        @for($i = 1; $i <= $pagecount; $i++)
                            <a href="{{ route('resource', ['page' => $i , 'category' => $categoryarticle]) }}" class="page-number">{{$i}}</a>
                        @endfor
                    </div>
                </center>
            </div>
        
        </div>
    </div>

    <div class="resource-container-3">
        <div class="container">
            <div class="banner-contact">
                <center>
                    <div class="banner-content">
                        <p class="banner-text">Stay up-to-date on M&A insights and more</p>
                        <div class="banner-button">
                            <a href="" class="get-started-sign-up">Sign up</a>
                            <a href="" class="get-started-contact">Contact sales</a>
                        </div>
                    </div>
                </center>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script type="text/javascript">
	
</script>
@endpush