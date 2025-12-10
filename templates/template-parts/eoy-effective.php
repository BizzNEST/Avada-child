<section class="eoy-effective" id="workforce-launchpad">
   <div class="container">
        <div class="top-section">
            <header class="eoy-header">
                <?php
                $pieChart1 = ["Property 1=Variant3.png"];
                $path_pie =
                    "/wp-content/themes/Avada-child/assets/images/eoy-2025/Stars/";
                ?>
                <img src="<?php echo $path_pie .
                    rawurlencode(
                        $pieChart1[0],
                    ); ?>" alt="Star" class="header-image">
                <h1 class="header-title">A Workforce Launchpad</h1>
            </header>

            <div class="mobile-section">
                <div class="mobile-carousel">
                    <div class="carousel-track ef-track">
                        <div class="carousel-slide slide-1">
                            <p class = "nunito-sans">
                                Our BizzNEST Associates earn income and gain real-world experience that prepare them for the job market.
                                They also learn professional skills that are increasingly important for securing a job in a tight market.
                                Most importantly, they launch with a network of support. This is workforce development that works:
                            </p>
                        </div>

                        <div class="carousel-slide slide-2">
                            <?php
                            $topImages = ["pie-70.png"];
                            $pieImage =
                                "/wp-content/themes/Avada-child/assets/images/eoy-2025/Pie Charts/";
                            $pieSubText = [
                                "Feel like they belong to a <br>community invested in their success",
                            ];
                            $associateGroupImg = [
                                "effective-workforce-associate.png",
                            ];
                            $associatePath =
                                "/wp-content/themes/Avada-child/assets/images/eoy-2025/";
                            ?>
                            <div class = "pie-container">
                                <img src="<?php echo $pieImage .
                                    rawurlencode($topImages[0]); ?>"
                                alt="Pie Chart"
                                class="pie-70-top" />

                                <div class = "pie-subtext-container">
                                    <p><?echo $pieSubText[0]?></p>
                                </div>
                            </div>

                            <div class = "associate-img-container">
                                <img src="<?php echo $associatePath .
                                    rawurlencode($associateGroupImg[0]); ?>"
                                alt="Pie Chart"
                                class="bottom-associate-image" />
                            </div>
                        </div>

                        <div class="carousel-slide">
                            <?php
                            $pieData = [
                                [
                                    "percent" => 98,
                                    "text" => "Strengthened self awareness",
                                    "image" => "pie-98.png",
                                ],
                                [
                                    "percent" => 94,
                                    "text" =>
                                        "Improved critical thinking and adaptability",
                                    "image" => "pie-94.png",
                                ],
                                [
                                    "percent" => 75,
                                    "text" =>
                                        "Completed at least one technical certification",
                                    "image" => "pie-75.png",
                                ],
                            ];
                            $piePath =
                                "/wp-content/themes/Avada-child/assets/images/eoy-2025/Pie Charts/";
                            ?>

                            <?php foreach ($pieData as $pie): ?>
                                <div class="ef-pie-item">
                                    <img src="<?php echo $piePath .
                                        rawurlencode(
                                            $pie["image"],
                                        ); ?>" alt="<?php echo $pie[
    "percent"
]; ?>% Pie" class="ef-pie-chart">
                                    <div class="pie-text">
                                        <?php echo $pie["text"]; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                    <div class="carousel-pagination"></div>
                </div>
            </div>

            <div class="column-text">
                <div class="column-left nunito-sans" >
                    <p>
                        Our BizzNEST Associates earn income and gain real-world
                        experience that prepare them for the job market. They also
                        learn professional skills that are increasingly important
                        for securing a job in a tight market. Most importantly, they
                        launch with a network of support. This is workforce development
                        that works:
                    </p>
                </div>
                <div class="column-right nunito-sans">
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
                        $leftImages = ["pie-70.png"];
                        $piePath =
                            "/wp-content/themes/Avada-child/assets/images/eoy-2025/Pie Charts/";
                        $pieSubText = [
                            "Feel like they belong to a <br>community invested in their success",
                        ];
                        ?>
                        <img src="<?php echo $piePath .
                            rawurlencode($leftImages[0]); ?>"
                            alt="Pie Chart"
                            class="pie-70">

                    </div>

                    <div class="description70 nunito-sans">
                        <p class = "textDesc"><?php echo $pieSubText[0]; ?></p>
                    </div>
                </div>


                <div class = "associate">
                    <?php
                    $associateGroupImg = ["effective-workforce-associate.png"];
                    $associatePath =
                        "/wp-content/themes/Avada-child/assets/images/eoy-2025/";
                    ?>
                    <img src="<?php echo $associatePath .
                        rawurlencode(
                            $associateGroupImg[0],
                        ); ?>" alt = "Pie Chart" class = "overlay-image">

                </div>
            </div>
                <div class="right-section nunito-sans">
                    <?php
                    $rightImages = ["pie-98.png", "pie-94.png", "pie-75.png"];
                    $rightPath =
                        "/wp-content/themes/Avada-child/assets/images/eoy-2025/Pie Charts/";
                    $rightText = [
                        "Strengthened self-awareness",
                        "Improved critical thinking and adaptability",
                        "Completed at least one technical certification",
                    ];
                    ?>

                    <?php for ($i = 0; $i < count($rightImages); $i++): ?>
                        <div class="pie-text-wrapper">
                            <img src="<?php echo $rightPath .
                                rawurlencode($rightImages[$i]); ?>"
                                alt="Pie Chart"
                                class="pie-right">
                            <p class="pie-description"><?php echo $rightText[
                                $i
                            ]; ?></p>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
       </div>
   </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", () => {

    const targets = document.querySelectorAll(".bottom-section");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("in-view");
            } else {
                entry.target.classList.remove("in-view");
            }
        });
    }, {
        threshold: 0.3
    });

    targets.forEach(el => observer.observe(el));
});

</script>
