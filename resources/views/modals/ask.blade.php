 <div id="askModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ask your Question</h4>
        </div>
        <div class="modal-body">
          <form id="loginForm">
            <div class="row">
              <div class="col-md-12 form-group">
                <label class="form-label">Type your question</label>
                <input type="text" name="name" required="required" maxlength="60" placeholder="Write your question in brief..." class="input form-control" autocomplete="off">
                <span class="help-block hidden"></span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label class="form-label">Describe your question</label>
                <textarea placeholder="Explain what is your question about in detail..." class="input form-control"></textarea>
                <span class="help-block hidden"></span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label class="form-label">Tags</label>
                <input type="text" name="name" required="required" maxlength="60" placeholder="tag1, tag2, tag3 ( seperate each tag with a comma )" class="input form-control" autocomplete="off">
                <span class="help-block hidden"></span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label class="form-label">Catgeory</label>
                <div class="select">
                  <select class="select-category">
                    <option>Technical</option>
                    <option>Entertainment</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row submit">
              <div class="col-md-12 form-group text-center">
                <button type="submit" id="login_save" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
          
        </div>
      </div>

    </div>
  </div>