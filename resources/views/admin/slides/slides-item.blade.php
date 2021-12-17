@if(count($slides) > 0)
    @foreach($slides as $item)
        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
            <div class="card">
                <div class="position-relative">
                    <div class="img-p">
                        <div class="img-c">
                            @if ($item->url && file_exists('uploads/slides/'.$item->photo_url))
                                <img class="card-img" src="{{asset('uploads/slides/'.$item->photo_url)}}" alt="image">
                            @else
                                <img class="card-img" src="https://fs19.net/wp-content/uploads/2018/11/no-image-available.png" alt="image">
                            @endif
                        </div>
                    </div>
                    <div class="d-flex justify-content-end delete-btn bg-danger">
                        <a href="#" class="card-link like text-light py-2 px-3" onclick="deleteGallery(event,{{$item->id}})">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body p-0 bg-dark text-light">
                    <div class="p-3">
                        <h4 class="card-title m-0 pb-2">{{$item->text}}</h4>
                        <a href="{{$item->url}}" class="text-warning">{{$item->url}}</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif