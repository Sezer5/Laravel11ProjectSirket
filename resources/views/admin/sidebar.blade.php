  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="/admin" class="brand-link">
          <img src="{{ asset('assets') }}/Admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
              class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="{{ asset('assets') }}/Admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                      alt="User Image">
              </div>
              <div class="info">
                  <a href="/admin" class="d-block">{{Auth::user()->name}}</a>
              </div>
          </div>
          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a href="{{route('admin.index')}}" class="nav-link">
                          <i class="nav-icon fas fa-home"></i>
                          <p>
                              Home
                              
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('admin.setting')}}" class="nav-link">
                        <i class="nav-icon fas fa-wrench"></i>
                        <p>
                            Settings
                            
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.messages.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-scroll"></i>
                        <p>
                            Messages
                            
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.comments.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-scroll"></i>
                        <p>
                            Comments
                            
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.faq.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-question"></i>
                        <p>
                            Faq
                            
                        </p>
                    </a>
                </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Category
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('admin.category.index') }}" class="nav-link">
                                  <i class="fas fa-list"></i>
                                  <p>Categories</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('admin.category.create') }}" class="nav-link">
                                  <i class="fas fa-plus"></i>
                                  <p>Create Category</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-gift"></i>
                        <p>
                            Product
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.product.index') }}" class="nav-link">
                                <i class="fas fa-list"></i>
                                <p>Products</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.product.create') }}" class="nav-link">
                                <i class="fas fa-plus"></i>
                                <p>Create Product</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-gift"></i>
                        <p>
                            Users
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.user.index') }}" class="nav-link">
                                <i class="fas fa-list"></i>
                                <p>User</p>
                            </a>
                        </li>
                        
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Orders
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.order.index',['slug'=>'New']) }}" class="nav-link">
                                <i class="fas fa-list"></i>
                                <p>New</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.order.index',['slug'=>'Accepted']) }}" class="nav-link">
                                <i class="fas fa-list"></i>
                                <p>Accepted</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.order.index',['slug'=>'Shipping']) }}" class="nav-link">
                                <i class="fas fa-list"></i>
                                <p>Shipping</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.order.index',['slug'=>'Completed']) }}" class="nav-link">
                                <i class="fas fa-list"></i>
                                <p>Completed</p>
                            </a>
                        </li>
                        
                    </ul>
                </li>
                  <li class="nav-header">EXAMPLES</li>
                  
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
