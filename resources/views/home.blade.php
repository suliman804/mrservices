@extends('backendPartials.default')
@section('meta_section')
  <meta name="description" content="Construction">
  <meta name="keywords" content="Software House, Web development, softwares, IT company, IT companies, companies, softwares companies, websites, designers, internships, jobs, software internships, islamabad, rawalpindi, website development, website designing, websites, Construction, Construction software, Construction">
  <meta name="author" content="Muhammad Arbaz">
  <meta name="title" content="Construction">  
@endsection
@section('home_bar','current')
@section('section')


    <div class="row">
          <!-- <div class="col-md-4 col-lg-4 col-sm-12">
            <div class="card radius-10">
              <div class="card-body">
                <div class="mx-auto widget-icon bg-light-dark text-dark">
                  <i class="bi bi-people-fill"></i>
                </div>
                <div class="text-center mt-3">
                  <h3 class="text-dark mb-1">{{$new_applicant}}</h3>
                  <p class="text-muted mb-4">New Applicant</p>
                  <p class="text-dark mb-0 font-13"><span>-</span></p>
                </div>
              </div>
            </div>
          </div> -->
          <!-- <div class="col-md-4 col-lg-4 col-sm-12">
            <div class="card radius-10">
              <div class="card-body">
                <div class="mx-auto widget-icon bg-light-dark text-dark">
                  <i class="bi bi-question-square-fill"></i>
                </div>
                <div class="text-center mt-3">
                  <h3 class="text-dark mb-1">{{$new_queries}}</h3>
                  <p class="text-muted mb-4">New Queries</p>
                  <p class="text-dark mb-0 font-13"><span>-</span></p>
                </div>
              </div>
            </div>
          </div> -->
          <div class="col-md-4 col-lg-4 col-sm-12">
            <div class="card radius-10">
              <div class="card-body">
                <div class="mx-auto widget-icon bg-light-dark text-dark">
                  <i class="bi bi-wallet-fill"></i>
                </div>
                <div class="text-center mt-3">
                  <h3 class="text-dark mb-1">{{$total_quotes}}</h3>
                  <p class="text-muted mb-4">Total Quotes</p>
                  <p class="text-dark mb-0 font-13"><span>-</span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-4 col-sm-12">
            <div class="card radius-10">
              <div class="card-body">
                <div class="mx-auto widget-icon bg-light-dark text-dark">
                  <i class="bi bi-wallet-fill"></i>
                </div>
                <div class="text-center mt-3">
                  <h3 class="text-dark mb-1">{{$new_quotes}}</h3>
                  <p class="text-muted mb-4">New Quotes Request</p>
                  <p class="text-dark mb-0 font-13"><span>-</span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-4 col-sm-12">
            <div class="card radius-10">
              <div class="card-body">
                <div class="mx-auto widget-icon bg-light-dark text-dark">
                  <i class="bi bi-people-fill"></i>
                </div>
                <div class="text-center mt-3">
                  <h3 class="text-dark mb-1">{{$Orders}}</h3>
                  <p class="text-muted mb-4">Total Orders</p>
                  <p class="text-dark mb-0 font-13"><span>-</span></p>                  
                </div>
              </div>
            </div>
          </div>
          

          <!-- <div class="col-md-4 col-lg-4 col-sm-12">
            <div class="card radius-10">
              <div class="card-body">
                <div class="mx-auto widget-icon bg-light-dark text-dark">
                  <i class="bi bi-eye"></i>
                </div>
                <div class="text-center mt-3">
                  <h3 class="text-dark mb-1">{{$top_product->visitor_count}}</h3>
                  <p class="text-muted mb-4">Top {{$top_product->title}} Views</p>
                  <p class="text-dark mb-0 font-13"><span>-</span></p>
                </div>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-md-4 col-lg-4 col-sm-12">
            <div class="card radius-10">
              <div class="card-body">
                <div class="mx-auto widget-icon bg-light-dark text-dark">
                  <i class="bi bi-eye"></i>
                </div>
                <div class="text-center mt-3">
                  <h3 class="text-dark mb-1">{{$top_course?$top_course->visitor_count:0}}</h3>
                  <p class="text-muted mb-4">Top {{$top_course?$top_course->title:'-'}} Views</p>
                  <p class="text-dark mb-0 font-13"><span>-</span></p>
                </div>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-md-4 col-lg-4 col-sm-12">
            <div class="card radius-10">
              <div class="card-body">
                <div class="mx-auto widget-icon bg-light-dark text-dark">
                  <i class="bi bi-eye"></i>
                </div>
                <div class="text-center mt-3">
                  <h3 class="text-dark mb-1">{{$reviews}}</h3>
                  <p class="text-muted mb-4">Website Reviews</p>
                  <p class="text-dark mb-0 font-13"><span>-</span></p>
                </div>
              </div>
            </div>
          </div> -->


          <!-- <div class="col-md-4 col-lg-4 col-sm-12">
            <div class="card radius-10">
              <div class="card-body">
                <div class="mx-auto widget-icon bg-light-dark text-dark">
                  <i class="bi bi-bar-chart-fill"></i>
                </div>
                <div class="text-center mt-3">
                  <h3 class="text-dark mb-1">{{$current_month_visitors}}</h3>
                  <p class="text-muted mb-4">Total {{date('F')}} Visitors</p>
                  <p class="text-dark mb-0 font-13">@if($previos_month_visitors > $current_month_visitors)<i style="color:red" class="bi bi-arrow-down"></i>@else <i style="color:green" class="bi bi-arrow-up"></i> @endif<span>{{$average_month_visitor}}%</span></p>
                </div>
              </div>
            </div>
          </div> -->


        </div>


