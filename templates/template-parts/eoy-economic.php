<script>
        const svgIcons = [
            [`<svg xmlns="http://www.w3.org/2000/svg" width="30" height="70" viewBox="0 0 30 70" fill="none">
  <path d="M27.4286 43.2156C28.6908 43.2156 29.7484 42.247 29.8227 40.9921C29.943 38.9456 29.9991 37.0674 30 35.3385C29.9874 26.4311 28.542 21.5007 26.5699 18.5363C25.5843 17.0651 24.4323 16.121 23.3672 15.5983C22.3594 15.0989 21.4728 14.9791 20.9296 14.9694C20.8849 14.9667 20.8402 14.9629 20.7949 14.9629H9.20687C9.16098 14.9629 9.11629 14.967 9.071 14.9694C8.52751 14.9797 7.6406 15.0984 6.63311 15.598C5.01975 16.3854 3.28071 18.1072 2.06297 21.1583C0.830826 24.2212 0.00419912 28.6499 0 35.3379C0 37.0665 0.057288 38.9462 0.179362 40.9932C0.254647 42.247 1.31162 43.2153 2.57196 43.2153C2.61965 43.2153 2.66734 43.2138 2.71563 43.2112C4.03835 43.1344 5.04764 42.0173 4.97086 40.7155C4.85328 38.7532 4.79899 36.965 4.79899 35.3379C4.78939 28.1895 5.84847 24.1746 6.88895 22.0797V66.3513C6.88895 68.367 8.5497 70 10.5971 70C12.645 70 14.3058 68.367 14.3058 66.3513V39.7094H15.696V66.3513C15.696 68.367 17.3568 70 19.4041 70C21.4521 70 23.1128 68.367 23.1128 66.3513V22.0942C23.2907 22.453 23.4698 22.8642 23.6464 23.344C24.4917 25.6502 25.2025 29.4332 25.2004 35.3382C25.2004 36.9659 25.1467 38.7544 25.0312 40.7173C24.9542 42.0191 25.964 43.1359 27.2871 43.2115C27.3345 43.2144 27.3818 43.2156 27.4286 43.2156Z" fill="currentColor"/>
  <path d="M15.0007 13.2809C18.7279 13.2809 21.7493 10.3079 21.7493 6.64047C21.7493 2.97304 18.7279 0 15.0007 0C11.2736 0 8.25217 2.97304 8.25217 6.64047C8.25217 10.3079 11.2736 13.2809 15.0007 13.2809Z" fill="currentColor"/>
</svg>`], 
            [`<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
  <path d="M17.7737 8.88832C17.7737 13.7968 13.7941 17.7766 8.88541 17.7766C3.97673 17.7766 0 13.797 0 8.88832C0 3.97964 3.9768 0 8.88541 0C13.794 0 17.7737 3.97964 17.7737 8.88832Z" fill="currentColor"/>
</svg>`, `<svg xmlns="http://www.w3.org/2000/svg" width="27" height="51" viewBox="0 0 27 51" fill="none">
  <path d="M26.1291 19.8327L23.4107 6.31738C22.675 2.64454 19.4453 0 15.7724 0H10.4833C6.73665 0 3.57793 2.64454 2.845 6.31738L0.126584 19.8327C-0.239849 21.6677 0.200436 23.5056 1.30258 25.048L3.79943 28.4993C4.97542 30.0417 5.70827 31.9506 5.78216 33.7884L6.88427 46.5678C7.03197 48.6243 8.79312 50.2407 10.8497 50.2407H15.3292C17.3858 50.2407 19.0759 48.6243 19.2946 46.5678L20.3967 33.7884C20.5444 31.8795 21.2773 30.0417 22.3795 28.4993L24.8763 25.048C25.9813 23.5056 26.4216 21.6706 26.1291 19.8327Z" fill="currentColor"/>
</svg>`],
            [`<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
  <path d="M14.5833 7.29167C14.5833 11.3184 11.3184 14.5833 7.29167 14.5833C3.26495 14.5833 0 11.3184 0 7.29167C0 3.26495 3.26495 0 7.29167 0C11.3184 0 14.5833 3.26495 14.5833 7.29167Z" fill="currentColor"/>
</svg>`, `<svg xmlns="http://www.w3.org/2000/svg" width="35" height="55" viewBox="0 0 35 55" fill="none">
  <path d="M26.1372 2.83005C25.9859 2.68027 25.8374 2.60537 25.6104 2.45847C19.891 -0.819489 13.8688 -0.819489 8.44958 2.45847C8.29823 2.53336 8.14979 2.68314 7.99844 2.75515C1.97639 7.81901 -1.03314 14.5248 0.319995 26.2162C0.547025 28.005 2.20023 29.2695 4.00773 29.1197C5.81524 28.895 7.09297 27.259 6.94164 25.4702C6.26346 18.9891 7.46846 15.4143 9.27594 11.7649C8.52211 26.1412 8.07094 37.6114 8.37368 49.0065V50.7203C8.37368 52.7309 10.1055 54.295 12.0614 54.295C14.0931 54.295 15.6735 52.656 15.6735 50.6455V50.3488L16.7272 28.7482H17.254L18.3833 50.7949C18.3833 52.7306 20.0395 54.3696 21.9954 54.4444H22.0711C24.1027 54.4444 25.7588 52.8054 25.7588 50.8698V49.1559C26.0586 37.9076 25.6075 26.4374 24.9322 12.1363C26.5884 15.7858 27.7933 19.2136 27.1152 25.5451C26.9638 27.4059 28.2445 29.0449 30.0491 29.1947H30.4246C32.0807 29.1947 33.5098 27.9272 33.7368 26.2912C35.0175 14.5968 32.005 7.89383 25.9861 2.83012L26.1372 2.83005Z" fill="currentColor"/>
</svg>`],
            [`<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
  <path d="M15.6699 7.83498C15.6699 12.1607 12.1606 15.67 7.83496 15.67C3.50936 15.67 0 12.1606 0 7.83498C0 3.50929 3.50936 0 7.83496 0C12.1606 0 15.6699 3.50937 15.6699 7.83498Z" fill="currentColor"/>
</svg>`, `<svg xmlns="http://www.w3.org/2000/svg" width="35" height="54" viewBox="0 0 35 54" fill="none">
  <path d="M25.6182 2.59205C25.4724 2.44618 25.3293 2.37324 25.1105 2.23017C19.8871 -0.743389 14.3749 -0.743389 9.29695 2.23017C9.15107 2.3031 9.00801 2.44898 8.86213 2.51911C3.3498 7.23474 0.665229 17.7517 0.0117176 25.298C-0.134152 26.8942 1.10014 28.3445 2.69636 28.4904C4.29258 28.6362 5.74287 27.4019 5.88873 25.8057C6.39648 20.0746 7.84682 14.5624 9.8778 10.7893L5.52405 32.6956C6.82849 33.0575 8.13573 33.2763 9.51313 33.4923C9.58607 37.8461 9.659 44.2279 9.73194 48.0743L9.80488 49.7434C9.87781 51.6285 11.4011 53.1518 13.2862 53.1518H13.3592C15.2443 53.0789 16.7675 51.5556 16.6946 49.6704L16.8405 34.1463H17.567L17.8559 49.7437H17.9289C17.9289 51.6288 19.3792 53.1521 21.2643 53.225H21.3372C23.2224 53.225 24.7456 51.7018 24.8186 49.8166L24.8915 48.1475C24.9645 44.3015 25.0374 37.9922 25.1103 33.5656C26.4877 33.3468 27.8679 33.0578 29.0994 32.696L24.8186 11.0058C26.7038 14.633 28.011 19.7104 28.5917 25.8032C28.7376 27.3265 30.042 28.4879 31.4923 28.4879H31.7813C33.3775 28.342 34.609 26.8916 34.393 25.2955C33.3802 14.7086 30.2608 6.65455 25.6179 2.59272L25.6182 2.59205Z" fill="currentColor"/>
</svg>`]];
    function generateGroup(amount){
        const group = document.createElement("div");
        group.classList.add("peopleContainer");
        for (var i = 0; i < amount; i++){
            let randomInteger = Math.floor(Math.random() * 4);
            if (svgIcons.at(randomInteger).length > 1){
                const person = document.createElement("div");
                person.classList.add("person");
                person.style.color = "#B2B2B2";
                var personHTML = "";
                for (var j = 0; j < svgIcons.at(randomInteger).length; j++) {
                    personHTML += svgIcons.at(randomInteger).at(j);
                }
                person.innerHTML = personHTML;
                group.append(person);
            } else {
                const person = document.createElement("div");
                person.classList.add("person");
                person.style.color = "#B2B2B2";
                person.innerHTML = svgIcons.at(randomInteger).at(0);
                group.append(person);
            }
        }
        return group;
    }
    let orderedPeople = null;

