<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="sideBar.css" />
    <!-- Boxicons CDN Link -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
        <div class="logo_name">FluX</div>
        <i class="bx bx-menu" id="btn"></i>
      </div>
      <ul class="nav-list">
        <li>
          <a href="#">
            <i class="bx bxs-coin-stack"></i>
            <span class="links_name">Lançamentos</span>
          </a>
          <span class="tooltip">Lançamentos</span>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-dollar-circle'></i>
            <span class="links_name">Pagamentos</span>
          </a>
          <span class="tooltip">Pagamentos</span>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-category'></i>
            <span class="links_name">Categorias</span>
          </a>
          <span class="tooltip">Categorias</span>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-search-alt-2'></i>
            <span class="links_name">Consulta</span>
          </a>
          <span class="tooltip">Consulta</span>
        </li>
        <li class="profile">
          <div class="profile-details">
            <div class="name_job">
              <div class="name">ADS</div>
              <div class="job">Desenv. Web Servidor</div>
            </div>
          </div>
          <a href="#">
            <i class='bx bx-log-out' id="log_out" ></i>
          </a>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <div class="text">Famosa DASH</div>
    </section>
    <script>
      let sidebar = document.querySelector(".sidebar");
      let closeBtn = document.querySelector("#btn");
      let searchBtn = document.querySelector(".bx-search");

      closeBtn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
        menuBtnChange(); //Abrir o sideMenu
      });
    </script>
  </body>
</html>
