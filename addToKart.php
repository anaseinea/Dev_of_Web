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
        
        <nav class="red">
            <div class="nav-wrapper container">
                <a href="index.php" class="brand-logo center"><img src="/Dev_of_Web/Pics/Logo.png" width="166" height="62"></a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="left hide-on-med-and-down">
                    <li><a href="About.html">About</a></li>
                    <!-- Dropdown Trigger -->
                </ul>
                
            </div>
        </nav>
        <div class="row container">
<?php 
            DEFINE ('DB_USER', 'root');
            DEFINE ('DB_PASSWORD', 'mypassword');
            DEFINE ('DB_HOST', 'localhost');
            DEFINE ('DB_NAME', 'products');
            $connection = mysqli_connect (DB_HOST, DB_USER, "", DB_NAME);
            $prods = $connection->query("SELECT * FROM products");
            session_start();
            $total = 0;
            
            if(isset($_GET['remove'])){
                $_SESSION['kart'] = str_replace($_GET['remove'],"",$_SESSION['kart']);
            }
            
            if(!isset($_SESSION['kart']))
                $_SESSION['kart']="";
            //print_r($_SESSION);
            
            for ($i =0;$i<mysqli_num_rows($prods) ; $i++){
                
                if(isset($_POST["check".$i])){
                    
                    $_SESSION['kart'] = $_SESSION['kart'].",".$i;
                    
            }
            
            }//$_SESSION['kart']=""; 
            
                $p = explode(",",$_SESSION['kart']);
                
                $prods2 = mysqli_fetch_all($prods,MYSQLI_ASSOC);
            //print_r($p);
                for($i=1; $i<count($p) ;$i++){
                    if($p[$i] == "")
                        continue;
                    //echo "index ".$p[$i];
                    $total += $prods2[$p[$i]]["price"];
                    echo "<div class='col s12'>" . "<div class='card horizontal'>" . "<div class='card-image'>"
                        . "<img style='height:130px;' src='/Dev_of_Web/Pics/".$prods2[$p[$i]]["image"]."'></div>"
                        . "<div class='card-stacked'><div class='card-content'><p>"
                        .  $prods2[$p[$i]]["descriptionS"]
                        . "</p><p class='right-align'>".$prods2[$p[$i]]["price"]." AED</p></div>"
                        ."<div class='card-action'>"
                        . "<a  href='addToKart.php?remove=".$p[$i]."' class='red-text center-align'>Remove item</a>"
                        . "</div></div></div></div>";
                }
                
                    
            $user = $connection->query("SELECT balance FROM users WHERE username='".$_SESSION['username']."'");

            $_SESSION['total'] = $total;
            $_SESSION['balance'] = mysqli_fetch_row($user)[0];
           
        
            echo "<p class='center-align'>Total amount: ".$total."<br/>Your balance: ".$_SESSION['balance']."</p>".
            "<form action='buyItemsInKart.php' method='post'>".
                "<button style='float: right;margin-top: 7;' class='waves-effect waves-light btn' type='submit' name='submit' >Checkout</button></form>";
                


?>
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
        
        
        
    </body>
</html>