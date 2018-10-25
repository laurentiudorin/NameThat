<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

    <link rel="stylesheet" type="text/css" href="<?php base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php base_url();?>assets/bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="<?php base_url();?>assets/bootstrap/css/bootstrap-reboot.min.css">

    <script src="<?php base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php base_url();?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php base_url();?>assets/jQuery/jQuery.js"></script>

</head>
<body>



</body>
<!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

</html>