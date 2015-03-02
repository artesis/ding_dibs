<?php

/**
 * @file dibs-redirect-page.tpl.php
 *
 * Theme implementation to display the dibs redirect page
 *
 * Available variables:
 * - $form:  The whole form element as a string.
 * - $settings: Full DIBS settings array.
 * - $transaction: Full transaction array with all info about
 *   the transaction.
 *
 * @see template_preprocess()
 * @see template_preprocess_dibs_redirect_page()
 */
?>
<div id="dibs-redirect-page-<?php print $transaction['api_module']; ?>-<?php print $transaction['api_delta']; ?>" class="dibs-redirect-page clear-block">
  <?php print render($form); ?>
</div>
