<?php
include 'header.tpl.php';
$email=filter_input(INPUT_COOKIE,'email');
$passwd=filter_input(INPUT_COOKIE,'passwd');
?>
                    <li>
                        <a href="?url=home">Home</a>
                    </li>
            </ul>
</nav>
        </header>
        <main class="dash1">
            <div class="text1">
                <h2 class="title">LOGIN SITE</h2>
                <p class="title">So you are a veteran user... very expert</p>
            </div>  
        </main>
        <br><br>
        <section>
            <h2>WELCOME!</h2>
            <div class="containerform">
            <form action="?url=login_action" method="post">
                <input class="inputext" type="text" name="email" placeholder="e-mail" value=<?php echo $email?>>
                <input class="inputext" type="password" name="passwd" placeholder="Password" value=<?php echo $passwd?>>
                <button class="button" type="submit">Login</button>
                
                <div class="remember">
                    Remember me <input type="checkbox" name="remind">
                </div>
                
            </form>
            </div>
            
        </section>
    </body>
</html>