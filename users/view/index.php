<?php include_once "../../layout/header.php"; ?>
<?php include_once "../../layout/footer.php"; ?>

<h1>List</h1>

<div class="row">
    <div class="col-12">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Fist name</th>
                    <th>Last name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody id="tbody">

            </tbody>
        </table>
    </div>
</div>

<script src="../app/ListUsers.js" defer></script>