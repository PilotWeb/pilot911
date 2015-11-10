<!DOCTYPE html>
<html>
<head>
  <title>Blitz</title>
  <meta name="description" content='Blitz'>
  <meta name="keywords" content='Blitz'>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css" type="text/css">
  <link rel="stylesheet" href="css/screen.css" type="text/css">
  <link rel="stylesheet" href="css/media.css" type="text/css">
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
  <link rel="stylesheet" href="css/slick.css" type="text/css">
  <link rel="stylesheet" href="css/slick-theme.css" type="text/css">
   <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
  <script  src="js/jquery-2.1.4.min.js" ></script>
  <script  src="js/jquery.magnific-popup.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script>  
  <script  src="js/btn-toogle.js" ></script>
  <script>
  $(document).ready(function(){
  $('.modal').magnificPopup({
     type:'inline',
     midClick: true,
     disableOn: 464,
     closeOnContentClick:true,
     closeBtnInside:false,

    removalDelay: 300,
    mainClass: 'mfp-with-zoom',
    zoom: {
    enabled: true, // By default it's false, so don't forget to enable it

    duration: 300, // duration of the effect, in milliseconds
    easing: 'ease-in-out', // CSS transition easing function

    // The "opener" function should return the element from which popup will be zoomed in
    // and to which popup will be scaled down
    // By defailt it looks for an image tag:
    opener: function(openerElement) {
      // openerElement is the element on which popup was initialized, in this case its <a> tag
      // you don't need to add "opener" option if this code matches your needs, it's defailt one.
      return openerElement.is('img') ? openerElement : openerElement.find('img');
    }
  }
   });
  });
  </script>
  
   
</head>
<body>
<header class="header">

<div class="top-line"></div>

  <div class="container clearfix"> 
  <div class="row"> 
      <div class="col-lg-3 col-md-3 col-sm-1 logo">
        <a href="index.html" class="">Blitz</a>       
      </div>
      <button class="toggle-btn">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
      </button> 
      <div class="col-lg-9 col-md-9 col-sm-11 menu clearfix">
        <ul>
          <li><a href="index.html"><span>Homepage</span>Home</a></li>
          <li><a href="about.html"><span>Who are we?</span>About</a></li>
          <li class="active"><a href="projects.html"><span>My portfolio</span>Projects</a></li>
          <li><a href="#"><span>Latest news</span>Blog</a></li>
          <li><a href="#"><span>Get in touch</span>Contact</a></li>
        </ul>
      </div>
  </div> 

</div> 
</header>

<section class="middle">
  <div class="container clearfix">
          <h1 class="m-head-title">Projects</h1>
