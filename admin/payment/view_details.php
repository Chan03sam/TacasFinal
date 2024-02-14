<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('../../config.php');

if (isset($_GET['id'])) {
    $payment_id = $_GET['id'];
    $qry = $conn->query("SELECT * FROM `payment_list` WHERE id ='{$payment_id}'");

    if ($qry->num_rows > 0) {
        $payment_info = $qry->fetch_assoc();
		$image_path = ltrim($payment_info['receipt_image'], '/');
    }
}
?>

<style>
    #uni_modal .modal-footer {
        display: none;
    }

    .payment-img {
        object-fit: scale-down;
        object-position: center center;
        max-width: 100%;
        max-height: 100vh;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 5px;
    }
    .modal-lg {
        max-width: 90% !important;
    }
    .payment-img-modal {
    max-width: 100%;
    max-height: 100%;
    cursor: pointer;
    transition: transform 0.3s ease-in-out;
    }

    .enlarge {
        position: relative;
        transform: scale(1.4);
        z-index: 2;
        top: -20px;
        left: -60px;
    }
</style>

<link rel="stylesheet" href="path/to/lightbox2/css/lightbox.min.css">
<script src="path/to/lightbox2/js/lightbox.min.js"></script>

<div class="container-fluid">
    <div class="col-md-12">
        <div class="row">
            <div class="col-6 row-6">
            <center>
                <img src="<?= validate_image($image_path) ?>" alt="Payment Image" class="img-fluid student-img bg-gradient-dark border payment-img-modal" onclick="toggleEnlarge(this)">
            </center>

            <script>
                function toggleEnlarge(element) {
                    element.classList.toggle('enlarge');
                }
            </script>
            </div>
            <div class="col-6">
                <dl>
                    <dt class="text-navy">Name:</dt>
                    <dd class="pl-4"><?= ucwords($payment_info['firstname'] . ' ' . $payment_info['lastname']) ?></dd>
                    <dt class="text-navy">Email:</dt>
                    <dd class="pl-4"><?= $payment_info['email'] ?></dd>
                    <dt class="text-navy">Payment Method:</dt>
                    <dd class="pl-4"><?= $payment_info['payment_method'] ?></dd>
                    <dt class="text-navy">Amount:</dt>
                    <dd class="pl-4"><?= $payment_info['amount'] ?></dd>
                    <dt class="text-navy">Reference No.:</dt>
                    <dd class="pl-4"><?= $payment_info['refno'] ?></dd>
                    <dt class="text-navy">Date of Payment:</dt>
                    <dd class="pl-4"><?= $payment_info['payment_date'] ?></dd>
                    <dt class="text-navy">Status:</dt>
                    <dd class="pl-4">
                        <?php if ($payment_info['status'] == 1): ?>
                            <span class="badge badge-pill badge-success">Verified</span>
                        <?php else: ?>
                            <span class="badge badge-pill badge-primary">Not Verified</span>
                        <?php endif; ?>
                    </dd>
                </dl>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-right">
                <button class="btn btn-dark btn-flat btn-sm" data-dismiss="modal" type="button"><i class="fa fa-times"></i> Close</button>
            </div>
        </div>
    </div>
</div>
