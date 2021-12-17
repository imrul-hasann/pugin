@if(count($events) > 0)
    @foreach($events as $item)
        <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card">
                <div class="position-relative">
                    <div class="img-p">
                        <div class="img-c">
                            @if ($item->cover && file_exists('uploads/events/'.$item->cover))
                                <img class="card-img" src="{{asset('uploads/events/'.$item->cover)}}" alt="image">
                            @else
                                <img class="card-img" src="https://fs19.net/wp-content/uploads/2018/11/no-image-available.png" alt="image">
                            @endif
                        </div>
                    </div>
                    <div class="d-flex justify-content-end delete-btn bg-danger">
                        <a href="#" class="card-link like text-light py-2 px-3" onclick="deleteEvent(event,{{$item->id}})">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body p-0 bg-dark text-light">
                    <div class="buy d-flex justify-content-between align-items-center post-date">
                        <div class="post-date-left">
                            <span>{{$item->date_time}} by <a href="#">Admin</a></span>
                        </div>
                    </div>
                    <div class="p-3">
                        <h4 class="card-title">{{$item->title}}</h4>
                        <p class="card-text">{{$item->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif