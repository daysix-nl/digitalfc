/**********************/
/*** header desktop***/
/**********************/
const buttonDropdownAbout = document.querySelector(".show-modal-about");
const dropdownAbout = document.querySelector(".dropdown-about");

const overlayAbout = document.querySelector(".overlay-about");

const logo = document.querySelector(".logo");
const contact = document.querySelector(".contact");
const navBackgroundAbout = document.querySelector(".nav");

// Dropdown about

const addDropdownAbout = () => {
  buttonDropdownAbout.classList.remove("drophidden");
  dropdownAbout.classList.remove("drophidden");
  overlayAbout.classList.remove("drophidden");
  navBackgroundAbout.classList.add("navbackgroundabout");
};

const removeDropdownAbout = () => {
  buttonDropdownAbout.classList.add("drophidden");
  dropdownAbout.classList.add("drophidden");
  overlayAbout.classList.add("drophidden");
  navBackgroundAbout.classList.remove("navbackgroundabout");
};

try {
  buttonDropdownAbout.addEventListener("mouseenter", () => {
    addDropdownAbout();
  });

  overlayAbout.addEventListener("mouseenter", () => {
    removeDropdownAbout();
  });

  logo.addEventListener("mouseenter", () => {
    removeDropdownAbout();
  });

  const link = document.querySelectorAll("header a");

  for (let i = 0; i < link.length; i++) {
    link[i].addEventListener("mouseenter", () => {
      removeDropdownAbout();
    });
  }

  contact.addEventListener("mouseenter", () => {
    removeDropdownAbout();
  });
} catch (error) {}

try {
  window.addEventListener("scroll", () => {
    const scrollpos = window.scrollY;

    if (scrollpos > 200) {
      removeDropdownAbout();
    }
  });
} catch (error) {}

/**********************/
/**** mobile navbar ***/
/**********************/

try {
  const buttonHamburger = document.querySelector(".button-hamburger");

  const overlayMobile = document.querySelector(".mobile-overlay");
  const overlayMobileMain = document.querySelector(".mobile-overlay__main");
  const overlayClose = document.querySelector(".overlay-mobile-close");

  const buttonopenAdvertentieAll = document.querySelectorAll(
    ".button-advertentie"
  );

  buttonopenAdvertentieAll.forEach((button, index) => {
    console.log(index);
    document
      .querySelector(".button-advertentie-count-" + index)
      .addEventListener("click", () => {
        console.log("test");
        document
          .querySelector(".inner-hamburger-count-" + index)
          .classList.remove("hidden");
      });
  });

  const openMobileNavbar = () => {
    buttonHamburger.classList.toggle("open");
    overlayMobile.classList.toggle("open");
    overlayMobileMain.classList.toggle("open");
    document.querySelector("html").classList.toggle("overflow-hidden");
  };

  buttonHamburger.addEventListener("click", () => {
    openMobileNavbar();
    overlayClose.classList.toggle("hidden");
  });

  const closeAll = () => {
    overlayClose.classList.add("hidden");

    buttonHamburger.classList.remove("open");
    overlayMobile.classList.remove("open");
    overlayMobileMain.classList.remove("open");
    document.querySelector("html").classList.remove("overflow-hidden");

    overlayMobileMain.classList.remove("remove");

    overlayMobile.classList.remove("open");

    dienstenOverlayMobile.classList.remove("open");
    advertentieOverlayMobile.classList.remove("open");

    document.querySelectorAll(".inner-hamburger").forEach((element) => {
      element.classList.add("hidden");
    });
  };

  overlayClose.addEventListener("click", () => {
    closeAll();
  });

  window.addEventListener("resize", () => {
    const mqLarge = window.matchMedia("(min-width: 768px)");
    if (mqLarge.matches) {
      closeAll();
    }
  });

  const buttonopenDiensten = document.querySelector(".button-diensten");
  const buttonCloseDiensten = document.querySelector(".button-diensten-close");
  const dienstenOverlayMobile = document.querySelector(
    ".mobile-overlay__second"
  );

  const buttonopenAdvertentie = document.querySelectorAll(
    ".button-advertentie"
  );
  const buttonCloseAdvertentie = document.querySelector(
    ".button-advertenties-close"
  );
  const advertentieOverlayMobile = document.querySelector(
    ".overlay-advertenties-mobile"
  );

  buttonopenDiensten.addEventListener("click", () => {
    dienstenOverlayMobile.classList.add("open");
  });
  buttonCloseDiensten.addEventListener("click", () => {
    dienstenOverlayMobile.classList.remove("open");
  });

  for (let i = 0; i < buttonopenAdvertentie.length; i++) {
    buttonopenAdvertentie[i].addEventListener("click", () => {
      advertentieOverlayMobile.classList.add("open");
    });
  }

  buttonCloseAdvertentie.addEventListener("click", () => {
    advertentieOverlayMobile.classList.remove("open");
    document.querySelectorAll(".inner-hamburger").forEach((element) => {
      element.classList.add("hidden");
    });
  });
} catch (error) {}

