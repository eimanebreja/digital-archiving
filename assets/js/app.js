$(document).ready(function () {
  var owlbanner = $("#owl-banner");
  owlbanner.owlCarousel({
    items: 1,
    loop: true,
    rewind: true,
    autoplay: false,
    autoplayTimeout: 2500,
    nav: false,
    dots: false,
    animateOut: "fadeOut",
    touchDrag: true,
    mouseDrag: true,
    smartSpeed: 1000,
    // navText: [
    //   "<img src='" + arrow + "/assets/img/icon/ic_slider_left.png'>",
    //   "<img src='" + arrow + "/assets/img/icon/ic_slider_right.png'>",
    // ],
  });
});
$(document).ready(function () {
  var owlcollection = $("#owl-collection");
  owlcollection.owlCarousel({
    items: 4,
    loop: false,
    rewind: true,
    autoplay: false,
    autoplayTimeout: 3500,
    nav: true,
    dots: false,
    animateOut: "fadeOut",
    touchDrag: true,
    mouseDrag: true,
    smartSpeed: 1000,
    autoplayTimeout: 5000,
    margin: 15,
    navText: [
      "<img src='" + arrow + "/assets/img/icon/ic_slider_left.svg'>",
      "<img src='" + arrow + "/assets/img/icon/ic_slider_right.svg'>",
    ],
    responsive: {
      // breakpoint from 0 up
      0: {
        items: 1,
      },
      // breakpoint from 480 up
      480: {
        items: 1,
      },
      // breakpoint from 768 up
      750: {
        items: 2,
      },

      1000: {
        items: 3,
      },
      1199: {
        items: 4,
      },
    },
  });
});

$(document).ready(function () {
  // $('#table_item_type').DataTable();
  $("#table_archives").dataTable({
    language: {
      searchPlaceholder: "Search Archives Title",
      search: "",
      paginate: {
        previous: "<",
        next: ">",
      },
    },
  });
  $("#table_museum").dataTable({
    language: {
      searchPlaceholder: "Search Museum Title",
      search: "",
      paginate: {
        previous: "<",
        next: ">",
      },
    },
  });
  $("#table_patron").dataTable({
    language: {
      searchPlaceholder: "Search Patron Title",
      search: "",
      paginate: {
        previous: "<",
        next: ">",
      },
    },
  });
  $("#table_upload").dataTable({
    language: {
      searchPlaceholder: "Search Upload Title",
      search: "",
      paginate: {
        previous: "<",
        next: ">",
      },
    },
  });

  $("#table_analytics").dataTable({
    language: {
      searchPlaceholder: "Search Analytics Title",
      search: "",
      paginate: {
        previous: "<",
        next: ">",
      },
    },
  });
  $("#table_periodical").dataTable({
    language: {
      searchPlaceholder: "Search Periodical Title",
      search: "",
      paginate: {
        previous: "<",
        next: ">",
      },
    },
  });
  $("#table_vertical").dataTable({
    language: {
      searchPlaceholder: "Search Vertical Files Title",
      search: "",
      paginate: {
        previous: "<",
        next: ">",
      },
    },
  });
  $("#table_case").dataTable({
    language: {
      searchPlaceholder: "Search Case Title",
      search: "",
      paginate: {
        previous: "<",
        next: ">",
      },
    },
  });
  $("#table_cataloging").dataTable({
    language: {
      searchPlaceholder: "Search Audio-Visuals Title",
      search: "",
      paginate: {
        previous: "<",
        next: ">",
      },
    },
  });
  $("#table_booksandmanuscripts").dataTable({
    language: {
      searchPlaceholder: "Search Books and Manuscripts",
      search: "",
      paginate: {
        previous: "<",
        next: ">",
      },
    },
  });
  $("#table_academic").dataTable({
    language: {
      searchPlaceholder: "Search Academic Courseworks",
      search: "",
      paginate: {
        previous: "<",
        next: ">",
      },
    },
  });
  $("#table_audiorecord").dataTable({
    language: {
      searchPlaceholder: "Search Audio Recordings",
      search: "",
      paginate: {
        previous: "<",
        next: ">",
      },
    },
    rowReorder: {
      selector: "td:nth-child(3)",
    },
    responsive: true,
  });
  $("#table_eresources").dataTable({
    language: {
      searchPlaceholder: "Search E-Resources Title",
      search: "",
      paginate: {
        previous: "<",
        next: ">",
      },
    },
  });
  $("#table_serial").dataTable({
    language: {
      searchPlaceholder: "Search Serial Cataloging Title",
      search: "",
      paginate: {
        previous: "<",
        next: ">",
      },
    },
  });
  $("#table_video").dataTable({
    language: {
      searchPlaceholder: "Search Video Recordings Title",
      search: "",
      paginate: {
        previous: "<",
        next: ">",
      },
    },
  });
  $("#table_website").dataTable({
    language: {
      searchPlaceholder: "Search Web Site Title",
      search: "",
      paginate: {
        previous: "<",
        next: ">",
      },
    },
  });
  $("#table_circulation").dataTable({
    language: {
      searchPlaceholder: "Search ID Number",
      search: "",
      paginate: {
        previous: "<",
        next: ">",
      },
    },
  });

  $("#table_user").dataTable({
    language: {
      searchPlaceholder: "Search User",
      search: "",
      paginate: {
        previous: "<",
        next: ">",
      },
    },
  });
  $("#table_format").dataTable({
    language: {
      searchPlaceholder: "Search Format",
      search: "",
      paginate: {
        previous: "<",
        next: ">",
      },
    },
  });
  // $("#table_report_item").dataTable({
  //   language: {
  //     searchPlaceholder: "Search...",
  //     search: "",
  //     paginate: {
  //       previous: "<",
  //       next: ">",
  //     },
  //   },
  //   dom: "Bfrtip",
  //   buttons: [
  //     {
  //       extend: "excelHtml5",
  //       exportOptions: {
  //         modifier: {
  //           page: "all",
  //         },
  //       },
  //     },
  //   ],
  // });
});

$(document).ready(function () {
  $("#table_report_item").DataTable({
    dom: "Bfrtip",
    buttons: [{ extend: "excel", text: "Export to Excel" }],

    language: {
      searchPlaceholder: "Search...",
      search: "",
      paginate: {
        previous: "<",
        next: ">",
      },
    },
  });
});

function openTab(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}

const menuIcon = document.getElementById("menu-icon");
const slideoutMenu = document.getElementById("sidebarmenu");
// const body = document.getElementById("body-area");

menuIcon.addEventListener("click", function () {
  if (slideoutMenu.style.display == "block") {
    slideoutMenu.style.display = "none";
    // slideoutMenu.style.transform = "translateX(350px)";
    // body.style.overflow = "auto";
    $(".hamburger").toggleClass("is-active");
  } else {
    slideoutMenu.style.display = "block";
    // slideoutMenu.style.transform = "translateX(0px)";
    // body.style.overflow = "hidden";
    $(".hamburger").toggleClass("is-active");
  }
});
