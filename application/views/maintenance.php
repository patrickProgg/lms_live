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
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            max-width: 500px;
            width: 100%;
        }

        /* Header */
        .header {
            text-align: center;
            color: white;
            margin-bottom: 30px;
        }

        .header h1 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .header p {
            opacity: 0.9;
            font-size: 14px;
        }

        /* Main Card */
        .card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Header Section */
        .card-header {
            background: linear-gradient(135deg, #ff6b6b, #c0392b);
            color: white;
            padding: 30px 20px;
            text-align: center;
            position: relative;
        }

        .status-badge {
            display: inline-block;
            background: rgba(255,255,255,0.2);
            padding: 6px 16px;
            border-radius: 25px;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 15px;
        }

        .domain-name {
            font-size: 24px;
            font-weight: bold;
            word-break: break-all;
            margin-bottom: 10px;
        }

        .package-name {
            font-size: 14px;
            opacity: 0.9;
        }

        .price-tag {
            display: inline-block;
            background: rgba(255,255,255,0.2);
            padding: 5px 15px;
            border-radius: 25px;
            font-size: 14px;
            margin-top: 12px;
        }

        /* Body Section */
        .card-body {
            padding: 25px;
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

        .days-badge {
            background: #e74c3c;
            color: white;
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 11px;
            margin-left: 8px;
        }

        .currency {
            font-size: 12px;
            font-weight: normal;
            color: #7f8c8d;
        }

        /* Alert Message */
        .alert-message {
            background: #fff3cd;
            border-left: 4px solid #ffc107;
            padding: 15px;
            margin: 20px 0;
            border-radius: 8px;
        }

        .alert-message p {
            color: #856404;
            font-size: 14px;
            line-height: 1.5;
        }

        /* Contact Card */
        .contact-card {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 20px;
            text-align: center;
            margin-top: 20px;
        }

        .contact-card h4 {
            color: #2c3e50;
            margin-bottom: 15px;
            font-size: 16px;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 10px;
            background: white;
            border-radius: 10px;
            text-decoration: none;
            color: #2a5298;
            font-weight: 500;
            transition: all 0.2s;
        }

        .contact-item:hover {
            background: #e8f4f8;
            transform: translateX(5px);
        }

        .contact-icon {
            font-size: 20px;
        }

        /* Button */
        .btn-whatsapp {
            background: #25D366;
            color: white;
            padding: 14px;
            border: none;
            border-radius: 10px;
            font-weight: bold;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            margin-top: 15px;
            transition: all 0.2s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .btn-whatsapp:hover {
            background: #128C7E;
            transform: translateY(-2px);
        }

        /* Info Box */
        .info-box {
            background: #e8f4fd;
            border-radius: 10px;
            padding: 12px;
            text-align: center;
            margin-top: 15px;
        }

        .info-box p {
            color: #2a5298;
            font-size: 12px;
        }

        /* Divider */
        .divider {
            text-align: center;
            margin: 20px 0;
            position: relative;
        }

        .divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: #e0e0e0;
        }

        .divider span {
            background: white;
            padding: 0 10px;
            position: relative;
            color: #999;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🏦 LOAN MONITORING SYSTEM</h1>
            <p>Hosting Subscription Status</p>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="status-badge">⚠️ EXPIRED</div>
                <div class="domain-name">loan-monitoring.alwaysdata.net</div>
                <div class="package-name">Hosting Subscription - 10GB Storage</div>
                <div class="price-tag">₱300 / month | $5.20 USD</div>
            </div>
            
            <div class="card-body">
                <div class="info-row">
                    <span class="info-label">Start Date</span>
                    <span class="info-value">January 15, 2024</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Expiry Date</span>
                    <span class="info-value expired-value">
                        June 15, 2024
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
                <div class="info-row">
                    <span class="info-label">Grace Period</span>
                    <span class="info-value">5 days remaining</span>
                </div>

                <!-- Alert Message -->
                <div class="alert-message">
                    <p>⚠️ <strong>Your subscription has expired!</strong><br>
                    Your website and data will be suspended after the grace period ends.</p>
                </div>

                <!-- Contact Message -->
                <div class="contact-card">
                    <h4>📞 To renew your subscription:</h4>
                    <div class="contact-info">
                        <div class="contact-item">
                            <span class="contact-icon">📧</span>
                            <span>Email: admin@loan-monitoring.com</span>
                        </div>
                        <div class="contact-item">
                            <span class="contact-icon">📱</span>
                            <span>Phone: +63 XXX XXX XXXX</span>
                        </div>
                    </div>
                    
                    <button class="btn-whatsapp" onclick="window.location.href='https://wa.me/63XXXXXXXXXX'">
                        💬 Contact Developer on WhatsApp
                    </button>
                    
                    <div class="info-box">
                        <p>💡 After sending payment proof, your subscription will be reactivated within 24 hours.</p>
                    </div>
                </div>

                <div class="divider">
                    <span>Need help?</span>
                </div>

                <div class="info-row" style="border-bottom: none;">
                    <span class="info-label">Support Hours</span>
                    <span class="info-value">Mon-Fri: 9AM - 6PM</span>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Simple redirect for WhatsApp (update with actual number)
        function contactDeveloper() {
            alert("Contact developer: admin@loan-monitoring.com\nOr call: +63 XXX XXX XXXX");
        }
    </script>
</body>
</html>