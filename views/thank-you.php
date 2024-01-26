<?php include_once('includes/head.php')?>

<?php include_once('includes/header.php')?>

<section class="section1 d-flex h-100vh" style="margin: 200px 0;">
    <div class="container align-self-center">
        <div class="row">
            <div class="col-lg-12">
                <!-- <h1 class="first-color font-80 font-weight-bold"> -->
                <h1 class="first-color font-80 font-weight-bold text-center"><?php if(isset($_REQUEST['thanksMsg'])){ echo $_REQUEST['thanksMsg'];} ?></h1>
                <h1 class="first-color font-80 font-weight-bold text-center"><?php if(isset($_REQUEST['successMsg'])){ echo $_REQUEST['successMsg'];} ?></h1>
                        
                <!-- </h1> -->
                <!-- <button class="btn btn-theme" onclick="window.open('/','_self');">Go To Home</button> -->
                <div class="global_button">
                    <a href="/">Go To Home</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once('includes/footer.php')?>
