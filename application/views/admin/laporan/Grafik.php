<style>
 #chart{
   z-index:-10;} 
</style>
<body>
 <div id="chart">
</div>
<script src="<?=base_url()?>assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/chart/Chart.bundle.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/js/highcharts.js" type="text/javascript"></script>
<script src="&lt;?php echo base_url();?&gt;asset/highcharts/modules/exporting.js" type="text/javascript"></script>
<script src="&lt;?php echo base_url();?&gt;asset/highcharts/modules/offline-exporting.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery(function(){
 new Highcharts.Chart({
  chart: {
   renderTo: 'chart',
   type: 'line'
  },
  title: {
   text: 'Grafik Data Pembeli',
   x: -20
  },
  subtitle: {
   text: '',
   x: -20
  },
  xAxis: {
   categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
                    'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des']
  },
  yAxis: {
   title: {
    text: 'Total Pembeli'
   }
  },
  series: [{
   name: 'Data dalam Bulan',
   data: <?php echo json_encode($grafik); ?>
  }]
 });
}); 
</script>
</body>

