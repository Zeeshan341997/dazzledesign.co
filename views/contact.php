<?php include_once('includes/head.php')?>

<style>
    .logo a img {
        width: 100%;
        filter: brightness(0) invert(1);
    }

    .navbar-light .navbar-nav .nav-link {
        color: #fff;
    }
</style>

<?php include_once('includes/header.php')?>

<section class="contact_header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact_hd_inner">
                    <ul>
                        <li><a href="/" class="logo"><img src="../assets/images/white_logo.png" alt=""></a></li>
                        <li class="mover"><img src="../assets/images/vector.png" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="contact_inner">
                    <h2>WANNA CHAT OVER ?</h2>
                    <form action="/form-lead/" method="POST">
                        <div class="inner_form_contact">
                            <input type="text" name="name" placeholder="Name" required>
                            <input type="number" name="phone" placeholder="Phone Number" required>
                        </div>
                        <input type="email" name="email" placeholder="Email" required>
                        <textarea name="biref" placeholder="Project Details"></textarea>
                        <input type="submit" name="send" value="Lets Get Started">
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact_side">
                    <div class="inner_sider">
                        <h2>GIve US A CAll?</h2>
                        <p><a href="tel:+447456695643">+44 7456 695643</a></p>
                    </div>
                    <div class="inner_sider">
                        <h2>Write to us?</h2>
                        <p><a href="mailto:contact@dazzledesign.co">contact@dazzledesign.co</a></p>
                    </div>
                    <div class="inner_sider">
                        <h2>Come and see us!</h2>
                        <p><a href="/" targe="_blank">61 Queen St Pl, Greater, London EC4R 1EB, United Kingdom</a></p>
                        <!-- <p><a href="/" targe="_blank">61 Queen St Pl, Greater, London EC4R 1EB, United Kingdom</a></p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once('includes/footer.php')?>
