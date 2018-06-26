<body>


    <div id="mySidenav" class="sidenav .btn-group-vertical" onclick="toggleNav()">      
        <a href="./index.php?link=Landing" class="block btn navButton">
                <div class="container">    
                    <img src={{config('filesystems.public.root') . "/Assets/images/Sidebaricons/buildings.png"}} class="sideNavIcon" alt="Home">
                    <span class="sideNavText"> Home </span>
                </div>
        </a>
        <a href="./index.php?link=Dashboard" class="block btn navButton">
            <div class="container">    
                <img src={{config('filesystems.public.root') . "/Assets/images/Sidebaricons/meter.png"}} class="sideNavIcon" alt="Dashboard">
                <span class="sideNavText"> Dashboard </span>
            </div>
        </a>
           <a href="./index.php?link=Bio" class="block btn navButton">
            <div class="container">    
                <img src={{config('filesystems.public.root') . "/Assets/images/Sidebaricons/social.png"}} class="sideNavIcon" alt="Bio"> 
                <span class="sideNavText"> Bio </span>
            </div>
        </a>
        <a href="./index.php?link=Portfolio" class="block btn navButton">
            <div class="container">    
                <img src={{config('filesystems.public.root') . "/Assets/images/Sidebaricons/layers.png"}} class="sideNavIcon" alt="Portfolio">
                <span class="sideNavText"> Portfolio </span>
            </div>
        </a>
        <a href="./index.php?link=Blog" class="block btn navButton">
            <div class="container">    
                <img src={{config('filesystems.public.root') . "/Assets/images/Sidebaricons/blog.png"}} class="sideNavIcon" alt="Blog">
                <span class="sideNavText"> Blog </span>
            </div>
        </a>
        <a href="javascript:toggleOverlay()" class="block btn navButton noClick">
            <div class="container">    
                <img src={{config('filesystems.public.root') . "/Assets/images/Sidebaricons/mail.png"}} class="sideNavIcon" alt="Contact">
                <span class="sideNavText"> Contact </span>
            </div>
        </a>
    </div>

</body>