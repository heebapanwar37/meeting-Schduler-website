@extends('base')
@section('content')
    <div class="container-fluid">
        <div class="section-heading mt-4">
            <h1>Your Current meeting</h1>
            <p>Choose Your Plans Wisly So You can enjoy our functionality.</p>
        </div>
        <div class="list-meeting">
            <div class="card" style="width: 80%;">
                @if(empty($meetings))
                    <h2> oops! there is no meeting.</h2>
                @endif
                @foreach($meetings as $meeting)

                    <div class="card-body">
                        <h4 class="card-title bg-office w-20 text-center text-white mb-3">{{$meeting->type}}</h4>
                        <h6 class="card-subtitle mb-3 text-muted"><i
                                class="fa-regular fa-calendar-days"></i>{{$meeting->date}}</h6>
                        <h6 class="card-subtitle mb-3 text-muted"><i class="fa-solid fa-clock"></i>{{$meeting->time}}
                        </h6>
                        <h6 class="card-subtitle mb-3 text-muted"><i class="fa-solid fa-people-group"></i> Number of
                            Member's :<b>{{$meeting->members}}</b>
                        </h6><h6 class="card-subtitle mb-2 text-muted"><i class="fa-solid fa-map-location"></i>
                            <b>{{$meeting->location}}</b></h6>
                        <div class="card-text">
                            <p class="">{{$meeting->description}}</p>
                            <div class="btn-section">
                                <a href="{{url('meeting/edit/')}}/{{$meeting->id}}" class="btn btn-primary">Edit</a>
                                <a href="{{url('meeting/delete/')}}/{{$meeting->id}}" class="btn btn-primary">Delete</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
