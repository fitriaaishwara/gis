@extends('admin.layouts.app')
@section('content')
@section('title', 'Dashboard')
<!-- Page Content -->
<div class="content">
    <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center py-2 text-center text-md-start">
        <div class="flex-grow-1 mb-1 mb-md-0">
            <h1 class="h3 fw-bold mb-2">
                Dashboard
            </h1>
            <h2 class="h6 fw-medium fw-medium text-muted mb-0">
                Selamat Datang <a class="fw-semibold" href="#">{{ auth()->user()->name }}</a>, saat ini kamu login sebagai
                @if (auth()->user()->role == 0)
                    Super Admin.
                @elseif (auth()->user()->role == 1)
                    Admin.
                @elseif (auth()->user()->role == 2)
                    Author.
                @endif
            </h2>
        </div>
    </div>
    <br>
    <!-- Overview -->
    <div class="row items-push">
        <div class="col-sm-6 col-xxl-3">
            <!-- Pending Orders -->
            <div class="block block-rounded d-flex flex-column h-100 mb-0">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="fs-3 fw-bold">{{ $pariwisata }}</dt>
                        <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Certificate Pariwisata</dd>
                    </dl>
                    <div class="item item-rounded-lg bg-body-light">
                        <i class="fa fa-plane-up fs-3 text-primary"></i>
                    </div>
                </div>
                {{-- <div class="bg-body-light rounded-bottom">
                    <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="{{ url('admin/certificates/lsup') }}">
                        <span>View all certificate</span>
                        <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                    </a>
                </div> --}}
            </div>
            <!-- END Pending Orders -->
        </div>
        <div class="col-sm-6 col-xxl-3">
            <!-- New Customers -->
            <div class="block block-rounded d-flex flex-column h-100 mb-0">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="fs-3 fw-bold">{{ $sni }}</dt>
                        <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Certificate SNI</dd>
                    </dl>
                    <div class="item item-rounded-lg bg-body-light">
                        <i class="fa fa-cubes fs-3 text-primary"></i>
                    </div>
                </div>
                {{-- <div class="bg-body-light rounded-bottom">
                    <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="{{ url('admin/certificates/lspro') }}">
                        <span>View all certificate</span>
                        <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                    </a>
                </div> --}}
            </div>
            <!-- END New Customers -->
        </div>
        <div class="col-sm-6 col-xxl-3">
            <!-- Messages -->
            <div class="block block-rounded d-flex flex-column h-100 mb-0">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="fs-3 fw-bold">{{ $management }}</dt>
                        <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Certificate Management</dd>
                    </dl>
                    <div class="item item-rounded-lg bg-body-light">
                        <i class="far fa-folder-open fs-3 text-primary"></i>
                    </div>
                </div>
                {{-- <div class="bg-body-light rounded-bottom">
                    <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="{{ url('admin/certificates/9001') }}">
                        <span>View all certificate</span>
                        <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                    </a>
                </div> --}}
            </div>
            <!-- END Messages -->
        </div>
        <div class="col-sm-6 col-xxl-3">
            <!-- Conversion Rate -->
            <div class="block block-rounded d-flex flex-column h-100 mb-0">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="fs-3 fw-bold">{{ $ispo }}</dt>
                        <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Certificate ISPO</dd>
                    </dl>
                    <div class="item item-rounded-lg bg-body-light">
                        <i class="fa fa-newspaper fs-3 text-primary"></i>
                    </div>
                </div>
                {{-- <div class="bg-body-light rounded-bottom">
                    <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="{{ url ('admin/certificate/ispo')}}">
                        <span>View all certificate</span>
                        <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                    </a>
                </div> --}}
            </div>
            <!-- END Conversion Rate-->
        </div>
    </div>

    {{-- <div class="row">
        <div class="col-xl-8 col-xxl-6 d-flex flex-column">
        <!-- Earnings Summary -->
            <div class="block block-rounded flex-grow-1 d-flex flex-column">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Article</h3>
                </div>
                <div class="block-content block-content-full flex-grow-1 d-flex align-items-center">
                    <!-- Earnings Chart Container -->
                    <!-- Chart.js Chart is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
                    <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                    <div id="chart-article"></div>
                </div>
            </div>
        </div>
        <!-- END Earnings Summary -->
        <div class="col-xl-8 col-xxl-6 d-flex flex-column">
            <!-- Earnings Summary -->
                <div class="block block-rounded flex-grow-1 d-flex flex-column">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Certificate</h3>
                    </div>
                    <div class="block-content block-content-full flex-grow-1 d-flex align-items-center">
                        <!-- Earnings Chart Container -->
                        <!-- Chart.js Chart is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
                        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                        <div id="chart-certificate"></div>
                    </div>
                </div>
            </div>
            <!-- END Earnings Summary -->
        </div>
    </div> --}}

    <!-- Statistics -->
    <div class="row">
        <div class="col-xl-8 col-xxl-6 d-flex flex-column">
            <!-- Earnings Summary -->
            <div class="block block-rounded flex-grow-1 d-flex flex-column">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Article</h3>
                </div>
                <div class="block-content block-content-full flex-grow-1 d-flex align-items-center">
                    <!-- Earnings Chart Container -->
                    <!-- Chart.js Chart is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
                    <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                    <div id="chart-article"></div>
                </div>
            </div>
            <!-- END Earnings Summary -->
        </div>
        <div class="col-xl-8 col-xxl-6 d-flex flex-column">
            <!-- Earnings Summary -->
            <div class="block block-rounded flex-grow-1 d-flex flex-column">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Certificate</h3>
                </div>
                <div class="block-content block-content-full flex-grow-1 d-flex align-items-center">
                    <!-- Earnings Chart Container -->
                    <!-- Chart.js Chart is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
                    <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                    <div id="chart-certificate"></div>
                </div>
            </div>
            <!-- END Earnings Summary -->
        </div>
    </div>

    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Recently Articles = {{ $articles }}</h3>
            <div class="block-options">
                <a type="button" class="btn btn-sm btn-dark" href="{{ url('admin/articles/')}}">
                    View All Article
                </a>
            </div>
        </div>
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <table  class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                    <thead>
                        <tr>
                            <th class="fs-xs text-center" style="width: 5%">No</th>
                            <th class="fs-xs text-center" style="width: 15%">Title</th>
                            <th class="fs-xs text-center" style="width: 10%">Category</th>
                            <th class="fs-xs text-center" style="width: 10%">Publisher</th>
                            <th class="fs-xs text-center" style="width: 10%">Date</th>
                            <th class="fs-xs text-center" style="width: 10%">Publish Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($art as $index => $article)
                        <tr>
                            <td class="fs-xs text-center">{{ ($index+1) }}</td>
                            <td class="fw-semibold fs-sm">{{ $article->title }}</a></td>
                            {{-- <td class="fs-sm">{{ $article->{{ $article->categories->name }}slug }}</em></td> --}}
                            <td class="fs-sm text-center">{{ $article->categories->name }}</td>
                            <td class="fs-sm text-center">{{ $article->user->name ?? 'Unknown' }}</td>
                            <td class="fs-sm text-center">
                                {{ date('d F Y', strtotime($article->date))}}
                            </td>
                            @if ($article->publish_status == 1)
                                <td class="text-center">
                                    <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Publish</span>
                                </td>
                            @else
                                <td class="text-center">
                                    <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Unpublish</span>
                                </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
