<?php
include 'navbar.php';
?>

<div class="row">
    <div class="col-md-5 mx-auto">
        <div class="card card-body">
            <form action="deposit_action.php" method="POST">
                <label for="">Amount</label>
                <input type="number" name="amount" class="form-control mb-3">

                <label for="">Password</label>
                <input type="text" name="password" class="form-control mb-3">

                <button class="btn btn-dark">Deposit</button>
            </form>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>