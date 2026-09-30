document.addEventListener("DOMContentLoaded", function () {
    /* ==========================================================
       AOS ANIMATION
    ========================================================== */
    if (typeof AOS !== "undefined") {
        AOS.init({
            duration: 900,
            easing: "ease-out-cubic",
            once: true,
            offset: 70,
            delay: 0
        });
    }
    const mobileToggle =
        document.getElementById("n23MobileToggle");
    const mobileMenu =
        document.getElementById("n23MobileMenu");
    const mobileServices =
        document.querySelector(".n23-mobile-services");
    const mobileServiceTrigger =
        document.getElementById("n23MobileServiceTrigger");
    /* ==========================================
       MAIN MOBILE MENU
    ========================================== */
    mobileToggle.addEventListener("click", function () {
        mobileMenu.classList.toggle("is-open");
        mobileToggle.classList.toggle("is-open");
    });
    /* ==========================================
       MOBILE SERVICES
    ========================================== */
    mobileServiceTrigger.addEventListener("click", function () {
        mobileServices.classList.toggle("is-open");
    });
    /* ==========================================
       RESET ON DESKTOP
    ========================================== */
    window.addEventListener("resize", function () {
        if (window.innerWidth >= 992) {
            mobileMenu.classList.remove("is-open");
            mobileServices.classList.remove("is-open");
            mobileToggle.classList.remove("is-open");
        }
    });
});


/* ==========================================================
   N23 HERO SWIPER
========================================================== */
const n23HeroSwiper = new Swiper(".n23HeroSwiper", {
    loop: true,
    speed: 1100,
    effect: "fade",
    fadeEffect: {
        crossFade: true
    },
    autoplay: {
        delay: 5500,
        disableOnInteraction: false,
        pauseOnMouseEnter: false
    },
    navigation: {
        nextEl: ".n23-hero-next",
        prevEl: ".n23-hero-prev"
    },
    pagination: {
        el: ".n23-hero-pagination",
        clickable: true
    },
    keyboard: {
        enabled: true
    },
    on: {
        slideChangeTransitionStart: function () {
            const bullets =
                document.querySelectorAll(
                    ".n23-hero-pagination .swiper-pagination-bullet"
                );
            bullets.forEach(function (bullet) {
                bullet.style.animation = "none";
            });
        }
    }
});


/* ==========================================================
   N23 TESTIMONIAL SWIPER
========================================================== */
const testimonialSwiper =
    document.querySelector(".n23TestimonialSwiper");
if (testimonialSwiper) {
    new Swiper(".n23TestimonialSwiper", {
        loop: true,
        speed: 850,
        spaceBetween: 24,
        autoplay: {
            delay: 4500,
            disableOnInteraction: false,
            pauseOnMouseEnter: true
        },
        navigation: {
            nextEl: ".n23-testimonial-next",
            prevEl: ".n23-testimonial-prev"
        },
        pagination: {
            el: ".n23-testimonial-pagination",
            clickable: true
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 18
            },
            576: {
                slidesPerView: 1.4,
                spaceBetween: 20
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 22
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 24
            }
        }
    });
}


/* =========================================
   N23 BLOG PAGINATION
========================================= */
const blogCards =
document.querySelectorAll(".n23-blog-card");
const pagination =
document.getElementById("n23BlogPagination");
const blogsPerPage = 6;
let currentPage = 1;
const totalBlogs = blogCards.length;
const totalPages =
Math.ceil(totalBlogs / blogsPerPage);
/* =========================================
   HIDE PAGINATION IF BLOGS <= 6
========================================= */
if(totalBlogs <= blogsPerPage){
    pagination.style.display = "none";
}
else{
    pagination.style.display = "flex";
}
function showBlogs(page){
    currentPage = page;
    blogCards.forEach((blog,index)=>{
        let start =
        (page - 1) * blogsPerPage;
        let end =
        start + blogsPerPage;
        if(index >= start && index < end){
            blog.style.display = "block";
        }
        else{
            blog.style.display = "none";
        }
    });
    createPagination();
}
function createPagination(){
    pagination.innerHTML="";
    if(totalPages <= 1){
        return;
    }
    // Previous Button
    let prev =
    document.createElement("a");
    prev.href="#";
    prev.className =
    "n23-pagination-arrow";
    prev.innerHTML =
    `<i class="bi bi-arrow-left"></i>`;
    prev.onclick=function(e){
        e.preventDefault();
        if(currentPage > 1){
            showBlogs(currentPage - 1);
        }
    };
    pagination.appendChild(prev);
    // Page Numbers
    for(let i=1; i<=totalPages; i++){
        let page =
        document.createElement("a");
        page.href="#";
        page.innerText =
        String(i).padStart(2,"0");
        if(i === currentPage){
            page.classList.add("active");
        }
        page.onclick=function(e){
            e.preventDefault();
            showBlogs(i);
        };
        pagination.appendChild(page);
    }
    // Next Button
    let next =
    document.createElement("a");
    next.href="#";
    next.className =
    "n23-pagination-arrow";
    next.innerHTML =
    `<i class="bi bi-arrow-right"></i>`;
    next.onclick=function(e){
        e.preventDefault();
        if(currentPage < totalPages){
            showBlogs(currentPage + 1);
        }
    };
    pagination.appendChild(next);
}
// Initial Load
showBlogs(1);
