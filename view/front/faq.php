
    <section>
        <header class="row header">
            <div class="col-md-12">
                <nav class="navbar navbar-inverse" role="navigation"><h1 class="hidden">Login Form</h1>
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-default">Login</button>
                            <div class="form-group">
                                <p class="navbar-text">
                                    <i class="fa fa-check-circle-o"></i>
                                    <a class="checkbox-label" href="#">Remember me?</a>
                                </p>
                            </div>
                        </form>

                        <ul class="nav navbar-nav">
                            <li><a href="#">Forgot password?</a></li>
                            <li><a href="sign-up.html" class="sign-up-link">Sign up</a></li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-facebook fa-stack-1x"></i>
                                    </span>
                                </a>
                                <a href="#">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-twitter fa-stack-1x"></i>
                                    </span>
                                </a>
                                <a href="#">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-dribbble fa-stack-1x"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>

                <div class="jumbotron">
                 
                </div>

                <nav class="navbar navbar-default" role="navigation"><h1 class="hidden">Main Menu</h1>
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo ADRESSE_SITE; ?>index/defaultPage">HOME</a></li>
                            <li class="active"><a href="#">FAQ</a></li>
                            <li><a href="#">ABOUT</a></li>
                            <li><a href="<?php echo ADRESSE_SITE; ?>index/contactAction">CONTACT</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <span class="glyphicon glyphicon-search"></span>
                                <input class="form-control" type="text" placeholder="Search">
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>

                <ol class="breadcrumb">
                    <li><a href="<?php echo ADRESSE_SITE; ?>index/defaultPage">Home</a></li>
                    <li class="active">FAQ</li>
                </ol>
            </div>
        </header>
    </section>

    <!-- FAQ -->
    <section class="row" style="padding-top: 20px;"><h1 class="hidden">Content</h1>
        <section class="col-md-8">
            <h1>FAQ</h1>
            <p class="root">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam. Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh.</p>

            <section class="panel-group accordion" id="accordion"><h2 class="hidden">Questions</h2>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <i class="fa fa-minus"></i>
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                How I can edit my profile?
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam.Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <i class="fa fa-plus"></i>
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                Can I add new users manually?
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam.Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <i class="fa fa-plus"></i>
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                What do I do if I've forgotten my username or password?
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam.Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <i class="fa fa-plus"></i>
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                How do I close my account?
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam.Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <i class="fa fa-plus"></i>
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                How I can have two account connected to each other?
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam.Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <i class="fa fa-plus"></i>
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                                How I can have two email addresses for my account?
                            </a>
                        </h4>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam.Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <i class="fa fa-plus"></i>
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
                                Can I change my birthday any time that I like?
                            </a>
                        </h4>
                    </div>
                    <div id="collapseSeven" class="panel-collapse collapse">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam.Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <i class="fa fa-plus"></i>
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
                                How do I change my username?
                            </a>
                        </h4>
                    </div>
                    <div id="collapseEight" class="panel-collapse collapse">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam.Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh.
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <div class="col-md-1"></div>
        <aside class="col-md-3 sidebar"><h3 class="hidden">Sidebar</h3>
            <!-- Preferences -->
            <section>
                <h4><i class="fa fa-user red"></i>PREFERENCES</h4>
                <ul class="list-group">
                    <li class="list-group-item"><a href="profile.html">Profile</a></li>
                    <li class="list-group-item"><a href="#">Setting</a></li>
                    <li class="list-group-item"><a href="#">Logout</a></li>
                </ul>
            </section>

            <!-- Latest News -->
            <section>
                <h4><i class="fa fa-rss red"></i>LATEST NEWS</h4>
                <ul class="list-group">
                    <li class="list-group-item">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi.<br>
                        <span>By <a href="#" class="author">John Doe, <time datetime="2013-04-02">02 Apr 2013</time></a></span>
                    </li>
                    <li class="list-group-item">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi.<br>
                        <span>By <a href="#" class="author">John Doe, <time datetime="2013-04-02">02 Apr 2013</time></a></span>
                    </li>
                </ul>
            </section>
        </aside>
    </section>

    <!-- Footer -->
    <section>
        <footer class="row footer">
            <div class="col-md-12">
                <nav class="navbar navbar-default" role="navigation"><h3 class="hidden">Up</h3>
                    <div class="navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><span class="up">UP</span></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>

                <div class="jumbotron">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <h2>About</h2>
                            <p class="about">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam. Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh. Duis tincidunt lectus quis dui viverra vestibulum.</p>

                            <div class="row">
                                <div class="col-md-1">
                                    <i class="fa fa-twitter"></i>
                                </div>
                                <div class="col-md-4">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit nam. <a href="#">http://t.co/link</a>
                                        <br>
                                        <span><time datetime="2011-11-12 14:54:39">15 Minutes ago</time></span>
                                    </p>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-1">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="col-md-4">
                                    <p>
                                        <input type="text" class="form-control" placeholder="Sign up to our newsletter">
                                        <a class="newsletter" href="#">Submit</a>
                                    </p>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>

                <nav class="navbar navbar-inverse" role="navigation"><h3 class="hidden">Copyright and Site map</h3>
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-3">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-3">
                        <ul class="nav navbar-nav">
                            <li>
                                <p class="navbar-text navbar-right">© Copyright 2014 - Designed by <a href="http://myflashlab.com/">myFlashLab Team</a></p>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="about.html">About</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Site map</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>
        </footer>
    </section>

