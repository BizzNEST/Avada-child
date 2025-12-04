<section class="eoy-effective">
   <div class="container">
        <div class="top-section">
            <header class="eoy-header">
                <?php
                    $pieChart1 = array('Property 1=Variant3.png');
                    $path_pie = '/wp-content/themes/Avada-child/assets/images/eoy-2025/Stars/';
                ?>
                <img src="<?php echo $path_pie . rawurlencode($pieChart1[0]); ?>" alt="Star" class="header-image">
                <h1 class="header-title">A Workforce Launchpad</h1>
            </header>
            
        <!-- Carousel Template -->
        <section class='carousel-container'>
            <div class='carousel-scroller'>
                <article class='carousel-card first-card'>
                    <p class='nunito-sans'>
                        Our BizzNEST Associates earn income and gain real-world experience that prepare them for the job market.
                        They also learn professional skills that are increasingly important for securing a job in a tight market.
                        Most importantly, they launch with a network of support. This is workforce development that works:
                    </p>
                </article>
                <article class='carousel-card'>
                    <div class='card-image'>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/eoy-2025/Confidence & Agency Pics/Image.png" alt="Students with a laptop">
                    </div>
                    <div class='card-content'>
                        <h2 class='ibm-plex-sans'>47%</h2>
                        <p class='nunito-sans'>Can find helpful and accurate information about careers they are interested in</p>
                    </div>
                </article>
                <article class='carousel-card'>
                    <div class='card-image'>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/eoy-2025/Confidence & Agency Pics/Image (1).png" alt="Students with a laptop">
                    </div>
                    <div class='card-content'>
                        <h2 class='ibm-plex-sans'>55%</h2>
                        <p>Can define their ideal worklife balance</p>
                    </div>
                </article>
            </div>

        </section>






            <!-- <div class = "scroller-container">
                <article class = "scroller" >
                    <section class = "mobile-container">
                        <p>
                            Our BizzNEST Associates earn income and gain real-world experience that prepare them for the job market.
                            They also learn professional skills that are increasingly important for securing a job in a tight market.
                            Most importantly, they launch with a network of support. This is workforce development that works:
                        </p>
                    </section>
                    
                    
                    <section class = "mobile-container2">
                        <?php 
                            $topImages = array('pie-70.png');
                            $piePathtop = '/wp-content/themes/Avada-child/assets/images/eoy-2025/Pie Charts/';
                            $leftText = array('Feel like they belong to a <br>community invested in their success');
                            $associateLeft = array('effective-workforce-associate.png');
                            $associatePath = '/wp-content/themes/Avada-child/assets/images/eoy-2025/'                            
                        ?>
                        <div class = "topPie">
                            <img src="<?php echo $piePathtop . rawurlencode($topImages[0]); ?>" 
                            alt="Pie Chart" 
                            class="pie-70-top">
                            <div class = "top-text-container">
                                <p class = "top-text"><?echo $leftText[0]?></p>
                            </div>
                        </div>
                        
                        <div class = "bottom-associate">
                            <img src="<?php echo $associatePath . rawurlencode($associateLeft[0]); ?>" 
                            alt="Pie Chart" 
                            class="bottom-associate-image">
                        </div>

                    </section>
                    
                <section class="mobile-container4">
                            <?php 
                                $pieData = [
                                    ['percent' => 98, 'text' => 'Strengthened self awareness', 'image' => 'pie-98.png'],
                                    ['percent' => 94, 'text' => 'Improved critical thinking and adaptability', 'image' => 'pie-94.png'],
                                    ['percent' => 75, 'text' => 'Completed at least one technical certification', 'image' => 'pie-75.png'],
                                ];
                                $piePath = '/wp-content/themes/Avada-child/assets/images/eoy-2025/Pie Charts/';
                            ?>

                            <?php foreach($pieData as $pie): ?>
                                <div class="pie-item">
                                    <img src="<?php echo $piePath . rawurlencode($pie['image']); ?>" alt="<?php echo $pie['percent']; ?>% Pie" class="pie-chart">
                                    <div class="pie-text">
                                        <?php echo $pie['text']; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?> 
                        
                    </section>
                </article>
            </div> -->
            <div class="mobile-dots">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
            
            
            
            <div class="column-text">
                <div class="column-left">
                    <p>
                        Our BizzNEST Associates earn income and gain real-world 
                        experience that prepare them for the job market. They also 
                        learn professional skills that are increasingly important 
                        for securing a job in a tight market. Most importantly, they 
                        launch with a network of support. This is workforce development 
                        that works:
                    </p>
                </div>
                <div class="column-right">
                    <ul>
                        <li>70% say they belong to a community/group of people who care about their future</li>
                        <li>98% strengthened their self-awareness skills</li>
                        <li>94% improved critical thinking and problem solving</li>
                        <li>91% are more confident learning new things</li>
                        <li>72% know how to prepare for a job/future career</li>
                        <li>70% belong to a community invested in their success</li>
                    </ul>
                </div>
            </div>
      


       <div class="bottom-section">
            <div class = "left-section">
                <div class="left-pie-wrapper">
                    <div class="left-pie">
                        <?php 
                            $leftImages = array('pie-70.png');
                            $piePath = '/wp-content/themes/Avada-child/assets/images/eoy-2025/Pie Charts/';
                            $leftText = array('Feel like they belong to a <br>community invested in their success');
                        ?>
                        <img src="<?php echo $piePath . rawurlencode($leftImages[0]); ?>" 
                            alt="Pie Chart" 
                            class="pie-70">

                    </div>
                    
                    <div class="description70">
                        <p class = "textDesc"><?php echo $leftText[0] ?></p>
                    </div>
                </div>
                
                
                <div class = "associate">
                    <?php 
                        $associateLeft = array('effective-workforce-associate.png');
                        $associatePath = '/wp-content/themes/Avada-child/assets/images/eoy-2025/'
                    ?>
                    <img src="<?php echo $associatePath . rawurlencode($associateLeft[0]); ?>" alt = "Pie Chart" class = "overlay-image">

                </div>
            </div>
                <div class="right-section">
                    <?php 
                        $rightImages = array('pie-98.png', 'pie-94.png', 'pie-75.png');
                        $rightPath = '/wp-content/themes/Avada-child/assets/images/eoy-2025/Pie Charts/';
                        $rightText = array(
                            'Strengthened self-awareness',
                            'Improved critical thinking and adaptability',
                            'Completed at least one technical certification'
                        );
                    ?>

                    <?php for ($i = 0; $i < count($rightImages); $i++) : ?>
                        <div class="pie-text-wrapper">
                            <img src="<?php echo $rightPath . rawurlencode($rightImages[$i]); ?>" 
                                alt="Pie Chart" 
                                class="pie-right">
                            <p class="pie-description"><?php echo $rightText[$i]; ?></p>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
       </div>
   </div>
</section>