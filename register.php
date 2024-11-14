<!DOCTYPE html>
<html>

<head>
  <title>UAS PemWeb</title>
  <link rel="stylesheet" type="text/css" href="./css/form.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;700&display=swap" rel="stylesheet">
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <link rel="preload" href="./assets/Bento-2OXaW.woff2" as="font" type="font/woff2" crossorigin="anonymous">
  <script type="module" src="http://localhost:5173/main.js"></script>
</head>
<style>
  body {
    background-image: url('assets/aset2.webp');
    background-size: cover;
    backdrop-filter: blur(3px);
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 5px;
  }

  @font-face {
    font-family: 'Bento';
    src: url('assets/Bento-2OXaW.woff2') format('woff2')
  }

  .bento {
    font-family: 'Bento', sans-serif;
  }
</style>
</head>

<body>
  <?php include 'components/tengah-register.php'; ?>
  <script src="./js/index.js"></script>
</body>

</html>