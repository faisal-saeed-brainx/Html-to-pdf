<script type="text/javascript">
  $(document).ready(function(){
  $('form input').change(function () {
    $('form p').text(this.files.length + " file(s) selected");
  });
});
</script>

<div id="section1" class="container-fluid" >
  <div class="row" style="text-align: center;">
    <a href="#">
          <img src="img\html_to_pdf@2x.png" alt="HTML tutorial" style="height: 65px; margin: 7px 0px 7px 0px;">
      </a>
  </div>
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6" style="    margin: 70px;" >
      <ul class="nav nav-tabs" >
        <li class="active tab-style"><a data-toggle="tab" href="#menu1">Convert Web Page</a></li>
        <li class="tab-style"><a data-toggle="tab" href="#menu2" >Convert Html file</a></li>
        <li class="tab-style"><a data-toggle="tab" href="#menu3" >Convert Html Code</a></li>
      </ul>
      <div class="tab-content" style="background-color: #004080; opacity: 0.7; border-radius: 0px 10px 10px 10px;margin: 1px 0px; padding: 1px;">
        <div id="menu1" class="tab-pane fade in active">
          <div class="row" style=" padding: 68px 0px 20px 35px;">
          <form action="" class="form-inline">
            <div class="form-group" style="width: 65%;">
                <input type="text" placeholder="Enter your website address" class="form-control" style="width: 100%; border-radius: inherit;">
            </div>
            <div class="form-group">        
                <button class="btn btn-primary" style="border-radius: 2px;">Convert to PDF</button>
            </div>
            </form>
            </div>
        </div>
        
        <div id="menu2" class="tab-pane fade">
          <div class="row" style="padding: 30% 0px 0px 0px;">
            <form action="" method="POST" class="upload-file">
              <input type="file" multiple>
              <img src="img\upload@2x.png" alt="upload icon">
              <p>Drop Your HTML File</p>
              <!--<button type="submit">Upload</button>-->
            </form>
          </div>
        </div>
        <div id="menu3" class="tab-pane fade">
            <form action="">
              <div class="row" style=" padding: 20px 0px 0px 40px;">
                <div class="form-group" style="width: 65%;">
                  <textarea placeholder="Enter your Html Code" rows="10" class="form-control" style="width: 142%; resize: none;"></textarea>
                </div>
              </div>
              <div class="row">        
                <div style="border-top: 1px solid #fff; width: 60%; margin: 8px 20%;"></div>
              </div>
              <div class="row">
                <div class="form-group">        
                  <button class="btn btn-primary" style="border-radius: 2px;margin: 0px 40%;">Convert to PDF</button>
                </div>
              </div>
            </form>    
        </div>
      </div>
    </div>
  </div>
</div>