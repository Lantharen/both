@extends('layouts.base')

@section('page-title', 'Posts – Marathon Digital Holdings')

@section('page-class', 'blog fl-theme-builder-header fl-theme-builder-header-header fl-theme-builder-footer fl-theme-builder-footer-footer fl-theme-builder-archive fl-theme-builder-archive-posts-archive fl-framework-base fl-preset-default fl-full-width fl-search-active fl-builder-breakpoint-large')

@section('page-content')

    <div class="fl-page" style="padding-top: 0px;">

        @include('pages.includes.header')


        <div class="uabb-js-breakpoint" style="display: none;"></div>
        <div id="fl-main-content" class="fl-page-content" itemprop="mainContentOfPage" role="main">

            <div class="fl-builder-content fl-builder-content-179 fl-builder-global-templates-locked" data-post-id="179">
                <div class="fl-row fl-row-full-width fl-row-bg-photo fl-node-603e97388c688 fl-row-bg-overlay" data-node="603e97388c688">
                    <div class="fl-row-content-wrap">
                        <div class="fl-row-content fl-row-fixed-width fl-node-content">

                            <div class="fl-col-group fl-node-603e97388c710" data-node="603e97388c710">
                                <div class="fl-col fl-node-603e97388c712" data-node="603e97388c712">
                                    <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-heading fl-node-603e97388c713" data-node="603e97388c713">
                                            <div class="fl-module-content fl-node-content">
                                                <h1 class="fl-heading">
                                                    <span class="fl-heading-text">Posts</span>
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fl-row fl-row-full-width fl-row-bg-color fl-node-603e95a44c63b" data-node="603e95a44c63b">
                    <div class="fl-row-content-wrap">
                        <div class="fl-row-content fl-row-fixed-width fl-node-content">

                            <div class="fl-col-group fl-node-603e95c4b05ca" data-node="603e95c4b05ca">
                                <div class="fl-col fl-node-603e95c4b069b" data-node="603e95c4b069b">
                                    <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-blog-posts fl-node-603e95c4b0557" data-node="603e95c4b0557">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-blog-posts uabb-blog-posts-grid uabb-post-grid-3 " style="position: relative; height: 667.062px;">
                                                    <div class="uabb-blog-posts-col-3 uabb-post-wrapper    uabb-blog-posts-grid-item-603e95c4b0557 " style="position: absolute; left: 0px; top: 0px;">
                                                        <div class="uabb-blog-posts-shadow clearfix" style="height: 637.078px;">

                                                            <div class="uabb-blog-post-inner-wrap uabb-thumbnail-position-top  uabb-empty-img">

                                                                <div class="uabb-post-thumbnail  ">

                                                                    <a href="{{ route('marathon-responds-to-congressional-inquiry') }}" target="_self" title="Marathon Responds To Congressional Inquiry">
                                                                        <img decoding="async" src="{{ asset('/wp-content/uploads/2022/02/Untitled-3840-×-2160-px-5-3840x2160.png') }}" alt="">
                                                                    </a>

                                                                </div>

                                                                <div class="uabb-blog-post-content">
                                                                    <h3 class="uabb-post-heading uabb-blog-post-section">
                                                                        <a href="{{ route('marathon-responds-to-congressional-inquiry') }}" title="Marathon Responds To Congressional Inquiry" tabindex="0" class="">Marathon Responds To Congressional Inquiry</a>
                                                                    </h3>
                                                                    <h5 class="uabb-post-meta uabb-blog-post-section">
							<span class="uabb-meta-date">
				<i aria-hidden="true" class=""></i>
			Feb 14, 2022			</span>
                                                                    </h5>
                                                                    <div class="uabb-blog-posts-description uabb-blog-post-section uabb-text-editor">On January 27, 2022, Marathon Digital Holdings, Inc.&nbsp;(NASDAQ:MARA) (“Marathon” or “Company”), one of the largest enterprise Bitcoin self-mining companies in North America,&nbsp;received a letter from several members of Congress regarding the Company’s bitcoin mining operations. The original letter Marathon received is accessible on Senator Elizabeth Warren’s website. On February 10, 2022, the Company issued their…</div>
                                                                    <span class="uabb-read-more-text uabb-blog-post-section"><a href="{{ route('marathon-responds-to-congressional-inquiry') }}" target="_self">Read More <span class="uabb-next-right-arrow">→</span></a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="uabb-post-grid-sizer"></div>
                                                </div>
                                                <div class="uabb-blogs-pagination">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uabb-js-breakpoint" style="display: none;"></div>
        </div><!-- .fl-page-content -->

        @include('pages.includes.footer')

        <div class="uabb-js-breakpoint" style="display: none;"></div>
    </div>

@endsection

