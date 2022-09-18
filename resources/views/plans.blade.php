@extends('base')
@section('content')
    <div class="container">
        <div class="section-heading mt-4">
            <h1>Choose Your Plans</h1>
            <p>Choose Your Plans Wisly So You can enjoy our functionality.</p>
        </div>
        <div class="plans-section">
            <div class="card">
                <div class="card-header">
                  Basic Plan
                </div>
                <div class="card-body">
                    <h5 class="card-title">Free</h5>
                    <div class="card-text">
                        <p>facilty You Will Get In this Plan</p>
                        <ul>
                            <li>Ulimited Meeting Shedule.</li>
                            <li>Meeting Notification</li>
                            <li>Daily Planner</li>
                        </ul>
                    </div>
                </div>
                <a href="{{url('home')}}" class="btn btn-primary">TRY Now</a>
            </div>
            <div class="card">
                <div class="card-header">
                    Advance Plan
                </div>
                <div class="card-body">
                    <h5 class="card-title">$5 / Month</h5>
                    <div class="card-text">
                        <p>facilty You Will Get In this Plan</p>
                        <ul>
                            <li>Ulimited Meeting Shedule.</li>
                            <li>Meeting Notification</li>
                            <li>Daily Planner</li>
                            <li>Personal Trainer</li>
                            <li>Time Managment Tips</li>
                            <li>Time Tracker</li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
    </div>
        <div class="welcome-text">
            <h5>Plan Your Day With Us</h5>
            <p>shedule your meedting and important task with us.<br>
                Tech-a-thon is where the sweat, blood and tears drip on the floor. When life gives you Tech-a-thon, you
                make code (and friends).shedule your meedting and important task with us.<br>
                Tech-a-thon is where the sweat, blood and tears drip on the floor. When life gives you Tech-a-thon, you
                make code (and friends).</p>
        </div>
        <div class="plan-box mb-4">
            <img src="{{asset('time.jpg')}}" width="40%" height="215px" class="img-plan">
            <div class="plan-text">
                <h2>We Will Save Your Time.</h2>
                <p>shedule your meedting and important task with us.<br>
                    Tech-a-thon is where the sweat, blood and tears drip on the floor. When life gives you Tech-a-thon, you
                    make code (and friends).shedule your meedting and important task with us.<br>
                    Tech-a-thon is where the sweat, blood and tears drip on the floor. When life gives you Tech-a-thon, you
                    make code (and friends)</p>
                <ul>
                    <li><i class="fa-solid fa-right-long"></i>Personal Self Couch</li>
                    <li><i class="fa-solid fa-right-long"></i>Personal Guidence From expert</li>
                    <li><i class="fa-solid fa-right-long"></i>Daily Schedule Plan</li>
                    <li><i class="fa-solid fa-right-long"></i>Meeting Schedule</li>
                </ul>
            </div>
        </div>
        <div class="plan-box">
            <div class="plan-text">
                <h2>Be Productive With us</h2>
                <p>shedule your meedting and important task with us.<br>
                    Tech-a-thon is where the sweat, blood and tears drip on the floor. When life gives you Tech-a-thon, you
                    make code (and friends).shedule your meedting and important task with us.<br>
                    Tech-a-thon is where the sweat, blood and tears drip on the floor. When life gives you Tech-a-thon, you
                    make code (and friends)</p>
            </div>
            <img src="{{asset('task.png')}}" width="40%" height="415px" class="img-plan">
        </div>
    </div>
@endsection
