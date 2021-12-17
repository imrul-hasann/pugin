@if(count($rj) > 0)
    @foreach($rj as $item)
        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
            <div class="card">
                <div class="position-relative">
                    <div class="img-p">
                        <div class="img-c">
                            @if ($item->photo && file_exists('uploads/rj_list/'.$item->photo))
                                <img class="card-img" src="{{asset('uploads/rj_list/'.$item->photo)}}" alt="image">
                            @else
                                <img class="card-img" src="https://fs19.net/wp-content/uploads/2018/11/no-image-available.png" alt="image">
                            @endif
                        </div>
                    </div>
                    <div class="d-flex justify-content-end delete-btn bg-danger">
                        <a href="#" class="card-link like text-light py-2 px-3" onclick="deleteRj(event,{{$item->id}})">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body p-0 bg-dark text-light">
                    <div class="p-3">
                        <h4 class="card-title m-0">{{$item->name}}</h4>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif