<!doctype html>
<html lang="en">
  <head>
   <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles/bootstrap.min.css">
   <link rel="stylesheet" href="styles/spectrum.css">
   <link rel="stylesheet" href="styles/cstmzrstyle.css">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />  
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <link rel ="stylesheet" type="text/css" href="styles/style.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>

    <title>STAMPED. | The Customizer</title>

  </head>

  <body oncontextmenu="return false;">
    <div class="topnav" id="myTopnav">
        <?php include("includes/inc_navi.php");?>
    </div>

	    <div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
          
                </li>

                <li>
                    <a><input type="file" id="file"></a>
                </li>

                <li>
                    <a id="download">Download</a>
                </li>

                <li>
                    <a id="delete">Delete</a>
                </li>
              
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown">Mode <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                        <!-- <li class="dropdown-header"> </li> -->
                    <li><a id="selection">Selection</a></li>
                    <li><a id="drawing">Drawing</a></li>
                    <li><a id="polygon">Polygon</a></li>
                  </ul>
                </li>
                   <li>
                    <a data-toggle="modal" href="#canvasmodal">Canvas</a>
                </li>
                  <li>
                    <a data-toggle="modal" href="#textmodal">Text</a>
                </li>

                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown">Shapes <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                <!--  <li class="dropdown-header"> </li> -->
                    <li><a id="line">Line</a></li>
                    <li><a id="circle">Circle</a></li>
                    <li><a id="rect">Rectangle</a></li>
                    <li><a id="triangle">Triangle</a></li>
                  </ul>
                </li>

              
              
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
                <span class="hamb-middle"></span>
                <span class="hamb-bottom"></span>
            </button>
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-3">
                             <canvas id ="c"></canvas>             
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>

         <!--Canvas Modal -->
          <div class="modal fade" id="canvasmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 class="modal-title" style="text-align:center;">Canvas</h4>
                </div>
                <div class="modal-body">
                     <div class="row">
                        <div class="col-sm-offset-2 col-sm-8">
                            <div style="text-align:center;">
                            Background: <input id="canvascolor" value = "#fff">
                            </div>
                        </div>
                    </div>
                    <div style="margin:8px;"></div>

                    <div class="row">
                        <div class="col-sm-offset-2 col-sm-8">
                            <div style="text-align:center;">
                            Font-Color: &nbsp;&nbsp;<input id="color" value = "#000" >
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-offset-2 col-sm-8">
                                <div style="text-align:center;margin-top:10px;"><strong>Brush Width</strong></div>
                              <input type="range" id="line-width" value="5" style="margin-top:10px;">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                  <div style="text-align:center;">
                  <button type="button" id="set_canvascolor" data-dismiss="modal" class="btn btn-primary" style="width:70px;border-radius:0;">Set</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal" style="border-radius:0;">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!--Text Modal -->
          <div class="modal fade" id="textmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 class="modal-title" style="text-align:center;">Text</h4>
                </div>
                <div class="modal-body">
                     <div class="row">
                        <div class="col-sm-offset-2 col-sm-9">
                            <div style="text-align:center;">
                            Font-Family: 
                                <select id="font-family" style="padding-right:15px;">
                                      <option value="arial">Arial</option>
                                      <option value="ubuntu">Ubuntu</option>
                                </select> 
                            </div>
                        </div>
                    </div>
                    <div style="margin:8px;"></div>

                    <div class="row">
                        <div class="col-sm-offset-2 col-sm-9">
                            <div style="text-align:center;">
                            Font-Weight: 
                                 <select id="font-weight">
                                      <option value="regular">Regular</option>
                                      <option value="bold">Bold</option>
                                      <option value="italic">Italic</option>
                                      <option value="bold_italic">Bold Italic</option>
                                 </select> 
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-offset-2 col-sm-8">
                                <div style="text-align:center;margin-top:10px;"><strong>Font Size</strong></div>
                              <input type="range" id="font-size" value="12" style="margin-top:10px;">
                        </div>
                    </div>
                    <div style="margin:8px;"></div>
                    <div class="row">
                        <div class="col-sm-offset-2 col-sm-8">
                            <textarea id="ta" rows="5" cols="21"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                  <div style="text-align:center;">
                  <button type="button" id="set_text" data-dismiss="modal" class="btn btn-primary" style="width:70px;border-radius:0;">Set</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal" style="border-radius:0;">Cancel</button>
                  </div>
                </div>

              </div>
            </div>
          </div>

         <!-- Plugins -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/fabric.min.js"></script>
        <script src="js/spectrum.js"></script>
 		<script src="js/script.js"></script>

     <div style="position:relative;">
        <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
          <p><?php include("includes/inc_bottomcontact.php");?></p>
        </div>
    </div>
<script>

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

  </body>



</html>
