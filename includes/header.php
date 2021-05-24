<?php $dir = "http://localhost/reform7";  ?>
<header id="header" data-toggle="sticky-onscroll">
	<div class="header">
    	<div class="logo">
			<a href="<?php echo $dir; ?>" title="Church of the Redeemer"><img src="<?php echo $dir.'/_assets/img/logos/reform logo2.jpg'; ?>" alt="" onerror="this.onerror=null; this.src='../_assets/img/logos/logo-icon.png'" /></a>
        </div>
        <div class="toggles">
          <a href="#" ><i class="icon icon-radio"></i>
            <span class="text">
            </span>
          </a>
        	<a href="#" class="navigation-toggle"><i class="icon icon-menu7"></i></a>
        </div>
    </div>
</header><!--end #header-->


<nav class="main">
	<div class="nav-inner">
    	<div class="nav-top">
                	<a href="#" class="navigation-toggle"><i class="icon icon-close"></i></a>
        </div>
<ul id="nav">
  <li class="current" id="nav_home"><a href="<?php echo $dir; ?>">Home</a></li>
  <li id="nav_about"><a href="<?php echo $dir.'/other-pages/about.php'; ?>">About</a></li>
  <li id="nav_about"><a href="#">languages</a>
    <ul>
      <li id="nav_about_who-we-are"><a href="#">French</a></li>
      <li id="nav_about_pastordale"><a href="#">Spanish</a></li>
      <li id="nav_about_pastordale"><a href="#">Ghana</a></li>
    </ul>
  </li>
  
  <li id="nav_events"><a href="<?php echo $dir.'/other-pages/events.php'; ?>">Events</a></li>
  <li id="nav_events"><a href="#">Radio</a></li>
  <li id="nav_messages"><a href="<?php echo $dir.'/other-pages/blog.php'; ?>">Blog|Podcast</a></li>
  <li id="nav_resources"><a href="<?php echo $dir.'/other-pages/project.php'; ?>">Project</a></li>
  <li id="nav_give"><a href="<?php echo $dir.'/other-pages/donate.php'; ?>">Give</a></li>
  <li><a href="<?php echo $dir.'/other-pages/contact.php'; ?>">Contact us</a></li>
</ul>
	<div class="search">
                    <form action="https://church-redeemer.org/search-results/" method="get" id="searchForm" ><fieldset>
               <input type="text" id="search_term" name="keywords" value="" placeholder="Search" class="clearClick" />
               <a id="search_go" href="#" class="icon icon-magnifier mcmsSearch"></a>
<input type="hidden" name="show_results" value="N%3B" />

            </fieldset>
          </form>        
        </div>
    </div>
</nav>