<style>
    .img-avatar {
        width: 45px;
        height: 45px;
        object-fit: cover;
        object-position: center center;
        border-radius: 100%;
    }
</style>

<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">List of Payments</h3>
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Payment Method</th>
                        <th>Amount</th>
                        <th>Reference No.</th>
                        <th>Date of Payment</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    $qry = $conn->query("SELECT id, firstname, lastname, email, payment_method, amount, refno, payment_date, receipt_image, status FROM `payment_list` ORDER BY concat(lastname, ', ', firstname) ASC");

                    if ($qry) {
                        while ($row = $qry->fetch_assoc()):
                    ?>
                            <tr>
                                <td class="text-center"><?php echo $i++; ?></td>
                                <td><?php echo ucwords($row['firstname'] . ' ' . $row['lastname']) ?></td>
                                <td><p class="m-0 truncate-1"><?php echo $row['email'] ?></p></td>
                                <td><?php echo $row['payment_method'] ?></td>
                                <td><?php echo $row['amount'] ?></td>
                                <td><?php echo $row['refno'] ?></td>
                                <td><?php echo $row['payment_date'] ?></td>
                                <td class="text-center">
                                    <?php if ($row['status'] == 1): ?>
                                        <span class="badge badge-pill badge-success">Verified</span>
                                    <?php else: ?>
                                        <span class="badge badge-pill badge-primary">Not Verified</span>
                                    <?php endif; ?>
                                </td>
                                <td align="center">
                                    <button type="button" class="btn btn-flat btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                        Action
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu" role="menu">
                                        <a class="dropdown-item view_details" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>"><span class="fa fa-eye text-dark"></span> view</a>
                                        <div class="dropdown-divider"></div>
                                        <?php if ($row['status'] != 1): ?>
                                            <a class="dropdown-item verify_payment" href="javascript:void(0)" data-id="<?= $row['id'] ?>" data-name="<?= $row['email'] ?>"><span class="fa fa-check text-primary"></span> Verify</a>
                                            <div class="dropdown-divider"></div>
                                        <?php endif; ?>
                                        <a class="dropdown-item delete_payment" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>" data-name="<?= $row['email'] ?>"><span class="fa fa-trash text-danger"></span> Delete</a>
                                    </div>
                                </td>
                            </tr>
                    <?php endwhile;
                    } else {
                        echo "Error in query: " . $conn->error;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('.delete_payment').click(function () {
            _conf("Are you sure to delete <b>" + $(this).attr('data-name') + "</b> from Payments List permanently?", "delete_payment", [$(this).attr('data-id')])
        })

        $('.table td,.table th').addClass('py-1 px-2 align-middle')

        $('.verify_payment').click(function () {
            _conf("Are you sure to verify this payment of <b>" + $(this).attr('data-name') + "<b/>?", "verify_payment", [$(this).attr('data-id')])
        })

        $('.view_details').click(function () {
            uni_modal('Payment Details', "payment/view_details.php?id=" + $(this).attr('data-id'), 'mid-large')
        })

        $('.table').dataTable();
    })

    function delete_payment($id) {
        start_loader();
        $.ajax({
            url: _base_url_ + "classes/Users.php?f=delete_payment",
            method: "POST",
            data: {
                id: $id
            },
            dataType: "json",
            error: err => {
                console.log(err)
                alert_toast("An error occurred.", 'error');
                end_loader();
            },
            success: function (resp) {
                if (typeof resp == 'object' && resp.status == 'success') {
                    location.reload();
                } else {
                    alert_toast("An error occurred.", 'error');
                    end_loader();
                }
            }
        })
    }

    function verify_payment($id) {
        start_loader();
        $.ajax({
            url: _base_url_ + "classes/Users.php?f=verify_payment",
            method: "POST",
            data: {
                id: $id
            },
            dataType: "json",
            error: err => {
                console.log(err)
                alert_toast("An error occurred.", 'error');
                end_loader();
            },
            success: function (resp) {
                if (typeof resp == 'object' && resp.status == 'success') {
                    location.reload();
                } else {
                    alert_toast("An error occurred.", 'error');
                    end_loader();
                }
            }
        })
    }
</script>
