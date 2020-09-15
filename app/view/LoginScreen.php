<?php get_header(); ?>
<main class="LoginScreen">
    <section class="box_login">
        <div class="header">
            <span> 
                <i class="fas fa-user"></i> 
            </span>
            <h3>LOGIN - CREDENTIALS</h3>
        </div>
        <form action="" method="POST">
            <div class="line_input">
                <span class="icon">
                    <i class="fas fa-at"></i>
                </span>
                <input type="text" name="email_login" required placeholder="type your e-mail">
            </div>
            <div class="line_input">
                <span class="icon">
                    <i class="fas fa-user-lock"></i>
                </span>
                <input type="password" name="pass_login" required placeholder="type your password">
            </div>
            <input type="submit" name="logar" value="EXECUTE LOGIN">
        </form>
    </section>
    <small>VERSION 1.0.0.2020</small>
</main>
<?php get_footer(); ?>