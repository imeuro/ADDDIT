"use strict";
let ADDDITCarousel;
(ADDDITCarousel = function() {
  let me = ADDDITCarousel;
  me.dddCarouselConfig = {};
  me.observerSlides = [];
  console.log("[ADDDITCarousel] init");

  me.cbObserverSlides = (entries, observer) => {
    //entries.forEach(entry => {
    for (const entry of entries) {
      requestAnimationFrame(() => {
        let parentCarousel = entry.target.parentElement;

        let targetId = parentCarousel.getAttribute("id");

        if (me.dddCarouselConfig[targetId]) {
          if (
            entry.intersectionRatio == 1 &&
            !entry.target.classList.contains("dddCarouselItemActive")
          ) {
            if (me.dddCarouselConfig[targetId].classi) {
              entry.target.classList.add("dddCarouselItemActive");
            }

            if (me.dddCarouselConfig[targetId].eventi) {
              let eventSlideAttivata = new CustomEvent(
                "dddCarouselSlideAttivata",
                {
                  detail: {
                    carousel: parentCarousel,
                    carouselId: targetId,
                    indexSlide: Array.from(parentCarousel.children).indexOf(
                      entry.target
                    )
                  }
                }
              );
              document.dispatchEvent(eventSlideAttivata);
            }

            //gestione per rimozione classe slide attiva
            if (me.dddCarouselConfig[targetId].classi) {
              let allSlides = parentCarousel.querySelectorAll(
                  ":scope > .dddCarouselItem"
                ),
                allSlidesL = allSlides.length,
                i;
              for (i = 0; i < allSlidesL; i++) {
                let rect = allSlides[i].getBoundingClientRect();
                if (rect.left < 0 || rect.right > document.body.clientWidth) {
                  allSlides[i].classList.remove("dddCarouselItemActive");
                }
              }
            }
          }
        }

        //gestione prev
        let isFirstSlide = entry.target.previousElementSibling;
        if (entry.intersectionRatio == 1 && isFirstSlide == null) {
          document
            .querySelector(".dddCarouselPrev[data-target='#" + targetId + "']")
            .classList.add("dddCarouselDisabled");
        } else if (entry.intersectionRatio < 1 && isFirstSlide == null) {
          document
            .querySelector(".dddCarouselPrev[data-target='#" + targetId + "']")
            .classList.remove("dddCarouselDisabled");
        }
        //gestione next
        let isLastSlide = entry.target.nextElementSibling;
        if (entry.intersectionRatio == 1 && isLastSlide == null) {
          document
            .querySelector(".dddCarouselNext[data-target='#" + targetId + "']")
            .classList.add("dddCarouselDisabled");
        } else if (entry.intersectionRatio < 1 && isLastSlide == null) {
          document
            .querySelector(".dddCarouselNext[data-target='#" + targetId + "']")
            .classList.remove("dddCarouselDisabled");
        }
      });
    }
  };

  me.observeSlides = function(slideNodes, id) {
    let slideNodesl = slideNodes.length,
      i;
    for (i = 0; i < slideNodesl; i++) {
      me.observerSlides[id].observe(slideNodes[i]);
      slideNodes[i].classList.add("observerProcessed");
    }
  };

  me.setObserversSlides = function(carousel) {
    let carouselId = carousel.getAttribute("id");
    console.log("[ADDDITCarousel] setObserver per id:", carouselId);

    let config = carousel.getAttribute("data-config") || null;

    if (config != null) {
      me.dddCarouselConfig[carouselId] = JSON.parse(config);
    }

    let options = {
      root: carousel,
      rootMargin: "10px 10px 10px 10px",
      threshold: 1
    };

    me.observerSlides[carouselId] = new IntersectionObserver(
      me.cbObserverSlides,
      options
    );

    let slides;
    if (config != null) {
      slides = carousel.querySelectorAll(":scope > .dddCarouselItem");
    } else {
      slides = carousel.querySelectorAll(
        ":scope > .dddCarouselItem:first-child, :scope > .dddCarouselItem:last-child"
      );
    }

    me.observeSlides(slides, carouselId);
  };

  me.outerWidth = function(el) {
    var width = el.offsetWidth;
    var style = getComputedStyle(el);

    width += parseInt(style.marginLeft) + parseInt(style.marginRight);
    return width;
  };

  me.cbObserverCarousels = (entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("dddCarouselInViewport");
        me.setObserversSlides(entry.target);
      } else {
        entry.target.classList.remove("dddCarouselInViewport");
        let carouselId = entry.target.getAttribute("id");
        if (me.observerSlides[carouselId]) {
          me.observerSlides[carouselId].disconnect();
          console.log(
            "[ADDDITCarousel] disconnect observer per id:",
            carouselId
          );
        }
      }
    });
  };

  me.observeCarousels = function(allCarousels) {
    let allCarouselsl = allCarousels.length,
      i;
    for (i = 0; i < allCarouselsl; i++) {
      me.observerCarousels.observe(allCarousels[i]);
    }
  };

  me.setObserversCarousels = function() {
    let options = {
      rootMargin: "150px 10px 150px 10px",
      threshold: 0.01
    };

    me.observerCarousels = new IntersectionObserver(
      me.cbObserverCarousels,
      options
    );

    let allCarousels = document.querySelectorAll(".dddCarousel");

    me.observeCarousels(allCarousels);
  };

  //gestisce i controlli avanti e indietro
  me.setControls = function() {
    let dddCarouselAllControls = document.querySelectorAll(
        ".dddCarouselControl:not(.dddCarouselProcessed)"
      ),
      i,
      dddCarouselAllControlsL = dddCarouselAllControls.length;
    for (i = 0; i < dddCarouselAllControlsL; i++) {
      //me.setObserver(dddCarouselAllControls[i]);

      dddCarouselAllControls[i].addEventListener("click", function(e) {
        e.preventDefault();
        let direction;
        e.currentTarget.classList.contains("dddCarouselPrev")
          ? (direction = -1)
          : (direction = 1);
        //identifichiamo il target
        let target = e.currentTarget.getAttribute("data-target");
        let dddCarousel = document.querySelector(target);

        //leggiamo il passo impostato
        let dddCarouselPasso = dddCarousel.getAttribute("data-passo");
        //scroll di partenza
        let scrollLeft = dddCarousel.scrollLeft;
        //diamo per scontato che abbiano tutti la stessa larghezza
        let itemWidth = me.outerWidth(
          dddCarousel.querySelector(".dddCarouselItem")
        );

        let destination = Math.floor(
          scrollLeft + itemWidth * dddCarouselPasso * direction
        );
        if (destination < 0) destination = 0;

        let carouselScrollWidth = dddCarousel.scrollWidth;
        let carouselWidth = dddCarousel.offsetWidth;
        let itemInview = carouselWidth / itemWidth;
        let itemActive = Math.round(scrollLeft / itemWidth);

        if (
          scrollLeft + carouselWidth == carouselScrollWidth &&
          direction == -1
        ) {
          destination = Math.round(itemActive - dddCarouselPasso) * itemWidth;
        }

        if (getComputedStyle(dddCarousel).scrollBehavior === "smooth") {
          requestAnimationFrame(function() {
            dddCarousel.scrollTo({
              top: 0,
              left: destination
            });
          });
        } else {
          //fallback per no smooth
          console.log("[ADDDITCarousel] fallback per no smooth");
          //leggiamo il tempo di animazione per fallback
          let dddCarouselTime =
            parseInt(dddCarousel.getAttribute("data-time")) || 300;
          let start = new Date().getTime();
          let timer = setInterval(function() {
            requestAnimationFrame(function() {
              let step = Math.min(
                1,
                (new Date().getTime() - start) / dddCarouselTime
              );
              let position = scrollLeft + step * (destination - scrollLeft) + 0;
              if (step === 1) clearInterval(timer);
              dddCarousel.scrollLeft = position;
            });
          }, 25);
        }
      });
      dddCarouselAllControls[i].classList.add("dddCarouselProcessed");
    }

    //init degli observer
    //me.setObserversSlides();
    me.setObserversCarousels();
  };

  //init di tutti i controlli
  me.setControls();
})();