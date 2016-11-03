<?php defined('_JEXEC') or die('Restricted access');?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SERVER['HTTP_HOST'].' - Home Page'; ?></title>
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/css/user.css">
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/bootstrap/fonts/font-awesome.min.css">
</head>

<body>
    <!-- Facebook Comment integration -->
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button><a class="navbar-brand navbar-link" href="#"><span class="glyphicon glyphicon-king"></span>Website</a></div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active" role="presentation"><a href="#">Technology </a></li>
                    <li role="presentation"><a href="#">Life Style</a></li>
                    <li role="presentation"><a href="#">The Hub</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="jumbotron hero" style="display:<?php echo $display ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-push-7 phone-preview">
                    <div class="iphone-mockup">
                        <div class="screen"></div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 get-it">
                    <h1 class="text-left">Technology today</h1>
                    <p class="text-left">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
    <section class="testimonials">
        <h2 class="text-center">Articles </h2></section>
    <div class="container">
        <div class="col-md-5">
            <div class="thumbnail"><img></div>
        </div>
        <div class="col-md-7">
            <div class="thumbnail">
                <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-5">
            <div class="thumbnail"><img></div>
        </div>
        <div class="col-md-7">
            <div class="thumbnail">
                <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-5">
            <div class="thumbnail"><img></div>
        </div>
        <div class="col-md-7">
            <div class="thumbnail">
                <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-5">
            <div class="thumbnail"><img></div>
        </div>
        <div class="col-md-7">
            <div class="thumbnail">
                <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-5">
            <div class="thumbnail"><img></div>
        </div>
        <div class="col-md-7">
            <div class="thumbnail">
                <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">    
    <h1 class="text-center">Older Articles</h1>
        <div class="col-md-6">
            <div class="media">
                <div class="media-left">
                    <a><img class="media-object"></a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Media Heading</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="media">
                <div class="media-left">
                    <a><img class="media-object"></a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Media Heading</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-6">
            <div class="media">
                <div class="media-left">
                    <a><img class="media-object"></a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Media Heading</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="media">
                <div class="media-left">
                    <a><img class="media-object"></a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Media Heading</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-6">
            <div class="media">
                <div class="media-left">
                    <a><img class="media-object"></a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Media Heading</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="media">
                <div class="media-left">
                    <a><img class="media-object"></a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Media Heading</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-6">
            <div class="media">
                <div class="media-left">
                    <a><img class="media-object"></a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Media Heading</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="media">
                <div class="media-left">
                    <a><img class="media-object"></a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Media Heading</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                </div>
            </div>
        </div>
    </div>
    <h1 class="text-center">Advertisements </h1>
    <div class="container"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/download.jpg"></div>
    <h1 class="text-center">RSS</h1>
    <div class="container">
        <div class="media">
            <div class="media-left">
                <a><img class="media-object"></a>
            </div>
            <div class="media-body">
                <h4 class="media-heading">Media Heading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
            </div>
        </div>
        <div class="media">
            <div class="media-left">
                <a><img class="media-object"></a>
            </div>
            <div class="media-body">
                <h4 class="media-heading">Media Heading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
            </div>
        </div>
        <div class="media">
            <div class="media-left">
                <a><img class="media-object"></a>
            </div>
            <div class="media-body">
                <h4 class="media-heading">Media Heading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
            </div>
        </div>
        <div class="media">
            <div class="media-left">
                <a><img class="media-object"></a>
            </div>
            <div class="media-body">
                <h4 class="media-heading">Media Heading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
            </div>
        </div>
        <div class="media">
            <div class="media-left">
                <a><img class="media-object"></a>
            </div>
            <div class="media-body">
                <h4 class="media-heading">Media Heading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
            </div>
        </div>
    </div>
    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>About </h2>
                    <p>Morbi non mauris massa. Duis elit mauris, malesuada nec suscipit ac, bibendum sed augue. Maecenas condimentum magna gravida, laoreet nunc sed, euismod sem. </p>
                </div>
                <div class="col-md-6">
                    <div class="row icon-features">
                        <div class="col-xs-4 icon-feature"><span class="glyphicon glyphicon-earphone"></span>
                            <a href="/contactus" style="color:#fff"><p>Contact Us</p></a>
                        </div>
                        <div class="col-xs-4 icon-feature"><span class="glyphicon glyphicon-education"></span>
                            <a href="/authors" style="color:#fff"><p>Authors </p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h5>Website © 2016</h5></div>
                <div class="col-sm-6 social-icons"><a href="#"><span class="fa fa-facebook"></span></a><a href="#"><span class="fa fa-twitter"></span></a><a href="#"><span class="fa fa-instagram"></span></a></div>
            </div>
        </div>
        <div></div>
    </footer>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
