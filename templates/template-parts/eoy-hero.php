<section class="eoy-hero">
    <div class="container">
        <div class='hero-marquee'>
            <div class='marquee-col'>
                <div class='marquee-images1'>
                    <?php
                    $images1 = array('Tile Card.png', 'Tile Card-1.png', 'Tile Card-2.png', 'Tile Card-3.png');
                    $folder_path = '/assets/images/eoy-2025/Tile Cards/';
        
                    for ($i=0; $i < 2; $i++) { 
                        foreach ($images1 as $img) {
                            $full_image_uri = get_stylesheet_directory_uri() . $folder_path . $img;
                            ?>
                            <img src="<?php echo esc_url( $full_image_uri ); ?>" alt="">
                            <?php
                        }
                    }
                ?>
                </div>
            </div>
            <div class='marquee-col'>
                <div class='marquee-images2'>
                    <?php
                    $images2 = array('Tile Card-4.png', 'Tile Card-5.png', 'Tile Card-6.png', 'Tile Card-7.png');
                    $folder_path = '/assets/images/eoy-2025/Tile Cards/';
        
                    for ($i=0; $i < 2; $i++) { 
                        foreach ($images2 as $img) {
                            $full_image_uri = get_stylesheet_directory_uri() . $folder_path . $img;
                            ?>
                            <img src="<?php echo esc_url( $full_image_uri ); ?>" alt="">
                            <?php
                        }
                    }
                ?>
                </div>
            </div>
        </div>
        <div class="hero-description">
            <h2>Your impact in 2025</h2>
            <p>
                This is a pivotal time for Digital NEST. As we equip young people with 
                the power to reshape their futures and create economic prosperity for 
                families, we will become a national model for workforce development 
                and sustain our presence for generations to come.
            </p>
            <button class='btn-donation'>DONATE NOW</button>
        </div>
    </div>
</section>