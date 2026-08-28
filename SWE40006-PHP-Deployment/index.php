<?php
$serverTime = gmdate("d M Y H:i:s") . " UTC";
$phpVersion = phpversion();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Deployment Monitor</title>
    
    <script src="https://js.monitor.azure.com/scripts/b/ai.3.gbl.min.js"></script>

    <script>
        var snippet = {
            config: {
                connectionString: "InstrumentationKey=de15cdfc-1cf9-4ec0-9c42-99a57be8dcbc;IngestionEndpoint=https://australiaeast-1.in.applicationinsights.azure.com/;LiveEndpoint=https://australiaeast.livediagnostics.monitor.azure.com/;ApplicationId=f5f0320e-c2df-4e5c-beb2-95c4d76a6f4a"
            }
        };
    
        var init = new Microsoft.ApplicationInsights.ApplicationInsights(snippet);
        var appInsights = init.loadAppInsights();
    
        appInsights.trackPageView({
            name: "PHP Deployment Monitor"
        });
    
        appInsights.trackEvent({
            name: "PHPDeploymentMonitorLoaded"
        });
    </script>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f7fa;
            margin: 0;
            padding: 50px;
        }

        .container {
            max-width: 900px;
            margin: auto;
        }

        h1 {
            font-size: 42px;
            margin-bottom: 5px;
        }

        .subtitle {
            color: #666;
            margin-bottom: 30px;
        }

        .status {
            display: inline-block;
            background: #198754;
            color: white;
            padding: 8px 16px;
            border-radius: 6px;
            font-weight: bold;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-top: 35px;
        }

        .card {
            background: white;
            border-radius: 8px;
            padding: 25px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .card h3 {
            margin-top: 0;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>PHP Deployment Monitor</h1>

    <div class="subtitle">
        SWE40006 Software Deployment and Evolution
    </div>

    <span class="status">Application Online</span>

    <div class="grid">

        <div class="card">
            <h3>Runtime</h3>
            <p>PHP <?php echo htmlspecialchars($phpVersion); ?></p>
        </div>

        <div class="card">
            <h3>Hosting Platform</h3>
            <p>Microsoft Azure App Service</p>
        </div>

        <div class="card">
            <h3>Operating System</h3>
            <p>Linux</p>
        </div>

        <div class="card">
            <h3>Server Time</h3>
            <p><?php echo htmlspecialchars($serverTime); ?></p>
        </div>

    </div>

</div>

</body>
</html>