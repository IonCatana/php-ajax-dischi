<?php

$jsonObject = '{
"success": true,
"response": [
{
"poster": "https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg",
"title": "New Jersey",
"author": "Bon Jovi",
"genre": "Rock",
"year": "1988"
},
{
"poster": "https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg",
"title": "Live at Wembley 86",
"author": "Queen",
"genre": "Pop",
"year": "1992"
},
{
"poster": "https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg",
"title": "Ten\'s Summoner\'s Tales",
"author": "Sting",
"genre": "Pop",
"year": "1993"
},
{
"poster": "https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg",
"title": "Steve Gadd Band",
"author": "Steve Gadd Band",
"genre": "Jazz",
"year": "2018"
},
{
"poster": "https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg",
"title": "Brave new World",
"author": "Iron Maiden",
"genre": "Metal",
"year": "2000"
},
{
"poster": "https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg",
"title": "One more car, one more raider",
"author": "Eric Clapton",
"genre": "Rock",
"year": "2002"
},
{
"poster": "https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg",
"title": "Made in Japan",
"author": "Deep Purple",
"genre": "Rock",
"year": "1972"
},
{
"poster": "https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg",
"title": "And Justice for All",
"author": "Metallica",
"genre": "Metal",
"year": "1988"
},
{
"poster": "https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg",
"title": "Hard Wired",
"author": "Dave Weckl",
"genre": "Jazz",
"year": "1994"
},
{
"poster": "https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg",
"title": "Bad",
"author": "Michael Jacjson",
"genre": "Pop",
"year": "1987"
}
]
}';

$discs = json_decode($jsonObject, true);
//var_dump($discs['response']);

?>

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
          <?php
          foreach ($discs['response'] as $disk) : ?>

            <div class="col py-3">
              <div class="card h-100 align-items-center">
                <img src="<?php echo $disk['poster']; ?>" class="card-img-top" alt="<?php echo $disk['title']; ?>" />
                <div class="card-body text-center">
                  <h5 class="card-title text-white">
                    <?php echo strtoupper($disk['title']); ?>

                  </h5>
                  <p class="card-text text-muted m-0">
                    <?php echo $disk['author']; ?>
                  </p>
                  <p class="card-text text-muted">
                    <?php echo $disk['year']; ?>
                  </p>
                </div>
              </div>
              <!-- ./card -->
            </div>
            <!-- ./col -->

          <?php endforeach;

          ?>

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