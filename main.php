
<!-- Loading Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
    
            <!-- Modal content-->
            <div class="modal-content loading-modal">
              <!--<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
              </div>-->
              <div class="modal-body">
                <H2>Processing...</H2>
                <img id="imgloading" src="img/Circle-Animation.gif" alt="Loading" width="50%">
              </div>
              <!--<div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>-->
            </div>    
          </div>
        </div>

<!--Download-Modal -->
<div class="modal fade" id="downloadModal" role="dialog" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog">
    
    <!-- Modal content-->
    <div class="modal-content download-modal">
      <!--<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>-->
      <div class="modal-body">
        <img id="imgdownload" src="img/POPUP@2x.png" alt="Download" width="90%">
        <button id="download_btn" class="btn btn-primary" type="button" data-dismiss="modal" >Download PDF</button>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div>    
  </div>
</div>

<div id="main" class="container-fluid" >
  <div class="row main-img">
    <img src="img\html_to_pdf@2x.png" alt="HTML tutorial" >
  </div>
  <div class="row">
    <div class="col-md-offset-3 col-md-6  main_tabs">
      <ul class="nav nav-tabs " >
        <li class="active tab-style" ><a data-toggle="tab" href="#menu1">Convert Web Page</a></li>
        <li class="tab-style" ><a data-toggle="tab" href="#menu2" >Convert Html file</a></li>
        <li class="tab-style" ><a data-toggle="tab" href="#menu3" >Convert Html Code</a></li>
      </ul>
      <div class="tab-content">

        <div id="menu1" class="tab-pane fade in active">
          <div class="row" >
          <form action="" class="form-inline">
            <div class="col-md-8 menu1-col1">
              <div class="form-group">
                <input id="menu1_text" type="text" placeholder="Enter your website address" class="form-control">
              </div>
            </div>
            <div class="col-md-4 menu1-col2" >
              <div class="form-group">        
                <button id="menu1_btn" class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false">Convert to PDF</button>
              </div>
            </div>
          </form> 
          </div>
        </div>
        
        <div id="menu2" class="tab-pane fade">
          <div class="row menu2-row1">
            <form action="" method="POST" class="upload-file">
              <input type="file" multiple>
              <div class="row menu2-row2">
                <img src="img\upload@2x.png" alt="upload icon">
              </div>
              <div class="row menu2-row3">
                <p>Drag & Drop Your HTML File or Click Here</p>
              </div>
              <div class="row menu2-row4">
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false" >Convert to PDF</button>
            </div>
              <!--<button class="btn btn-primary" type="submit" style="position: absolute; margin: -8% 0px 0px 35%;">Or Upload HTML File</button>-->
            </form>
          </div>
        </div>

        <div id="menu3" class="tab-pane fade">
            <form action="">
              <div class="row menu3-row1">
                <div class="form-group">
                  <textarea placeholder="Enter your Html Code" rows="10" class="form-control"></textarea>
                </div>
              </div>
              <div class="row menu3-row2">        
                <div ></div>
              </div>
              <div class="row menu3-row3">
                <div class="form-group">        
                  <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false">Convert to PDF</button>
                </div>
              </div>
            </form>    
        </div>
      </div>
    </div>
  </div>
</div>