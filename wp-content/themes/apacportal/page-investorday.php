<!DOCTYPE html >
<html lang="en" dir="ltr" class="ms-isBot">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=10" />
		<meta name="GENERATOR" content="Microsoft SharePoint" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<meta http-equiv="Expires" content="0" />
		<title>FCA Investor Day Presentations - APAConnect, Fiat Chrysler</title>
		<link href="<?= site_url() ?>/wp-content/uploads/investorday/style/FCAInvestorDay/css/screen.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src='<?= site_url() ?>/wp-content/uploads/investorday/style/FCAInvestorDay/js/lib/modernizr-2.7.2.min.js'></script>
        <script type="text/javascript" src='<?= site_url() ?>/wp-content/uploads/investorday/style/FCAInvestorDay/js/lib/jquery-1.10.2.min.js'></script>
        <script type="text/javascript" src='<?= site_url() ?>/wp-content/uploads/investorday/style/FCAInvestorDay/js/lib/plugins.js'></script>
        <script type="text/javascript" src='<?= site_url() ?>/wp-content/uploads/investorday/style/FCAInvestorDay/js/scripts.js'></script>

        <link type="text/xml" rel="alternate" href="http://apaconnect.fiat.chrysler.com/investorday/_vti_bin/spsdisco.aspx" />

		<link rel="canonical" href="Home.aspx" />

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /></head>
	<body class="interna" onhashchange="if (typeof(_spBodyOnHashChange) != 'undefined') _spBodyOnHashChange();">

		<script type="text/javascript">
			//<![CDATA[
			var MSOWebPartPageFormName = 'aspnetForm';
			var g_presenceEnabled = true;
			var g_wsaEnabled = false;
			var g_wsaQoSEnabled = false;
			var g_wsaQoSDataPoints = [];
			var g_wsaLCID = 1033;
			var g_wsaListTemplateId = 850;
			var g_wsaSiteTemplateId = 'BLANKINTERNET#0';
			var _fV4UI = true;
			var _spPageContextInfo = {webServerRelativeUrl: "\u002finvestorday", webAbsoluteUrl: "http:\u002f\u002fapaconnect.fiat.chrysler.com\u002finvestorday", siteAbsoluteUrl: "http:\u002f\u002fapaconnect.fiat.chrysler.com\u002finvestorday", serverRequestPath: "\u002finvestorday\u002fPages\u002fHome.aspx", layoutsUrl: "_layouts\u002f15", webTitle: "FCA_Investorday Site", webTemplate: "53", tenantAppVersion: "0", webLogoUrl: "_layouts\u002f15\u002fimages\u002fsiteicon.png", webLanguage: 1033, currentLanguage: 1033, currentUICultureName: "en-US", currentCultureName: "en-US", clientServerTimeDelta: new Date("2014-05-12T03:16:40.3206657Z") - new Date(), siteClientTag: "4$$15.0.4481.1005", crossDomainPhotosEnabled: false, webUIVersion: 15, webPermMasks: {High: 16, Low: 196673}, pageListId: "{f327d37c-3a0a-447d-9b16-9c2ee3698a67}", pageItemId: 13, pagePersonalizationScope: 1, alertsEnabled: true, siteServerRelativeUrl: "\u002finvestorday", allowSilverlightPrompt: 'True'};
			;//]]>
		</script>

		<script type="text/javascript">
			//<![CDATA[
			(function() {

				if (typeof (_spBodyOnLoadFunctions) === 'undefined' || _spBodyOnLoadFunctions === null) {
					return;
				}
				_spBodyOnLoadFunctions.push(function() {

					if (typeof (SPClientTemplates) === 'undefined' || SPClientTemplates === null || (typeof (APD_InAssetPicker) === 'function' && APD_InAssetPicker())) {
						return;
					}

					var renderFollowFooter = function(renderCtx, calloutActionMenu)
					{
						if (renderCtx.ListTemplateType == 700)
							myDocsActionsMenuPopulator(renderCtx, calloutActionMenu);
						else
							CalloutOnPostRenderTemplate(renderCtx, calloutActionMenu);

						var listItem = renderCtx.CurrentItem;
						if (typeof (listItem) === 'undefined' || listItem === null) {
							return;
						}
						if (listItem.FSObjType == 0) {
							calloutActionMenu.addAction(new CalloutAction({
								text: Strings.STS.L_CalloutFollowAction,
								tooltip: Strings.STS.L_CalloutFollowAction_Tooltip,
								onClickCallback: function(calloutActionClickEvent, calloutAction) {
									var callout = GetCalloutFromRenderCtx(renderCtx);
									if (!(typeof (callout) === 'undefined' || callout === null))
										callout.close();
									SP.SOD.executeFunc('followingcommon.js', 'FollowSelectedDocument', function() {
										FollowSelectedDocument(renderCtx);
									});
								}
							}));
						}
					};

					var registerOverride = function(id) {
						var followingOverridePostRenderCtx = {};
						followingOverridePostRenderCtx.BaseViewID = 'Callout';
						followingOverridePostRenderCtx.ListTemplateType = id;
						followingOverridePostRenderCtx.Templates = {};
						followingOverridePostRenderCtx.Templates.Footer = function(renderCtx) {
							var renderECB;
							if (typeof (isSharedWithMeView) === 'undefined' || isSharedWithMeView === null) {
								renderECB = true;
							} else {
								var viewCtx = getViewCtxFromCalloutCtx(renderCtx);
								renderECB = !isSharedWithMeView(viewCtx);
							}
							return CalloutRenderFooterTemplate(renderCtx, renderFollowFooter, renderECB);
						};
						SPClientTemplates.TemplateManager.RegisterTemplateOverrides(followingOverridePostRenderCtx);
					}
					registerOverride(101);
					registerOverride(700);
				});
			})();
			(function() {

				if (typeof (_spBodyOnLoadFunctions) === 'undefined' || _spBodyOnLoadFunctions === null) {
					return;
				}
				_spBodyOnLoadFunctions.push(function()
				{
					ExecuteOrDelayUntilScriptLoaded(
							function()
							{
								var pairs = SP.ScriptHelpers.getDocumentQueryPairs();
								var followDoc, itemId, listId, docName;
								for (var key in pairs)
								{
									if (key.toLowerCase() == 'followdocument')
										followDoc = pairs[key];
									else if (key.toLowerCase() == 'itemid')
										itemId = pairs[key];
									else if (key.toLowerCase() == 'listid')
										listId = pairs[key];
									else if (key.toLowerCase() == 'docname')
										docName = decodeURI(pairs[key]);
								}

								if (followDoc != null && followDoc == '1' && listId != null && itemId != null && docName != null)
								{
									SP.SOD.executeFunc('followingcommon.js', 'FollowDocumentFromEmail', function()
									{
										FollowDocumentFromEmail(itemId, listId, docName);
									});
								}

							}, 'SP.init.js');

				});
			})();
			if (typeof (DeferWebFormInitCallback) == 'function')
				DeferWebFormInitCallback();//]]>
		</script>





		<div id="s4-workspace">
			<div id="s4-bodyContainer">
				<div class="container-fluid">
					<div class="wrapper-site container">
						<!--header-->
						<header id="header" class="row">
                            <p class="logo-top col-xs-12">
                                <a href="<?=site_url()?>"><img src="<?= site_url() ?>/wp-content/uploads/investorday/style/FCAInvestorDay/img/shared/logo_top.png" class="img-responsive" /></a>
                            </p>
                            <p class="h-top col-xs-12">
                                <img src="<?= site_url() ?>/wp-content/uploads/investorday/style/FCAInvestorDay/img/shared/header_top.gif" class="img-responsive" />
                            </p>
                        </header>
						<!--//header-->
						<!--body-->
						<div class="body">
							<span id="DeltaPlaceHolderMain">

								<div class="page-intro">
									<!--<h1>Lorem ipsum - H1 INTRO</h1>
										 <h2>Lorem ipsum dolor sit amet consectetur adipiscing elit - H2 INTRO</h2>
										 <p>INTRO Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="">Donec nec erat magna.</a> Sed mollis varius nunc, vel rutrum turpis adipiscing sed. Praesent sodales odio vitae nisl aliquet, et lobortis ligula pellentesque. Donec rhoncus urna sapien, eu rhoncus dolor luctus tincidunt. Integer at eros risus. Maecenas lobortis, mi id eleifend elementum, metus est porta justo, in dignissim nunc dui sit amet mi. Vivamus porttitor aliquet magna vitae porttitor.</p>-->

								</div>
								<div class="grid-cards">
									<div class='row cards-row'><div class='card col-sm-12'><div class='row'><div class='c-card col-md-12'> <div class='row'><div class='pic col-sm-2'><img src='<?= site_url() ?>/wp-content/uploads/investorday/images/sergio_marchionne.jpg' class='img-responsive'></div><div class='els col-sm-10'><div class='name'><h3>Sergio Marchionne</h3><h4>Chief Executive Officer, Fiat S.p.A. - Chairman and Chief Executive Officer, Chrysler Group LLC </h4></div><div class='list-cp-incard'><div class='row'><p data-doctype='presentation' class='col-xs-8 col-sm-10'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/Opening_Comments.pdf' class='title' target='_blank'>Opening Comments</a></p><p data-doctype='presentation' class='col-xs-3 col-xs-offset-1  col-sm-2 col-sm-offset-0'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/Opening_Comments.pdf' target='_blank'><span class='ico ico-pdf-blue'></span><span class='mb'>3.0MB</span></a></p></div></div></div></div></div></div></div></div><div class='row cards-row'><div class='card col-sm-12'><div class='row'><div class='c-card col-md-12'> <div class='row'><div class='pic col-sm-2'><img src='<?= site_url() ?>/wp-content/uploads/investorday/images/mike_manley.jpg' class='img-responsive'></div><div class='els col-sm-10'><div class='name'><h3>Mike Manley</h3><h4>Chief Operating Officer APAC - Head of Jeep brand </h4></div><div class='list-cp-incard'><div class='row'><p data-doctype='presentation' class='col-xs-8 col-sm-10'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/Jeep_Brand.pdf' class='title' target='_blank'>Jeep Brand</a></p><p data-doctype='presentation' class='col-xs-3 col-xs-offset-1  col-sm-2 col-sm-offset-0'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/Jeep_Brand.pdf' target='_blank'><span class='ico ico-pdf-blue'></span><span class='mb'>3.4MB</span></a></p></div></div></div></div></div></div></div></div><div class='row cards-row'><div class='card col-sm-12'><div class='row'><div class='c-card col-md-12'> <div class='row'><div class='pic col-sm-2'><img src='<?= site_url() ?>/wp-content/uploads/investorday/images/al_gardner.jpg' class='img-responsive'></div><div class='els col-sm-10'><div class='name'><h3>Al Gardner</h3><h4>President and Chief Executive Officer - Chrysler Brand, Chrysler Group LLC</h4></div><div class='list-cp-incard'><div class='row'><p data-doctype='presentation' class='col-xs-8 col-sm-10'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/Chrysler_Brand.pdf' class='title' target='_blank'>Chrysler Brand</a></p><p data-doctype='presentation' class='col-xs-3 col-xs-offset-1  col-sm-2 col-sm-offset-0'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/Chrysler_Brand.pdf' target='_blank'><span class='ico ico-pdf-blue'></span><span class='mb'>2.8MB</span></a></p></div></div></div></div></div></div></div></div><div class='row cards-row'><div class='card col-sm-12'><div class='row'><div class='c-card col-md-12'> <div class='row'><div class='pic col-sm-2'><img src='<?= site_url() ?>/wp-content/uploads/investorday/images/timothy_kunikis.jpg' class='img-responsive'></div><div class='els col-sm-10'><div class='name'><h3>Tim Kuniskis</h3><h4>President and Chief Executive Officer - Dodge Brand, Chrysler Group LLC</h4></div><div class='list-cp-incard'><div class='row'><p data-doctype='presentation' class='col-xs-8 col-sm-10'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/Dodge_Brand.pdf' class='title' target='_blank'>Dodge Brand</a></p><p data-doctype='presentation' class='col-xs-3 col-xs-offset-1  col-sm-2 col-sm-offset-0'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/Dodge_Brand.pdf' target='_blank'><span class='ico ico-pdf-blue'></span><span class='mb'>2.0MB</span></a></p></div></div></div></div></div></div></div></div><div class='row cards-row'><div class='card col-sm-12'><div class='row'><div class='c-card col-md-12'> <div class='row'><div class='pic col-sm-2'><img src='<?= site_url() ?>/wp-content/uploads/investorday/images/olivier_francois.jpg' class='img-responsive'></div><div class='els col-sm-10'><div class='name'><h3>Olivier François</h3><h4>Head of Fiat Brand - Chief Marketing Officer </h4></div><div class='list-cp-incard'><div class='row'><p data-doctype='presentation' class='col-xs-8 col-sm-10'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/Fiat_Brand.pdf' class='title' target='_blank'>Fiat Brand</a></p><p data-doctype='presentation' class='col-xs-3 col-xs-offset-1  col-sm-2 col-sm-offset-0'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/Fiat_Brand.pdf' target='_blank'><span class='ico ico-pdf-blue'></span><span class='mb'>4.9MB</span></a></p></div></div></div></div></div></div></div></div><div class='row cards-row'><div class='card col-sm-12'><div class='row'><div class='c-card col-md-12'> <div class='row'><div class='pic col-sm-2'><img src='<?= site_url() ?>/wp-content/uploads/investorday/images/harald_wester.jpg' class='img-responsive'></div><div class='els col-sm-10'><div class='name'><h3>Harald Wester</h3><h4>Chief Technology Officer - Head of Alfa Romeo and Maserati </h4></div><div class='list-cp-incard'><div class='row'><p data-doctype='presentation' class='col-xs-8 col-sm-10'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/Alfa_Brand.pdf' class='title' target='_blank'>Alfa Romeo Brand</a></p><p data-doctype='presentation' class='col-xs-3 col-xs-offset-1  col-sm-2 col-sm-offset-0'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/Alfa_Brand.pdf' target='_blank'><span class='ico ico-pdf-blue'></span><span class='mb'>2.5MB</span></a></p></div></div></div></div></div></div></div></div><div class='row cards-row'><div class='card col-sm-12'><div class='row'><div class='c-card col-md-12'> <div class='row'><div class='pic col-sm-2'><img src='<?= site_url() ?>/wp-content/uploads/investorday/images/reid_bigland.jpg' class='img-responsive'></div><div class='els col-sm-10'><div class='name'><h3>Reid Bigland</h3><h4>Head of Ram Brand </h4></div><div class='list-cp-incard'><div class='row'><p data-doctype='presentation' class='col-xs-8 col-sm-10'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/RAM_FIAT_PROF.pdf' class='title' target='_blank'>Ram Brand and Fiat Professional</a></p><p data-doctype='presentation' class='col-xs-3 col-xs-offset-1  col-sm-2 col-sm-offset-0'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/RAM_FIAT_PROF.pdf' target='_blank'><span class='ico ico-pdf-blue'></span><span class='mb'>6.6MB</span></a></p></div></div></div></div></div></div></div></div><div class='row cards-row'><div class='card col-sm-12'><div class='row'><div class='c-card col-md-12'> <div class='row'><div class='pic col-sm-2'><img src='<?= site_url() ?>/wp-content/uploads/investorday/images/harald_wester.jpg' class='img-responsive'></div><div class='els col-sm-10'><div class='name'><h3>Harald Wester</h3><h4>Chief Technology Officer - Head of Alfa Romeo and Maserati</h4></div><div class='list-cp-incard'><div class='row'><p data-doctype='presentation' class='col-xs-8 col-sm-10'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/Maserati_Brand.pdf' class='title' target='_blank'>Maserati Brand</a></p><p data-doctype='presentation' class='col-xs-3 col-xs-offset-1  col-sm-2 col-sm-offset-0'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/Maserati_Brand.pdf' target='_blank'><span class='ico ico-pdf-blue'></span><span class='mb'>3.0MB</span></a></p></div></div></div></div></div></div></div></div><div class='row cards-row'><div class='card col-sm-12'><div class='row'><div class='c-card col-md-12'> <div class='row'><div class='pic col-sm-2'><img src='<?= site_url() ?>/wp-content/uploads/investorday/images/sergio_marchionne.jpg' class='img-responsive'></div><div class='els col-sm-10'><div class='name'><h3>Sergio Marchionne</h3><h4>Chief Executive Officer, Fiat S.p.A. - Chairman and Chief Executive Officer, Chrysler Group LLC</h4></div><div class='list-cp-incard'><div class='row'><p data-doctype='presentation' class='col-xs-8 col-sm-10'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/Ferrari.pdf' class='title' target='_blank'>Ferrari Brand</a></p><p data-doctype='presentation' class='col-xs-3 col-xs-offset-1  col-sm-2 col-sm-offset-0'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/Ferrari.pdf' target='_blank'><span class='ico ico-pdf-blue'></span><span class='mb'>3.0MB</span></a></p></div></div></div></div></div></div></div></div><div class='row cards-row'><div class='card col-sm-12'><div class='row'><div class='c-card col-md-12'> <div class='row'><div class='pic col-sm-2'><img src='<?= site_url() ?>/wp-content/uploads/investorday/images/mark_chernoby-scott_garberding.jpg' class='img-responsive'></div><div class='els col-sm-10'><div class='name'><h3>Mark Chernoby and Scott Garberding</h3><h4>Head of Product Portfolio Management and Head of Group Purchasing</h4></div><div class='list-cp-incard'><div class='row'><p data-doctype='presentation' class='col-xs-8 col-sm-10'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/Global_Architectures_and_Standardization.pdf' class='title' target='_blank'>Global Architectures & Standardization</a></p><p data-doctype='presentation' class='col-xs-3 col-xs-offset-1  col-sm-2 col-sm-offset-0'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/Global_Architectures_and_Standardization.pdf' target='_blank'><span class='ico ico-pdf-blue'></span><span class='mb'>4.5MB</span></a></p></div></div></div></div></div></div></div></div><div class='row cards-row'><div class='card col-sm-12'><div class='row'><div class='c-card col-md-12'> <div class='row'><div class='pic col-sm-2'><img src='<?= site_url() ?>/wp-content/uploads/investorday/images/robert_lee.jpg' class='img-responsive'></div><div class='els col-sm-10'><div class='name'><h3>Bob Lee</h3><h4>Powertrain Coordination </h4></div><div class='list-cp-incard'><div class='row'><p data-doctype='presentation' class='col-xs-8 col-sm-10'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/Global_Powertrain.pdf' class='title' target='_blank'>Global Powertrain</a></p><p data-doctype='presentation' class='col-xs-3 col-xs-offset-1  col-sm-2 col-sm-offset-0'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/Global_Powertrain.pdf' target='_blank'><span class='ico ico-pdf-blue'></span><span class='mb'>3.7MB</span></a></p></div></div></div></div></div></div></div></div><div class='row cards-row'><div class='card col-sm-12'><div class='row'><div class='c-card col-md-12'> <div class='row'><div class='pic col-sm-2'><img src='<?= site_url() ?>/wp-content/uploads/investorday/images/sergio_marchionne.jpg' class='img-responsive'></div><div class='els col-sm-10'><div class='name'><h3>Sergio Marchionne</h3><h4>Chief Executive Officer, Fiat S.p.A. - Chairman and Chief Executive Officer, Chrysler Group LLC</h4></div><div class='list-cp-incard'><div class='row'><p data-doctype='presentation' class='col-xs-8 col-sm-10'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/Components.pdf' class='title' target='_blank'>Components</a></p><p data-doctype='presentation' class='col-xs-3 col-xs-offset-1  col-sm-2 col-sm-offset-0'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/Components.pdf' target='_blank'><span class='ico ico-pdf-blue'></span><span class='mb'>1.2MB</span></a></p></div></div></div></div></div></div></div></div><div class='row cards-row'><div class='card col-sm-12'><div class='row'><div class='c-card col-md-12'> <div class='row'><div class='pic col-sm-2'><img src='<?= site_url() ?>/wp-content/uploads/investorday/images/sergio_marchionne.jpg' class='img-responsive'></div><div class='els col-sm-10'><div class='name'><h3>Sergio Marchionne</h3><h4>Chief Executive Officer, Fiat S.p.A. - Chairman and Chief Executive Officer, Chrysler Group LLC</h4></div><div class='list-cp-incard'><div class='row'><p data-doctype='presentation' class='col-xs-8 col-sm-10'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/NAFTA_Region.pdf' class='title' target='_blank'>NAFTA Region</a></p><p data-doctype='presentation' class='col-xs-3 col-xs-offset-1  col-sm-2 col-sm-offset-0'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/NAFTA_Region.pdf' target='_blank'><span class='ico ico-pdf-blue'></span><span class='mb'>3.9MB</span></a></p></div></div></div></div></div></div></div></div><div class='row cards-row'><div class='card col-sm-12'><div class='row'><div class='c-card col-md-12'> <div class='row'><div class='pic col-sm-2'><img src='<?= site_url() ?>/wp-content/uploads/investorday/images/alfredo_altavilla.jpg' class='img-responsive'></div><div class='els col-sm-10'><div class='name'><h3>Alfredo Altavilla</h3><h4>Chief Operating Officer Europe, Africa and Middle East (EMEA) - Head of Business Development </h4></div><div class='list-cp-incard'><div class='row'><p data-doctype='presentation' class='col-xs-8 col-sm-10'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/EMEA_Region.pdf' class='title' target='_blank'>EMEA Region</a></p><p data-doctype='presentation' class='col-xs-3 col-xs-offset-1  col-sm-2 col-sm-offset-0'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/EMEA_Region.pdf' target='_blank'><span class='ico ico-pdf-blue'></span><span class='mb'>5.8MB</span></a></p></div></div></div></div></div></div></div></div><div class='row cards-row'><div class='card col-sm-12'><div class='row'><div class='c-card col-md-12'> <div class='row'><div class='pic col-sm-2'><img src='<?= site_url() ?>/wp-content/uploads/investorday/images/cledorvino_belini-stefan_ketter.jpg' class='img-responsive'></div><div class='els col-sm-10'><div class='name'><h3>Cledorvino Belini and Stefan Ketter</h3><h4>Chief Operating Officer Latin America and Chief Manufacturing Officer </h4></div><div class='list-cp-incard'><div class='row'><p data-doctype='presentation' class='col-xs-8 col-sm-10'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/Latam_Region.pdf' class='title' target='_blank'>LATAM Region</a></p><p data-doctype='presentation' class='col-xs-3 col-xs-offset-1  col-sm-2 col-sm-offset-0'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/Latam_Region.pdf' target='_blank'><span class='ico ico-pdf-blue'></span><span class='mb'>4.5MB</span></a></p></div></div><div class='list-cp-incard'><div class='row'><p data-doctype='presentation' class='col-xs-8 col-sm-10'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/Pernambuco_Project_in_Brazil.pdf' class='title' target='_blank'>Pernambuco Project in Brazil</a></p><p data-doctype='presentation' class='col-xs-3 col-xs-offset-1  col-sm-2 col-sm-offset-0'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/Pernambuco_Project_in_Brazil.pdf' target='_blank'><span class='ico ico-pdf-blue'></span><span class='mb'>3.0MB</span></a></p></div></div></div></div></div></div></div></div><div class='row cards-row'><div class='card col-sm-12'><div class='row'><div class='c-card col-md-12'> <div class='row'><div class='pic col-sm-2'><img src='<?= site_url() ?>/wp-content/uploads/investorday/images/mike_manley.jpg' class='img-responsive'></div><div class='els col-sm-10'><div class='name'><h3>Mike Manley</h3><h4>Chief Operating Officer APAC - Head of Jeep brand</h4></div><div class='list-cp-incard'><div class='row'><p data-doctype='presentation' class='col-xs-8 col-sm-10'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/APAC_Region.pdf' class='title' target='_blank'>APAC Region</a></p><p data-doctype='presentation' class='col-xs-3 col-xs-offset-1  col-sm-2 col-sm-offset-0'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/APAC_Region.pdf' target='_blank'><span class='ico ico-pdf-blue'></span><span class='mb'>6.3MB</span></a></p></div></div></div></div></div></div></div></div><div class='row cards-row'><div class='card col-sm-12'><div class='row'><div class='c-card col-md-12'> <div class='row'><div class='pic col-sm-2'><img src='<?= site_url() ?>/wp-content/uploads/investorday/images/richard_palmer.jpg' class='img-responsive'></div><div class='els col-sm-10'><div class='name'><h3>Richard Palmer</h3><h4>Chief Financial Officer </h4></div><div class='list-cp-incard'><div class='row'><p data-doctype='presentation' class='col-xs-8 col-sm-10'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/Financial_Services.pdf' class='title' target='_blank'>Financial Services</a></p><p data-doctype='presentation' class='col-xs-3 col-xs-offset-1  col-sm-2 col-sm-offset-0'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/Financial_Services.pdf' target='_blank'><span class='ico ico-pdf-blue'></span><span class='mb'>1.5MB</span></a></p></div></div></div></div></div></div></div></div><div class='row row-webcast cards-row'><div class='card col-sm-12'><div class='row'><div class='c-card col-md-12'> <div class='row'><div class='els col-sm-12'><h3></h3><h4></h4><div class='list-cp-incard'><div class='row'><p data-doctype='webcast' class='col-xs-8 col-sm-10'><a href='http://www.fiatspa.com/Pages/Registration.aspx' class='title' target='_blank'>Webcast Conference Call – Fiat Group 2014 Q1 Financial Results</a></p><p data-doctype='webcast' class='col-xs-3 col-xs-offset-1  col-sm-2 col-sm-offset-0'><a href='http://www.fiatspa.com/Pages/Registration.aspx' target='_blank'><span class='ico ico-link-blue'></span></a></p></div></div></div></div></div></div></div></div><div class='row cards-row'><div class='card col-sm-12'><div class='row'><div class='c-card col-md-12'> <div class='row'><div class='pic col-sm-2'><img src='<?= site_url() ?>/wp-content/uploads/investorday/images/richard_palmer.jpg' class='img-responsive'></div><div class='els col-sm-10'><div class='name'><h3>Richard Palmer</h3><h4>Chief Financial Officer</h4></div><div class='list-cp-incard'><div class='row'><p data-doctype='presentation' class='col-xs-8 col-sm-10'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/Q1_2014_Results_Review.pdf' class='title' target='_blank'>Q1 Earnings</a></p><p data-doctype='presentation' class='col-xs-3 col-xs-offset-1  col-sm-2 col-sm-offset-0'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/Q1_2014_Results_Review.pdf' target='_blank'><span class='ico ico-pdf-blue'></span><span class='mb'>3.0MB</span></a></p></div></div></div></div></div></div></div></div><div class='row cards-row'><div class='card col-sm-12'><div class='row'><div class='c-card col-md-12'> <div class='row'><div class='pic col-sm-2'><img src='<?= site_url() ?>/wp-content/uploads/investorday/images/richard_palmer.jpg' class='img-responsive'></div><div class='els col-sm-10'><div class='name'><h3>Richard Palmer</h3><h4>Chief Financial Officer</h4></div><div class='list-cp-incard'><div class='row'><p data-doctype='presentation' class='col-xs-8 col-sm-10'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/Five-Year_Financial_Targets.pdf' class='title' target='_blank'>Five-Year Financial Targets</a></p><p data-doctype='presentation' class='col-xs-3 col-xs-offset-1  col-sm-2 col-sm-offset-0'><a href='<?= site_url() ?>/wp-content/uploads/investorday/presentations/Five-Year_Financial_Targets.pdf' target='_blank'><span class='ico ico-pdf-blue'></span><span class='mb'>6.1MB</span></a></p></div></div></div></div></div></div></div></div><div class='row cards-row'><div class='card col-sm-12'><div class='row'><div class='c-card col-md-12'> <div class='row'><div class='pic col-sm-2'><img src='<?= site_url() ?>/wp-content/uploads/investorday/images/sergio_marchionne.jpg' class='img-responsive'></div><div class='els col-sm-10'><div class='name'><h3>Sergio Marchionne</h3><h4>Chief Executive Officer, Fiat S.p.A. - Chairman and Chief Executive Officer, Chrysler Group LLC</h4></div><div class='list-cp-incard'><div class='row'><p data-doctype='presentation' class='col-xs-8 col-sm-10'><a href='Home.aspx#' class='title'>Closing Comments</a></p><p data-doctype='presentation' class='col-xs-3 col-xs-offset-1  col-sm-2 col-sm-offset-0'></p></div></div></div></div></div></div></div></div>
								</div>
								<div style='display:none' id='hidZone'><menu class="ms-hide">
										<ie:menuitem id="MSOMenu_Help" iconsrc="/_layouts/15/images/HelpIcon.gif" onmenuclick="MSOWebPartPage_SetNewWindowLocation(MenuWebPart.getAttribute('helpLink'), MenuWebPart.getAttribute('helpMode'))" text="Help" type="option" style="display:none">

										</ie:menuitem>
									</menu></div>
							</span>
						</div>
						<!--//body-->
						<!--footer-->
						<footer class="row-fluid" id="footer">
							<nav>
								<ul>
									<li class="ft-fiat"><a href="http://www.fiat.com/" target="_blank" ><span>Fiat</span><img src="<?= site_url() ?>/wp-content/uploads/investorday/style/FCAInvestorDay/img/shared/loghi-footer/fiat.jpg"></a></li>
									<li class="ft-alfa"><a href="http://www.alfaromeo.com" target="_blank"><span>Alfa Romeo</span><img src="<?= site_url() ?>/wp-content/uploads/investorday/style/FCAInvestorDay/img/shared/loghi-footer/alfaromeo.jpg"></a></li>
									<li class="ft-lancia"><a href="http://www.lancia.com" target="_blank"><span>Lancia</span><img src="<?= site_url() ?>/wp-content/uploads/investorday/style/FCAInvestorDay/img/shared/loghi-footer/lancia.jpg"></a></li>
									<li class="ft-abarth"><a href="http://www.abarth.com/" target="_blank"><span>Abarth</span><img src="<?= site_url() ?>/wp-content/uploads/investorday/style/FCAInvestorDay/img/shared/loghi-footer/abarth.jpg"></a></li>
									<li class="ft-fiatpro"><a href=""http://www.fiatprofessional.com" target="_blank"><span>Fiat professional</span><img src="<?= site_url() ?>/wp-content/uploads/investorday/style/FCAInvestorDay/img/shared/loghi-footer/fiatpro.jpg"></a></li>
									<li class="ft-jeep"><a href="http://www.jeep.com" target="_blank"><span>Jeep</span><img src="<?= site_url() ?>/wp-content/uploads/investorday/style/FCAInvestorDay/img/shared/loghi-footer/jeep.jpg"></a></li>
									<li class="ft-chrysler"><a href="http://www.chrysler.com" target="_blank"><span>Chrysler</span><img src="<?= site_url() ?>/wp-content/uploads/investorday/style/FCAInvestorDay/img/shared/loghi-footer/chrysler.jpg"></a></li>
									<li class="ft-dodge"><a href="http://www.dodge.com" target="_blank"><span>Dodge</span><img src="<?= site_url() ?>/wp-content/uploads/investorday/style/FCAInvestorDay/img/shared/loghi-footer/dodge.jpg"></a></li>
									<li class="ft-ram"><a href="http://www.ramtrucks.com" target="_blank"><span>Ram Truck</span><img src="<?= site_url() ?>/wp-content/uploads/investorday/style/FCAInvestorDay/img/shared/loghi-footer/ram.jpg"></a></li>
									<li class="ft-mopar"><a href="http://www.mopar.com/" target="_blank"><span>Mopar</span><img src="<?= site_url() ?>/wp-content/uploads/investorday/style/FCAInvestorDay/img/shared/loghi-footer/mopar.jpg"></a></li>
									<li class="ft-srt"><a href="http://www.drivesrt.com/" target="_blank"><span>Srt</span><img src="<?= site_url() ?>/wp-content/uploads/investorday/style/FCAInvestorDay/img/shared/loghi-footer/srt.jpg"></a></li>
									<li class="ft-ferrari"><a href="http://www.ferrari.com/" target="_blank"><span>Ferrari</span><img src="<?= site_url() ?>/wp-content/uploads/investorday/style/FCAInvestorDay/img/shared/loghi-footer/ferrari.jpg"></a></li>
									<li class="ft-maserati"><a href="http://www.maserati.com/" target="_blank"><span>Maserati</span><img src="<?= site_url() ?>/wp-content/uploads/investorday/style/FCAInvestorDay/img/shared/loghi-footer/maserati.jpg"></a></li>
									<li class="ft-marelli"><a href="http://magnetimarelli.com/" target="_blank"><span>Magneti Marelli</span><img src="<?= site_url() ?>/wp-content/uploads/investorday/style/FCAInvestorDay/img/shared/loghi-footer/marelli.jpg"></a></li>
									<li class="ft-comau"><a href="http://comau.com/" target="_blank"><span>Comau</span><img src="<?= site_url() ?>/wp-content/uploads/investorday/style/FCAInvestorDay/img/shared/loghi-footer/comau.jpg"></a></li>
									<li class="ft-teksid"><a href="http://www.teksid.com/" target="_blank"><span>Teksid</span><img src="<?= site_url() ?>/wp-content/uploads/investorday/style/FCAInvestorDay/img/shared/loghi-footer/teksid.jpg"></a></li>
								</ul>
							</nav>
							<p class="legal_privacy">
								<a class="legal_notes" href="<?=site_url()?>">APAConnect</a><span>|</span>
								<a class="legal_notes" href="http://www.fiatspa.com" target="_blank">Fiat SPA</a><span>|</span>
								<a class="legal_notes" href="http://www.chryslergroupllc.com/" target="_blank">Chrysler LLC</a><span>|</span>
								<a class="legal_notes pp" href="<?=site_url()?>/wp-content/uploads/investorday/pages/legal_notes.html">Legal</a><span>|</span>
								<a class="privacy_police pp" href="<?=site_url()?>/wp-content/uploads/investorday/pages/privacy_policy.html">Privacy</a><span>|</span>
								<a class="privacy_police pp" href="<?=site_url()?>/wp-content/uploads/investorday/pages/contacts.html">Contacts</a>
							</p> 
						</footer>
						<!--//footer-->
					</div>
				</div>
			</div>
		</div>
	<script>
		(function(i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function() {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
					m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
		ga('create', 'UA-50449147-1', 'fcagroup.com');
		ga('send', 'pageview');
	</script>
</body>
</html>
