<?php
echo '<p id="demo" align="justify"></p>';
echo '<script>';
echo 'var w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;';
echo 'var h = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;';
echo 'var x = document.getElementById("demo");';
echo 'x.innerHTML = "Browser inner window width: " + w + ", height: " + h + ".";';
echo '</script>';