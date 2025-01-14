<!doctype html>
<html lang="en">

@include ('privado.componentes.head')

<body class="container-fluid p-0">

    <!-------------------------------Aside------------------------------------------------>
    <div class="col-2">
        @include ('privado.componentes.aside')
    </div>



    <!-------------------------------Main Small Screen Size------------------------------------------------>
    <div class=" col-11  ml-auto">
        @yield('main')
    </div>




    <!-------------------------------Footer------------------------------------------------>
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>

</body>

</html>