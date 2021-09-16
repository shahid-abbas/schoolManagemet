
<div
    id="m_ver_menu"
    class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
    m-menu-vertical="1"
    m-menu-scrollable="0" m-menu-dropdown-timeout="500"
>
    <ul class="m-menu__nav ">
        <li class="m-menu__section m-menu__section--first">
            <h4 class="m-menu__section-text text-danger">
                School Management
            </h4>
            <i class="m-menu__section-icon flaticon-more-v3"></i>
        </li>
{{--        <li class="m-menu__item  m-menu__item--active" aria-haspopup="true" >--}}
{{--            <a  href="index.html" class="m-menu__link ">--}}
{{--                <span class="m-menu__item-here"></span>--}}
{{--                <i class="m-menu__link-icon flaticon-user"></i>--}}
{{--                <span class="m-menu__link-text">--}}
{{--										Manage User--}}
{{--									</span>--}}
{{--            </a>--}}
{{--        </li>--}}

        <li class="m-menu__item  m-menu__item--active" aria-haspopup="true"  m-menu-submenu-toggle="hover">

            <a  href="#" class="m-menu__link m-menu__toggle">
                <span class="m-menu__item-here"></span>
                <i class="m-menu__link-icon flaticon-cogwheel"></i>
                <span class="m-menu__link-text">
										Manage User
									</span>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
            <div class="m-menu__submenu ">
                <span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
											<span class="m-menu__link">
												<span class="m-menu__item-here"></span>
												<span class="m-menu__link-text">
													Manage User
												</span>
											</span>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true"  >
                        <a  href="#" class="m-menu__link " onclick="loadPage('{{route('api.userview')}}','GET','Changing',1,0)">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">
													View User
												</span>
                        </a>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                        <a  href="#" class="m-menu__link " onclick="loadPage('{{route('api.userAdd')}}','GET','Changing',1,0)">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">
													Add User
												</span>
                        </a>
                    </li>

                </ul>
            </div>
        </li>
        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">

            <a  href="#" class="m-menu__link m-menu__toggle">
                <span class="m-menu__item-here"></span>
                <i class="m-menu__link-icon flaticon-user"></i>
                <span class="m-menu__link-text">
										Manage Profile
									</span>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
            <div class="m-menu__submenu ">
                <span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
											<span class="m-menu__link">
												<span class="m-menu__item-here"></span>
												<span class="m-menu__link-text">
												Manage Profile
												</span>
											</span>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true" >
                        <a  href="#" class="m-menu__link " onclick="loadPage('{{route('api.profileView')}}','GET','Changing',1,0)">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">
													Your Profile
												</span>
                        </a>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                        <a  href="#" class="m-menu__link " onclick="loadPage('{{route('api.changePassword')}}','GET','Changing',1,0)">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">
													Change Password
												</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
{{--        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">--}}
{{--            <a  href="inner.html" class="m-menu__link ">--}}
{{--                <span class="m-menu__item-here"></span>--}}
{{--                <i class="m-menu__link-icon flaticon-suitcase"></i>--}}
{{--                <span class="m-menu__link-text">--}}
{{--										Finance--}}
{{--									</span>--}}
{{--            </a>--}}
{{--        </li>--}}
        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover" m-menu-link-redirect="1">
            <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                <span class="m-menu__item-here"></span>
                <i class="m-menu__link-icon flaticon-folder-1 "></i>
                <span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">
												Setup Management
											</span>
{{--											<span class="m-menu__link-badge">--}}
{{--												<span class="m-badge m-badge--accent">--}}
{{--													3--}}
{{--												</span>--}}
{{--											</span>--}}
										</span>
									</span>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
            <div class="m-menu__submenu ">
                <span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"  m-menu-link-redirect="1">
											<span class="m-menu__link">
												<span class="m-menu__item-here"></span>
												<span class="m-menu__link-title">
													<span class="m-menu__link-wrap">
														<span class="m-menu__link-text">
															Setup Management
														</span>

													</span>
												</span>
											</span>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                        <a  href="#" class="m-menu__link " onclick="loadPage('{{route('api.studentClassView')}}','GET','Changing',1,0)">
                            <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">
													Student Class
												</span>
                        </a>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover" m-menu-link-redirect="1">
                        <a  href="javascript:;" class="m-menu__link m-menu__toggle" onclick="loadPage('{{route('api.studentYearView')}}','GET','Changing',1,0)">
                            <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">
													Student Year
												</span>

                        </a>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                        <a  href="#" class="m-menu__link " onclick="loadPage('{{route('api.studentGroupView')}}','GET','Changing',1,0)">
                            <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">
													Student Group
												</span>
                        </a>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                        <a  href="#" class="m-menu__link " onclick="loadPage('{{route('api.studentShiftView')}}','GET','Changing',1,0)">
                            <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">
													Student Shift
												</span>
                        </a>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                        <a  href="#" class="m-menu__link " onclick="loadPage('{{route('api.feeCategoryView')}}','GET','Changing',1,0)">
                            <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">
													Fee Category
												</span>
                        </a>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                        <a  href="#" class="m-menu__link " onclick="loadPage('{{route('api.feeAmountView')}}','GET','Changing',1,0)">
                            <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">
													Fee Category Amount
												</span>
                        </a>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                        <a  href="#" class="m-menu__link " onclick="loadPage('{{route('api.ExamTypeView')}}','GET','Changing',1,0)">
                            <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">
													Exam Type
												</span>
                        </a>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                        <a  href="#" class="m-menu__link " onclick="loadPage('{{route('api.schoolSubjectView')}}','GET','Changing',1,0)">
                            <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">
													School Subject
												</span>
                        </a>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                        <a  href="#" class="m-menu__link " onclick="loadPage('{{route('api.assignSubjectView')}}','GET','Changing',1,0)">
                            <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">
													Assign Subject
												</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
            <a  href="inner.html" class="m-menu__link ">
                <span class="m-menu__item-here"></span>
                <i class="m-menu__link-icon flaticon-light"></i>
                <span class="m-menu__link-text">
										Administration
									</span>
            </a>
        </li>
        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
            <a  href="inner.html" class="m-menu__link ">
                <span class="m-menu__item-here"></span>
                <i class="m-menu__link-icon flaticon-share"></i>
                <span class="m-menu__link-text">
										Management
									</span>
            </a>
        </li>
        <li class="m-menu__section ">
            <h4 class="m-menu__section-text">
                Reports
            </h4>
            <i class="m-menu__section-icon flaticon-more-v3"></i>
        </li>
        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
            <a  href="inner.html" class="m-menu__link ">
                <span class="m-menu__item-here"></span>
                <i class="m-menu__link-icon flaticon-graphic"></i>
                <span class="m-menu__link-text">
										Accounting
									</span>
            </a>
        </li>
        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
            <a  href="inner.html" class="m-menu__link ">
                <span class="m-menu__item-here"></span>
                <i class="m-menu__link-icon flaticon-network"></i>
                <span class="m-menu__link-text">
										Products
									</span>
            </a>
        </li>
        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
            <a  href="inner.html" class="m-menu__link ">
                <span class="m-menu__item-here"></span>
                <i class="m-menu__link-icon flaticon-network"></i>
                <span class="m-menu__link-text">
										Sales
									</span>
            </a>
        </li>
        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
            <a  href="inner.html" class="m-menu__link ">
                <span class="m-menu__item-here"></span>
                <i class="m-menu__link-icon flaticon-alert"></i>
                <span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">
												Bills
											</span>
											<span class="m-menu__link-badge">
												<span class="m-badge m-badge--danger">
													12
												</span>
											</span>
										</span>
									</span>
            </a>
        </li>
        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
            <a  href="inner.html" class="m-menu__link ">
                <span class="m-menu__item-here"></span>
                <i class="m-menu__link-icon flaticon-technology"></i>
                <span class="m-menu__link-text">
										IPO
									</span>
            </a>
        </li>
        <li class="m-menu__section ">
            <h4 class="m-menu__section-text">
                System
            </h4>
            <i class="m-menu__section-icon flaticon-more-v3"></i>
        </li>
        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
            <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                <span class="m-menu__item-here"></span>
                <i class="m-menu__link-icon flaticon-clipboard"></i>
                <span class="m-menu__link-text">
										Applications
									</span>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
            <div class="m-menu__submenu ">
                <span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
											<span class="m-menu__link">
												<span class="m-menu__item-here"></span>
												<span class="m-menu__link-text">
													Applications
												</span>
											</span>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                        <a  href="inner.html" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">
													Audit
												</span>
                        </a>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                        <a  href="inner.html" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">
													Notifications
												</span>
                        </a>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                        <a  href="inner.html" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">
													Messages
												</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
            <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                <span class="m-menu__item-here"></span>
                <i class="m-menu__link-icon flaticon-computer"></i>
                <span class="m-menu__link-text">
										Modules
									</span>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
            <div class="m-menu__submenu ">
                <span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
											<span class="m-menu__link">
												<span class="m-menu__item-here"></span>
												<span class="m-menu__link-text">
													Modules
												</span>
											</span>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                        <a  href="inner.html" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">
													Logs
												</span>
                        </a>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                        <a  href="inner.html" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">
													Errors
												</span>
                        </a>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
                        <a  href="inner.html" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                            </i>
                            <span class="m-menu__link-text">
													Configuration
												</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
            <a  href="inner.html" class="m-menu__link ">
                <span class="m-menu__item-here"></span>
                <i class="m-menu__link-icon flaticon-cogwheel"></i>
                <span class="m-menu__link-text">
										Files
									</span>
            </a>
        </li>
        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
            <a  href="inner.html" class="m-menu__link ">
                <span class="m-menu__item-here"></span>
                <i class="m-menu__link-icon flaticon-lifebuoy"></i>
                <span class="m-menu__link-text">
										Security
									</span>
            </a>
        </li>
        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
            <a  href="inner.html" class="m-menu__link ">
                <span class="m-menu__item-here"></span>
                <i class="m-menu__link-icon flaticon-settings"></i>
                <span class="m-menu__link-text">
										Options
									</span>
            </a>
        </li>
    </ul>
</div>