function getPeopleInVisualOrder() {
  if (orderedPeople) return orderedPeople;

  orderedPeople = Array.from(document.querySelectorAll(".person"))
    .sort((a, b) => {
      const ra = a.getBoundingClientRect();
      const rb = b.getBoundingClientRect();
      const colDiff = ra.left - rb.left;
      if (Math.abs(colDiff) > 5) {
        return colDiff;
      }
      return ra.top - rb.top;
    });

  return orderedPeople;
}


    var counter = 0;
    function changeColor(num, color){
    const people = getPeopleInVisualOrder();
    for (var i = counter; i < counter + num; i++ ){
        console.log(i);
        people[i].style.color = color;
    }
    counter+= num;
}
    function animateChildrenSequentially(children, delay = 500, num) {
    return new Promise(resolve => {
        children.forEach((child, index) => {
            setTimeout(() => {
                child.classList.add("show");
                if (num > 0) {
                    if (index == 0){
                        changeColor(25, "#FFC907");
                    } else if (index == 1){
                        changeColor(20, "#ED1C65")
                    } else if (index == 2){
                        changeColor(7, "#4298D3")
                    } else if (index == 3){
                        changeColor(3, "#65469C")
                    }
                }
                if (index === children.length - 1) {
                    resolve();
                }
            }, index * delay);
        });
    });
}

    document.addEventListener('DOMContentLoaded', (event) => {
        const container = document.querySelector(".animationPeople");
        const containerB = document.querySelector(".stats");
        const group1 = generateGroup(15);
        const group2 = generateGroup(15);
        const group3 = generateGroup(15);
        const group4 = generateGroup(10);
        group4.classList.add("special")
        container.append(group1);
        container.append(group2);
        container.append(group3);
        container.append(group4);
        const children = container.querySelectorAll(".peopleContainer");
        const childrenB = containerB.querySelectorAll(".child");
        const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateChildrenSequentially(children, 500, 0)
                    .then(() => {
                        animateChildrenSequentially(childrenB, 500, 1);
                    });

                observer.unobserve(container);
            }
        });
    }, { threshold: 0.3 });

    observer.observe(container);
    })
    </script>
