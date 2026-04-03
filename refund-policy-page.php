<!DOCTYPE html>
<html lang="en">

<?php
$title = "Refund Policy page";
?>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php echo $title ?> - Aladdin 4Tech</title>

  <?php
  require_once 'inc/header.php'
  ?>
    <!---->
    <!--    <link rel="stylesheet" href="css/about-us.css"/>-->
</head>
<body>

<!-- Header -->
<?php
require_once 'inc/menu.php'
?>

<!-- Banner -->
<section class="page-banner">
    <div class="container">
        <div class="breadcrumb">Home Page</div>
        <h1 class="page-title"><?php echo $title ?></h1>
    </div>
</section>

<section class="aladdin-refund-policy-section">
    <div class="aladdin-refund-policy-container">
        <div class="aladdin-refund-policy-header">
            <p class="aladdin-refund-policy-meta"><strong>Effective Date:</strong> August 4, 2020</p>
            <p class="aladdin-refund-policy-meta"><strong>Last Updated:</strong> January 1, 2026</p>
        </div>

        <div class="aladdin-refund-policy-intro">
            <p>
                At ALADDIN HOSTING &amp; IT SERVICES, LLC, we are committed to delivering
                reliable digital services and ensuring customer satisfaction.
            </p>
        </div>

        <div class="aladdin-refund-policy-content">
            <div class="aladdin-refund-policy-item">
                <h3>1. General Policy</h3>
                <p>
                    Due to the nature of digital and subscription-based services, refunds are
                    limited once a service has been activated or delivered. However, we review
                    all refund requests on a case-by-case basis and aim to provide fair and
                    reasonable resolutions.
                </p>
            </div>

            <div class="aladdin-refund-policy-item">
                <h3>2. Eligibility for Refunds</h3>
                <p>Refunds may be considered under the following conditions:</p>
                <ul class="aladdin-refund-policy-list">
                    <li>Verified technical issues directly caused by our service that cannot be resolved</li>
                    <li>Duplicate or incorrect billing</li>
                    <li>Service not delivered as described</li>
                </ul>
            </div>

            <div class="aladdin-refund-policy-item">
                <h3>3. Non-Refundable Services</h3>
                <p>The following are generally non-refundable once activated:</p>
                <ul class="aladdin-refund-policy-list">
                    <li>VPN subscriptions</li>
                    <li>Delivered digital services or configurations</li>
                    <li>Services affected by external factors such as ISP performance, user configuration, or third-party platforms</li>
                </ul>
            </div>

            <div class="aladdin-refund-policy-item">
                <h3>4. Service Performance Disclaimer</h3>
                <p>
                    Service performance, including VPN connectivity, may vary depending on
                    network conditions, ISP routing, device setup, and third-party services.
                    Such factors are outside of our direct control.
                </p>
            </div>

            <div class="aladdin-refund-policy-item">
                <h3>5. Refund Request Process</h3>
                <p>
                    Customers must submit refund requests within 7 days of purchase by
                    contacting our support team with relevant details.
                </p>
            </div>

            <div class="aladdin-refund-policy-item">
                <h3>6. Dispute Resolution</h3>
                <p>
                    We encourage customers to contact us directly to resolve any concerns.
                    Our team is committed to responding promptly and working toward a fair resolution.
                </p>
            </div>

            <div class="aladdin-refund-policy-item">
                <h3>7. Chargebacks</h3>
                <p>
                    Initiating a chargeback without prior contact may result in temporary
                    suspension of services during investigation. We remain committed to
                    resolving issues in good faith.
                </p>
            </div>

            <div class="aladdin-refund-policy-item aladdin-refund-policy-contact">
                <h3>Contact Information</h3>
                <p><strong>Email:</strong> info@aladdin4tech.com</p>
                <p><strong>Phone:</strong> +1 (612) 707-6852</p>
            </div>
        </div>
    </div>
</section>


<?php
require_once 'inc/footer.php'
?>


</body>
</html>