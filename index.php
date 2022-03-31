<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php Spotify Dischi</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
  <div id="app">
    <header id="site_header">
      <div class="container d-flex justify-content-between align-items-center">
        <div class="logo text-start align-middle">
          <img width="50" src="./assets/img/spotify-logo.png" alt="" />
        </div>
      </div>
      <!-- /.container -->
    </header>
    <!-- /#site_header -->
    <main id="site_main">
      <div class="container">
        <div class="row row-cols-2 row-cols-sm-3 row-cols-xl-6 py-5 justify-content-center">
          <div class="col py-3" v-for="disk in discs" :key="disk.author">
            <div class="card h-100 align-items-center">
              <img :src="disk.poster" class="card-img-top" :alt="disk.author" />
              <div class="card-body text-center">
                <h5 class="card-title text-white">
                  {{ disk.title }}
                </h5>
                <p class="card-text text-muted m-0">{{ disk.author }}</p>
                <p class="card-text text-muted">{{ disk.year }}</p>
              </div>
            </div>
            <!-- ./card -->
          </div>
          <!-- ./col -->
        </div>
        <!-- ./row -->
      </div>
    </main>
    <!-- /#site_main -->
    <footer id="site_footer">
      <div class="container">
        <div class="copyright">
          <small class="text-white">&copy;Boolean</small>
        </div>
      </div>
      <!-- /.container -->
    </footer>
    <!-- /#site_footer -->

  </div>
  <!-- /#app -->
  </div>
  <!-- AXIOS -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js' integrity='sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
  <!-- Disable in production -->
  <!-- VUE -->
  <script src='https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js'></script>
  <script src="./assets/js/main.js"></script>
</body>

</html>