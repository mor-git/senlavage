@extends('layouts.Layout')

@section('content')
<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid pt-30">
        <!-- Row -->
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="panel panel-default border-panel card-view">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h6 class="panel-title txt-dark">balance statistics</h6>
                        </div>
                        <div class="pull-right">
                            <span class="data-text weight-500 pr-5">All Time</span>
                            <span class="no-margin-switcher">
                                <input type="checkbox" checked id="morris_switch"  class="js-switch" data-color="#ff354d" data-secondary-color="#dedede" data-size="small"/>	
                            </span>	
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <ul class="flex-stat flex-stat-2 mt-20">
                                <li>
                                    <span class="block"><span class="initial">$ </span><span class="txt-dark weight-300 counter-anim data-rep">7,115,008</span></span>
                                    <span class="block">Bitcoin Price</span>
                                    
                                </li>
                                <li>
                                    <span class="block"><span class="initial">$ </span><span class="txt-dark weight-300 counter-anim data-rep">5,426.21</span></span>
                                    <span class="block">Since Last Month (USD)</span>
                                    
                                </li>
                                <li>
                                    <span class="block">
                                        <i class="zmdi zmdi-caret-up pr-10 font-24 txt-success"></i><span class="txt-dark weight-300 data-rep"><span class="counter-anim">89</span>%</span>
                                    </span>
                                    
                                    <span class="block">Since Last Month (%)</span>
                                    
                                </li>
                            </ul>
                            <div id="chart_1" class="morris-chart" style="height:330px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="panel panel-default border-panel card-view panel-refresh">
                    <div class="refresh-container">
                        <div class="la-anim-1"></div>
                    </div>
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h6 class="panel-title txt-dark">Currency Portfolio</h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="flex-stat flex-stat-3 text-center">
                                <span class="block"><span class="initial">$ </span><span class="txt-violet weight-300 counter-anim data-rep">2,458.34</span></span>
                                <span class="block">Total Wallet Balance</span>
                            </div>
                            <hr class="light-grey-hr row mt-10 mb-15"/>
                            <div class="label-chatrs">
                                <div class="">
                                    <div class="pull-left"><img class="pull-left" src="{{ asset('template/img/money/bitcoin.png') }}" alt="money"/><span class="pull-left weight-600 txt-dark font-16 capitalize-font pl-10">bitcoin</span></div>
                                    <span class="clabels-text font-12 inline-block txt-dark text-right capitalize-font pull-right"><span class="block font-15 weight-500 mb-5">45,532 BTC</span><span class="block txt-grey">$ 7,15,008</span></span>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <hr class="light-grey-hr row mt-10 mb-15"/>
                            <div class="label-chatrs">
                                <div class="">
                                    <div class="pull-left"><img class="pull-left" src="{{ asset('template/img/money/ethereum.png') }}" alt="money"/><span class="pull-left weight-600 txt-dark font-16 capitalize-font pl-10">ethereum</span></div>
                                    <span class="clabels-text font-12 inline-block txt-dark text-right capitalize-font pull-right"><span class="block font-15 weight-500 mb-5">15.24 ETH</span><span class="block txt-grey">$ 7,15,008</span></span>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <hr class="light-grey-hr row mt-10 mb-15"/>
                            <div class="label-chatrs">
                                <div class="">
                                    <div class="pull-left"><img class="pull-left" src="{{ asset('template/img/money/litecoin.png') }}" alt="money"/><span class="pull-left weight-600 txt-dark font-16 capitalize-font pl-10">litecoin</span></div>
                                    <span class="clabels-text font-12 inline-block txt-dark text-right capitalize-font pull-right"><span class="block font-15 weight-500 mb-5">3.432 LTC</span><span class="block txt-grey">$ 7,15,008</span></span>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <hr class="light-grey-hr row mt-10 mb-15"/>
                            <div class="label-chatrs">
                                <div class="">
                                    <div class="pull-left"><img class="pull-left" src="{{ asset('template/img/money/usd.png') }}" alt="money"/><span class="pull-left weight-600 txt-dark font-16 capitalize-font pl-10">US Dolars</span></div>
                                    <span class="clabels-text font-12 inline-block txt-dark text-right capitalize-font pull-right"><span class="block font-15 weight-500 mb-5">1.245 USD</span><span class="block txt-grey">$ 7,15,008</span></span>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>	
                    </div>
                </div>	
            </div>	
        </div>	
        <!-- Row -->
        
        <!-- Row -->
        <!-- <div class="row">
            <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
                <div class="panel panel-default card-view border-panel panel-refresh">
                    <div class="refresh-container">
                        <div class="la-anim-1"></div>
                    </div>
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h6 class="panel-title txt-dark">Recent Trading Activity</h6>
                        </div>
                        <div class="pull-right">
                            <a href="#" class="pull-left inline-block refresh mr-15">
                                <i class="zmdi zmdi-replay"></i>
                            </a>
                            <a href="#" class="pull-left inline-block full-screen mr-15">
                                <i class="zmdi zmdi-fullscreen"></i>
                            </a>
                            <div class="pull-left inline-block dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
                                    <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>option 1</a></li>
                                    <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>option 2</a></li>
                                    <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>option 3</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table class="table  table-striped mb-0">
                                        <thead>
                                            <tr>
                                            <th>Deal ID Number</th>
                                            <th>Trade Time</th>
                                            <th>Status</th>
                                            <th>Last Trade</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <td class="weight-600"><i class="fa fa-dot-circle-o pr-10 txt-success"></i>123456</td>
                                            <td>17:24 AM</td>
                                            <td><span class="label label-outline label-success">Complete</span> </td>
                                            <td><i class="fa fa-plus pr-10 txt-success"></i>0.00113 BTC</td>
                                            </tr>
                                            <tr>
                                            <td class="weight-600"><i class="fa fa-dot-circle-o pr-10 txt-success"></i>223456</td>
                                            <td>17:24 AM</td>
                                            <td><span class="label label-outline label-success">Complete</span> </td>
                                            <td><i class="fa fa-minus pr-10 txt-danger"></i>0.00113 BTC</td>
                                            </tr>
                                            <tr>
                                            <td class="weight-600"><i class="fa fa-dot-circle-o pr-10 txt-success"></i>323456</td>
                                            <td>17:24 AM</td>
                                            <td><span class="label label-outline label-success">Complete</span> </td>
                                            <td><i class="fa fa-plus pr-10 txt-success"></i>0. 	00113 BTC</td>
                                            </tr>
                                            <tr>
                                            <td class="weight-600"><i class="fa fa-dot-circle-o pr-10 txt-warning"></i>423456</td>
                                            <td>17:24 AM</td>
                                            <td><span class="label label-outline label-warning">pending</span> </td>
                                            <td><i class="fa fa-plus pr-10 txt-success"></i>0.00113 DASH</td>
                                            </tr>
                                            <tr>
                                            <td class="weight-600"><i class="fa fa-dot-circle-o pr-10 txt-danger"></i>523456</td>
                                            <td>17:24 AM</td>
                                            <td><span class="label label-outline label-danger">cancled</span> </td>
                                            <td><i class="fa fa-minus pr-10 txt-danger"></i>0.00113 BTC</td>
                                            </tr>
                                            <tr>
                                            <td class="weight-600"><i class="fa fa-dot-circle-o pr-10 txt-danger"></i>623456</td>
                                            <td>17:24 AM</td>
                                            <td><span class="label label-outline label-danger">cancled</span> </td>
                                            <td><i class="fa fa-minus pr-10 txt-danger"></i>0.00113 BTC</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
                <div class="panel card-view">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pa-0">
                            <div class="sm-data-box pt-10 pb-10">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-6 text-center data-wrap-left mt-40">
                                            <span class="block"><i class="zmdi zmdi-trending-up txt-success font-18 mr-5 mb-5 block"></i><span class="weight-500 uppercase-font">BTC Earnings</span></span>
                                            <span class="txt-dark block counter">$<span class="counter-anim">79.34</span>%</span>
                                        </div>
                                        <div class="col-xs-6 text-center data-wrap-right">
                                            <div id="sparkline_6" class="sparkline" style="width: 100%; overflow: hidden; margin: 0px auto;"></div>
                                        </div>
                                    </div>	
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel card-view">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pa-0">
                            <div class="sm-data-box pt-10 pb-10">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-6 text-center data-wrap-left">
                                            <div class="flot-container" style="height:155px">
                                                <div id="flot_line_chart_moving" class="demo-placeholder"></div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 text-center data-wrap-right mt-35">
                                            <span class="txt-dark block counter">$<span class="counter-anim">125.36</span></span>
                                            <span class="block"><span class="weight-500 uppercase-font">LTC Exchange Rates</span></span>
                                        </div>
                                    </div>	
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- /Row -->	
    </div>
</div>
<!-- /Main Content -->
@endsection