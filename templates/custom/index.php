
<?php 

    defined('_JEXEC') or die('Restricted access');

    $app = JFactory::getApplication();
    $doc = JFactory::getDocument();
    $user = JFactory::getUser();

    $sitename = $app->get('sitename');
?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <jdoc:include type="head" />
    <!--[if lt IE 9]><script src="<?php echo JUri::root(true); ?>/media/jui/js/html5.js"></script><![endif]-->
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
            <a class="navbar-brand navbar-link" href="<?php echo $this->baseurl; ?>/"><span class="glyphicon glyphicon-king"></span><?php echo $sitename;?></a>             
            <?php if ($this->countModules('navbar-menu')) : ?>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button></div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <jdoc:include type="modules" name="navbar-menu" style="none" />
                </ul>
            </div>
            <?php endif; ?>
        </div>
    </nav>
    <?php if ($this->countModules('banner')) : ?>
    <div class="container-fluid" style="padding:0;margin:0">
        <jdoc:include type="modules" name="banner" style="none" />
    </div>
    <?php endif; ?>
    <br>
    <section class="testimonials">
    <div class="container" style="margin:10px auto">
        <div class="col-md-8 col-s-8 col-xs-12">
            <jdoc:include type="message" />
            <jdoc:include type="component" />
        </div>
        <div class="col-md-4 col-s-4 col-xs-12">
            <div class="col-md-12">
                <?php if ($this->countModules('user-menu')) : ?>
                <div style="border:1px solid #ccc;margin:10px 0">
                    <h4 style="color:dodgerblue" class="text-center">User Menu</h4>
                    <jdoc:include type="modules" name="user-menu" style="none" />
                </div>
                <?php endif; ?>
            </div>
            <div class="col-md-12">
                <?php if ($this->countModules('twitter-feeds')) : ?>
                <div style="border:1px solid #ccc">
                    <h4 style="color:dodgerblue" class="text-center">Twitter Feeds</h4>
                    <jdoc:include type="modules" name="twitter-feeds" style="none" />
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <?php if ($this->countModules('old-articles')) : ?>
    <div class="container">
        <jdoc:include type="modules" name="old-articles" style="none" />
    </div>
    <?php endif; ?>

    <?php if ($this->countModules('advertisements')) : ?>
    <h1 class="text-center">Advertisements </h1>
    <div class="container">
        <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/download.jpg">
    </div>
    <?php endif; ?>

    <?php if ($this->countModules('rss-feeds')) : ?>
    <h1 class="text-center">RSS</h1>
    <div class="container">
        <jdoc:include type="modules" name="rss-feeds" style="none" />
    </div>
    <?php endif; ?>
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
