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
      <div class="main-panel">
       
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0">Cards Management</h4>
                </div>
                <div>
                  <button type="button" class="btn btn-primary btn-icon-text" data-bs-toggle="modal" data-bs-target="#newCardModal">
                    <i class="mdi mdi-credit-card-plus btn-icon-prepend"></i>
                    Request New Card
                  </button>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Cards Summary -->
          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="d-inline-block">
                      <h4 class="card-title">Active Cards</h4>
                      <h2 class="text-primary">3</h2>
                    </div>
                    <div class="d-inline-block">
                      <i class="mdi mdi-credit-card-multiple text-primary icon-lg"></i>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">Total active cards linked to your account</p>
                </div>
              </div>
            </div>
            
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="d-inline-block">
                      <h4 class="card-title">Total Limit</h4>
                      <h2 class="text-success">$25,000</h2>
                    </div>
                    <div class="d-inline-block">
                      <i class="mdi mdi-finance text-success icon-lg"></i>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">Combined credit limit across all cards</p>
                </div>
              </div>
            </div>
            
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="d-inline-block">
                      <h4 class="card-title">Available Credit</h4>
                      <h2 class="text-info">$18,750</h2>
                    </div>
                    <div class="d-inline-block">
                      <i class="mdi mdi-cash-multiple text-info icon-lg"></i>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">Available credit across all cards</p>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Cards List -->
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Your Cards</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Card</th>
                          <th>Number</th>
                          <th>Type</th>
                          <th>Expiry</th>
                          <th>Limit</th>
                          <th>Available</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="py-1">
                            <img src="assets/images/visa.png" alt="Visa" style="width: 50px;">
                          </td>
                          <td>•••• •••• •••• 4512</td>
                          <td>Visa Platinum</td>
                          <td>06/2025</td>
                          <td>$10,000</td>
                          <td>$7,500</td>
                          <td><label class="badge badge-success">Active</label></td>
                          <td>
                            <button class="btn btn-outline-primary btn-sm">Details</button>
                            <button class="btn btn-outline-danger btn-sm">Lock</button>
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="assets/images/mastercard.png" alt="Mastercard" style="width: 50px;">
                          </td>
                          <td>•••• •••• •••• 7843</td>
                          <td>Mastercard Gold</td>
                          <td>09/2024</td>
                          <td>$8,000</td>
                          <td>$6,250</td>
                          <td><label class="badge badge-success">Active</label></td>
                          <td>
                            <button class="btn btn-outline-primary btn-sm">Details</button>
                            <button class="btn btn-outline-danger btn-sm">Lock</button>
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="assets/images/amex.png" alt="Amex" style="width: 50px;">
                          </td>
                          <td>•••• •••• •••• 9012</td>
                          <td>American Express</td>
                          <td>12/2026</td>
                          <td>$7,000</td>
                          <td>$5,000</td>
                          <td><label class="badge badge-warning">Pending</label></td>
                          <td>
                            <button class="btn btn-outline-primary btn-sm">Details</button>
                            <button class="btn btn-outline-secondary btn-sm" disabled>Lock</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Recent Card Transactions -->
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Recent Card Transactions</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>Card</th>
                          <th>Merchant</th>
                          <th>Amount</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>2023-06-15</td>
                          <td>Visa •••• 4512</td>
                          <td>Amazon.com</td>
                          <td class="text-danger">-$125.99</td>
                          <td><label class="badge badge-success">Completed</label></td>
                          <td><button class="btn btn-outline-info btn-sm">Dispute</button></td>
                        </tr>
                        <tr>
                          <td>2023-06-14</td>
                          <td>Mastercard •••• 7843</td>
                          <td>Starbucks</td>
                          <td class="text-danger">-$5.75</td>
                          <td><label class="badge badge-success">Completed</label></td>
                          <td><button class="btn btn-outline-info btn-sm">Dispute</button></td>
                        </tr>
                        <tr>
                          <td>2023-06-12</td>
                          <td>Visa •••• 4512</td>
                          <td>Netflix</td>
                          <td class="text-danger">-$14.99</td>
                          <td><label class="badge badge-success">Completed</label></td>
                          <td><button class="btn btn-outline-info btn-sm">Dispute</button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        
        <!-- New Card Modal -->
        <div class="modal fade" id="newCardModal" tabindex="-1" aria-labelledby="newCardModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="newCardModalLabel">Request New Card</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="mb-3">
                    <label for="cardType" class="form-label">Card Type</label>
                    <select class="form-select" id="cardType">
                      <option selected>Select card type</option>
                      <option value="visa_platinum">Visa Platinum</option>
                      <option value="mastercard_gold">Mastercard Gold</option>
                      <option value="amex">American Express</option>
                      <option value="debit">Debit Card</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="cardDesign" class="form-label">Card Design</label>
                    <div class="row">
                      <div class="col-3">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="cardDesign" id="design1" checked>
                          <label class="form-check-label" for="design1">
                            <img src="assets/images/card-design1.png" class="img-fluid" alt="Design 1">
                          </label>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="cardDesign" id="design2">
                          <label class="form-check-label" for="design2">
                            <img src="assets/images/card-design2.png" class="img-fluid" alt="Design 2">
                          </label>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="cardDesign" id="design3">
                          <label class="form-check-label" for="design3">
                            <img src="assets/images/card-design3.png" class="img-fluid" alt="Design 3">
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="deliveryAddress" class="form-label">Delivery Address</label>
                    <textarea class="form-control" id="deliveryAddress" rows="3"></textarea>
                  </div>
                  <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="expressDelivery">
                    <label class="form-check-label" for="expressDelivery">
                      Express Delivery (+$15.00)
                    </label>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Submit Request</button>
              </div>
            </div>
          </div>
        </div>
        






          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
         <?php include 'footer.php'; ?>