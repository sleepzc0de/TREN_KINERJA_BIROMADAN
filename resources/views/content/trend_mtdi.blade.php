@extends('layouts.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">

        <!-- Open Dropdown on hover -->
        <div class="col-lg-3 col-sm-6 col-12 pb-4">
            {{-- <small class="text-light fw-medium">Pilih Trend Unit</small> --}}
            <div class="demo-inline-spacing">
                <div class="btn-group" id="hover-dropdown-demo">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                        data-trigger="hover">
                        Pilih Trend Unit
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:void(0);">Perencanaan BMN</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Pengembangan Strategi dan Kinerja</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Manajemen Teknis, Data dan Informasi</a>
                        </li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Penatausahaan BMN</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Pengelolaan BMN</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Manajemen Pengadaan</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ Open Dropdown on hover -->

        <div class="alert alert-solid-info d-flex align-items-center" role="alert">
            <i class="mdi mdi-trending-up me-2"></i>
            Trend Kinerja - Bagian Manajemen Teknis, Data dan Informasi
        </div>

        <div class="row">
            <!-- Bar Chart -->
            <div class="col-lg-8 mb-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-md-center align-items-start">
                        <h5 class="card-title mb-0">Capaian Indeks Kepuasan Pengguna</h5>
                        <small class="text-muted">Data Tahun 2019 - 2023</small>
                    </div>
                    <div class="card-body">
                        <div id="capaianIndeksKepuasanPengguna"></div>
                    </div>
                </div>
            </div>
            <!-- /Bar Chart -->


            <!-- Alerts with headings -->
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h5 class="card-header">Key Point Kepuasan Pengguna</h5>
                    <div class="card-body">
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <h4 class="alert-heading d-flex align-items-center">
                                <i class="mdi mdi-key-outline mdi-24px me-2"></i>Key Point
                            </h4>
                            <hr />
                            <p class="mb-0">
                            <ul>
                                <li>Capaian <b>Helpdesk Tertinggi</b> berada pada tahun <b>2022</b></li>
                                <li>Capaian <b>Regver Tertinggi</b> berada pada tahun <b>2021</b></li>
                                <li>Capaian <b>Pelatihan Tertinggi</b> berada pada tahun <b>2022</b></li>
                            </ul>
                            </p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Alerts with headings -->


        </div>


        <div class="row">
            <!-- Alerts with headings -->
            <div class="col-lg-4 mb-4 mb-md-0">
                <div class="card">
                    <h5 class="card-header">Key Point User SPSE & SIMPeL</h5>
                    <div class="card-body">
                        <div class="alert alert-info alert-dismissible" role="alert">
                            <h4 class="alert-heading d-flex align-items-center">
                                <i class="mdi mdi-key-outline mdi-24px me-2"></i>Key Point User SPSE & SIMPeL
                            </h4>
                            <hr />
                            <p class="mb-0">
                            <ul>
                                <li>Pendaftaran User SPSE Tertinggi pada Tahun <b>2023</b></li>
                                <li>Pendaftaran User SIMPeL Tertinggi pada Tahun <b>2018</b></li>
                            </ul>
                            </p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Alerts with headings -->
            <!-- Bar Chart -->
            <div class="col-lg-8 mb-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-md-center align-items-start">
                        <h5 class="card-title mb-0">Pendaftaran Akun SPSE dan SIMPEL</h5>
                        <small class="text-muted">Data Tahun 2019 - 2023</small>
                    </div>
                    <div class="card-body">
                        <div id="SPSESIMPELChart"></div>
                    </div>
                </div>
            </div>
            <!-- /Bar Chart -->
        </div>
        <div class="row pt-2">

            <!-- Bar Chart -->
            <div class="col-lg-8 mb-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-md-center align-items-start">
                        <h5 class="card-title mb-0">Trend List Pengembangan dan Pembangunan</h5>
                        <small class="text-muted">Data Tahun 2019 - 2023</small>

                    </div>
                    <div class="card-body">
                        <div id="ListAplikasiChart"></div>
                    </div>
                </div>
            </div>
            <!-- /Bar Chart -->

             <!-- Alerts with headings -->
             <div class="col-lg-4 mb-4 mb-md-0">
                <div class="card">
                    <h5 class="card-header">Key Point Trend Aplikasi</h5>
                    <div class="card-body">
                        <div class="alert alert-primary alert-dismissible" role="alert">
                            <h4 class="alert-heading d-flex align-items-center">
                                <i class="mdi mdi-key-outline mdi-24px me-2"></i>Key Point User SPSE & SIMPeL
                            </h4>
                            <hr />
                            <p class="mb-0">
                            <ul>
                                <li>Jumlah Pembangunan Aplikasi <b>Tertinggi</b> pada Tahun <b>2021</b></li>
                                <li>Jumlah Pengembangan Aplikasi <b>Tertinggi</b> pada Tahun <b>2023</b></li>
                                <li>Jumlah Pengembangan Aplikasi <b>Terendah</b> pada Tahun <b>2021</b></li>
                                <li>Jumlah Pembangunan Aplikasi <b>Terendah</b> pada Tahun <b>2023</b></li>
                            </ul>
                            </ul>
                            </p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Alerts with headings -->
        </div>

        <div class="row">

            <!-- Donut Chart -->
            <div class="col-lg-4 mb-4 mb-md-0">
                <div class="card">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <div>
                      <h5 class="card-title mb-0">Jumlah KLDI yang Bekerja Sama</h5>
                      <small class="text-muted">Data 5 Tahun Terakhir (2019-2023)</small>
                    </div>
                  </div>
                  <div class="card-body">
                    <div id="donutChart"></div>
                  </div>
                </div>
              </div>
              <!-- /Donut Chart -->
        </div>
    </div>
@endsection


@section('script')
    <script src="../../assets/vendor/js/dropdown-hover.js"></script>
    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Page JS -->
    {{-- <script src="../../assets/js/charts-apex.js"></script> --}}

    <script>
        /**
         * Charts Apex
         */

        'use strict';

        (function() {
            let cardColor, headingColor, labelColor, borderColor, legendColor, isDarkStyle;


            if (isDarkStyle) {
                cardColor = config.colors_dark.cardColor;
                headingColor = config.colors_dark.headingColor;
                labelColor = config.colors_dark.textMuted;
                legendColor = config.colors_dark.bodyColor;
                borderColor = config.colors_dark.borderColor;
            } else {
                cardColor = config.colors.cardColor;
                headingColor = config.colors.headingColor;
                labelColor = config.colors.textMuted;
                legendColor = config.colors.bodyColor;
                borderColor = config.colors.borderColor;
            }

            // Color constant
            const chartColors = {
                column: {
                    series1: '#826af9',
                    series2: '#d2b0ff',
                    series3: '#ffb0b1',
                    bg: '#f8d3ff'
                },
                donut: {
                    series1: '#fdd835',
                    series2: '#32baff',
                    series3: '#ffa1a1',
                    series4: '#7367f0',
                    series5: '#29dac7'
                },
                area: {
                    series1: '#ab7efd',
                    series2: '#b992fe',
                    series3: '#e0cffe'
                }
            };

            // Heat chart data generator
            function generateDataHeat(count, yrange) {
                let i = 0;
                let series = [];
                while (i < count) {
                    let x = 'w' + (i + 1).toString();
                    let y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;

                    series.push({
                        x: x,
                        y: y
                    });
                    i++;
                }
                return series;
            }


            // CAPAIAN INDEKS CHART
            var seriesData = @json($series);
            var yearsData = @json($years);

            // console.log(yearsData);
            const barChartEl = document.querySelector('#capaianIndeksKepuasanPengguna'),
                barChartConfig = {
                    chart: {
                        height: 250,
                        fontFamily: 'Inter',
                        type: 'bar',
                        stacked: false, // Change this to false
                        parentHeightOffset: 0,
                        toolbar: {
                            show: false
                        }
                    },
                    plotOptions: {
                        bar: {
                            columnWidth: '65%',
                            colors: {
                                backgroundBarRadius: 10
                            }
                        }
                    },
                    dataLabels: {
                        enabled: false
                    },
                    legend: {
                        show: true,
                        position: 'top',
                        horizontalAlign: 'start',
                        labels: {
                            colors: legendColor,
                            useSeriesColors: false
                        }
                    },
                    colors: ['#58508d', '#ff6361', '#ffa600'],
                    stroke: {
                        show: true,
                        colors: ['transparent']
                    },
                    grid: {
                        borderColor: borderColor,
                        xaxis: {
                            lines: {
                                show: false
                            }
                        }
                    },
                    series: seriesData,
                    xaxis: {
                        categories: yearsData,
                        axisBorder: {
                            show: false
                        },
                        axisTicks: {
                            show: false
                        },
                        labels: {
                            style: {
                                colors: labelColor,
                                fontSize: '11px'
                            }
                        }
                    },
                    yaxis: {
                        min: 4.0, // Jarak minimum sumbu Y
                        max: 5.0, // Jarak maksimum sumbu Y
                        tickAmount: 2,
                        labels: {
                            style: {
                                colors: labelColor,
                                fontSize: '11px'
                            }
                        }
                    },
                    fill: {
                        opacity: 1
                    }
                };

            if (typeof barChartEl !== undefined && barChartEl !== null) {
                const barChart = new ApexCharts(barChartEl, barChartConfig);
                barChart.render();
            }



            // AKUN SPSE DAN SIMPEL
            // Bar Chart (Grouped Horizontal)
            // --------------------------------------------------------------------

            var seriesData2 = @json($series2);
            var yearsData2 = @json($years2);

            const SPSESIMPELChartEl = document.querySelector('#SPSESIMPELChart'),
                SPSESIMPELChartConfig = {
                    chart: {
                        height: 230,
                        fontFamily: 'Inter',
                        type: 'bar',
                        stacked: true, // Change to false for grouped bars
                        parentHeightOffset: 0,
                        toolbar: {
                            show: false
                        }
                    },
                    plotOptions: {
                        bar: {
                            horizontal: true, // Set to true for horizontal bars
                            columnWidth: '65%', // Adjust column width for grouped style
                            colors: {

                                backgroundBarRadius: 10
                            }
                        }
                    },
                    // dataLabels: {
                    //   enabled: true,  // Enable data labels if needed
                    //   offsetX: -6,
                    //   style: {
                    //     fontSize: '12px',
                    //     colors: ['#fff']
                    //   }
                    // },
                    tooltip: {
                        enabled: true, // Enable tooltips
                        y: {
                            formatter: function(val) { // Custom formatter for tooltip
                                return val + " User Penyedia"; // Add custom text after the number in the tooltip
                            }
                        }
                    },
                    legend: {
                        show: true,
                        position: 'top',
                        horizontalAlign: 'start',
                        labels: {
                            colors: legendColor,
                            useSeriesColors: false
                        }
                    },
                    colors: ['#00ADB5', '#393E46'],
                    stroke: {
                        show: true,
                        width: 1, // Set stroke width for separation
                        colors: ['#fff']
                    },
                    grid: {
                        borderColor: borderColor,
                        xaxis: {
                            lines: {
                                show: false
                            }
                        }
                    },
                    series: seriesData2,
                    xaxis: {
                        categories: yearsData2,
                        axisBorder: {
                            show: false
                        },
                        axisTicks: {
                            show: false
                        },
                        labels: {
                            style: {
                                colors: labelColor,
                                fontSize: '11px'
                            }
                        }
                    },
                    yaxis: {
                        labels: {
                            style: {
                                colors: labelColor,
                                fontSize: '11px'
                            }
                        }
                    },
                    fill: {
                        opacity: 1
                    }
                };

            if (typeof SPSESIMPELChartEl !== undefined && SPSESIMPELChartEl !== null) {
                const SPSESIMPELChart = new ApexCharts(SPSESIMPELChartEl, SPSESIMPELChartConfig);
                SPSESIMPELChart.render();
            }





            // LIST APLIKASI CHART
            // --------------------------------------------------------------------

            var seriesData3 = @json($series3);
            var yearsData3 = @json($years3);

            var appsData3 = @json($apps3);


            const ListAplikasiChartEl = document.querySelector('#ListAplikasiChart'),
                ListAplikasiChartConfig = {
                    chart: {
                        height: 315,
                        fontFamily: 'Inter',
                        type: 'bar',
                        stacked: true, // Tetap gunakan stacked
                        stackType: '100%', // Ubah stack type ke 100%
                        parentHeightOffset: 0,
                        toolbar: {
                            show: false
                        }
                    },
                    plotOptions: {
                        bar: {
                            horizontal: true, // Membuat bar chart menjadi horizontal
                            columnWidth: '15%',
                            colors: {
                                backgroundBarRadius: 10
                            }
                        }
                    },
                    dataLabels: {
                        enabled: true
                    },
                    tooltip: {
                        shared: true,
                        intersect: false,
                        enabled: true, // Enable tooltips
                        y: {
  formatter: function(val, { seriesIndex, dataPointIndex }) {
    const year = yearsData3[dataPointIndex];

    // Data aplikasi per tahun
    const pembangunanApps = appsData3['Pembangunan'][year] || [];
    const pengembanganApps = appsData3['Pengembangan'][year] || [];

    let tooltipText = `Tahun: ${year}<br/>`;

    // Jika bar Pembangunan dipilih (seriesIndex 0)
    if (seriesIndex === 0) {
      if (pembangunanApps.length > 0) {
        tooltipText += `${pembangunanApps.length} Aplikasi Pembangunan:<br/>`;
        pembangunanApps.forEach(app => {
          tooltipText += `- ${app}<br/>`;
        });
      } else {
        tooltipText += 'Tidak ada aplikasi Pembangunan<br/>';
      }
    }

    // Jika bar Pengembangan dipilih (seriesIndex 1)
    if (seriesIndex === 1) {
      if (pengembanganApps.length > 0) {
        tooltipText += `${pengembanganApps.length} Aplikasi Pengembangan:<br/>`;
        pengembanganApps.forEach(app => {
          tooltipText += `- ${app}<br/>`;
        });
      } else {
        tooltipText += 'Tidak ada aplikasi Pengembangan<br/>';
      }
    }

    return tooltipText;
  }
}

                    },
                    legend: {
                        show: true,
                        position: 'top',
                        horizontalAlign: 'start',
                        labels: {
                            colors: legendColor,
                            useSeriesColors: false
                        }
                    },
                    colors: ['#ADBC9F', '#436850'],
                    stroke: {
                        show: true,
                        colors: ['transparent']
                    },
                    grid: {
                        borderColor: borderColor,
                        xaxis: {
                            lines: {
                                show: true
                            }
                        }
                    },
                    series: seriesData3,
                    xaxis: {
                        categories: yearsData3,
                        axisBorder: {
                            show: false
                        },
                        axisTicks: {
                            show: false
                        },
                        labels: {
                            style: {
                                colors: labelColor,
                                fontSize: '11px'
                            }
                        }
                    },
                    yaxis: {
                        labels: {
                            style: {
                                colors: labelColor,
                                fontSize: '11px'
                            }
                        }
                    },
                    fill: {
                        opacity: 1
                    }
                };

            if (typeof ListAplikasiChartEl !== undefined && ListAplikasiChartEl !== null) {
                const ListAplikasiChart = new ApexCharts(ListAplikasiChartEl, ListAplikasiChartConfig);
                ListAplikasiChart.render();
            }


            // Donut Chart
  // --------------------------------------------------------------------

  var seriesData4 = @json($series4);
  var yearsData4 = @json($years4);
  const donutChartEl = document.querySelector('#donutChart'),
    donutChartConfig = {
      chart: {
        height: 390,
        fontFamily: 'Inter',
        type: 'donut'
      },
      labels: yearsData4,
      series: seriesData4,
      colors: [
        '#E0AED0',
        '#AC87C5',
        '#756AB6',
        '#FFE5E5',
        '#FF90BC',
        '#E1ACAC'
      ],
      stroke: {
        show: false,
        curve: 'straight'
      },
      dataLabels: {
        enabled: true,
        formatter: function (val, opt) {
          return parseInt(val, 10) + '%';
        }
      },
      tooltip: {
      enabled: true,
      y: {
        formatter: function(val, opts) {
          // Format tooltip menjadi "X K/L Kerjasama"
          return val + ' K/L Sudah Kerjasama';
        }
      }
    },
      legend: {
        show: true,
        position: 'bottom',
        markers: { offsetX: -3 },
        itemMargin: {
          vertical: 3,
          horizontal: 10
        },
        labels: {
          colors: legendColor,
          useSeriesColors: false
        }
      },
      plotOptions: {
        pie: {
          donut: {
            labels: {
              show: true,
              name: {
                fontSize: '2rem'
              },
              value: {
                fontSize: '1.5rem',
                color: legendColor,
                formatter: function (val) {
                  return parseInt(val, 10) + '%';
                }
              },
            //   total: {
            //     show: false,
            //     fontSize: '1.5rem',
            //     color: headingColor,
            //     label: 'Operational',
            //     formatter: function (w) {
            //       return '42%';
            //     }
            //   }
            // }
          }
        }
      },
      responsive: [
        {
          breakpoint: 992,
          options: {
            chart: {
              height: 380
            },
            legend: {
              position: 'bottom',
              labels: {
                colors: legendColor,
                useSeriesColors: false
              }
            }
          }
        },
        {
          breakpoint: 576,
          options: {
            chart: {
              height: 320
            },
            plotOptions: {
              pie: {
                donut: {
                  labels: {
                    show: true,
                    name: {
                      fontSize: '1.5rem'
                    },
                    value: {
                      fontSize: '1rem'
                    },
                    total: {
                      fontSize: '1.5rem'
                    }
                  }
                }
              }
            },
            legend: {
              position: 'bottom',
              labels: {
                colors: legendColor,
                useSeriesColors: false
              }
            }
          }
        },
        {
          breakpoint: 420,
          options: {
            chart: {
              height: 280
            },
            legend: {
              show: false
            }
          }
        },
        {
          breakpoint: 360,
          options: {
            chart: {
              height: 250
            },
            legend: {
              show: false
            }
          }
        }
      ]
    };
  if (typeof donutChartEl !== undefined && donutChartEl !== null) {
    const donutChart = new ApexCharts(donutChartEl, donutChartConfig);
    donutChart.render();
  }









        })();
    </script>
@endsection

@section('css')
    <link rel="stylesheet" href="../../assets/vendor/libs/apex-charts/apex-charts.css" />
@endsection
