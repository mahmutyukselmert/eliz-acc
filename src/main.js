/* all için bu kısım kullanabilirim
import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;
*/
//import Alert from 'bootstrap/js/dist/alert';
//import Button from 'bootstrap/js/dist/button';
import Carousel from 'bootstrap/js/dist/carousel';
import Collapse from 'bootstrap/js/dist/collapse';
import Dropdown from 'bootstrap/js/dist/dropdown';
import Modal from 'bootstrap/js/dist/modal';
//import Offcanvas from 'bootstrap/js/dist/offcanvas';
//import Popover from 'bootstrap/js/dist/popover';
//import ScrollSpy from 'bootstrap/js/dist/scrollspy';
//import Tab from 'bootstrap/js/dist/tab';
//import Toast from 'bootstrap/js/dist/toast';
//import Tooltip from 'bootstrap/js/dist/tooltip';

// global erişim gerekiyorsa
window.bootstrap = {
  Carousel,
  Collapse,
  Dropdown,
  Modal,
  //Tab
};

import ScrollReveal from 'scrollreveal';
document.addEventListener('DOMContentLoaded', function () {

  /* Scroll Reveal */
  const sr = ScrollReveal({
    duration: 1000,
    origin: 'top',
    distance: '50px',
    easing: 'ease-in-out',
    reset: false
  });

  sr.reveal('.scroll-reveal');
  sr.reveal('.scroll-reveal-bottom', {
    origin: 'bottom',
    distance: '100px'
  });
  sr.reveal('.scroll-reveal-left', {
    origin: 'left'
  });
  sr.reveal('.scroll-reveal-left-step-1', {
    origin: 'left',
    distance: '100px'
  });
  sr.reveal('.scroll-reveal-left-step-2', {
    origin: 'left',
    distance: '150px'
  });
  sr.reveal('.scroll-reveal-right', {
    origin: 'right'
  });
  sr.reveal('.scroll-reveal-top', {
    origin: 'top'
  });

  /* Navbar Scroll */
  const navbar = document.querySelector('header');
  const footer = document.getElementById("footer");
  const scrollToTop = document.getElementById("scroll-to-top");

  function handleScroll() {
    if (navbar) {
      if (window.scrollY > 50) {
        navbar.classList.add('fixed-top');
      } else {
        navbar.classList.remove('fixed-top');
      }
    }

    if (footer && scrollToTop) {
      const footerPosition = footer.getBoundingClientRect();
      const windowHeight = window.innerHeight;

      if (footerPosition.top < windowHeight) {
        scrollToTop.classList.remove("d-none");
      } else {
        scrollToTop.classList.add("d-none");
      }
    }
  }

  handleScroll(); // Initial check
  window.addEventListener('scroll', handleScroll);
  /* Navbar Scroll - End */
});

// Header Scroll Değişen Logo
document.addEventListener("DOMContentLoaded", function () {
  const header = document.querySelector("header");
  if (!header) return;

  const logo = header.querySelector(".navbar-brand img");
  const originalSrc = logo ? logo.getAttribute("src") : null;
  const scrolledSrc = logo ? logo.dataset ? logo.dataset.scrolledimage : null : null;

  function updateLogo() {
    if (window.scrollY > 20) {
      if (!header.classList.contains("fixed-top")) {
        header.classList.add("fixed-top");
        if (logo && originalSrc && scrolledSrc) {
          logo.src = scrolledSrc;
        }
      } else {
        if (logo && originalSrc && scrolledSrc) {
          logo.src = scrolledSrc;
        }
      }
    } else {
      if (!header.classList.contains("fixed-top")) {
        header.classList.remove("fixed-top");
        if (logo && originalSrc && scrolledSrc) {
          logo.src = originalSrc;
        }
      }
    }
  }

  window.addEventListener("scroll", function () {
    updateLogo();
  });
});

//Counter Animation
const startCounter = (obj, start, end, duration) => {
  let startTimestamp = null;
  const step = (timestamp) => {
    if (!startTimestamp) startTimestamp = timestamp;
    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
    obj.innerHTML = Math.floor(progress * (end - start) + start);
    if (progress < 1) {
      window.requestAnimationFrame(step);
    }
  };
  window.requestAnimationFrame(step);
};
const counterObserver = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const el = entry.target;
      const targetValue = parseInt(el.dataset.value);
      if (!isNaN(targetValue)) {
        startCounter(el, 0, targetValue, 2000);
      }
      observer.unobserve(el);
    }
  });
}, {
  threshold: 0.5
});
document.querySelectorAll('.countup').forEach(el => {
  counterObserver.observe(el);
});

