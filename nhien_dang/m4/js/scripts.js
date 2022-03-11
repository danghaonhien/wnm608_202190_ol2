///Scroll

var y = $(window).scrollTop();

$(function () {
  $(".down__button").on("click", function () {
    $("html, body").animate({ scrollTop: y + 750 });
  });
});
// let checkbox = $("#navi-toggle");
// const navItems = $(".navigation__item");

// $(navItems).each((e) =>
//   e.addEventListener("click", function () {
//     checkbox.checked = false;
//   })
// );
//Toggle
// $("#theDiv").show();
// $(document).on("click", function (e) {
//   if ($(e.target).closest("#showDivBtn").length) {
//     $("#theDiv").addClass("showDiv");
//   } else if (!$(e.target).closest("#theDiv").length) {
//     $("#theDiv").show();
//   }
// });

/////Read more

$(function () {
  var maxLength = 300;
  $(".show-read-more").each(function () {
    var myStr = $(this).text();
    if ($.trim(myStr).length > maxLength) {
      var newStr = myStr.substring(0, maxLength);
      var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
      $(this).empty().html(newStr);
      $(this).append(
        ' <a href="javascript:void(0);" class="read-more">read more...</a>'
      );
      $(this).append('<span class="more-text">' + removedStr + "</span>");
    }
  });
  $(".read-more").on("click", function () {
    $(this).siblings(".more-text").contents().unwrap();
    $(this).remove();
  });
});

///Tab
$(function (e) {
  $(".tabgroup .tab").on("click", function (e) {
    let index = $(this).index();

    $(this).addClass("active").siblings().removeClass("active");

    $(this)
      .closest(".tabgroup")
      .find(".content")
      .eq(index)
      .addClass("active")
      .siblings()
      .removeClass("active");
  });
});
//Carousel

const trueNumber = function (num, max) {
  return num < 0 ? num + max : num;
};

const signNumber = function (num, max) {
  return num > max * 0.5 ? (num % max) - max : num;
};

const wrapNumber = function (num, max) {
  return trueNumber(signNumber(num, max), max);
};

class Carousel {
  constructor(o) {
    Object.assign(this, o);

    let carousel = this;

    this.currentSlide = 0;

    this.slides = this.element.find(".slide");
    this.dots = this.element.find(".control-dot");

    if (this.timing) {
      this.startSlideShow();
    }

    this.element.find(".control-left").on("click", function () {
      carousel.changeSlide(false);
      carousel.restartSlideShow();
    });

    this.element.find(".control-right").on("click", function () {
      carousel.changeSlide(true);
      carousel.restartSlideShow();
    });

    this.element.find(".control-dot").on("click", function () {
      let index = $(this).index();
      carousel.changeSlide(index);
      carousel.restartSlideShow();
    });
  }
  changeSlide(direction) {
    this.previousSlide = this.currentSlide;

    if (direction == true) {
      this.currentSlide++;
    } else if (direction == false) {
      this.currentSlide--;
    } else {
      if (this.currentSlide == direction) {
        return;
      }
      this.currentSlide = direction;

      direction = this.currentSlide > this.previousSlide;
    }

    this.currentSlide = wrapNumber(this.currentSlide, this.slides.length);

    this.showSlide(direction);
  }

  showSlide(direction) {
    let c = this;
    this.slides.removeClass("moving left right center");

    this.slides.eq(this.previousSlide).addClass("center");
    if (direction) {
      this.slides.eq(this.currentSlide).addClass("right");
    } else {
      this.slides.eq(this.currentSlide).addClass("left");
    }

    setTimeout(function () {
      c.dots
        .eq(c.currentSlide)
        .addClass("active")
        .siblings()
        .removeClass("active");

      c.slides
        .eq(c.currentSlide)
        .removeClass("left right")
        .addClass("center moving");

      if (direction) {
        c.slides
          .eq(c.previousSlide)
          .removeClass("center")
          .addClass("left moving");
      } else {
        c.slides
          .eq(c.previousSlide)
          .removeClass("center")
          .addClass("right moving");
      }
    }, 10);
  }

  startSlideShow() {
    let c = this;

    c.stopSlideShow();

    c.timer = setTimeout(function () {
      c.changeSlide(true);
      c.showSlide(true);
      c.startSlideShow();
    }, c.timing);
  }

  stopSlideShow() {
    clearTimeout(this.timer);
  }

  restartSlideShow() {
    let c = this;
    this.stopSlideShow();

    if (this.timing) {
      this.timer = setTimeout(function () {
        c.startSlideShow();
      }, 5000);
    }
  }
}

///Accordian
$(".accordion dt").on("click", function () {
  $(this).next().slideToggle();
});

//lightbox
const openLightBox = function (event) {
  $(".lightbox-content").html(
    '<img src="' + event.target.src + '" style="width: 100%; height:100%">'
  );

  $(".lightbox").addClass("active");
};

$(function () {
  $("body").on("click", ".gallery img", openLightBox);

  $(".lightbox-back").on("click", function () {
    $(".lightbox").removeClass("active");
  });
});

// Select
var x, i, j, l, ll, selElmnt, a, b, c;
/* Look for any elements with the class "custom-select": */
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /* For each element, create a new DIV that will act as the selected item: */
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /* For each element, create a new DIV that will contain the option list: */
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /* For each option in the original select element,
    create a new DIV that will act as an option item: */
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function (e) {
      /* When an item is clicked, update the original select box,
        and the selected item: */
      var y, i, k, s, h, sl, yl;
      s = this.parentNode.parentNode.getElementsByTagName("select")[0];
      sl = s.length;
      h = this.parentNode.previousSibling;
      for (i = 0; i < sl; i++) {
        if (s.options[i].innerHTML == this.innerHTML) {
          s.selectedIndex = i;
          h.innerHTML = this.innerHTML;
          y = this.parentNode.getElementsByClassName("same-as-selected");
          yl = y.length;
          for (k = 0; k < yl; k++) {
            y[k].removeAttribute("class");
          }
          this.setAttribute("class", "same-as-selected");
          break;
        }
      }
      h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function (e) {
    /* When the select box is clicked, close any other select boxes,
    and open/close the current select box: */
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle("select-hide");
    this.classList.toggle("select-arrow-active");
  });
}

function closeAllSelect(elmnt) {
  /* A function that will close all select boxes in the document,
  except the current select box: */
  var x,
    y,
    i,
    xl,
    yl,
    arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i);
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}

/* If the user clicks anywhere outside the select box,
then close all select boxes: */
document.addEventListener("click", closeAllSelect);