try {
  const header = document.querySelector(".nav");

  const scrollCheck = () => {
    const scrollpos = window.scrollY;

    if (scrollpos > 20) {
      header.classList.add("scroll-show");
    }
    if (scrollpos < 20) {
      header.classList.remove("scroll-show");
    }
  };

  window.addEventListener("scroll", scrollCheck, false);
  window.addEventListener("load", scrollCheck, false);
} catch (error) {}

/**********************/
/*** Hide Menu on Scroll ***/
/**********************/
try {
  let prevScrollpos = window.pageYOffset;
  window.addEventListener("scroll", () => {
    let currentScrollPos = window.pageYOffset;
    const scrollpos = window.scrollY;

    if (prevScrollpos > currentScrollPos) {
      document.getElementById("header-desktop").style.top = "0";
      document.querySelector(".button-hamburger-menu").style.top = "0";
    } else if (scrollpos > 200) {
      document.getElementById("header-desktop").style.top = "-200px";
      document.querySelector(".button-hamburger-menu").style.top = "-200px";
    }
    prevScrollpos = currentScrollPos;
  });
} catch (error) {}

/*********************/
/*** side-Navbar ***/
/*********************/

// https://css-tricks.com/sticky-table-of-contents-with-scrolling-active-states/
// https://www.bram.us/2020/01/10/smooth-scrolling-sticky-scrollspy-navigation/

const options = {
  rootMargin: "-15% 0% -10% 0%",
  threshold: 0,
};

window.addEventListener("DOMContentLoaded", () => {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(async (entry) => {
      const id = entry.target.getAttribute("id");
      if (entry.intersectionRatio > 0) {
        document
          .querySelector(`a[href="#${id}"].float-block-inner`)
          .parentElement.classList.add("active-button");
      } else {
        document
          .querySelector(`a[href="#${id}"].float-block-inner`)
          .parentElement.classList.remove("active-button");
      }
    });
  }, options);

  /**********  Track all sections that have an `id` applied  ***********/
  document
    .querySelectorAll(".acf-innerblocks-container div[id]")
    .forEach((section) => {
      observer.observe(section);
    });
});
/*********************/
/*** contact overlay ***/
/*********************/
try {
  const contactButton = document.querySelectorAll(".button-contact-overlay");
  const contactOverlay = document.querySelector(".overlay-contact");
  const contactClose = document.querySelector(".button-close");
  const ContactBackground = document.querySelector(
    ".overlay-contact-background"
  );
  for (let i = 0; i < contactButton.length; i++) {
    contactButton[i].addEventListener("click", () => {
      contactOverlay.classList.add("open");
      ContactBackground.classList.add("open");
    });
    contactClose.addEventListener("click", () => {
      contactOverlay.classList.remove("open");
      ContactBackground.classList.remove("open");
    });
    ContactBackground.addEventListener("click", () => {
      contactOverlay.classList.remove("open");
      ContactBackground.classList.remove("open");
    });
  }
} catch (error) {}

try {
  var swiper = new Swiper(".mySwiper", {
    loop: false,
    spaceBetween: 0,
    slidesPerView: 3,
    freeMode: false,
    watchSlidesProgress: true,

    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 3,
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 3,
      },
      // when window width is >= 640px
      768: {
        slidesPerView: 3,
      },
    },

    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
  });
  var swiper2 = new Swiper(".mySwiper2", {
    loop: false,
    spaceBetween: 0,
    effect: "fade",

    thumbs: {
      swiper: swiper,
    },

    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
  });

  document.querySelector(".mySwiper").addEventListener("mouseenter", () => {
    swiper2.autoplay.stop();
  });
} catch (error) {}

// SWIPER TEAM

try {
  const swiper = new Swiper(".swiper-container", {
    // Optional parameters
    loop: false,
    slidesPerView: 1.2,
    spaceBetween: 30,

    breakpoints: {
      // when window width is >= 320px
      300: {
        slidesPerView: 1.2,
      },
      500: {
        slidesPerView: 1.7,
      },
      // when window width is >= 480px
      600: {
        slidesPerView: 2.5,
      },
      // when window width is >= 640px
      900: {
        slidesPerView: 3.2,
      },
      1200: {
        slidesPerView: 4,
      },
    },
  });
} catch (error) {}
