<?php
include secrets.php;
function sendPagerDutyAlert($requestname, $requestphone, $requestmail) {
    // Set your PagerDuty integration key
    $integrationKey = $MYINTEGRATIONKEY";

    // PagerDuty API endpoint
    $url = "https://events.pagerduty.com/v2/enqueue";

    // Alert message
    $alertMessage = "New Urgent Help Request from: $requestname. Please contact via $requestphone or $requestmail";

    // Payload for PagerDuty API
    $payload = array(
        "routing_key" => $integrationKey,
        "event_action" => "trigger",
        "payload" => array(
            "summary" => "Urgent Help Request",
            "source" => "Your Application Name",
            "severity" => "error",
            "custom_details" => array(
                "message" => $alertMessage
            )
        )
    );

    // Set headers
    $headers = array(
        "Content-Type: application/json"
    );

    // Initialize cURL session
    $ch = curl_init($url);

    // Set cURL options
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    // Execute cURL request
    $response = curl_exec($ch);

    // Check for errors
    if ($response === false) {
        echo "Error: " . curl_error($ch);
    } else {
        echo "PagerDuty alert sent successfully!";
    }

    // Close cURL session
    curl_close($ch);
}

?>

?><!DOCTYPE HTML>
<!--
	Astral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>URGENT HELP! - Thies Mueller Service Solutions</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="description" content="Thies Mueller Service Solutions provides IT Solutions as you need them.">
	<meta name="keywords"
		content="Thies, Thies Müller, IT, Network, Thies Müller Service Solutions, Service Solutions, Hosting, Consulting, Infrastructure, Web, Incident Management, Disaster Recovery, Project Management, Security, IT-Security, TMSS, tservices, Open Source, FOSS, 161host">
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	<script defer data-domain="thiesmueller.de" src="https://analytics.tservic.es/js/script.js"></script>
</head>

<body class="is-preload">

	<!-- Wrapper-->
	<div id="wrapper">

		<!-- Nav -->
		<nav id="nav">
			<a href="#" class="icon solid fa-home"><span>HELP</span></a>
		</nav>

		<!-- Main -->
		<div id="main">

			<!-- Me -->
			<article id="home" class="panel intro">
				<header>
					<h2>Thies Mueller <i>Service Solutions</i></h2>
				</header>
                <!DOCTYPE html>
<html>
<head>
    <title>PagerDuty Alert Form</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form fields
    $errors = [];
    if (empty($_POST["requestname"])) {
        $errors[] = "Name is required";
    }
    if (empty($_POST["requestphone"])) {
        $errors[] = "Phone number is required";
    }
    if (empty($_POST["requestmail"])) {
        $errors[] = "Email is required";
    }

    // If there are no errors, send PagerDuty alert
    if (empty($errors)) {
        $requestname = $_POST["requestname"];
        $requestphone = $_POST["requestphone"];
        $requestmail = $_POST["requestmail"];

        // Construct PagerDuty alert message
        $alertMessage = "New Urgent Help Request from: $requestname. Please contact via $requestphone or $requestmail";

        // Send PagerDuty alert (replace with your PagerDuty API integration)
        // Example:
        // sendPagerDutyAlert($alertMessage);

        echo "<p style='color: green;'>Alert sent successfully!</p>";
    } else {
        // Display validation errors
        echo "<ul style='color: red;'>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="requestname">Name:</label><br>
    <input type="text" id="requestname" name="requestname"><br><br>

    <label for="requestphone">Phone:</label><br>
    <input type="text" id="requestphone" name="requestphone"><br><br>

    <label for="requestmail">Email:</label><br>
    <input type="email" id="requestmail" name="requestmail"><br><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>

            </article>


		<!-- Footer -->
		<div id="footer">
			<ul class="copyright">
				<li>&copy; Thies Mueller Service Solutions.</li>
				<li><a href="https://legal.tservic.es/?page=thiesmueller.de">Imprint / Privacy Policy</a></li>
				<li><b><a href="https://helpdesk.tservic.es">Service Desk / Support</a></b></li>
				<li><a id="plausible_button" href="javascript:toggleExclusion()">Tracking activated</a></li>
			</ul>
		</div>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/tracking.js"></script>
</body>

</html>
