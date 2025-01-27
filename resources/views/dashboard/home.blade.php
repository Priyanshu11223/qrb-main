@extends('layouts.main')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row">
                @can('manage-user')
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card card-statistic-2">
                            <div class="card-icon shadow-primary bg-primary">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>{{ __('Total User') }}</h4>
                                </div>
                                <div class="card-body">
                                    {{ $user }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endcan
                @can('manage-form')
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card card-statistic-2">
                            <div class="card-icon shadow-primary bg-primary">
                                <i class="far fa-file-alt"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>{{ __('Total Form') }}</h4>
                                </div>
                                <div class="card-body">
                                    {{ $form }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endcan
                @can('manage-submitted-form')
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card card-statistic-2">
                            <div class="card-icon shadow-primary bg-primary">
                                <i class="fab fa-wpforms"></i>

                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>{{ __('Total Submited Form') }}</h4>
                                </div>
                                <div class="card-body">
                                    {{ $submitted_form }}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endcan
                </div>
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="card">
                        <div class="card-header">
                            
                            <h4>{{ __('Form') }}</h4>
                        </div>
                        <div class="card-body">
                            @php
                                $hashids = new Hashids('', 20);
                                $id = $hashids->encodeHex(2);
                            @endphp
                            @if($editFormURL)
                                <a href="{{$editFormURL}}" class="btn btn-primary">Complete your form</a>
                            @else 
                                <a href="{{ route('forms.survey', $id) }}" class="btn btn-primary">Start</a>
                            @endif
                           
                            
                            
                            <!--<canvas id="myChart" height="100"></canvas>-->
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection

@push('script')
    <script src="{{ asset('assets/js/page/index-0.js') }}"></script>

    <script>
        $(document).ready(function() {
            getChartData('myChart');
        })

        function getChartData(type) {

            $.ajax({
                url: "{{ route('get.chart.data') }}",
                type: 'POST',
                data: {
                    type: type,
                    _token: $('meta[name="csrf-token"]').attr('content')
                },

                success: function(result) {
                    myChart.data.labels = result.lable;
                    myChart.data.datasets[0].data = result.value;
                    myChart.update()
                },
                error: function(data) {
                    console.log(data.responseJSON);
                }

            });
        }
    </script>

@endpush
