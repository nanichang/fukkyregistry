<footer class="footer text-center"> 
  &copy;
  <?php 
    $startYear = 2019; 
    $currentYear = date('Y');
    echo $startYear . (($startYear != $currentYear) ? '-' . $currentYear : '');
  ?> Made with <i class="icon fa fa-heart"></i> @ nHub Nigeria.
</footer>