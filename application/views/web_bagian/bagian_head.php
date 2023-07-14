<?php
defined("BASEPATH") or exit("No direct script access allowed"); ?>
	
<!DOCTYPE html>

<!-- HTML page -->
<html lang="en">
    
    <!-- Head Element -->
    <head>
        <!-- Website Title -->
        	<title>
        		<?php echo $title; ?> <?php echo $heading; ?>
        	</title>
        <!-- End Of Website Title -->
    		
        <!-- Web Analytics Tool-->
    		<?php echo $analytics_code; ?>
    	<!-- End Analytics Code -->
              
        <!-- Tabler CSS Open Source UI Kit -->              
            <script src="https://cdn.jsdelivr.net/npm/@tabler/core@latest/dist/js/tabler.min.js"></script>   
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@latest/dist/css/tabler.min.css">
            <script src="https://cdn.jsdelivr.net/npm/@tabler/icons@latest/icons-react/dist/index.umd.min.js"></script>


            <!-- Offline Tabler UI Kit Asset Load -->
        			
            <script src="<?php echo base_url();?>aset/tabler-core/dist/js/tabler.min.js"></script>
            <script src="<?php echo base_url();?>aset/tabler-core/dist/js/tabler.esm.min.js"></script>
            <script src="<?php echo base_url();?>aset/tabler-core/dist/js/demo-theme.min.js"></script>
            <script src="<?php echo base_url();?>aset/tabler-core/dist/js/demo.min.js"></script>
        	
            <link rel="stylesheet" href="<?php echo base_url();?>aset/tabler-core/dist/css/tabler.min.css">
            <link rel="stylesheet" href="<?php echo base_url();?>aset/tabler-core/dist/css/demo.min.css">
            <link rel="stylesheet" href="<?php echo base_url();?>aset/tabler-core/dist/css/tabler-flags.min.css">
            <link rel="stylesheet" href="<?php echo base_url();?>aset/tabler-core/dist/css/tabler-payments.min.css"> 
            <link rel="stylesheet" href="<?php echo base_url();?>aset/tabler-core/dist/css/tabler-social.min.css"> 
            <link rel="stylesheet" href="<?php echo base_url();?>aset/tabler-core/dist/css/tabler-vendors.min.css"> 
        <!-- End Of Tabler UI Kit -->
        
    		
    </head>
    <!-- End Of Head Element -->

