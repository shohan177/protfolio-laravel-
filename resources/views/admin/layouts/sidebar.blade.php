<div class="deznav">
    <div class="deznav-scroll">

        <ul class="metismenu" id="menu">
            @if (isset(Auth::user() -> name))
            <li><a class="" href="{{ route('home') }}" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                {{-- <ul aria-expanded="false">
                    <li><a href="index.html">Dashboard</a></li>
                    <li><a href="search-job.html">Search Job</a></li>
                    <li><a href="application.html">Application</a></li>
                    <li><a href="profile.html">Profile</a></li>
                    <li><a href="companies.html">Companies</a></li>
                    <li><a href="statistics.html">Statistics</a></li>
                </ul> --}}
            </li>
            <li>

                <a class="" href="{{ route('skill.index') }}" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Skill & Service</span>
                </a>
                {{-- <ul aria-expanded="false">
                    <li><a href="app-profile.html">Profile</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                        <ul aria-expanded="false">
                            <li><a href="email-compose.html">Compose</a></li>
                            <li><a href="email-inbox.html">Inbox</a></li>
                            <li><a href="email-read.html">Read</a></li>
                        </ul>
                    </li>
                    <li><a href="app-calender.html">Calendar</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                        <ul aria-expanded="false">
                            <li><a href="ecom-product-grid.html">Product Grid</a></li>
                            <li><a href="ecom-product-list.html">Product List</a></li>
                            <li><a href="ecom-product-detail.html">Product Details</a></li>
                            <li><a href="ecom-product-order.html">Order</a></li>
                            <li><a href="ecom-checkout.html">Checkout</a></li>
                            <li><a href="ecom-invoice.html">Invoice</a></li>
                            <li><a href="ecom-customers.html">Customers</a></li>
                        </ul>
                    </li>
                </ul> --}}
            </li>
            <li><a class="" href="{{ route('setting.index') }}" aria-expanded="false">
                    <i class="flaticon-381-controls-3"></i>
                    <span class="nav-text">Setting</span>
                </a>

            </li>
            <li><a class="" href="{{ route('experiance.show') }}" aria-expanded="false">
                    <i class="flaticon-381-internet"></i>
                    <span class="nav-text">Experiance</span>
                </a>

            </li>
            @endif
            <li><a class="" href="{{ route('review.show') }}" aria-expanded="false">
                    <i class="flaticon-381-heart"></i>
                    <span class="nav-text">Review</span>
                </a>

            </li>
            @if (isset(Auth::user() -> name))
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-381-network"></i>
                <span class="nav-text">Projects</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('projectGellary.show') }}">Project Gallary</a></li>
                <li><a href="{{ route('projects.index') }}">Add Project</a></li>
            </ul>
            @endif
        </li>

            {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-notepad"></i>
                    <span class="nav-text">Forms</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="form-element.html">Form Elements</a></li>
                    <li><a href="form-wizard.html">Wizard</a></li>
                    <li><a href="form-editor-summernote.html">Summernote</a></li>
                    <li><a href="form-pickers.html">Pickers</a></li>
                    <li><a href="form-validation-jquery.html">Jquery Validate</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-network"></i>
                    <span class="nav-text">Table</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                    <li><a href="table-datatable-basic.html">Datatable</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-layer-1"></i>
                    <span class="nav-text">Pages</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="page-register.html">Register</a></li>
                    <li><a href="page-login.html">Login</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                        <ul aria-expanded="false">
                            <li><a href="page-error-400.html">Error 400</a></li>
                            <li><a href="page-error-403.html">Error 403</a></li>
                            <li><a href="page-error-404.html">Error 404</a></li>
                            <li><a href="page-error-500.html">Error 500</a></li>
                            <li><a href="page-error-503.html">Error 503</a></li>
                        </ul>
                    </li>
                    <li><a href="page-lock-screen.html">Lock Screen</a></li>
                </ul>
            </li> --}}
        </ul>

        {{-- <div class="copyright">
            <p><strong>Admin Dashboard</strong> ©All Rights Reserved</p>
            <p>by Shohan</p>
        </div> --}}
    </div>
</div>
