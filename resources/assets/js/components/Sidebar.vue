<template>
    <div id="mySidenav" class="sidenav .btn-group-vertical" onclick="toggleNav()">      
        <a href="./index.php?link=Landing" class="block btn navButton">
                <div class="container">    
                    <img src={{ image[0] }} class="sideNavIcon" alt="Home">
                    <span class="sideNavText"> Home </span>
                </div>
        </a>
        <a href="./index.php?link=Dashboard" class="block btn navButton">
            <div class="container">    
                <img src={{ image[1] }} class="sideNavIcon" alt="Dashboard">
                <span class="sideNavText"> Dashboard </span>
            </div>
        </a>
           <a href="./index.php?link=Bio" class="block btn navButton">
            <div class="container">    
                <img src={{ image[2] }} class="sideNavIcon" alt="Bio"> 
                <span class="sideNavText"> Bio </span>
            </div>
        </a>
        <a href="./index.php?link=Portfolio" class="block btn navButton">
            <div class="container">    
                <img src={{ image[3] }} class="sideNavIcon" alt="Portfolio">
                <span class="sideNavText"> Portfolio </span>
            </div>
        </a>
        <a href="./Blog" class="block btn navButton">
            <div class="container">    
                <img src={{ image[4] }} class="sideNavIcon" alt="Blog">
                <span class="sideNavText"> Blog </span>
            </div>
        </a>
        <a href="#" class="block btn navButton noClick">
            <div class="container">    
                <img src={{ image[5] }} class="sideNavIcon" alt="Contact">
                <span class="sideNavText"> Contact </span>
            </div>
        </a>
    </div>
</template>

<script>
export default {

data() {
    return {
        image: [
             "http://localhost/Assets/images/Sidebaricons/buildings.png",
             "http://localhost/Assets/images/Sidebaricons/meter.png",
             "http://localhost/Assets/images/Sidebaricons/social.png",
             "http://localhost/Assets/images/Sidebaricons/layers.png",
             "http://localhost/Assets/images/Sidebaricons/blog.png",
             "http://localhost/Assets/images/Sidebaricons/mail.png"             
        ]
    }
}




}
</script>

<style>

</style>
