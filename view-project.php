<?php
    include('inc/header.php');

    $pid = $_GET['pid'];
?>

	<main class="main">
    
        <section id="project" class="project section">
        
            <div class="container">
            
                <div class="row">
                    <div class="col-lg-7 mx-auto p-3">
                    
                        <div class="project-content">
                            <div class="go-back mt-2 px-0" data-aos="fade-right" data-aos-delay="0">
                                <a class="text-decoration-none text-black-50 back" href="index.php" style="font-size:0.8rem;"><i class="fa-solid fa-arrow-left mr-1"></i> Go Back</a>
                            </div>
							<?php
                                $sql = "SELECT * FROM projects WHERE projectID = '$pid'";
                                $result = mysqli_query($conn,$sql);
                                if($row = mysqli_fetch_assoc($result)){
                            ?>
                            <div class="project-title my-4 px-0">
                                <div class="col-md-8 px-0" data-aos="fade-right" data-aos-delay="0">
                                    <h2 class=""><?php echo $row['name']; ?></h2>
                                </div>
                                <div class="col-md-4 px-0" data-aos="fade-left" data-aos-delay="100">
                                    <a class="btn align-content-center" type="button" href="<?php echo $row['link']; ?>" target="_new">Live Website <i class="fa-solid fa-link ml-2" style="font-size:0.75rem;"></i></a>
                                </div>
                            </div>
                            <div class="project-grid mt-5 align-content-center" data-aos="fade-up" data-aos-delay="0">
                                <img class="mx-auto d-block" src="assets/<?php echo $row['pic1']; ?>" width="95%" height="310px">
                            </div>
                        
                            <div class="project-overview mt-5 pt-3" data-aos="fade-up" data-aos-delay="100">
                                <h3 class="">Project Overview</h3>
                                <p class="mt-3"><?php echo $row['descr'] . " " . $row['goal']; ?></p>
                            
                
                                <div class="overview-box align-content-center p-0" data-aos="fade-up" data-aos-delay="200">
                                    <img class="mx-auto d-block" src="assets/<?php echo $row['pic2']; ?>" width="75%" height="250px">
                                </div>
                            </div>
                
                            <div class="project-solution mt-5 pt-3" data-aos="fade-up" data-aos-delay="300">
                                <h3 class="">Solution</h3>
                                <p class="mt-3"><?php echo $row['solution']; ?></p>
                
                                <div class="d-flex mt-5">
                                    <div class="col-md-8 px-0" data-aos="fade-right" data-aos-delay="0">
                                        <div class="solution-box align-content-center">
                                            <img class="mx-auto d-block" src="assets/<?php echo $row['pic3']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4" data-aos="fade-left" data-aos-delay="0">
                                        <div class="info-box p-0">
                                            <img class="mt-4" src="assets/<?php echo $row['pic4']; ?>" width="75%" height="236px">
                                        </div>
                                    </div>
                                </div>
                            </div>
							<?php
                                }
                            ?>
                        </div>
                    
                    </div>
                </div>
            
            </div>
        
        </section>


<?php
    include('inc/footer.php');
?>