//Dropdown açılır menu 
document.addEventListener("DOMContentLoaded", function () {
  const dropdowns = document.querySelectorAll(".custom-dropdown-menu");
  const subDropdowns = document.querySelectorAll(".dropdown-submenu");

  // --- YARDIMCI FONKSİYON: Diğer her şeyi kapatır ---
  const closeAllMenus = (except = null) => {
    dropdowns.forEach((dropdown) => {
      if (dropdown !== except) {
        const toggle = dropdown.querySelector(".dropdown-toggle");
        const menu = dropdown.querySelector(".dropdown-menu");
        toggle.classList.remove("show");
        menu.classList.remove("show");
        // Mobil tıklama durumunu sıfırla
        dropdown.dataset.clickedOnce = "false";
      }
    });
  };

  const closeAllSubMenus = (parent, except = null) => {
    const subs = parent.querySelectorAll(".dropdown-submenu");
    subs.forEach((sub) => {
      if (sub !== except) {
        sub.querySelector(".dropdown-toggle").classList.remove("show");
        sub.querySelector(".dropdown-menu").classList.remove("show");
      }
    });
  };

  // ANA DROPDOWNLAR
  dropdowns.forEach(function (dropdown) {
    const toggle = dropdown.querySelector(".dropdown-toggle");
    const menu = dropdown.querySelector(".dropdown-menu");
    let closeTimeout = null;

    const openMenu = () => {
      clearTimeout(closeTimeout);
      closeAllMenus(dropdown); // 👈 Yeni açılan hariç diğerlerini kapat
      toggle.classList.add("show");
      menu.classList.add("show");
    };

    const closeMenu = () => {
      closeTimeout = setTimeout(() => {
        toggle.classList.remove("show");
        menu.classList.remove("show");
        dropdown.dataset.clickedOnce = "false";
      }, 400);
    };

    // DESKTOP HOVER
    dropdown.addEventListener("mouseenter", () => {
      if (window.innerWidth >= 1200) openMenu();
    });

    dropdown.addEventListener("mouseleave", () => {
      if (window.innerWidth >= 1200) closeMenu();
    });

    menu.addEventListener("mouseenter", () => {
      if (window.innerWidth >= 1200) clearTimeout(closeTimeout);
    });

    menu.addEventListener("mouseleave", () => {
      if (window.innerWidth >= 1200) closeMenu();
    });

    // CLICK (MOBİL VE DESKTOP LİNK)
    toggle.addEventListener("click", function (e) {
      if (window.innerWidth >= 1200) {
        window.location.href = toggle.getAttribute("href");
      } else {
        e.preventDefault();
        // Eğer zaten açıksa linke git, kapalıysa aç
        if (dropdown.dataset.clickedOnce === "true") {
          window.location.href = toggle.getAttribute("href");
        } else {
          openMenu();
          dropdown.dataset.clickedOnce = "true";
        }
      }
    });
  });

  // ALT MENÜLER (SUBMENU)
  subDropdowns.forEach(function (subDropdown) {
    const subToggle = subDropdown.querySelector(".dropdown-toggle");
    const subMenu = subDropdown.querySelector(".dropdown-menu");
    const parentMenu = subDropdown.closest(".dropdown-menu");

    subToggle.addEventListener("click", function (e) {
      if (window.innerWidth < 1200) {
        e.preventDefault();
        e.stopPropagation(); // Üst menünün kapanmasını engelle

        // Aynı seviyedeki diğer alt menüleri kapat
        closeAllSubMenus(parentMenu, subDropdown);

        subToggle.classList.toggle("show");
        subMenu.classList.toggle("show");
      }
    });

    // Desktop hover için alt menü desteği
    if (window.innerWidth >= 1200) {
      subDropdown.addEventListener("mouseenter", () => {
        closeAllSubMenus(parentMenu, subDropdown);
        subToggle.classList.add("show");
        subMenu.classList.add("show");
      });
    }
  });

  // Dışarıya tıklandığında her şeyi kapat (Opsiyonel ama önerilir)
  document.addEventListener("click", (e) => {
    if (!e.target.closest(".custom-dropdown-menu")) {
      closeAllMenus();
    }
  });
});

