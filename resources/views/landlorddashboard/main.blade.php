<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    
    <title>Landlord</title>
    <link rel="stylesheet" href="{{asset('css/landlorddashboard/main.css')}}" />
</head>

<body>

    <div class="container">
        <!-- Sidebar Section -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="{{asset('images/mainlogo.png')}}" >
                    <h2><span class="danger">Landlord</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar" style="width: 200px;">
                <a href="{{url('/')}}/landlord/dashboard">
                    <span class="material-icons-sharp">
                        dashboard
                    </span>
                    <h3  >Dashboard</h3>
                </a>
                <a href="{{url('/')}}/properties">
                    <span class="material-icons-sharp">
                        home
                    </span>
                    
                    <h3>Properties</h3>
                </a>
                
                <a href="{{url('/')}}/landlord/addproperty" >
                    <span class="material-icons-sharp">
                        add_circle
                    </span>
                    
                    <h3>Add properties</h3>
                </a>
                <a href="{{url('/')}}/landlord/showtenants">
                <span class='material-icons-sharp'>groups</span>
                
                    <h3>Tenants</h3>
                </a>
                @if($rentstatus->isEmpty())
                <a href="{{ url('/') }}/landlord/notifications">
                    <span class="material-icons-sharp">
                        notifications
                    </span>
                    <h3>Notificatios</h3>
                    
                </a>
                @else
                <a href="{{ url('/') }}/landlord/notifications">
                    <span class="material-icons-sharp">
                        notifications
                    </span>
                    <h3>Notificatios</h3>
                    <span class="message-count">{{$rentstatus->count()}}</span>
                </a>
               @endif

                <a href="{{url('/')}}/logout">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!-- End of Sidebar Section -->

        <!-- Main Content -->
        <main>
             
            <!-- End of Analyses -->

            <!-- New Users Section -->
            
            <!-- End of New Users Section -->

            <!-- Recent Orders Table -->
            <div class="recent-orders">
                 @yield('main-section')
            </div>
            <!-- End of Recent Orders -->

        </main>
        <!-- End of Main Content -->
             
        <!-- Right Section -->
        <div class="right-section">
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                    </span>
                </button>
                <div class="dark-mode">
                    <span class="material-icons-sharp active">
                        light_mode
                    </span>
                    <span class="material-icons-sharp">
                        dark_mode
                    </span>
                </div>

                <div class="profile">
                    <div class="info">
                         <b>{{$username}}</b>
                        
                    </div>
                    <div class="profile-photo">
                        <img src="{{asset('images/mainlogo.png')}}">
                    </div>
                </div>

            </div>
            <!-- End of Nav -->
             

            </div>

        </div>


    </div>

    <script>
        const sideMenu = document.querySelector('aside');
const menuBtn = document.getElementById('menu-btn');
const closeBtn = document.getElementById('close-btn');

const darkMode = document.querySelector('.dark-mode');

menuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block';
});

closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
});

darkMode.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode-variables');
    darkMode.querySelector('span:nth-child(1)').classList.toggle('active');
    darkMode.querySelector('span:nth-child(2)').classList.toggle('active');
})




    </script>
    
</body>

</html>