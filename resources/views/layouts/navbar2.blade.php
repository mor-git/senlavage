		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		<div class="wrapper theme-1-active navbar-top-light">
			<!-- Top Menu Items -->
			<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="mobile-only-brand pull-left">
				<div class="nav-header pull-left">
					<div class="logo-wrap">
						<a href="index.html">
							<img class="brand-img" src="../img/logo.png" alt="brand"/>
							<span class="brand-text">Winkle</span>
						</a>
					</div>
				</div>	
				<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="ti-align-left"></i></a>
				<a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="ti-search"></i></a>
				<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="ti-more"></i></a>
				<form id="search_form" role="search" class="top-nav-search collapse pull-left">
					<div class="input-group">
						<input type="text" name="example-input1-group2" class="form-control" placeholder="Search">
						<span class="input-group-btn">
						<button type="button" class="btn  btn-default"  data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="ti-search"></i></button>
						</span>
					</div>
				</form>
			</div>
			<div id="mobile_only_nav" class="mobile-only-nav pull-right">
				<ul class="nav navbar-right top-nav pull-right">
					<li>
						<a id="open_right_sidebar" href="#"><img src="{{ asset('template/img/user1.png') }}" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
					</li>
				</ul>
			</div>	
		</nav>
			<!-- /Top Menu Items -->
			
			<!-- Left Sidebar Menu -->
			<div class="fixed-sidebar-left">
				<ul class="nav navbar-nav side-nav nicescroll-bar">
					<li class="navigation-header">
						<span>Main</span> 
						<hr/>
					</li>
					<li>
						<a href="index.html"><div class="pull-left"><i class="ti-dashboard  mr-20"></i><span class="right-nav-text">Analytical</span></div><div class="clearfix"></div></a>
					</li>
					<li>
						<a href="index2.html"><div class="pull-left"><i class="ti-money  mr-20"></i><span class="right-nav-text">Cryptocurrency</span></div><div class="pull-right"><span class="label label-success">Hot</span></div><div class="clearfix"></div></a>
					</li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr"><div class="pull-left"><i class="ti-shopping-cart  mr-20"></i><span class="right-nav-text">E-Commerce</span></div><div class="pull-right"><i class="ti-angle-down"></i></div><div class="clearfix"></div></a>
						<ul id="ecom_dr" class="collapse collapse-level-1">
							<li>
								<a href="e-commerce.html">Dashboard</a>
							</li>
							<li>
								<a href="product.html">Products</a>
							</li>
							<li>
								<a href="product-detail.html">Product Detail</a>
							</li>
							<li>
								<a href="add-products.html">Add Product</a>
							</li>
							<li>
								<a href="product-orders.html">Orders</a>
							</li>
							<li>
								<a href="product-cart.html">Cart</a>
							</li>
							<li>
								<a href="product-checkout.html">Checkout</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#app_dr"><div class="pull-left"><i class="ti-image mr-20"></i><span class="right-nav-text">Apps </span></div><div class="pull-right"><i class="ti-angle-down"></i></div><div class="clearfix"></div></a>
						<ul id="app_dr" class="collapse collapse-level-1">
							<li>
								<a href="chats.html">chats</a>
							</li>
							<li>
								<a href="calendar.html">calendar</a>
							</li>
							<li>
								<a href="weather.html">weather</a>
							</li>
							<li>
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#email_dr">Email<div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
								<ul id="email_dr" class="collapse collapse-level-2">
									<li>
										<a href="inbox.html">inbox</a>
									</li>
									<li>
										<a href="inbox-detail.html">detail email</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#contact_dr">Contacts<div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
								<ul id="contact_dr" class="collapse collapse-level-2">
									<li>
										<a href="contact-list.html">list</a>
									</li>
									<li>
										<a href="contact-card.html">cards</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="file-manager.html">File Manager</a>
							</li>
							<li>
								<a href="todo-tasklist.html">To Do/Tasklist</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="profile.html"><div class="pull-left"><i class="ti-briefcase  mr-20"></i><span class="right-nav-text">profile</span></div><div class="clearfix"></div></a>
					</li>
					<li class="navigation-header mt-20">
						<span>component</span> 
						<hr/>
					</li>
					<li>
						<a class="active" href="javascript:void(0);" data-toggle="collapse" data-target="#ui_dr"><div class="pull-left"><i class="ti-pencil-alt  mr-20"></i><span class="right-nav-text">UI Elements</span></div><div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
						<ul id="ui_dr" class="collapse collapse-level-1 two-col-list">
							<li>
								<a href="panels-wells.html">Panels & Wells</a>
							</li>
							<li>
								<a href="modals.html">Modals</a>
							</li>
							<li>
								<a href="sweetalert.html">Sweet Alerts</a>
							</li>
							<li>
								<a href="notifications.html">notifications</a>
							</li>
							<li>
								<a href="typography.html">Typography</a>
							</li>
							<li>
								<a class="active-page" href="buttons.html">Buttons</a>
							</li>
							<li>
								<a href="accordion-toggle.html">Accordion / Toggles</a>
							</li>
							<li>
								<a href="tabs.html">Tabs</a>
							</li>
							<li>
								<a href="progressbars.html">Progress bars</a>
							</li>
							<li>
								<a href="skills-counter.html">Skills & Counters</a>
							</li>
							<li>
								<a href="pricing.html">Pricing Tables</a>
							</li>
							<li>
								<a href="nestable.html">Nestables</a>
							</li>
							<li>
								<a href="dorpdown.html">Dropdowns</a>
							</li>
							<li>
								<a href="bootstrap-treeview.html">Tree View</a>
							</li>
							<li>
								<a href="carousel.html">Carousel</a>
							</li>
							<li>
								<a href="range-slider.html">Range Slider</a>
							</li>
							<li>
								<a href="grid-styles.html">Grid</a>
							</li>
							<li>
								<a href="bootstrap-ui.html">Bootstrap UI</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#form_dr"><div class="pull-left"><i class="ti-check-box  mr-20"></i><span class="right-nav-text">Forms</span></div><div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
						<ul id="form_dr" class="collapse collapse-level-1 two-col-list">
							<li>
								<a href="form-element.html">Basic Forms</a>
							</li>
							<li>
								<a href="form-layout.html">form Layout</a>
							</li>
							<li>
								<a href="form-advanced.html">Form Advanced</a>
							</li>
							<li>
								<a href="form-mask.html">Form Mask</a>
							</li>
							<li>
								<a href="form-picker.html">Form Picker</a>
							</li>
							<li>
								<a href="form-validation.html">form Validation</a>
							</li>
							<li>
								<a href="form-wizard.html">Form Wizard</a>
							</li>
							<li>
								<a href="form-x-editable.html">X-Editable</a>
							</li>
							<li>
								<a href="cropperjs.html">Cropperjs</a>
							</li>
							<li>
								<a href="form-file-upload.html">File Upload</a>
							</li>
							<li>
								<a href="dropzone.html">Dropzone</a>
							</li>
							<li>
								<a href="bootstrap-wysihtml5.html">Bootstrap Wysihtml5</a>
							</li>
							<li>
								<a href="tinymce-wysihtml5.html">Tinymce Wysihtml5</a>
							</li>
							<li>
								<a href="summernote-wysihtml5.html">summernote</a>
							</li>
							<li>
								<a href="typeahead-js.html">typeahead</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#chart_dr"><div class="pull-left"><i class="ti-bar-chart  mr-20"></i><span class="right-nav-text">Charts </span></div><div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
						<ul id="chart_dr" class="collapse collapse-level-1 two-col-list">
							<li>
								<a href="flot-chart.html">Flot Chart</a>
							</li>
							<li>
								<a href="echart.html">Echart Chart</a>
							</li>
							<li>
								<a href="morris-chart.html">Morris Chart</a>
							</li>
							<li>
								<a href="chart.js.html">chartjs</a>
							</li>
							<li>
								<a href="chartist.html">chartist</a>
							</li>
							<li>
								<a href="easy-pie-chart.html">Easy Pie Chart</a>
							</li>
							<li>
								<a href="sparkline.html">Sparkline</a>
							</li>
							<li>
								<a href="peity-chart.html">Peity Chart</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#table_dr"><div class="pull-left"><i class="ti-layout-list-thumb  mr-20"></i><span class="right-nav-text">Tables</span></div><div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
						<ul id="table_dr" class="collapse collapse-level-1 two-col-list">
							<li>
								<a href="basic-table.html">Basic Table</a>
							</li>
							<li>
								<a href="bootstrap-table.html">Bootstrap Table</a>
							</li>
							<li>
								<a href="data-table.html">Data Table</a>
							</li>
							<li>
								<a href="export-table.html">Export Table</a>
							</li>
							<li>
								<a href="responsive-data-table.html">RSPV DataTable</a>
							</li>
							<li>
								<a href="responsive-table.html">Responsive Table</a>
							</li>
							<li>
								<a href="editable-table.html">Editable Table</a>
							</li>
							<li>
								<a href="foo-table.html">Foo Table</a>
							</li>
							<li>
								<a href="jsgrid-table.html">Jsgrid Table</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#icon_dr"><div class="pull-left"><i class="ti-cup mr-20"></i><span class="right-nav-text">Icons</span></div><div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
						<ul id="icon_dr" class="collapse collapse-level-1">
							<li>
								<a href="fontawesome.html">Fontawesome</a>
							</li>
							<li>
								<a href="themify.html">Themify</a>
							</li>
							<li>
								<a href="linea-icon.html">Linea</a>
							</li>
							<li>
								<a href="simple-line-icons.html">Simple Line</a>
							</li>
							<li>
								<a href="pe-icon-7.html">Pe-icon-7</a>
							</li>
							<li>
								<a href="glyphicons.html">Glyphicons</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#maps_dr"><div class="pull-left"><i class=" ti-location-pin  mr-20"></i><span class="right-nav-text">maps</span></div><div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
						<ul id="maps_dr" class="collapse collapse-level-1">
							<li>
								<a href="vector-map.html">Vector Map</a>
							</li>
							<li>
								<a href="google-map.html">Google Map</a>
							</li>
						</ul>
					</li>
					<li class="navigation-header mt-20">
						<span>featured</span> 
						<hr/>
					</li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#pages_dr"><div class="pull-left"><i class="ti-shield mr-20"></i><span class="right-nav-text">Special Pages</span></div><div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
						<ul id="pages_dr" class="collapse collapse-level-1 two-col-list">
							<li>
								<a href="blank.html">Blank Page</a>
							</li>
							<li>
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#auth_dr">Authantication pages<div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
								<ul id="auth_dr" class="collapse collapse-level-2">
									<li>
										<a href="login.html">Login</a>
									</li>
									<li>
										<a href="signup.html">Register</a>
									</li>
									<li>
										<a href="forgot-password.html">Recover Password</a>
									</li>
									<li>
										<a href="reset-password.html">reset Password</a>
									</li>
									<li>
										<a href="locked.html">Lock Screen</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#invoice_dr">Invoice<div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
								<ul id="invoice_dr" class="collapse collapse-level-2">
									<li>
										<a href="invoice.html">Invoice</a>
									</li>
									<li>
										<a href="invoice-archive.html">Invoice Archive</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#error_dr">error pages<div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
								<ul id="error_dr" class="collapse collapse-level-2">
									<li>
										<a href="404.html">Error 404</a>
									</li>
									<li>
										<a href="500.html">Error 500</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="gallery.html">Gallery</a>
							</li>
							<li>
								<a href="timeline.html">Timeline</a>
							</li>
							<li>
								<a href="faq.html">FAQ</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#dropdown_dr_lv1"><div class="pull-left"><i class="ti-layers-alt mr-20"></i><span class="right-nav-text">multilevel</span></div><div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
						<ul id="dropdown_dr_lv1" class="collapse collapse-level-1">
							<li>
								<a href="#">Item level 1</a>
							</li>
							<li>
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#dropdown_dr_lv2">Dropdown level 2<div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
								<ul id="dropdown_dr_lv2" class="collapse collapse-level-2">
									<li>
										<a href="#">Item level 2</a>
									</li>
									<li>
										<a href="#">Item level 2</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="pa-15 mt-10 mb-20">
						<a href="documentation.html" class="documentation-btn txt-light text-center">
							<span class="doc-large-btn">documentation</span>
							<span class="doc-small-btn">d</span>
						</a>
					</li>
				</ul>
			</div>
			<!-- /Left Sidebar Menu -->
			
			<!-- Right Sidebar Menu -->
			<div class="fixed-sidebar-right">
				<ul class="right-sidebar">
					<li>
						<div  class="tab-struct custom-tab-1">
							<!-- <ul role="tablist" class="nav nav-tabs" id="right_sidebar_tab">
								<li class="active" role="presentation"><a aria-expanded="true"  data-toggle="tab" role="tab" id="chat_tab_btn" href="#chat_tab">chat</a></li>
								<li role="presentation" class=""><a  data-toggle="tab" id="messages_tab_btn" role="tab" href="#messages_tab" aria-expanded="false">messages</a></li>
								<li role="presentation" class=""><a  data-toggle="tab" id="todo_tab_btn" role="tab" href="#todo_tab" aria-expanded="false">todo</a></li>
							</ul> -->
							<div class="tab-content" id="right_sidebar_content">
								<div  id="chat_tab" class="tab-pane fade active in" role="tabpanel">
									<div class="chat-cmplt-wrap">
										<div class="chat-box-wrap">
											<div class="add-friend">
												<a href="javascript:void(0)" class="inline-block txt-grey">
													<i class="zmdi zmdi-more"></i>
												</a>	
												<span class="inline-block txt-dark">users</span>
											     <a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-plus"></i></a>
												<div class="clearfix"></div>
											</div>
											<!-- <form role="search" class="chat-search pl-15 pr-15 pb-15">
												<div class="input-group">
													<input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search">
													<span class="input-group-btn">
													<button type="button" class="btn  btn-default"><i class="zmdi zmdi-search"></i></button>
													</span>
												</div>
											</form> -->
											<div id="chat_list_scroll">
												<div class="nicescroll-bar">
													<ul class="chat-list-wrap">
														<li class="chat-list">
															<div class="chat-body">
														
																<a href="javascript:void(0)">
																	<div class="chat-data">
																		<img class="user-img img-circle"  src="../img/user3.png" alt="user"/>
																		<div class="user-data">
																			<span class="name block capitalize-font">Priscila Shy</span>
																			<span class="time block truncate txt-grey">Wise to resolve, and patient to perform.</span>
																		</div>
																		<div class="status online"></div>
																		<div class="clearfix"></div>
																	</div>
																</a>
																<a href="javascript:void(0)">
																	<div class="chat-data">
																		<img class="user-img img-circle"  src="../img/user4.png" alt="user"/>
																		<div class="user-data">
																			<span class="name block capitalize-font">Linda Stack</span>
																			<span class="time block truncate txt-grey">Our patience will achieve more than our force.</span>
																		</div>
																		<div class="status away"></div>
																		<div class="clearfix"></div>
																	</div>
																</a>
															</div>
                                                        </li>
                                                        <li>
                                                            <form method="POST" action="{{ route('logout') }}">
                                                                @csrf
                                                                <a href="{{ route('logout') }}"
                                                                                onclick="event.preventDefault();
                                                                                            this.closest('form').submit();">
                                                                    <i class="zmdi zmdi-power"></i>&nbsp;&nbsp;<span>Déconnection</span>
                                                                </a>
                                                            </form>
                                                        </li>
													</ul>
												</div>
											</div>
										</div>
										<div class="recent-chat-box-wrap">
											<div class="recent-chat-wrap">
												<div class="panel-heading ma-0">
													<div class="goto-back">
														<a  id="goto_back" href="javascript:void(0)" class="inline-block txt-grey">
															<i class="zmdi zmdi-chevron-left"></i>
														</a>	
														<span class="inline-block txt-dark">ryan</span>
														<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-more"></i></a>
														<div class="clearfix"></div>
													</div>
												</div>
												<div class="panel-wrapper collapse in">
													<div class="panel-body pa-0">
														<div class="chat-content">
															<ul class="nicescroll-bar pt-20">
																<li class="friend">
																	<div class="friend-msg-wrap">
																		<img class="user-img img-circle block pull-left"  src="../img/user.png" alt="user"/>
																		<div class="msg pull-left">
																			<p>Hello Jason, how are you, it's been a long time since we last met?</p>
																			<div class="msg-per-detail text-right">
																				<span class="msg-time txt-grey">2:30 PM</span>
																			</div>
																		</div>
																		<div class="clearfix"></div>
																	</div>	
																</li>
																<li class="self mb-10">
																	<div class="self-msg-wrap">
																		<div class="msg block pull-right"> Oh, hi Sarah I'm have got a new job now and is going great.
																			<div class="msg-per-detail text-right">
																				<span class="msg-time txt-grey">2:31 pm</span>
																			</div>
																		</div>
																		<div class="clearfix"></div>
																	</div>	
																</li>
																<li class="self">
																	<div class="self-msg-wrap">
																		<div class="msg block pull-right">  How about you?
																			<div class="msg-per-detail text-right">
																				<span class="msg-time txt-grey">2:31 pm</span>
																			</div>
																		</div>
																		<div class="clearfix"></div>
																	</div>	
																</li>
																<li class="friend">
																	<div class="friend-msg-wrap">
																		<img class="user-img img-circle block pull-left"  src="../img/user.png" alt="user"/>
																		<div class="msg pull-left"> 
																			<p>Not too bad.</p>
																			<div class="msg-per-detail  text-right">
																				<span class="msg-time txt-grey">2:35 pm</span>
																			</div>
																		</div>
																		<div class="clearfix"></div>
																	</div>	
																</li>
															</ul>
														</div>
														<div class="input-group">
															<input type="text" id="input_msg_send" name="send-msg" class="input-msg-send form-control" placeholder="Type something">
															<div class="input-group-btn emojis">
																<div class="dropup">
																	<button type="button" class="btn  btn-default  dropdown-toggle" data-toggle="dropdown" ><i class="zmdi zmdi-mood"></i></button>
																	<ul class="dropdown-menu dropdown-menu-right">
																		<li><a href="javascript:void(0)">Action</a></li>
																		<li><a href="javascript:void(0)">Another action</a></li>
																		<li class="divider"></li>
																		<li><a href="javascript:void(0)">Separated link</a></li>
																	</ul>
																</div>
															</div>
															<div class="input-group-btn attachment">
																<div class="fileupload btn  btn-default"><i class="zmdi zmdi-attachment-alt"></i>
																	<input type="file" class="upload">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							
								
							</div>
						</div>
					</li>
				</ul>
			</div>
            <!-- /Right Sidebar Menu -->
        </div>