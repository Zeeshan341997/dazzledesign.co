<?php include_once('includes/head.php')?>

<?php include_once('includes/header.php')?>

<section class="section1 d-flex h-100vh" style="margin-top: 200px;">
    <div class="container align-self-center">
        <div class="row">
            <div class="col-lg-12">
                <!-- <h1 class="first-color font-80 font-weight-bold"> -->
                <h1 class="first-color font-80 font-weight-bold"><?php if(isset($_REQUEST['thanksMsg'])){ echo $_REQUEST['thanksMsg'];} ?></h1>
                <h1 class="first-color font-80 font-weight-bold"><?php if(isset($_REQUEST['successMsg'])){ echo $_REQUEST['successMsg'];} ?></h1>
                        
                <!-- </h1> -->
                <button class="btn btn-theme" onclick="window.open('/','_self');">Go To Home</button>
            </div>
        </div>
    </div>
</section>

<?php include_once('includes/footer.php')?>
