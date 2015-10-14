<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            
            div.wrapper {
                margin: 10px;
                float: left;
                width: 200px;
                height: 300px;
                border-color: red;
                border-style: solid;
            }
            
            div.title {
                text-align: center;
                font-size: 20px;
                font-weight: bold;
            }
            
            div.details {
                font-size: 16px;
            }
            
        </style>
    </head>
    <body>
        
        <?php
            for ($index = 0; $index < 5; $index++) {
        ?>
            <div class="wrapper">
                <div class="title"><?php echo "Product " . ($index + 1); ?></div>
                <div class="details"><?php echo "Details of product " . ($index + 1); ?></div>
            </div>
        
        <?php
            }
        ?>
        
        
    </body>
</h