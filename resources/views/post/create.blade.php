@extends('base')
@section('content')
    <div class="plan-box my-4">
        <img src="{{asset('time.jpg')}}" width="40%" height="215px" class="img-plan">
        <div class="plan-text">
            <h2>Write Your First Blog POst With Us.</h2>
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
    <div class="section-heading">
        <h1>Blog Form</h1>
    </div>
    <form method="post" action="{{url('post/create')}}" style="width: 68%;margin: auto" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Post title</label>
        <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">iMAGE</label>
            <input type="text" class="form-control" name="image" >
        </div>
        <div class="mb-3 ">
            <label for="exampleInputPassword1" class="form-label">Post Type</label>
            <input type="text" class="form-control" name="type">
        </div>
        <div class="mb-3 ">
            <label for="exampleInputPassword1" class="form-label">Author Name</label>
            <input type="text" class="form-control" name="author">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Date</label>
            <input type="date" class="form-control" name="date">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Post Content</label>
            <textarea row="8" style="width: 100%" name="content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
@endsection
