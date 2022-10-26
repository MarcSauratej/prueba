<?php
include 'header.tpl.php';
?>
                    <li>
                        <a href="?url=home">Home</a>
                    </li>
            </ul>
</nav>
        </header>
        <main class="dash3">
            <div class="text1">
                <h2 class="title">THIS IS YOUR MOMENT</h2>
                <p class="title">Every great design starts with a great register</p>
            </div>  
        </main>
        <br><br>
        <section>
            <h2>SIGN UP FOR FREE</h2>
            <div class="containerform">
                <form action="?url=register_action" method="post">
                    <input class="inputext" type="text" name="username" placeholder="Nombre de usuario" />
                    <input class="inputext" type="password" name="passwd" placeholder="Password" />
                    <input class="inputext" type="email" name="email" placeholder="Email" />
                    <input class="button" type="submit" value="Registrarse" />
                </form>

            </div>
            
        </section>
    </body>
</html>