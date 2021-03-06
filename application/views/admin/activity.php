<div id="clc_contents">	
	<!-- <div id="main_filter" class="graphs table_divs panel panel-info" style="margin-top:-10px;">		  <!-- Default panel contents --> 
	  <!-- <div class="panel-heading" style="font-size:13px;font-weight:bold">Main Filter</div> -->
	  <!-- <div class="panel-body"></div> -->
	<!-- </div> -->

	<div id="main_graph" class="graphs table_divs panel panel-success">		  <!-- Default panel contents -->
	  <div id="tabs" style="font-size:13px;font-weight:bold">
	  	<a id="trend_tab" href="<?php echo base_url().'rtk_management/rtk_manager'; ?>" data-tab="1" class="tab">Own Activity</a>
		<a id="users_tab" href="<?php echo base_url().'rtk_management/rtk_manager_users'; ?>" data-tab="1" class="tab">Reports</a>	
		<a id="facilities_tab" href="<?php echo base_url().'rtk_management/rtk_manager_facilities/A';?>" data-tab="1" class="tab">User Activity</a>					
		<a id="activity_tab" href="<?php echo base_url().'rtk_management/rtk_manager_activity'; ?>" data-tab="2" class="tab">Facility Activity</a>
	  </div>
	  <div id="main_chart_body" class="panel-body" style="min-height:400px;height:auto;"></div>
	</div>
</div>
<style type="text/css">
	.graph{
		min-height: 360px;
		height: auto;
		width: 100%;
		border: 1px dotted green;
		float: left;
		margin-left: 3%;
		margin-top: -1%;
	}

	#main_graph{
		min-height: 700px;
		height: auto;
		width: 100%;		
		float: left;
		margin-left: 1%;
		margin-top: 0%;
	}

	#main_filter{		
		height: auto;
		width: 100%;		
		float: left;
		margin-left: 1%;
		margin-top: 0%;
	}
	#clc_contents{
		margin-top: 2%;		
		background-color: #ffffff;
	}

	.charts{
		height: 300px;
		width: 47%;
		border: 1px dotted green;
		float: left;
		margin-left: 3%;
		margin-top: 2%;
	}	
	#tabs{
		height: 40px;
		background:#F9F9F9; 
	}
	.tab {
		float: left;
		display: block;
		padding: 10px 20px;
		text-decoration: none;
		border-radius: 5px 5px 0 0;
		background: #F9F9F9;
		color: #777;		
	}
	#tabs a,#switch_tab a{		
		text-decoration: none;
		font-style: normal;		
	}
	#tabs a:hover,#switch_tab:hover{
		border-radius: 5px 5px 0 0;
		background: #CCCCCC;
	}
	.tab_switch {
		float: right;
		display: block;
		padding: 10px 20px;
		text-decoration: none;
		border-radius: 5px 5px 0 0;
		background: #F9F9F9;
		color: #777;
	}
	
</style>

<script type="text/javascript">
	$(document).ready(function (e){		
		// $.ajax({
		// 	url: "<?php echo base_url() . 'Admin_management/get_national_summary'; ?>",
		// 	dataType: 'json',
		// 	success: function(s){		
		// 		var percentage = s.percentage;
		// 		console.log(percentage);
		// 		$('.progress-bar').css('width', percentage+'%').attr('aria-valuenow', percentage);
		// 		$( "#main_percentage" ).progressbar({
		// 			value: percentage
		// 		});
		// 		$( "#perc" ).html(percentage+' % Reported');
		// 	},
		// 	error: function(e){
		// 		console.log(e.responseText);
		// 	}
		// });	
		// load_main_graph();
		function load_main_graph()
		{
			$.ajax({
			url: "<?php echo base_url() . 'Admin_management/get_main_graph'; ?>",
			dataType: 'json',
			success: function(s){		
				var counties = s.counties;
				var percentages_current = s.current_month;
				var percentages_last = s.last_month;
				var percentages_last1 = s.last_month1;
				var months_list = s.months_list;
				var header_month = s.months_list[3];
				$('#report_period_header').html(header_month);
				console.log(s);		
				 $('#main_chart_body').highcharts({
			            credits: {
			      			enabled: false
			      		},
			            chart: {
			                type: 'bar'
			            },
			            title: {
			                text: 'Live Data from RTK System'
			            },
			            subtitle: {
			                text: 'RTK Data'
			            },
			            xAxis: {
			                categories: counties
			            },
			            yAxis: {
			                min: 0,
			                max:100,
			                title: {
			                    text: 'Percentage Reporting'
			                }
			            },
			            legend: {
			                layout: 'vertical',
			                align: 'right',
			                verticalAlign: 'top',
			                x: -40,
			                y: 100,
			                floating: true,
			                borderWidth: 1,
			                backgroundColor: '#FFFFFF',
			                shadow: true
			            },
			            tooltip: {
			                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
			                pointFormat: '<tr><td style="color:{series.color};padding:0;font-size:11px;">{series.name}: </td>' +
			                    '<td style="padding:0;font-size:11px;"><b>{point.y:.1f} %</b></td></tr>',
			                footerFormat: '</table>',
			                shared: true,
			                useHTML: true
			            },
			            plotOptions: {
			                column: {
			                    pointPadding: 0.2,
			                    borderWidth: 0
			                }
			            },
			            series: [{
			                name: months_list[0],
			                data: percentages_current
			    
			            },{
			                name: months_list[1],
			                data: percentages_last
			    
			            },  {
			                name: months_list[2],
			                data: percentages_last1
			    
			            }]
			        });						
			},
			error: function(e){
				console.log(e.responseText);
			}
		});	
		}
	    
	});
	


	// $(document).ajaxStart(function(){
	//     $('#loading').show();
	//  }).ajaxStop(function(){
	//     $('#loading').hide();
	//  });
</script>


	
</div>
<div class="modal" id="loading">
	
</div>
<style type="text/css">
	.modal
	{
	    display:    none;
	    position:   fixed;
	    z-index:    1000;
	    top:        0;
	    left:       0;
	    height:     100%;
	    width:      100%;
	    background: rgba( 255, 255, 255, .8 ) 
	                url('<?php echo base_url();?>assets/img/new_loader.gif') 
	                50% 50% 
	                no-repeat;	    
	}

	/* When the body has the loading class, we turn
	   the scrollbar off with overflow:hidden */
	body.loading {
	    overflow: hidden;   
	}

	/* Anytime the body has the loading class, our
	   modal element will be visible */
	body.loading .modal {
	    display: block;
	}

</style>
