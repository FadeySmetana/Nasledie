<!doctype html>
<html lang="ru">
<head>
<meta charset="utf-8">
<title>Бесплатный bootstrap 5 шаблон административной панели</title>
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<link rel="stylesheet" href="https://bootstrap5.ru/css/docs.css">
<!-- Custom styles for this template -->
<link href="styles/Admin.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="index.html" style="text-transform: uppercase; font-family: 'Montserrat', sans-serif;">НАСЛЕДИЕ / АДМИНИСТРАТОР</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Поиск" aria-label="Search" id="search">
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/Admin.html" style="font-size: 1rem;">
              Главная
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/AdminUS.php" style="font-size: 1rem;">
              Услуги
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/AdminAp.php" style="font-size: 1rem; color: rgb(141, 130, 242);">
              Аудит
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/AdminComm.php" style="font-size: 1rem;">
              Отзывы
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Экспресс аудит</h1>
      </div>

      <?php include ('php/Ap.php');?>
      <br>

    </main>
  </div>
</div><script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" integrity="sha384-EbSscX4STvYAC/DxHse8z5gEDaNiKAIGW+EpfzYTfQrgIlHywXXrM9SUIZ0BlyfF" crossorigin="anonymous"></script>       <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha384-i+dHPTzZw7YVZOx9lbH5l6lP74sLRtMtwN2XjVqjf3uAGAREAF4LMIUDTWEVs4LI" crossorigin="anonymous"></script> 	  <script src="/css/examples/dashboard.js"></script><!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-179173139-1"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script  src="scripts/Admin.js"></script>
</body>
</html>