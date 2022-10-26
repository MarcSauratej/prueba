<?php
include 'header.tpl.php';

?>
                    <li>
                        <a href="?url=home">Home</a>
                    </li>
                    <li>
                        <a href="?url=login">Logout</a>
                    </li>
            </ul>
</nav>
        </header>
        <main class="dash2">
            <div class="text1">
                <h2 class="title">WELCOME IN YOUR SITE</h2>
                <p class="title">For beautiful people. Just like you are</p>
            </div>  
        </main>
        <br><br>
        <section class="dsection">
            <div class="content">
                <h2 id='welcome' >Welcome aboard <?= $_SESSION['username'];  ?>!</h2>
                <h3>CUSTOMIZE YOUR SITE</h3>
                <div class="breadcrumb">
                <div><a href="?url=home">Home</a> > <a href="?url=home">Dashboard</a></div>
                <button class="button"onclick="myFunction()">Toggle dark mode</button>
                <button class="button"id="bt0">delete cookie</button>
            </div>
        <br>
        <section class='dashboard'>
            
        </section>
            <button id="u">USELESS BUTTON</button>
              <h2 id="lastLogin">Ultima Sesion: </h2>
            </div>
        </section>

  <script>
    //Esta función funciona en localhost (dark mode)
   function myFunction() {
     var element = document.body;
     element.classList.toggle("dark-mode");
    }

    
    //ultima sesion
    let clock =document.getElementById("lastLogin");
    let u= document.getElementById("u");
    
    u.addEventListener("click",function(){
            <?php  $login = date('m-d-Y h:i:s a', time()); $lastlogin;?>
            alert('<?php echo $login ?>');
         });

    clock.innerHTML= '<?php echo $login ?>';
//CUIDADO QUE PETA(no se si peta pero probar si boton borra todas las cookies)
      
let bt0=document.getElementById("bt0");
      bt0.addEventListener('click',function() {
        alert('Las cookies se borraran cuando hagas logout :)');
        document.cookie = "email=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        document.cookie = "passwd=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    });
      

</script>
</body>
</html>