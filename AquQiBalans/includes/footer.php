<div class="footer">
    <div class="footer-copyright text-center py-3">Copyright &copy; 2021 AcuQiBalans.nl &nbsp; | &nbsp; Website gemaakt door
        <a href="https://kb-web.nl/" target="_blank"> KB-Webdevelopment</a>
    </div>
</div>

<div class="modal fade klachten-modal" id="email-contact-modal" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Stel hier gerust uw vraag</h4>
      </div>
      <div class="contact-form-success">
        <?php if (isset($_GET['suc']) && $_GET['suc'] === "cess") {
          echo "Dank voor uw bericht, ik zal zo spoedig mogelijk contact met u opnemen";
        } ?>
      </div>
      <div class="modal-body">
      <form method="POST">
      <input type="hidden" id="purpose" name="purpose" value="<?php $_POST['getInContact'] ?>">
        <div class="form-group">
          <label for="email-contact-input-name">Naam:</label>
          <div class="contact-form-error">
            <?php if (!empty($nameError)) {
              echo $nameError;
            }  ?>
          </div>
          <input type="text" name="name" class="form-control" id="email-contact-input-name" placeholder="Vul hier uw naam in"  value="<?php if (!empty($_POST['name'])) { echo $_POST['name']; } ?>">
        </div>
        <div class="form-group">
          <label for="email-contact-input-email">E-mail adres:</label>
          <div class="contact-form-error">
            <?php if (!empty($emailError)) {
              echo $emailError;
            }  ?>
          </div>
          <input type="email" name="email" class="form-control" id="email-contact-input-email" placeholder="Vul hier uw e-mail adres in" value="<?php if (!empty($_POST['email'])) { echo $_POST['email']; } ?>">
        </div>
        <div class="form-group">
          <label for="email-contact-input-text">Wat is uw vraag of verzoek?</label>
          <div class="contact-form-error">
            <?php if (!empty($questionError)) {
              echo $questionError;
            }  ?>
          </div>
          <textarea class="form-control" name="question" id="email-contact-input-text" rows="4"><?php if (!empty($_POST['question'])) { echo $_POST['question']; } ?></textarea>
          <small id="contact" class="form-text text-muted">Dank voor uw bericht, ik zal zo spoedig mogelijk contact met u opnemen.</small>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close">Terug</button>
          <button type="submit" name="contact-form-submit" class="btn btn-primary">Verzenden</button>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade klachten-modal" id="boeken-contact-modal" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Boek hier uw afspraak</h4>
      </div>
      <div class="contact-form-success">
        <?php if (isset($_GET['suc']) && $_GET['suc'] === "cess") {
          echo "Dank voor uw bericht, ik zal zo spoedig mogelijk contact met u opnemen";
        } ?>
      </div>
      <div class="modal-body">
      <form method="POST">
      <input type="hidden" id="purpose" name="purpose" value="<?php $_POST['makeApointment'] ?>">
        <div class="form-group">
          <label for="boek-contact-input-name">Naam:</label>
          <div class="contact-form-error">
            <?php if (!empty($nameError)) {
              echo $nameError;
            }  ?>
          </div>
          <input type="text" name="name" class="form-control" id="boek-contact-input-name" placeholder="Vul hier uw naam in"  value="<?php if (!empty($_POST['name'])) { echo $_POST['name']; } ?>">
        </div>
        <div class="form-group">
          <label for="boek-contact-input-email">E-mail adres:</label>
          <div class="contact-form-error">
            <?php if (!empty($emailError)) {
              echo $emailError;
            }  ?>
          </div>
          <input type="email" name="email" class="form-control" id="boek-contact-input-email" placeholder="Vul hier uw e-mail adres in" value="<?php if (!empty($_POST['email'])) { echo $_POST['email']; } ?>">
        </div>
        <div class="form-group">
          <label for="boek-contact-input-adres">Adres:</label>
          <div class="contact-form-error">
            <?php if (!empty($adresError)) {
              echo $adresError;
            }  ?>
          </div>
          <input type="text" name="adres" class="form-control" id="boek-contact-input-adres" placeholder="Vul hier uw adres in" value="<?php if (!empty($_POST['adres'])) { echo $_POST['adres']; } ?>">
        </div>
        <div class="form-group">
          <label for="boek-contact-input-telefoon">Telefoon nummer:</label>
          <div class="contact-form-error">
            <?php if (!empty($telefoonError)) {
              echo $telefoonError;
            }  ?>
          </div>
          <input type="text" name="telefoon" class="form-control" id="boek-contact-input-telefoon" placeholder="Vul hier uw telefoonnummer in" value="<?php if (!empty($_POST['telefoon'])) { echo $_POST['telefoon']; } ?>">
        </div>
        <div class="form-group">
          <label for="boek-contact-input-reden">Wat is uw reden voor bezoek?</label>
          <div class="contact-form-error">
            <?php if (!empty($redenError)) {
              echo $redenError;
            }  ?>
          </div>
          <input type="text" name="reden" class="form-control" id="boek-contact-input-reden" placeholder="Vul hier uw reden in" value="<?php if (!empty($_POST['reden'])) { echo $_POST['reden']; } ?>">
        </div>
        <div class="form-group">
          <label for="boek-contact-input-dagdeel">Voorkeur voor dag of dagdeel?</label>
          <div class="contact-form-error">
            <?php if (!empty($dagdeelError)) {
              echo $dagdeelError;
            }  ?>
          </div>
          <input type="text" name="dagdeel" class="form-control" id="boek-contact-input-dagdeel" placeholder="Vul hier uw voorkeur in" value="<?php if (!empty($_POST['dagdeel'])) { echo $_POST['dagdeel']; } ?>">
          <small id="contact" class="form-text text-muted">De informatie in dit formulier wordt gebruikt om contact met u op te nemen over uw vraag. Door dit formulier te verzenden, gaat u hiermee akkoord.</small>
          <small id="contact" class="form-text text-muted">Dank voor uw bericht, ik zal zo spoedig mogelijk contact met u opnemen</small>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close">Terug</button>
          <button type="submit" name="contact-form-submit" class="btn btn-primary">Verzenden</button>
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
