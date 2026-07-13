document.addEventListener("DOMContentLoaded", () => {
    document.querySelector(".caption-title").classList.add("show");
    document.querySelector(".caption-text").classList.add("show");
});

document.addEventListener("DOMContentLoaded", () => {
    const section = document.querySelector(".introduction");
    const number = document.querySelector(".number");

    let started = false;

    const counterUp = () => {
        const target = +number.getAttribute("data-target");
        let count = 0;

        const speed = 4000; // kisebb = gyorsabb

        const update = () => {
            const increment = Math.ceil(target / 60);

            if (count < target) {
                count += increment;
                number.textContent = count;
                requestAnimationFrame(update);
            } else {
                number.textContent = target;
            }
        };

        update();
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !started) {
                started = true;
                counterUp();
            }
        });
    }, {
        threshold: 0.4 // akkor indul, amikor 40%-ban látszik
    });

    observer.observe(section);
});

document.addEventListener("DOMContentLoaded", () => {
    const section = document.querySelector(".introduction");
    const items = document.querySelectorAll(".introduction-wrapper .item");

    let started = false;

    function animateItems() {
        items.forEach((item, index) => {
            setTimeout(() => {
                item.classList.add("show");
            }, index * 200); // ⬅️ időköz a "hullámhoz"
        });
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !started) {
                started = true;
                animateItems();
            }
        });
    }, {
        threshold: 0.35
    });

    observer.observe(section);
});

document.addEventListener("DOMContentLoaded", () => {
    const section = document.querySelector(".division");
    const cards = document.querySelectorAll(".division .card");

    let started = false;

    function animateCards() {
        cards.forEach((card, index) => {
            setTimeout(() => {
                card.classList.add("show");
            }, index * 220); // 180 ms késéssel egymás után
        });
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !started) {
                started = true;
                animateCards();
            }
        });
    }, {
        threshold: 0.3
    });

    observer.observe(section);
});

document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll(".competencies-card");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {

                // Kis késleltetés az egymás utáni hatásért
                const index = [...cards].indexOf(entry.target);

                setTimeout(() => {
                    entry.target.classList.add("show");
                }, index * 150);

                // Csak egyszer fusson le
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.3,
        rootMargin: "0px 0px -80px 0px"
    });

    cards.forEach(card => observer.observe(card));
});

const image = document.querySelector(".parallax-image");

window.addEventListener("scroll", () => {

    const section = document.querySelector(".paralax");

    const rect = section.getBoundingClientRect();

    if(rect.bottom > 0 && rect.top < window.innerHeight){

        const offset = rect.top * -0.15;

        image.style.transform = `translateY(${offset}px)`;
    }

});

const parallaxSection = document.querySelector(".paralax");
const parallaxText = document.querySelector(".paralax .text");

const observer = new IntersectionObserver((entries)=>{

    entries.forEach(entry=>{

        if(entry.isIntersecting){

            parallaxText.classList.add("show");

            observer.unobserve(entry.target);

        }

    });

},{
    threshold:.6
});

observer.observe(parallaxSection);

document.addEventListener("DOMContentLoaded", () => {

    const infoSection = document.querySelector(".info");
    const boxes = document.querySelectorAll(".info .box");

    let started = false;

    const observer = new IntersectionObserver((entries) => {

        entries.forEach(entry => {

            if (entry.isIntersecting && !started) {

                started = true;

                boxes.forEach((box, index) => {

                    setTimeout(() => {
                        box.classList.add("show");
                    }, index * 180);

                });

                observer.unobserve(infoSection);
            }

        });

    }, {
        threshold: 0.45
    });

    observer.observe(infoSection);

});