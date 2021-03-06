<?php session_start(); $in = isset($_SESSION["username"]); ?>
<html>
    <head>
        <link href="css/materialize.min.css" rel="stylesheet">
        <link href="css/myCSS.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/materialize.min.js"></script>
        <script src="https://www.gstatic.com/firebasejs/3.9.0/firebase.js"></script>
    </head>

    <body>
        <ul id="dropdown1" class="dropdown-content">
            <li><a onclick="setTag('All')" href="index.php">All</a></li>
            <li class="divider"></li>
            <li><a onclick="setTag('Furniture')" href="index.php?tag=Furniture">Furniture</a></li>
            <li class="divider"></li>
            <li><a onclick="setTag('Printers')" href="index.php?tag=Printer">Printers</a></li>
            <li class="divider"></li>
            <li><a onclick="setTag('Notebooks')" href="index.php?tag=Notebook">Notebooks</a></li>
            <li class="divider"></li>
            <li><a onclick="setTag('Bags')" href="index.php?tag=Bag">Bags</a></li>
        </ul>
        
        <ul id="dropdown2" class="dropdown-content">
            <li><a onclick="setTag('All')" href="#!">All</a></li>
            <li class="divider"></li>
            <li><a onclick="setTag('Furniture')" href="#!">Furniture</a></li>
            <li class="divider"></li>
            <li><a onclick="setTag('Printers')" href="#!">Printers</a></li>
            <li class="divider"></li>
            <li><a onclick="setTag('Notebooks')" href="#!">Notebooks</a></li>
            <li class="divider"></li>
            <li><a onclick="setTag('Bags')" href="#!">Bags</a></li>
        </ul>
        
        <nav class="red">
            <div class="nav-wrapper container">
                <a href="index.php" class="brand-logo center"><img src="/Dev_of_Web/Pics/Logo.png" width="166" height="62"></a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="left hide-on-med-and-down">
                    <li><a href="About.html">About</a></li>
                    <!-- Dropdown Trigger -->
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Category<i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>
                
                <ul class="right hide-on-med-and-down">
                    <li><button id="loginModal" class="waves-effect modal-trigger waves-light red btn <?php if($in) echo "hide"; ?>" data-target="login">LOGIN</button></li>
                    <li><a id="registerModal" class="waves-effect modal-trigger waves-light red btn <?php if($in) echo "hide"; ?>" href="#register">Register</a></li>
                    <li><a href="logout.php" id="logout" class="waves-effect waves-light red btn <?php if(!$in) echo "hide"; ?>">LOGOUT</a></li>
                    <li><a onclick="" id="kart" class="waves-effect waves-light red btn <?php if(!$in) echo "hide"; ?>" data-target="modal2">Cart</a></li>
                </ul>
                
                <ul class="side-nav" id="mobile-demo">
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Category<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a id="loginModalm" class="waves-effect modal-trigger waves-light red btn <?php if($in) echo "hide"; ?>" href="#login">LOGIN</a></li>
                    <li><a id="registerModalm" class="waves-effect modal-trigger waves-light red btn <?php if($in) echo "hide"; ?>" href="#register">Register</a></li>
                    <li><a href="logout.php" id="logoutm" class="waves-effect waves-light red btn <?php if(!$in) echo "hide"; ?>">LOGOUT</a></li>
                    <li><a onclick="" id="kartm" class="waves-effect waves-light red btn <?php if(!$in) echo "hide"; ?>" data-target="modal2">Cart</a></li>
                    <li><a href="About.html">About</a></li>
                </ul>
            </div>
        </nav>
            
        <br/><div id="products" class="row container">
        <form action="addToKart.php" method="post">
        <?php 
        
        DEFINE ('DB_USER', 'root');
        DEFINE ('DB_PASSWORD', 'mypassword');
        DEFINE ('DB_HOST', 'localhost');
        DEFINE ('DB_NAME', 'products');
        $connection = mysqli_connect (DB_HOST, DB_USER, "", DB_NAME);
        $prods = $connection->query("SELECT * FROM products");
            $tag = "all";
            if(isset($_GET['tag']))
                $tag = $_GET['tag'];
        $i = -1;
        while($prods2 = mysqli_fetch_array($prods)){
                 //prompt(prods[1].name);
                    /*if(tag != 'all')
                        if(tag != prods[i].tag)
                            continue;*/
            $i++;
            if($tag != "all" && $tag != $prods2['tag'])
                continue;
            
                echo " <div class='col s12 m6 l4'><div class='card hoverable'>"
               ." <div class='card-image waves-effect waves-block waves-light'>"
                  ."<img class='activator' src='/Dev_of_Web/Pics/".$prods2["image"]
                      ."'>"

                    ."</div>"
                ."<div class='card-content'>"
                  ."<span class='card-title activator grey-text text-darken-4' style='font-size:1.2rem;'>".$prods2["descriptionS"]
                   . "<input type='checkbox' id='test".$i."' name='check".$i."' /><label style='float: right;' for='test".$i."'></label></span>"

                    ."<p style='color: orange;'>".$prods2["price"]." AED</p>"
                  ."</div><div class='card-reveal'>"
                  ."<span class='card-title grey-text text-darken-4'>Discription<i class='material-icons right'>close</i></span>"
                  ."<p>".$prods2["descriptionL"]."</p>"
               ." </div>"
             ." </div></div>";
            
                }
        ?>
            
        <div class="col s12 m12 l12"><button style="margin-top: 7;" class="waves-effect waves-light btn <?php if(!$in) echo "hide"; ?>" type="submit" name="submit" >Checkout</button></div>
        </form>
        </div>

        <!--<a class="waves-effect waves-light btn" href="#modal1">Modal</a> the modal trigger -->
        <!-- Modal Structure -->
        <div id="login" class="modal">
            <form action="login.php" method="post">
                <div class="modal-content" style="padding-bottom: 0px;">
                    <h5 style="text-align: center;">Please enter your credentials<br/></h5>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" name="email" type="email" class="validate" required>
                            <label for="email">Email</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" name="password" type="password" class="validate" required>
                            <label for="password">Password</label>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" style="margin-right:25px; margin-bottom:25px" class="modal-action waves-effect waves-light red btn">LOGIN</button>
                </div>
            </form>
        </div>
        <div id="register" class="modal">
            <form action="register.php" method="post">
                <div class="modal-content" style="padding-bottom: 0px;">
                    <h5 style="text-align: center;">Register your new account<br/></h5>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="username" name="username" type="text" class="validate" required>
                            <label for="username">Username</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="reg_email" name="email" type="email" class="validate" required>
                            <label for="reg_email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="balance" name="balance" type="number" class="validate" required>
                            <label for="balance">Balance</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="reg_password" name="password" type="password" class="validate" required>
                            <label for="reg_password">Password</label>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" style="margin-right:25px; margin-bottom:25px" class="modal-action waves-effect waves-light red btn">Register</button>
                </div>
            </form>
        </div>
        
        <div id="modal2" class="modal modal-fixed-footer">
            <div id="kartModal" class="modal-content row container"></div>
                <div class="modal-footer">
                    <a onclick="buyAll()" href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Checkout</a>
                    <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Cancel</a>
                </div>
            </div>
        
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col l4  s12">
                    <h5 class="white-text">Resources</h5>
                    <ul>
                        <li><a class="white-text" href="http://materializecss.com/">&ensp;&ensp;● Materialize</a></li>
                        <li><a class="white-text" href="http://github.com/">&ensp;&ensp;● GitHub</a></li>
                        <li><a class="white-text" href="http://stackoverflow.com/">&ensp;&ensp;● Stack Overflow</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
        
<script>
$( document ).ready(function(){
    $(".button-collapse").sideNav();
    $('.modal').modal({startingTop: '40%', endingTop: '10%'});
})
</script>
        
    </body>
</html>