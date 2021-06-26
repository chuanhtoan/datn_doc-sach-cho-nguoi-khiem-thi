@section('product-sidebar')

<div class="product__sidebar">
    <div class="product__sidebar__view">
        <div class="section-title">
            <h5>Mới cập nhật</h5>
        </div>
        <div class="filter__gallery">
            @foreach ($latestNvs as $latestNv)
                <a href="/novel/{{$latestNv->id}}">
                    <div class="product__sidebar__view__item set-bg mix day years" data-setbg="{{$latestNv->cover}}">
                        <h5>{{$latestNv->title}}</h5>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>

@endsection
