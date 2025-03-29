<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100/50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title> RareFinds Marketplace </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-...integrity hash..." crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="h-full text-transform capitalize font-semibold p-2 m-2 items-center leading-6" style="font-family:quicksand">



<nav class=" bg-green-800 shadow">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
            <div class="flex flex-shrink-0 items-center">
            <img class="h-8 w-auto" src="https://tailwindui.com/plus-assets/img/logos/mark.svg?color=white&shade=600" alt="">
            </div>
                <div class="hidden md:block"> 
                    <div class="ml-10 flex items-baseline space-x-4">
                        <!-- Current: "bg-green-900 text-white", Default: "text-green-300 hover:bg-green-700 hover:text-white" -->
                        <a href="/"
                           class="<?= urlIs('/') ?'text-white' : 'text-black-400' ?> hover:bg-green-800 hover:text-white p-2 m-2 rounded-md">Home</a>

                           <a href="/products"
                               class="<?= urlIs('/products') ? 'text-white' : 'text-black-400' ?> hover:bg-green-800 hover:text-white p-2 m-2 rounded-md">products</a>
                        
                        <a href="/about"
                           class="<?= urlIs('/about') ? 'text-white' : 'text-black-400' ?> hover:bg-green-800 hover:text-white p-2 m-2 rounded-md"> About </a>
                        
                    </div>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                    <!-- Profile dropdown -->
                    <?php if ($_SESSION['user'] ?? false) : ?>
                        <div class="relative ml-3">
                            <button type="button"
                                    class="flex max-w-xs items-center rounded-full bg-green-800 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-green-800"
                                    id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only"> user</span>

                                <img class="h-10 w-8 rounded-full"
                                     src="https://api.dicebear.com/9.x/adventurer/svg?seed=Gizmo"
                                     alt="">
                            </button>
                        </div>

                        <div class="ml-3">
                            <form method="POST" action="/session">
                                <input type="hidden" name="_method" value="DELETE"/>

                                <button class="text-white">Log Out</button> 
                            </form>
                        </div>
                    <?php else : ?>
                        <div class="ml-3">
                            <a href="/register"
                               class="<?= urlIs('/register') ? 'bg-green-900 text-white' : 'text-black-300' ?> hover:bg-green-700 hover:text-white px-3 py-2 rounded-md">Reg</a>
                               
                            <a href="/login"
                               class="<?= urlIs('/login') ? 'bg-green-900 text-white' : 'text-black-300' ?> hover:bg-green-700 hover:text-white px-3 py-2 rounded-md">Log
                                In</a>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
        <div class="-mr-2 flex md:hidden">
        </div>
    </div>
    </div>
</nav>

<section class="px-4 py-6">
  <header class="max-w-4xl mt-10 text-center">
    <div class="max-w-lg mx-auto">
      <div >
        <h1 class="text-4xl mb-2">RareFinds <span class="text-green-500"> Marketplace</span>
      </h1>
      <h2 class="mb-2">
        Connecting those who seek - with those who have !
      </h2>
      
      </div>
    </div>
  </header>

  <main class="max-w-6xl mx-auto mt-4">
    <article class="rounded-xl">
      <div class="py-6 px-5 mb-4 flex">
          <div class="mr-8 flex-1 object-cover opacity-100">
            <img class="rounded w-full" src="https://assets.laracasts.com/images/wallpapers/Lara-Matrix.jpeg" alt="">
          </div>

          <div class="flex-1  flex flex-col justify-between">
              <header> 
                <div class="space-x-2">
                  <a class="py-2 px-4 border border-green-500 rounded-full  font-bold text-xs" href="/products">shop</a>
                  <a class="py-2 px-4 border border-green-500 rounded-full  text-xs font-bold" href="/about">blog</a>
                </div>

                <div class="mt-4">
                  <h1 class="text-2xl">
                    a unique online platform 
                  </h1>
           
                  <span class="mt-2 block text-black text-xs">published <time datetime="">1 day ago </time></span>
                </div>
              </header>

              <div class="text-sm mt-2">
                <p>
                At RareFinds Marketplace, we believe that just because an item is no longer widely available doesn't mean it's gone forever.  
              Our platform empowers individuals to share their treasures and helps others find the missing pieces they need. Join our community today and experience the satisfaction of finding – or helping someone else find – that truly rare gem.</p>
              </div>

              <footer class="justify-between items-center mt-6">
                <div class="flex items-center space-x-4">
                  <img class="h-20 w-auto" src="https://assets.laracasts.com/images/mascot/larylab.svg" alt=""> 

                  <div class="mt-4">
                       <a href="/products" class="bg-green-600 hover:bg-green-700 py-2 px-6 rounded-full shadow-lg"> Visit App Here
                        </a>
                  </div>
                </div>
                
              </footer>
          </div>

      </div>
        
    </article>
  </main>

  <footer class="bg-green-800 px-6 py-6 text-center text-black">
        <div class="container mx-auto px-4">
            
<nav class="mt-2">
  <div class="p-1 m-1">contact us on</div>
  <div class="flex space-x-4 p-4 justify-center">
    <a href="https://github.com/jimmywachira" target="_blank" rel="noopener noreferrer" aria-label="Follow us on github">
    <i class="fa-brands fa-github"></i>
    </a>
    <a href="https://x.com/jimmwachira" target="_blank" rel="noopener noreferrer" aria-label="Follow us on Twitter">
      <i class="fab fa-twitter text-2xl text-sky-400 hover:text-sky-500 transition-colors"></i>
    </a>

    <a href="https://www.linkedin.com/in/james-ndegwa-55312a187/" target="_blank" rel="noopener noreferrer" aria-label="Follow us on LinkedIn">
      <i class="fab fa-linkedin-in text-2xl text-blue-700 hover:text-blue-800 transition-colors"></i>
    </a>

    <a href="https://instagram.com/rarefinds" target="_blank" rel="noopener noreferrer" aria-label="Follow us on Instagram">
      <i class="fab fa-instagram text-2xl text-pink-500 hover:text-pink-600 transition-colors"></i>
    </a>
  </div>
  
  <div class="p-1 m-1">&copy; 2025 RareFinds Marketplace. All rights reserved.</div>
                  <ul class="flex justify-center space-x-4">
                      <li><a href="/terms" class="hover:text-green-500">Terms of Service</a></li>
                      <li><a href="/privacy" class="hover:text-green-500">Privacy Policy</a></li>
                      
                  </ul>
</nav>
        </div>
</footer>
</section>