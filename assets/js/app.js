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
