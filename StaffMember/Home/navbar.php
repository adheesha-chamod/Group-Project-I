<?php
if (isset($_POST['logout'])) {
    session_destroy();
    header('Location:../Login/staffmemberLogin.php');
}

?>


<div class="nav">
    <div class="nav-left">
        <a href="home.php"><img src="../images/TTB_logo.jpg" alt="" srcset=""></a>
    </div>
    <div class="icon_box">
        <div class="icons_nav">
            <a href="#"><i class="fa fa-bell"></i></a>
            <form action="" method="post">
                <button type="submit" class="logout-btn" name="logout">
                    <i class="fa fa-right-from-bracket"></i>
                </button>
            </form>
        </div>
    </div>
    <div class="menu">
        <ul>
        <li class="menu_items"><a href="home.php" class="menu_items_links_active">Home</a></li>
            <li class="menu_items"><a href="#" class="menu_items_links">Users</a></li>
            <li class="menu_items"><a href="#" class="menu_items_links">Calander</a></li>
            <li class="menu_items"><a href="#" class="menu_items_links">Shedule</a></li>
            <li class="menu_items"><a href="#" class="menu_items_links">Pending requests</a></li>
            <!-- <li class="menu_items"><a href="#" class="menu_items_links">My profile</a></li> -->
        </ul>
    </div>
</div>