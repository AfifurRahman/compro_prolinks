@extends('layouts.app_frontend')

@section('content')
    <style type="text/css">
        #pdf_container { background: #F5F5F5; text-align: center; display: none; padding: 5px; height: 820px; overflow: auto; width: 100%; }
    </style>
	<div class="sticky-services">
		<div class="bg-opacity-services"></div>
		<div class="text-sticky-services">
			<span>Home / Industries /</span>  <span><a href="">{{ $industries->title }}</a></span>
			<h3>{!! $industries->value1 !!}</h3>
		</div>
	</div>
    <section id="detail-industries">
        <div id="data-txt-industries">
            {!! $industries->description !!}
            <div class="load-more">
                <a href="#" onclick="LoadPdfFromUrl('{{ url("upload/industries/".$industries->value5) }}')" class="btn btn-custom-consult">Show more <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
        <div id="read-less" class="load-less">
            <a href="#" onclick="showLess()" class="btn btn-custom-consult"><i class="fa fa-arrow-left"></i> Show less</a>
            @if(\device::is_mobile())
                <p>Swipe right to read</p>
            @endif
        </div>
    
        <div id="pdf_container" align="center"></div>
    	<div class="body-banner-key-values-principles">
    		@if(!empty($industries->image))
                <img src="{{ url('upload/industries/'.$industries->image) }}">
            @endif
            <!-- <img src="{{ url('frontend/images/banner_key_values_principles.png') }}" > -->
    	</div>
	   @include('frontend/_card/insights', ['insights' => $insights])
    	<div class="body-testimonials">
    		@include('frontend/_card/testimonials')
    	</div>
    </section>
@stop

@push('scripts')
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf_viewer.min.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript">
        $("#read-less").hide();
		var pdfjsLib = window['pdfjs-dist/build/pdf'];
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.worker.min.js';
        var pdfDoc = null;
        var scale = 1; //Set Scale for Zoom.
        var resolution = IsMobile() ? 1.5 : 1.9; //Set Resolution as per Desktop and Mobile.
        function LoadPdfFromUrl(url) {
            $("#data-txt-industries").hide();
            $("#read-less").show();
            //Read PDF from URL.
            pdfjsLib.getDocument(url).promise.then(function (pdfDoc_) {
                pdfDoc = pdfDoc_;

                //Reference the Container DIV.
                var pdf_container = document.getElementById("pdf_container");
                pdf_container.style.display = "block";
                pdf_container.style.height = IsMobile() ? "auto" : "auto";
                pdf_container.style.width = "100%";
                //Loop and render all pages.
                for (var i = 1; i <= pdfDoc.numPages; i++) {
                    RenderPage(pdf_container, i);
                }
            });
        };
        function RenderPage(pdf_container, num) {
            pdfDoc.getPage(num).then(function (page) {
                //Create Canvas element and append to the Container DIV.
                var scale =  IsMobile() ? 1.3 : 1.8;
                var canvas = document.createElement('canvas');
                canvas.id = 'pdf-' + num;
                ctx = canvas.getContext('2d');
                pdf_container.appendChild(canvas);

                //Create and add empty DIV to add SPACE between pages.
                var spacer = document.createElement("div");
                spacer.style.height = "20px";
                pdf_container.appendChild(spacer);

                //Set the Canvas dimensions using ViewPort and Scale.
                var viewport = page.getViewport({ scale: scale });
                var outputScale = window.devicePixelRatio || 1;
                // canvas.height = resolution * viewport.height;
                // canvas.width = resolution * viewport.width;
                
                canvas.width = Math.floor(viewport.width * outputScale);
                canvas.height = Math.floor(viewport.height * outputScale);
                canvas.style.width = Math.floor(viewport.width) + "px";
                canvas.style.height =  Math.floor(viewport.height) + "px";

                var transform = outputScale !== 1 ? [outputScale, 0, 0, outputScale, 0, 0] : null;
                //Render the PDF page.
                var renderContext = {
                    canvasContext: ctx,
                    viewport: viewport,
                    transform: transform
                };
                
                page.render(renderContext);
            });
        };

        function IsMobile() {
            var r = new RegExp("Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini");
            return r.test(navigator.userAgent);
        }

        function showLess() {
            location.reload();
        }
	</script>
@endpush