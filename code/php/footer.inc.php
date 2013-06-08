<?php
?>


<div data-role="footer" data-id="foo1" data-position="fixed">
    <div data-role="navbar" data-icon="delete">
        <ul>
            <li><a data-icon="info" href="index_member.php"
                   data-transition="slide" <?php if ($thisPage == "index") echo " class=\"ui-btn-active ui-state-persist\""; ?> ></a>
            </li>
            <!--<li><a data-icon="search" href="search.php" data-transition="slide"  <?php /*if ($thisPage=="search") echo " class=\"ui-btn-active ui-state-persist\""; */?>></a></li>-->
            <li><a data-icon="star" href="new.php"
                   data-transition="slide"  <?php if ($thisPage == "addPoint") echo " class=\"ui-btn-active ui-state-persist\""; ?>></a>
            </li>
            <li><a data-icon="gear" href="option.php"
                   data-transition="slide"  <?php if ($thisPage == "option") echo " class=\"ui-btn-active ui-state-persist\""; ?>></a>
            </li>

        </ul>
    </div>
    <!-- /navbar -->
</div><!-- /footer -->


</div><!--  -->

</body>
</html>

