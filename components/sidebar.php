       <!-- app-sidebar-start -->

       <div class="app-sidebar" id="sidebar">
           <div class="main-sidebar-header">
               <a href="index.php?page=home" class="header-logo">
                   <img class="main-logo" src="assets/images/logo/tphl_logo.png" alt="logo">
                   <img class="dark-logo" src="assets/images/logo/logo_white.png" alt="logo">
               </a>
           </div>




           <div class="main-sidebar" id="sidebar-scroll">
               <nav class="main-menu-container nav nav-pills flex-column sub-open">
                   <div class="sidebar-left" id="sidebar-left"></div>
                   <ul class="main-menu">
                       <li class="slide <?= ($current_page === 'home') ? 'active' : '' ?>">
                           <a href="index.php?page=home"
                               class="sidebar__menu-item <?= ($current_page === 'home') ? 'active' : '' ?>">
                               <div class="side-menu__icon"><i class="icon-house"></i></div>
                               <span class="sidebar__menu-label">Home</span>
                           </a>
                       </li>

                       <li class="slide <?= ($current_page  == 'product-request') ? 'active' : '' ?>">
                           <a href="index.php?page=product-request" class="sidebar__menu-item <?= ($current_page  == 'product-request') ? 'active' : '' ?>">
                               <div class="side-menu__icon"><i class="fa-solid fa-tags"></i></div>
                               <span class="sidebar__menu-label">Product Request</span>
                           </a>
                       </li>

                       <li class="slide has-sub <?= isActive(['create-user', 'user-lists'], $current_page) ?> <?= isMenuOpen(['create-user', 'user-lists'], $current_page) ?>">
                           <a href="javascript:void(0);" class="sidebar__menu-item <?= ($current_page  == 'create-user') ? 'active' : '' ?>">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-user"></i></div>
                               <span class="sidebar__menu-label">User</span>
                           </a>
                           <ul class="sidebar-menu child1">
                               <li class="slide <?= ($current_page  == 'create-user') ? 'active' : '' ?>">
                                   <a class="sidebar__menu-item <?= ($current_page  == 'create-user') ? 'active' : '' ?>" href="index.php?page=create-user">Add User</a>
                               </li>
                               <li class="slide <?= ($current_page  == 'user-lists') ? 'active' : '' ?>">
                                   <a class="sidebar__menu-item <?= ($current_page  == 'user-lists') ? 'active' : '' ?>" href="index.php?page=user-lists">User List</a>
                               </li>

                           </ul>
                       </li>

                       <li class="slide has-sub <?= isActive(['create-customer', 'customer-lists'], $current_page) ?> ">
                           <a href="javascript:void(0);" class="sidebar__menu-item <?= isMenuOpen(['create-customer', 'customer-lists'], $current_page) ?>">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-users"></i></div>
                               <span class="sidebar__menu-label">Customer</span>
                           </a>
                           <ul class="sidebar-menu child1" style=" <?= isActive(['create-customer', 'customer-lists'], $current_page) ? 'display:block;': ''?> ">
                               <li class="slide <?= ($current_page  == 'create-customer') ? 'active' : '' ?>">
                                   <a class="sidebar__menu-item <?= ($current_page  == 'create-customer') ? 'active' : '' ?>" href="index.php?page=create-customer">Add Customer</a>
                               </li>
                               <li class="slide">
                                   <a class="sidebar__menu-item <?= ($current_page  == 'customer-lists') ? 'active' : '' ?>" href="index.php?page=customer-lists">Customer List</a>
                               </li>

                           </ul>
                       </li>

                       <li class="slide <?= ($current_page  == 'permissions') ? 'active' : '' ?>">
                           <a href="index.php?page=permissions" class="sidebar__menu-item <?= ($current_page  == 'permissions') ? 'active' : '' ?>">
                               <div class="side-menu__icon"><i class="fa-solid fa-tags"></i></div>
                               <span class="sidebar__menu-label">Permissions</span>
                           </a>
                       </li>

                 

                       <li class="slide has-sub <?= isActive(['create-vendor', 'vendor-lists'], $current_page) ?> <?= isMenuOpen(['create-vendor', 'vendor-lists'], $current_page) ?>">
                           <a href="javascript:void(0);"
                               class="sidebar__menu-item <?= isActive(['create-vendor', 'vendor-lists'], $current_page) ?>">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-building"></i></div>
                               <span class="sidebar__menu-label">Vendor</span>
                           </a>

                           <ul class="sidebar-menu child1 <?= isMenuOpen(['create-vendor', 'vendor-lists'], $current_page) ?>">
                               <li class="slide <?= isActive('create-vendor', $current_page) ?>">
                                   <a class="sidebar__menu-item <?= isActive('create-vendor', $current_page) ?>" href="index.php?page=create-vendor">Add Vendor</a>
                               </li>

                               <li class="slide <?= isActive('vendor-lists', $current_page) ?>">
                                   <a class="sidebar__menu-item <?= isActive('vendor-lists', $current_page) ?>" href="index.php?page=vendor-lists">Vendor List</a>
                               </li>
                           </ul>
                       </li>


                       <li class="slide has-sub <?= isMenuOpen(['create-banner', 'banner-lists'], $current_page) ?>">

                           <a href="javascript:void(0);" class="sidebar__menu-item <?= isMenuOpen(['create-banner', 'banner-lists'], $current_page) ?>">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-flag"></i></div>
                               <span class="sidebar__menu-label">Banner</span>
                           </a>

                           <ul class="sidebar-menu child1" style="<?= isMenuOpen(['create-banner', 'banner-lists'], $current_page) ? 'display:block;' : '' ?>">
                               <li class="slide <?= isActive('create-banner', $current_page) ?>">
                                   <a class="sidebar__menu-item <?= isActive('create-banner', $current_page) ?>"
                                       href="index.php?page=create-banner">Add Banner</a>
                               </li>

                               <li class="slide <?= isActive('banner-lists', $current_page) ?>">
                                   <a class="sidebar__menu-item <?= isActive('banner-lists', $current_page) ?>"
                                       href="index.php?page=banner-lists">Banner List</a>
                               </li>
                           </ul>

                       </li>



                       <li class="slide has-sub <?= isMenuOpen(['create-brand-logo', 'brand-lists'], $current_page) ?>">

                           <a href="javascript:void(0);" class="sidebar__menu-item <?= isMenuOpen(['create-brand-logo', 'brand-lists'], $current_page) ?>">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-tags"></i></div>
                               <span class="sidebar__menu-label">Brand</span>
                           </a>

                           <ul class="sidebar-menu child1" style="<?= isMenuOpen(['create-brand-logo', 'brand-lists'], $current_page) ? 'display:block;' : '' ?>">
                               <li class="slide <?= isActive('create-brand-logo', $current_page) ?>">
                                   <a class="sidebar__menu-item <?= isActive('create-brand-logo', $current_page) ?>"
                                       href="index.php?page=create-brand-logo">Add Brand Logo</a>
                               </li>

                               <li class="slide <?= isActive('brand-lists', $current_page) ?>">
                                   <a class="sidebar__menu-item <?= isActive('brand-lists', $current_page) ?>"
                                       href="index.php?page=brand-lists">Brand List</a>
                               </li>
                           </ul>
                       </li>


                       <li class="slide has-sub <?= isMenuOpen(['create-faq', 'faq-lists'], $current_page) ?>">

                           <a href="javascript:void(0);" class="sidebar__menu-item <?= isMenuOpen(['create-faq', 'faq-lists'], $current_page) ?>">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-newspaper"></i></div>
                               <span class="sidebar__menu-label">FAQ</span>
                           </a>

                           <ul class="sidebar-menu child1" style="<?= isMenuOpen(['create-faq', 'faq-lists'], $current_page) ? 'display:block;' : '' ?>">
                               <li class="slide <?= isActive('create-faq', $current_page) ?>">
                                   <a class="sidebar__menu-item <?= isActive('create-faq', $current_page) ?>"
                                       href="index.php?page=create-faq">Add FAQ</a>
                               </li>

                               <li class="slide <?= isActive('faq-lists', $current_page) ?>">
                                   <a class="sidebar__menu-item <?= isActive('faq-lists', $current_page) ?>"
                                       href="index.php?page=faq-lists">FAQ List</a>
                               </li>
                           </ul>
                       </li>


                       <li class="slide has-sub <?= isMenuOpen(['create-blog', 'blog-lists'], $current_page) ?> ">
                           <a href="javascript:void(0);" class="sidebar__menu-item <?= isMenuOpen(['create-blog','blog-lists'],$current_page)?> ">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-regular fa-pen-to-square"></i></div>
                               <span class="sidebar__menu-label">Blog </span>
                           </a>
                           <ul class="sidebar-menu child1 " style="<?=  isMenuOpen(['create-blog', 'blog-lists'],$current_page) ? 'display:block' : ''?>">
                               <li class="slide <?=  isActive('create-blog',$current_page) ?>">
                                   <a class="sidebar__menu-item <?=  isActive('create-blog',$current_page) ?>" href="index.php?page=create-blog">Add Blog </a>
                               </li>
                               <li class="slide <?= isActive('blog-lists',$current_page) ?>">
                                   <a class="sidebar__menu-item <?= isActive('blog-lists',$current_page)?> " href="index.php?page=blog-lists">Blog List</a>
                               </li>

                           </ul>
                       </li>

                       <li class="slide has-sub  <?= isMenuOpen(['create-location','location-lists'],$current_page) ?>">
                           <a href="javascript:void(0);" class="sidebar__menu-item <?= isMenuOpen(['create-location','location-lists'],$current_page) ?>">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-location-dot"></i></div>
                               <span class="sidebar__menu-label">Location </span>
                           </a>
                           <ul class="sidebar-menu child1" style="<?= isMenuOpen(['create-location','location-lists'],$current_page) ? 'display:block' : '' ?>">
                               <li class="slide <?= isActive('create-location', $current_page) ?>">
                                   <a class="sidebar__menu-item  <?= isActive('create-location',  $current_page) ?>" href="index.php?page=create-location">Add Location </a>
                               </li>
                               <li class="slide <?= isActive('location-lists', $current_page) ?>"> 
                                   <a class="sidebar__menu-item <?= isActive( 'location-lists', $current_page) ?>" href="index.php?page=location-lists">Location List</a>
                               </li>

                           </ul>
                       </li>


                       <li class="slide has-sub <?= isMenuOpen(['create-requisition', 'requisition-lists'], $current_page) ?>">
                           <a href="javascript:void(0);" class="sidebar__menu-item <?= isMenuOpen(['create-requisition', 'requisition-lists'], $current_page) ?>">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-clipboard-list"></i></div>
                               <span class="sidebar__menu-label">Requisition </span>
                           </a>
                           <ul class="sidebar-menu child1" style="<?= isMenuOpen(['create-requisition','requisition-lists'],$current_page) ? 'display:block' : '' ?>">
                               <li class="slide <?= isActive( 'create-requisition', $current_page) ?>">
                                   <a class="sidebar__menu-item <?= isActive( 'create-requisition', $current_page) ?>" href="index.php?page=create-requisition">Add Requisition </a>
                               </li>
                               <li class="slide <?= isActive( 'requisition-lists', $current_page) ?>">
                                   <a class="sidebar__menu-item <?= isActive( 'requisition-lists', $current_page) ?>" href="index.php?page=requisition-lists">Requisition List</a>
                               </li>

                           </ul>
                       </li>


                       <li class="slide has-sub <?= isMenuOpen(['create-unit', 'unit-lists'], $current_page) ?>">
                           <a href="javascript:void(0); " class="sidebar__menu-item <?= isMenuOpen(['create-unit', 'unit-lists'], $current_page) ?>">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-weight-scale"></i></div>
                               <span class="sidebar__menu-label">Unit</span>
                           </a>
                           <ul class="sidebar-menu child1" style="<?= isMenuOpen(['create-unit', 'unit-lists'], $current_page) ? 'display:block':''?>">
                               <li class="slide  <?= isActive( 'create-unit', $current_page) ?>">
                                   <a class="sidebar__menu-item <?= isActive( 'create-unit', $current_page) ?>" href="index.php?page=create-unit">Add Unit </a>
                               </li>
                               <li class="slide <?= isActive( 'unit-lists', $current_page) ?>">
                                   <a class="sidebar__menu-item <?= isActive( 'unit-lists', $current_page) ?>" href="index.php?page=unit-lists">Unit List</a>
                               </li>

                           </ul>
                       </li>


                       <li class="slide <?= isActive( 'leads', $current_page) ?>">
                           <a href="index.php?page=leads" class="sidebar__menu-item <?= isActive( 'leads', $current_page) ?>">
                               <div class="side-menu__icon"><i class="fa-solid fa-users"></i></div>
                               <span class="sidebar__menu-label">Leads</span>
                           </a>
                       </li>
                       <li class="slide has-sub <?= isMenuOpen(['create-product', 'product-lists'], $current_page) ?>">
                           <a href="javascript:void(0);" class="sidebar__menu-item  <?= isMenuOpen(['create-product', 'product-lists'], $current_page) ?>">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-box"></i></div>
                               <span class="sidebar__menu-label">Product</span>
                           </a>
                           <ul class="sidebar-menu child1" style=" <?= isMenuOpen(['create-product', 'product-lists'], $current_page) ? 'display:block;' : ''?>">
                               <li class="slide   <?= isActive( 'create-product', $current_page) ?>">
                                   <a class="sidebar__menu-item  <?= isActive( 'create-product', $current_page) ?>" href="index.php?page=create-product">Add Product</a>
                               </li>
                               <li class="slide  <?= isActive( 'product-lists', $current_page) ?>">
                                   <a class="sidebar__menu-item  <?= isActive( 'product-lists', $current_page) ?>" href="index.php?page=product-lists">Product List</a>
                               </li>

                           </ul>
                       </li>

                       <li class="slide has-sub <?= isMenuOpen(['create-purchase', 'purchase-lists'], $current_page) ?>">
                           <a href="javascript:void(0);" class="sidebar__menu-item <?= isMenuOpen(['create-purchase', 'purchase-lists'], $current_page) ?>">
                               <i class="fa-regular fa-angle-down side-menu__angle" ></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-cart-shopping"></i></div>
                               <span class="sidebar__menu-label">Purchase</span>
                           </a>
                           <ul class="sidebar-menu child1" style="<?= isMenuOpen(['create-purchase', 'purchase-lists'], $current_page) ? 'display:block;':''?>">
                               <li class="slide  <?= isActive( 'create-purchase', $current_page) ?>">
                                   <a class="sidebar__menu-item <?= isActive( 'create-purchase', $current_page) ?>" href="index.php?page=create-purchase">Add Purchase</a>
                               </li>
                               <li class="slide <?= isActive( 'purchase-lists', $current_page) ?>">
                                   <a class="sidebar__menu-item <?= isActive( 'purchase-lists', $current_page) ?>" href="index.php?page=purchase-lists">Purchase List</a>
                               </li>

                           </ul>
                       </li>

                       <li class="slide has-sub <?= isMenuOpen(['create-camera', 'camera-lists'], $current_page) ?>">
                           <a href="javascript:void(0);" class="sidebar__menu-item <?= isMenuOpen(['create-camera', 'camera-lists'], $current_page) ?>">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-camera"></i></div>
                               <span class="sidebar__menu-label">Camera</span>
                           </a>
                           <ul class="sidebar-menu child1" style="<?= isMenuOpen(['create-camera', 'camera-lists'], $current_page) ? 'display:block;': ''?>">
                               <li class="slide <?= isActive( 'create-camera', $current_page) ?>">
                                   <a class="sidebar__menu-item  <?= isActive( 'create-camera', $current_page) ?>" href="index.php?page=create-camera">Add Camera</a>
                               </li>
                               <li class="slide <?= isActive( 'camera-lists', $current_page) ?>">
                                   <a class="sidebar__menu-item <?= isActive( 'camera-lists', $current_page) ?>" href="index.php?page=camera-lists">Camera List</a>
                               </li>

                           </ul>
                       </li>


                       <li class="slide has-sub <?= isMenuOpen(['create-project', 'project-lists'], $current_page) ?>">
                           <a href="javascript:void(0);" class="sidebar__menu-item <?= isMenuOpen(['create-project', 'project-lists'], $current_page) ?>">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-diagram-project"></i></div>
                               <span class="sidebar__menu-label">Project</span>
                           </a>
                           <ul class="sidebar-menu child1" style="<?= isMenuOpen(['create-project', 'project-lists'], $current_page) ?>">
                               <li class="slide  <?= isActive( 'create-project', $current_page) ?>" >
                                <a class="sidebar__menu-item   <?= isActive( 'create-project', $current_page) ?>" href="index.php?page=create-project">Add Project
                                   </a>
                               </li>
                               <li class="slide  <?= isActive( 'project-lists', $current_page) ?>">
                                <a class="sidebar__menu-item  <?= isActive( 'project-lists', $current_page) ?>" href="index.php?page=project-lists">Project List </a>
                               </li>


                           </ul>
                       </li>

                       <li class="slide has-sub <?= isMenuOpen(['create-popular-project', 'popular-projects'], $current_page) ?>">
                           <a href="javascript:void(0);" class="sidebar__menu-item  <?= isMenuOpen(['create-popular-project', 'popular-projects'], $current_page) ?>">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-star"></i></div>
                               <span class="sidebar__menu-label">Popular Project</span>
                           </a>
                           <ul class="sidebar-menu child1" style=" <?= isMenuOpen(['create-popular-project', 'popular-projects'], $current_page) ? 'display:block' : '' ?>">
                               <li class="slide  <?= isActive( 'create-popular-project', $current_page) ?>">
                                <a class="sidebar__menu-item  <?= isActive( 'create-popular-project', $current_page) ?>" href="index.php?page=create-popular-project">Add Popular
                                   </a>
                               </li>
                               <li class="slide  <?= isActive( 'popular-projects', $current_page) ?>">
                                <a class="sidebar__menu-item  <?= isActive( 'popular-projects', $current_page) ?>" href="index.php?page=popular-projects">Popular List </a>
                               </li>
                           </ul>
                       </li>

                       <li class="slide has-sub <?= isMenuOpen(['create-order', 'order-lists'], $current_page) ?>">
                           <a href="javascript:void(0);" class="sidebar__menu-item  <?= isMenuOpen(['create-order', 'order-lists'], $current_page) ?>">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-clipboard-check"></i></div>
                               <span class="sidebar__menu-label">Order</span>
                           </a>
                           <ul class="sidebar-menu child1" style="<?= isMenuOpen(['create-order', 'order-lists'], $current_page) ? 'display: block;' : '' ?>">
                               <li class="slide  <?= isActive( 'create-order', $current_page) ?>">
                                <a class="sidebar__menu-item  <?= isActive( 'create-order', $current_page) ?>" href="index.php?page=create-order">Add Order
                                   </a>
                               </li>
                               <li class="slide  <?= isActive( 'order-lists', $current_page) ?>">
                                <a class="sidebar__menu-item  <?= isActive( 'order-lists', $current_page) ?>" href="index.php?page=order-lists">Order List</a>
                               </li>
                           </ul>
                       </li>


                       <li class="slide has-sub <?= isMenuOpen(['create-review', 'review-lists'], $current_page) ?>">
                           <a href="javascript:void(0);" class="sidebar__menu-item <?= isMenuOpen(['create-review', 'review-lists'], $current_page) ?>">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-regular fa-star-half-stroke"></i></div>
                               <span class="sidebar__menu-label">Review</span>
                           </a>
                           <ul class="sidebar-menu child1" style="<?= isMenuOpen(['create-review', 'review-lists'], $current_page) ? 'display:block':''?>">
                               <li class="slide  <?= isActive( 'create-review', $current_page) ?>">
                                <a class="sidebar__menu-item  <?= isActive( 'create-review', $current_page) ?>" href="index.php?page=create-review">Add Review
                                   </a>
                               </li>
                               <li class="slide  <?= isActive( 'review-lists', $current_page) ?>">
                                <a class="sidebar__menu-item  <?= isActive( 'review-lists', $current_page) ?>" href="index.php?page=review-lists">Review List</a>
                               </li>


                           </ul>
                       </li>
                       <li class="slide has-sub <?= isMenuOpen(['create-notification', 'notification-lists'], $current_page) ?>">
                           <a href="javascript:void(0);" class="sidebar__menu-item <?= isMenuOpen(['create-notification', 'notification-lists'], $current_page) ?>">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-regular fa-bell"></i></div>
                               <span class="sidebar__menu-label">Notification</span>
                           </a>
                           <ul class="sidebar-menu child1" style=" <?= isMenuOpen(['create-notification', 'notification-lists'], $current_page) ? 'display:block;' : ''?>">
                               <li class="slide  <?= isActive( 'create-notification', $current_page) ?>">
                                <a class="sidebar__menu-item  <?= isActive( 'create-notification', $current_page) ?>" href="index.php?page=create-notification">Add
                                       Notification
                                   </a>
                               </li>
                               <li class="slide  <?= isActive( 'notification-lists', $current_page) ?>">
                                <a class="sidebar__menu-item  <?= isActive( 'notification-lists', $current_page) ?>" href="index.php?page=notification-lists">Notification
                                       List</a>
                               </li>
                           </ul>
                       </li>

                       <li class="slide has-sub <?= isMenuOpen(['create-payment', 'payment-lists'], $current_page) ?>">
                           <a href="javascript:void(0);" class="sidebar__menu-item <?= isMenuOpen(['create-payment', 'payment-lists'], $current_page) ?>">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-money-bill"></i></div>
                               <span class="sidebar__menu-label">Payment</span>
                           </a>
                           <ul class="sidebar-menu child1" style="<?= isMenuOpen(['create-payment', 'payment-lists'], $current_page) ?>">
                               <li class="slide  <?= isActive( 'create-payment', $current_page) ?>">
                                <a class="sidebar__menu-item  <?= isActive( 'create-payment', $current_page) ?>" href="index.php?page=create-payment">Add Payment
                                   </a>
                               </li>
                               <li class="slide  <?= isActive( 'payment-lists', $current_page) ?>">
                                <a class="sidebar__menu-item  <?= isActive( 'payment-lists', $current_page) ?>" href="index.php?page=payment-lists">Payment List</a>
                               </li>`
                           </ul>
                       </li>

                        
                       <li class="slide <?= ($current_page  == 'site-employee-live') ? 'active' : '' ?>">
                           <a href="index.php?page=site-employee-live" class="sidebar__menu-item <?= ($current_page  == 'site-employee-live') ? 'active' : '' ?>">
                               <div class="side-menu__icon"><i class="fa-solid fa-camera"></i></div>
                               <span class="sidebar__menu-label">Site Employee Live </span>
                           </a>
                       </li>



                       <li class="slide has-sub <?= isMenuOpen(['create-attendence', 'employee-lists','departments','designations','leaves','salary-lists','attendence-lists','holidays','weekends'], $current_page) ?>">
                           <a href="javascript:void(0);" class="sidebar__menu-item <?= isMenuOpen(['create-attendence', 'employee-lists','departments','designation','leaves','salary-lists','attendence-lists','holidays','weekends'], $current_page) ?>">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-users-gear"></i></div>
                               <span class="sidebar__menu-label">HR</span>
                           </a>
                           <ul class="sidebar-menu child1" style="<?= isMenuOpen(['create-attendence', 'employee-lists','departments','designations','leaves','salary-lists','attendence-lists','holidays','weekends'], $current_page) ? 'display:block;' : '' ?>">
                               <li class="slide  <?= isActive( 'employee-lists', $current_page) ?>">
                                   <a class="sidebar__menu-item   <?= isActive( 'employee-lists', $current_page) ?>" href="index.php?page=employee-lists"> Employee List</a>
                               </li>
                               <li class="slide <?= isActive( 'departments', $current_page) ?>">
                                   <a class="sidebar__menu-item   <?= isActive( 'departments', $current_page) ?>" href="index.php?page=departments">Department List</a>
                               </li>
                               <li class="slide <?= isActive('designations', $current_page) ?>">
                                   <a class="sidebar__menu-item   <?= isActive( 'designations', $current_page) ?>" href="index.php?page=designations">Designation List</a>
                               </li>

                               <li class="slide <?= isActive( 'leaves', $current_page) ?>">
                                   <a class="sidebar__menu-item   <?= isActive( 'leaves', $current_page) ?>" href="index.php?page=leaves"> Leave List</a>
                               </li>
                               <li class="slide <?= isActive( 'salary-lists', $current_page) ?>">
                                   <a class="sidebar__menu-item   <?= isActive( 'salary-lists', $current_page) ?>" href="index.php?page=salary-lists"> Salary List</a>
                               </li>

                               <li class="slide <?= isActive( 'create-attendence', $current_page) ?>">
                                   <a class="sidebar__menu-item   <?= isActive( 'create-attendence', $current_page) ?>" href="index.php?page=create-attendence">Add Attendence</a>
                               </li>
                               <li class="slide   <?= isActive( 'attendence-lists', $current_page) ?>">
                                   <a class="sidebar__menu-item   <?= isActive( 'attendence-lists', $current_page) ?>" href="index.php?page=attendence-list"> Attendence List</a>
                               </li>
                               <li class="slide <?= isActive( 'holidays', $current_page) ?>">
                                   <a class="sidebar__menu-item   <?= isActive( 'holidays', $current_page) ?>" href="index.php?page=holidays"> Holiday List</a>
                               </li>

                               <li class="slide <?= isActive( 'weekends', $current_page) ?>">
                                   <a class="sidebar__menu-item   <?= isActive( 'weekends', $current_page) ?>" href="index.php?page=weekends"> Weekend List</a>
                               </li>
                           </ul>
                       </li>


                       <li class="slide <?= isActive( 'employee-leaves', $current_page) ?>">
                           <a href="index.php?page=employee-leaves" class="sidebar__menu-item <?= isActive( 'employee-leaves', $current_page) ?>">
                               <div class="side-menu__icon"><i class="fa-solid fa-calendar-check"></i></div>
                               <span class="sidebar__menu-label">Employee leaves</span>
                           </a>
                       </li>

                       <li class="slide <?= isActive( 'inventories', $current_page) ?>">
                           <a href="index.php?page=inventories" class="sidebar__menu-item <?= isActive( 'inventories', $current_page) ?>">
                               <div class="side-menu__icon"><i class="fa-solid fa-boxes-stacked"></i></div>
                               <span class="sidebar__menu-label">Inventories</span>
                           </a>
                       </li>

                       <li class="slide has-sub <?= isMenuOpen(['auctions'], $current_page) ?>">
                           <a href="javascript:void(0);" class="sidebar__menu-item">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-gavel"></i></div>
                               <span class="sidebar__menu-label">Auction</span>
                           </a>
                           <ul class="sidebar-menu child1" style="<?= isMenuOpen(['auctions'], $current_page) ?>">

                               <li class="slide <?= isActive( 'auctions', $current_page) ?>">
                                <a class="sidebar__menu-item <?= isActive( 'auctions', $current_page) ?>" href="index.php?page=auctions">Auction List</a>
                               </li>
                           </ul>
                       </li>

                       <li class="slide has-sub <?= isMenuOpen(['accounts-list', 'journal-lists','ledger-lists','additional-salary'], $current_page) ?> mb-2">
                           <a href="javascript:void(0);" class="sidebar__menu-item">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-users"></i></div>
                               <span class="sidebar__menu-label">Account</span>
                           </a>
                           <ul class="sidebar-menu child1">

                               <li class="slide <?= isActive( 'accounts-list', $current_page) ?>">
                                <a class="sidebar__menu-item <?= isActive( 'accounts-list', $current_page) ?>" href="index.php?page=accounts-list">Account List</a>
                               </li>

                               <li class="slide <?= isActive( 'journal-lists', $current_page) ?>">
                                <a class="sidebar__menu-item  <?= isActive( 'journal-lists', $current_page) ?>" href="index.php?page=journal-lists">Journal List</a>
                               </li>

                               <li class="slide <?= isActive( 'ledger-lists', $current_page) ?>">
                                <a class="sidebar__menu-item <?= isActive( 'ledger-lists', $current_page) ?>" href="index.php?page=ledger-lists">Ledger List</a>
                               </li>

                               <li class="slide <?= isActive( 'additional-salary', $current_page) ?>">
                                <a class="sidebar__menu-item <?= isActive( 'additional-salary', $current_page) ?>" href="index.php?page=additional-salary">Additional Salary</a>
                               </li>
                           </ul>
                       </li>

                   </ul>
                   <div class="sidebar-right" id="sidebar-right"></div>
               </nav>

           </div>
       </div>
       <div class="app__offcanvas-overlay"></div>
       <!-- app-sidebar-end -->