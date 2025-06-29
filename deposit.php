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
        <h4 class="card-title">Make a Deposit - First Global Bank</h4>
        
        <div class="alert alert-info">
          <i class="mdi mdi-lock-outline"></i> All deposits are secured with 256-bit SSL encryption and processed through our trusted payment partners.
        </div>
        
        <form class="forms-sample">
          <div class="form-group">
            <label for="depositAmount">Amount to Deposit</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">$</span>
              </div>
              <input type="number" class="form-control" id="depositAmount" placeholder="Enter amount" min="10" step="0.01" required>
              <div class="input-group-append">
                <span class="input-group-text">.00</span>
              </div>
            </div>
            <small class="text-muted">Minimum deposit: $10.00</small>
          </div>
          
          <div class="form-group">
            <label>Select Deposit Method</label>
            <div class="payment-methods">
              <div class="payment-option">
                <input type="radio" name="paymentMethod" id="bitcoin" value="bitcoin" checked>
                <label for="bitcoin">
                  <div class="payment-card">
                    <div class="payment-icon bg-warning">
                      <i class="mdi mdi-currency-btc"></i>
                    </div>
                    <div class="payment-details">
                      <h6>Bitcoin</h6>
                      <p class="text-muted small">Instant deposit • 0.5% fee</p>
                    </div>
                  </div>
                </label>
              </div>
              
              <div class="payment-option">
                <input type="radio" name="paymentMethod" id="usdt" value="usdt">
                <label for="usdt">
                  <div class="payment-card">
                    <div class="payment-icon bg-success">
                      <i class="mdi mdi-currency-usd"></i>
                    </div>
                    <div class="payment-details">
                      <h6>USDT (Tether)</h6>
                      <p class="text-muted small">Instant deposit • 0.3% fee</p>
                    </div>
                  </div>
                </label>
              </div>
              
              <div class="payment-option">
                <input type="radio" name="paymentMethod" id="bankTransfer" value="bankTransfer">
                <label for="bankTransfer">
                  <div class="payment-card">
                    <div class="payment-icon bg-primary">
                      <i class="mdi mdi-bank"></i>
                    </div>
                    <div class="payment-details">
                      <h6>Bank Transfer</h6>
                      <p class="text-muted small">1-3 business days • No fee</p>
                    </div>
                  </div>
                </label>
              </div>
              
              <div class="payment-option">
                <input type="radio" name="paymentMethod" id="paypal" value="paypal">
                <label for="paypal">
                  <div class="payment-card">
                    <div class="payment-icon bg-info">
                      <i class="mdi mdi-paypal"></i>
                    </div>
                    <div class="payment-details">
                      <h6>PayPal</h6>
                      <p class="text-muted small">Instant deposit • 1.5% fee</p>
                    </div>
                  </div>
                </label>
              </div>
            </div>
          </div>
          
          <div class="form-group payment-details-container" id="bitcoinDetails">
            <label>Bitcoin Deposit Address</label>
            <div class="input-group">
              <input type="text" class="form-control" value="3FZbgi29cpjq2GjdwV8eyHuJJnkLtktZc5" readonly>
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" id="copyBitcoinAddress">
                  <i class="mdi mdi-content-copy"></i> Copy
                </button>
              </div>
            </div>
            <small class="text-muted">Send exactly the amount to this address</small>
            <div class="qr-code mt-3 text-center">
              <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=bitcoin:3FZbgi29cpjq2GjdwV8eyHuJJnkLtktZc5" alt="Bitcoin QR Code" class="img-fluid" style="max-width: 150px;">
            </div>
          </div>
          
          <div class="form-group payment-details-container" id="usdtDetails" style="display: none;">
            <label>USDT (TRC20) Deposit Address</label>
            <div class="input-group">
              <input type="text" class="form-control" value="TNPeeaaFB7KQVvVWgKGVpdDnH6QfGtLxXk" readonly>
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" id="copyUsdtAddress">
                  <i class="mdi mdi-content-copy"></i> Copy
                </button>
              </div>
            </div>
            <small class="text-muted">Only send USDT via TRC20 network</small>
          </div>
          
          <div class="form-group payment-details-container" id="bankTransferDetails" style="display: none;">
            <div class="bank-info p-3 bg-light rounded">
              <h5 class="mb-3">First Global Bank Transfer Details</h5>
              <div class="row">
                <div class="col-md-6">
                  <p><strong>Bank Name:</strong> First Global Bank</p>
                  <p><strong>Account Name:</strong> Henry Klein</p>
                  <p><strong>Account Number:</strong> 0247896541</p>
                </div>
                <div class="col-md-6">
                  <p><strong>SWIFT/BIC:</strong> FGBKUS33</p>
                  <p><strong>Routing Number:</strong> 026009593</p>
                  <p><strong>Bank Address:</strong> 123 Wall Street, New York, NY 10005</p>
                </div>
              </div>
              <div class="alert alert-warning mt-3">
                <i class="mdi mdi-alert-circle-outline"></i> Include your account number as reference
              </div>
            </div>
          </div>
          
          <div class="form-group payment-details-container" id="paypalDetails" style="display: none;">
            <button type="button" class="btn btn-primary btn-lg btn-block">
              <i class="mdi mdi-paypal"></i> Continue to PayPal
            </button>
            <small class="text-muted d-block mt-2">You will be redirected to PayPal to complete your deposit</small>
          </div>
          
          <div class="form-group mt-4">
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" required>
                I agree to the <a href="#">Terms of Service</a> and confirm this deposit
              </label>
            </div>
          </div>
          
          <button type="submit" class="btn btn-primary mr-2">Confirm Deposit</button>
          <button type="button" class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>

