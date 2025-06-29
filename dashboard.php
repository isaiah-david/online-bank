


<?php include 'header.php'; ?>

<?php include 'nav.php'; ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="dashbaord.php"><img src="assets/images/fbg.jpg" alt="logo" /></a>
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
                      <img src="assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
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
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">
                        <img src="assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                      </div>
                      <div class="col-5 col-sm-7 col-xl-8 p-0">
                        <h4 class="mb-1 mb-sm-0">Want even more features?</h4>
                        <p class="mb-0 font-weight-normal d-none d-sm-block">Check out our Pro version with 5 unique layouts!</p>
                      </div>
                      <div class="col-3 col-sm-2 col-xl-2 ps-0 text-center">
                        <span>
                          <a href="#" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Upgrade to PRO</a>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>



<div class="banking-dashboard">
  <div class="dashboard-content">
    <!-- Left Column -->
    <div class="left-column">
      <div class="user-greeting">
        <div class="greeting-time">
          <i class="mdi mdi-weather-night"></i> Good Evening 
          <span class="mobile-time">20:35:27</span>
        </div>
        <h3><i class="mdi mdi-account-circle"></i> Pelvin Nero</h3>
      
        <div class="account-card">
          <div class="account-detail">
            <h4><i class="mdi mdi-wallet"></i> Available Balance</h4>
            <h1>$1,197,310 <span>USD</span></h1>
          </div>
          
          <div class="account-detail">
            <h4><i class="mdi mdi-credit-card"></i> Your Account Number</h4>
            <h3>8114313795</h3>
          </div>
          
          <div class="account-status">
            <span class="status-badge">
              <i class="mdi mdi-check-circle"></i> Active
            </span>
            <div class="account-actions">
              <button class="btn-action">
                <span class="mdi mdi-swap-horizontal"></span> 
                <span class="action-text">Transactions</span>
              </button>
              <button class="btn-action">
                <span class="mdi mdi-plus-circle"></span> 
                <span class="action-text">Top up</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Right Column -->
    <div class="right-column">
      <div class="stats-card">
        <h3><i class="mdi mdi-chart-bar"></i> Account Statistics</h3>
        <div class="stat-item">
          <span><i class="mdi mdi-finance"></i> Transaction Limit</span>
          <span>$500,000.00</span>
        </div>
        <div class="stat-item">
          <span><i class="mdi mdi-clock"></i> Pending Transactions</span>
          <span>$8,800.00</span>
        </div>
        <div class="stat-item">
          <span><i class="mdi mdi-chart-areaspline"></i> Transaction Volume</span>
          <span>$678,342.82</span>
        </div>
        <div class="stat-item">
          <span><i class="mdi mdi-calendar"></i> Account Age</span>
          <span>5 years</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Action Section -->
  <div class="action-section">
    <h3><i class="mdi mdi-lightning-bolt"></i> What would you like to do today?</h3>
    <p>Choose from our popular actions below</p>
    
    <div class="action-grid">
      <button class="action-btn">
        <span class="mdi mdi-bank-transfer"></span>
        <span class="action-text">Wire Transfer</span>
      </button>
      <button class="action-btn">
        <span class="mdi mdi-swap-horizontal"></span>
        <span class="action-text">Local Transfer</span>
      </button>
      <button class="action-btn">
        <span class="mdi mdi-account-switch"></span>
        <span class="action-text">Internal Transfer</span>
      </button>
      <button class="action-btn">
        <span class="mdi mdi-bitcoin"></span>
        <span class="action-text">Buy Crypto</span>
      </button>
      <button class="action-btn">
        <span class="mdi mdi-credit-card-check"></span>
        <span class="action-text">Pay Bills</span>
      </button>
      <button class="action-btn">
        <span class="mdi mdi-account-plus"></span>
        <span class="action-text">Add Beneficiary</span>
      </button>
    </div>
  </div>

  <!-- Mobile Bottom Navigation -->
  <div class="mobile-nav">
    <button class="mobile-nav-btn active">
      <span class="mdi mdi-home"></span>
      <span>Home</span>
    </button>
    <button class="mobile-nav-btn">
      <span class="mdi mdi-chart-bar"></span>
      <span>Stats</span>
    </button>
    <button class="mobile-nav-btn">
      <span class="mdi mdi-credit-card"></span>
      <span>Cards</span>
    </button>
    <button class="mobile-nav-btn">
      <span class="mdi mdi-account"></span>
      <span>Profile</span>
    </button>
  </div>
