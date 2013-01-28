<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="url" content="<?php echo base_url();?>" />
    <title><?php echo (isset($title)) ? $title : ''; ?></title>
    <?php getHeader(); ?>
</head>
    
<body>



<div id="loading_layer" style="display:none"><img src="<?php echo base_url('theme/img/ajax_loader.gif'); ?>" alt="" /></div>
<div class="style_switcher">
			<div class="sepH_c">
				<p>Colors:</p>
				<div class="clearfix">
					<a href="javascript:void(0)" class="style_item jQclr blue_theme style_active" title="blue">blue</a>
					<a href="javascript:void(0)" class="style_item jQclr dark_theme" title="dark">dark</a>
					<a href="javascript:void(0)" class="style_item jQclr green_theme" title="green">green</a>
					<a href="javascript:void(0)" class="style_item jQclr brown_theme" title="brown">brown</a>
					<a href="javascript:void(0)" class="style_item jQclr eastern_blue_theme" title="eastern_blue">eastern blue</a>
					<a href="javascript:void(0)" class="style_item jQclr tamarillo_theme" title="tamarillo">tamarillo</a>
				</div>
			</div>
			<div class="sepH_c">
				<p>Backgrounds:</p>
				<div class="clearfix">
					<span class="style_item jQptrn style_active ptrn_def" title=""></span>
					<span class="ssw_ptrn_a style_item jQptrn" title="ptrn_a"></span>
					<span class="ssw_ptrn_b style_item jQptrn" title="ptrn_b"></span>
					<span class="ssw_ptrn_c style_item jQptrn" title="ptrn_c"></span>
					<span class="ssw_ptrn_d style_item jQptrn" title="ptrn_d"></span>
					<span class="ssw_ptrn_e style_item jQptrn" title="ptrn_e"></span>
				</div>
			</div>
			<div class="sepH_c">
				<p>Layout:</p>
				<div class="clearfix">
					<label class="radio inline"><input type="radio" name="ssw_layout" id="ssw_layout_fluid" value="" checked /> Fluid</label>
					<label class="radio inline"><input type="radio" name="ssw_layout" id="ssw_layout_fixed" value="gebo-fixed" /> Fixed</label>
				</div>
			</div>
			<div class="sepH_c">
				<p>Sidebar position:</p>
				<div class="clearfix">
					<label class="radio inline"><input type="radio" name="ssw_sidebar" id="ssw_sidebar_left" value="" checked /> Left</label>
					<label class="radio inline"><input type="radio" name="ssw_sidebar" id="ssw_sidebar_right" value="sidebar_right" /> Right</label>
				</div>
			</div>
			<div class="sepH_c">
				<p>Show top menu on:</p>
				<div class="clearfix">
					<label class="radio inline"><input type="radio" name="ssw_menu" id="ssw_menu_click" value="" checked /> Click</label>
					<label class="radio inline"><input type="radio" name="ssw_menu" id="ssw_menu_hover" value="menu_hover" /> Hover</label>
				</div>
			</div>
			
			<div class="gh_button-group">
				<a href="#" id="showCss" class="btn btn-primary btn-mini">Show CSS</a>
				<a href="#" id="resetDefault" class="btn btn-mini">Reset</a>
			</div>
			<div class="hide">
				<ul id="ssw_styles">
					<li class="small ssw_mbColor sepH_a" style="display:none">body {<span class="ssw_mColor sepH_a" style="display:none"> color: #<span></span>;</span> <span class="ssw_bColor" style="display:none">background-color: #<span></span> </span>}</li>
					<li class="small ssw_lColor sepH_a" style="display:none">a { color: #<span></span> }</li>
				</ul>
			</div>
		</div>		

      <div id="maincontainer" class="clearfix">
			<!-- header -->
            <header>
                <div class="navbar navbar-fixed-top">
                    <div class="navbar-inner">
                        <div class="container-fluid">
                            <a class="brand" href="dashboard.html"><i class="icon-home icon-white"></i> VELKY System</a>
                            <ul class="nav user_menu pull-right">
                                <li class="hidden-phone hidden-tablet">
                                    <div class="nb_boxes clearfix">
                                        <a data-toggle="modal" data-backdrop="static" href="#myMail" class="label ttip_b" title="New messages">25 <i class="splashy-mail_light"></i></a>
                                        <a data-toggle="modal" data-backdrop="static" href="#myTasks" class="label ttip_b" title="New tasks">10 <i class="splashy-calendar_week"></i></a>
                                    </div>
                                </li>
								<li class="divider-vertical hidden-phone hidden-tablet"></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle nav_condensed" data-toggle="dropdown"><i class="flag-gb"></i> <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
										<li><a href="javascript:void(0)"><i class="flag-de"></i> Deutsch</a></li>
										<li><a href="javascript:void(0)"><i class="flag-fr"></i> Français</a></li>
										<li><a href="javascript:void(0)"><i class="flag-es"></i> Español</a></li>
										<li><a href="javascript:void(0)"><i class="flag-ru"></i> Pусский</a></li>
                                    </ul>
                                </li>
                                <li class="divider-vertical hidden-phone hidden-tablet"></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo base_url('theme/img/user_avatar.png'); ?>" alt="" class="user_avatar" /> Johny Smith <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
										<li><a href="user_profile.html">My Profile</a></li>
										<li><a href="javascrip:void(0)">Another action</a></li>
										<li class="divider"></li>
										<li><a href="login.html">Log Out</a></li>
                                    </ul>
                                </li>
                            </ul>
							<ul class="nav" id="mobile-nav">
								<li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-list-alt icon-white"></i> Forms <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="form_elements.html">Form elements</a></li>
										<li><a href="form_extended.html">Extended form elements</a></li>
										<li><a href="form_validation.html">Form Validation</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-th icon-white"></i> Components <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="alerts_btns.html">Alerts & Buttons</a></li>
										<li><a href="icons.html">Icons</a></li>
										<li><a href="notifications.html">Notifications</a></li>
										<li><a href="tables.html">Tables</a></li>
										<li><a href="tables_more.html">Tables (more examples)</a></li>
										<li><a href="tabs_accordion.html">Tabs & Accordion</a></li>
										<li><a href="tooltips.html">Tooltips, Popovers</a></li>
										<li><a href="typography.html">Typography</a></li>
										<li><a href="widgets.html">Widget boxes</a></li>
										<li class="dropdown">
											<a href="#">Sub menu <b class="caret-right"></b></a>
											<ul class="dropdown-menu">
												<li><a href="#">Sub menu 1.1</a></li>
												<li><a href="#">Sub menu 1.2</a></li>
												<li><a href="#">Sub menu 1.3</a></li>
												<li>
													<a href="#">Sub menu 1.4 <b class="caret-right"></b></a>
													<ul class="dropdown-menu">
														<li><a href="#">Sub menu 1.4.1</a></li>
														<li><a href="#">Sub menu 1.4.2</a></li>
														<li><a href="#">Sub menu 1.4.3</a></li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-wrench icon-white"></i> Plugins <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="charts.html">Charts</a></li>
										<li><a href="calendar.html">Calendar</a></li>
										<li><a href="datatable.html">Datatable</a></li>
										<li><a href="file_manager.html">File Manager</a></li>
										<li><a href="floating_header.html">Floating List Header</a></li>
										<li><a href="google_maps.html">Google Maps</a></li>
										<li><a href="gallery.html">Gallery Grid</a></li>
										<li><a href="wizard.html">Wizard</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-file icon-white"></i> Pages <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="chat.html">Chat</a></li>
										<li><a href="error_404.html">Error 404</a></li>
										<li><a href="invoice.html">Invoice</a></li>
										<li><a href="mailbox.html">Mailbox</a></li>
										<li><a href="search_page.html">Search page</a></li>
										<li><a href="user_profile.html">User profile</a></li>
										<li><a href="user_static.html">User profile (static)</a></li>
									</ul>
								</li>
								<li>
								</li>
								<li>
									<a href="documentation.html"><i class="icon-book icon-white"></i> Help</a>
								</li>
							</ul>
                        </div>
                    </div>
                </div>
                <div class="modal hide fade" id="myMail">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">×</button>
                        <h3>New messages</h3>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-info">In this table jquery plugin turns a table row into a clickable link.</div>
                        <table class="table table-condensed table-striped" data-provides="rowlink">
                            <thead>
                                <tr>
                                    <th>Sender</th>
                                    <th>Subject</th>
                                    <th>Date</th>
                                    <th>Size</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Declan Pamphlett</td>
                                    <td><a href="javascript:void(0)">Lorem ipsum dolor sit amet</a></td>
                                    <td>23/05/2012</td>
                                    <td>25KB</td>
                                </tr>
                                <tr>
                                    <td>Erin Church</td>
                                    <td><a href="javascript:void(0)">Lorem ipsum dolor sit amet</a></td>
                                    <td>24/05/2012</td>
                                    <td>15KB</td>
                                </tr>
                                <tr>
                                    <td>Koby Auld</td>
                                    <td><a href="javascript:void(0)">Lorem ipsum dolor sit amet</a></td>
                                    <td>25/05/2012</td>
                                    <td>28KB</td>
                                </tr>
                                <tr>
                                    <td>Anthony Pound</td>
                                    <td><a href="javascript:void(0)">Lorem ipsum dolor sit amet</a></td>
                                    <td>25/05/2012</td>
                                    <td>33KB</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <a href="javascript:void(0)" class="btn">Go to mailbox</a>
                    </div>
                </div>
                <div class="modal hide fade" id="myTasks">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">×</button>
                        <h3>New Tasks</h3>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-info">In this table jquery plugin turns a table row into a clickable link.</div>
                        <table class="table table-condensed table-striped" data-provides="rowlink">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Summary</th>
                                    <th>Updated</th>
                                    <th>Priority</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>P-23</td>
                                    <td><a href="javascript:void(0)">Admin should not break if URL&hellip;</a></td>
                                    <td>23/05/2012</td>
                                    <td class="tac"><span class="label label-important">High</span></td>
                                    <td>Open</td>
                                </tr>
                                <tr>
                                    <td>P-18</td>
                                    <td><a href="javascript:void(0)">Displaying submenus in custom&hellip;</a></td>
                                    <td>22/05/2012</td>
                                    <td class="tac"><span class="label label-warning">Medium</span></td>
                                    <td>Reopen</td>
                                </tr>
                                <tr>
                                    <td>P-25</td>
                                    <td><a href="javascript:void(0)">Featured image on post types&hellip;</a></td>
                                    <td>22/05/2012</td>
                                    <td class="tac"><span class="label label-success">Low</span></td>
                                    <td>Updated</td>
                                </tr>
                                <tr>
                                    <td>P-10</td>
                                    <td><a href="javascript:void(0)">Multiple feed fixes and&hellip;</a></td>
                                    <td>17/05/2012</td>
                                    <td class="tac"><span class="label label-warning">Medium</span></td>
                                    <td>Open</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <a href="javascript:void(0)" class="btn">Go to task manager</a>
                    </div>
                </div>
            </header>
            
            <!-- main content -->
            <div id="contentwrapper">
                <div class="main_content">
                    
					<div class="row-fluid">
						<div class="span12 tac">
							<ul class="ov_boxes">
								<li>
									<div class="p_bar_up p_canvas">2,4,9,7,12,8,16</div>
									<div class="ov_text">
										<strong>$3 458,00</strong>
										Weekly Sale
									</div>
								</li>
								<li>
									<div class="p_bar_down p_canvas">20,15,18,14,10,13,9,7</div>
									<div class="ov_text">
										<strong>$43 567,43</strong>
										Monthly Sale
									</div>
								</li>
								<li>
									<div class="p_line_up p_canvas">3,5,9,7,12,8,16</div>
									<div class="ov_text">
										<strong>2304</strong>
										Unique visitors (last 24h)
									</div>
								</li>
								<li>
									<div class="p_line_down p_canvas">20,16,14,18,15,14,14,13,12,10,10,8</div>
									<div class="ov_text">
										<strong>30240</strong>
										Unique visitors (last week)
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span12">
							<ul class="dshb_icoNav tac">
								<li><a href="javascript:void(0)" style="background-image: url(<?php echo base_url('theme/img/gCons/multi-agents.png'); ?>)"><span class="label label-info">+10</span> Users</a></li>
								<li><a href="javascript:void(0)" style="background-image: url(<?php echo base_url('theme/img/gCons/world.png'); ?>)">Map</a></li>
								<li><a href="javascript:void(0)" style="background-image: url(<?php echo base_url('theme/img/gCons/configuration.png'); ?>)">Settings</a></li>
								<li><a href="javascript:void(0)" style="background-image: url(<?php echo base_url('theme/img/gCons/lab.png'); ?>)">Lab</a>
								<li><a href="javascript:void(0)" style="background-image: url(<?php echo base_url('theme/img/gCons/van.png'); ?>)"><span class="label label-success">$2851</span> Delivery</a></li>
								<li><a href="javascript:void(0)" style="background-image: url(<?php echo base_url('theme/img/gCons/pie-chart.png'); ?>)">Charts</a></li>
								<li><a href="javascript:void(0)" style="background-image: url(<?php echo base_url('theme/img/gCons/edit.png'); ?>)">Add New Article</a></li>
								<li><a href="javascript:void(0)" style="background-image: url(<?php echo base_url('theme/img/gCons/add-item.png'); ?>)"> Add New Page</a></li>
								<li><a href="javascript:void(0)" style="background-image: url(<?php echo base_url('theme/img/gCons/chat-.png'); ?>)"><span class="label label-important">26</span> Comments</a></li>
							</ul>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span5">
							<h3 class="heading">Visitors by Country <small>last week</small></h3>
							<div id="fl_2" style="height:200px;width:80%;margin:50px auto 0"></div>
						</div>
						<div class="span7">
							<div class="heading clearfix">
								<h3 class="pull-left">Another Chart</h3>
								<span class="pull-right label label-info ttip_t" title="Here is a sample info tooltip">Info</span>
							</div>
							<div id="fl_1" style="height:270px;width:100%;margin:15px auto 0"></div>
						</div>
					</div>
                    <div class="row-fluid">
                        <div class="span6">
							<div class="heading clearfix">
								<h3 class="pull-left">Latest Orders</h3>
								<span class="pull-right label label-important">5 Orders</span>
							</div>
							<table class="table table-striped table-bordered mediaTable">
								<thead>
									<tr>
										<th class="optional">id</th>
										<th class="essential persist">Customer</th>
										<th class="optional">Status</th>
										<th class="optional">Date Added</th>
										<th class="essential">Total</th>
										<th class="essential">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>134</td>
										<td>Summer Throssell</td>
										<td>Pending</td>
										<td>24/04/2012</td>
										<td>$120.23</td>
										<td>
											<a href="#" title="Edit"><i class="splashy-document_letter_edit"></i></a>
											<a href="#" title="Accept"><i class="splashy-document_letter_okay"></i></a>
											<a href="#" title="Remove"><i class="splashy-document_letter_remove"></i></a>
										</td>
									</tr>
									<tr>
										<td>133</td>
										<td>Declan Pamphlett</td>
										<td>Pending</td>
										<td>23/04/2012</td>
										<td>$320.00</td>
										<td>
											<a href="#" title="Edit"><i class="splashy-document_letter_edit"></i></a>
											<a href="#" title="Accept"><i class="splashy-document_letter_okay"></i></a>
											<a href="#" title="Remove"><i class="splashy-document_letter_remove"></i></a>
										</td>
									</tr>
									<tr>
										<td>132</td>
										<td>Erin Church</td>
										<td>Pending</td>
										<td>23/04/2012</td>
										<td>$44.00</td>
										<td>
											<a href="#" title="Edit"><i class="splashy-document_letter_edit"></i></a>
											<a href="#" title="Accept"><i class="splashy-document_letter_okay"></i></a>
											<a href="#" title="Remove"><i class="splashy-document_letter_remove"></i></a>
										</td>
									</tr>
									<tr>
										<td>131</td>
										<td>Koby Auld</td>
										<td>Pending</td>
										<td>22/04/2012</td>
										<td>$180.20</td>
										<td>
											<a href="#" title="Edit"><i class="splashy-document_letter_edit"></i></a>
											<a href="#" title="Accept"><i class="splashy-document_letter_okay"></i></a>
											<a href="#" title="Remove"><i class="splashy-document_letter_remove"></i></a>
										</td>
									</tr>
									<tr>
										<td>130</td>
										<td>Anthony Pound</td>
										<td>Pending</td>
										<td>20/04/2012</td>
										<td>$610.42</td>
										<td>
											<a href="#" title="Edit"><i class="splashy-document_letter_edit"></i></a>
											<a href="#" title="Accept"><i class="splashy-document_letter_okay"></i></a>
											<a href="#" title="Remove"><i class="splashy-document_letter_remove"></i></a>
										</td>
									</tr>
								</tbody>
							</table>
                        </div>
                        <div class="span6">
							<div class="heading clearfix">
								<h3 class="pull-left">Latest Images <small>(gallery grid)</small></h3>
								<span class="pull-right label label-success">10</span>
							</div>
							<div id="small_grid" class="wmk_grid">
								<ul>
									<li class="thumbnail">
										<a title="Image_4 title long title long title long" href="<?php echo base_url('theme/gallery/Image04.jpg'); ?>">
											<img alt="" src="<?php echo base_url('theme/gallery/Image04_tn.jpg'); ?>">
										</a>
										<p>
											<span>302KB<br>15/05/2012</span>
										</p>
									</li>
									<li class="thumbnail">
										<a title="Image_5 title long title long title long" href="<?php echo base_url('theme/gallery/Image05.jpg'); ?>">
											<img alt="" src="<?php echo base_url('theme/gallery/Image05_tn.jpg'); ?>">
										</a>
										<p>
											<span>336KB<br>24/05/2012</span>
										</p>
									</li>
									<li class="thumbnail">
										<a title="Image_6 title long title long title long" href="<?php echo base_url('theme/gallery/Image06.jpg'); ?>">
											<img alt="" src="<?php echo base_url('theme/gallery/Image06_tn.jpg'); ?>">
										</a>
										<p>
											<span>258KB<br>27/06/2012</span>
										</p>
									</li>
									<li class="thumbnail">
										<a title="Image_7 title long title long title long" href="<?php echo base_url('theme/gallery/Image07.jpg'); ?>">
											<img alt="" src="<?php echo base_url('theme/gallery/Image07_tn.jpg'); ?>">
										</a>
										<p>
											<span>338KB<br>22/06/2012</span>
										</p>
									</li>
									<li class="thumbnail">
										<a title="Image_8 title long title long title long" href="<?php echo base_url('theme/gallery/Image08.jpg'); ?>">
											<img alt="" src="<?php echo base_url('theme/gallery/Image08_tn.jpg'); ?>">
										</a>
										<p>
											<span>381KB<br>25/06/2012</span>
										</p>
									</li>
									<li class="thumbnail">
										<a title="Image_9 title long title long title long" href="<?php echo base_url('theme/gallery/Image09.jpg'); ?>">
											<img alt="" src="<?php echo base_url('theme/gallery/Image09_tn.jpg'); ?>">
										</a>
										<p>
											<span>176KB<br>11/06/2012</span>
										</p>
									</li>
									<li class="thumbnail">
										<a title="Image_10 title long title long title long" href="<?php echo base_url('theme/gallery/Image10.jpg'); ?>">
											<img alt="" src="<?php echo base_url('theme/gallery/Image10_tn.jpg'); ?>">
										</a>
										<p>
											<span>380KB<br>20/06/2012</span>
										</p>
									</li>
									<li class="thumbnail">
										<a title="Image_11 title long title long title long" href="<?php echo base_url('theme/gallery/Image11.jpg'); ?>">
											<img alt="" src="<?php echo base_url('theme/gallery/Image11_tn.jpg'); ?>">
										</a>
										<p>
											<span>340KB<br>17/06/2012</span>
										</p>
									</li>
									<li class="thumbnail">
										<a title="Image_12 title long title long title long" href="<?php echo base_url('theme/gallery/Image12.jpg'); ?>">
											<img alt="" src="<?php echo base_url('theme/gallery/Image12_tn.jpg'); ?>">
										</a>
										<p>
											<span>191KB<br>27/05/2012</span>
										</p>
									</li>
									<li class="thumbnail">
										<a title="Image_13 title long title long title long" href="<?php echo base_url('theme/gallery/Image13.jpg'); ?>">
											<img alt="" src="<?php echo base_url('theme/gallery/Image13_tn.jpg'); ?>">
										</a>
										<p>
											<span>314KB<br>24/05/2012</span>
										</p>
									</li>
									<li class="thumbnail">
										<a title="Image_14 title long title long title long" href="<?php echo base_url('theme/gallery/Image14.jpg'); ?>">
											<img alt="" src="<?php echo base_url('theme/gallery/Image14_tn.jpg'); ?>">
										</a>
										<p>
											<span>141KB<br>17/06/2012</span>
										</p>
									</li>
									<li class="thumbnail">
										<a title="Image_15 title long title long title long" href="<?php echo base_url('theme/gallery/Image15.jpg'); ?>">
											<img alt="" src="<?php echo base_url('theme/gallery/Image15_tn.jpg'); ?>">
										</a>
										<p>
											<span>183KB<br>13/05/2012</span>
										</p>
									</li>
									 
								</ul>
							</div>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span8">
							<h3 class="heading">Calendar</h3>
							<div id="calendar"></div>
                        </div>
                        <div class="span4" id="user-list">
							<h3 class="heading">Users <small>last 24 hours</small></h3>
							<div class="row-fluid">
								<div class="input-prepend">
									<span class="add-on ad-on-icon"><i class="icon-user"></i></span><input type="text" class="user-list-search search" placeholder="Search user" />
								</div>
								<ul class="nav nav-pills line_sep">
									<li class="dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#">Sort by <b class="caret"></b></a>
										<ul class="dropdown-menu sort-by">
											<li><a href="javascript:void(0)" class="sort" data-sort="sl_name">by name</a></li>
											<li><a href="javascript:void(0)" class="sort" data-sort="sl_status">by status</a></li>
										</ul>
									</li>
									<li class="dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#">Show <b class="caret"></b></a>
										<ul class="dropdown-menu filter">
											<li class="active"><a href="javascript:void(0)" id="filter-none">All</a></li>
											<li><a href="javascript:void(0)" id="filter-online">Online</a></li>
											<li><a href="javascript:void(0)" id="filter-offline">Offline</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<ul class="list user_list">
								<li>
									<span class="label label-success pull-right sl_status">online</span>
									<a href="#" class="sl_name">John Doe</a><br />
									<small class="s_color sl_email">johnd@example1.com</small>
								</li>
								<li>
									<span class="label label-success pull-right sl_status">online</span>
									<a href="#" class="sl_name">Kate Miller</a><br />
									<small class="s_color sl_email">kmiller@example1.com</small>
								</li>
								<li>
									<span class="label label-important pull-right sl_status">offline</span>
									<a href="#" class="sl_name">James Vandenberg</a><br />
									<small class="s_color sl_email">jamesv@example2.com</small>
								</li>
								<li>
									<span class="label label-important pull-right sl_status">offline</span>
									<a href="#" class="sl_name">Donna Doerr</a><br />
									<small class="s_color sl_email">donnad@example3.com</small>
								</li>
								<li>
									<span class="label label-important pull-right sl_status">offline</span>
									<a href="#" class="sl_name">Perry Weitzel</a><br />
									<small class="s_color sl_email">perryw@example2.com</small>
								</li>
								<li>
									<span class="label label-success pull-right sl_status">online</span>
									<a href="#" class="sl_name">Charles Bledsoe</a><br />
									<small class="s_color sl_email">charlesb@example3.com</small>
								</li>
								<li>
									<span class="label label-important pull-right sl_status">offline</span>
									<a href="#" class="sl_name">Wendy Proto</a><br />
									<small class="s_color sl_email">wnedyp@example1.com</small>
								</li>
								<li>
									<span class="label label-success pull-right sl_status">online</span>
									<a href="#" class="sl_name">Nancy Ibrahim</a><br />
									<small class="s_color sl_email">nancyi@example2.com</small>
								</li>
								<li>
									<span class="label label-important pull-right sl_status">offline</span>
									<a href="#" class="sl_name">Eric Cantrell</a><br />
									<small class="s_color sl_email">ericc@example4.com</small>
								</li>
								<li>
									<span class="label label-success pull-right sl_status">online</span>
									<a href="#" class="sl_name">Andre Hill</a><br />
									<small class="s_color sl_email">andreh@example2.com</small>
								</li>
								<li>
									<span class="label label-success pull-right sl_status">online</span>
									<a href="#" class="sl_name">Laura Taggart</a><br />
									<small class="s_color sl_email">laurat@example3.com</small>
								</li>
								<li>
									<span class="label label-important pull-right sl_status">offline</span>
									<a href="#" class="sl_name">Doug Singer</a><br />
									<small class="s_color sl_email">dougs@example2.com</small>
								</li>
								<li>
									<span class="label label-success pull-right sl_status">online</span>
									<a href="#" class="sl_name">Douglas Arnott</a><br />
									<small class="s_color sl_email">douglasa@example1.com</small>
								</li>
								<li>
									<span class="label label-important pull-right sl_status">offline</span>
									<a href="#" class="sl_name">Lauren Henley</a><br />
									<small class="s_color sl_email">laurenh@example3.com</small>
								</li>
								<li>
									<span class="label label-important pull-right sl_status">offline</span>
									<a href="#" class="sl_name">William Jardine</a><br />
									<small class="s_color sl_email">williamj@example4.com</small>
								</li>
								<li>
									<span class="label label-success pull-right sl_status">online</span>
									<a href="#" class="sl_name">Yves Ouellet</a><br />
									<small class="s_color sl_email">yveso@example2.com</small>
								</li>
							</ul>
							<div class="pagination"><ul class="paging bottomPaging"></ul></div>
                        </div>
                    </div>
                        
                </div>
            </div>
            
			<!-- sidebar -->
            <a href="javascript:void(0)" class="sidebar_switch on_switch ttip_r" title="Hide Sidebar">Sidebar switch</a>
            <!-- sidebar section here -->
            <?php getSideBar(); ?>
            
            <script src="<?php echo base_url('theme/js/jquery.min.js'); ?>"></script>
			<!-- smart resize event -->
			<script src="<?php echo base_url('theme/js/jquery.debouncedresize.min.js'); ?>"></script>
			<!-- hidden elements width/height -->
			<script src="<?php echo base_url('theme/js/jquery.actual.min.js'); ?>"></script>
			<!-- js cookie plugin -->
			<script src="<?php echo base_url('theme/js/jquery_cookie.min.js'); ?>"></script>
			<!-- main bootstrap js -->
			<script src="<?php echo base_url('theme/bootstrap/js/bootstrap.min.js'); ?>"></script>
			<!-- bootstrap plugins -->
			<script src="<?php echo base_url('theme/js/bootstrap.plugins.min.js'); ?>"></script>
			<!-- tooltips -->
			<script src="<?php echo base_url('theme/lib/qtip2/jquery.qtip.min.js'); ?>"></script>
			<!-- jBreadcrumbs -->
			<script src="<?php echo base_url('theme/lib/jBreadcrumbs/js/jquery.jBreadCrumb.1.1.min.js'); ?>"></script>
			<!-- lightbox -->
            <script src="<?php echo base_url('theme/lib/colorbox/jquery.colorbox.min.js'); ?>"></script>
            <!-- fix for ios orientation change -->
			<script src="<?php echo base_url('theme/js/ios-orientationchange-fix.js'); ?>"></script>
			<!-- scrollbar -->
			<script src="<?php echo base_url('theme/lib/antiscroll/antiscroll.js'); ?>"></script>
			<script src="<?php echo base_url('theme/lib/antiscroll/jquery-mousewheel.js'); ?>"></script>
			<!-- to top -->
			<script src="<?php echo base_url('theme/lib/UItoTop/jquery.ui.totop.min.js'); ?>"></script>
			<!-- mobile nav -->
			<script src="<?php echo base_url('theme/js/selectNav.js'); ?>"></script>
			<!-- common functions -->
			<script src="<?php echo base_url('theme/js/gebo_common.js'); ?>"></script>
			
			<script src="<?php echo base_url('theme/lib/jquery-ui/jquery-ui-1.8.23.custom.min.js'); ?>"></script>
            <!-- touch events for jquery ui-->
            <script src="<?php echo base_url('theme/js/forms/jquery.ui.touch-punch.min.js'); ?>"></script>
            <!-- multi-column layout -->
            <script src="<?php echo base_url('theme/js/jquery.imagesloaded.min.js'); ?>"></script>
            <script src="<?php echo base_url('theme/js/jquery.wookmark.js'); ?>"></script>
            <!-- responsive table -->
            <script src="<?php echo base_url('theme/js/jquery.mediaTable.min.js'); ?>"></script>
            <!-- small charts -->
            <script src="<?php echo base_url('theme/js/jquery.peity.min.js'); ?>"></script>
            <!-- charts -->
            <script src="<?php echo base_url('theme/lib/flot/jquery.flot.min.js'); ?>"></script>
            <script src="<?php echo base_url('theme/lib/flot/jquery.flot.resize.min.js'); ?>"></script>
            <script src="<?php echo base_url('theme/lib/flot/jquery.flot.pie.min.js'); ?>"></script>
            <!-- calendar -->
            <script src="<?php echo base_url('theme/lib/fullcalendar/fullcalendar.min.js'); ?>"></script>
            <!-- sortable/filterable list -->
            <script src="<?php echo base_url('theme/lib/list_js/list.min.js'); ?>"></script>
            <script src="<?php echo base_url('theme/lib/list_js/plugins/paging/list.paging.js'); ?>"></script>
            <!-- dashboard functions -->
            <script src="<?php echo base_url('theme/js/gebo_dashboard.js'); ?>"></script>
    
			<script>
				$(document).ready(function() {
					//* show all elements & remove preloader
					setTimeout('$("html").removeClass("js")',1000);
				});
			</script>
		
		</div>  
</body>
</html>