@extends('layouts.base')

@section('page-title', 'Financial Results :: Marathon Digital Holdings (MARA)')

@section('page-class', 'pg-107623 page-type-balance-sheet pg-financial-information-balance-sheet ir has-sub-nav fl-builder-breakpoint-large')

@section('page-content')

    <div class="general-wrapper">

        @include('pages.includes.header')

        <div class="eq-container">
            <header class="page-banner overlay" style="background: url({{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/pagebanner-default.jpg') }});background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;background-color: #333;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h1>Balance Sheet</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                        </div>
                    </div>
                </div>
            </header>

            @include('pages.includes.nav')

            <div class="container">
                <div class="row">

                    <div class="col-md-8 col-md-offset-2 clearfix">
                        <aside id="tertiaryNav">
                            <nav id="tertiary-navigation" class="visible-sm visible-xs">
                                <ul>
                                    <li class="sidebar-title">
                                        <h3>Financial Info</h3>
                                    </li>
                                    <li class="">
                                        <a href="/financial-information" target="_self">Overview</a>

                                    </li>
                                    <li class="">
                                        <a href="/financial-information/financial-results" target="_self">Financial Results</a>

                                    </li>
                                    <li class="">
                                        <a href="/financial-information/income-statement" target="_self">Income Statement</a>

                                    </li>
                                    <li class="active active-landing">
                                        <a href="/financial-information/balance-sheet" target="_self">Balance Sheet</a>

                                    </li>
                                    <li class="">
                                        <a href="/financial-information/cash-flow" target="_self">Cash Flow</a>

                                    </li>
                                </ul>
                            </nav>
                        </aside>
                        <main id="mainContent" class="main-content has-tertiary-nav">
                            <div class="financials-pg">

                                <link href="{{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/css/sass/templates/aside/ir/xbrl.css') }}" rel="stylesheet" type="text/css">

                                <script src="{{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/js/aside/ir/xbrl.js') }}" type="text/javascript"></script>

                                <div id="xbrl-financials1" class="financials">
                                    <div id="balance-sheet">


                                        <title></title>


                                        <span style="display: none;">v3.22.2.2</span>
                                        <table class="report" border="0" cellspacing="2" id="idm140104049441152">
                                            <tbody>
                                            <tr>
                                                <th class="tl" colspan="1" rowspan="1">
                                                    <div style="width: 200px;">
                                                        <strong>Consolidated Condensed Balance Sheets - USD ($)<br></strong>
                                                    </div>
                                                </th>
                                                <th class="th">
                                                    <div>Sep. 30, 2022</div>
                                                </th>
                                                <th class="th">
                                                    <div>Dec. 31, 2021</div>
                                                </th>
                                            </tr>
                                            <tr class="re">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_AssetsCurrentAbstract', window );"><strong>Current assets:</strong></a>
                                                </td>
                                                <td class="text">&nbsp;<span></span>
                                                </td>
                                                <td class="text">&nbsp;<span></span>
                                                </td>
                                            </tr>
                                            <tr class="ro">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_CashAndCashEquivalentsAtCarryingValue', window );">Cash and cash equivalents</a>
                                                </td>
                                                <td class="nump">$ 55,339,400<span></span>
                                                </td>
                                                <td class="nump">$ 268,555,837<span></span>
                                                </td>
                                            </tr>
                                            <tr class="re">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_RestrictedCash', window );">Restricted cash</a>
                                                </td>
                                                <td class="nump">8,800,000<span></span>
                                                </td>
                                                <td class="text"><span></span>
                                                </td>
                                            </tr>
                                            <tr class="ro">
                                                <td class="pl custom" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_MARA_DigitalCurrencies', window );">Digital currencies</a>
                                                </td>
                                                <td class="nump">126,418,098<span></span>
                                                </td>
                                                <td class="nump">102,805,980<span></span>
                                                </td>
                                            </tr>
                                            <tr class="re">
                                                <td class="pl custom" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_MARA_DigitalCurrenciesLoaned', window );">Digital currencies loaned</a>
                                                </td>
                                                <td class="text"><span></span>
                                                </td>
                                                <td class="nump">20,437,284<span></span>
                                                </td>
                                            </tr>
                                            <tr class="ro">
                                                <td class="pl custom" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_MARA_DigitalCurrenciesHeldInFund', window );">Digital currencies held in fund</a>
                                                </td>
                                                <td class="text"><span></span>
                                                </td>
                                                <td class="nump">223,915,761<span></span>
                                                </td>
                                            </tr>
                                            <tr class="re">
                                                <td class="pl custom" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_MARA_ReceivableFromSaleOfEquipment', window );">Receivable from sale of equipment</a>
                                                </td>
                                                <td class="nump">1,000,000<span></span>
                                                </td>
                                                <td class="text"><span></span>
                                                </td>
                                            </tr>
                                            <tr class="ro">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_DepositsAssetsCurrent', window );">Deposits</a>
                                                </td>
                                                <td class="nump">22,533,569<span></span>
                                                </td>
                                                <td class="nump">34,458,347<span></span>
                                                </td>
                                            </tr>
                                            <tr class="re">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_AccountsNotesAndLoansReceivableNetCurrent', window );">Loan receivable</a>
                                                </td>
                                                <td class="text"><span></span>
                                                </td>
                                                <td class="nump">30,000,000<span></span>
                                                </td>
                                            </tr>
                                            <tr class="ro">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_PrepaidExpenseAndOtherAssetsCurrent', window );">Prepaid expenses and other current assets</a>
                                                </td>
                                                <td class="nump">26,015,943<span></span>
                                                </td>
                                                <td class="nump">8,148,116<span></span>
                                                </td>
                                            </tr>
                                            <tr class="reu">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_AssetsCurrent', window );">Total current assets</a>
                                                </td>
                                                <td class="nump">240,107,010<span></span>
                                                </td>
                                                <td class="nump">688,321,325<span></span>
                                                </td>
                                            </tr>
                                            <tr class="ro">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_AssetsNoncurrentAbstract', window );"><strong>Other assets:</strong></a>
                                                </td>
                                                <td class="text">&nbsp;<span></span>
                                                </td>
                                                <td class="text">&nbsp;<span></span>
                                                </td>
                                            </tr>
                                            <tr class="re">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_PropertyPlantAndEquipmentNet', window );">Property and equipment (net of accumulated depreciation of $26,809,659 and $21,311,461, respectively)</a>
                                                </td>
                                                <td class="nump">403,522,538<span></span>
                                                </td>
                                                <td class="nump">276,242,794<span></span>
                                                </td>
                                            </tr>
                                            <tr class="ro">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_AdvancesToAffiliate', window );">Advances to vendors</a>
                                                </td>
                                                <td class="nump">687,777,200<span></span>
                                                </td>
                                                <td class="nump">466,254,623<span></span>
                                                </td>
                                            </tr>
                                            <tr class="re">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_Investments', window );">Investments</a>
                                                </td>
                                                <td class="nump">36,999,994<span></span>
                                                </td>
                                                <td class="nump">3,000,000<span></span>
                                                </td>
                                            </tr>
                                            <tr class="ro">
                                                <td class="pl custom" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_MARA_DigitalCurrenciesRestricted', window );">Digital currencies, restricted</a>
                                                </td>
                                                <td class="nump">70,743,342<span></span>
                                                </td>
                                                <td class="text"><span></span>
                                                </td>
                                            </tr>
                                            <tr class="re">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_DepositAssets', window );">Long term deposits</a>
                                                </td>
                                                <td class="nump">26,554,033<span></span>
                                                </td>
                                                <td class="text"><span></span>
                                                </td>
                                            </tr>
                                            <tr class="ro">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_PrepaidExpenseNoncurrent', window );">Long term prepaids</a>
                                                </td>
                                                <td class="nump">8,703,542<span></span>
                                                </td>
                                                <td class="nump">13,665,589<span></span>
                                                </td>
                                            </tr>
                                            <tr class="re">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_OperatingLeaseRightOfUseAsset', window );">Right-of-use assets</a>
                                                </td>
                                                <td class="nump">1,369,774<span></span>
                                                </td>
                                                <td class="text"><span></span>
                                                </td>
                                            </tr>
                                            <tr class="ro">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_FiniteLivedIntangibleAssetsNet', window );">Intangible assets (net of accumulated amortization of $280,497 at December 31, 2021)</a>
                                                </td>
                                                <td class="text"><span></span>
                                                </td>
                                                <td class="nump">931,226<span></span>
                                                </td>
                                            </tr>
                                            <tr class="reu">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_AssetsNoncurrent', window );">Total other assets</a>
                                                </td>
                                                <td class="nump">1,235,670,423<span></span>
                                                </td>
                                                <td class="nump">760,094,232<span></span>
                                                </td>
                                            </tr>
                                            <tr class="rou">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_Assets', window );">TOTAL ASSETS</a>
                                                </td>
                                                <td class="nump">1,475,777,433<span></span>
                                                </td>
                                                <td class="nump">1,448,415,557<span></span>
                                                </td>
                                            </tr>
                                            <tr class="re">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_LiabilitiesCurrentAbstract', window );"><strong>Current liabilities:</strong></a>
                                                </td>
                                                <td class="text">&nbsp;<span></span>
                                                </td>
                                                <td class="text">&nbsp;<span></span>
                                                </td>
                                            </tr>
                                            <tr class="ro">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_AccountsPayableCurrent', window );">Accounts payable</a>
                                                </td>
                                                <td class="nump">19,051,369<span></span>
                                                </td>
                                                <td class="nump">10,867,403<span></span>
                                                </td>
                                            </tr>
                                            <tr class="re">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_AccruedLiabilitiesCurrent', window );">Accrued expenses</a>
                                                </td>
                                                <td class="nump">2,140,544<span></span>
                                                </td>
                                                <td class="nump">2,230,870<span></span>
                                                </td>
                                            </tr>
                                            <tr class="ro">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_LitigationReserveCurrent', window );">Legal reserve payable</a>
                                                </td>
                                                <td class="nump">21,199,549<span></span>
                                                </td>
                                                <td class="text"><span></span>
                                                </td>
                                            </tr>
                                            <tr class="re">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_OperatingLeaseLiabilityCurrent', window );">Operating lease liabilities</a>
                                                </td>
                                                <td class="nump">306,444<span></span>
                                                </td>
                                                <td class="text"><span></span>
                                                </td>
                                            </tr>
                                            <tr class="ro">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_InterestPayableCurrent', window );">Current portion of accrued bond interest</a>
                                                </td>
                                                <td class="nump">2,843,611<span></span>
                                                </td>
                                                <td class="nump">867,260<span></span>
                                                </td>
                                            </tr>
                                            <tr class="reu">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_LiabilitiesCurrent', window );">Total current liabilities</a>
                                                </td>
                                                <td class="nump">45,541,517<span></span>
                                                </td>
                                                <td class="nump">13,965,533<span></span>
                                                </td>
                                            </tr>
                                            <tr class="ro">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_LiabilitiesNoncurrentAbstract', window );"><strong>Long-term liabilities</strong></a>
                                                </td>
                                                <td class="text">&nbsp;<span></span>
                                                </td>
                                                <td class="text">&nbsp;<span></span>
                                                </td>
                                            </tr>
                                            <tr class="re">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_ConvertibleLongTermNotesPayable', window );">Convertible notes</a>
                                                </td>
                                                <td class="nump">731,318,578<span></span>
                                                </td>
                                                <td class="nump">728,405,922<span></span>
                                                </td>
                                            </tr>
                                            <tr class="ro">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_LongTermLoansPayable', window );">Term loan</a>
                                                </td>
                                                <td class="nump">49,863,008<span></span>
                                                </td>
                                                <td class="text"><span></span>
                                                </td>
                                            </tr>
                                            <tr class="re">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_OperatingLeaseLiabilityNoncurrent', window );">Operating lease liabilities</a>
                                                </td>
                                                <td class="nump">1,131,810<span></span>
                                                </td>
                                                <td class="text"><span></span>
                                                </td>
                                            </tr>
                                            <tr class="ro">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_DeferredIncomeTaxLiabilitiesNet', window );">Deferred tax liabilities</a>
                                                </td>
                                                <td class="nump">22,820,558<span></span>
                                                </td>
                                                <td class="nump">23,020,721<span></span>
                                                </td>
                                            </tr>
                                            <tr class="reu">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_LiabilitiesNoncurrent', window );">Total long-term liabilities</a>
                                                </td>
                                                <td class="nump">805,133,954<span></span>
                                                </td>
                                                <td class="nump">751,426,643<span></span>
                                                </td>
                                            </tr>
                                            <tr class="ro">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_CommitmentsAndContingencies', window );">Commitments and Contingencies</a>
                                                </td>
                                                <td class="text"><span></span>
                                                </td>
                                                <td class="text"><span></span>
                                                </td>
                                            </tr>
                                            <tr class="re">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_StockholdersEquityAbstract', window );"><strong>Stockholders’ Equity:</strong></a>
                                                </td>
                                                <td class="text">&nbsp;<span></span>
                                                </td>
                                                <td class="text">&nbsp;<span></span>
                                                </td>
                                            </tr>
                                            <tr class="ro">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_PreferredStockValue', window );">Preferred stock, 0.0001 par value, 50,000,000 shares authorized, no shares issued and outstanding at September 30, 2022 and December 31, 2021, respectively</a>
                                                </td>
                                                <td class="text"><span></span>
                                                </td>
                                                <td class="text"><span></span>
                                                </td>
                                            </tr>
                                            <tr class="re">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_CommonStockValue', window );">Common stock, 0.0001 par value; 200,000,000 shares authorized; 116,810,405 and 102,733,273 issued and outstanding at September 30, 2022 and December 31, 2021, respectively</a>
                                                </td>
                                                <td class="nump">11,681<span></span>
                                                </td>
                                                <td class="nump">10,273<span></span>
                                                </td>
                                            </tr>
                                            <tr class="ro">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_AdditionalPaidInCapital', window );">Additional paid-in capital</a>
                                                </td>
                                                <td class="nump">1,057,798,421<span></span>
                                                </td>
                                                <td class="nump">835,693,610<span></span>
                                                </td>
                                            </tr>
                                            <tr class="re">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_AccumulatedOtherComprehensiveIncomeLossNetOfTax', window );">Accumulated other comprehensive loss</a>
                                                </td>
                                                <td class="num">(450,719)<span></span>
                                                </td>
                                                <td class="num">(450,719)<span></span>
                                                </td>
                                            </tr>
                                            <tr class="ro">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_RetainedEarningsAccumulatedDeficit', window );">Accumulated deficit</a>
                                                </td>
                                                <td class="num">(432,257,421)<span></span>
                                                </td>
                                                <td class="num">(152,229,783)<span></span>
                                                </td>
                                            </tr>
                                            <tr class="reu">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_StockholdersEquity', window );">Total stockholders’ equity</a>
                                                </td>
                                                <td class="nump">625,101,962<span></span>
                                                </td>
                                                <td class="nump">683,023,381<span></span>
                                                </td>
                                            </tr>
                                            <tr class="rou">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_LiabilitiesAndStockholdersEquity', window );">TOTAL LIABILITIES AND STOCKHOLDERS’ EQUITY</a>
                                                </td>
                                                <td class="nump">$ 1,475,777,433<span></span>
                                                </td>
                                                <td class="nump">$ 1,448,415,557<span></span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <div style="display: none;">
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_MARA_DigitalCurrencies">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div><p>Digital currencies.</p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;"><p>No definition available.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">MARA_DigitalCurrencies</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>MARA_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>debit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_MARA_DigitalCurrenciesHeldInFund">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div><p>Digital currencies held in fund.</p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;"><p>No definition available.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">MARA_DigitalCurrenciesHeldInFund</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>MARA_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>debit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_MARA_DigitalCurrenciesLoaned">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div><p>Digital currencies loaned.</p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;"><p>No definition available.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">MARA_DigitalCurrenciesLoaned</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>MARA_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>debit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_MARA_DigitalCurrenciesRestricted">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div><p>Digital currencies, restricted.</p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;"><p>No definition available.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">MARA_DigitalCurrenciesRestricted</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>MARA_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>debit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_MARA_ReceivableFromSaleOfEquipment">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div><p>Receivable from sale of equipment.</p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;"><p>No definition available.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">MARA_ReceivableFromSaleOfEquipment</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>MARA_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>debit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_AccountsNotesAndLoansReceivableNetCurrent">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div>
                                                                <p>Amount, after allowance for credit loss, of accounts and financing receivables, classified as current. Includes, but is not limited to, notes and loan receivable.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 944<br> -SubTopic 210<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.7-03(5))<br> -URI https://asc.fasb.org/extlink&amp;oid=126734703&amp;loc=d3e572229-122910<br><br>Reference 2: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 310<br> -SubTopic 10<br> -Section 45<br> -Paragraph 2<br> -URI https://asc.fasb.org/extlink&amp;oid=124259787&amp;loc=d3e4428-111522<br><br>Reference 3: http://www.xbrl.org/2003/role/exampleRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 310<br> -SubTopic 10<br> -Section 45<br> -Paragraph 9<br> -URI https://asc.fasb.org/extlink&amp;oid=124259787&amp;loc=d3e4531-111522<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_AccountsNotesAndLoansReceivableNetCurrent</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>debit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_AccountsPayableCurrent">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div>
                                                                <p>Carrying value as of the balance sheet date of liabilities incurred (and for which invoices have typically been received) and payable to vendors for goods and services received that are used in an entity's business. Used to reflect the current portion of the liabilities (due within one year or within the normal operating cycle if longer).</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 210<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.5-02.19(a))<br> -URI https://asc.fasb.org/extlink&amp;oid=120391452&amp;loc=d3e13212-122682<br><br>Reference 2: http://www.xbrl.org/2003/role/exampleRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 852<br> -SubTopic 10<br> -Section 55<br> -Paragraph 10<br> -URI https://asc.fasb.org/extlink&amp;oid=84165509&amp;loc=d3e56426-112766<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_AccountsPayableCurrent</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>credit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_AccruedLiabilitiesCurrent">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div>
                                                                <p>Carrying value as of the balance sheet date of obligations incurred and payable, pertaining to costs that are statutory in nature, are incurred on contractual obligations, or accumulate over time and for which invoices have not yet been received or will not be rendered. Examples include taxes, interest, rent and utilities. Used to reflect the current portion of the liabilities (due within one year or within the normal operating cycle if longer).</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 210<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.5-02.20)<br> -URI https://asc.fasb.org/extlink&amp;oid=120391452&amp;loc=d3e13212-122682<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_AccruedLiabilitiesCurrent</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>credit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_AccumulatedOtherComprehensiveIncomeLossNetOfTax">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div>
                                                                <p>Accumulated change in equity from transactions and other events and circumstances from non-owner sources, net of tax effect, at period end. Excludes Net Income (Loss), and accumulated changes in equity from transactions resulting from investments by owners and distributions to owners. Includes foreign currency translation items, certain pension adjustments, unrealized gains and losses on certain investments in debt and equity securities, other than temporary impairment (OTTI) losses related to factors other than credit losses on available-for-sale and held-to-maturity debt securities that an entity does not intend to sell and it is not more likely than not that the entity will be required to sell before recovery of the amortized cost basis, as well as changes in the fair value of derivatives related to the effective portion of a designated cash flow hedge.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 210<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.5-02(30)(a)(4))<br> -URI https://asc.fasb.org/extlink&amp;oid=120391452&amp;loc=d3e13212-122682<br><br>Reference 2: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 220<br> -SubTopic 10<br> -Section 45<br> -Paragraph 11<br> -URI https://asc.fasb.org/extlink&amp;oid=126968391&amp;loc=d3e637-108580<br><br>Reference 3: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 944<br> -SubTopic 210<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.7-03(a)(23)(a)(3))<br> -URI https://asc.fasb.org/extlink&amp;oid=126734703&amp;loc=d3e572229-122910<br><br>Reference 4: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 220<br> -SubTopic 10<br> -Section 45<br> -Paragraph 14A<br> -URI https://asc.fasb.org/extlink&amp;oid=126968391&amp;loc=SL7669686-108580<br><br>Reference 5: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 944<br> -SubTopic 40<br> -Section 65<br> -Paragraph 2<br> -Subparagraph (h)(2)<br> -URI https://asc.fasb.org/extlink&amp;oid=124501264&amp;loc=SL117420844-207641<br><br>Reference 6: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 944<br> -SubTopic 40<br> -Section 65<br> -Paragraph 2<br> -Subparagraph (g)(2)(ii)<br> -URI https://asc.fasb.org/extlink&amp;oid=124501264&amp;loc=SL117420844-207641<br><br>Reference 7: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 220<br> -SubTopic 10<br> -Section 45<br> -Paragraph 14<br> -URI https://asc.fasb.org/extlink&amp;oid=126968391&amp;loc=d3e681-108580<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_AccumulatedOtherComprehensiveIncomeLossNetOfTax</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>credit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_AdditionalPaidInCapital">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div>
                                                                <p>Amount of excess of issue price over par or stated value of stock and from other transaction involving stock or stockholder. Includes, but is not limited to, additional paid-in capital (APIC) for common and preferred stock.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://www.xbrl.org/2003/role/exampleRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 852<br> -SubTopic 10<br> -Section 55<br> -Paragraph 10<br> -URI https://asc.fasb.org/extlink&amp;oid=84165509&amp;loc=d3e56426-112766<br><br>Reference 2: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 210<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.5-02(30)(a)(1))<br> -URI https://asc.fasb.org/extlink&amp;oid=120391452&amp;loc=d3e13212-122682<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_AdditionalPaidInCapital</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>credit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_AdvancesToAffiliate">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div>
                                                                <p>Long-Term advances receivable from a party that is affiliated with the reporting entity by means of direct or indirect ownership. This does not include advances to clients.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 946<br> -SubTopic 210<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.6-04.2)<br> -URI https://asc.fasb.org/extlink&amp;oid=120401414&amp;loc=d3e603758-122996<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_AdvancesToAffiliate</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>debit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_Assets">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div>
                                                                <p>Sum of the carrying amounts as of the balance sheet date of all assets that are recognized. Assets are probable future economic benefits obtained or controlled by an entity as a result of past transactions or events.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 942<br> -SubTopic 210<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.9-03(11))<br> -URI https://asc.fasb.org/extlink&amp;oid=126897435&amp;loc=d3e534808-122878<br><br>Reference 2: http://www.xbrl.org/2003/role/exampleRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 852<br> -SubTopic 10<br> -Section 55<br> -Paragraph 10<br> -URI https://asc.fasb.org/extlink&amp;oid=84165509&amp;loc=d3e56426-112766<br><br>Reference 3: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1B<br> -Subparagraph (SX 210.13-02(a)(4)(iii)(A))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442552-122756<br><br>Reference 4: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 280<br> -SubTopic 10<br> -Section 50<br> -Paragraph 22<br> -URI https://asc.fasb.org/extlink&amp;oid=126901519&amp;loc=d3e8736-108599<br><br>Reference 5: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1A<br> -Subparagraph (SX 210.13-01(a)(4)(iv))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442526-122756<br><br>Reference 6: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 944<br> -SubTopic 210<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.7-03(a)(12))<br> -URI https://asc.fasb.org/extlink&amp;oid=126734703&amp;loc=d3e572229-122910<br><br>Reference 7: http://www.xbrl.org/2009/role/commonPracticeRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 852<br> -SubTopic 10<br> -Section 50<br> -Paragraph 7<br> -Subparagraph (a)<br> -URI https://asc.fasb.org/extlink&amp;oid=124433192&amp;loc=SL2890621-112765<br><br>Reference 8: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1B<br> -Subparagraph (SX 210.13-02(a)(4)(i))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442552-122756<br><br>Reference 9: http://www.xbrl.org/2009/role/commonPracticeRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1A<br> -Subparagraph (SX 210.13-01(a)(4)(ii))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442526-122756<br><br>Reference 10: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1A<br> -Subparagraph (SX 210.13-01(a)(5))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442526-122756<br><br>Reference 11: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1A<br> -Subparagraph (SX 210.13-01(a)(4)(iii)(A))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442526-122756<br><br>Reference 12: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1A<br> -Subparagraph (SX 210.13-01(a)(4)(i))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442526-122756<br><br>Reference 13: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 235<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.4-08(g)(1)(ii))<br> -URI https://asc.fasb.org/extlink&amp;oid=120395691&amp;loc=d3e23780-122690<br><br>Reference 14: http://www.xbrl.org/2009/role/commonPracticeRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1A<br> -Subparagraph (SX 210.13-01(a)(4)(iii))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442526-122756<br><br>Reference 15: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 825<br> -SubTopic 10<br> -Section 50<br> -Paragraph 28<br> -Subparagraph (f)<br> -URI https://asc.fasb.org/extlink&amp;oid=123596393&amp;loc=d3e14064-108612<br><br>Reference 16: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1B<br> -Subparagraph (SX 210.13-02(a)(4)(iii)(B))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442552-122756<br><br>Reference 17: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 810<br> -SubTopic 10<br> -Section 50<br> -Paragraph 3<br> -Subparagraph (bb)<br> -URI https://asc.fasb.org/extlink&amp;oid=123419778&amp;loc=d3e5710-111685<br><br>Reference 18: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1B<br> -Subparagraph (SX 210.13-02(a)(5))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442552-122756<br><br>Reference 19: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 280<br> -SubTopic 10<br> -Section 50<br> -Paragraph 32<br> -Subparagraph (d)<br> -URI https://asc.fasb.org/extlink&amp;oid=126901519&amp;loc=d3e8933-108599<br><br>Reference 20: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 810<br> -SubTopic 10<br> -Section 45<br> -Paragraph 25<br> -Subparagraph (a)<br> -URI https://asc.fasb.org/extlink&amp;oid=116870748&amp;loc=SL6758485-165988<br><br>Reference 21: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1B<br> -Subparagraph (SX 210.13-02(a)(4)(iv))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442552-122756<br><br>Reference 22: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 210<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.5-02(18))<br> -URI https://asc.fasb.org/extlink&amp;oid=120391452&amp;loc=d3e13212-122682<br><br>Reference 23: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 323<br> -SubTopic 10<br> -Section 50<br> -Paragraph 3<br> -Subparagraph (c)<br> -URI https://asc.fasb.org/extlink&amp;oid=114001798&amp;loc=d3e33918-111571<br><br>Reference 24: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 280<br> -SubTopic 10<br> -Section 50<br> -Paragraph 30<br> -Subparagraph (c)<br> -URI https://asc.fasb.org/extlink&amp;oid=126901519&amp;loc=d3e8906-108599<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_Assets</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>debit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_AssetsCurrent">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div>
                                                                <p>Sum of the carrying amounts as of the balance sheet date of all assets that are expected to be realized in cash, sold, or consumed within one year (or the normal operating cycle, if longer). Assets are probable future economic benefits obtained or controlled by an entity as a result of past transactions or events.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 210<br> -SubTopic 10<br> -Section 45<br> -Paragraph 1<br> -URI https://asc.fasb.org/extlink&amp;oid=124098289&amp;loc=d3e6676-107765<br><br>Reference 2: http://www.xbrl.org/2003/role/exampleRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 852<br> -SubTopic 10<br> -Section 55<br> -Paragraph 10<br> -URI https://asc.fasb.org/extlink&amp;oid=84165509&amp;loc=d3e56426-112766<br><br>Reference 3: http://www.xbrl.org/2009/role/commonPracticeRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 852<br> -SubTopic 10<br> -Section 50<br> -Paragraph 7<br> -Subparagraph (a)<br> -URI https://asc.fasb.org/extlink&amp;oid=124433192&amp;loc=SL2890621-112765<br><br>Reference 4: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1A<br> -Subparagraph (SX 210.13-01(a)(4)(i))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442526-122756<br><br>Reference 5: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1B<br> -Subparagraph (SX 210.13-02(a)(4)(iii)(A))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442552-122756<br><br>Reference 6: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1A<br> -Subparagraph (SX 210.13-01(a)(4)(iii)(A))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442526-122756<br><br>Reference 7: http://www.xbrl.org/2009/role/commonPracticeRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1A<br> -Subparagraph (SX 210.13-01(a)(4)(iii))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442526-122756<br><br>Reference 8: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 825<br> -SubTopic 10<br> -Section 50<br> -Paragraph 28<br> -Subparagraph (f)<br> -URI https://asc.fasb.org/extlink&amp;oid=123596393&amp;loc=d3e14064-108612<br><br>Reference 9: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1A<br> -Subparagraph (SX 210.13-01(a)(5))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442526-122756<br><br>Reference 10: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1B<br> -Subparagraph (SX 210.13-02(a)(4)(iv))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442552-122756<br><br>Reference 11: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 810<br> -SubTopic 10<br> -Section 45<br> -Paragraph 25<br> -Subparagraph (a)<br> -URI https://asc.fasb.org/extlink&amp;oid=116870748&amp;loc=SL6758485-165988<br><br>Reference 12: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1B<br> -Subparagraph (SX 210.13-02(a)(4)(iii)(B))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442552-122756<br><br>Reference 13: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 323<br> -SubTopic 10<br> -Section 50<br> -Paragraph 3<br> -Subparagraph (c)<br> -URI https://asc.fasb.org/extlink&amp;oid=114001798&amp;loc=d3e33918-111571<br><br>Reference 14: http://www.xbrl.org/2009/role/commonPracticeRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1A<br> -Subparagraph (SX 210.13-01(a)(4)(ii))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442526-122756<br><br>Reference 15: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1B<br> -Subparagraph (SX 210.13-02(a)(5))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442552-122756<br><br>Reference 16: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 810<br> -SubTopic 10<br> -Section 50<br> -Paragraph 3<br> -Subparagraph (bb)<br> -URI https://asc.fasb.org/extlink&amp;oid=123419778&amp;loc=d3e5710-111685<br><br>Reference 17: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1A<br> -Subparagraph (SX 210.13-01(a)(4)(iv))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442526-122756<br><br>Reference 18: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 210<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.5-02(9))<br> -URI https://asc.fasb.org/extlink&amp;oid=120391452&amp;loc=d3e13212-122682<br><br>Reference 19: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 235<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.4-08(g)(1)(ii))<br> -URI https://asc.fasb.org/extlink&amp;oid=120395691&amp;loc=d3e23780-122690<br><br>Reference 20: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1B<br> -Subparagraph (SX 210.13-02(a)(4)(i))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442552-122756<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_AssetsCurrent</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>debit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_AssetsCurrentAbstract">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- References</a>
                                                            <div><p>No definition available.</p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_AssetsCurrentAbstract</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:stringItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>na</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>duration</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_AssetsNoncurrent">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div>
                                                                <p>Sum of the carrying amounts as of the balance sheet date of all assets that are expected to be realized in cash, sold or consumed after one year or beyond the normal operating cycle, if longer.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 235<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.4-08(g)(1)(ii))<br> -URI https://asc.fasb.org/extlink&amp;oid=120395691&amp;loc=d3e23780-122690<br><br>Reference 2: http://www.xbrl.org/2009/role/commonPracticeRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1A<br> -Subparagraph (SX 210.13-01(a)(4)(iii))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442526-122756<br><br>Reference 3: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1B<br> -Subparagraph (SX 210.13-02(a)(4)(iii)(B))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442552-122756<br><br>Reference 4: http://www.xbrl.org/2009/role/commonPracticeRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 852<br> -SubTopic 10<br> -Section 50<br> -Paragraph 7<br> -Subparagraph (a)<br> -URI https://asc.fasb.org/extlink&amp;oid=124433192&amp;loc=SL2890621-112765<br><br>Reference 5: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1A<br> -Subparagraph (SX 210.13-01(a)(5))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442526-122756<br><br>Reference 6: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1A<br> -Subparagraph (SX 210.13-01(a)(4)(iii)(A))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442526-122756<br><br>Reference 7: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1B<br> -Subparagraph (SX 210.13-02(a)(5))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442552-122756<br><br>Reference 8: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1B<br> -Subparagraph (SX 210.13-02(a)(4)(iv))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442552-122756<br><br>Reference 9: http://www.xbrl.org/2009/role/commonPracticeRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1A<br> -Subparagraph (SX 210.13-01(a)(4)(ii))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442526-122756<br><br>Reference 10: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1B<br> -Subparagraph (SX 210.13-02(a)(4)(iii)(A))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442552-122756<br><br>Reference 11: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1A<br> -Subparagraph (SX 210.13-01(a)(4)(iv))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442526-122756<br><br>Reference 12: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1A<br> -Subparagraph (SX 210.13-01(a)(4)(i))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442526-122756<br><br>Reference 13: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 825<br> -SubTopic 10<br> -Section 50<br> -Paragraph 28<br> -Subparagraph (f)<br> -URI https://asc.fasb.org/extlink&amp;oid=123596393&amp;loc=d3e14064-108612<br><br>Reference 14: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 810<br> -SubTopic 10<br> -Section 45<br> -Paragraph 25<br> -Subparagraph (a)<br> -URI https://asc.fasb.org/extlink&amp;oid=116870748&amp;loc=SL6758485-165988<br><br>Reference 15: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1B<br> -Subparagraph (SX 210.13-02(a)(4)(i))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442552-122756<br><br>Reference 16: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 323<br> -SubTopic 10<br> -Section 50<br> -Paragraph 3<br> -Subparagraph (c)<br> -URI https://asc.fasb.org/extlink&amp;oid=114001798&amp;loc=d3e33918-111571<br><br>Reference 17: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 810<br> -SubTopic 10<br> -Section 50<br> -Paragraph 3<br> -Subparagraph (bb)<br> -URI https://asc.fasb.org/extlink&amp;oid=123419778&amp;loc=d3e5710-111685<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_AssetsNoncurrent</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>debit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_AssetsNoncurrentAbstract">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- References</a>
                                                            <div><p>No definition available.</p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_AssetsNoncurrentAbstract</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:stringItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>na</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>duration</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_CashAndCashEquivalentsAtCarryingValue">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div>
                                                                <p>Amount of currency on hand as well as demand deposits with banks or financial institutions. Includes other kinds of accounts that have the general characteristics of demand deposits. Also includes short-term, highly liquid investments that are both readily convertible to known amounts of cash and so near their maturity that they present insignificant risk of changes in value because of changes in interest rates. Excludes cash and cash equivalents within disposal group and discontinued operation.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 230<br> -SubTopic 10<br> -Section 45<br> -Paragraph 4<br> -URI https://asc.fasb.org/extlink&amp;oid=126954810&amp;loc=d3e3044-108585<br><br>Reference 2: http://www.xbrl.org/2003/role/exampleRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 210<br> -SubTopic 10<br> -Section 45<br> -Paragraph 1<br> -Subparagraph (a)<br> -URI https://asc.fasb.org/extlink&amp;oid=124098289&amp;loc=d3e6676-107765<br><br>Reference 3: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 210<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.5-02(1))<br> -URI https://asc.fasb.org/extlink&amp;oid=120391452&amp;loc=d3e13212-122682<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_CashAndCashEquivalentsAtCarryingValue</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>debit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_CommitmentsAndContingencies">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div>
                                                                <p>Represents the caption on the face of the balance sheet to indicate that the entity has entered into (1) purchase or supply arrangements that will require expending a portion of its resources to meet the terms thereof, and (2) is exposed to potential losses or, less frequently, gains, arising from (a) possible claims against a company's resources due to future performance under contract terms, and (b) possible losses or likely gains from uncertainties that will ultimately be resolved when one or more future events that are deemed likely to occur do occur or fail to occur.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 210<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.5-02.25)<br> -URI https://asc.fasb.org/extlink&amp;oid=120391452&amp;loc=d3e13212-122682<br><br>Reference 2: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 944<br> -SubTopic 210<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.7-03.(a),19)<br> -URI https://asc.fasb.org/extlink&amp;oid=126734703&amp;loc=d3e572229-122910<br><br>Reference 3: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 942<br> -SubTopic 210<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.9-03.17)<br> -URI https://asc.fasb.org/extlink&amp;oid=126897435&amp;loc=d3e534808-122878<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_CommitmentsAndContingencies</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>credit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_CommonStockValue">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div>
                                                                <p>Aggregate par or stated value of issued nonredeemable common stock (or common stock redeemable solely at the option of the issuer). This item includes treasury stock repurchased by the entity. Note: elements for number of nonredeemable common shares, par value and other disclosure concepts are in another section within stockholders' equity.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://www.xbrl.org/2003/role/exampleRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 852<br> -SubTopic 10<br> -Section 55<br> -Paragraph 10<br> -URI https://asc.fasb.org/extlink&amp;oid=84165509&amp;loc=d3e56426-112766<br><br>Reference 2: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 210<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.5-02(29))<br> -URI https://asc.fasb.org/extlink&amp;oid=120391452&amp;loc=d3e13212-122682<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_CommonStockValue</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>credit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_ConvertibleLongTermNotesPayable">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div>
                                                                <p>Carrying value as of the balance sheet date of long-term debt (with maturities initially due after one year or beyond the operating cycle if longer) identified as Convertible Notes Payable, excluding current portion. Convertible Notes Payable is a written promise to pay a note which can be exchanged for a specified amount of another, related security, at the option of the issuer and the holder.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 210<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.5-02.22)<br> -URI https://asc.fasb.org/extlink&amp;oid=120391452&amp;loc=d3e13212-122682<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_ConvertibleLongTermNotesPayable</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>credit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_DeferredIncomeTaxLiabilitiesNet">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div>
                                                                <p>Amount, after deferred tax asset, of deferred tax liability attributable to taxable differences with jurisdictional netting.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 740<br> -SubTopic 10<br> -Section 45<br> -Paragraph 6<br> -URI https://asc.fasb.org/extlink&amp;oid=123427490&amp;loc=d3e31931-109318<br><br>Reference 2: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 740<br> -SubTopic 10<br> -Section 45<br> -Paragraph 4<br> -URI https://asc.fasb.org/extlink&amp;oid=123427490&amp;loc=d3e31917-109318<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_DeferredIncomeTaxLiabilitiesNet</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>credit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_DepositAssets">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div>
                                                                <p>The carrying amount of the asset transferred to a third party to serve as a deposit, which typically serves as security against failure by the transferor to perform under terms of an agreement.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://www.xbrl.org/2009/role/commonPracticeRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 210<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.5-02(17))<br> -URI https://asc.fasb.org/extlink&amp;oid=120391452&amp;loc=d3e13212-122682<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_DepositAssets</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>debit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_DepositsAssetsCurrent">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div>
                                                                <p>Carrying value of amounts transferred to third parties for security purposes that are expected to be returned or applied towards payment within one year or during the operating cycle, if shorter.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://www.xbrl.org/2009/role/commonPracticeRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 210<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.5-02(8))<br> -URI https://asc.fasb.org/extlink&amp;oid=120391452&amp;loc=d3e13212-122682<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_DepositsAssetsCurrent</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>debit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_FiniteLivedIntangibleAssetsNet">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div>
                                                                <p>Amount after amortization of assets, excluding financial assets and goodwill, lacking physical substance with a finite life.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 926<br> -SubTopic 20<br> -Section 50<br> -Paragraph 5<br> -URI https://asc.fasb.org/extlink&amp;oid=120154696&amp;loc=d3e54445-107959<br><br>Reference 2: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 350<br> -SubTopic 30<br> -Section 50<br> -Paragraph 2<br> -Subparagraph (a)(1)<br> -URI https://asc.fasb.org/extlink&amp;oid=66006027&amp;loc=d3e16323-109275<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_FiniteLivedIntangibleAssetsNet</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>debit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_InterestPayableCurrent">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div>
                                                                <p>Carrying value as of the balance sheet date of [accrued] interest payable on all forms of debt, including trade payables, that has been incurred and is unpaid. Used to reflect the current portion of the liabilities (due within one year or within the normal operating cycle if longer).</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 210<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.5-02.20)<br> -URI https://asc.fasb.org/extlink&amp;oid=120391452&amp;loc=d3e13212-122682<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_InterestPayableCurrent</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>credit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_Investments">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div>
                                                                <p>Sum of the carrying amounts as of the balance sheet date of all investments.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 944<br> -SubTopic 210<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.7-03.1(h))<br> -URI https://asc.fasb.org/extlink&amp;oid=126734703&amp;loc=d3e572229-122910<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_Investments</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>debit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_LiabilitiesAndStockholdersEquity">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div>
                                                                <p>Amount of liabilities and equity items, including the portion of equity attributable to noncontrolling interests, if any.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://www.xbrl.org/2009/role/commonPracticeRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 323<br> -SubTopic 10<br> -Section 50<br> -Paragraph 3<br> -Subparagraph (c)<br> -URI https://asc.fasb.org/extlink&amp;oid=114001798&amp;loc=d3e33918-111571<br><br>Reference 2: http://www.xbrl.org/2003/role/exampleRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 852<br> -SubTopic 10<br> -Section 55<br> -Paragraph 10<br> -URI https://asc.fasb.org/extlink&amp;oid=84165509&amp;loc=d3e56426-112766<br><br>Reference 3: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 942<br> -SubTopic 210<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.9-03(23))<br> -URI https://asc.fasb.org/extlink&amp;oid=126897435&amp;loc=d3e534808-122878<br><br>Reference 4: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 944<br> -SubTopic 210<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.7-03(a)(25))<br> -URI https://asc.fasb.org/extlink&amp;oid=126734703&amp;loc=d3e572229-122910<br><br>Reference 5: http://www.xbrl.org/2009/role/commonPracticeRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 235<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.4-08(g)(1)(ii))<br> -URI https://asc.fasb.org/extlink&amp;oid=120395691&amp;loc=d3e23780-122690<br><br>Reference 6: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 210<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.5-02(32))<br> -URI https://asc.fasb.org/extlink&amp;oid=120391452&amp;loc=d3e13212-122682<br><br>Reference 7: http://www.xbrl.org/2009/role/commonPracticeRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 825<br> -SubTopic 10<br> -Section 50<br> -Paragraph 28<br> -Subparagraph (f)<br> -URI https://asc.fasb.org/extlink&amp;oid=123596393&amp;loc=d3e14064-108612<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_LiabilitiesAndStockholdersEquity</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>credit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_LiabilitiesCurrent">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div>
                                                                <p>Total obligations incurred as part of normal operations that are expected to be paid during the following twelve months or within one business cycle, if longer.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://www.xbrl.org/2003/role/exampleRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 852<br> -SubTopic 10<br> -Section 55<br> -Paragraph 10<br> -URI https://asc.fasb.org/extlink&amp;oid=84165509&amp;loc=d3e56426-112766<br><br>Reference 2: http://www.xbrl.org/2009/role/commonPracticeRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 852<br> -SubTopic 10<br> -Section 50<br> -Paragraph 7<br> -Subparagraph (a)<br> -URI https://asc.fasb.org/extlink&amp;oid=124433192&amp;loc=SL2890621-112765<br><br>Reference 3: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1B<br> -Subparagraph (SX 210.13-02(a)(4)(iii)(A))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442552-122756<br><br>Reference 4: http://www.xbrl.org/2009/role/commonPracticeRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 852<br> -SubTopic 10<br> -Section 50<br> -Paragraph 7<br> -Subparagraph (b)<br> -URI https://asc.fasb.org/extlink&amp;oid=124433192&amp;loc=SL2890621-112765<br><br>Reference 5: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 810<br> -SubTopic 10<br> -Section 45<br> -Paragraph 25<br> -Subparagraph (b)<br> -URI https://asc.fasb.org/extlink&amp;oid=116870748&amp;loc=SL6758485-165988<br><br>Reference 6: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 235<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.4-08(g)(1)(ii))<br> -URI https://asc.fasb.org/extlink&amp;oid=120395691&amp;loc=d3e23780-122690<br><br>Reference 7: http://www.xbrl.org/2009/role/commonPracticeRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1A<br> -Subparagraph (SX 210.13-01(a)(4)(ii))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442526-122756<br><br>Reference 8: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1B<br> -Subparagraph (SX 210.13-02(a)(4)(iv))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442552-122756<br><br>Reference 9: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1B<br> -Subparagraph (SX 210.13-02(a)(4)(i))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442552-122756<br><br>Reference 10: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 810<br> -SubTopic 10<br> -Section 50<br> -Paragraph 3<br> -Subparagraph (c)<br> -URI https://asc.fasb.org/extlink&amp;oid=123419778&amp;loc=d3e5710-111685<br><br>Reference 11: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 323<br> -SubTopic 10<br> -Section 50<br> -Paragraph 3<br> -Subparagraph (c)<br> -URI https://asc.fasb.org/extlink&amp;oid=114001798&amp;loc=d3e33918-111571<br><br>Reference 12: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1B<br> -Subparagraph (SX 210.13-02(a)(4)(iii)(B))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442552-122756<br><br>Reference 13: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1A<br> -Subparagraph (SX 210.13-01(a)(5))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442526-122756<br><br>Reference 14: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 810<br> -SubTopic 10<br> -Section 50<br> -Paragraph 3<br> -Subparagraph (bb)<br> -URI https://asc.fasb.org/extlink&amp;oid=123419778&amp;loc=d3e5710-111685<br><br>Reference 15: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1B<br> -Subparagraph (SX 210.13-02(a)(5))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442552-122756<br><br>Reference 16: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1A<br> -Subparagraph (SX 210.13-01(a)(4)(iii)(A))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442526-122756<br><br>Reference 17: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1A<br> -Subparagraph (SX 210.13-01(a)(4)(i))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442526-122756<br><br>Reference 18: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1A<br> -Subparagraph (SX 210.13-01(a)(4)(iv))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442526-122756<br><br>Reference 19: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 825<br> -SubTopic 10<br> -Section 50<br> -Paragraph 28<br> -Subparagraph (f)<br> -URI https://asc.fasb.org/extlink&amp;oid=123596393&amp;loc=d3e14064-108612<br><br>Reference 20: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 210<br> -SubTopic 10<br> -Section 45<br> -Paragraph 5<br> -URI https://asc.fasb.org/extlink&amp;oid=124098289&amp;loc=d3e6904-107765<br><br>Reference 21: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 210<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.5-02.21)<br> -URI https://asc.fasb.org/extlink&amp;oid=120391452&amp;loc=d3e13212-122682<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_LiabilitiesCurrent</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>credit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_LiabilitiesCurrentAbstract">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- References</a>
                                                            <div><p>No definition available.</p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_LiabilitiesCurrentAbstract</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:stringItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>na</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>duration</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_LiabilitiesNoncurrent">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div>
                                                                <p>Amount of obligation due after one year or beyond the normal operating cycle, if longer.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 210<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 201.5-02(25))<br> -URI https://asc.fasb.org/extlink&amp;oid=120391452&amp;loc=d3e13212-122682<br><br>Reference 2: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 210<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.5-02(23))<br> -URI https://asc.fasb.org/extlink&amp;oid=120391452&amp;loc=d3e13212-122682<br><br>Reference 3: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 210<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.5-02(22))<br> -URI https://asc.fasb.org/extlink&amp;oid=120391452&amp;loc=d3e13212-122682<br><br>Reference 4: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 210<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 201.5-02(26))<br> -URI https://asc.fasb.org/extlink&amp;oid=120391452&amp;loc=d3e13212-122682<br><br>Reference 5: http://www.xbrl.org/2009/role/commonPracticeRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 852<br> -SubTopic 10<br> -Section 50<br> -Paragraph 7<br> -Subparagraph (b)<br> -URI https://asc.fasb.org/extlink&amp;oid=124433192&amp;loc=SL2890621-112765<br><br>Reference 6: http://www.xbrl.org/2009/role/commonPracticeRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 852<br> -SubTopic 10<br> -Section 50<br> -Paragraph 7<br> -Subparagraph (a)<br> -URI https://asc.fasb.org/extlink&amp;oid=124433192&amp;loc=SL2890621-112765<br><br>Reference 7: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1A<br> -Subparagraph (SX 210.13-01(a)(5))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442526-122756<br><br>Reference 8: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 210<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 201.5-02(24))<br> -URI https://asc.fasb.org/extlink&amp;oid=120391452&amp;loc=d3e13212-122682<br><br>Reference 9: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1A<br> -Subparagraph (SX 210.13-01(a)(4)(iii)(A))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442526-122756<br><br>Reference 10: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1A<br> -Subparagraph (SX 210.13-01(a)(4)(i))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442526-122756<br><br>Reference 11: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1B<br> -Subparagraph (SX 210.13-02(a)(4)(iii)(A))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442552-122756<br><br>Reference 12: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1A<br> -Subparagraph (SX 210.13-01(a)(4)(iv))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442526-122756<br><br>Reference 13: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 235<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.4-08(g)(1)(ii))<br> -URI https://asc.fasb.org/extlink&amp;oid=120395691&amp;loc=d3e23780-122690<br><br>Reference 14: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1B<br> -Subparagraph (SX 210.13-02(a)(4)(iv))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442552-122756<br><br>Reference 15: http://www.xbrl.org/2009/role/commonPracticeRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1A<br> -Subparagraph (SX 210.13-01(a)(4)(ii))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442526-122756<br><br>Reference 16: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1B<br> -Subparagraph (SX 210.13-02(a)(4)(iii)(B))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442552-122756<br><br>Reference 17: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1B<br> -Subparagraph (SX 210.13-02(a)(4)(i))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442552-122756<br><br>Reference 18: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 825<br> -SubTopic 10<br> -Section 50<br> -Paragraph 28<br> -Subparagraph (f)<br> -URI https://asc.fasb.org/extlink&amp;oid=123596393&amp;loc=d3e14064-108612<br><br>Reference 19: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1B<br> -Subparagraph (SX 210.13-02(a)(5))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442552-122756<br><br>Reference 20: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 810<br> -SubTopic 10<br> -Section 50<br> -Paragraph 3<br> -Subparagraph (bb)<br> -URI https://asc.fasb.org/extlink&amp;oid=123419778&amp;loc=d3e5710-111685<br><br>Reference 21: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 323<br> -SubTopic 10<br> -Section 50<br> -Paragraph 3<br> -Subparagraph (c)<br> -URI https://asc.fasb.org/extlink&amp;oid=114001798&amp;loc=d3e33918-111571<br><br>Reference 22: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 810<br> -SubTopic 10<br> -Section 50<br> -Paragraph 3<br> -Subparagraph (c)<br> -URI https://asc.fasb.org/extlink&amp;oid=123419778&amp;loc=d3e5710-111685<br><br>Reference 23: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 810<br> -SubTopic 10<br> -Section 45<br> -Paragraph 25<br> -Subparagraph (b)<br> -URI https://asc.fasb.org/extlink&amp;oid=116870748&amp;loc=SL6758485-165988<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_LiabilitiesNoncurrent</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>credit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_LiabilitiesNoncurrentAbstract">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- References</a>
                                                            <div><p>No definition available.</p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_LiabilitiesNoncurrentAbstract</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:stringItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>na</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>duration</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_LitigationReserveCurrent">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div>
                                                                <p>Carrying amount of reserve for known or estimated probable loss from litigation, which may include attorneys' fees and other litigation costs, which is expected to be paid within one year of the date of the statement of financial position.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 210<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.5-02.25)<br> -URI https://asc.fasb.org/extlink&amp;oid=120391452&amp;loc=d3e13212-122682<br><br>Reference 2: http://www.xbrl.org/2009/role/commonPracticeRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 450<br> -SubTopic 20<br> -Section 50<br> -Paragraph 1<br> -URI https://asc.fasb.org/extlink&amp;oid=121557415&amp;loc=d3e14326-108349<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_LitigationReserveCurrent</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>credit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_LongTermLoansPayable">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div>
                                                                <p>Carrying value as of the balance sheet date of loans payable (with maturities initially due after one year or beyond the operating cycle if longer), excluding current portion.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 210<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.5-02.22)<br> -URI https://asc.fasb.org/extlink&amp;oid=120391452&amp;loc=d3e13212-122682<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_LongTermLoansPayable</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>credit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_OperatingLeaseLiabilityCurrent">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div>
                                                                <p>Present value of lessee's discounted obligation for lease payments from operating lease, classified as current.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 842<br> -SubTopic 20<br> -Section 45<br> -Paragraph 1<br> -Subparagraph (b)<br> -URI https://asc.fasb.org/extlink&amp;oid=123391704&amp;loc=SL77918627-209977<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_OperatingLeaseLiabilityCurrent</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>credit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_OperatingLeaseLiabilityNoncurrent">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div>
                                                                <p>Present value of lessee's discounted obligation for lease payments from operating lease, classified as noncurrent.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 842<br> -SubTopic 20<br> -Section 45<br> -Paragraph 1<br> -Subparagraph (b)<br> -URI https://asc.fasb.org/extlink&amp;oid=123391704&amp;loc=SL77918627-209977<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_OperatingLeaseLiabilityNoncurrent</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>credit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_OperatingLeaseRightOfUseAsset">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div>
                                                                <p>Amount of lessee's right to use underlying asset under operating lease.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 842<br> -SubTopic 20<br> -Section 45<br> -Paragraph 1<br> -Subparagraph (a)<br> -URI https://asc.fasb.org/extlink&amp;oid=123391704&amp;loc=SL77918627-209977<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_OperatingLeaseRightOfUseAsset</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>debit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_PreferredStockValue">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div>
                                                                <p>Aggregate par or stated value of issued nonredeemable preferred stock (or preferred stock redeemable solely at the option of the issuer). This item includes treasury stock repurchased by the entity. Note: elements for number of nonredeemable preferred shares, par value and other disclosure concepts are in another section within stockholders' equity.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 210<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.5-02(28))<br> -URI https://asc.fasb.org/extlink&amp;oid=120391452&amp;loc=d3e13212-122682<br><br>Reference 2: http://www.xbrl.org/2003/role/exampleRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 852<br> -SubTopic 10<br> -Section 55<br> -Paragraph 10<br> -URI https://asc.fasb.org/extlink&amp;oid=84165509&amp;loc=d3e56426-112766<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_PreferredStockValue</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>credit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_PrepaidExpenseAndOtherAssetsCurrent">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div>
                                                                <p>Amount of asset related to consideration paid in advance for costs that provide economic benefits in future periods, and amount of other assets that are expected to be realized or consumed within one year or the normal operating cycle, if longer.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://www.xbrl.org/2009/role/commonPracticeRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 210<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.5-02(9))<br> -URI https://asc.fasb.org/extlink&amp;oid=120391452&amp;loc=d3e13212-122682<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_PrepaidExpenseAndOtherAssetsCurrent</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>debit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_PrepaidExpenseNoncurrent">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div>
                                                                <p>Sum of the carrying amounts as of the balance sheet date of amounts paid in advance for expenses which will be charged against earnings in periods after one year or beyond the operating cycle, if longer.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://www.xbrl.org/2009/role/commonPracticeRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 210<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.5-02(17))<br> -URI https://asc.fasb.org/extlink&amp;oid=120391452&amp;loc=d3e13212-122682<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_PrepaidExpenseNoncurrent</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>debit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_PropertyPlantAndEquipmentNet">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div>
                                                                <p>Amount after accumulated depreciation, depletion and amortization of physical assets used in the normal conduct of business to produce goods and services and not intended for resale. Examples include, but are not limited to, land, buildings, machinery and equipment, office equipment, and furniture and fixtures.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 360<br> -SubTopic 10<br> -Section 50<br> -Paragraph 1<br> -URI https://asc.fasb.org/extlink&amp;oid=6391035&amp;loc=d3e2868-110229<br><br>Reference 2: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 944<br> -SubTopic 210<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.7-03(a)(8))<br> -URI https://asc.fasb.org/extlink&amp;oid=126734703&amp;loc=d3e572229-122910<br><br>Reference 3: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 942<br> -SubTopic 360<br> -Section 50<br> -Paragraph 1<br> -URI https://asc.fasb.org/extlink&amp;oid=124429447&amp;loc=SL124453093-239630<br><br>Reference 4: http://www.xbrl.org/2003/role/exampleRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 852<br> -SubTopic 10<br> -Section 55<br> -Paragraph 10<br> -URI https://asc.fasb.org/extlink&amp;oid=84165509&amp;loc=d3e56426-112766<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_PropertyPlantAndEquipmentNet</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>debit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_RestrictedCash">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div>
                                                                <p>Amount of cash restricted as to withdrawal or usage. Cash includes, but is not limited to, currency on hand, demand deposits with banks or financial institutions, and other accounts with general characteristics of demand deposits.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://www.xbrl.org/2009/role/commonPracticeRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 210<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.5-02(1))<br> -URI https://asc.fasb.org/extlink&amp;oid=120391452&amp;loc=d3e13212-122682<br><br>Reference 2: http://www.xbrl.org/2009/role/commonPracticeRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 230<br> -SubTopic 10<br> -Section 50<br> -Paragraph 8<br> -URI https://asc.fasb.org/extlink&amp;oid=126999549&amp;loc=SL98516268-108586<br><br>Reference 3: http://www.xbrl.org/2009/role/commonPracticeRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 942<br> -SubTopic 210<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.9-03(1)(a))<br> -URI https://asc.fasb.org/extlink&amp;oid=126897435&amp;loc=d3e534808-122878<br><br>Reference 4: http://www.xbrl.org/2009/role/commonPracticeRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 944<br> -SubTopic 210<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.7-03(a)(2))<br> -URI https://asc.fasb.org/extlink&amp;oid=126734703&amp;loc=d3e572229-122910<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_RestrictedCash</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>debit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_RetainedEarningsAccumulatedDeficit">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div>
                                                                <p>The cumulative amount of the reporting entity's undistributed earnings or deficit.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 210<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.5-02(30)(a)(3))<br> -URI https://asc.fasb.org/extlink&amp;oid=120391452&amp;loc=d3e13212-122682<br><br>Reference 2: http://www.xbrl.org/2003/role/exampleRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 852<br> -SubTopic 10<br> -Section 55<br> -Paragraph 10<br> -URI https://asc.fasb.org/extlink&amp;oid=84165509&amp;loc=d3e56426-112766<br><br>Reference 3: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 944<br> -SubTopic 210<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.7-03(a)(23)(a)(4))<br> -URI https://asc.fasb.org/extlink&amp;oid=126734703&amp;loc=d3e572229-122910<br><br>Reference 4: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 944<br> -SubTopic 40<br> -Section 65<br> -Paragraph 2<br> -Subparagraph (h)(2)<br> -URI https://asc.fasb.org/extlink&amp;oid=124501264&amp;loc=SL117420844-207641<br><br>Reference 5: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 505<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.3-04)<br> -URI https://asc.fasb.org/extlink&amp;oid=120397183&amp;loc=d3e187085-122770<br><br>Reference 6: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 944<br> -SubTopic 40<br> -Section 65<br> -Paragraph 2<br> -Subparagraph (g)(2)(i)<br> -URI https://asc.fasb.org/extlink&amp;oid=124501264&amp;loc=SL117420844-207641<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_RetainedEarningsAccumulatedDeficit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>credit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_StockholdersEquity">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- Definition</a>
                                                            <div>
                                                                <p>Total of all stockholders' equity (deficit) items, net of receivables from officers, directors, owners, and affiliates of the entity which are attributable to the parent. The amount of the economic entity's stockholders' equity attributable to the parent excludes the amount of stockholders' equity which is allocable to that ownership interest in subsidiary equity which is not attributable to the parent (noncontrolling interest, minority interest). This excludes temporary equity and is sometimes called permanent equity.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://www.xbrl.org/2009/role/commonPracticeRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 235<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.4-08(g)(1)(ii))<br> -URI https://asc.fasb.org/extlink&amp;oid=120395691&amp;loc=d3e23780-122690<br><br>Reference 2: http://www.xbrl.org/2003/role/exampleRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 852<br> -SubTopic 10<br> -Section 55<br> -Paragraph 10<br> -URI https://asc.fasb.org/extlink&amp;oid=84165509&amp;loc=d3e56426-112766<br><br>Reference 3: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 310<br> -SubTopic 10<br> -Section S99<br> -Paragraph 2<br> -Subparagraph (SAB Topic 4.E)<br> -URI https://asc.fasb.org/extlink&amp;oid=122038336&amp;loc=d3e74512-122707<br><br>Reference 4: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 210<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.5-02(31))<br> -URI https://asc.fasb.org/extlink&amp;oid=120391452&amp;loc=d3e13212-122682<br><br>Reference 5: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 210<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.5-02(29))<br> -URI https://asc.fasb.org/extlink&amp;oid=120391452&amp;loc=d3e13212-122682<br><br>Reference 6: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 210<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.5-02(30))<br> -URI https://asc.fasb.org/extlink&amp;oid=120391452&amp;loc=d3e13212-122682<br><br>Reference 7: http://www.xbrl.org/2009/role/commonPracticeRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 825<br> -SubTopic 10<br> -Section 50<br> -Paragraph 28<br> -Subparagraph (f)<br> -URI https://asc.fasb.org/extlink&amp;oid=123596393&amp;loc=d3e14064-108612<br><br>Reference 8: http://www.xbrl.org/2009/role/commonPracticeRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 323<br> -SubTopic 10<br> -Section 50<br> -Paragraph 3<br> -Subparagraph (c)<br> -URI https://asc.fasb.org/extlink&amp;oid=114001798&amp;loc=d3e33918-111571<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_StockholdersEquity</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:monetaryItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>credit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>instant</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_StockholdersEquityAbstract">
                                                <tbody>
                                                <tr>
                                                    <td class="hide">
                                                        <a style="color: white;" href="javascript:void(0);" onclick="Show.hideAR();">X</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="body" style="padding: 2px;">
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">- References</a>
                                                            <div><p>No definition available.</p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_StockholdersEquityAbstract</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:stringItemType</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Balance Type:</strong></td>
                                                                        <td>na</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Period Type:</strong></td>
                                                                        <td>duration</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>


                                        <section class="source-filing quarterly-results">
                                            <div class="header">
                                                <h2 class="icon-bg-results">Source</h2>
                                            </div>
                                            <div class="text">
                                                <!-- Filing -->
                                                <div class="result-line">
                                                    <div class="pull-right">
                                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-031756/0001493152-22-031756.pdf" title="10-Q" class="link" target="_blank" rel="noopener"><span class="eqicon-PDF"></span> PDF</a>
                                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-031756/form10-q.htm" title="10-Q Filing Viewer" class="link fancybox fancybox.iframe"><span class="eqicon-HTML"></span> HTML</a>
                                                    </div>
                                                    <a href="/sec-filings/all-sec-filings/content/0001493152-22-031756/form10-q.htm" title="10-Q Filing Viewer" class="fancybox fancybox.iframe">10-Q
                                                        <span class="sr-only">Filing</span></a>
                                                </div>
                                                <!-- XBRL -->
                                                <div class="result-line">
                                                    <div class="pull-right">
                                                        <a href="/sec-filings/all-sec-filings/content/0001493152-22-031756/0001493152-22-031756-xbrl.zip" title="Download Raw XBRL Files" class="link" target="_blank" rel="noopener"><span class="eqicon-ZIP"></span> ZIP</a>
                                                        <a href="https://s3.amazonaws.com/content.stockpr.com/sec/0001493152-22-031756/Financial_Report.xlsx" title="XBRL Spreadsheet" class="link" target="_blank" rel="noopener"><span class="eqicon-PDF"></span> XLS</a>
                                                        <a href="/sec-filings/all-sec-filings/xbrl_doc_only/10020" title="XBRL Viewer" class="link fancybox fancybox.iframe"><span class="eqicon-HTML"></span> HTML</a>
                                                    </div>
                                                    <a href="/sec-filings/all-sec-filings/xbrl_doc_only/10020" title="XBRL Viewer" class="fancybox fancybox.iframe">XBRL</a>
                                                </div>
                                                <div class="date">
                                                    <time datetime="2022-11-14 00:00:00">
                                                        Published: November 14, 2022
                                                    </time>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div><!-- //container-->
        </div>
        <div class="eq-container">
            <div class="module-quick-links">
                <ul>
                    <li><a href="/news-events/email-alerts" class="email">Email Alerts</a></li>
                    <li><a href="/company-information/contacts" class="contacts">Contacts</a></li>
                    <li>
                        <a href="https://ir.example.com/news-events/press-releases/rss" class="rss" target="_blank" rel="noopener">RSS News Feed</a>
                    </li>
                </ul>
            </div>
        </div>

        @include('pages.includes.footer')

    </div>

@endsection
