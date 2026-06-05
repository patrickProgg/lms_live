<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Maintenance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }

        .maintenance-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            backdrop-filter: blur(10px);
        }

        .btn-login {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 10px 30px;
            border-radius: 25px;
            transition: transform 0.3s;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            background: linear-gradient(135deg, #5a67d8 0%, #6b46a0 100%);
            color: white;
        }
    </style>
</head>

<body>
    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="card maintenance-card shadow-lg p-5 text-center" style="max-width: 500px;">
            <div class="mb-4">
                <i class="display-1">🔧</i>
            </div>
            <h1 class="h2 mb-3">Server Maintenance</h1>
            <div class="alert alert-warning">
                <strong>503 Service Unavailable</strong>
            </div>
            <p class="text-muted mb-4">
                We're currently performing scheduled maintenance.
                Please try again in a few minutes.
            </p>
            <div class="progress mb-3">
                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 75%"></div>
            </div>

            <a href="<?= base_url('login'); ?>" class="btn btn-login mt-3">
                ← Back to Login
            </a>

            <small class="text-muted d-block mt-3">
                Last checked: <?= date('Y-m-d H:i:s') ?>
            </small>
        </div>
    </div>
</body>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Expired - Loan Monitoring System</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            min-height: 100vh;
            padding: 40px 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Header */
        .header {
            text-align: center;
            color: white;
            margin-bottom: 40px;
        }

        .header h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .header p {
            opacity: 0.9;
            font-size: 16px;
        }

        /* Stats Cards */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .stat-card {
            background: white;
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .stat-number {
            font-size: 32px;
            font-weight: bold;
            color: #2a5298;
        }

        .stat-label {
            color: #666;
            margin-top: 5px;
            font-size: 14px;
        }

        /* Alert Banner */
        .alert-banner {
            background: linear-gradient(135deg, #ff6b6b, #ee5a24);
            color: white;
            padding: 15px 25px;
            border-radius: 12px;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 15px;
        }

        .alert-content {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .alert-icon {
            font-size: 28px;
        }

        .alert-text strong {
            font-size: 18px;
        }

        .alert-badge {
            background: rgba(255, 255, 255, 0.2);
            padding: 6px 15px;
            border-radius: 25px;
            font-size: 14px;
        }

        /* Cards Grid */
        .subscriptions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 25px;
        }

        /* Subscription Card */
        .card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .card:hover {
            transform: translateY(-3px);
        }

        .card-header {
            padding: 20px;
            position: relative;
        }

        .card-header.expired {
            background: linear-gradient(135deg, #ff6b6b, #c0392b);
            color: white;
        }

        .card-header.warning {
            background: linear-gradient(135deg, #f39c12, #e67e22);
            color: white;
        }

        .card-header.active {
            background: linear-gradient(135deg, #27ae60, #2ecc71);
            color: white;
        }

        .status-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(0, 0, 0, 0.25);
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .domain-name {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 5px;
            padding-right: 80px;
        }

        .package-name {
            font-size: 13px;
            opacity: 0.9;
        }

        .price-tag {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            padding: 2px 10px;
            border-radius: 20px;
            font-size: 12px;
            margin-top: 8px;
        }

        .card-body {
            padding: 20px;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .info-label {
            color: #7f8c8d;
            font-size: 14px;
        }

        .info-value {
            color: #2c3e50;
            font-weight: 600;
            font-size: 14px;
        }

        .expired-value {
            color: #e74c3c;
        }

        .warning-value {
            color: #f39c12;
        }

        .days-badge {
            background: #e74c3c;
            color: white;
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 11px;
            margin-left: 8px;
        }

        .days-badge.warning {
            background: #f39c12;
        }

        .currency {
            font-size: 12px;
            font-weight: normal;
        }

        .card-actions {
            padding: 15px 20px;
            border-top: 1px solid #f0f0f0;
            display: flex;
            gap: 12px;
        }

        .btn {
            flex: 1;
            padding: 10px 16px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.2s;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary {
            background: linear-gradient(135deg, #2a5298, #1e3c72);
            color: white;
        }

        .btn-primary:hover {
            opacity: 0.9;
            transform: translateY(-1px);
        }

        .btn-outline {
            background: transparent;
            border: 1px solid #bdc3c7;
            color: #7f8c8d;
        }

        .btn-outline:hover {
            background: #ecf0f1;
        }

        .btn-danger {
            background: #e74c3c;
            color: white;
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 60px 20px;
            background: white;
            border-radius: 16px;
            margin-top: 20px;
        }

        .empty-icon {
            font-size: 64px;
            margin-bottom: 15px;
        }

        .empty-state h3 {
            color: #2c3e50;
            margin-bottom: 8px;
        }

        .empty-state p {
            color: #95a5a6;
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            background: white;
            max-width: 450px;
            width: 90%;
            border-radius: 16px;
            animation: modalFadeIn 0.3s ease;
        }

        @keyframes modalFadeIn {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .modal-header {
            padding: 20px;
            border-bottom: 1px solid #f0f0f0;
            font-size: 18px;
            font-weight: bold;
            position: relative;
        }

        .modal-close {
            position: absolute;
            right: 20px;
            top: 20px;
            cursor: pointer;
            font-size: 20px;
            color: #95a5a6;
        }

        .modal-body {
            padding: 20px;
        }

        .modal-footer {
            padding: 15px 20px;
            border-top: 1px solid #f0f0f0;
            display: flex;
            gap: 10px;
            justify-content: flex-end;
        }

        .renew-option {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin: 15px 0;
            font-size: 14px;
        }

        .price-comparison {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
            padding: 10px;
            background: #f8f9fa;
            border-radius: 8px;
        }

        .php-price {
            color: #2a5298;
            font-weight: bold;
        }

        .usd-price {
            color: #27ae60;
            font-size: 13px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header h1 {
                font-size: 28px;
            }

            .subscriptions-grid {
                grid-template-columns: 1fr;
            }

            .alert-banner {
                flex-direction: column;
                text-align: center;
            }

            .alert-content {
                justify-content: center;
            }

            .card-actions {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>🏦 LOAN MONITORING SYSTEM</h1>
            <p>Hosting Subscription Management</p>
        </div>

        <!-- Statistics -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number">12</div>
                <div class="stat-label">Active Subscriptions</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">3</div>
                <div class="stat-label">Expired</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">2</div>
                <div class="stat-label">Expiring Soon</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">5</div>
                <div class="stat-label">Days Grace Period</div>
            </div>
        </div>

        <!-- Alert for expired -->
        <div class="alert-banner">
            <div class="alert-content">
                <span class="alert-icon">⚠️</span>
                <div class="alert-text">
                    <strong>3 subscriptions have expired!</strong>
                    <span style="font-size: 13px;"> Renew within 5 days to avoid data loss</span>
                </div>
            </div>
            <div class="alert-badge">
                🕐 Grace period ends: June 30, 2024
            </div>
        </div>

        <div class="subscriptions-grid">
            <!-- Card 1: Expired - Loan Database -->
            <div class="card">
                <div class="card-header expired">
                    <span class="status-badge">EXPIRED</span>
                    <div class="domain-name">loan-data.alwaysdata.net</div>
                    <div class="package-name">Database Hosting - 10GB</div>
                    <div class="price-tag">₱300 / month | $5.20 USD</div>
                </div>
                <div class="card-body">
                    <div class="info-row">
                        <span class="info-label">Start Date</span>
                        <span class="info-value">Jan 15, 2024</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Expiry Date</span>
                        <span class="info-value expired-value">
                            Jun 15, 2024
                            <span class="days-badge">15 days overdue</span>
                        </span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Auto Renew</span>
                        <span class="info-value">❌ Disabled</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Last Payment</span>
                        <span class="info-value">₱300 <span class="currency">($5.20 USD)</span></span>
                    </div>
                </div>
                <div class="card-actions">
                    <button class="btn btn-primary" onclick="openRenewModal('loan-data.alwaysdata.net')">Renew Now -
                        ₱300</button>
                    <button class="btn btn-outline" onclick="openBackupModal()">Backup Data</button>
                </div>
            </div>

            <!-- Card 2: Expiring Soon - Reports -->
            <div class="card">
                <div class="card-header warning">
                    <span class="status-badge">EXPIRING SOON</span>
                    <div class="domain-name">reports.alwaysdata.net</div>
                    <div class="package-name">Reporting Server - 20GB</div>
                    <div class="price-tag">₱300 / month | $5.20 USD</div>
                </div>
                <div class="card-body">
                    <div class="info-row">
                        <span class="info-label">Start Date</span>
                        <span class="info-value">Mar 01, 2024</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Expiry Date</span>
                        <span class="info-value warning-value">
                            Jun 28, 2024
                            <span class="days-badge warning">3 days left</span>
                        </span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Auto Renew</span>
                        <span class="info-value">✅ Enabled</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Last Payment</span>
                        <span class="info-value">₱300 <span class="currency">($5.20 USD)</span></span>
                    </div>
                </div>
                <div class="card-actions">
                    <button class="btn btn-primary" onclick="openRenewModal('reports.alwaysdata.net')">Renew Now -
                        ₱300</button>
                    <button class="btn btn-outline">View Details</button>
                </div>
            </div>

            <!-- Card 3: Active - API Service -->
            <div class="card">
                <div class="card-header active">
                    <span class="status-badge">ACTIVE</span>
                    <div class="domain-name">api.alwaysdata.net</div>
                    <div class="package-name">API Hosting - 5GB</div>
                    <div class="price-tag">₱300 / month | $5.20 USD</div>
                </div>
                <div class="card-body">
                    <div class="info-row">
                        <span class="info-label">Start Date</span>
                        <span class="info-value">Apr 10, 2024</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Expiry Date</span>
                        <span class="info-value">
                            Jul 10, 2024
                            <span class="days-badge warning" style="background:#27ae60;">45 days left</span>
                        </span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Auto Renew</span>
                        <span class="info-value">✅ Enabled</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Last Payment</span>
                        <span class="info-value">₱300 <span class="currency">($5.20 USD)</span></span>
                    </div>
                </div>
                <div class="card-actions">
                    <button class="btn btn-primary" onclick="openRenewModal('api.alwaysdata.net')">Renew Early -
                        ₱300</button>
                    <button class="btn btn-outline">Configure</button>
                </div>
            </div>

            <!-- Card 4: Expired - Backup Storage -->
            <div class="card">
                <div class="card-header expired">
                    <span class="status-badge">EXPIRED</span>
                    <div class="domain-name">backup.alwaysdata.net</div>
                    <div class="package-name">Cloud Backup - 50GB</div>
                    <div class="price-tag">₱300 / month | $5.20 USD</div>
                </div>
                <div class="card-body">
                    <div class="info-row">
                        <span class="info-label">Start Date</span>
                        <span class="info-value">Dec 01, 2023</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Expiry Date</span>
                        <span class="info-value expired-value">
                            Jun 01, 2024
                            <span class="days-badge">20 days overdue</span>
                        </span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Auto Renew</span>
                        <span class="info-value">❌ Disabled</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Last Payment</span>
                        <span class="info-value">₱300 <span class="currency">($5.20 USD)</span></span>
                    </div>
                </div>
                <div class="card-actions">
                    <button class="btn btn-primary" onclick="openRenewModal('backup.alwaysdata.net')">Renew Now -
                        ₱300</button>
                    <button class="btn btn-outline" onclick="openBackupModal()">Backup Data</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Renew Modal -->
    <div id="renewModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-close" onclick="closeModal('renewModal')">&times;</span>
                Renew Subscription
            </div>
            <div class="modal-body">
                <p><strong id="renewDomain">domain.alwaysdata.net</strong></p>
                <p style="margin: 10px 0; color: #666;">Select renewal period:</p>
                <select class="renew-option" id="renewPeriod" onchange="updatePrice()">
                    <option value="1">1 Month - ₱300 ($5.20 USD)</option>
                    <option value="3">3 Months - ₱855 ($14.82 USD) Save 5%</option>
                    <option value="6">6 Months - ₱1,620 ($28.08 USD) Save 10%</option>
                    <option value="12">12 Months - ₱3,060 ($53.04 USD) Save 15%</option>
                </select>

                <div class="price-comparison">
                    <div>
                        <div class="php-price" id="phpPrice">₱300</div>
                        <div class="usd-price" id="usdPrice">$5.20 USD</div>
                    </div>
                    <div style="text-align: right;">
                        <div style="font-size: 12px; color: #666;">per month avg.</div>
                        <div class="php-price" id="phpMonthly">₱300</div>
                    </div>
                </div>

                <div style="background: #f8f9fa; padding: 12px; border-radius: 8px; margin-top: 10px;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                        <span>Subtotal:</span>
                        <strong id="totalPHP">₱300</strong>
                    </div>
                    <div style="display: flex; justify-content: space-between; color: #27ae60;">
                        <span>Discount:</span>
                        <span id="discountPHP">₱0</span>
                    </div>
                    <hr style="margin: 10px 0;">
                    <div style="display: flex; justify-content: space-between;">
                        <span>Total (PHP):</span>
                        <strong style="font-size: 18px;" id="finalPHP">₱300</strong>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin-top: 5px;">
                        <span>Total (USD):</span>
                        <strong id="finalUSD">$5.20 USD</strong>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-outline" onclick="closeModal('renewModal')">Cancel</button>
                <button class="btn btn-primary">Proceed to Payment</button>
            </div>
        </div>
    </div>

    <!-- Backup Modal -->
    <div id="backupModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-close" onclick="closeModal('backupModal')">&times;</span>
                Download Backup
            </div>
            <div class="modal-body">
                <p style="margin-bottom: 15px;">⚠️ Your subscription has expired. Download your data before the grace
                    period ends.</p>
                <div style="display: flex; flex-direction: column; gap: 10px;">
                    <button class="btn btn-primary" style="background: #3498db;">📁 Download Website Files</button>
                    <button class="btn btn-primary" style="background: #2ecc71;">🗄️ Download Database</button>
                    <button class="btn btn-primary" style="background: #9b59b6;">💾 Download Full Backup (ZIP)</button>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-outline" onclick="closeModal('backupModal')">Close</button>
            </div>
        </div>
    </div>

    <script>
        // Exchange rate: 1 USD = 58 PHP
        const EXCHANGE_RATE = 58;
        const BASE_PRICE = 300; // PHP

        function updatePrice() {
            const period = parseInt(document.getElementById('renewPeriod').value);
            let totalPHP = BASE_PRICE * period;
            let discount = 0;
            let monthlyPHP = BASE_PRICE;

            // Apply discounts
            if (period === 3) {
                discount = totalPHP * 0.05;
                totalPHP = totalPHP - discount;
                monthlyPHP = totalPHP / 3;
            } else if (period === 6) {
                discount = totalPHP * 0.10;
                totalPHP = totalPHP - discount;
                monthlyPHP = totalPHP / 6;
            } else if (period === 12) {
                discount = totalPHP * 0.15;
                totalPHP = totalPHP - discount;
                monthlyPHP = totalPHP / 12;
            }

            const totalUSD = totalPHP / EXCHANGE_RATE;
            const monthlyUSD = monthlyPHP / EXCHANGE_RATE;

            document.getElementById('phpPrice').innerHTML = `₱${Math.round(monthlyPHP)}`;
            document.getElementById('usdPrice').innerHTML = `$${monthlyUSD.toFixed(2)} USD`;
            document.getElementById('totalPHP').innerHTML = `₱${Math.round(totalPHP)}`;
            document.getElementById('discountPHP').innerHTML = `₱${Math.round(discount)}`;
            document.getElementById('finalPHP').innerHTML = `₱${Math.round(totalPHP)}`;
            document.getElementById('finalUSD').innerHTML = `$${totalUSD.toFixed(2)} USD`;
        }

        function openRenewModal(domain) {
            document.getElementById('renewDomain').innerText = domain;
            document.getElementById('renewModal').style.display = 'flex';
            updatePrice();
        }

        function openBackupModal() {
            document.getElementById('backupModal').style.display = 'flex';
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }

        // Close modal when clicking outside
        window.onclick = function (event) {
            if (event.target.classList.contains('modal')) {
                event.target.style.display = 'none';
            }
        }
    </script>
</body>

</html>