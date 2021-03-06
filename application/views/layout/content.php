<!-- income -->
<script>
   $(document).ready(function() {
       var ctx = $("#chart-line");
       var myLineChart = new Chart(ctx, {
           type: 'pie',
           data: {
               labels: ["Salary Income", "Rental Income","Commission Income","Other Income","Dividends"],
               datasets: [{
                   data: [<?= number_format($financial_profile['salary_income']) ?>,<?= number_format($financial_profile['rental_income']) ?>,<?= number_format($financial_profile['commision_income']) ?>,<?= number_format($financial_profile['other_income']) ?>,<?= number_format($financial_profile['dividends']) ?>],
                   backgroundColor: ["rgba(255, 0, 0, 0.5)", "rgba(100, 255, 0, 0.5)", "rgba(200, 50, 255, 0.5)", "rgba(0, 100, 255, 0.5)"]
               }]
           },
           options: {
               title: {
                   display: true,
                   text: 'Income'
               }
           }
       });
   });
</script>
<!-- income -->
<!-- Spending -->
<script>
   $(document).ready(function() {
       var ctx = $("#spending_chart");
       var myLineChart = new Chart(ctx, {
           type: 'pie',
           data: {
               labels: ["Salary Changed", "Salary Debosit","Large Deposit"],
               datasets: [{
                   data: ["79654","150659","120000"],
                   backgroundColor: ["rgba(255, 0, 0, 0.5)", "rgba(100, 255, 0, 0.5)", "rgba(200, 50, 255, 0.5)", "rgba(0, 100, 255, 0.5)"]
               }]
           },
           options: {
               title: {
                   display: true,
                   text: 'Spend'
               }
           }
       });
   });
</script>
<!-- Spending End -->
<!-- data chart -->
<script type="text/javascript">
   $(function() {
    $('.chart').easyPieChart({
      size: 160,
      barColor: "#17d3e6",
      scaleLength: 0,
      lineWidth: 15,
      trackColor: "#373737",
      lineCap: "circle",
      animate: 2000,
    });
   });
</script>
<script>
  jQuery(function ($) {
        var performance = [12, 3, 4, 2, 12, 3, 4, 17, 22, 34, 54, 67],
            visits = [3, 9, 12, 14, 22, 32, 45, 12, 67, 45, 55, 7],
            budget = [23, 19, 11, 134, 242, 352, 435, 22, 637, 445, 555, 57];

        $("#performance1").shieldChart({
            primaryHeader: {
                text: "Quarterly Performance"
            },
            dataSeries: [{
                seriesType: "area",
                collectionAlias: "Q Data",
                data: performance
            }]
        });

        $("#performance2").shieldChart({
            primaryHeader: {
                text: "Visitors"
            },
                axisX: {
                    categoricalValues: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
                },
            dataSeries: [{
                seriesType: "bar",
                collectionAlias: "Visits",
                data: visits
            }]
        });

        $("#performance3").shieldChart({
            primaryHeader: {
                text: "Budget"
            },
            dataSeries: [{
                seriesType: "line",
                collectionAlias: "Budget",
                data: budget
            }]
        });
    });
</script>
<!-- data chart end -->
<div class="pcoded-content">
   <div class="pcoded-inner-content">
      <div class="main-body">
         <div class="page-wrapper">
            <div class="page-body">
               <div class="row">
                  <div class="col-xl-12 col-md-12">
                     <div class="card ticket-card">
                        <div class="card-body">
                           <p class="m-b-30 bg-c-yellow lbl-card"><i class="fas fa-database"></i> Balance</p>
                           <div class="text-center">
                              <h2 style="font-weight: 900" class="m-b-0 d-inline-block text-primary">Total Balance</h2>
                              <br>
                              <h2 class="m-b-0 d-inline-block text-primary">$396,397 <i class="fa fa-eye text-primary"></i></h2>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 col-lg-6">
                     <div class="card">
                        <div class="card-header text-success" style="font-weight: 900;text-align: center">Income</div>
                        <div class="card-body" style="height: auto">
                           <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                              <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                 <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                              </div>
                              <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                 <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                              </div>
                           </div>
                           <canvas id="chart-line" width="299" height="250" class="chartjs-render-monitor" style="display: block; width: 299px; height: 200px;"></canvas>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-6">
                     <div class="card">
                        <div class="card-header text-success" style="font-weight: 900;text-align: center">Spend</div>
                        <div class="card-body" style="height: auto">
                           <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                              <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                 <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                              </div>
                              <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                 <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                              </div>
                           </div>
                           <canvas id="spending_chart" width="299" height="250" class="chartjs-render-monitor" style="display: block; width: 299px; height: 200px;"></canvas>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="row">
                     <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Income/Spend Analysis</h3>
                </div>
                <div class="panel-body">
                    <div id="performance1" style="height: 270px;"></div>
                </div>
            </div>
        </div>
                  </div>
            </div>
            <div class="row">
               <div class="col-xl-12 col-md-12">
                  <div class="card ticket-card">
                     <div class="card-body">
                        <p class="m-b-30 bg-c-yellow lbl-card"><i class="fas fa-database"></i> Netwroth</p>
                        <div class="text-center">
                           <h2 style="font-weight: 900" class="m-b-0 d-inline-block text-primary">Total Balance</h2>
                           <br>
                           <h2 class="m-b-0 d-inline-block text-primary">$396,397 <i class="fa fa-eye text-primary"></i></h2>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row" style="border-radius: 100px;">
               <div class="col-md-4">
                  <div class="counter bg-primary" data-count="150">0</div>
                  <h4>Change in Network</h4>
               </div>
               <div class="col-md-4">
                  <div class="counter bg-success" data-count="85">0</div>
                  <h4>Change in Assets</h4>
               </div>
               <div class="col-md-4">
                  <div class="counter" data-count="2200">0</div>
                  <h4>Change in Liabilities</h4>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<script>
   $('.counter').each(function() {
   var $this = $(this),
   countTo = $this.attr('data-count');
   
   $({ countNum: $this.text()}).animate({
   countNum: countTo
   },
   
   {
   
   duration: 8000,
   easing:'linear',
   step: function() {
   $this.text(Math.floor(this.countNum));
   },
   complete: function() {
   $this.text(this.countNum);
   //alert('finished');
   }
   
   });  
   
   
   
   });
</script>
<div id="styleSelector"></div>
</div>
</div>
</div>
</div>