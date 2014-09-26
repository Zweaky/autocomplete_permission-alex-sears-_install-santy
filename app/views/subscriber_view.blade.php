<html>
<head>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<title>Subscriber management</title>
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
{{ HTML::style('assets/css/style.css')  }}
{{ HTML::script('assets/js/jquery.dataTables.min.js') }}


<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/ui-lightness/jquery-ui.css" type="text/css" media="screen"/>	
</head>
<body>
    dzdffg
<!-- {{ HTML::image('master/images/url.jpg','samp',array('height'=>300,'width'=>1200)) }}</a></div>
 -->
 <div class="wrapper">
<script type="text/javascript">
        $(document).ready(function() {
	var oTable = $('#big_table').dataTable( {
		"bProcessing": true,
		"bServerSide": true,
		"sAjaxSource": '<?php echo base_url(); ?>index.php/subscriber/datatable',
                "bJQueryUI": true,
                "sPaginationType": "full_numbers",
                "iDisplayStart ":20,
                "oLanguage": {
            "sProcessing": "{{ HTML::image('master/images/url.jpg'>"
        },  
        "fnInitComplete": function() {
                //oTable.fnA djustColumnSizing();
         },
                'fnServerData': function(sSource, aoData, fnCallback)
            {
              $.ajax
              ({
                'dataType': 'json',
                'type'    : 'POST',
                'url'     : sSource,
                'data'    : aoData,
                'success' : fnCallback
              });
            }
	} );
} );
</script>
<h1>Employees Attendance Management</h1>
<?php echo $this->table->generate(); ?>
    </div>
</body>
<footer>
    <label class="footer-label" >Tutorial created by Muhammed Iqbal.M <a href="http://www.ahmed-samy.com">blog </a></label>
</footer>
</html>
