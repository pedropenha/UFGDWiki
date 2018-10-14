<?php
  # init bootstrap helper
  require_once($this->GetThemePath('/') . '/bootstrap_helper.php');
  $footer_helper = new BootstrapHelper($this);
?>

      <!-- BEGIN PAGE CONTROLS -->
      <div id="page-controls">
        <div id="footer-navbar" class="navbar">
          <div class="navbar-inner-disabled">
            <div class="container">
              <?php echo $footer_helper->menu('options_menu'); ?>
            </div>
          </div>
        </div>
      </div>
      <!-- END PAGE CONTROLS -->

    <!-- END CONTAINER -->
    </div>

    <!-- BEGIN FOOTER -->
    <div id="footer">
      <div class="container">
        <p>
          Projeto feito por: <a href="PedroPenha">Pedro Henrique Penha Martins</a>
        </p>
        <p>
          Distribuído por: <a href="https://ufgd.edu.br" target='_Blank'>Universidade Federal
Da Grande Dourados</a>
        </p>
      </div>
    </div>
    <!-- END FOOTER -->

    <!-- LOGOUT FORM: to logout logged in users using logout link -->
    <?php if ( $this->GetUser() ): ?>
      <?php echo $this->FormOpen('', 'UserSettings', 'post',
          'bootstrap-logout'); ?>
        <input type="hidden" name="logout" value="Logout" />
        <input type="hidden" name="logout-via" value="bootstrap" />
      <?php echo $this->FormClose(); ?>
    <?php endif; ?>
    <!-- END LOGOUT FORM -->

    <!-- LOAD JS: jQuery, Bootstrap -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous">
    </script>
    <script src="<?php printf('%s/%s', $footer_helper->theme_js_path,
      'bootstrap.min.js'); ?>" /></script>

    <!-- BEGIN ONLOAD STYLE ADJUSTMENTS -->
    <script>
      $(document).ready(function() {
        $('#content').addClass('well well-large');
        $('#comments').addClass('well well-large');
        $('#footer-navbar').addClass('well well-small');
        $('.comment-layout-1').addClass('well');
        $('.comment-layout-2').addClass('well');

        // alerts
        $('.success').addClass('alert alert-success');
        $('.error').addClass('alert alert-error');
        $('.usersettings_info').addClass('alert alert-info');

        // floats
        $('.floatl').addClass('pull-left well');
        $('.floatr').addClass('pull-right well');

        // tables (note: addClass checks for redundancies. See
        // http://stackoverflow.com/a/7403519/1093087)
        $('table').addClass('table table-bordered')

        // %%...%% code block fix (removes div.code tags wrapping pre)
        $('div.code > pre').unwrap();

        // logout links
        $('.logout-click').click(function() {
          $("form#form_bootstrap-logout").submit();
          return false;   // avoids following link
        });

        // increase default editor min height
        if ( typeof varWikkaEdit !== 'undefined' ) {
            varWikkaEdit.EDITOR_MIN_HEIGHT = 220;
        }
      });
    </script>
    <!-- END ONLOAD STYLE ADJUSTMENTS -->

    <!-- BEGIN SYSTEM INFO -->
    <?php
    if ($this->GetConfigValue('sql_debugging')) {
      $footer_helper->output_sql_debugging();
    }
    ?>

    <!-- <?php echo $footer_helper->output_load_time() ?> -->
    <!-- END SYSTEM INFO -->

  </body>
</html>
