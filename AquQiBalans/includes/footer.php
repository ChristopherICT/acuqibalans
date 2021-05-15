<div class="footer">
    <div class="footer-copyright text-center py-3">Copyright &copy; 2021 AcuQiBalans.nl &nbsp; | &nbsp; Website gemaakt door
        <a href="https://kb-web.nl/" target="_blank"> KB-Webdevelopment</a>
    </div>
</div>

<div class="modal fade klachten-modal" id="email-contact-modal" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Contact Formulier</h4>
      </div>
      <div class="contact-form-success">
        <?php if (isset($_GET['suc']) && $_GET['suc'] === "cess") {
          echo "Uw bericht is succesvol verzonden, bedankt!";
        } ?>
      </div>
      <div class="modal-body">
      <form method="POST">
        <div class="form-group">
          <label for="email-contact-input-name">Naam:</label>
          <div class="contact-form-error">
            <?php if (!empty($nameError)) {
              echo $nameError;
            }  ?>
          </div>
          <input type="text" name="name" class="form-control" id="email-contact-input-name" placeholder="Vul uw naam in"  value="<?php if (!empty($_POST['name'])) { echo $_POST['name']; } ?>">
        </div>
        <div class="form-group">
          <label for="email-contact-input-email">E-mail adres:</label>
          <div class="contact-form-error">
            <?php if (!empty($emailError)) {
              echo $emailError;
            }  ?>
          </div>
          <input type="email" name="email" class="form-control" id="email-contact-input-email" placeholder="Vul uw e-mail adres in" value="<?php if (!empty($_POST['email'])) { echo $_POST['email']; } ?>">
        </div>
        <div class="form-group">
          <label for="email-contact-input-text">Uw vraag:</label>
          <div class="contact-form-error">
            <?php if (!empty($questionError)) {
              echo $questionError;
            }  ?>
          </div>
          <textarea class="form-control" name="question" id="email-contact-input-text" rows="4"><?php if (!empty($_POST['question'])) { echo $_POST['question']; } ?></textarea>
          <small id="contact" class="form-text text-muted">Al uw gegevens zullen alleen voor contact doeleinden worden gebruikt.</small>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close">Close</button>
          <button type="submit" name="contact-form-submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
      </div>

    </div>
  </div>
</div>


<?php if((isset($_GET['suc']) && $_GET['suc'] === "cess") || $show_modal):?>
  <script> $('#email-contact-modal').modal('show');</script>
<?php endif;?>
</body>
</html>
