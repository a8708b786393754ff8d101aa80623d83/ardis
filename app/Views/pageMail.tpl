{extends file='base/layout.tpl'}
{block name=content}
  <div class="container mt-5">
    <form  action="{base_url('email/')} " method="POST">
      <div class="form-group">
        <label>Receiver Email</label>
        <input type="text" name="mailTo" class="form-control">
      </div>
       
      <div class="form-group">
        <label>Your Subject</label>
        <input type="text" name="subject" class="form-control">
      </div>
      <div class="form-group">
        <label>Message</label>
        <textarea rows="6" type="text" name="message" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
      </div>
    </form>
  </div>
{/block}