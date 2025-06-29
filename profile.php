<?php include 'header.php'; ?>

<?php include 'nav.php'; ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Search products">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" href="#">+ Create New Project</a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                  <h6 class="p-3 mb-0">Projects</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-file-outline text-primary"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Software Development</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-web text-info"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">UI Development</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-layers text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Software Testing</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all projects</p>
                </div>
              </li>
              <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-view-grid"></i>
                </a>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-email"></i>
                  <span class="count bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Messages</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                      <p class="text-muted mb-0"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../../assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                      <p class="text-muted mb-0"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                      <p class="text-muted mb-0"> 18 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">4 new messages</p>
                </div>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Event today</p>
                      <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                      <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-link-variant text-warning"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Launch Admin</p>
                      <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all notifications</p>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="assets/images/faces/face15.jpg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Henry Klein</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Advanced settings</p>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">


<div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <h4 class="card-title">First Global Bank Account</h4>
                <div>
                  <button class="btn btn-outline-primary btn-icon-text mr-2">
                    <i class="mdi mdi-printer btn-icon-prepend"></i> Print Statement
                  </button>
                  <button class="btn btn-primary btn-icon-text">
                    <i class="mdi mdi-security btn-icon-prepend"></i> Security Settings
                  </button>
                </div>
              </div>
              
              <div class="row mt-5">
                <div class="col-md-4">
                  <div class="text-center">
                    <div class="position-relative mb-4">
                      <img src="assets/images/faces/face15.jpg" class="img-lg rounded-circle" alt="profile"/>
                      <span class="badge badge-success badge-position">Verified</span>
                    </div>
                    <h4>Henry Klein</h4>
                    <p class="text-muted mb-2">Premium Banking Client</p>
                    <p class="text-success font-weight-bold">Member Since: Jan 2015</p>
                    
                    <div class="border-top border-bottom py-3 my-3">
                      <div class="d-flex justify-content-between">
                        <p class="mb-0">Client ID:</p>
                        <p class="mb-0 font-weight-bold">FGB789456123</p>
                      </div>
                      <div class="d-flex justify-content-between">
                        <p class="mb-0">Last Login:</p>
                        <p class="mb-0 font-weight-bold">Today, 09:42 AM</p>
                      </div>
                    </div>
                    
                    <div class="alert alert-success small py-2">
                      <i class="mdi mdi-check-circle-outline"></i> Your profile is 85% complete
                    </div>
                  </div>
                </div>
                
                <div class="col-md-8">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" class="form-control bg-light" value="Henry Klein" readonly>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Account Number</label>
                        <div class="input-group">
                          <input type="text" class="form-control bg-light" value="0247896541" readonly>
                          <div class="input-group-append">
                            <button class="btn btn-sm btn-outline-secondary" type="button">
                              <i class="mdi mdi-eye"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" class="form-control bg-light" value="henry.klein@example.com" readonly>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Phone Number</label>
                        <div class="input-group">
                          <input type="text" class="form-control bg-light" value="+1 (234) 567-890" readonly>
                          <div class="input-group-append">
                            <button class="btn btn-sm btn-outline-secondary" type="button">
                              <i class="mdi mdi-pencil"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label>Registered Address</label>
                    <textarea class="form-control bg-light" rows="2" readonly>123 Main Street, New York, NY 10001</textarea>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Account Type</label>
                        <input type="text" class="form-control bg-light" value="Premium Savings" readonly>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Account Status</label>
                        <input type="text" class="form-control bg-success text-white" value="Active" readonly>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Credit Score</label>
                        <input type="text" class="form-control bg-info text-white" value="785 (Good)" readonly>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Account Security</h4>
              <div class="security-status mb-4">
                <div class="d-flex justify-content-between mb-2">
                  <span>Profile Security</span>
                  <span class="font-weight-bold">Strong</span>
                </div>
                <div class="progress">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 85%"></div>
                </div>
              </div>
              
              <div class="security-features">
                <div class="d-flex align-items-center py-2 border-bottom">
                  <div class="icon-box bg-success me-3">
                    <i class="mdi mdi-check text-white"></i>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-1">Two-Factor Authentication</h6>
                    <p class="text-muted small mb-0">Enabled (SMS verification)</p>
                  </div>
                  <button class="btn btn-sm btn-outline-secondary">Change</button>
                </div>
                
                <div class="d-flex align-items-center py-2 border-bottom">
                  <div class="icon-box bg-success me-3">
                    <i class="mdi mdi-check text-white"></i>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-1">Login Alerts</h6>
                    <p class="text-muted small mb-0">Active for all devices</p>
                  </div>
                  <button class="btn btn-sm btn-outline-secondary">Manage</button>
                </div>
                
                <div class="d-flex align-items-center py-2 border-bottom">
                  <div class="icon-box bg-warning me-3">
                    <i class="mdi mdi-alert text-white"></i>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-1">Password</h6>
                    <p class="text-muted small mb-0">Last changed 3 months ago</p>
                  </div>
                  <button class="btn btn-sm btn-primary">Update</button>
                </div>
                
                <div class="d-flex align-items-center py-2">
                  <div class="icon-box bg-danger me-3">
                    <i class="mdi mdi-close text-white"></i>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-1">Biometric Login</h6>
                    <p class="text-muted small mb-0">Not configured</p>
                  </div>
                  <button class="btn btn-sm btn-primary">Enable</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Linked Accounts</h4>
              <p class="card-description">Your connected financial products</p>
              
              <div class="linked-accounts">
                <div class="account-card bg-primary text-white p-3 rounded mb-3">
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <h5 class="mb-1">Premium Savings</h5>
                      <p class="small mb-0">•••• 6541</p>
                    </div>
                    <div class="text-right">
                      <h4 class="mb-1">$24,750.50</h4>
                      <p class="small mb-0">Available Balance</p>
                    </div>
                  </div>
                </div>
                
                <div class="account-card bg-secondary text-white p-3 rounded mb-3">
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <h5 class="mb-1">Global Checking</h5>
                      <p class="small mb-0">•••• 3028</p>
                    </div>
                    <div class="text-right">
                      <h4 class="mb-1">$8,425.20</h4>
                      <p class="small mb-0">Available Balance</p>
                    </div>
                  </div>
                </div>
                
                <div class="account-card bg-dark text-white p-3 rounded mb-3">
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <h5 class="mb-1">First Global Credit Card</h5>
                      <p class="small mb-0">•••• 5578</p>
                    </div>
                    <div class="text-right">
                      <h4 class="mb-1">$12,000.00</h4>
                      <p class="small mb-0">Credit Limit</p>
                    </div>
                  </div>
                </div>
                
                <button class="btn btn-outline-primary btn-block mt-2">
                  <i class="mdi mdi-plus"></i> Link Another Account
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Recent Transactions</h4>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Description</th>
                      <th>Account</th>
                      <th>Amount</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Today</td>
                      <td>Mobile Deposit</td>
                      <td>•••• 6541</td>
                      <td class="text-success">+$1,250.00</td>
                      <td><span class="badge badge-success">Completed</span></td>
                      <td><button class="btn btn-sm btn-outline-secondary">Details</button></td>
                    </tr>
                    <tr>
                      <td>Yesterday</td>
                      <td>Electric Bill Payment</td>
                      <td>•••• 3028</td>
                      <td class="text-danger">-$185.75</td>
                      <td><span class="badge badge-success">Completed</span></td>
                      <td><button class="btn btn-sm btn-outline-secondary">Details</button></td>
                    </tr>
                    <tr>
                      <td>Jul 12</td>
                      <td>Transfer to John Smith</td>
                      <td>•••• 6541</td>
                      <td class="text-danger">-$500.00</td>
                      <td><span class="badge badge-success">Completed</span></td>
                      <td><button class="btn btn-sm btn-outline-secondary">Details</button></td>
                    </tr>
                    <tr>
                      <td>Jul 10</td>
                      <td>Credit Card Payment</td>
                      <td>•••• 3028</td>
                      <td class="text-danger">-$1,200.00</td>
                      <td><span class="badge badge-warning">Pending</span></td>
                      <td><button class="btn btn-sm btn-outline-secondary">Details</button></td>
                    </tr>
                    <tr>
                      <td>Jul 8</td>
                      <td>Salary Deposit</td>
                      <td>•••• 6541</td>
                      <td class="text-success">+$5,800.00</td>
                      <td><span class="badge badge-success">Completed</span></td>
                      <td><button class="btn btn-sm btn-outline-secondary">Details</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="text-center mt-3">
                <button class="btn btn-primary">View All Transactions</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>





          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
         <?php include 'footer.php'; ?>