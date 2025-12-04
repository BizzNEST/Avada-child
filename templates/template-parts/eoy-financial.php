<section class="eoy-financial">
    <div class="container">
        <div class="financial-heading">
            <div class="financial-image"><img src="<?= get_stylesheet_directory_uri() ?>/assets/images/eoy-2025/Stars/financial-star.png" alt="Financial Efficiency Section 4"></div>
            <div class="financial-title"><h2 class="ibm-plex-sans">Financial Efficiency</h2></div>
        </div>
        <div class="financial-text">
            <p class="nunito-sans">Your dollar goes farther at the NEST. 88% of all funding directly supports our programs. The remaining 12% ensures an enduring ecosystem in our communities by providing the necessary financial, human resources, and investments, and digital infrastructure support. </p>
        </div>
        <div class="financial-chart-section">
            <div class="financial-chart-text scroll-anim">
                <div class="hover-text-wrapper">
                    <h3><span class="financial-chart-amount">88¢</span> of every dollar goes to:</h3>
                    <ul class="financial-chart-list nunito-sans">
                        <li>Mentor Programs</li>
                        <li>Workshops</li>
                        <li>BizzNEST</li>
                        <li>Data & Evaluation</li>
                        <li>Technical Skills</li>
                        <li>Networking Events</li>
                        <li>Alumni Services</li>
                        <li>Career Navigation</li>
                        <li>Laptops, Software & Equipment</li>
                        <li>Professional Skills</li>
                        <li>Free snacks</li>
                        <li>High-speed Internet</li>
                    </ul>
                </div>
            </div>
            <div class="financial-pie-chart">
                <div class="pie-chart">
                    <div class="pie-segment programs" data-percentage="88"></div>
                    <div class="pie-segment operations" data-percentage="12"></div>
                    <span class="pie-percentage nunito-sans">88%</span>
                    <span class="pie-percentage-12 nunito-sans">12%</span>
                </div>
            </div>
        </div>
        <div class="mobile-section">
            <div class="mobile-carousel">
                <div class="carousel-track">
                    <!-- Slide 1 - Copy this entire div to add more slides -->
                    <div class="carousel-slide">
                        <h3>Your Content Here</h3>
                        <p class="nunito-sans">Add your content for slide 1</p>
                    </div>
                    
                    <!-- Slide 2 - Copy this entire div to add more slides -->
                    <div class="carousel-slide">
                        <h3>Your Content Here</h3>
                        <p class="nunito-sans">Add your content for slide 2</p>
                    </div>
                    
                    <!-- Slide 3 - Copy this entire div to add more slides -->
                    <div class="carousel-slide">
                        <h3>Your Content Here</h3>
                        <p class="nunito-sans">Add your content for slide 3</p>
                    </div>
                </div>
                <div class="carousel-pagination"></div>
            </div>
        </div>
    </div>
</section>

<script>
    // Pie chart scroll animation
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
            } else {
                entry.target.classList.remove('in-view');
            }
        });
    }, {
        threshold: 0.4
    });
    
    const financialSection = document.querySelector('.financial-chart-section');
    
    if (financialSection) {
        observer.observe(financialSection);
    }

    // Mobile carousel functionality
    const carouselContainer = document.querySelector('.mobile-carousel');
    const carousel = document.querySelector('.carousel-track');
    const slides = document.querySelectorAll('.carousel-slide');
    const pagination = document.querySelector('.carousel-pagination');
    
    if (carouselContainer && carousel && slides.length > 0 && pagination) {
        // Create pagination dots
        slides.forEach((_, index) => {
            const dot = document.createElement('button');
            dot.classList.add('pagination-dot');
            if (index === 0) dot.classList.add('active');
            dot.addEventListener('click', () => {
                slides[index].scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
            });
            pagination.appendChild(dot);
        });
        
        const dots = document.querySelectorAll('.pagination-dot');
        
        // Update active dot on scroll based on which slide is centered
        carouselContainer.addEventListener('scroll', () => {
            const containerCenter = carouselContainer.scrollLeft + carouselContainer.offsetWidth / 2;
            
            let closestIndex = 0;
            let closestDistance = Infinity;
            
            slides.forEach((slide, index) => {
                const slideCenter = slide.offsetLeft + slide.offsetWidth / 2;
                const distance = Math.abs(containerCenter - slideCenter);
                
                if (distance < closestDistance) {
                    closestDistance = distance;
                    closestIndex = index;
                }
            });
            
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === closestIndex);
            });
        });
    }
</script>