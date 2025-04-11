const adjustNavBar = () => {
  const navigationBar = document.querySelector(".navigation");
  //   const searchBar = document.querySelector(".search");
  const hamburgerContainer = document.querySelector(".connect-container");

  let button = document.querySelector(".connect-button");

  const handleResize = () => {
    if (window.innerWidth <= 1024) {
      navigationBar.classList.add("turn-off-nav");
      //   searchBar.classList.add("turn-off-nav");

      if (!button) {
        button = document.createElement("button");
        button.classList.add("connect-button");

        const icon = document.createElement("i");
        icon.classList.add("fa-solid", "fa-bars");

        button.appendChild(icon);
        hamburgerContainer.appendChild(button);

        toggleHBMenu(button);
      }
    } else {
      navigationBar.classList.remove("turn-off-nav");
      //   searchBar.classList.remove("turn-off-nav");

      if (button) {
        button.remove();
        button = null;
      }
    }
  };

  window.addEventListener("resize", handleResize);
  handleResize();
};

adjustNavBar();

// Toggle Hamburger Menu (Attach event listener only once)
const toggleHBMenu = (button) => {
  const hamburgerMenuModal = document.querySelector(".hamburger-menu");
  const hbCloseButton = document.querySelector(".hb-close-btn");

  if (button && !button.dataset.listenerAdded) {
    button.addEventListener("click", () => {
      hamburgerMenuModal.showModal();
    });

    button.dataset.listenerAdded = "true";
  }

  if (hbCloseButton && !hbCloseButton.dataset.listenerAdded) {
    hbCloseButton.addEventListener("click", () => {
      hamburgerMenuModal.close();
    });

    hbCloseButton.dataset.listenerAdded = "true";
  }
};

// Toggle Hamburger Menu **Feature to be added in the future
// const toggleSearchMenu = () => {
//   const searchButton = document.querySelector(".search-btn");
//   const searchMenuModal = document.querySelector(".search-modal");
//   const searchModalClose = document.querySelector(".search-modal-close");

//   if (searchButton) {
//     searchButton.addEventListener("click", () => {
//       searchMenuModal.showModal();
//     });
//   }

//   if (searchButton) {
//     searchModalClose.addEventListener("click", () => {
//       searchMenuModal.close();
//     });
//   }
// };

// toggleSearchMenu();

//What we offer logic goes below
const ourServicesArray = [
  "We create fast, secure, and user-friendly WordPress websites tailored to your business. Whether building from scratch or improving an existing site, I ensure seamless design, functionality, and performance to help you succeed online.",
  "We transform outdated websites into modern, high-performing platforms. With a focus on design, functionality, and user experience, I create a site that not only looks great but also drives better engagement and results.",
  "I optimize your website to rank higher on search engines, bringing more traffic and potential customers to your business. From technical SEO to content strategy, I ensure your site is fast, discoverable, and built for long-term success.",
  "I keep your WordPress site secure, updated, and running smoothly. From software updates to security monitoring, I handle the technical details so you can focus on growing your business.",
];

const toggleServiceSection = () => {
  const webdev = document.querySelector(".box-open-1");
  const webdevContainer = document.querySelector(".webDev-description");
  const box1toggle = document.querySelector(".box-open-1");
  const webdevParagrah = document.createElement("p");
  webdevParagrah.classList.add("description-blurb");
  webdevParagrah.textContent = ourServicesArray[0];

  webdev.addEventListener("click", () => {
    if (box1toggle.textContent === "+") {
      box1toggle.textContent = "-";
      webdevContainer.appendChild(webdevParagrah);
    } else if (box1toggle.textContent === "-") {
      box1toggle.textContent = "+";
      webdevContainer.textContent = "";
    }
  });
};

toggleServiceSection();

const toggleServiceSection2 = () => {
  const webdev2 = document.querySelector(".box-open-2");
  const webdevContainer2 = document.querySelector(".webRD-description");
  const box1toggle2 = document.querySelector(".box-open-2");
  const webdevParagrah2 = document.createElement("p");
  webdevParagrah2.classList.add("description-blurb");
  webdevParagrah2.textContent = ourServicesArray[1];

  webdev2.addEventListener("click", () => {
    if (box1toggle2.textContent === "+") {
      box1toggle2.textContent = "-";
      webdevContainer2.appendChild(webdevParagrah2);
    } else if (box1toggle2.textContent === "-") {
      box1toggle2.textContent = "+";
      webdevContainer2.textContent = "";
    }
  });
};

toggleServiceSection2();

const toggleServiceSection3 = () => {
  const webdev3 = document.querySelector(".box-open-3");
  const webdevContainer3 = document.querySelector(".impSEO-description");
  const box1toggle3 = document.querySelector(".box-open-3");
  const webdevParagrah3 = document.createElement("p");
  webdevParagrah3.classList.add("description-blurb");
  webdevParagrah3.textContent = ourServicesArray[2];

  webdev3.addEventListener("click", () => {
    if (box1toggle3.textContent === "+") {
      box1toggle3.textContent = "-";
      webdevContainer3.appendChild(webdevParagrah3);
    } else if (box1toggle3.textContent === "-") {
      box1toggle3.textContent = "+";
      webdevContainer3.textContent = "";
    }
  });
};

toggleServiceSection3();

const toggleServiceSection4 = () => {
  const webdev4 = document.querySelector(".box-open-4");
  const webdevContainer4 = document.querySelector(".webM-description");
  const box1toggle4 = document.querySelector(".box-open-4");
  const webdevParagrah4 = document.createElement("p");
  webdevParagrah4.classList.add("description-blurb");
  webdevParagrah4.textContent = ourServicesArray[3];

  webdev4.addEventListener("click", () => {
    if (box1toggle4.textContent === "+") {
      box1toggle4.textContent = "-";
      webdevContainer4.appendChild(webdevParagrah4);
    } else if (box1toggle4.textContent === "-") {
      box1toggle4.textContent = "+";
      webdevContainer4.textContent = "";
    }
  });
};

toggleServiceSection4();

//Testimonial section logic goes below
const testimonialArray = [
  {
    client: "Bizlar",
    location: "Canada 🇨🇦",
    blurb:
      "What a fantastic experience working with Thiago, very professional, good communication and exceptional quality of content, thank you - highly recommended",
  },
  {
    client: "Derek Rhodes",
    location: "USA 🇺🇸",
    blurb:
      "Great experience! Delivered early, gladly worked on extensive revisions, and sent a final product ready for publishing! I will use again.",
  },
  {
    client: "Sonme Zocak",
    location: "Turkey 🇹🇷",
    blurb:
      "I'm totally amazed! I asked for a few changes and got them as I wanted. I would definitely recommend!",
  },
];
let i = 0;

const toggleTestimonial = () => {
  const testimonialBlurb = document.querySelector(".testimonial-quote");
  const testimonialAuthor = document.querySelector(".testimonial-author");
  const testimonialLocation = document.querySelector(".author-location");

  testimonialBlurb.textContent = testimonialArray[i].blurb;
  testimonialAuthor.textContent = testimonialArray[i].client;
  testimonialLocation.textContent = testimonialArray[i].location;

  console.log("This code is working");

  i = (i + 1) % testimonialArray.length;
};

setInterval(toggleTestimonial, 5000);

toggleTestimonial();
