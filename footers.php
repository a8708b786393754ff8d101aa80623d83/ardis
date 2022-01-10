<?php 
require_once 'conf.php'; 

$file = tree_file_config(); 

if (is_string($file)){
    echo '  <!-- footer  -->
        <footer class=" card-footer d-flex align-items-center ">
            <div class="container ">
                <div class="row ">
                    <div class="d-flex ">
                        <p class=" "> © 2021 Hotel ardis|Mention legale</p>
                        <p>| Email: hotel@ardis.com |  Numero mobile: 06 06 06 06 06</p>
                        <img src="assets/Images/Objet dynamique vectoriel.png " alt="logo_icone " height="30">
                    </div>
                </div>
            </div>
        </footer>   
    
    </body>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="https://kit.fontawesome.com/f8e0ca0321.js " crossorigin="anonymous "></script>
    </html>';
}else{
    echo '
    <!-- footer  -->
            <footer class=" card-footer d-flex align-items-center ">
                <div class="container ">
                    <div class="row ">
                        <div class="d-flex ">
                            <p class=" "> © 2021 Hotel ardis|Mention legale</p>
                            <p>| Email: hotel@ardis.com |  Numero mobile: 06 06 06 06 06</p>
                            <img src="../assets/Images/Objet dynamique vectoriel.png " alt="logo_icone " height="30">
                        </div>
                    </div>
                </div>
            </footer>   
        
        </body>
        <script src="../assets/js/bootstrap.bundle.js"></script>
        <script src="https://kit.fontawesome.com/f8e0ca0321.js " crossorigin="anonymous "></script>
        </html>';
    }


?>