@push('js')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    let article_january = {{ $article_january }};
    let article_february = {{ $article_february }};
    let article_march = {{ $article_march }};
    let article_april = {{ $article_april }};
    let article_may = {{ $article_may }};
    let article_june = {{ $article_june }};
    let article_july = {{ $article_july }};
    let article_august = {{ $article_august }};
    let article_september = {{ $article_september }};
    let article_october = {{ $article_october }};
    let article_november = {{ $article_november }};
    let article_december = {{ $article_december }};

    let pasarRakyat_january = {{ $pasarRakyat_january }};
    let pasarRakyat_february = {{ $pasarRakyat_february }};
    let pasarRakyat_march = {{ $pasarRakyat_march }};
    let pasarRakyat_april = {{ $pasarRakyat_april }};
    let pasarRakyat_may = {{ $pasarRakyat_may }};
    let pasarRakyat_june = {{ $pasarRakyat_june }};
    let pasarRakyat_july = {{ $pasarRakyat_july }};
    let pasarRakyat_august = {{ $pasarRakyat_august }};
    let pasarRakyat_september = {{ $pasarRakyat_september }};
    let pasarRakyat_october = {{ $pasarRakyat_october }};
    let pasarRakyat_november = {{ $pasarRakyat_november }};
    let pasarRakyat_december = {{ $pasarRakyat_december }};

    let ispo_january = {{ $ispo_january }};
    let ispo_february = {{ $ispo_february }};
    let ispo_march = {{ $ispo_march }};
    let ispo_april = {{ $ispo_april }};
    let ispo_may = {{ $ispo_may }};
    let ispo_june = {{ $ispo_june }};
    let ispo_july = {{ $ispo_july }};
    let ispo_august = {{ $ispo_august }};
    let ispo_september = {{ $ispo_september }};
    let ispo_october = {{ $ispo_october }};
    let ispo_november = {{ $ispo_november }};
    let ispo_december = {{ $ispo_december }};

    let chse_january = {{ $chse_january }};
    let chse_february = {{ $chse_february }};
    let chse_march = {{ $chse_march }};
    let chse_april = {{ $chse_april }};
    let chse_may = {{ $chse_may }};
    let chse_june = {{ $chse_june }};
    let chse_july = {{ $chse_july }};
    let chse_august = {{ $chse_august }};
    let chse_september = {{ $chse_september }};
    let chse_october = {{ $chse_october }};
    let chse_november = {{ $chse_november }};
    let chse_december = {{ $chse_december }};

    let lsup_january = {{ $lsup_january }};
    let lsup_february = {{ $lsup_february }};
    let lsup_march = {{ $lsup_march }};
    let lsup_april = {{ $lsup_april }};
    let lsup_may = {{ $lsup_may }};
    let lsup_june = {{ $lsup_june }};
    let lsup_july = {{ $lsup_july }};
    let lsup_august = {{ $lsup_august }};
    let lsup_september = {{ $lsup_september }};
    let lsup_october = {{ $lsup_october }};
    let lsup_november = {{ $lsup_november }};
    let lsup_december = {{ $lsup_december }};

    let lspro_january = {{ $lspro_january }};
    let lspro_february = {{ $lspro_february }};
    let lspro_march = {{ $lspro_march }};
    let lspro_april = {{ $lspro_april }};
    let lspro_may = {{ $lspro_may }};
    let lspro_june = {{ $lspro_june }};
    let lspro_july = {{ $lspro_july }};
    let lspro_august = {{ $lspro_august }};
    let lspro_september = {{ $lspro_september }};
    let lspro_october = {{ $lspro_october }};
    let lspro_november = {{ $lspro_november }};
    let lspro_december = {{ $lspro_december }};

    let iso9001_january = {{ $iso9001_january }};
    let iso9001_february = {{ $iso9001_february }};
    let iso9001_march = {{ $iso9001_march }};
    let iso9001_april = {{ $iso9001_april }};
    let iso9001_may = {{ $iso9001_may }};
    let iso9001_june = {{ $iso9001_june }};
    let iso9001_july = {{ $iso9001_july }};
    let iso9001_august = {{ $iso9001_august }};
    let iso9001_september = {{ $iso9001_september }};
    let iso9001_october = {{ $iso9001_october }};
    let iso9001_november = {{ $iso9001_november }};
    let iso9001_december = {{ $iso9001_december }};

    let iso37001_january = {{ $iso37001_january }};
    let iso37001_february = {{ $iso37001_february }};
    let iso37001_march = {{ $iso37001_march }};
    let iso37001_april = {{ $iso37001_april }};
    let iso37001_may = {{ $iso37001_may }};
    let iso37001_june = {{ $iso37001_june }};
    let iso37001_july = {{ $iso37001_july }};
    let iso37001_august = {{ $iso37001_august }};
    let iso37001_september = {{ $iso37001_september }};
    let iso37001_october = {{ $iso37001_october }};
    let iso37001_november = {{ $iso37001_november }};
    let iso37001_december = {{ $iso37001_december }};

    let iso45001_january = {{ $iso45001_january }};
    let iso45001_february = {{ $iso45001_february }};
    let iso45001_march = {{ $iso45001_march }};
    let iso45001_april = {{ $iso45001_april }};
    let iso45001_may = {{ $iso45001_may }};
    let iso45001_june = {{ $iso45001_june }};
    let iso45001_july = {{ $iso45001_july }};
    let iso45001_august = {{ $iso45001_august }};
    let iso45001_september = {{ $iso45001_september }};
    let iso45001_october = {{ $iso45001_october }};
    let iso45001_november = {{ $iso45001_november }};
    let iso45001_december = {{ $iso45001_december }};

