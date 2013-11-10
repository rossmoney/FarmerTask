 </div>
</div>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/libraries/bootstrap/js/bootstrap.min.js"></script>
    <script src="/libraries/bootbox.min.js"></script>
    <script src="/views/<?php echo $controller; ?>/<?php echo $controller; ?>.js"></script>
    <?php if($controller == "farmer") { ?>
    <script src="/views/livestock/livestock.js"></script>
    <?php } ?>
  </body>
</html>