<section class="eoy-economic">
    <div class="container">
        <div class="header">
                <img class="star" src="<?= get_stylesheet_directory_uri() ?>/assets/images/eoy-2025/Stars/Property 1=Default.png" alt="Financial Foundations Section 4">
                <h2 class='ibm-plex-sans'>Economic Prosperity</h2>
        </div>
        <div class="main-text">
                <p class='nunito-sans'>Of our 24-25 BizzNEST Associates, 79% secured paid next opportunities. Compare that to people looking for work in California, approximately 24% of whom found a job.* Digital NEST’s impact means young professionals are earning income, supporting families, and building wealth in communities historically excluded from economic opportunity.**</p>
                <ul>
                    <li>79% secured paid next opportunities</li>
                    <li>41% landed full or art-time jobs</li>
                    <li>33% secured paid internships</li>
                    <li>11% found contract work</li>
                    <li>5% launched as entrepreneurs</li>
                </ul>
        </div>
    </div>
    <div class="animation">
            <div class="animationPeople">

            </div>                
            <div class="stats">
                <div class="fortyOne child">
                    <h3>41%</h3>
                    <p class='nunito-sans'>Landed full or part-time jobs</p>
                </div>
                <div class="thirtyThree child">
                    <h3>33%</h3>
                    <p class='nunito-sans'>Secured paid internships</p>
                </div>
                <div class="eleven child">
                    <h3>11%</h3>
                    <p class='nunito-sans'>Found contract work</p>
                </div>
                <div class="five child">
                    <h3>5%</h3>
                    <p class='nunito-sans'>Launched a venture</p>
                </div>
            </div>
        </div>
        <div class="subtext">
            <p class='nunito-sans'>*According to California EDD Labor Market Review August 2025. **These percentages add to more than 79% because some associates secured multiple opportunities.</p>
        </div>
</section>