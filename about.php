<link rel="stylesheet" href="about.css">
<div class="col-24 my-5" style="height: 1250px">
    <div class="row-12 my-5 ">
        <div class="col-md-12 about-cont">
            <div class="card rounded-0 card-outline card-green shadow" ">
                <div class="card-body rounded-0">
                    <h2 class="text-center">About</h2>
                    <center><hr class="bg-navy border-navy w-25 border-2"></center>
                    <div>
                        <center>
                        <?= file_get_contents("about_us.html") ?>
                        </center>
                        
                    </div>
                    <h2 class="text-center">Contact</h2>
                    <center><hr class="bg-navy border-navy w-25 border-2"></center>
                    <div class="card-body rounded-0">
                    <dl class="cont-info">
                        <center>
                            <dt class="text-muted"><i class="fa fa-envelope"></i> Email</dt>
                            <dd class="pr-4"><?= $_settings->info('email') ?></dd>
                            <dt class="text-muted"><i class="fa fa-phone"></i> Contact #</dt>
                            <dd class="pr-4"><?= $_settings->info('contact') ?></dd>
                            <dt class="text-muted"><i class="fa fa-map-marked-alt"></i> Location</dt>
                            <dd class="pr-4"><?= $_settings->info('address') ?></dd>
                        </center>
                    </dl>
                </div>
                </div>
            </div>
        </div>
    </div>
        <div class="container">
            <center>
                <h1 class="meet" style="font-weight: 600">MEET OUR TEAM</h1>  
            </center>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="creator-card card h-80">
                    <center>
                        <div class="card-header">
                            <img src="./uploads/Juswa.jpg" alt="">
                        </div>
                        <div class="card-body">
                                <p><strong>ARAMBULO, JOSHUA</strong></p>
                                <p><i>BSIT</i></p>
                                <p>BATCH 2024</p>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3">
                <div class="creator-card card h-80">
                    <center>
                        <div class="card-header">
                            <img src="./uploads/Jade.jpg" alt="">
                        </div>
                        <div class="card-body">
                            <p><strong>DACOROON, JADE MAUREEN</strong></p>
                            <p><i>BSIT</i></p>
                            <p>BATCH 2024</p>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3">
                <div class="creator-card card h-80">
                    <center>
                        <div class="card-header">
                            <img src="./uploads/Anne.png" alt="">
                        </div>
                        <div class="card-body">
                            <p><strong>EBRO, ANNE GELINE</strong></p>
                            <p><i>BSIT</i></p>
                            <p>BATCH 2024</p>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3">
                <div class="creator-card card h-80">
                    <center>
                        <div class="card-header">
                            <img src="./uploads/Pablo.jpg" alt="">
                        </div>
                        <div class="card-body">
                            <p><strong>LUCAS, PABLO III</strong></p>
                            <p><i>BSIT</i></p>
                            <p>BATCH 2024</p>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>

</div>