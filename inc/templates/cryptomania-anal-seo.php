<div class="wrap">
  <h1>Google Analytic Settings</h1>
  <?php settings_errors(); ?>
  <form method="post" action="options.php">
    <?php do_settings_sections( 'cryptomania_options_analytic' ); ?>
    <?php settings_fields( 'cryptomania_options_analytic' ); ?>
    <?php submit_button(); ?>
  </form>
</div>
