@section('product-sidebar')

<div class="product__sidebar">
    <div class="product__sidebar__view">
        <div class="section-title">
            <h5>Xem nhiều</h5>
        </div>
        <div class="filter__gallery">
            @foreach ($topViewsNvs as $topViewsNv)
                <a href="/novel/{{$topViewsNv->id}}">
                    <div class="product__sidebar__view__item set-bg mix day years" data-setbg="{{$topViewsNv->cover}}">
                        <h5>{{$topViewsNv->title}}</h5>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>

@endsection
