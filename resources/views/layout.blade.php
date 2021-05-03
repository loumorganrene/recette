<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
         body {
           font-family: 'Nunito', sans-serif;
         }
         header {
           background: lightgrey;
           text-align: center;
           padding:20px;
           display:inline-block;
           width:100%;
         }
         header ul.menu {
           float:right;
           list-style:none;
         }
         header ul.menu li{
           float:right;
           margin-right:30px;
         }
         header .title {
           float:left;
         }
         footer {
           background: lightgrey;
           text-align: center;
         }
         main {
           padding: 30px;
           min-height: 500px;
         }
        </style>
    </head>
    <body class="antialiased">
      <header>
        <ul class="menu">
          <li><a href="/contact">Contact</a></li>
          <li><a href="/recipes">Recettes</a></li>
          <li><a href="/">Home</a></li>
        </ul>
        <div class="title">
          <a href="/">
            <h1>
              1, 2, 3...Chauffez !
            </h1>
          </a>
        </div>
      </header>
      <main>
        @yield('main','main')
      </main>
      <footer>
        Ceci est le footer de mon blog
      </footer>
    </body>
</html>