</script>

<script>

    Highcharts.chart('chart-article', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Articles Summary / Month'
        },
        // subtitle: {
        //     text: 'Source: WorldClimate.com'
        // },
        xAxis: {
            categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
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
            name: 'Article',
            data: [article_january, article_february, article_march, article_april, article_may, article_june, article_july, article_august, article_september, article_october, article_november, article_december]

        }]
    });
</script>

<script>
    Highcharts.chart('chart-certificate', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Certificates Summary / Month'
    },
    xAxis: {
        categories:  ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
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
        name: 'Lsup',
        data: [lsup_january, lsup_february, lsup_march, lsup_april, lsup_may, lsup_june, lsup_july, lsup_august, lsup_september, lsup_october, lsup_november, lsup_december]

    }, {
        name: 'Lspro',
        data: [lspro_january, lspro_february, lspro_march, lspro_april, lspro_may, lspro_june, lspro_july, lspro_august, lspro_september, lspro_october, lspro_november, lspro_december]

    }, {
        name: 'Iso 9001',
        data: [iso9001_january, iso9001_february, iso9001_march, iso9001_april, iso9001_may, iso9001_june, iso9001_july, iso9001_august, iso9001_september, iso9001_october, iso9001_november, iso9001_december]

    }, {
        name: 'Iso 45001',
        data: [iso45001_january, iso45001_february, iso45001_march, iso45001_april, iso45001_may, iso45001_june, iso45001_july, iso45001_august, iso45001_september, iso45001_october, iso45001_november, iso45001_december]
    }, {
        name: 'Iso 37001',
        data: [iso37001_january, iso37001_february, iso37001_march, iso37001_april, iso37001_may, iso37001_june, iso37001_july, iso37001_august, iso37001_september, iso37001_october, iso37001_november, iso37001_december]
    },{
        name: 'Ispo',
        data: [ispo_january, ispo_february, ispo_march, ispo_april, ispo_may, ispo_june, ispo_july, ispo_august, ispo_september, ispo_october, ispo_november, ispo_december]
    }, {
        name: 'Chse',
        data: [chse_january, chse_february, chse_march, chse_april, chse_may, chse_june, chse_july, chse_august, chse_september, chse_october, chse_november, chse_december]
    }, {
        name: 'Pasar Rakyat',
        data: [pasarRakyat_january, pasarRakyat_february, pasarRakyat_march, pasarRakyat_april, pasarRakyat_may, pasarRakyat_june, pasarRakyat_july, pasarRakyat_august, pasarRakyat_september, pasarRakyat_october, pasarRakyat_november, pasarRakyat_december]
    }]
});
</script>


@endpush

