<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/26514c4d86.js" crossorigin="anonymous"></script>
    <style>
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family:inherit;
      }
      body{
        position: relative;
        min-height: 100vh;
        width: 100%;
        overflow: hidden;
        background-color: #BCCEF8;
      }
      .sidebar{
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 78px;
        background: #3C4048;
        padding: 6px 14px;
        transition: all 0.5s ease;
      }
      .sidebar.active{
        width: 240px;
      }
      .sidebar .logo_content .logo{
        color: white;
        display: flex;
        height: 50px;
        width: 100%;
        align-items: center;
        opacity: 0;
        pointer-events: none;
        transition: all 0.5s ease;
      }
      .sidebar.active .logo_content .logo{
        opacity: 1;
        pointer-events: none;
      }
      .logo_content .logo i{
        font-size: 25px;
        margin-right: 5px;
      }
      .logo_content .logo .logo_name{
        font-size: 20px;
        font-weight: 400;
      }
      .sidebar #btn{
        position: absolute;
        color: red;
        top: 6px;
        left: 50%;
        font-size: 20px;
        height: 50px;
        width: 50px;
        text-align: center;
        line-height: 50px;
        transform: translateX(-50%);
      }
      .sidebar.active #btn{
        left: 90%;
      }
      .sidebar ul{
        margin-top: 20px;
      }
      .sidebar ul li{
        position: relative;
        height: 50px;
        width: 100%
        margin: 0 5px;
        list-style: none;
        line-height: 50px
      }
      .sidebar ul li .tooltip{
        position: absolute;
        height: 35px;
        width: 122px;
        left: 122px;
        top: 0;
        transform: translate(-50%,-50%);
        border-radius: 6px;
        line-height:  35px;
        text-align: center;
        /* background: white; */
        color: white;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        transition: 0s;
        opacity: 0;
        pointer-events: none;
      }
      .sidebar.active ul li .tooltip{
        display: none;
      }
      .sidebar ul li:hover .tooltip{
        transition: all 0.5s ease;
        top: 50%;
        opacity: 1;
        background-color: black;
      }


      .sidebar ul li a{
        color: white;
        display: flex;
        align-items: center;
        text-decoration: none;
        border-radius: 12px;
        white-space: nowrap;
      }
        .sidebar ul li a:hover{
          color: red;
          background: white;
        }
        .sidebar .links_name{
          opacity: 0;
          pointer-events: none;
        }
        .sidebar.active .links_name{
          opacity: 1;
          pointer-events: auto;
        }
        .sidebar ul li a i{
          height:  50px;
          min-width: 50px;
          border-radius: 12px;
          line-height: 50px;
          text-align: center;
      }
      .content{
        position: absolute;
        height: 100%;
        /* width: calc(100% -240px); */
        left: 78px;
        width: calc(100% -78px);
        transition: all 0.5s ease;
      }
      .sidebar.active ~ .content{
        width: calc(100% -240px);
        left: 240px;
      }
      .content .text{
        font-size: 25px;
        font-weight: 500;
        color:  black;
        margin: 12px;
      }
    </style>
  </head>
  <body>
    <div class="sidebar">
      <div class="logo_content">
        <div class="logo">
          <i class='bx bx-user-circle'></i>
          <div class="logo_name"> Customer </div>
        </div>
        <i class="fa-solid fa-bars" id="btn"></i>
      </div>
       <ul class="nav_list">
         <li>
           <a href="customerMenu.php"><i class='bx bx-food-menu'></i>
           <span class="links_name">Menu</span>
           </a>
           <span class="tooltip">Menu</span>
         </li>
         <li>
           <a href="customerCart.php"><i class="fa-solid fa-cart-shopping"></i></i>
           <span class="links_name">Cart</span>
           </a>
           <span class="tooltip">Cart</span>
         </li>
         <li>
           <a href="customerOrderslist.php"><i class='bx bxs-user-detail'></i>
           <span class="links_name">Order Details</span>
           </a>
           <span class="tooltip">Order Details</span>
         </li>
         <li>
           <a href="customerFeedback.php"><i class='bx bx-message-dots'></i>
           <span class="links_name">Feedback</span>
           </a>
           <span class="tooltip">Feedback</span>
         </li>
         <li>
           <a href="samplefeedback.php"><i class='bx bx-list-ul' ></i>
           <span class="links_name">Feedback List</span>
           </a>
           <span class="tooltip">Feedback List</span>
         </li>
         <br>
         <li>
           <a href="login.php"><i class='bx bx-log-out' ></i>
           <span class="links_name">Logut</span>
           </a>
           <span class="tooltip">Logout</span>
         </li>
       </ul>

    </div>




    <div class="content">
      <div class="text">
         <h1>Web Based Ordering Management System </h1>
         <br>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
           Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
             Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
               Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <br>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                 Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                   Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>

    </div>
    <script>
      let btn = document.querySelector("#btn");
      let sidebar = document.querySelector(".sidebar");

    btn.onclick = function(){
      sidebar.classList.toggle("active");
    }

    </script>
  </body>
</html>
