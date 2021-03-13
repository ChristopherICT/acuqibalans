<table class="table table-bordered contact-form-banner">
  <tbody>
    <tr>
      <td colspan="2"><span class="span-contact-form-banner">Wilt u een afspraak maken of heeft u gewoon een vraag?</span></td>
    </tr>
    <tr>
      <td class="contact-td"><a href="#" class="contact-button-td"data-toggle="modal" data-target="#email-contact-modal"> E-mail</a></td>
      <td class="contact-td"><a href="https://wa.me/06-57061444" target="blank" class="contact-button-td"> Whatsapp</a></td>
    </tr>
  </tbody>
</table>

  <div class="modal fade klachten-modal" id="email-contact-modal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Contact Formulier</h4>
        </div>
        <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="email-contact-input-name">Naam:</label>
            <input type="text" class="form-control" id="email-contact-input-name" placeholder="Vul uw naam in">
          </div>
          <div class="form-group">
            <label for="email-contact-input-email">E-mail adres:</label>
            <input type="email" class="form-control" id="email-contact-input-email" placeholder="Vul uw e-mail adres in">
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" onclick="enable_text(this.checked)">
            <label class="form-check-label" for="flexCheckDefault">
              Wilt u een afspraak maken?
            </label>
          </div>
          <div class="form-group">
            <label for="email-contact-input-voorkeur"></label>
            <input type="text" class="form-control" id="email-contact-input-voorkeur" placeholder="Vul een dagdeel in." disabled="disabled">
          </div>
          <div class="form-group">
            <label for="email-contact-input-text">Uw vraag:</label>
            <textarea class="form-control" id="email-contact-input-text" rows="4"></textarea>
            <small id="contact" class="form-text text-muted">Al uw gegevens zullen alleen voor contact doeleinden worden gebruikt.</small>
          </div>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>