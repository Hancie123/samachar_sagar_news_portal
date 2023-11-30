 <header class="main-header">

     <a href="index2.html" class="logo">

         <span class="logo-mini"><b>SS</b></span>

         <span class="logo-lg"><b>Samachar Sagar</b></span>
     </a>

     <nav class="navbar navbar-static-top" role="navigation">

         <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
         </a>
         <div class="navbar-custom-menu">
             <ul class="nav navbar-nav">

                 <li class="dropdown user user-menu">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                         <img src="{{auth()->user()->getFirstMediaUrl('profile')}}" class="user-image" alt="User Image">
                         <span class="hidden-xs">{{auth()->user()->name}}</span>
                     </a>
                     <ul class="dropdown-menu">
                         <!-- User image -->
                         <li class="user-header">
                             <img src="{{auth()->user()->getFirstMediaUrl('profile')}}" class="img-circle" alt="User Image">
                             <p>
                                {{auth()->user()->name}}
                                 <small>{{auth()->user()->created_at->diffForHumans()}}</small>
                             </p>
                         </li>
                         <!-- Menu Body -->

                         <!-- Menu Footer-->
                         <li class="user-footer">
                             <div class="pull-left">
                                 <a href="#" class="btn btn-default btn-flat">Profile</a>
                             </div>
                             <div class="pull-right">
                                 <a href="#" class="btn btn-default btn-flat">Sign out</a>
                             </div>
                         </li>
                     </ul>
                 </li>
                 <!-- Control Sidebar Toggle Button -->
                 <li>
                     <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                 </li>
             </ul>
         </div>
     </nav>
 </header>
