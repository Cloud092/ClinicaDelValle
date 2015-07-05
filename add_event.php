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

      <a href="index.php" class="btn pull-right" style="margin-bottom: 20px;">Ver Calendario</a>

      <div class="clearfix"></div>

      <div class="box">
        <div class="header"><h4>Nueva Cita</h4></div>
        <div class="content pad">

            <form id="add_event">

                <label>Titulo:</label>
                <input type="text" class="validate[required] input-block-level" name="title" id="title">
                <label>Descripcion:</label>
                <textarea class="input-block-level" name="description" id="description" ></textarea>
                <div class="pull-left mr-10">
                <label>Fecha Inicio:</label>
                <input type="text" name="start_date" class="validate[required]" id="datepicker">
                </div>
                <div class="pull-left">
                <label>Hora Inicio:</label>
                <input type="text" class="input-small" name="start_time" placeholder="HH:MM" id="tp1">
                </div>
                <div class="clearfix"></div>
                <div class="pull-left mr-10">
                <label>Fecha Fin:</label>
                <input type="text" name="end_date" id="datepicker2">
                </div>
                <div class="pull-left">
                <label>Hora Fin:</label>
                <input type="text" class="input-small" name="end_time" placeholder="HH:MM" id="tp2">
                </div>
                <div class="clearfix"></div>
                <label>Color del evento:</label>
                <input type="text" class="input-small" name="color" id="cp">
                <label>Todo el dia?:</label>
                <select name="allDay">
                    <option value="true" selected>Si</option>
                    <option value="false">No</option>
                </select>
                <div class="clearfix"></div>
                <div class="pull-left mr-10">
                <label>Repetir:</label>
                <select name="repeat_method">
                    <option value="no" selected>No</option>
                    <option value="every_day">Todos los dias</option>
                    <option value="every_week">Cada Semana</option>
                    <option value="every_month">Cada Mes</option>
                </select>
                </div>
                 <div class="pull-left">
                <label>Veces:</label>
                <select name="repeat_times">
                    <option value="1" selected>1</option>
                    <?php
						for($i = 2; $i <= 30; $i++) {
							echo '<option value="'.$i.'">'.$i.'</option>';
						}
					?>
                </select>
                </div>
                <div class="clearfix"></div>
                <!-- <label>Url:</label>
                <input type="text" class="input-block-level" name="url" id="url" placeholder="http://www.domain.com">
                <p class="help-block">Hint: If this event does not have url please leave blank</p>
     -->
                <button type="submit" onclick="calendar.save()" class="btn btn-primary pull-right">Agregar Cita</button>

            </form>

        </div>
    </div>

    </div> <!-- /container -->

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

    <script type="text/javascript">
		$().FullCalendarExt();
	</script>

  </body>
</html>
