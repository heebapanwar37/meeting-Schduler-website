@extends('base')
@section('content')
    <div class="container-fluid">
        <div class="welcome-text">
            <h2>Plan Your Day With Us</h2>
            <p>shedule your meedting and important task with us.<br>
                Tech-a-thon is where the sweat, blood and tears drip on the floor. When life gives you Tech-a-thon, you
                make code (and friends).</p>
        </div>
        <div class="item">
            <a class="meeting" href="{{url('meeting')}}">
                <div>
                    <i class="fa-solid fa-people-group fa-2x my-4"></i>
                    <h2>Meeting</h2>
                </div>
            </a>
            <a class="today_task" href="{{url('task')}}">
                <div>
                    <i class="fa-solid fa-clock fa-2x my-4"></i>
                    <h2>Daily Task</h2>
                </div>
            </a>
            <a class="calender" href="{{url('post')}}">
                <div>
                    <i class="fa-solid fa-signs-post fa-2x my-4"></i>
                    <h2>Post</h2>
                </div>
            </a>
            <a class="seeting" href="{{url('plans')}}">
                <i class="fa-brands fa-slack fa-2x my-4"></i>
                <h2>Plan's</h2>
            </a>
        </div>
    </div>
    <div class="container-fluid">
        <div class="text-box">
            <p>
                Gardermoen Vest Næringspark ligger meget sentralt, 5 minutter til Oslo Lufthavn Gardermoen og sentralt
                på Østlandet.

                Dette er en unik mulighet til å samlokalisere for å oppnå gode synergier.

                Gardermoen Vest Næringspark ligger meget sentralt, 5 minutter til Oslo Lufthavn Gardermoen og sentralt
                på Østlandet.

                Dette er en unik mulighet til å samlokalisere for å oppnå gode synergier.

                Gardermoen Vest Næringspark ligger meget sentralt, 5 minutter til Oslo Lufthavn Gardermoen og sentralt
                på Østlandet.

                Dette er en unik mulighet til å samlokalisere for å oppnå gode synergier.

                Gardermoen Vest Næringspark ligger meget sentralt, 5 minutter til Oslo Lufthavn Gardermoen og sentralt
                på Østlandet.

                Dette er en unik mulighet til å samlokalisere for å oppnå gode synergier.

                Gardermoen Vest Næringspark ligger meget sentralt, 5 minutter til Oslo Lufthavn Gardermoen og sentralt
                på Østlandet.

                Dette er en unik mulighet til å samlokalisere for å oppnå gode synergier. </p>
        </div>
    </div>
    <div class="container-fluid blogs">
        <div class="blog-text"><h1 style="text-align: center;padding-bottom: 0px;">Blog's</h1>
        <p>you can read our creative post and you can post your own blogs here</p></div>
        <div class="web-container pages-section">
            <div class="page-card-section">
                <a href="">
                    <div class="page-card">
                        <div class="card-image"
                             style="background-image: url({{asset('meeting.jpg')}})">
                        </div>
                        <div class="card-text">
                            <p>Laravel has wonderful, thorough documentation covering every aspect of the framework.
                                Whether you are new to the framework or have previous experience with Laravel, we
                                recommend reading all of the documentation from beginning to end.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="page-card-section">
                <a href="">
                    <div class="page-card">
                        <div class="card-image"
                             style="background-image: url({{asset('task.jpg')}})">
                        </div>
                        <div class="card-text">
                            <p>Laravel has wonderful, thorough documentation covering every aspect of the framework.
                                Whether you are new to the framework or have previous experience with Laravel.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="page-card-section">
                <a href="">
                    <div class="page-card">
                        <div class="card-image"
                             style="background-image: url({{asset('planner.png')}})">
                        </div>
                        <div class="card-text">
                            <p>Laravel has wonderful, thorough documentation covering every aspect of the framework.
                                Whether you are new to the framework or have previous experience with Laravel, we
                                recommend reading all of the documentation from beginning to end.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