<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
          <div class="col-md-12 col-sm-12">
	     				<canvas id="chart1" style="height:400px;"></canvas>
          </div>
				</div>
				<hr>
				<div class="row">
			          <div class="col-md-9 col-sm-12">
              		<canvas id="chart_visitor" style="height:400px;"></canvas>
				        </div>

                <div class="col-md-3 col-sm-12">  
                    <div class="chart-container5">
                      <div class="piechart-legend">
                        <h2 class="mb-1">{{$total_visitors}}</h2>
                        <h6 class="mb-0">Total Views By Country</h6>
                      </div>
                      <canvas id="chart3"></canvas>
                    </div>          
                </div>
        </div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('jsOutside')

<!-- <script type="text/javascript">
	var ctx = document.getElementById('chart1').getContext('2d');
    var dates = @json($dates);
    var visitor = @json($records);
    var countries_list = @json($countries_list);
    var countries = @json($countries);
    var colors = @json($colors);

    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: dates,
            datasets: [{
                label: 'Visitors ({{date("F")}})',
                data: visitor,
                backgroundColor: [
                    'darkred'
                ],
                lineTension: 1,
                borderColor: [
                    'darkred'
                ],
                borderWidth: 3
            }]
        },
        options: {
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

   	var ctx = document.getElementById('chart_visitor').getContext('2d');
    var dates_y = @json($dates_y);
     var records_y = @json($records_y);
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: dates_y,
            datasets: [{
                label: 'Visitors',
                data: records_y,
                backgroundColor: [
                    'green'
                ],
                lineTension: 0.5,
                borderColor: [
                    'green'
                ],
                borderWidth: 3
            }]
        },
        options: {
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });


var ctx = document.getElementById('chart3').getContext('2d');

var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: countries_list,
        datasets: [{
            data: countries,
            backgroundColor: colors,
            borderWidth: 1
        }]
    },
    options: {
        maintainAspectRatio: false,
        cutout: 100,
        plugins: {
        legend: {
            display: false,
        }
    }
        
    }
});

</script> -->

@endsection