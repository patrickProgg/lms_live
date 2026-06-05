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
    <title>Subscription Expired - Hosting Service</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Header */
        .header {
            text-align: center;
            color: white;
            margin-bottom: 30px;
        }

        .header h1 {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .header p {
            opacity: 0.9;
        }

        /* Alert Banner */
        .alert-banner {
            background: #ff4757;
            color: white;
            padding: 15px 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 15px;
        }

        .alert-banner i {
            font-size: 24px;
            margin-right: 10px;
        }

        /* Cards Grid */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 25px;
        }

        /* Subscription Card */
        .subscription-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            padding: 20px;
            position: relative;
        }

        .card-header.expired {
            background: linear-gradient(135deg, #ff6b6b, #ee5a24);
            color: white;
        }

        .card-header.warning {
            background: linear-gradient(135deg, #ffa502, #ff6348);
            color: white;
        }

        .card-header.active {
            background: linear-gradient(135deg, #1e90ff, #00cec9);
            color: white;
        }

        .status {
            position: absolute;
            top: 15px;
            right: 15px;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: bold;
            background: rgba(0, 0, 0, 0.2);
        }

        .domain {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
            padding-right: 80px;
        }

        .package {
            font-size: 13px;
            opacity: 0.9;
        }

        .card-body {
            padding: 20px;
        }

        .info-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .info-label {
            color: #666;
            font-size: 14px;
        }

        .info-value {
            color: #333;
            font-weight: 500;
            font-size: 14px;
        }

        .expired-date {
            color: #ff4757;
            font-weight: bold;
        }

        .warning-date {
            color: #ffa502;
            font-weight: bold;
        }

        .badge {
            background: #ff4757;
            color: white;
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 11px;
            margin-left: 8px;
        }

        .badge-warning {
            background: #ffa502;
        }

        .card-footer {
            padding: 15px 20px;
            border-top: 1px solid #f0f0f0;
            display: flex;
            gap: 10px;
        }

        .btn {
            flex: 1;
            padding: 10px;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
        }

        .btn-primary {
            background: #667eea;
            color: white;
        }

        .btn-secondary {
            background: #dfe6e9;
            color: #2d3436;
        }

        .btn-danger {
            background: #ff4757;
            color: white;
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 60px 20px;
            background: white;
            border-radius: 12px;
        }

        .empty-state .icon {
            font-size: 64px;
            margin-bottom: 15px;
        }

        .empty-state h3 {
            color: #2d3436;
            margin-bottom: 8px;
        }

        .empty-state p {
            color: #b2bec3;
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
        }

        .modal-content {
            background: white;
            max-width: 450px;
            margin: 80px auto;
            border-radius: 12px;
            animation: slideDown 0.3s ease;
        }

        @keyframes slideDown {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .modal-header {
            padding: 20px;
            border-bottom: 1px solid #f0f0f0;
            font-size: 18px;
            font-weight: bold;
            position: relative;
        }

        .close {
            position: absolute;
            right: 20px;
            top: 20px;
            cursor: pointer;
            font-size: 20px;
            color: #999;
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

        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 6px;
            margin: 15px 0;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .cards-grid {
                grid-template-columns: 1fr;
            }

            .alert-banner {
                flex-direction: column;
                text-align: center;
            }

            .card-footer {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>📦 Hosting Subscriptions</h1>
            <p>Manage your hosting accounts and renewals</p>
        </div>

        <!-- Alert Banner for Expired -->
        <div class="alert-banner">
            <div>
                <i>⚠️</i>
                <strong>2 subscriptions have expired!</strong> Renew now to avoid data loss
            </div>
            <div>
                🕐 Grace period ends in 5 days
            </div>
        </div>

        <div class="cards-grid">
            <!-- Card 1: Expired -->
            <div class="subscription-card">
                <div class="card-header expired">
                    <div class="status">EXPIRED</div>
                    <div class="domain">mywebsite.com</div>
                    <div class="package">Business Hosting - 20GB</div>
                </div>
                <div class="card-body">
                    <div class="info-item">
                        <span class="info-label">Start Date</span>
                        <span class="info-value">15 Jan 2024</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Expiry Date</span>
                        <span class="info-value expired-date">
                            15 Jun 2024
                            <span class="badge">15 days overdue</span>
                        </span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Auto Renew</span>
                        <span class="info-value">❌ Disabled</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Grace Period</span>
                        <span class="info-value">7 days</span>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Renew Now ($14.99/mo)</button>
                    <button class="btn btn-secondary">Backup Data</button>
                </div>
            </div>

            <!-- Card 2: Expiring Soon -->
            <div class="subscription-card">
                <div class="card-header warning">
                    <div class="status">EXPIRING SOON</div>
                    <div class="domain">myblog.net</div>
                    <div class="package">Starter Hosting - 5GB</div>
                </div>
                <div class="card-body">
                    <div class="info-item">
                        <span class="info-label">Start Date</span>
                        <span class="info-value">01 Mar 2024</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Expiry Date</span>
                        <span class="info-value warning-date">
                            30 Jun 2024
                            <span class="badge badge-warning">3 days left</span>
                        </span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Auto Renew</span>
                        <span class="info-value">✅ Enabled</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Grace Period</span>
                        <span class="info-value">7 days</span>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Renew Now ($9.99/mo)</button>
                    <button class="btn btn-secondary">View Details</button>
                </div>
            </div>

            <!-- Card 3: Active but showing expiry -->
            <div class="subscription-card">
                <div class="card-header active">
                    <div class="status">ACTIVE</div>
                    <div class="domain">onlineshop.org</div>
                    <div class="package">Ecommerce Hosting - 50GB</div>
                </div>
                <div class="card-body">
                    <div class="info-item">
                        <span class="info-label">Start Date</span>
                        <span class="info-value">01 Apr 2024</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Expiry Date</span>
                        <span class="info-value">
                            15 Oct 2024
                            <span class="badge badge-warning">120 days left</span>
                        </span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Auto Renew</span>
                        <span class="info-value">✅ Enabled</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Grace Period</span>
                        <span class="info-value">7 days</span>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Renew Early ($29.99/mo)</button>
                    <button class="btn btn-secondary">Manage</button>
                </div>
            </div>
        </div>

        <!-- Alternative Empty State (hidden by default, show when no subscriptions) -->
        <!--
        <div class="empty-state">
            <div class="icon">🎉</div>
            <h3>No Expired Subscriptions</h3>
            <p>All your hosting subscriptions are active and up to date!</p>
        </div>
        -->
    </div>

    <!-- Renew Modal -->
    <div id="renewModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                Renew Subscription
            </div>
            <div class="modal-body">
                <p><strong>mywebsite.com</strong></p>
                <p>Select renewal period:</p>
                <select>
                    <option>1 Month - $14.99</option>
                    <option>3 Months - $39.99 (Save 11%)</option>
                    <option>6 Months - $74.99 (Save 17%)</option>
                    <option>12 Months - $139.99 (Save 22%)</option>
                </select>
                <p style="font-size: 12px; color: #666; margin-top: 10px;">
                    ✓ Instant activation<br>
                    ✓ 30-day money-back guarantee
                </p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary">Cancel</button>
                <button class="btn btn-primary">Proceed to Payment</button>
            </div>
        </div>
    </div>

    <!-- Backup Modal -->
    <div id="backupModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                Download Backup
            </div>
            <div class="modal-body">
                <p>Your subscription has expired. Download your data before it gets deleted.</p>
                <div style="margin-top: 15px;">
                    <button class="btn btn-primary" style="width: 100%; margin-bottom: 10px;">📁 Website Files</button>
                    <button class="btn btn-primary" style="width: 100%; margin-bottom: 10px;">🗄️ Database</button>
                    <button class="btn btn-primary" style="width: 100%;">💾 Full Backup (ZIP)</button>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary">Close</button>
            </div>
        </div>
    </div>

    <script>
        // Simple modal functionality
        document.querySelectorAll('.btn-primary').forEach(btn => {
            if (btn.innerText.includes('Renew')) {
                btn.onclick = () => document.getElementById('renewModal').style.display = 'block';
            }
        });

        document.querySelectorAll('.btn-secondary').forEach(btn => {
            if (btn.innerText.includes('Backup')) {
                btn.onclick = () => document.getElementById('backupModal').style.display = 'block';
            }
        });

        document.querySelectorAll('.close').forEach(close => {
            close.onclick = function () {
                document.getElementById('renewModal').style.display = 'none';
                document.getElementById('backupModal').style.display = 'none';
            }
        });

        window.onclick = function (event) {
            if (event.target.classList.contains('modal')) {
                event.target.style.display = 'none';
            }
        }
    </script>
</body>

</html>