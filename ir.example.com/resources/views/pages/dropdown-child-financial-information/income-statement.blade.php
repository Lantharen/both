@extends('layouts.base')

@section('page-title', 'Income Statement :: Marathon Digital Holdings (MARA)')

@section('page-class', 'pg-107622 page-type-income-statement pg-financial-information-income-statement ir has-sub-nav fl-builder-breakpoint-large')

@section('page-content')

    <div class="general-wrapper">

        @include('pages.includes.header')

        <div class="eq-container">
            <header class="page-banner overlay" style="background: url({{ asset('/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/images/pagebanner-default.jpg') }});background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;background-color: #333;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h1>Income Statement</h1>
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
                                    <li class="active active-landing">
                                        <a href="/financial-information/income-statement" target="_self">Income Statement</a>

                                    </li>
                                    <li class="">
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

                                <link href="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/css/sass/templates/aside/ir/xbrl.css" rel="stylesheet" type="text/css">

                                <script src="https://d1io3yog0oux5.cloudfront.net/_640653e429ebf8728c194bd275de5597/marathondh/files/theme/js/aside/ir/xbrl.js" type="text/javascript"></script>

                                <div id="xbrl-financials1" class="financials">
                                    <div id="income-statement">


                                        <title></title>


                                        <span style="display: none;">v3.22.2.2</span>
                                        <table class="report" border="0" cellspacing="2" id="idm140104053029328">
                                            <tbody>
                                            <tr>
                                                <th class="tl" colspan="1" rowspan="2">
                                                    <div style="width: 200px;">
                                                        <strong>Consolidated Condensed Statements of Operations (Unaudited) - USD ($)<br></strong>
                                                    </div>
                                                </th>
                                                <th class="th" colspan="2">3 Months Ended</th>
                                                <th class="th" colspan="2">9 Months Ended</th>
                                            </tr>
                                            <tr>
                                                <th class="th">
                                                    <div>Sep. 30, 2022</div>
                                                </th>
                                                <th class="th">
                                                    <div>Sep. 30, 2021</div>
                                                </th>
                                                <th class="th">
                                                    <div>Sep. 30, 2022</div>
                                                </th>
                                                <th class="th">
                                                    <div>Sep. 30, 2021</div>
                                                </th>
                                            </tr>
                                            <tr class="re">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_IncomeStatementAbstract', window );"><strong>Income Statement [Abstract]</strong></a>
                                                </td>
                                                <td class="text">&nbsp;<span></span>
                                                </td>
                                                <td class="text">&nbsp;<span></span>
                                                </td>
                                                <td class="text">&nbsp;<span></span>
                                                </td>
                                                <td class="text">&nbsp;<span></span>
                                                </td>
                                            </tr>
                                            <tr class="ro">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_RevenueFromContractWithCustomerExcludingAssessedTax', window );">Total Revenues</a>
                                                </td>
                                                <td class="nump">$ 12,690,452<span></span>
                                                </td>
                                                <td class="nump">$ 51,707,483<span></span>
                                                </td>
                                                <td class="nump">$ 89,329,986<span></span>
                                                </td>
                                                <td class="nump">$ 90,182,155<span></span>
                                                </td>
                                            </tr>
                                            <tr class="re">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_CostOfRevenueAbstract', window );"><strong>Cost of revenues</strong></a>
                                                </td>
                                                <td class="text">&nbsp;<span></span>
                                                </td>
                                                <td class="text">&nbsp;<span></span>
                                                </td>
                                                <td class="text">&nbsp;<span></span>
                                                </td>
                                                <td class="text">&nbsp;<span></span>
                                                </td>
                                            </tr>
                                            <tr class="ro">
                                                <td class="pl custom" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_MARA_CostOfGoodsAndServicesEnergyHostingAndOther', window );">Cost of revenues - energy, hosting and other</a>
                                                </td>
                                                <td class="num">(13,772,555)<span></span>
                                                </td>
                                                <td class="num">(5,922,811)<span></span>
                                                </td>
                                                <td class="num">(42,974,265)<span></span>
                                                </td>
                                                <td class="num">(11,647,457)<span></span>
                                                </td>
                                            </tr>
                                            <tr class="re">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_CostOfGoodsAndServicesSoldDepreciationAndAmortization', window );">Cost of revenues - depreciation and amortization</a>
                                                </td>
                                                <td class="num">(26,294,842)<span></span>
                                                </td>
                                                <td class="num">(4,340,198)<span></span>
                                                </td>
                                                <td class="num">(64,881,323)<span></span>
                                                </td>
                                                <td class="num">(8,015,801)<span></span>
                                                </td>
                                            </tr>
                                            <tr class="rou">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_CostOfGoodsAndServicesSold', window );">Total costs and expenses</a>
                                                </td>
                                                <td class="num">(40,067,397)<span></span>
                                                </td>
                                                <td class="num">(10,263,009)<span></span>
                                                </td>
                                                <td class="num">(107,855,588)<span></span>
                                                </td>
                                                <td class="num">(19,663,258)<span></span>
                                                </td>
                                            </tr>
                                            <tr class="re">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_OperatingExpensesAbstract', window );"><strong>Operating expenses</strong></a>
                                                </td>
                                                <td class="text">&nbsp;<span></span>
                                                </td>
                                                <td class="text">&nbsp;<span></span>
                                                </td>
                                                <td class="text">&nbsp;<span></span>
                                                </td>
                                                <td class="text">&nbsp;<span></span>
                                                </td>
                                            </tr>
                                            <tr class="ro">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_GeneralAndAdministrativeExpense', window );">General and administrative expenses</a>
                                                </td>
                                                <td class="num">(12,352,008)<span></span>
                                                </td>
                                                <td class="num">(99,235,984)<span></span>
                                                </td>
                                                <td class="num">(39,187,098)<span></span>
                                                </td>
                                                <td class="num">(159,411,404)<span></span>
                                                </td>
                                            </tr>
                                            <tr class="re">
                                                <td class="pl custom" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_MARA_LegalReserve', window );">Legal reserves</a>
                                                </td>
                                                <td class="num">(24,960,000)<span></span>
                                                </td>
                                                <td class="text"><span></span>
                                                </td>
                                                <td class="num">(24,960,000)<span></span>
                                                </td>
                                                <td class="text"><span></span>
                                                </td>
                                            </tr>
                                            <tr class="ro">
                                                <td class="pl custom" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_MARA_ImpairmentOfDepositsDueToVendorBankruptcyFiling', window );">Impairment of deposits due to vendor bankruptcy filing</a>
                                                </td>
                                                <td class="num">(7,987,147)<span></span>
                                                </td>
                                                <td class="text"><span></span>
                                                </td>
                                                <td class="num">(7,987,147)<span></span>
                                                </td>
                                                <td class="text"><span></span>
                                                </td>
                                            </tr>
                                            <tr class="re">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_ImpairmentOfLongLivedAssetsHeldForUse', window );">Impairment of digital currencies</a>
                                                </td>
                                                <td class="num">(5,903,891)<span></span>
                                                </td>
                                                <td class="num">(6,731,890)<span></span>
                                                </td>
                                                <td class="num">(153,045,376)<span></span>
                                                </td>
                                                <td class="num">(18,472,750)<span></span>
                                                </td>
                                            </tr>
                                            <tr class="ro">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_ImpairmentOfIntangibleAssetsFinitelived', window );">Impairment of patents</a>
                                                </td>
                                                <td class="text"><span></span>
                                                </td>
                                                <td class="text"><span></span>
                                                </td>
                                                <td class="num">(919,363)<span></span>
                                                </td>
                                                <td class="text"><span></span>
                                                </td>
                                            </tr>
                                            <tr class="re">
                                                <td class="pl custom" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_MARA_RealizedAndUnrealizedGainsLossesOnDigitalCurrenciesHeldInFund', window );">Realized and unrealized gains (losses) on digital currencies held in fund</a>
                                                </td>
                                                <td class="text"><span></span>
                                                </td>
                                                <td class="nump">42,086,907<span></span>
                                                </td>
                                                <td class="num">(85,016,208)<span></span>
                                                </td>
                                                <td class="nump">59,410,028<span></span>
                                                </td>
                                            </tr>
                                            <tr class="ro">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_GainLossOnSaleOfPropertyPlantEquipment', window );">Gain on sale of equipment, net of disposals</a>
                                                </td>
                                                <td class="nump">31,934,307<span></span>
                                                </td>
                                                <td class="text"><span></span>
                                                </td>
                                                <td class="nump">90,115,824<span></span>
                                                </td>
                                                <td class="text"><span></span>
                                                </td>
                                            </tr>
                                            <tr class="reu">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_OperatingExpenses', window );">Total operating expenses</a>
                                                </td>
                                                <td class="num">(19,268,739)<span></span>
                                                </td>
                                                <td class="num">(63,880,967)<span></span>
                                                </td>
                                                <td class="num">(220,999,368)<span></span>
                                                </td>
                                                <td class="num">(118,474,126)<span></span>
                                                </td>
                                            </tr>
                                            <tr class="rou">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_OperatingIncomeLoss', window );">Operating loss</a>
                                                </td>
                                                <td class="num">(46,645,684)<span></span>
                                                </td>
                                                <td class="num">(22,436,493)<span></span>
                                                </td>
                                                <td class="num">(239,524,970)<span></span>
                                                </td>
                                                <td class="num">(47,955,229)<span></span>
                                                </td>
                                            </tr>
                                            <tr class="re">
                                                <td class="pl custom" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_MARA_ImpairmentOfLoanAndInvestmentDueToVendorBankruptcyFiling', window );">Impairment of loan and investment due to vendor bankruptcy filing</a>
                                                </td>
                                                <td class="num">(31,012,853)<span></span>
                                                </td>
                                                <td class="text"><span></span>
                                                </td>
                                                <td class="num">(31,012,853)<span></span>
                                                </td>
                                                <td class="text"><span></span>
                                                </td>
                                            </tr>
                                            <tr class="ro">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_OtherNonoperatingIncomeExpense', window );">Other non-operating income</a>
                                                </td>
                                                <td class="nump">238,159<span></span>
                                                </td>
                                                <td class="nump">261,273<span></span>
                                                </td>
                                                <td class="nump">632,132<span></span>
                                                </td>
                                                <td class="nump">254,024<span></span>
                                                </td>
                                            </tr>
                                            <tr class="re">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_InterestExpense', window );">Interest expense</a>
                                                </td>
                                                <td class="num">(3,752,301)<span></span>
                                                </td>
                                                <td class="num">(287)<span></span>
                                                </td>
                                                <td class="num">(10,314,659)<span></span>
                                                </td>
                                                <td class="num">(2,694)<span></span>
                                                </td>
                                            </tr>
                                            <tr class="rou">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_IncomeLossFromContinuingOperationsBeforeIncomeTaxesExtraordinaryItemsNoncontrollingInterest', window );">Loss before income taxes</a>
                                                </td>
                                                <td class="num">(81,172,679)<span></span>
                                                </td>
                                                <td class="num">(22,175,507)<span></span>
                                                </td>
                                                <td class="num">(280,220,350)<span></span>
                                                </td>
                                                <td class="num">(47,703,899)<span></span>
                                                </td>
                                            </tr>
                                            <tr class="re">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_IncomeTaxExpenseBenefit', window );">Income tax benefit</a>
                                                </td>
                                                <td class="nump">5,750,272<span></span>
                                                </td>
                                                <td class="nump">2,940<span></span>
                                                </td>
                                                <td class="nump">192,712<span></span>
                                                </td>
                                                <td class="nump">3,454<span></span>
                                                </td>
                                            </tr>
                                            <tr class="rou">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_NetIncomeLoss', window );">Net loss</a>
                                                </td>
                                                <td class="num">$ (75,422,407)<span></span>
                                                </td>
                                                <td class="num">$ (22,172,567)<span></span>
                                                </td>
                                                <td class="num">$ (280,027,638)<span></span>
                                                </td>
                                                <td class="num">$ (47,700,445)<span></span>
                                                </td>
                                            </tr>
                                            <tr class="re">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_EarningsPerShareBasic', window );">Net loss per share, basic and diluted:</a>
                                                </td>
                                                <td class="num">$ (0.65)<span></span>
                                                </td>
                                                <td class="num">$ (0.22)<span></span>
                                                </td>
                                                <td class="num">$ (2.56)<span></span>
                                                </td>
                                                <td class="num">$ (0.49)<span></span>
                                                </td>
                                            </tr>
                                            <tr class="ro">
                                                <td class="pl" style="border-bottom: 0px;" valign="top">
                                                    <a class="a" href="javascript:void(0);" onclick="Show.showAR( this, 'defref_us-gaap_WeightedAverageNumberOfSharesOutstandingBasic', window );">Weighted average shares outstanding, basic and diluted:</a>
                                                </td>
                                                <td class="nump">116,533,816<span></span>
                                                </td>
                                                <td class="nump">100,803,809<span></span>
                                                </td>
                                                <td class="nump">109,492,865<span></span>
                                                </td>
                                                <td class="nump">98,230,795<span></span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <div style="display: none;">
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_MARA_CostOfGoodsAndServicesEnergyHostingAndOther">
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
                                                                <p>Cost of goods and services energy hosting and other.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;"><p>No definition available.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">MARA_CostOfGoodsAndServicesEnergyHostingAndOther</td>
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
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_MARA_ImpairmentOfDepositsDueToVendorBankruptcyFiling">
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
                                                                <p>Impairment of deposits due to vendor bankruptcy filing.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;"><p>No definition available.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">MARA_ImpairmentOfDepositsDueToVendorBankruptcyFiling</td>
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
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_MARA_ImpairmentOfLoanAndInvestmentDueToVendorBankruptcyFiling">
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
                                                                <p>Impairment of loan and investment due to vendor bankruptcy filing.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;"><p>No definition available.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">MARA_ImpairmentOfLoanAndInvestmentDueToVendorBankruptcyFiling</td>
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
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_MARA_LegalReserve">
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
                                                            <div><p>Legal reserve.</p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;"><p>No definition available.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">MARA_LegalReserve</td>
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
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_MARA_RealizedAndUnrealizedGainsLossesOnDigitalCurrenciesHeldInFund">
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
                                                                <p>Realized and unrealized gains (losses) on digital currencies held in fund.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;"><p>No definition available.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">MARA_RealizedAndUnrealizedGainsLossesOnDigitalCurrenciesHeldInFund</td>
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
                                                                        <td>credit</td>
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
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_CostOfGoodsAndServicesSold">
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
                                                                <p>The aggregate costs related to goods produced and sold and services rendered by an entity during the reporting period. This excludes costs incurred during the reporting period related to financial services rendered and other revenue generating activities.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 924<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SAB Topic 11.L)<br> -URI https://asc.fasb.org/extlink&amp;oid=6472922&amp;loc=d3e499488-122856<br><br>Reference 2: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 220<br> -SubTopic 10<br> -Section S99<br> -Paragraph 2<br> -Subparagraph (SX 210.5-03.2(a),(d))<br> -URI https://asc.fasb.org/extlink&amp;oid=126953954&amp;loc=SL114868664-224227<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_CostOfGoodsAndServicesSold</td>
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
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_CostOfGoodsAndServicesSoldDepreciationAndAmortization">
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
                                                                <p>Amount of expense for allocation of cost of tangible and intangible assets over their useful lives directly used in production of good and rendering of service.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://www.xbrl.org/2009/role/commonPracticeRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 220<br> -SubTopic 10<br> -Section S99<br> -Paragraph 2<br> -Subparagraph (SX 210.5-03(b)(2))<br> -URI https://asc.fasb.org/extlink&amp;oid=126953954&amp;loc=SL114868664-224227<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_CostOfGoodsAndServicesSoldDepreciationAndAmortization</td>
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
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_CostOfRevenueAbstract">
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
                                                                        <td style="white-space:nowrap;">us-gaap_CostOfRevenueAbstract</td>
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
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_EarningsPerShareBasic">
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
                                                                <p>The amount of net income (loss) for the period per each share of common stock or unit outstanding during the reporting period.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 815<br> -SubTopic 40<br> -Section 65<br> -Paragraph 1<br> -Subparagraph (e)(4)<br> -URI https://asc.fasb.org/extlink&amp;oid=126732423&amp;loc=SL123482106-238011<br><br>Reference 2: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 250<br> -SubTopic 10<br> -Section 50<br> -Paragraph 3<br> -URI https://asc.fasb.org/extlink&amp;oid=124431687&amp;loc=d3e22583-107794<br><br>Reference 3: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 250<br> -SubTopic 10<br> -Section 50<br> -Paragraph 11<br> -Subparagraph (b)<br> -URI https://asc.fasb.org/extlink&amp;oid=124431687&amp;loc=d3e22694-107794<br><br>Reference 4: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 260<br> -SubTopic 10<br> -Section 45<br> -Paragraph 10<br> -URI https://asc.fasb.org/extlink&amp;oid=126958026&amp;loc=d3e1448-109256<br><br>Reference 5: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 250<br> -SubTopic 10<br> -Section 50<br> -Paragraph 4<br> -URI https://asc.fasb.org/extlink&amp;oid=124431687&amp;loc=d3e22595-107794<br><br>Reference 6: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 250<br> -SubTopic 10<br> -Section 50<br> -Paragraph 11<br> -Subparagraph (a)<br> -URI https://asc.fasb.org/extlink&amp;oid=124431687&amp;loc=d3e22694-107794<br><br>Reference 7: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 260<br> -SubTopic 10<br> -Section 45<br> -Paragraph 7<br> -URI https://asc.fasb.org/extlink&amp;oid=126958026&amp;loc=d3e1337-109256<br><br>Reference 8: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 815<br> -SubTopic 40<br> -Section 65<br> -Paragraph 1<br> -Subparagraph (f)<br> -URI https://asc.fasb.org/extlink&amp;oid=126732423&amp;loc=SL123482106-238011<br><br>Reference 9: http://www.xbrl.org/2003/role/exampleRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 260<br> -SubTopic 10<br> -Section 55<br> -Paragraph 52<br> -URI https://asc.fasb.org/extlink&amp;oid=128363288&amp;loc=d3e4984-109258<br><br>Reference 10: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 944<br> -SubTopic 220<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.7-04(23))<br> -URI https://asc.fasb.org/extlink&amp;oid=120400993&amp;loc=SL114874131-224263<br><br>Reference 11: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 260<br> -SubTopic 10<br> -Section 55<br> -Paragraph 15<br> -URI https://asc.fasb.org/extlink&amp;oid=128363288&amp;loc=d3e3842-109258<br><br>Reference 12: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 250<br> -SubTopic 10<br> -Section 50<br> -Paragraph 7<br> -Subparagraph (a)<br> -URI https://asc.fasb.org/extlink&amp;oid=124431687&amp;loc=d3e22644-107794<br><br>Reference 13: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 260<br> -SubTopic 10<br> -Section 50<br> -Paragraph 1<br> -Subparagraph (a)<br> -URI https://asc.fasb.org/extlink&amp;oid=124432515&amp;loc=d3e3550-109257<br><br>Reference 14: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 220<br> -SubTopic 10<br> -Section S99<br> -Paragraph 2<br> -Subparagraph (SX 210.5-03(25))<br> -URI https://asc.fasb.org/extlink&amp;oid=126953954&amp;loc=SL114868664-224227<br><br>Reference 15: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 260<br> -SubTopic 10<br> -Section 45<br> -Paragraph 2<br> -URI https://asc.fasb.org/extlink&amp;oid=126958026&amp;loc=d3e1252-109256<br><br>Reference 16: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 260<br> -SubTopic 10<br> -Section 45<br> -Paragraph 60B<br> -Subparagraph (d)<br> -URI https://asc.fasb.org/extlink&amp;oid=126958026&amp;loc=SL5780133-109256<br><br>Reference 17: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 942<br> -SubTopic 220<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.9-04(27))<br> -URI https://asc.fasb.org/extlink&amp;oid=120399700&amp;loc=SL114874048-224260<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_EarningsPerShareBasic</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>dtr-types:perShareItemType</td>
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
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_GainLossOnSaleOfPropertyPlantEquipment">
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
                                                                <p>Amount of gain (loss) on sale or disposal of property, plant and equipment assets, including oil and gas property and timber property.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 230<br> -SubTopic 10<br> -Section 45<br> -Paragraph 28<br> -Subparagraph (b)<br> -URI https://asc.fasb.org/extlink&amp;oid=126954810&amp;loc=d3e3602-108585<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_GainLossOnSaleOfPropertyPlantEquipment</td>
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
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_GeneralAndAdministrativeExpense">
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
                                                                <p>The aggregate total of expenses of managing and administering the affairs of an entity, including affiliates of the reporting entity, which are not directly or indirectly associated with the manufacture, sale or creation of a product or product line.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 220<br> -SubTopic 10<br> -Section S99<br> -Paragraph 2<br> -Subparagraph (SX 210.5-03.4)<br> -URI https://asc.fasb.org/extlink&amp;oid=126953954&amp;loc=SL114868664-224227<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_GeneralAndAdministrativeExpense</td>
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
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_ImpairmentOfIntangibleAssetsFinitelived">
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
                                                                <p>The amount of impairment loss recognized in the period resulting from the write-down of the carrying amount of a finite-lived intangible asset to fair value.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://www.xbrl.org/2009/role/commonPracticeRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 230<br> -SubTopic 10<br> -Section 45<br> -Paragraph 28<br> -Subparagraph (b)<br> -URI https://asc.fasb.org/extlink&amp;oid=126954810&amp;loc=d3e3602-108585<br><br>Reference 2: http://www.xbrl.org/2009/role/commonPracticeRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 350<br> -SubTopic 30<br> -Section 50<br> -Paragraph 3<br> -Subparagraph (b)<br> -URI https://asc.fasb.org/extlink&amp;oid=66006027&amp;loc=d3e16373-109275<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_ImpairmentOfIntangibleAssetsFinitelived</td>
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
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_ImpairmentOfLongLivedAssetsHeldForUse">
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
                                                                <p>The aggregate amount of write-downs for impairments recognized during the period for long lived assets held for use (including those held for disposal by means other than sale).</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 230<br> -SubTopic 10<br> -Section 45<br> -Paragraph 28<br> -Subparagraph (b)<br> -URI https://asc.fasb.org/extlink&amp;oid=126954810&amp;loc=d3e3602-108585<br><br>Reference 2: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 360<br> -SubTopic 10<br> -Section 50<br> -Paragraph 2<br> -Subparagraph (b)<br> -URI https://asc.fasb.org/extlink&amp;oid=109226691&amp;loc=d3e2921-110230<br><br>Reference 3: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 360<br> -SubTopic 10<br> -Section 45<br> -Paragraph 4<br> -URI https://asc.fasb.org/extlink&amp;oid=126905981&amp;loc=d3e2420-110228<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_ImpairmentOfLongLivedAssetsHeldForUse</td>
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
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_IncomeLossFromContinuingOperationsBeforeIncomeTaxesExtraordinaryItemsNoncontrollingInterest">
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
                                                                <p>Amount of income (loss) from continuing operations, including income (loss) from equity method investments, before deduction of income tax expense (benefit), and income (loss) attributable to noncontrolling interest.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 280<br> -SubTopic 10<br> -Section 50<br> -Paragraph 32<br> -Subparagraph (c)<br> -URI https://asc.fasb.org/extlink&amp;oid=126901519&amp;loc=d3e8933-108599<br><br>Reference 2: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 280<br> -SubTopic 10<br> -Section 50<br> -Paragraph 30<br> -Subparagraph (b)<br> -URI https://asc.fasb.org/extlink&amp;oid=126901519&amp;loc=d3e8906-108599<br><br>Reference 3: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 280<br> -SubTopic 10<br> -Section 50<br> -Paragraph 32<br> -Subparagraph (f)<br> -URI https://asc.fasb.org/extlink&amp;oid=126901519&amp;loc=d3e8933-108599<br><br>Reference 4: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 940<br> -SubTopic 20<br> -Section 25<br> -Paragraph 1<br> -URI https://asc.fasb.org/extlink&amp;oid=126941158&amp;loc=d3e41242-110953<br><br>Reference 5: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 280<br> -SubTopic 10<br> -Section 50<br> -Paragraph 22<br> -URI https://asc.fasb.org/extlink&amp;oid=126901519&amp;loc=d3e8736-108599<br><br>Reference 6: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 220<br> -SubTopic 10<br> -Section S99<br> -Paragraph 2<br> -Subparagraph (SX 210.5-03(10))<br> -URI https://asc.fasb.org/extlink&amp;oid=126953954&amp;loc=SL114868664-224227<br><br>Reference 7: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 944<br> -SubTopic 220<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.7-04(8))<br> -URI https://asc.fasb.org/extlink&amp;oid=120400993&amp;loc=SL114874131-224263<br><br>Reference 8: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 942<br> -SubTopic 235<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.9-05(b)(2))<br> -URI https://asc.fasb.org/extlink&amp;oid=120399901&amp;loc=d3e537907-122884<br><br>Reference 9: http://www.xbrl.org/2003/role/exampleRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 280<br> -SubTopic 10<br> -Section 50<br> -Paragraph 31<br> -URI https://asc.fasb.org/extlink&amp;oid=126901519&amp;loc=d3e8924-108599<br><br>Reference 10: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 942<br> -SubTopic 220<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.9-04(15))<br> -URI https://asc.fasb.org/extlink&amp;oid=120399700&amp;loc=SL114874048-224260<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_IncomeLossFromContinuingOperationsBeforeIncomeTaxesExtraordinaryItemsNoncontrollingInterest</td>
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
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_IncomeStatementAbstract">
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
                                                                        <td style="white-space:nowrap;">us-gaap_IncomeStatementAbstract</td>
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
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_IncomeTaxExpenseBenefit">
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
                                                                <p>Amount of current income tax expense (benefit) and deferred income tax expense (benefit) pertaining to continuing operations.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 740<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SAB TOPIC 6.I.7)<br> -URI https://asc.fasb.org/extlink&amp;oid=122134291&amp;loc=d3e330036-122817<br><br>Reference 2: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 740<br> -SubTopic 10<br> -Section 50<br> -Paragraph 10<br> -URI https://asc.fasb.org/extlink&amp;oid=121826272&amp;loc=d3e32672-109319<br><br>Reference 3: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 280<br> -SubTopic 10<br> -Section 50<br> -Paragraph 22<br> -Subparagraph (h)<br> -URI https://asc.fasb.org/extlink&amp;oid=126901519&amp;loc=d3e8736-108599<br><br>Reference 4: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 235<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.4-08(h))<br> -URI https://asc.fasb.org/extlink&amp;oid=120395691&amp;loc=d3e23780-122690<br><br>Reference 5: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 250<br> -SubTopic 10<br> -Section 50<br> -Paragraph 9<br> -URI https://asc.fasb.org/extlink&amp;oid=124431687&amp;loc=d3e22663-107794<br><br>Reference 6: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 740<br> -SubTopic 20<br> -Section 45<br> -Paragraph 2<br> -Subparagraph (a)<br> -URI https://asc.fasb.org/extlink&amp;oid=123586238&amp;loc=d3e38679-109324<br><br>Reference 7: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 944<br> -SubTopic 220<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.7-04(9))<br> -URI https://asc.fasb.org/extlink&amp;oid=120400993&amp;loc=SL114874131-224263<br><br>Reference 8: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 250<br> -SubTopic 10<br> -Section 50<br> -Paragraph 8<br> -URI https://asc.fasb.org/extlink&amp;oid=124431687&amp;loc=d3e22658-107794<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_IncomeTaxExpenseBenefit</td>
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
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_InterestExpense">
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
                                                                <p>Amount of the cost of borrowed funds accounted for as interest expense.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 835<br> -SubTopic 20<br> -Section 50<br> -Paragraph 1<br> -Subparagraph (a)<br> -URI https://asc.fasb.org/extlink&amp;oid=6450988&amp;loc=d3e26243-108391<br><br>Reference 2: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 835<br> -SubTopic 30<br> -Section 45<br> -Paragraph 3<br> -URI https://asc.fasb.org/extlink&amp;oid=124435984&amp;loc=d3e28555-108399<br><br>Reference 3: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 280<br> -SubTopic 10<br> -Section 50<br> -Paragraph 22<br> -Subparagraph (d)<br> -URI https://asc.fasb.org/extlink&amp;oid=126901519&amp;loc=d3e8736-108599<br><br>Reference 4: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 220<br> -SubTopic 10<br> -Section S99<br> -Paragraph 2<br> -Subparagraph (210.5-03(11))<br> -URI https://asc.fasb.org/extlink&amp;oid=126953954&amp;loc=SL114868664-224227<br><br>Reference 5: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 942<br> -SubTopic 220<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.9-04.9)<br> -URI https://asc.fasb.org/extlink&amp;oid=120399700&amp;loc=SL114874048-224260<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_InterestExpense</td>
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
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_NetIncomeLoss">
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
                                                                <p>The portion of profit or loss for the period, net of income taxes, which is attributable to the parent.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 942<br> -SubTopic 220<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.9-04(22))<br> -URI https://asc.fasb.org/extlink&amp;oid=120399700&amp;loc=SL114874048-224260<br><br>Reference 2: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 280<br> -SubTopic 10<br> -Section 50<br> -Paragraph 32<br> -Subparagraph (f)<br> -URI https://asc.fasb.org/extlink&amp;oid=126901519&amp;loc=d3e8933-108599<br><br>Reference 3: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 250<br> -SubTopic 10<br> -Section 50<br> -Paragraph 4<br> -URI https://asc.fasb.org/extlink&amp;oid=124431687&amp;loc=d3e22595-107794<br><br>Reference 4: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 944<br> -SubTopic 220<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.7-04(18))<br> -URI https://asc.fasb.org/extlink&amp;oid=120400993&amp;loc=SL114874131-224263<br><br>Reference 5: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 815<br> -SubTopic 40<br> -Section 65<br> -Paragraph 1<br> -Subparagraph (f)<br> -URI https://asc.fasb.org/extlink&amp;oid=126732423&amp;loc=SL123482106-238011<br><br>Reference 6: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 220<br> -SubTopic 10<br> -Section 50<br> -Paragraph 6<br> -URI https://asc.fasb.org/extlink&amp;oid=124431353&amp;loc=SL124452729-227067<br><br>Reference 7: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1B<br> -Subparagraph (SX 210.13-02(a)(5))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442552-122756<br><br>Reference 8: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 220<br> -SubTopic 10<br> -Section S99<br> -Paragraph 2<br> -Subparagraph (SX 210.5-03(20))<br> -URI https://asc.fasb.org/extlink&amp;oid=126953954&amp;loc=SL114868664-224227<br><br>Reference 9: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 230<br> -SubTopic 10<br> -Section 45<br> -Paragraph 28<br> -URI https://asc.fasb.org/extlink&amp;oid=126954810&amp;loc=d3e3602-108585<br><br>Reference 10: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 250<br> -SubTopic 10<br> -Section 50<br> -Paragraph 1<br> -Subparagraph (b)(2)<br> -URI https://asc.fasb.org/extlink&amp;oid=124431687&amp;loc=d3e22499-107794<br><br>Reference 11: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1A<br> -Subparagraph (SX 210.13-01(a)(4)(iv))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442526-122756<br><br>Reference 12: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1A<br> -Subparagraph (SX 210.13-01(a)(4)(iii)(A))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442526-122756<br><br>Reference 13: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1B<br> -Subparagraph (SX 210.13-02(a)(4)(i))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442552-122756<br><br>Reference 14: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1A<br> -Subparagraph (SX 210.13-01(a)(4)(i))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442526-122756<br><br>Reference 15: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 250<br> -SubTopic 10<br> -Section 50<br> -Paragraph 9<br> -URI https://asc.fasb.org/extlink&amp;oid=124431687&amp;loc=d3e22663-107794<br><br>Reference 16: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1B<br> -Subparagraph (SX 210.13-02(a)(4)(iv))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442552-122756<br><br>Reference 17: http://www.xbrl.org/2009/role/commonPracticeRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1A<br> -Subparagraph (SX 210.13-01(a)(4)(ii))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442526-122756<br><br>Reference 18: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 825<br> -SubTopic 10<br> -Section 50<br> -Paragraph 28<br> -Subparagraph (f)<br> -URI https://asc.fasb.org/extlink&amp;oid=123596393&amp;loc=d3e14064-108612<br><br>Reference 19: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 250<br> -SubTopic 10<br> -Section 50<br> -Paragraph 3<br> -URI https://asc.fasb.org/extlink&amp;oid=124431687&amp;loc=d3e22583-107794<br><br>Reference 20: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 235<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SX 210.4-08(g)(1)(ii))<br> -URI https://asc.fasb.org/extlink&amp;oid=120395691&amp;loc=d3e23780-122690<br><br>Reference 21: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 260<br> -SubTopic 10<br> -Section 45<br> -Paragraph 60B<br> -Subparagraph (a)<br> -URI https://asc.fasb.org/extlink&amp;oid=126958026&amp;loc=SL5780133-109256<br><br>Reference 22: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 323<br> -SubTopic 10<br> -Section 50<br> -Paragraph 3<br> -Subparagraph (c)<br> -URI https://asc.fasb.org/extlink&amp;oid=114001798&amp;loc=d3e33918-111571<br><br>Reference 23: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 250<br> -SubTopic 10<br> -Section 50<br> -Paragraph 8<br> -URI https://asc.fasb.org/extlink&amp;oid=124431687&amp;loc=d3e22658-107794<br><br>Reference 24: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 220<br> -SubTopic 10<br> -Section 45<br> -Paragraph 1A<br> -Subparagraph (a)<br> -URI https://asc.fasb.org/extlink&amp;oid=126968391&amp;loc=SL7669619-108580<br><br>Reference 25: http://www.xbrl.org/2003/role/exampleRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 280<br> -SubTopic 10<br> -Section 50<br> -Paragraph 31<br> -URI https://asc.fasb.org/extlink&amp;oid=126901519&amp;loc=d3e8924-108599<br><br>Reference 26: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 250<br> -SubTopic 10<br> -Section 50<br> -Paragraph 11<br> -Subparagraph (b)<br> -URI https://asc.fasb.org/extlink&amp;oid=124431687&amp;loc=d3e22694-107794<br><br>Reference 27: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 250<br> -SubTopic 10<br> -Section 50<br> -Paragraph 11<br> -Subparagraph (a)<br> -URI https://asc.fasb.org/extlink&amp;oid=124431687&amp;loc=d3e22694-107794<br><br>Reference 28: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 205<br> -SubTopic 20<br> -Section 50<br> -Paragraph 7<br> -URI https://asc.fasb.org/extlink&amp;oid=109222650&amp;loc=SL51721683-107760<br><br>Reference 29: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 220<br> -SubTopic 10<br> -Section 45<br> -Paragraph 1B<br> -Subparagraph (a)<br> -URI https://asc.fasb.org/extlink&amp;oid=126968391&amp;loc=SL7669625-108580<br><br>Reference 30: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 280<br> -SubTopic 10<br> -Section 50<br> -Paragraph 22<br> -URI https://asc.fasb.org/extlink&amp;oid=126901519&amp;loc=d3e8736-108599<br><br>Reference 31: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1A<br> -Subparagraph (SX 210.13-01(a)(5))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442526-122756<br><br>Reference 32: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1B<br> -Subparagraph (SX 210.13-02(a)(4)(iii)(B))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442552-122756<br><br>Reference 33: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 470<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1B<br> -Subparagraph (SX 210.13-02(a)(4)(iii)(A))<br> -URI https://asc.fasb.org/extlink&amp;oid=126975872&amp;loc=SL124442552-122756<br><br>Reference 34: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 280<br> -SubTopic 10<br> -Section 50<br> -Paragraph 30<br> -Subparagraph (b)<br> -URI https://asc.fasb.org/extlink&amp;oid=126901519&amp;loc=d3e8906-108599<br><br>Reference 35: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 280<br> -SubTopic 10<br> -Section 50<br> -Paragraph 32<br> -Subparagraph (c)<br> -URI https://asc.fasb.org/extlink&amp;oid=126901519&amp;loc=d3e8933-108599<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_NetIncomeLoss</td>
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
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_OperatingExpenses">
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
                                                                <p>Generally recurring costs associated with normal operations except for the portion of these expenses which can be clearly related to production and included in cost of sales or services. Includes selling, general and administrative expense.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;"><p>No definition available.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_OperatingExpenses</td>
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
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_OperatingExpensesAbstract">
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
                                                                        <td style="white-space:nowrap;">us-gaap_OperatingExpensesAbstract</td>
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
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_OperatingIncomeLoss">
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
                                                                <p>The net result for the period of deducting operating expenses from operating revenues.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://www.xbrl.org/2003/role/exampleRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 280<br> -SubTopic 10<br> -Section 50<br> -Paragraph 31<br> -URI https://asc.fasb.org/extlink&amp;oid=126901519&amp;loc=d3e8924-108599<br><br>Reference 2: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 280<br> -SubTopic 10<br> -Section 50<br> -Paragraph 30<br> -Subparagraph (b)<br> -URI https://asc.fasb.org/extlink&amp;oid=126901519&amp;loc=d3e8906-108599<br><br>Reference 3: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 280<br> -SubTopic 10<br> -Section 50<br> -Paragraph 32<br> -Subparagraph (c)<br> -URI https://asc.fasb.org/extlink&amp;oid=126901519&amp;loc=d3e8933-108599<br><br>Reference 4: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 280<br> -SubTopic 10<br> -Section 50<br> -Paragraph 32<br> -Subparagraph (f)<br> -URI https://asc.fasb.org/extlink&amp;oid=126901519&amp;loc=d3e8933-108599<br><br>Reference 5: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 280<br> -SubTopic 10<br> -Section 50<br> -Paragraph 22<br> -URI https://asc.fasb.org/extlink&amp;oid=126901519&amp;loc=d3e8736-108599<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_OperatingIncomeLoss</td>
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
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_OtherNonoperatingIncomeExpense">
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
                                                                <p>Amount of income (expense) related to nonoperating activities, classified as other.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://fasb.org/us-gaap/role/ref/legacyRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 220<br> -SubTopic 10<br> -Section S99<br> -Paragraph 2<br> -Subparagraph (SX 210.5-03.9)<br> -URI https://asc.fasb.org/extlink&amp;oid=126953954&amp;loc=SL114868664-224227<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_OtherNonoperatingIncomeExpense</td>
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
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_RevenueFromContractWithCustomerExcludingAssessedTax">
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
                                                                <p>Amount, excluding tax collected from customer, of revenue from satisfaction of performance obligation by transferring promised good or service to customer. Tax collected from customer is tax assessed by governmental authority that is both imposed on and concurrent with specific revenue-producing transaction, including, but not limited to, sales, use, value added and excise.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 280<br> -SubTopic 10<br> -Section 50<br> -Paragraph 30<br> -Subparagraph (a)<br> -URI https://asc.fasb.org/extlink&amp;oid=126901519&amp;loc=d3e8906-108599<br><br>Reference 2: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 280<br> -SubTopic 10<br> -Section 50<br> -Paragraph 40<br> -URI https://asc.fasb.org/extlink&amp;oid=126901519&amp;loc=d3e9031-108599<br><br>Reference 3: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 280<br> -SubTopic 10<br> -Section 50<br> -Paragraph 41<br> -Subparagraph (a)<br> -URI https://asc.fasb.org/extlink&amp;oid=126901519&amp;loc=d3e9038-108599<br><br>Reference 4: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 280<br> -SubTopic 10<br> -Section 50<br> -Paragraph 32<br> -Subparagraph (b)<br> -URI https://asc.fasb.org/extlink&amp;oid=126901519&amp;loc=d3e8933-108599<br><br>Reference 5: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 280<br> -SubTopic 10<br> -Section 50<br> -Paragraph 32<br> -Subparagraph (a)<br> -URI https://asc.fasb.org/extlink&amp;oid=126901519&amp;loc=d3e8933-108599<br><br>Reference 6: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 606<br> -SubTopic 10<br> -Section 50<br> -Paragraph 4<br> -Subparagraph (a)<br> -URI https://asc.fasb.org/extlink&amp;oid=126920106&amp;loc=SL49130543-203045<br><br>Reference 7: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 280<br> -SubTopic 10<br> -Section 50<br> -Paragraph 22<br> -Subparagraph (b)<br> -URI https://asc.fasb.org/extlink&amp;oid=126901519&amp;loc=d3e8736-108599<br><br>Reference 8: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 280<br> -SubTopic 10<br> -Section 50<br> -Paragraph 22<br> -Subparagraph (a)<br> -URI https://asc.fasb.org/extlink&amp;oid=126901519&amp;loc=d3e8736-108599<br><br>Reference 9: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 280<br> -SubTopic 10<br> -Section 50<br> -Paragraph 42<br> -URI https://asc.fasb.org/extlink&amp;oid=126901519&amp;loc=d3e9054-108599<br><br>Reference 10: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 606<br> -SubTopic 10<br> -Section 50<br> -Paragraph 5<br> -URI https://asc.fasb.org/extlink&amp;oid=126920106&amp;loc=SL49130545-203045<br><br>Reference 11: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 924<br> -SubTopic 10<br> -Section S99<br> -Paragraph 1<br> -Subparagraph (SAB Topic 11.L)<br> -URI https://asc.fasb.org/extlink&amp;oid=6472922&amp;loc=d3e499488-122856<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_RevenueFromContractWithCustomerExcludingAssessedTax</td>
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
                                            <table border="0" cellpadding="0" cellspacing="0" class="authRefData" style="display: none;" id="defref_us-gaap_WeightedAverageNumberOfSharesOutstandingBasic">
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
                                                                <p>Number of [basic] shares or units, after adjustment for contingently issuable shares or units and other shares or units not deemed outstanding, determined by relating the portion of time within a reporting period that common shares or units have been outstanding to the total time in that period.</p>
                                                            </div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ References</a>
                                                            <div style="display: none;">
                                                                <p>Reference 1: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 260<br> -SubTopic 10<br> -Section 50<br> -Paragraph 1<br> -Subparagraph (a)<br> -URI https://asc.fasb.org/extlink&amp;oid=124432515&amp;loc=d3e3550-109257<br><br>Reference 2: http://www.xbrl.org/2003/role/disclosureRef<br> -Publisher FASB<br> -Name Accounting Standards Codification<br> -Topic 260<br> -SubTopic 10<br> -Section 45<br> -Paragraph 10<br> -URI https://asc.fasb.org/extlink&amp;oid=126958026&amp;loc=d3e1448-109256<br>
                                                                </p></div>
                                                            <a href="javascript:void(0);" onclick="Show.toggleNext( this );">+ Details</a>
                                                            <div style="display: none;">
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><strong> Name:</strong></td>
                                                                        <td style="white-space:nowrap;">us-gaap_WeightedAverageNumberOfSharesOutstandingBasic</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-right: 4px;white-space:nowrap;">
                                                                            <strong> Namespace Prefix:</strong></td>
                                                                        <td>us-gaap_</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong> Data Type:</strong></td>
                                                                        <td>xbrli:sharesItemType</td>
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

