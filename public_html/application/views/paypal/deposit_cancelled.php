<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $this->lang->line('cancel');?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Bananacampers">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        #angelleye-logo { margin:10px 0; }
        thead th { background: #F4F4F4;  }
        th.center {
            text-align:center;
        }
        td.center{
            text-align:center;
        }
        #paypal_errors {
            margin-top:25px;
        }
        .general_message {
            margin: 20px 0 20px 0;
        }
        #angelleye-demo-digital-goods-success-msg {
            display:none;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div id="header" class="row clearfix">
                <div class="col-md-6 column">
                    <div id="angelleye-logo">
                        <a href="/index.php/First"><img class="img-responsive" alt="paypal" src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_200x51.png"></a>
                    </div>
                </div>
            </div>
            <h2 align="center"><?php echo $this->lang->line('cancel');?></h2>
            <div class="alert alert-info">
                <p><?php echo $this->lang->line('cancel');?></p>
            </div>
            <div class="alert alert-info">
                <p><?php echo $this->lang->line('reason');?></p>
            </div>
            <a class="btn btn-primary" href="/index.php/First/deposit"><?php echo $this->lang->line('godeposit');?></a>
        </div>
    </div>
</div>
</body>
</html>