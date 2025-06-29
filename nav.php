<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="dashboard.php"><img src="assets/images/logo.png" alt="logo" /></a>
    <a class="sidebar-brand brand-logo-mini" href="dashboard.php"><img src="assets/images/small-logo.png" alt="logo" /></a>
  </div>
  <ul class="nav">
    <li class="nav-item profile">
      <div class="profile-desc">
        <div class="profile-pic">
          <div class="count-indicator">
            <img class="img-xs rounded-circle" src="assets/images/faces/face15.jpg" alt="">
            <span class="count bg-success"></span>
          </div>
          <div class="profile-name">
            <h5 class="mb-0 font-weight-normal">Pelvin Nero</h5>
            <span>Gold Member</span>
          </div>
        </div>
        <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
        <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
          <a href="#" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-settings text-primary"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-onepassword text-info"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
            </div>
          </a>
        </div>
      </div>
    </li>

    <li class="nav-item nav-category">
      <span class="nav-link">Navigation</span>
    </li>
    
    <!-- Dashboard -->
    <li class="nav-item menu-items">
      <a class="nav-link" href="dashboard.php">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    
    <!-- Transactions -->
    <li class="nav-item menu-items">
      <a class="nav-link" href="transactions.php">
        <span class="menu-icon">
          <i class="mdi mdi-credit-card-multiple"></i>
        </span>
        <span class="menu-title">Transactions</span>
      </a>
    </li>
    
    <!-- Cards -->
    <li class="nav-item menu-items">
      <a class="nav-link" href="cards.php">
        <span class="menu-icon">
          <i class="mdi mdi-card-bulleted"></i>
        </span>
        <span class="menu-title">Cards</span>
      </a>
    </li>
    
    <!-- Transfers Dropdown -->
    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#transfers" aria-expanded="false" aria-controls="transfers">
        <span class="menu-icon">
          <i class="mdi mdi-bank-transfer"></i>
        </span>
        <span class="menu-title">Transfers</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="transfers">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="local_transfer.php">Local Transfer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="international_wire.php">International Wire</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="deposit.php">Deposit</a>
          </li>
        </ul>
      </div>
    </li>
    
    <!-- Services Dropdown -->
    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#services" aria-expanded="false" aria-controls="services">
        <span class="menu-icon">
          <i class="mdi mdi-wrench"></i>
        </span>
        <span class="menu-title">Services</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="services">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="loan_request.php">Loan Request</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="irs_tax_refund.php">IRS Tax Refund</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="loan_history.php">Loan History</a>
          </li>
        </ul>
      </div>
    </li>
    
    <!-- Account Dropdown -->
    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#account" aria-expanded="false" aria-controls="account">
        <span class="menu-icon">
          <i class="mdi mdi-account-circle"></i>
        </span>
        <span class="menu-title">Account</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="account">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="settings.php">Settings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="support_ticket.php">Support Ticket</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="secure_banking.php">Secure Banking</a>
          </li>
        </ul>
      </div>
    </li>
    
    <!-- Version -->
    <li class="nav-item mt-3 version-item">
      <div class="nav-link version-link">
        <span class="version-text">v1.2.0</span>
      </div>
    </li>
  </ul>
</nav>

<style>
  .version-item {
    position: fixed;
    bottom: 20px;
    width: 100%;
  }
  .version-link {
    text-align: center;
    color: #6c757d !important;
  }
  .version-text {
    font-size: 12px;
  }
</style>