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
            <div class = "mobile-container" style="display:none">
                <p>
                    Our BizzNEST Associates earn income and gain real-world experience that prepare them for the job market.
                    They also learn professional skills that are increasingly important for securing a job in a tight market.
                    Most importantly, they launch with a network of support. This is workforce development that works:
                </p>
            </div>
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
                <div class = "left-pie">
                    <?php 
                        $leftImages = array('pie-70.png');
                        $piePath = '/wp-content/themes/Avada-child/assets/images/eoy-2025/Pie Charts/';
                    ?>
                    <img src="<?php echo $piePath . rawurlencode($leftImages[0]); ?>" alt = "Pie Chart" class = "pie-70">
                
                </div>
                <div class = "associate">
                    <?php 
                            $associateLeft = array('effective-workforce-associate.png');
                            $associatePath = '/wp-content/themes/Avada-child/assets/images/eoy-2025/'
                    ?>
                    <img src="<?php echo $associatePath . rawurlencode($associateLeft[0]); ?>" alt = "Pie Chart" class = "overlay-image">

                </div>
            </div>
            <div class = "right-section">
                <?php 
                    $rightImages = array('pie-98.png', 'pie-94.png', 'pie-75.png');
                    $rightPath = '/wp-content/themes/Avada-child/assets/images/eoy-2025/Pie Charts/';
                ?>
                <img src="<?php echo $rightPath . rawurlencode($rightImages[0]); ?>" alt = "Pie Chart" class = "pie-right">
                <img src="<?php echo $rightPath . rawurlencode($rightImages[1]); ?>" alt = "Pie Chart" class = "pie-right">
                <img src="<?php echo $rightPath . rawurlencode($rightImages[2]); ?>" alt = "Pie Chart" class = "pie-right">
            </div>
       </div>
   </div>
</section>