<div class="row ">  
  <div class="main col-md-9">       
  <div class="middle-head clearfix">
    <div class="row ">        
        <div class="col-md-10">
          <p class="m-head-descr">Etiam eget mi enim, non ultricies nisi voluptatem, illo inventore veritatis et quasi architecto beatae 
          vitae dicta sunt explicabo nemo enim ipsam voluptatem.</p>
        </div>           
     </div>    
  </div>
    <div class="line">&nbsp;</div>
     <div class="middle-content clearfix">
     <nav class="middle-nav clearfix">
       <ul>
         <li class="active-link"><a href="#">All</a></li>
         <li><a href="content.php" id="getContent">Web</a></li>
         <li><a href="#">Print</a></li>
         <li><a href="#">Art</a></li>
         <li><a href="#">Photoshop</a></li>
         <li><a href="#">Development</a></li>
       </ul>       
     </nav>
      <div class="row">
      <div class="masonry-container" id="divContent">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 content-block">
            <figure>
              <a href="#modal-content-1" class="modal"><img src="img/transport-proj1.jpg" alt=""></a>
              <div id="modal-content-1" class="mfp-hide">
                <img src="img/transport-proj1-modal.jpg" alt="">
                <div class="modal-caption">
                  <h3>Vallarta  Brochure</h3> 
                  <p>Seded ut perspiciatis unde omnis iste natus error sit voluptatem accusantium antium.Seded ut perspiciatis unde omnis iste natus error sit voluptatem accusantium antium.Seded ut perspiciatis unde omnis iste natus error sit voluptatem accusantium antium.</p>                 
                </div>
              </div>
              <figcaption>
                <h3><a href="">Vallarta  Brochure</a></h3>
                <span class="category">Print</span>
                <p>Seded ut perspiciatis unde omnis iste natus error sit voluptatem accusantium antium.</p>                               
              </figcaption>
            </figure>     
      </div>
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 content-block">
        <figure>
              <a href="#modal-content-2"  class="modal"><img src="img/transport-proj2.jpg" alt=""></a>
              <div id="modal-content-2" class="mfp-hide">
                <img src="img/transport-proj2-modal.jpg" alt="">
                <div class="modal-caption">
                  <h3>Wedding card</h3> 
                  <p>Seded ut perspiciatis unde omnis iste natus error sit voluptatem accusantium antium.Seded ut perspiciatis unde omnis iste natus error sit voluptatem accusantium antium.Seded ut perspiciatis unde omnis iste natus error sit voluptatem accusantium antium.</p>                 
                </div>
              </div>
              <figcaption>
                <h3><a href="">Wedding card</a></h3>
                <span class="category">Print</span>
                <p>Seded ut perspiciatis unde omnis iste natus error sit voluptatem accusantium antium.</p>                               
              </figcaption>
        </figure>
      
      </div>
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 content-block">
        <figure>
              <a href="#modal-content-3" class="modal"><img src="img/transport-proj3.jpg" alt=""></a>
              <div id="modal-content-3" class="mfp-hide">
                <img src="img/transport-proj3-modal.jpg" alt="">
                <div class="modal-caption">
                  <h3>Website design</h3> 
                  <p>Seded ut perspiciatis unde omnis iste natus error sit voluptatem accusantium antium.Seded ut perspiciatis unde omnis iste natus error sit voluptatem accusantium antium.Seded ut perspiciatis unde omnis iste natus error sit voluptatem accusantium antium.</p>                 
                </div>
              </div>
              <figcaption>
                <h3><a href="">Website design</a></h3>
                <span class="category">Print</span>
                <p>Seded ut perspiciatis unde omnis iste natus error sit voluptatem accusantium antium.</p>                               
              </figcaption>
        </figure>           
      </div>
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 content-block">
            <figure>
              <a href="#modal-content-4"  class="modal"><img src="img/transport-proj4.jpg" alt=""></a>
              <div id="modal-content-4" class="mfp-hide">
                <img src="img/transport-proj4-modal.jpg" alt="">
                <div class="modal-caption">
                  <h3>Vallarta  Brochure</h3> 
                  <p>Seded ut perspiciatis unde omnis iste natus error sit voluptatem accusantium antium.Seded ut perspiciatis unde omnis iste natus error sit voluptatem accusantium antium.Seded ut perspiciatis unde omnis iste natus error sit voluptatem accusantium antium.</p>                 
                </div>
              </div>
              <figcaption>
                <h3><a href="">Vallarta  Brochure</a></h3>
                <span class="category">Print</span>
                <p>Seded ut perspiciatis unde omnis iste natus error sit voluptatem accusantium antium.</p>                               
              </figcaption>
            </figure>     
      </div>
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 content-block">
        <figure>
              <a href="#modal-content-5"  class="modal"><img src="img/transport-proj5.jpg" alt=""></a>
              <div id="modal-content-5" class="mfp-hide">
                <img src="img/transport-proj5-modal.jpg" alt="">
                <div class="modal-caption">
                  <h3>Wedding card</h3> 
                  <p>Seded ut perspiciatis unde omnis iste natus error sit voluptatem accusantium antium.Seded ut perspiciatis unde omnis iste natus error sit voluptatem accusantium antium.Seded ut perspiciatis unde omnis iste natus error sit voluptatem accusantium antium.</p>                 
                </div>
              </div>
              <figcaption>
                <h3><a href="">Wedding card</a></h3>
                <span class="category">Print</span>
                <p>Seded ut perspiciatis unde omnis iste natus error sit voluptatem accusantium antium.</p>                               
              </figcaption>
        </figure>
      
      </div>
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 content-block">
        <figure>
              <a href="#modal-content-6"  class="modal"><img src="img/transport-proj6.jpg" alt=""></a>
              <div id="modal-content-6" class="mfp-hide">
                <img src="img/transport-proj6-modal.jpg" alt="">
                <div class="modal-caption">
                  <h3>Website design</h3> 
                  <p>Seded ut perspiciatis unde omnis iste natus error sit voluptatem accusantium antium.Seded ut perspiciatis unde omnis iste natus error sit voluptatem accusantium antium.Seded ut perspiciatis unde omnis iste natus error sit voluptatem accusantium antium.</p>                 
                </div>
              </div>
              <figcaption>
                <h3><a href="">Website design</a></h3>
                <span class="category">Print</span>
                <p>Seded ut perspiciatis unde omnis iste natus error sit voluptatem accusantium antium.</p>                               
              </figcaption>
        </figure>           
      </div>
    </div>

  </div>
  <div class="pagination">
    <span class="pag-item-act"></span>
    <span><a href="" class="pag-item"></a></span>
    <span><a href="" class="pag-item"></a></span>
    <span><a href="" class="pag-item"></a></span>
    <span><a href="" class="pag-item"></a></span>
  </div>
  </div>
 
    </div>
    <aside class="col-md-3 sidebar">
      <div class="side-block">
        <h4>About Blitz</h4>
        <div class="line"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praese nt libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elemen tum imperdiet. Duis sagittis ipsum. </p>
      </div>
    <div class="side-block">
      <h4>Categories</h4>
      <div class="line"></div>
      <ul class="cat-menu">
        <li><a href="#">Video (3)</a></li>
        <li><a href="#">Sports (5)</a></li>
        <li><a href="#">Media (2)</a></li>
        <li><a href="#">Entertainment (7)</a></li>
        <li><a href="#">Life (4)</a></li>
        <li><a href="#">Super Cool Stuff (8)</a></li>
      </ul>
    </div>
    <div class="side-block">
      <h4>Twitter Widget</h4>
      <div class="line"></div>
      <div class="twit-message">
        <p>@<a href="#" class="twit-author">pixelmater</a> What an awesome design with great functionality :)</p>
        <span class="twit-time">about 1 hour ago</span>
      </div>
      <div class="twit-message">
        <p>@<a href="#" class="twit-author">designdude</a> What an awesome design with great functionality :)</p>
        <span class="twit-time">about 2 hour ago</span>
      </div>
      <p>Folllow @<a href="#" class="twit-author">bestfreebies</a></p>
    </div>
      
    </aside>
    </div>
</div>  
  <div class="line"></div>
</section>
<footer class="footer">
  <div class="container clearfix">
    <div class="row">
      <div class="col-md-6 col-sm-6  f-block">
        <p>
          All Content Copyright 2012 - <a href="#">Blitz</a>. All Rights Reserved. 
        </p>
        
      </div>
      <div class="col-md-6 col-md-6  f-block developed">
      <p>Site Developed by <a href="">Best PSD Freebies</a></p>
        
      </div>
    </div>
  </div>       
</footer>
</body>
</html>