import EmblaCarousel from 'embla-carousel';
import Autoplay from 'embla-carousel-autoplay';

// Product Carousel
document.addEventListener('DOMContentLoaded', () => {
  const viewport = document.querySelector('#productCarousel .embla__viewport');
  if (!viewport) return;

  const embla1 = EmblaCarousel(
    viewport, {
      loop: false,
      align: 'start',
      slidesToScroll: 1,
      containScroll: 'trimSnaps',
    },
    [
      Autoplay({
        delay: 5000,
        stopOnMouseEnter: true,
        stopOnInteraction: false,
        playOnMouseLeave: true
      })
    ]
  );

  let nextBtn1 = document.querySelector('.project-next-btn');
  let prevBtn1 = document.querySelector('.project-prev-btn');

  if (!nextBtn1 || !prevBtn1) return;

  nextBtn1.addEventListener('click', () => {
    if (embla1.canScrollNext()) {
      embla1.scrollNext();
    } else {
      embla1.scrollTo(0); 
    }
  });

  prevBtn1.addEventListener('click', () => {
    if (embla1.canScrollPrev()) {
      embla1.scrollPrev();
    } else {
      embla1.scrollTo(embla1.slideNodes().length - 1);
    }
  });

});

import {
  animate,
  stagger
} from 'animejs';

document.querySelectorAll('.animation-text').forEach(title => {

  // text split
  title.innerHTML = title.textContent
    .split('')
    .map(char => `<span>${char}</span>`)
    .join('');

  const spans = title.querySelectorAll('span');

  function animateIn() {
    animate(spans, {
      opacity: 1,
      translateY: 0,
      duration: 700,
      delay: stagger(40),
      easing: 'easeOutExpo'
    });
  }

  function animateOut() {
    animate(spans, {
      opacity: 0,
      translateY: 40,
      duration: 400,
      delay: stagger(20),
      easing: 'easeInExpo'
    });
  }

  const observer = new IntersectionObserver(
    ([entry]) => {
      if (entry.isIntersecting) {
        animateIn();
      } else {
        animateOut();
      }
    }, {
      threshold: 0.6
    }
  );

  observer.observe(title);
});

document.querySelectorAll('.reveal-section').forEach(section => {

  function show() {
    animate(section, {
      opacity: 1,
      translateY: 0,
      duration: 600,
      easing: 'easeOutCubic'
    });
  }

  function hide() {
    animate(section, {
      opacity: 0,
      translateY: 40,
      duration: 500,
      easing: 'easeInCubic'
    });
  }

  const observer = new IntersectionObserver(
    ([entry]) => {
      if (entry.isIntersecting) {
        show();
      } else {
        hide();
      }
    }, {
      threshold: 0.2
    }
  );

  observer.observe(section);
});

const clamp = (v, min = 0, max = 1) => Math.min(max, Math.max(min, v));

document.querySelectorAll('.reveal-3d').forEach(el => {
  function update() {
    const rect = el.getBoundingClientRect();
    const vh = window.innerHeight;

    const startTrigger = vh;
    const endTrigger = vh * 0.3;

    const progress = clamp(
      (startTrigger - rect.top) / (startTrigger - endTrigger)
    );

    animate(el, {
      opacity: progress,
      scale: 0.8 + progress * 0.2,
      translateY: 100 * (1 - progress),
      translateZ: [-500 * (1 - progress), 0],
      rotateX: 15 * (1 - progress),
      duration: 0,
      easing: 'linear'
    });
  }

  update();

  let ticking = false;
  window.addEventListener('scroll', () => {
    if (!ticking) {
      requestAnimationFrame(() => {
        update();
        ticking = false;
      });
      ticking = true;
    }
  }, {
    passive: true
  });
});

