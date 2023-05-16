<?php
include ('inc/services.php');
$data=$services -> get_Service();
for($i = 0; $i < count($data); $i++){
echo '<div class="col-lg-6 col-12">
    <div class="services-thumb section-bg mb-lg-3">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-12">
                <div class="services-image-wrap">
                    <a >
                        <img src="images/services/people-taking-care-office-cleaning.jpg" class="services-image img-fluid" alt="">
                        <img src="images/services/person-taking-care-office.jpg" class="services-image services-image-hover img-fluid" alt="">

                        <div class="services-icon-wrap">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="text-white mb-0">
                                    <i class="bi-cash me-2"></i>';
                                    echo '$'.$data[$i]->price;
echo'                                </p>

                                <p class="text-white mb-0">
                                    <i class="bi-clock-fill me-2"></i>';
                                    echo $data[$i]->duration;
echo '                                </p>
                            </div>                                                    
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-7 col-md-7 col-12 d-flex align-items-center">
                <div class="services-info mt-4 mt-lg-0 mt-md-0">
                    <h4 class="services-title mb-1 mb-lg-2">';
                        echo '<a class="services-title-link">'. $data[$i]->name_service.'</a>
                    </h4>';

                    echo '<p>'.$data[$i]->description_service.'</p>

                    <div class="d-flex flex-wrap align-items-center">
                        <div class="reviews-icons">';
                            $j = 0;
                            for($j; $j<$data[$i]->rating_service; $j++){
                                echo '<i class="bi-star-fill"></i>';
                            }
                            for($y = 0; $y<5-$data[$i]->rating_service; $y++){
                                echo '<i class="bi-star"></i>';
                            }
                        echo '</div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>';
}