<style>
  .payment-methods {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 15px;
    margin-top: 15px;
  }
  
  .payment-option input[type="radio"] {
    display: none;
  }
  
  .payment-option input[type="radio"]:checked + label .payment-card {
    border: 2px solid #4B49AC;
    background-color: #F7F7FF;
  }
  
  .payment-card {
    border: 1px solid #E2E2E2;
    border-radius: 5px;
    padding: 15px;
    display: flex;
    align-items: center;
    cursor: pointer;
    transition: all 0.3s;
  }
  
  .payment-card:hover {
    border-color: #4B49AC;
  }
  
  .payment-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 15px;
    color: white;
    font-size: 20px;
  }
  
  .payment-details h6 {
    margin-bottom: 2px;
  }
  
  .payment-details p {
    margin-bottom: 0;
  }
</style>

<script>
  $(document).ready(function() {
    // Show/hide payment details based on selection
    $('input[name="paymentMethod"]').change(function() {
      $('.payment-details-container').hide();
      $('#' + $(this).val() + 'Details').show();
    });
    
    // Copy address buttons
    $('#copyBitcoinAddress').click(function() {
      copyToClipboard('3FZbgi29cpjq2GjdwV8eyHuJJnkLtktZc5');
      $(this).html('<i class="mdi mdi-check"></i> Copied');
      setTimeout(() => {
        $(this).html('<i class="mdi mdi-content-copy"></i> Copy');
      }, 2000);
    });
    
    $('#copyUsdtAddress').click(function() {
      copyToClipboard('TNPeeaaFB7KQVvVWgKGVpdDnH6QfGtLxXk');
      $(this).html('<i class="mdi mdi-check"></i> Copied');
      setTimeout(() => {
        $(this).html('<i class="mdi mdi-content-copy"></i> Copy');
      }, 2000);
    });
    
    function copyToClipboard(text) {
      var $temp = $("<input>");
      $("body").append($temp);
      $temp.val(text).select();
      document.execCommand("copy");
      $temp.remove();
    }
  });
</script>






          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
         <?php include 'footer.php'; ?>