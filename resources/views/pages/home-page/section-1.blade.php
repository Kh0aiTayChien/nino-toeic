<div class="section-1 d-flex justify-content-center align-items-center">
    <div id="section-1-carousel" class="carousel slide w-100" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#section-1-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#section-1-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#section-1-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('images/homepage/section-1/banner.png')}}" class="img-slide " alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/homepage/section-1/banner.png')}}" class="img-slide " alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/homepage/section-1/banner.png')}}" class="img-slide " alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#section-1-carousel" data-bs-slide="prev">
            <img src="{{asset('images/arrow/left.png')}}" alt="Previous" class=" button-shake img-carousel-arrow"/>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#section-1-carousel" data-bs-slide="next">
            <img src="{{asset('images/arrow/right.png')}}" alt="Previous" class=" button-shake img-carousel-arrow"/>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
