
<div id="container-header" class="navigator-main w-full ">
<header class="banner flex justify-between  mx-auto ">

  <a class="brand " href="{{ home_url('/') }}">
    <img class="logo" src="https://wordpressonvalet.test/wp-content/uploads/2024/10/lyfter-logo.svg";>
  </a>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif
  
</header>
</div>




 
