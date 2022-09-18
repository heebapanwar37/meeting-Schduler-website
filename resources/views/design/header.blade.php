<header>
    <div class="close-button"><i class="fa-solid fa-xmark fa-2x"></i></div>
    <div class="navigation">
        <div class="logo">
            <a href="{{url('home')}}">
                <div><span class="first-letter">D</span>ay<span class="second-letter">P</span>lanner</div>
            </a>
        </div>
        <div class="page-links">
            <ul class="menu">
                <li><a href="{{url('profile')}}">
                        <div>
                            <span>User Name</span>
                            <img src="{{asset('girl.jpg')}}" class="user-image" height="40px" width="40px">
                        </div>
                    </a></li>
                <li class="bell-icon"><a href="{{url('post')}}">
                        <div>
                            <i class="fa-solid fa-bell fa-2x"></i></div>
                    </a></li>
                <li class="calender"><a href="{{url('task')}}">
                        <div>
                            <a href="{{url('https://calendar.google.com/calendar/u/0/r?pli=1')}}"><i
                                    class="fa-solid fa-calendar-days fa-2x"></i></a>
                        </div>
                    </a></li>
                <li>
                    <a href="{{url('meeting/create')}}">
                        <div>
                            <button class="btn btn-primary"><i
                                    class="fa-solid fa-plus px-2"></i>Create Meeting
                            </button>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="menu-option"><i class="fa-solid fa-bars fa-2x"></i></div>
    </div>
</header>
