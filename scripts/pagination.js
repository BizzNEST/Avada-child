document.addEventListener("DOMContentLoaded", function () {

    const scroller = document.querySelector(".scroller");
    const sections = scroller.querySelectorAll("section");
    const paginationContainer = document.getElementById('pagination-1');

    if (!scroller || !sections.length || !paginationContainer) return;

    paginationContainer.innerHTML = "";
    sections.forEach((_, index) => {
        const dot = document.createElement("span");
        dot.classList.add("ef-dot");
        if (index === 0) dot.classList.add("active");
        paginationContainer.appendChild(dot);

        dot.addEventListener("click", () => {
            sections[index].scrollIntoView({ behavior: "smooth", block: "nearest", inline: "start" });
        });
    });

    const dots = paginationContainer.querySelectorAll(".ef-dot");
    scroller.addEventListener("scroll", () => {
        const scrollLeft = scroller.scrollLeft;
        const scrollerWidth = scroller.offsetWidth;

        let activeIndex = 0;
        sections.forEach((section, index) => {
            const sectionLeft = section.offsetLeft;
            if (scrollLeft >= sectionLeft - scrollerWidth / 2) {
                activeIndex = index;
            }
        });

        dots.forEach((dot, i) => {
            dot.classList.toggle("active", i === activeIndex);
        });
    });
});
