<div class="iq-sidebar  sidebar-default ">
    <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
        <a href="../backend/index.php" class="header-logo">
            <img src="{{asset('assets/images/logo.png')}}" class="img-fluid rounded-normal light-logo" alt="logo">
            <h5 class="logo-title light-logo ml-3">PPE Inventory</h5>
        </a>
        <div class="iq-menu-bt-sidebar ml-0">
        <!-- <i class="wrapper-menu fas fa-bars"></i> -->
            <i class="las la-bars wrapper-menu"></i>
        </div>
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="">
                    
                    <a href="../backend/index.php" class="svg-icon">
                        <svg class="svg-icon" id="p-dash1" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                        <span class="ml-4">Dashboards</span>
                    </a>
                </li>


                
                <li class=" ">
                    <a href="#setup" class="collapsed" data-toggle="collapse" aria-expanded="false">
                    <i class="fab fa-stack-overflow"></i>
                        <span class="ml-4">Company</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="setup" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="active">
                            <a href="/company/list">
                                <i class="las la-minus"></i><span>Company Profile</span>
                            </a>
                        </li>
                       
                    </ul>
                </li>

                <li class=" ">
                    <a href="#admin" class="collapsed" data-toggle="collapse" aria-expanded="false">
                    <i class="fab fa-stack-overflow"></i>
                        <span class="ml-4">Store</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="admin" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="">
                            <a href="/store/index">
                                <i class="las la-minus"></i><span>Store List</span>
                            </a>
                        </li>                       
                    </ul>
                </li>



                <li class=" ">
                    <a href="#area" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <i class="fab fa-stack-overflow"></i>
                        <span class="ml-4">Area</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="area" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        
                        <li class="">
                            <a href="/ppe/index">
                                <i class="las la-minus"></i><span>List Area</span>
                            </a>
                        </li>

                    </ul>
                </li>



                <li class=" ">
                    <a href="#product" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <i class="fab fa-stack-overflow"></i>
                        <span class="ml-4">PPE Stock</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="product" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        
                        <li class="">
                            <a href="/ppe/index">
                                <i class="las la-minus"></i><span>List PPE</span>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class=" ">
                    <a href="#worker" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <i class="fab fa-stack-overflow"></i>
                        <span class="ml-4">Employee List</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="worker" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        
                        <li class="">
                            <a href="/worker/index">
                                <i class="las la-minus"></i><span>List Worker</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="/supervisor/index">
                                <i class="las la-minus"></i><span>List Supervisor</span>
                            </a>
                        </li>


                    </ul>
                </li>


                <li class=" ">
                    <a href="#people" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" id="p-dash8" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                        <span class="ml-4">People</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="people" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="">
                            <a href="../backend/page-list-customers.php">
                                <i class="las la-minus"></i><span>Supervisor</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="../backend/page-add-customers.php">
                                <i class="las la-minus"></i><span>Add Supervisor</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="../backend/page-list-suppliers.php">
                                <i class="las la-minus"></i><span>Worker's</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="../backend/page-add-supplier.php">
                                <i class="las la-minus"></i><span>Add Worker's</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class=" ">
                    <a href="#sale" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" id="p-dash4" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                            <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                        </svg>
                        <span class="ml-4">Issued PPE</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="sale" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="">
                            <a href="../backend/page-add-sale.php">
                                <i class="las la-minus"></i><span>Issue PPE</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="../backend/page-list-sale.php">
                                <i class="las la-minus"></i><span>List Issue PPE</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class=" ">
                    <a href="#purchase" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" id="p-dash5" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                            <line x1="1" y1="10" x2="23" y2="10"></line>
                        </svg>
                        <span class="ml-4">Purchases</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="purchase" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="">
                            <a href="../backend/page-list-purchase.php">
                                <i class="las la-minus"></i><span>List Purchases</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="../backend/page-add-purchase.php">
                                <i class="las la-minus"></i><span>Add purchase</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#return" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" id="p-dash6" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="4 14 10 14 10 20"></polyline>
                            <polyline points="20 10 14 10 14 4"></polyline>
                            <line x1="14" y1="10" x2="21" y2="3"></line>
                            <line x1="3" y1="21" x2="10" y2="14"></line>
                        </svg>
                        <span class="ml-4">Returns</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="return" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="">
                            <a href="../backend/page-list-returns.php">
                                <i class="las la-minus"></i><span>List Returns</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="../backend/page-add-return.php">
                                <i class="las la-minus"></i><span>Add Return</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=" ">
                    <a href="#reports" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <i class="fad fa-file-chart-pie"></i>
                        <span class="ml-4">Reports</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="reports" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="">
                            <a href="../backend/page-report.php">
                                <i class="las la-minus"></i><span>Daily Reports</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="../backend/page-add-return.php">
                                <i class="las la-minus"></i><span>Wickly Reports </span>
                            </a>
                        </li>
                        <li class="">
                            <a href="../backend/page-add-return.php">
                                <i class="las la-minus"></i><span>Monthly Reports </span>
                            </a>
                        </li>
                        <li class="">
                            <a href="../backend/page-add-return.php">
                                <i class="las la-minus"></i><span>Yearly Reports </span>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class=" ">
                    <a href="#message" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-comment-dots"></i>
                        <span class="ml-4">Feedback</span>

                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                        <span class="bg-red p-1 rounded-circle ">5</span>
                    </a>
                    <ul id="message" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="">
                            <a href="../backend/feedback.php">
                                <i class="las la-minus"></i><span>View feedback</span>
                            </a>
                        </li>

                    </ul>
                </li>

               
            </ul>
        </nav>

        <div class="p-3"></div>
    </div>
</div>