<!-- Body Element -->
<body>

    <div class="page">
       <!-- Top Website (paling atas) -->
           <header class="navbar navbar-expand-md d-print-none" data-bs-theme="dark">
              <div class="container-xl">
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                 <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                    <a href="<?php echo base_url();?>">
                    <?php echo $title;?>
                    </a>
                 </h1>
                 <div class="navbar-nav flex-row order-md-last">
                    <div class="d-none d-md-flex">
                       <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Enable dark mode" data-bs-original-title="Enable dark mode">
                          <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                             <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                             <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z"></path>
                          </svg>
                       </a>
                       <a href="?theme=light" class="nav-link px-0 hide-theme-light" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Enable light mode" data-bs-original-title="Enable light mode">
                          <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                             <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                             <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                             <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7"></path>
                          </svg>
                       </a>
                    </div>

                 </div>
              </div>
           </header>
        <!-- End Top Website (paling atas) -->

       <!-- Navigation Menu -->
           <header class="navbar-expand-md">
              <div class="collapse navbar-collapse" id="navbar-menu">
                 <div class="navbar">
                    <div class="container-xl">
                       <ul class="navbar-nav">
                          <li class="nav-item">
                             <a class="nav-link" href="<?php echo base_url();?>">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                   <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                   <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
                                      <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                                      <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
                                   </svg>
                                </span>
                                <span class="nav-link-title">
                                Halaman Utama
                                </span>
                             </a>
                          </li>
                          <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                   <!-- Download SVG icon from http://tabler-icons.io/i/package -->
                                   <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5"></path>
                                      <path d="M12 12l8 -4.5"></path>
                                      <path d="M12 12l0 9"></path>
                                      <path d="M12 12l-8 -4.5"></path>
                                      <path d="M16 5.25l-8 4.5"></path>
                                   </svg>
                                </span>
                                <span class="nav-link-title">
                                Interface Preview
                                </span>
                             </a>
                             <div class="dropdown-menu">
                                <div class="dropdown-menu-columns">
                                   <div class="dropdown-menu-column">
                                      <a class="dropdown-item" href="<?php echo base_url()?>preview_bloghomepage">
                                      Blog HomePage
                                      <span class="badge badge-sm bg-teal-lt text-uppercase ms-auto">First Development</span>
                                      </a>
                                      <a class="dropdown-item disabled" href="./blank.html">
                                      Login Page
                                      <span class="badge badge-sm bg-teal-lt text-uppercase ms-auto">First Development</span>
                                      </a>
                                      <a class="dropdown-item disabled" href="./badges.html">
                                      Dashboard Page
                                      <span class="badge badge-sm bg-teal-lt text-uppercase ms-auto">First Development</span>
                                      </a>
                                      <a class="dropdown-item disabled" href="./buttons.html">
                                      -----
                                      </a>
                                      <div class="dropend">
                                         <a class="dropdown-item disabled dropdown-toggle" href="#sidebar-cards" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                         -----
                                         </a>
                                         <div class="dropdown-menu">
                                            <a href="./cards.html" class="dropdown-item disabled">
                                            ------
                                            </a>
                                            <a href="./card-actions.html" class="dropdown-item disabled">
                                            ------
                                            </a>
                                            <a href="./cards-masonry.html" class="dropdown-item disabled">
                                            ------
                                            </a>
                                         </div>
                                      </div>
                                   </div>
                                   <div class="dropdown-menu-column">
                                      <a class="dropdown-item" href="./placeholder.html">
                                      Blog SinglePage
                                      <span class="badge badge-sm bg-teal-lt text-uppercase ms-auto">First Development</span>
                                      </a>
                                      <a class="dropdown-item" href="<?php echo base_url()?>errorpage">
                                      Error 404 Page
                                      <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Done</span>
                                      </a>
                                      <a class="dropdown-item" href="<?php echo base_url()?>blankpage">
                                      Blank Page
                                      </a>
                                      <a class="dropdown-item disabled" href="./tabs.html">
                                      ------
                                      </a>
                                      <a class="dropdown-item disabled" href="./tables.html">
                                      ------
                                      </a>
                                   </div>
                                </div>
                             </div>
                          </li>
                          <li class="nav-item">
                             <a class="nav-link disabled" href="<?php echo base_url()?>/aboutme">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                   <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-info-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                      <path d="M12 9h.01"></path>
                                      <path d="M11 12h1v4h1"></path>
                                   </svg>
                                </span>
                                <span class="nav-link-title">
                                Profil
                                </span>
                             </a>
                          </li>

                       </ul>
                       <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">



                        <div class="nav-item dropdown">
                           <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu"> <span class="avatar avatar-sm" style="background-image: url(https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp&f=y)"></span> </a>
                           <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                              <a href="#" class="dropdown-item">Internal Server Access</a> <a href="./profile.html" class="dropdown-item">Superuser Admin Panel Access</a> <a href="#" class="dropdown-item">Cloud Internal Server Access</a> <a href="#" class="dropdown-item">Board Plan Access</a> <a href="#" class="dropdown-item">Codeigniter 3 User Guide</a> <a href="#" class="dropdown-item">Internal Web Analytics Access</a> <a href="#" class="dropdown-item">Board Plan Access</a>
                              <div class="dropdown-divider"></div>
                              <a href="./settings.html" class="dropdown-item">ChangeLog <span class="badge badge-sm bg-red">Static Pages</span> </a> <a href="./sign-in.html" class="dropdown-item">Roadmap <span class="badge badge-sm bg-red">Timeline Version</span></a> 
                           </div>
                        </div>

                       </div>
                    </div>
                 </div>
              </div>
           </header>
       <!-- End Navigation Menu-->

        <!-- Load Bagian Web , Memanfaatkan CI3 Template Parser Libraries sebagai potongan-potongan bagian kode agar lebih terstruktur dan bisa di buat se dinamis mungkin -->
            <?php $this->load->view($halaman_bagian); ?>
        <!-- End Load Bagian Web -->

    </div>

