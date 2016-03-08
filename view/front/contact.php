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
                            <li><a href="<?php echo ADRESSE_SITE; ?>index/faqAction">FAQ</a></li>
                            <li><a href="#">ABOUT</a></li>
                            <li class="active"><a href="#">CONTACT</a></li>
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
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </header>
    </section>

    <!-- Contact -->
    <section class="row" style="padding-top: 20px;"><h1 class="hidden">Content</h1>
        <section class="col-md-8">
            
            <div id="forumlist">

			<div id="forumlist-inner">

				
	
				<div class="forabg">
			<div class="inner">
			<ul class="topiclist">
				<li class="header">
					<dl class="icon">
						<dt><div class="list-inner"><a href="./viewforum.php?style=5&amp;f=1">Main</a></div></dt>
					</dl>
				</li>
			</ul>
			<ul class="topiclist forums">
		
	
	
	
			
					<li class="row">
						<dl class="icon forum_read">
				<dt title="No unread posts">

					<span class="ico_forum_read"></span>

										<div class="list-inner">
						<!-- <a class="feed-icon-forum" title="Feed - Informations" href="http://gramziu.pl/phpBB/feed.php?f=2"><img src="./styles/anami/theme/images/feed.gif" alt="Feed - Informations" /></a> -->
												<a href="./viewforum.php?style=5&amp;f=2" class="forumtitle">Informations</a>
						<br>Everything you should know.												
												<div class="responsive-show" style="display: none;">
															Topics: <strong>2</strong>
													</div>
											</div>
				</dt>
									<dd class="topics">2<dfn>Topics</dfn></dd>
					<dd class="posts">2<dfn>Posts</dfn></dd>
					<dd class="lastpost">
						<dfn>Last post</dfn><a href="./viewtopic.php?style=5&amp;f=2&amp;p=2#p2" title="Welcome" class="lastsubject">Welcome</a> <br>
						 
						by <a href="./memberlist.php?style=5&amp;mode=viewprofile&amp;u=2" style="color: #AA0000;" class="username-coloured">Gramziu</a>
						24 Feb 2015, 21:50					</dd>
							</dl>
					</li>
			
	
	
			
					<li class="row">
						<dl class="icon forum_read_locked">
				<dt title="Forum locked">

					<span class="ico_forum_read_locked"></span>

										<div class="list-inner">
						<!-- <a class="feed-icon-forum" title="Feed - General examples" href="http://gramziu.pl/phpBB/feed.php?f=3"><img src="./styles/anami/theme/images/feed.gif" alt="Feed - General examples" /></a> -->
												<a href="./viewforum.php?style=5&amp;f=3" class="forumtitle">General examples</a>
						<br>Examples of topics, you can see here how everything works.												
												<div class="responsive-show" style="display: none;">
															Topics: <strong>6</strong>
													</div>
											</div>
				</dt>
									<dd class="topics">6<dfn>Topics</dfn></dd>
					<dd class="posts">45<dfn>Posts</dfn></dd>
					<dd class="lastpost">
						<dfn>Last post</dfn><a href="./viewtopic.php?style=5&amp;f=3&amp;p=69#p69" title="Re: Popular topic" class="lastsubject">Re: Popular topic</a> <br>
						 
						by <a href="./memberlist.php?style=5&amp;mode=viewprofile&amp;u=50" style="color: #00AA00;" class="username-coloured">Ramziu</a>
						07 Dec 2015, 20:03					</dd>
							</dl>
					</li>
			
	
	
			
					<li class="row">
						<dl class="icon forum_link">
				<dt title="No unread posts">

					<span class="ico_forum_link"></span>

										<div class="list-inner">
						
												<a href="./viewforum.php?style=5&amp;f=5" class="forumtitle">Gramziu themes on ThemeForest</a>
						<br>You can find Gramziu themes only on ThemeForest.												
												<div class="responsive-show" style="display: none;">
															Total redirects: <strong>2205</strong>
													</div>
											</div>
				</dt>
									<dd class="redirect">2205<span>Total redirects</span></dd>
							</dl>
					</li>
			
	
				</ul>

			</div>
		</div>
	
				<div class="forabg">
			<div class="inner">
			<ul class="topiclist">
				<li class="header">
					<dl class="icon">
						<dt><div class="list-inner"><a href="./viewforum.php?style=5&amp;f=6">Themes</a></div></dt>
					</dl>
				</li>
			</ul>
			<ul class="topiclist forums">
		
	
	
	
			
					<li class="row">
						<dl class="icon forum_read">
				<dt title="No unread posts">

					<span class="ico_forum_read"></span>

										<div class="list-inner">
						<!-- <a class="feed-icon-forum" title="Feed - Hawiki" href="http://gramziu.pl/phpBB/feed.php?f=7"><img src="./styles/anami/theme/images/feed.gif" alt="Feed - Hawiki" /></a> -->
												<a href="./viewforum.php?style=5&amp;f=7" class="forumtitle">Hawiki</a>
						<br>Simple phpBB theme.												
												<div class="responsive-show" style="display: none;">
															Topics: <strong>1</strong>
													</div>
											</div>
				</dt>
									<dd class="topics">1<dfn>Topics</dfn></dd>
					<dd class="posts">2<dfn>Posts</dfn></dd>
					<dd class="lastpost">
						<dfn>Last post</dfn><a href="./viewtopic.php?style=5&amp;f=7&amp;p=70#p70" title="Re: Sample" class="lastsubject">Re: Sample</a> <br>
						 
						by <a href="./memberlist.php?style=5&amp;mode=viewprofile&amp;u=51" class="username">Zamziu</a>
						07 Dec 2015, 20:20					</dd>
							</dl>
					</li>
			
	
	
			
					<li class="row">
						<dl class="icon forum_read">
				<dt title="No unread posts">

					<span class="ico_forum_read"></span>

										<div class="list-inner">
						<!-- <a class="feed-icon-forum" title="Feed - Ariki" href="http://gramziu.pl/phpBB/feed.php?f=8"><img src="./styles/anami/theme/images/feed.gif" alt="Feed - Ariki" /></a> -->
												<a href="./viewforum.php?style=5&amp;f=8" class="forumtitle">Ariki</a>
						<br>Colourful phpBB theme.												
												<div class="responsive-show" style="display: none;">
															Topics: <strong>1</strong>
													</div>
											</div>
				</dt>
									<dd class="topics">1<dfn>Topics</dfn></dd>
					<dd class="posts">2<dfn>Posts</dfn></dd>
					<dd class="lastpost">
						<dfn>Last post</dfn><a href="./viewtopic.php?style=5&amp;f=8&amp;p=71#p71" title="Re: Example" class="lastsubject">Re: Example</a> <br>
						 
						by <a href="./memberlist.php?style=5&amp;mode=viewprofile&amp;u=52" class="username">Tamziu</a>
						07 Dec 2015, 20:36					</dd>
							</dl>
					</li>
			
	
	
			
					<li class="row">
						<dl class="icon forum_read">
				<dt title="No unread posts">

					<span class="ico_forum_read"></span>

										<div class="list-inner">
						<!-- <a class="feed-icon-forum" title="Feed - Anami" href="http://gramziu.pl/phpBB/feed.php?f=9"><img src="./styles/anami/theme/images/feed.gif" alt="Feed - Anami" /></a> -->
												<a href="./viewforum.php?style=5&amp;f=9" class="forumtitle">Anami</a>
						<br>Clear phpBB theme.												
												<div class="responsive-show" style="display: none;">
															Topics: <strong>1</strong>
													</div>
											</div>
				</dt>
									<dd class="topics">1<dfn>Topics</dfn></dd>
					<dd class="posts">2<dfn>Posts</dfn></dd>
					<dd class="lastpost">
						<dfn>Last post</dfn><a href="./viewtopic.php?style=5&amp;f=9&amp;p=72#p72" title="Re: Lorem ipsum" class="lastsubject">Re: Lorem ipsum</a> <br>
						 
						by <a href="./memberlist.php?style=5&amp;mode=viewprofile&amp;u=53" class="username">Xamziu</a>
						07 Dec 2015, 20:40					</dd>
							</dl>
					</li>
			
	
				</ul>

			</div>
		</div>
	
				<div class="forabg">
			<div class="inner">
			<ul class="topiclist">
				<li class="header">
					<dl class="icon">
						<dt><div class="list-inner"><a href="./viewforum.php?style=5&amp;f=10">Examples</a></div></dt>
					</dl>
				</li>
			</ul>
			<ul class="topiclist forums">
		
	
	
	
			
					<li class="row">
						<dl class="icon forum_read">
				<dt title="No unread posts">

					<span class="ico_forum_read"></span>

										<div class="list-inner">
						<!-- <a class="feed-icon-forum" title="Feed - Forum with long description" href="http://gramziu.pl/phpBB/feed.php?f=11"><img src="./styles/anami/theme/images/feed.gif" alt="Feed - Forum with long description" /></a> -->
												<a href="./viewforum.php?style=5&amp;f=11" class="forumtitle">Forum with long description</a>
						<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.												
												<div class="responsive-show" style="display: none;">
															Topics: <strong>1</strong>
													</div>
											</div>
				</dt>
									<dd class="topics">1<dfn>Topics</dfn></dd>
					<dd class="posts">2<dfn>Posts</dfn></dd>
					<dd class="lastpost">
						<dfn>Last post</dfn><a href="./viewtopic.php?style=5&amp;f=11&amp;p=77#p77" title="Re: Good topic" class="lastsubject">Re: Good topic</a> <br>
						 
						by <a href="./memberlist.php?style=5&amp;mode=viewprofile&amp;u=56" class="username">Kamziu</a>
						07 Dec 2015, 21:06					</dd>
							</dl>
					</li>
			
	
	
			
					<li class="row">
						<dl class="icon forum_read_subforum">
				<dt title="No unread posts">

					<span class="ico_forum_read_subforum"></span>

										<div class="list-inner">
						<!-- <a class="feed-icon-forum" title="Feed - Forum with long description and subforums" href="http://gramziu.pl/phpBB/feed.php?f=12"><img src="./styles/anami/theme/images/feed.gif" alt="Feed - Forum with long description and subforums" /></a> -->
												<a href="./viewforum.php?style=5&amp;f=12" class="forumtitle">Forum with long description and subforums</a>
						<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.																										<br><strong>Subforums:</strong>
															<a href="./viewforum.php?style=5&amp;f=13" class="subforum read" title="No unread posts">First subforum</a>, 															<a href="./viewforum.php?style=5&amp;f=14" class="subforum read" title="No unread posts">Second subforum</a>																				
												<div class="responsive-show" style="display: none;">
															Topics: <strong>1</strong>
													</div>
											</div>
				</dt>
									<dd class="topics">1<dfn>Topics</dfn></dd>
					<dd class="posts">2<dfn>Posts</dfn></dd>
					<dd class="lastpost">
						<dfn>Last post</dfn><a href="./viewtopic.php?style=5&amp;f=12&amp;p=73#p73" title="Re: Another example" class="lastsubject">Re: Another example</a> <br>
						 
						by <a href="./memberlist.php?style=5&amp;mode=viewprofile&amp;u=54" class="username">Famziu</a>
						07 Dec 2015, 20:42					</dd>
							</dl>
					</li>
			
	
	
			
					<li class="row">
						<dl class="icon forum_read_locked">
				<dt title="Forum locked">

					<span class="ico_forum_read_locked"></span>

										<div class="list-inner">
						<!-- <a class="feed-icon-forum" title="Feed - Locked forum with short description" href="http://gramziu.pl/phpBB/feed.php?f=16"><img src="./styles/anami/theme/images/feed.gif" alt="Feed - Locked forum with short description" /></a> -->
												<a href="./viewforum.php?style=5&amp;f=16" class="forumtitle">Locked forum with short description</a>
						<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.												
												<div class="responsive-show" style="display: none;">
															Topics: <strong>1</strong>
													</div>
											</div>
				</dt>
									<dd class="topics">1<dfn>Topics</dfn></dd>
					<dd class="posts">2<dfn>Posts</dfn></dd>
					<dd class="lastpost">
						<dfn>Last post</dfn><a href="./viewtopic.php?style=5&amp;f=16&amp;p=75#p75" title="Re: Next lorem ipsum text" class="lastsubject">Re: Next lorem ipsum text</a> <br>
						 
						by <a href="./memberlist.php?style=5&amp;mode=viewprofile&amp;u=50" style="color: #00AA00;" class="username-coloured">Ramziu</a>
						07 Dec 2015, 20:55					</dd>
							</dl>
					</li>
			
	
	
			
					<li class="row">
						<dl class="icon forum_read_locked">
				<dt title="Forum locked">

					<span class="ico_forum_read_locked"></span>

										<div class="list-inner">
						<!-- <a class="feed-icon-forum" title="Feed - Locked forum with short description and moderator" href="http://gramziu.pl/phpBB/feed.php?f=17"><img src="./styles/anami/theme/images/feed.gif" alt="Feed - Locked forum with short description and moderator" /></a> -->
												<a href="./viewforum.php?style=5&amp;f=17" class="forumtitle">Locked forum with short description and moderator</a>
						<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.													<br><strong>Moderator:</strong> <a href="./memberlist.php?style=5&amp;mode=viewprofile&amp;u=2" style="color: #AA0000;" class="username-coloured">Gramziu</a>
												
												<div class="responsive-show" style="display: none;">
															Topics: <strong>1</strong>
													</div>
											</div>
				</dt>
									<dd class="topics">1<dfn>Topics</dfn></dd>
					<dd class="posts">2<dfn>Posts</dfn></dd>
					<dd class="lastpost">
						<dfn>Last post</dfn><a href="./viewtopic.php?style=5&amp;f=17&amp;p=76#p76" title="Re: Hello!" class="lastsubject">Re: Hello!</a> <br>
						 
						by <a href="./memberlist.php?style=5&amp;mode=viewprofile&amp;u=55" style="color: #00AA00;" class="username-coloured">Tramziu</a>
						07 Dec 2015, 21:01					</dd>
							</dl>
					</li>
			
				</ul>

			</div>
		</div>
		

				
			</div>

		</div>
            
            <h1>CONTACT</h1>
            <p class="root">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam. Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh.</p>

            <!-- Offices -->
            <section class="offices"><h2 class="hidden">Offices</h2>
                <div class="row details">
                    <section class="col-md-3">
                        <h4>NEW YORK</h4>
                        <ul class="list-group">
                            <li class="list-group-item">ADDRESS<br><span>Street name 123</span></li>
                            <li class="list-group-item">PHONE<br><span>+001 555 1234</span></li>
                            <li class="list-group-item">EMAIL<br><span class="red">ny@company.com</span></li>
                        </ul>
                    </section>
                    <section class="col-md-3">
                        <h4>NEW JERSEY</h4>
                        <ul class="list-group">
                            <li class="list-group-item">ADDRESS<br><span>Street name 123</span></li>
                            <li class="list-group-item">PHONE<br><span>+001 555 1234</span></li>
                            <li class="list-group-item">EMAIL<br><span class="red">nj@company.com</span></li>
                        </ul>
                    </section>
                    <section class="col-md-3">
                        <h4>CALIFORNIA</h4>
                        <ul class="list-group">
                            <li class="list-group-item">ADDRESS<br><span>Street name 123</span></li>
                            <li class="list-group-item">PHONE<br><span>+001 555 1234</span></li>
                            <li class="list-group-item">EMAIL<br><span class="red">ca@company.com</span></li>
                        </ul>
                    </section>
                    <section class="col-md-3">
                        <h4>NEVADA</h4>
                        <ul class="list-group">
                            <li class="list-group-item">ADDRESS<br><span>Street name 123</span></li>
                            <li class="list-group-item">PHONE<br><span>+001 555 1234</span></li>
                            <li class="list-group-item">EMAIL<br><span class="red">nv@company.com</span></li>
                        </ul>
                    </section>
                </div>

                <!-- Map -->
                <section class="row map"><h3 class="hidden">Google Map</h3>
                    <div class="col-md-12">
					<!--<img src="img/map.png" alt="Map Photo" />-->
                        <div id="map-canvas" class="map-canvas"></div>
                        </div>
                </section>
            </section>

            <!-- Contact Form -->
            <section>
                <!-- Contact Form Header -->
                <header class="row">
                    <div class="col-md-12">
                        <h1>CONTACT FORM</h1>
                    </div>
                </header>

                <!-- Contact Form -->
                <div class="row contact-form">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" placeholder="Email">
                        </div>
                    </div>
                </div>
                <div class="row contact-form">
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control input-lg" placeholder="Message"></textarea>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Submit Button -->
            <section class="row submit"><h3 class="hidden">Submit</h3>
                <div class="col-md-12">
                    <button type="button" class="btn btn-primary pull-right">SUBMIT</button>
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
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>
        </footer>
    </section>
