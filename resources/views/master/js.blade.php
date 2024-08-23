 <!-- include jquery & bootstrap js -->
 <script defer src="{{ asset('assets/js/libs/jquery.min.js') }}"></script>
 <script defer src="{{ asset('assets/js/libs/bootstrap.min.js') }}"></script>

 <!-- include scripts -->
 <script defer src="{{ asset('assets/js/libs/anime.min.js') }}"></script>
 <script defer src="{{ asset('assets/js/libs/swiper-bundle.min.js') }}"></script>
 <script defer src="{{ asset('assets/js/libs/scrollmagic.min.js') }}"></script>
 <script defer src="{{ asset('assets/js/helpers/data-attr-helper.js') }}"></script>
 <script defer src="{{ asset('assets/js/helpers/swiper-helper.js') }}"></script>
 <script defer src="{{ asset('assets/js/helpers/anime-helper.js') }}"></script>
 <script defer src="{{ asset('assets/js/helpers/anime-helper-defined-timelines.js') }}"></script>
 <script defer src="{{ asset('assets/js/uikit-components-bs.js') }}"></script>

 <!-- include app script -->
 <script defer src="{{ asset('assets/js/app.js') }}"></script>

 <script>
     // Schema toggle via URL
     const queryString = window.location.search;
     const urlParams = new URLSearchParams(queryString);
     const getSchema = urlParams.get("schema");
     if (getSchema === "dark") {
         setDarkMode(1);
     } else if (getSchema === "light") {
         setDarkMode(0);
     }
 </script>