</div>



<style>
:root {
  --primary-dark: #0d1b3a;
  --primary: #1a365d;
  --primary-light: #2b6cb0;
  --accent: #38b2ac;
  --text-light: #ebf8ff;
  --text-muted: #bbdefb;
  --card-bg: linear-gradient(135deg, #0d47a1, #1976d2);
  --stats-bg: #0d1b3a;
  --express-color: #ff6d00;
  --visa-color: #1a237e;
  --mastercard-color: #263238;
}

/* Virtual Cards Styles */
.virtual-cards-list {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(600px, 1fr));
  gap: 20px;
  margin-top: 20px;
  width: 100%;
}

.virtual-card {
  padding: 25px;
  border-radius: 16px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
  position: relative;
  overflow: hidden;
  color: white;
  min-height: 100px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  width: 100%;
}

.virtual-card::before {
  content: "";
  position: absolute;
  top: 50%;
  right: 50%;
  width: 100%;
  height: 100%;
  background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
  z-index: 0;
}

/* Card Types */
.express-card {
  background: linear-gradient(135deg, var(--express-color), #ff9100);
}

.visa-card {
  background: linear-gradient(135deg, var(--visa-color), #303f9f);
}

.mastercard-card {
  background: linear-gradient(135deg, var(--mastercard-color), #455a64);
}

.card-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 30px;
  position: relative;
  z-index: 1;
}

.card-bank {
  font-size: 16px;
  font-weight: 500;
}

.card-type {
  font-size: 18px;
  font-weight: 600;
  text-transform: uppercase;
}

.card-number {
  font-family: 'Courier New', monospace;
  font-size: 22px;
  letter-spacing: 3px;
  margin: 20px 0;
  position: relative;
  z-index: 1;
}

.card-details {
  display: flex;
  justify-content: space-between;
  margin-top: 20px;
  position: relative;
  z-index: 1;
}

.card-holder, .card-expiry {
  display: flex;
  flex-direction: column;
}

.label {
  font-size: 12px;
  color: rgba(255,255,255,0.7);
  margin-bottom: 5px;
}

.value {
  font-size: 16px;
  font-weight: 500;
}

.card-status {
  position: absolute;
  top: 50%;
  left: 100; /* Move it to the left side */
  transform: translateY(40%); /* Center it vertically */
  padding: 6px 12px;
  border-radius: 30px;
  font-size: 12px;
  font-weight: 1000;
  display: flex;
  align-items: center;
  gap: 10px;
}


.card-status.active {
  background-color: rgba(200, 230, 201, 0.3);
  color: #c8e6c9;
}

.card-status.pending {
  background-color: rgba(255, 224, 178, 0.3);
  color: #ffe0b2;
}

/* Existing styles from your CSS remain unchanged */
/* Base Styles */
.banking-dashboard {
  font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
  color: white;
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
  background-color: var(--primary-dark);
  min-height: 100vh;
  position: relative;
  padding-bottom: 80px;
}

.dashboard-content {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
  margin-bottom: 20px;
}

/* User Greeting */
.user-greeting {
  background: var(--card-bg);
  padding: 25px;
  border-radius: 16px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
  position: relative;
  overflow: hidden;
}

.user-greeting::before {
  content: "";
  position: absolute;
  top: -50%;
  right: -50%;
  width: 200%;
  height: 200%;
  background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
  z-index: 0;
}

.greeting-time {
  font-size: 16px;
  color: var(--text-muted);
  margin-bottom: 10px;
  display: flex;
  align-items: center;
  gap: 8px;
  position: relative;
  z-index: 1;
}

.user-greeting h3 {
  font-size: 22px;
  font-weight: 500;
  margin: 0 0 15px 0;
  display: flex;
  align-items: center;
  gap: 10px;
  position: relative;
  z-index: 1;
}

/* Account Card */
.account-card {
  background: rgba(13, 27, 58, 0.7);
  backdrop-filter: blur(10px);
  padding: 20px;
  border-radius: 16px;
  border: 1px solid rgba(255,255,255,0.1);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
  position: relative;
  overflow: hidden;
}

.account-detail {
  margin-bottom: 25px;
  position: relative;
  z-index: 1;
}

.account-detail h4 {
  font-size: 14px;
  color: var(--text-muted);
  margin-bottom: 8px;
  display: flex;
  align-items: center;
  gap: 8px;
}

.account-detail h1 {
  font-size: 42px;
  font-weight: 700;
  margin: 0;
  letter-spacing: 0.5px;
  background: linear-gradient(to right, #fff, #bbdefb);
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
}

.account-detail h1 span {
  font-size: 20px;
  color: var(--text-muted);
  font-weight: 400;
}

.account-detail h3 {
  font-size: 24px;
  font-weight: 500;
  margin: 5px 0 0;
  letter-spacing: 1px;
  color: white;
}

/* Account Status */
.account-status {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-top: 30px;
  position: relative;
  z-index: 1;
}

.status-badge {
  background-color: rgba(200, 230, 201, 0.2);
  color: #c8e6c9;
  padding: 8px 16px;
  border-radius: 20px;
  font-size: 14px;
  font-weight: 500;
  display: flex;
  align-items: center;
  gap: 8px;
  backdrop-filter: blur(5px);
}

.account-actions {
  display: flex;
  gap: 12px;
}

.btn-action {
  background-color: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(5px);
  border: 1px solid rgba(255,255,255,0.1);
  padding: 12px 20px;
  border-radius: 12px;
  font-size: 14px;
  font-weight: 500;
  color: white;
  display: flex;
  align-items: center;
  gap: 8px;
  cursor: pointer;
  transition: all 0.3s ease;
}

.btn-action:hover {
  background-color: rgba(255, 255, 255, 0.2);
  transform: translateY(-2px);
}

/* Right Column - Stats */
.right-column {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.stats-card {
  background: var(--stats-bg);
  padding: 25px;
  border-radius: 16px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
  border: 1px solid rgba(255,255,255,0.1);
}

.stats-card h3 {
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 20px;
  display: flex;
  align-items: center;
  gap: 8px;
  color: var(--accent);
}

.stat-item {
  display: flex;
  justify-content: space-between;
  padding: 12px 0;
  border-bottom: 1px solid rgba(255,255,255,0.1);
}

.stat-item:last-child {
  border-bottom: none;
}

.stat-item span:first-child {
  color: var(--text-muted);
  display: flex;
  align-items: center;
  gap: 8px;
}

.stat-item span:last-child {
  font-weight: 500;
  color: white;
}

/* Action Section */
.action-section {
  background: var(--stats-bg);
  padding: 25px;
  border-radius: 16px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
  margin-bottom: 20px;
  border: 1px solid rgba(255,255,255,0.1);
}

.action-section h3 {
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 5px;
  display: flex;
  align-items: center;
  gap: 8px;
}

.action-section p {
  font-size: 14px;
  color: var(--text-muted);
  margin-bottom: 20px;
}

.action-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 15px;
}

.action-btn {
  background-color: rgba(255, 255, 255, 0.05);
  backdrop-filter: blur(5px);
  border: 1px solid rgba(255,255,255,0.1);
  padding: 20px 15px;
  border-radius: 12px;
  font-size: 14px;
  font-weight: 500;
  color: white;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 10px;
  cursor: pointer;
  transition: all 0.3s ease;
}

.action-btn:hover {
  background-color: rgba(255, 255, 255, 0.1);
  transform: translateY(-3px);
}

.action-btn .mdi {
  font-size: 24px;
}

/* Mobile Navigation */
.mobile-nav {
  display: none;
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  background: var(--primary);
  box-shadow: 0 -2px 10px rgba(0,0,0,0.3);
  padding: 10px 0;
  z-index: 100;
}

.mobile-nav-btn {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  background: none;
  border: none;
  color: var(--text-muted);
  font-size: 12px;
  gap: 4px;
  width: 100%;
  padding: 8px 0;
  transition: all 0.2s ease;
}

.mobile-nav-btn.active {
  color: white;
}

.mobile-nav-btn .mdi {
  font-size: 20px;
}

/* Icons */
.mdi {
  font-size: 20px;
}

/* Responsive Styles */
@media (max-width: 1024px) {
  .dashboard-content {
    grid-template-columns: 1fr;
  }
  
  .action-grid {
    grid-template-columns: repeat(2, 1fr);
  }
  
  .virtual-cards-list {
    grid-template-columns: 1fr;
  }
}

@media (max-width: 768px) {
  .banking-dashboard {
    padding: 15px;
    padding-bottom: 80px;
  }
  
  .user-greeting,
  .account-card,
  .stats-card,
  .action-section,
  .virtual-card {
    padding: 20px;
  }
  
  .account-detail h1 {
    font-size: 36px;
  }
  
  .account-detail h3 {
    font-size: 20px;
  }
  
  .account-actions {
    flex-direction: column;
  }
  
  .btn-action {
    width: 100%;
    justify-content: center;
  }
}

@media (max-width: 480px) {
  .user-greeting h3 {
    font-size: 18px;
  }
  
  .greeting-time .mobile-time {
    display: inline;
  }
  
  .action-text {
    display: inline;
  }
  
  .mobile-nav {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
  }
  
  .account-detail h1 {
    font-size: 32px;
  }
  
  .action-btn {
    padding: 15px 10px;
    font-size: 13px;
  }
  
  .action-btn .mdi {
    font-size: 20px;
  }
  
  .card-number {
    font-size: 18px;
  }
  
  .card-details {
    flex-direction: column;
    gap: 15px;
  }
}
</style>






<!-- Virtual Cards Section -->
<div class="banking-dashboard">
  <!-- Virtual Cards Section -->
  <div class="col-md-8 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex flex-row justify-content-between">
          <h4 class="card-title mb-1">First Global Bank Cards</h4>
          <p class="text-muted mb-1">Your virtual cards</p>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="virtual-cards-list">
              <!-- Express Card -->
              <div class="virtual-card express-card">
                <div class="card-header">
                  <div class="card-bank">First Global Bank</div>
                  <div class="card-type">Express</div>
                </div>
                <div class="card-number">•••• •••• •••• 4679</div>
                <div class="card-details">
                  <div class="card-holder">
                    <span class="label">Card Holder</span>
                    <span class="value">Ofofonobs Developer</span>
                  </div>
                  <div class="card-expiry">
                    <span class="label">Valid Thru</span>
                    <span class="value">08/27</span>
                  </div>
                </div>
                <div class="card-status active">
                  <i class="mdi mdi-check-circle"></i> Active
                </div>
              </div>
              
              <!-- Visa Card -->
              <div class="virtual-card visa-card">
                <div class="card-header">
                  <div class="card-bank">First Global Bank</div>
                  <div class="card-type">Visa</div>
                </div>
                <div class="card-number">•••• •••• •••• 9823</div>
                <div class="card-details">
                  <div class="card-holder">
                    <span class="label">Card Holder</span>
                    <span class="value">Ofofonobs Developer</span>
                  </div>
                  <div class="card-expiry">
                    <span class="label">Valid Thru</span>
                    <span class="value">11/25</span>
                  </div>
                </div>
                <div class="card-status pending">
                  <i class="mdi mdi-clock"></i> Pending
                </div>
              </div>
              
              <!-- Mastercard -->
              <div class="virtual-card mastercard-card">
                <div class="card-header">
                  <div class="card-bank">First Global Bank</div>
                  <div class="card-type">Mastercard</div>
                </div>
                <div class="card-number">•••• •••• •••• 3542</div>
                <div class="card-details">
                  <div class="card-holder">
                    <span class="label">Card Holder</span>
                    <span class="value">Ofofonobs Developer</span>
                  </div>
                  <div class="card-expiry">
                    <span class="label">Valid Thru</span>
                    <span class="value">03/26</span>
                  </div>
                </div>
                <div class="card-status active">
                  <i class="mdi mdi-check-circle"></i> Active
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--end of virtual card-->




            <div class="row">
  <!-- Security Feature 1 -->
  <div class="col-sm-4 grid-margin">
    <div class="card">
      <div class="card-body">
        <h5>Bank-Level Encryption</h5>
        <div class="row">
          <div class="col-8 col-sm-12 col-xl-8 my-auto">
            <div class="d-flex d-sm-block d-md-flex align-items-center">
              <h4 class="mb-0">256-bit</h4>
              <p class="text-success ms-2 mb-0 font-weight-medium">Military Grade</p>
            </div>
            <h6 class="text-muted font-weight-normal">Your data is protected with the highest security standards</h6>
          </div>
          <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
            <i class="icon-lg mdi mdi-shield-lock text-primary ms-auto"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Security Feature 2 -->
  <div class="col-sm-4 grid-margin">
    <div class="card">
      <div class="card-body">
        <h5>24/7 Fraud Monitoring</h5>
        <div class="row">
          <div class="col-8 col-sm-12 col-xl-8 my-auto">
            <div class="d-flex d-sm-block d-md-flex align-items-center">
              <h4 class="mb-0">Real-Time</h4>
              <p class="text-success ms-2 mb-0 font-weight-medium">Active Protection</p>
            </div>
            <h6 class="text-muted font-weight-normal">We monitor your accounts around the clock for suspicious activity</h6>
          </div>
          <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
            <i class="icon-lg mdi mdi-eye-outline text-danger ms-auto"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Security Feature 3 -->
  <div class="col-sm-4 grid-margin">
    <div class="card">
      <div class="card-body">
        <h5>Guaranteed Safety</h5>
        <div class="row">
          <div class="col-8 col-sm-12 col-xl-8 my-auto">
            <div class="d-flex d-sm-block d-md-flex align-items-center">
              <h4 class="mb-0">$500K</h4>
              <p class="text-success ms-2 mb-0 font-weight-medium">FDIC Insured</p>
            </div>
            <h6 class="text-muted font-weight-normal">Your deposits are protected up to $500,000 per account</h6>
          </div>
          <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
            <i class="icon-lg mdi mdi-checkbox-marked-circle text-success ms-auto"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
            


 <!--Recent transaction-->

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
<!--end of recent transaction-->





           
              <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Portfolio Slide</h4>
                    <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">
                      <div class="item">
                        <img src="assets/images/dashboard/Rectangle.jpg" alt="">
                      </div>
                      <div class="item">
                        <img src="assets/images/dashboard/Img_5.jpg" alt="">
                      </div>
                      <div class="item">
                        <img src="assets/images/dashboard/img_6.jpg" alt="">
                      </div>
                    </div>
                    <div class="d-flex py-4">
                      <div class="preview-list w-100">
                        <div class="preview-item p-0">
                          <div class="preview-thumbnail">
                            <img src="assets/images/faces/face12.jpg" class="rounded-circle" alt="">
                          </div>
                          <div class="preview-item-content d-flex flex-grow">
                            <div class="flex-grow">
                              <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                <h6 class="preview-subject">CeeCee Bass</h6>
                                <p class="text-muted text-small">4 Hours Ago</p>
                              </div>
                              <p class="text-muted">Well, it seems to be working now.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="text-muted">Well, it seems to be working now. </p>
                    <div class="progress progress-md portfolio-progress">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
             
          <!-- content-wrapper ends -->
          <?php include 'footer.php'; ?>