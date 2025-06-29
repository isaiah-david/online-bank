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
                  <h4 class="font-weight-bold mb-0">International Wire Transfer</h4>
                </div>
                <div>
                  <button type="button" class="btn btn-primary btn-icon-text" data-bs-toggle="modal" data-bs-target="#newWireModal">
                    <i class="mdi mdi-bank-transfer-out btn-icon-prepend"></i>
                    New Transfer
                  </button>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Transfer Summary -->
          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="d-inline-block">
                      <h4 class="card-title">Today's Limit</h4>
                      <h2 class="text-primary">$10,000</h2>
                    </div>
                    <div class="d-inline-block">
                      <i class="mdi mdi-finance text-primary icon-lg"></i>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">Maximum transfer amount for today</p>
                </div>
              </div>
            </div>
            
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="d-inline-block">
                      <h4 class="card-title">Used Today</h4>
                      <h2 class="text-success">$2,500</h2>
                    </div>
                    <div class="d-inline-block">
                      <i class="mdi mdi-cash-usd text-success icon-lg"></i>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">Amount transferred today</p>
                </div>
              </div>
            </div>
            
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="d-inline-block">
                      <h4 class="card-title">Remaining</h4>
                      <h2 class="text-info">$7,500</h2>
                    </div>
                    <div class="d-inline-block">
                      <i class="mdi mdi-wallet-travel text-info icon-lg"></i>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">Available for transfer today</p>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Recent Transfers -->
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Recent International Transfers</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Reference</th>
                          <th>Date</th>
                          <th>Beneficiary</th>
                          <th>Bank/Country</th>
                          <th>Amount</th>
                          <th>Fee</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>INT-784512</td>
                          <td>2023-06-15</td>
                          <td>John Smith</td>
                          <td>HSBC/United Kingdom</td>
                          <td class="text-danger">-$1,250.00</td>
                          <td class="text-danger">-$25.00</td>
                          <td><label class="badge badge-success">Completed</label></td>
                          <td>
                            <button class="btn btn-outline-primary btn-sm">Details</button>
                            <button class="btn btn-outline-secondary btn-sm">Receipt</button>
                          </td>
                        </tr>
                        <tr>
                          <td>INT-659823</td>
                          <td>2023-06-10</td>
                          <td>Maria Garcia</td>
                          <td>Santander/Spain</td>
                          <td class="text-danger">-$750.00</td>
                          <td class="text-danger">-$20.00</td>
                          <td><label class="badge badge-success">Completed</label></td>
                          <td>
                            <button class="btn btn-outline-primary btn-sm">Details</button>
                            <button class="btn btn-outline-secondary btn-sm">Receipt</button>
                          </td>
                        </tr>
                        <tr>
                          <td>INT-324598</td>
                          <td>2023-06-05</td>
                          <td>Wei Zhang</td>
                          <td>ICBC/China</td>
                          <td class="text-danger">-$2,000.00</td>
                          <td class="text-danger">-$35.00</td>
                          <td><label class="badge badge-warning">Processing</label></td>
                          <td>
                            <button class="btn btn-outline-primary btn-sm">Details</button>
                            <button class="btn btn-outline-danger btn-sm">Cancel</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Exchange Rates -->
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Current Exchange Rates</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Currency</th>
                          <th>Code</th>
                          <th>Buy Rate</th>
                          <th>Sell Rate</th>
                          <th>Last Updated</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Euro</td>
                          <td>EUR</td>
                          <td>0.92</td>
                          <td>0.90</td>
                          <td>2023-06-15 09:45 UTC</td>
                        </tr>
                        <tr>
                          <td>British Pound</td>
                          <td>GBP</td>
                          <td>0.80</td>
                          <td>0.78</td>
                          <td>2023-06-15 09:45 UTC</td>
                        </tr>
                        <tr>
                          <td>Japanese Yen</td>
                          <td>JPY</td>
                          <td>140.25</td>
                          <td>138.50</td>
                          <td>2023-06-15 09:45 UTC</td>
                        </tr>
                        <tr>
                          <td>Canadian Dollar</td>
                          <td>CAD</td>
                          <td>1.35</td>
                          <td>1.33</td>
                          <td>2023-06-15 09:45 UTC</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <p class="text-muted mt-2">Rates are for indicative purposes only</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        
        <!-- New Wire Transfer Modal -->
        <div class="modal fade" id="newWireModal" tabindex="-1" aria-labelledby="newWireModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="newWireModalLabel">New International Wire Transfer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="fromAccount" class="form-label">From Account</label>
                        <select class="form-select" id="fromAccount" required>
                          <option value="" selected disabled>Select account</option>
                          <option value="1000234567">Checking ••••4567 ($12,345.67)</option>
                          <option value="1000345678">Savings ••••5678 ($45,678.90)</option>
                          <option value="1000456789">Business ••••6789 ($23,456.78)</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="transferAmount" class="form-label">Amount</label>
                        <div class="input-group">
                          <span class="input-group-text">$</span>
                          <input type="number" class="form-control" id="transferAmount" placeholder="0.00" min="100" max="10000" required>
                          <span class="input-group-text">USD</span>
                        </div>
                        <small class="text-muted">Min: $100 - Max: $10,000 per transfer</small>
                      </div>
                    </div>
                  </div>
                  
                  <div class="mb-3">
                    <label for="beneficiaryName" class="form-label">Beneficiary Name</label>
                    <input type="text" class="form-control" id="beneficiaryName" placeholder="Full legal name" required>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="beneficiaryBank" class="form-label">Bank Name</label>
                        <input type="text" class="form-control" id="beneficiaryBank" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="bankCountry" class="form-label">Bank Country</label>
                        <select class="form-select" id="bankCountry" required>
                          <option value="" selected disabled>Select country</option>
                          <option value="GB">United Kingdom</option>
                          <option value="DE">Germany</option>
                          <option value="FR">France</option>
                          <option value="JP">Japan</option>
                          <option value="CA">Canada</option>
                          <option value="AU">Australia</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="swiftCode" class="form-label">SWIFT/BIC Code</label>
                        <input type="text" class="form-control" id="swiftCode" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="iban" class="form-label">IBAN/Account Number</label>
                        <input type="text" class="form-control" id="iban" required>
                      </div>
                    </div>
                  </div>
                  
                  <div class="mb-3">
                    <label for="transferPurpose" class="form-label">Purpose of Transfer</label>
                    <select class="form-select" id="transferPurpose" required>
                      <option value="" selected disabled>Select purpose</option>
                      <option value="family_support">Family Support</option>
                      <option value="education">Education Fees</option>
                      <option value="medical">Medical Expenses</option>
                      <option value="business">Business Payment</option>
                      <option value="investment">Investment</option>
                      <option value="other">Other</option>
                    </select>
                  </div>
                  
                  <div class="mb-3">
                    <label for="transferNotes" class="form-label">Notes (Optional)</label>
                    <textarea class="form-control" id="transferNotes" rows="2"></textarea>
                  </div>
                  
                  <div class="mb-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="urgentTransfer">
                      <label class="form-check-label" for="urgentTransfer">
                        Urgent Transfer (+$25 fee)
                      </label>
                    </div>
                  </div>
                  
                  <div class="alert alert-info">
                    <h6 class="alert-heading">Estimated Delivery</h6>
                    <p class="mb-0">Standard: 2-3 business days<br>Urgent: 1 business day</p>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Review Transfer</button>
              </div>
            </div>
          </div>
        </div>
        

  
  <script>
    // Additional JavaScript for international wire functionality
    $(document).ready(function() {
      // Update remaining limit when amount changes
      $('#transferAmount').on('input', function() {
        const amount = parseFloat($(this).val()) || 0;
        const remaining = 10000 - amount;
        $('#remainingLimit').text('$' + remaining.toFixed(2));
      });
      
      // Country change handler for SWIFT code format
      $('#bankCountry').change(function() {
        // In a real app, you might validate SWIFT format based on country
        console.log("Country changed to:", $(this).val());
      });
    });
  </script>






          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
         <?php include 'footer.php'; ?>