@extends('base')
@section('content')
    <div class="container-fluid meeting">
        <div class="meeting-text">
            <h1>Shedule your Meeting</h1>
            <p>Fill the Form To shedule Your Meeting.</p>
        </div>
        <div class="btn-container mb-2">
            <a href="{{url('meeting/create/online')}}" class="btn-1">Online</a>
            <a href="{{url('meeting/create')}}" class="btn-2">Offline</a>
        </div>
        <form method="post" action="{{url('meeting/create/online')}}" enctype="multipart/form-data">
            @csrf
            <label for="exampleInputEmail1" class="form-label">Type</label>
            <select class="form-select" type="name">
                <option selected>Office</option>
                <option value="1">Skill</option>
                <option value="1">Casual</option>
            </select>
            <label for="exampleInputEmail1" class="form-label">Online platform</label>
            <select class="form-select" name="platform">
                <option selected>Google Meet</option>
                <option value="1">Zoom</option>
            </select>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Meeting Date</label>
                <input type="datetime-local" class="form-control" name="date" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Choose the exact date for your Meeting.</div>
            </div>
            <div class="mb-3 ">
                <label for="exampleInputPassword1" class="form-label">Time</label>
                <input type="time" class="form-control" name="time">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Description</label>
                <textarea row="8" style="width: 100%" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Number Of Members</label>
                <input type="number" class="form-control" name="members">
            </div>
            <button type="submit" class="btn btn-primary">Shedule Meeting</button>
        </form>
    </div>
    <div class="container-fluid">
        <div class="" style="padding:50px 100px;">
            <p>
                Gardermoen Vest Næringspark ligger meget sentralt, 5 minutter til Oslo Lufthavn Gardermoen og sentralt
                på Østlandet.

                Dette er en unik mulighet til å samlokalisere for å oppnå gode synergier.

                Gardermoen Vest Næringspark ligger meget sentralt, 5 minutter til Oslo Lufthavn Gardermoen og sentralt
                på Østlandet. </p>
        </div>
    </div>
    <div class="review-plan">
        <div class="review-section">
            <div>
                <ul class="review">
                    <li>
                        <div>
                            <img src="{{asset('girl.jpg')}}"
                                 width="50px"
                                 height="50px">
                        </div>
                        <div>
                            <p>payment to coutriland Fenning</p>
                            <b>$20,000</b><small>USD</small>
                        </div>
                        <div class="indicator">
                            <a class="btn success"><i class="fa-solid fa-circle"></i>Success</a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="{{asset('girl.jpg')}}"
                                 width="50px"
                                 height="50px">
                        </div>
                        <div>
                            <p>payment to coutriland Fenning</p>
                            <b>$4,500</b><small>USD</small>
                        </div>
                        <div class="indicator">
                            <a class="btn processing"><i class="fa-solid fa-circle"></i>Processing</a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="{{asset('boy.jpg')}}"
                                 width="50px"
                                 height="50px">
                        </div>
                        <div>
                            <p>payment to Heeba Pawar</p>
                            <b>$14,500</b><small>USD</small>
                        </div>
                        <div class="indicator">
                            <a class="btn success"><i class="fa-solid fa-circle"></i>Success</a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="{{asset('girl.jpg')}}"
                                 width="50px"
                                 height="50px">
                        </div>
                        <div>
                            <p>payment to hiba khan</p>
                            <b>$9,500</b><small>USD</small>
                        </div>
                        <div class="indicator">
                            <a class="btn failed"><i class="fa-solid fa-circle"></i>Failed</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="plans-details2">
            <div class="plans-heading">
                <h4>Everything YOU Need To Talk TO Your Customers</h4>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                    roots
                    in a
                    piece of
                    classical Latin literature from 45 BC, making it over 2000 years old.</p>
            </div>
            <div class="plans-description">
                <div>
                    <div class="icon"><i class="fa-solid fa-bars"></i></div>
                    <div>
                        <h5>List View</h5>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                            roots
                            in a
                            piece of
                            classical Latin literature from 45 BC, making it over 2000 years old.</p>
                    </div>
                </div>
                <div>
                    <div class="icon"><i class="fa-solid fa-border-all"></i></div>
                    <div>
                        <h5>List View</h5>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                            roots
                            in a
                            piece of
                            classical Latin literature from 45 BC, making it over 2000 years old.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
