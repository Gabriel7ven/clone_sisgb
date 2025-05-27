<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  <title>SISGB - Sistema de Gestão de Ativos do BDGD</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/particles.css">
  <link rel="stylesheet" href="styles/options.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>

<!-- <div class="count-particles">
  <span class="js-count-particles">--</span> particles
</div> -->

<div id="particles-js"></div>

<div class="container">
<div class="welcome">
  <div class="presentation">
    <img src="img/logo_progeo_large.png " alt="Logo da Progeo" class="logo">
    <p>Bem-vindo à <span>progeo!</span>
    <p>Sistema de Gestão de Ativos Para Auxílio ao BDGD!</p>
  </div>
  <p class="copyright">© 2025 "PROGEO". Todos os direitos reservados</p>
</div>

<div class="options">
  <div class="options-panel">
    <span class="header-options">cadastro e geoprocessamento</span>
    <a class="login" href="login.php" target="_blank">login</a>
    <a href="" target="">solicitação de acesso</a>
    <a href="" target="">passivo de obras ofm</a>
    <a href="" target="">gerar demanda</a>
    <a href="" target="">consultar demanda</a>
    <a href="" target="">nvs</a>
  </div>
</div>
</div>
















<script src="js/lib/particles.js"></script>
<script src="js/app.js"></script>
<script src="js/lib/stats.js"></script>

<script>
  var count_particles, stats, update;
  stats = new Stats();
  stats.setMode(0);
  stats.domElement.style.position = 'absolute';
  stats.domElement.style.left = '0px';
  stats.domElement.style.top = '0px';
  document.body.appendChild(stats.domElement);
  count_particles = document.querySelector('.js-count-particles');
  update = function () {
    stats.begin();
    stats.end();
    if (window.pJSDom && window.pJSDom[0] && window.pJSDom[0].pJS && window.pJSDom[0].pJS.particles) {
      count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
    }
    requestAnimationFrame(update);
  };
  requestAnimationFrame(update);
</script>

</body>
</html>
