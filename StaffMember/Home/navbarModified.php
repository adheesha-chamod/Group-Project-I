<?php
if (isset($_POST['logout'])) {
    session_destroy();
    header('Location:../Login/staffmemberLoginModified.php');
}

if(isset($_SESSION['first_name'])){
    echo "first name is here";
}
?>


<div class="nav">
    <div class="nav-left">
        <a href="homeModified.php"><img src="../images/TTB_logo.jpg" alt="" srcset=""></a>
    </div>

    <div class="nav-right">    
        <div class="icon_box">    
            <div class="notification">
                <a href="#"><i class="fa fa-bell"></i></a>
            </div>    
            <hr>             
            <button  onclick="toggleMenue()" class="user">               
                <i class="fa-solid fa-user"></i>
            </button>
            <h3>
                <?php echo  $_SESSION['name']?>
            </h3>
        </div>
        <div class="sub-menu-wrap" id="subMenu">
            <div class="sub-menu">
                <div class="user-info">
                    <!-- <img src="../images/profile.jpeg" alt="" srcset=""> -->
                    <!-- <h3>Dasuni</h3> -->
                    <?php echo  $_SESSION['name']?>
                </div>
                <hr>
                <a href="#" class="sub-menu-link">
                    <i class="fa-solid fa-user"></i>
                    <p>Edit profile</p>
                    <span>></span>
                </a>
                <!-- <a href="#" class="sub-menu-link">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <p>Log out</p>
                    <span>></span>
                </a> -->
                <form action="" method="post" >
                    <button type="submit" class="sub-menu-link" name="logout">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <p class="logout">Log out</p>
                    <span>></span>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
            let subMenu = document.getElementById("subMenu");

            function toggleMenue(){
                subMenu.classList.toggle("open-menu");
            }
    </script>

    <div class="menu">
        <ul>
            <li class="menu_items"><a href="homeModified.php" class="menu_items_links_active">Home</a></li>
            <li class="menu_items"><a href="#" class="menu_items_links">Users</a></li>
            <li class="menu_items"><a href="#" class="menu_items_links">Calander</a></li>
            <li class="menu_items"><a href="#" class="menu_items_links">Shedule</a></li>
            <li class="menu_items"><a href="#" class="menu_items_links">Pending requests</a></li>
        </ul>
    </div>
</div>