/* Carousel istenirse zoom yapılabilir */
document.addEventListener("DOMContentLoaded", function () {
  const mainCarousel = document.querySelector("#carouselProjects");
  const modalCarouselInner = document.querySelector("#modalCarousel .carousel-inner");
  const zoomModalElement = document.getElementById("imageZoomModal");
  const bootstrapZoomModal = new bootstrap.Modal(zoomModalElement);

  if (!mainCarousel || !modalCarouselInner || !zoomModalElement) return;

  let modalCarouselInstance = null;

  const mainImages = mainCarousel.querySelectorAll(".carousel-item img");
  if (!mainImages.length) return;

  modalCarouselInner.innerHTML = ""; // İçini temizle

  mainImages.forEach((img, index) => {
    const activeClass = index === 0 ? "active" : "";
    modalCarouselInner.innerHTML += `
            <div class="carousel-item ${activeClass}">
                <img src="${img.src}" class="d-block mx-auto img-fluid" style="max-height: 90vh; object-fit: contain;" alt="${img.alt}">
            </div>
        `;
  });

  document.addEventListener("click", function (e) {
    const trigger = e.target.closest(".zoom-trigger");
    if (!trigger) return;

    e.preventDefault();

    const parentItem = trigger.closest(".carousel-item");
    const allItems = Array.from(parentItem.parentElement.children);
    const clickedIndex = allItems.indexOf(parentItem);

    // Modal Carousel'i başlat ve ilgili index'e git
    if (!modalCarouselInstance) {
      modalCarouselInstance = new bootstrap.Carousel(document.getElementById('modalCarousel'));
    }

    modalCarouselInstance.to(clickedIndex);
    bootstrapZoomModal.show();
  });
});

/* Her hangi bir görsel galeri zoom ile carousel yapılsın */
document.addEventListener("DOMContentLoaded", function () {
  const zoomModalElement = document.getElementById("imageZoomModal");
  const modalCarouselInner = document.querySelector("#modalCarousel .carousel-inner");

  if (!zoomModalElement || !modalCarouselInner) return;

  const bootstrapZoomModal = new bootstrap.Modal(zoomModalElement);
  let modalCarouselInstance = null;

  document.addEventListener("click", function (e) {
    const trigger = e.target.closest(".zoom-trigger");
    if (!trigger) return;

    e.preventDefault();

    // Aynı row içindeki tüm gallery itemları al
    const row = trigger.closest(".row");
    if (!row) return;

    const galleryItems = Array.from(
      row.querySelectorAll(".service-gallery-column .zoom-trigger img")
    );

    if (!galleryItems.length) return;

    // Tıklanan görsel index
    const clickedImg = trigger.querySelector("img");
    const clickedIndex = galleryItems.indexOf(clickedImg);

    // Modal içini temizle
    modalCarouselInner.innerHTML = "";

    // Carousel itemları oluştur
    galleryItems.forEach((img, index) => {
      const activeClass = index === clickedIndex ? "active" : "";

      modalCarouselInner.innerHTML += `
        <div class="carousel-item ${activeClass}">
          <img src="${img.src}" 
               class="d-block mx-auto img-fluid" 
               style="max-height: 90vh; object-fit: contain;" 
               alt="${img.alt || ""}">
        </div>
      `;
    });

    // Carousel başlat
    const modalCarouselEl = document.getElementById("modalCarousel");

    if (modalCarouselInstance) {
      modalCarouselInstance.dispose();
    }

    modalCarouselInstance = new bootstrap.Carousel(modalCarouselEl, {
      interval: false,
      ride: false
    });

    bootstrapZoomModal.show();
  });
});

document.addEventListener('DOMContentLoaded', () => {
  const videoModal = document.getElementById('videoModal');
  const iframe = document.getElementById('modalIframe');

  // 1. Modal Açılma Olayı
  videoModal.addEventListener('show.bs.modal', (event) => {
    // Tıklanan butonu yakala
    const button = event.relatedTarget;
    // Video URL'sini al
    let videoSrc = button.getAttribute('data-video');

    // Autoplay parametresini ekle (Yoksa ekler, varsa dokunmaz)
    if (videoSrc && !videoSrc.includes('autoplay=1')) {
      videoSrc += (videoSrc.includes('?') ? '&' : '?') + 'autoplay=1';
    }

    // iframe'e kaynağı ver
    iframe.setAttribute('src', videoSrc);
  });

  // 2. Modal Kapanma Olayı (X butonu, dışarıya tıklama veya ESC fark etmez)
  videoModal.addEventListener('hide.bs.modal', () => {
    // iframe kaynağını tamamen temizleyerek videoyu durdurur ve belleği boşaltır
    iframe.setAttribute('src', '');
  });
});

