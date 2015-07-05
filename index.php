<?php
	if(isset($_GET['page']))
	{
		header('location: view.php?page='.$_GET['page']);
		exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Clinica del Valle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/ui-lightness/jquery-ui.css" rel="stylesheet">
    <link href="css/fullcalendar.css" rel="stylesheet">
    <link href="lib/colorpicker/css/colorpicker.css" rel="stylesheet">
    <link href="lib/validation/css/validation.css" rel="stylesheet">

    <link href="lib/timepicker/jquery-ui-timepicker-addon.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index.php">Clinica del Valle</a>
        </div>
      </div>
    </div>

    <div class="container">

      <a href="add_event.php" class="btn pull-right btn-primary" style="margin-bottom: 20px;">Nueva Cita</a>

      <div class="clearfix"></div>

      <div class="box">
        <div class="header"><h4>Calendario</h4></div>
        <div class="content">
            <div id="calendar"></div>
        </div>
    </div>

    </div> <!-- /container -->

    <!-- Modal QuickSave Event -->
    <div id="cal_quickSaveModal" class="modal hide fade">
        <div class="modal-header">
        	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body"></div>
        <div class="modal-footer">
            <a href="#" class="btn btn-primary" data-option="quickSave">Nueva Cita</a>
        	<a href="#" class="btn" data-dismiss="modal">Cerrar</a>
        </div>
    </div>

    <!-- Modal Delete Prompt -->
    <div id="cal_prompt" class="modal hide fade">
        <div class="modal-header">
        	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body"></div>
        <div class="modal-footer">
        	<a href="#" class="btn btn-danger" data-option="remove-this">Eliminar</a>
            <a href="#" class="btn btn-danger" data-option="remove-repetitives">Eliminar todos</a>
        	<a href="#" class="btn" data-dismiss="modal">Cerrar</a>
        </div>
    </div>

    <!-- Modal Edit Prompt -->
    <div id="cal_edit_prompt_save" class="modal hide fade">
        <div class="modal-header">
        	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body-custom"></div>
        <div class="modal-footer">
        	<a href="#" class="btn btn-info" data-option="save-this">Guardar este</a>
            <a href="#" class="btn btn-info" data-option="save-repetitives">Guardar Todos</a>
        	<a href="#" class="btn" data-dismiss="modal">Cerrar</a>
        </div>
    </div>

    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/fullcalendar.js"></script>
    <script src="js/gcal.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.calendar.js"></script>
    <script src="lib/colorpicker/bootstrap-colorpicker.js"></script>
    <script src="lib/validation/jquery.validationEngine.js"></script>
    <script src="lib/validation/jquery.validationEngine-en.js"></script>

    <script src="lib/timepicker/jquery-ui-sliderAccess.js"></script>
    <script src="lib/timepicker/jquery-ui-timepicker-addon.min.js"></script>

    <script src="js/custom.js"></script>

    <!-- call calendar plugin -->
    <script type="text/javascript">
		$().FullCalendarExt({
			version: 'php'
		});
	</script>

  </body>
</html>
