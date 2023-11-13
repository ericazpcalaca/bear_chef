<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BC - Bear Chefs</title>
    <link rel="stylesheet" href="css/style_index.css">
</head>
<body>
    <!-- ======== START OF THE NAV MENU ======== -->
    <header>
        <a href="index.php" class="logo">Logo</a>
        <div class="group">
            <ul class="navigation">
                <li><a href="login_form.php">Login</a></li>
                <li><a href="register.php">Sign In</a></li>
            </ul>
            <div class="search">
                <span class="icon">
                    <ion-icon name="search-outline" class="searchBtn"></ion-icon>
                    <ion-icon name="close-outline" class="closeBtn"></ion-icon>
                </span>
            </div>
            <ion-icon name="menu-outline" class="menuToggle"></ion-icon>
        </div>
        <div class="searchBox">
            <input type="text" placeholder="Search here...">
        </div>
    </header>
    

    <!-- Import the menu the icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script>
        // Click on the search button
        let searchBtn = document.querySelector('.searchBtn');
        let closeBtn = document.querySelector('.closeBtn');
        let searchBox = document.querySelector('.searchBox');
        
        // Hide menu to make the screen responsible
        let navigation = document.querySelector('navigation');
        let menuToggle = document.querySelector('.menuToggle');
        let header = document.querySelector('header');
 
        searchBtn.onclick = function(){
            searchBox.classList.add('active');
            closeBtn.classList.add('active');
            searchBtn.classList.add('active');
            menuToggle.classList.add('hide');
        }

        closeBtn.onclick = function(){
            searchBox.classList.remove('active');
            closeBtn.classList.remove('active');
            searchBtn.classList.remove('active');
            menuToggle.classList.remove('hide');
        }

        menuToggle.onclick = function(){
            header.classList.toggle('open');
            searchBox.classList.remove('active');
            closeBtn.classList.remove('active');
            searchBtn.classList.remove('active');
        }

    </script>
    <!-- ======== END OF THE NAV MENU ======== -->
    
    <div class="container">
        
    </div>
</body>
</html>