class SmartCarousel {
  constructor(elementId, options = {}) {
    this.container = document.getElementById(elementId);
    if (!this.container) return;

    this.carousel = new bootstrap.Carousel(this.container, {
      interval: false,
      pause: false,
      keyboard: true,
      ...options
    });

    this.timer = null;
    this.startTime = null;
    this.duration = 0;
    this.init();
  }

  init() {
    // İlk slide için başlat
    this.playSlide();

    // Slide değişim bittiğinde (Yeni slide geldiğinde)
    this.container.addEventListener("slid.bs.carousel", () => this.playSlide());

    // Slide değişim başladığında (Temizlik)
    this.container.addEventListener("slide.bs.carousel", () => {
      clearTimeout(this.timer);
      this.stopAllVideos();
      this.emitEvent('carousel:stop'); // İlerleme çubuğunu durdurmak için
    });
  }

  playSlide() {
    const activeItem = this.container.querySelector(".carousel-item.active");
    if (!activeItem) return;

    const type = activeItem.getAttribute("data-type");
    const video = activeItem.querySelector("video");

    if (type === "video" && video) {
      if (video.readyState < 2) {
        video.onloadedmetadata = () => this.handleVideo(video);
      } else {
        this.handleVideo(video);
      }
    } else {
      this.handleImage(activeItem);
    }
  }

  handleVideo(video) {
    const duration = video.duration * 1000;
    this.emitEvent('carousel:start', {
      duration
    });

    video.currentTime = 0;
    video.play().catch(err => {
      console.warn("Otomatik oynatma engellendi, 4sn sonra geçiliyor.");
      this.setFallbackTimer(4000);
    });

    video.onended = () => this.carousel.next();
  }

  handleImage(item) {
    let duration = parseInt(item.getAttribute("data-interval")) || 5000;
    this.emitEvent('carousel:start', {
      duration
    });

    this.timer = setTimeout(() => {
      this.carousel.next();
    }, duration);
  }

  stopAllVideos() {
    const videos = this.container.querySelectorAll("video");
    videos.forEach(v => {
      v.pause();
      v.onended = null;
    });
  }

  setFallbackTimer(ms) {
    this.timer = setTimeout(() => this.carousel.next(), ms);
  }

  emitEvent(name, detail = {}) {
    const event = new CustomEvent(name, {
      detail
    });
    this.container.dispatchEvent(event);
  }
}

document.addEventListener('DOMContentLoaded', () => {
  if (!document.getElementById('carouselSlider')) return;
  new SmartCarousel('carouselSlider');
});



/* Theme JS */
window.addEventListener("scroll", function () {
  const sections = document.querySelectorAll("section");
  sections.forEach(section => {
    const border = section.querySelector(".secheading-border");
    if (!border) return;
    const rect = section.getBoundingClientRect();
    const windowHeight = window.innerHeight;
    if (rect.top < windowHeight * 0.6 && rect.bottom > 0) {
      border.classList.add("active");
    } else {
      border.classList.remove("active");
    }
  });
});

/* Referans Slider */
document.addEventListener('DOMContentLoaded', () => {
  // Sadece refSlider içindeki viewport'u hedef al
  const refNode = document.querySelector('#refSlider .ref-carousel-wrapper .embla__viewport');

  if (refNode) {
    const emblaRef = EmblaCarousel(refNode, {
      loop: true,
      align: 'start',
      dragFree: true,
      containScroll: 'trimSnaps'
    }, [
      Autoplay({
        delay: 3000,
        stopOnInteraction: false,
        playOnMouseLeave: true
      })
    ]);

    let prevBtn = document.querySelector('.prev-btn');
    let nextBtn = document.querySelector('.next-btn');

    if (!prevBtn || !nextBtn) return;

    nextBtn?.addEventListener('click', () => {
      if (emblaRef.canScrollNext()) {
        emblaRef.scrollNext();
      } else {
        emblaRef.scrollTo(0);
      }
    });

    prevBtn?.addEventListener('click', () => {
      if (emblaRef.canScrollPrev()) {
        emblaRef.scrollPrev();
      } else {
        emblaRef.scrollTo(emblaRef.slideNodes().length - 1);
      }
    });
  }
});