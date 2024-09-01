<?php

/**
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
//Route::get('test/User/Create', 'TestController@testUserCreate')->name('testUserCreate');
//check back to market cron job mail
Route::get('/checkBackToMarket/{days?}', 'CronController@checkBackToMarket')->name('testUserCreate');

Route::get('/', 'FrontendController@index')->name('index');

Route::get('macros', 'FrontendController@macros')->name('macros');
Route::get('contact', 'ContactController@index')->name('contact');
Route::post('contact/send', 'ContactController@send')->name('contact.send');

Route::get('blogs', 'BlogController@index')->name('blogs');
Route::get('blogs/{slug}', 'BlogController@show')->name('blogs.show');

Route::get('page/{slug}', 'PageController@getPage')->name('page.show');

Route::get('sales/home', 'PropertyController@salesHome')->name('sales-home');
Route::get('rents/home', 'PropertyController@rentsHome')->name('rents-home');
Route::get('vacations/home', 'PropertyController@vacationsHome')->name('vacations-home');

// Network Portal
Route::get('support-network', 'NetworkController@supportNetwork')->name('network.support');
Route::get('social-network', 'NetworkController@socialNetwork')->name('network.social');

Route::get('social-searched-network', 'NetworkController@searchedSocialNetwork')->name('searched.socialNetwork');
Route::get('support-searched-network', 'NetworkController@searchedSupportNetwork')->name('searched.supportnetwork');

Route::get('landing-page', 'FrontendController@landingPage')->name('landing-page');

// footer pages
Route::get('about-us', 'PageController@aboutUs')->name('aboutUs');
Route::get('term-of-use-&-limited-liability', 'PageController@termOfUse')->name('terms');
Route::get('corporate', 'PageController@corporate')->name('corporate');
Route::get('privacy', 'PageController@privacyPolicy')->name('privacyPolicy');
Route::get('e-sign-act-disclosure', 'PageController@eSign')->name('ESignActDisclosure');
Route::get('help', 'PageController@help')->name('help');
Route::get('document-portal', 'PageController@documentPortal')->name('documentPortal');
Route::get('document-portal/{stateId}', 'PageController@documentsList')->name('documentsList');
Route::get('document-portal/{stateId}/{documentId}', 'PageController@viewDocument')->name('viewDocument');

// Rent Sale search
//Route::get('property/search-view', 'PropertyController@propertySearch')->name('propertySearch');

Route::get('property/rent-search', 'PropertyController@rentSearch')->name('rentSearch');
Route::get('property/sale-search', 'PropertyController@saleSearch')->name('saleSearch');
Route::get('property/searched-sale', 'PropertyController@searchedSale')->name('searchedSale');
Route::get('property/searched-rent', 'PropertyController@searchedRent')->name('searchedRent');

//Route::get('property/searched-view',
//    'PropertyController@searchedProperty')->name('searchedProperty');
Route::get('property/details/{id}/{type?}', 'PropertyController@propertyDetails')->name('propertyDetails');

//Forum
Route::resource('forums', 'ForumController');
Route::get('forum-replies/show/{id}', 'ForumController@forumRepliesShow')->name('forumReplies.show');

// Vacation search
Route::get('property/vacation/search', 'PropertyController@vacationSearch')->name('vacationSearch');
Route::get('property/vacation/details/{id}', 'PropertyController@vacationDetails')->name('vacationDetails');
Route::get('property/vacation/search/view', 'PropertyController@vacationSearching')->name('vacationSearching');
Route::get('property/city/search', 'PropertyController@citySearch')->name('citySearch');
Route::get('property/district/search', 'PropertyController@districtAdvanceSearch')->name('districtAdvanceSearch');

//property ajax
Route::get('property/school/search', 'PropertyController@schoolSearch')->name('schoolSearch');
Route::get('property/country/search', 'PropertyController@countrySearch')->name('countrySearch');
Route::get('property/zip/search', 'PropertyController@zipSearch')->name('zipSearch');
Route::get('property/state/search', 'PropertyController@stateSearch')->name('stateSearch');
Route::get('property/military-location/search', 'PropertyController@militaryLocationSearch')->name('militaryLocationSearch');
Route::get('property/state-related-data/search', 'PropertyController@stateRelatedDataSearch')->name('stateRelatedDataSearch');
Route::get('property/city-county/search', 'PropertyController@cityCountySearch')->name('cityCountySearch');
Route::get('property/school-district/search', 'PropertyController@schoolDistrict')->name('schoolDistrict');
Route::get('property/get-counties', 'PropertyController@getCounties')->name('getCounties');
Route::get('property/get-zipcodes', 'PropertyController@getZipCodes')->name('getZipCodes');
Route::get('property/get-cities', 'PropertyController@getCities')->name('getCities');
/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 */
Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
	/*
	 * User Dashboard Specific
	 */
	Route::get('dashboard', 'DashboardController@index')->name('dashboard');


	/*
	 * User Account Specific
	 */
	Route::get('account', 'AccountController@index')->name('account');

	/*
	 * User Profile Specific
	 */
	Route::patch('profile/update', 'ProfileController@update')->name('profile.update');

	Route::post('blog-comment', 'CommentController@storeComment')->name('storeComment');


	Route::get('forum/loadMore/{count}', 'ForumController@loadMoreForums')->name('forums.loadMore');
    });
    //sent message from property details page
    Route::post('contact-seller-message', 'PropertyController@contactMessage')->name('contactMessage');

    Route::post('forum/topic/store', 'ForumController@store')->name('forum.topic.store');
    Route::get('forum/reply/create', 'ForumReplyController@replyCreate')->name('reply.create');
    Route::post('forumReply', 'ForumReplyController@saveForumReply')->name('saveForumReply');
    //Change Password
    Route::get('password/edit', 'RegisterController@editPassword')->name('password.edit');
    Route::post('password/change', 'RegisterController@passwordChange')->name('password.change');
    //property
    Route::get('rent/create', 'PropertyController@rentCreate')->name('rentCreate');
    Route::get('rent/edit/{id?}', 'PropertyController@rentCreate')->name('rentEdit');
    Route::post('rent/store', 'PropertyController@propertyStore')->name('rentStore');
    Route::post('property/update', 'PropertyController@propertyUpdate')->name('propertyUpdate');
    Route::get('property/delete/{id}', 'PropertyController@propertyDelete')->name('propertyDelete');

    Route::get('sale/create', 'PropertyController@saleCreate')->name('saleCreate');
    Route::get('sale/edit/{id?}', 'PropertyController@saleCreate')->name('saleEdit');
    Route::post('sale/store', 'PropertyController@propertyStore')->name('saleStore');
    //property listing
    Route::get('property/rents-list', 'PropertyController@rentsList')->name('property.rentsList');
    Route::get('property/sales-list', 'PropertyController@salesList')->name('property.salesList');
    Route::get('property/vacations-list', 'PropertyController@vacationsList')->name('property.vacationsList');
    Route::post('vacation/update', 'PropertyController@vacationUpdate')->name('vacationUpdate');
    Route::get('vacation-property/delete/{id}', 'PropertyController@vacationPropertyDelete')->name('vacation.vacationPropertyDelete');

    Route::get('vacation/create', 'PropertyController@vacationCreate')->name('vacationCreate');
    Route::get('vacation/edit/{id?}', 'PropertyController@vacationCreate')->name('vacationEdit');
    Route::post('vacation/store', 'PropertyController@propertyStore')->name('vacationStore');

//    ajax for storing property image
    Route::get('property-image', 'PropertyController@propertyImageStore')->name('propertyImageStore');

    //Edit Profile
    Route::get('profile/', 'RegisterController@profile')->name('profile.view');
    Route::get('user/profile/edit/{id}', 'RegisterController@profileEdit')->name('profile.edit');
    Route::post('user/profile/image', 'RegisterController@profileImage')->name('profile.image');
    Route::post('user/profile/update', 'RegisterController@profileUpdate')->name('profileUpdateSave');

    // Property Offers
    Route::get('sale-offer/{id}', 'OfferController@makeSaleOffer')->name('sale.offer');
    Route::get('rent-offer/{id}', 'OfferController@makeRentOffer')->name('rent.offer');
    Route::post('make-offer/save', 'OfferController@saveOffer')->name('make.offer.save');
    Route::get('sent-offers/{type?}', 'OfferController@sentOffers')->name('sent.offers');
    Route::get('received-offers', 'OfferController@recievedOffers')->name('recieved.offers');
    Route::get('view-offers', 'OfferController@viewOffers')->name('view.offers');
    Route::get('view-sent-offer', 'OfferController@viewSentOffer')->name('sent.view.offer');
    Route::get('view-sent-offer-rent', 'OfferController@viewSentOfferRent')->name('sent.view.offer.rent');
    Route::get('view-received-offer', 'OfferController@ViewRecievedOffer')->name('recieved.view.offer');
    Route::get('view-received-offer-rent', 'OfferController@viewRecievedOfferRent')->name('recieved.view.offer.rent');
    Route::get('accept-offer/{id}/{propertyType}', 'OfferController@acceptOffer')->name('accept.offer');
    Route::get('reject-offer/{id}/{propertyType}', 'OfferController@rejectOffer')->name('reject.offer');
    Route::post('counter-offer', 'OfferController@counterOffer')->name('counter.offer');
    Route::get('counter-offer/accept/{id}/{propertyType}', 'OfferController@acceptCounterOffer')->name('accept.counterOffer');
    Route::get('counter-offer/reject/{id}/{propertyType}', 'OfferController@rejectCounterOffer')->name('reject.counterOffer');

    Route::get('accept-rent-offer/{id}', 'OfferController@acceptOffer')->name('acceptRent.offer');

    Route::get('document-lead-based-paint-hazards', 'MyDocumentsController@documentLeadBasedPaintHazards')->name('documentLeadBasedPaintHazards');
    Route::get('document-lead-based-paint-hazards-rent', 'MyDocumentsController@documentLeadBasedPaintHazardsRent')->name('documentLeadBasedPaintHazardsRent');
    Route::group(['middleware' => 'checkOfferValues'], function () {
	// my documents
	Route::get('document-disclosure', 'MyDocumentsController@documentDisclosure')->name('documentDisclosure');
	Route::get('document-sale-agreement', 'MyDocumentsController@documentSaleAgreement')->name('documentSaleAgreement');
	Route::get('document-advisory-to-buyers-and-sellers', 'MyDocumentsController@documentAdvisoryToBuyersAndSellers')->name('documentAdvisoryToBuyersAndSellers');
	Route::get('document-Va-Fha-loanAddendum-by-buyer', 'MyDocumentsController@documentVaFhaloanAddendumByBuyer')->name('documentVaFhaloanAddendumByBuyer');
	Route::get('document-post-closing', 'MyDocumentsController@documentPostClosing')->name('documentPostClosing');
    });
    Route::get('document-rent-agreement', 'MyDocumentsController@documentRentAgreement')->name('documentRentAgreement');
    Route::group(['namespace' => 'ContractTools'], function () {
	// independent from contract tools
	Route::group(['middleware' => 'checkSignatureValues'], function () {
	    Route::get('lead-based-paint-hazards/{id?}', 'ContractToolSellerController@leadBasedPaintHazards')->name('leadBasedPaintHazards');
	    Route::get('lead-based-paint-hazards-buyer/{id?}', 'ContractToolBuyerController@leadBasedPaintHazardsBuyer')->name('leadBasedPaintHazardsBuyer');
	});
	Route::get('disclosure-by-seller-update/{id?}/{page?}', 'ContractToolSellerController@disclosureBySellerUpdate')->name('disclosureBySellerUpdate');
	//need
	Route::get('lead-based-paint-hazards-rent/{id?}', 'ContractToolLandlordController@leadBasedPaintHazardsRent')->name('leadBasedPaintHazardsRent');
	Route::post('save-lead-based-paint-hazards/{id?}', 'ContractToolSellerController@saveLeadBasedPaintHazards')->name('saveLeadBasedPaintHazards');
	Route::post('save-lead-based-paint-hazards-buyer/{id?}', 'ContractToolBuyerController@saveLeadBasedPaintHazardsBuyer')->name('saveLeadBasedPaintHazardsBuyer');



	Route::post('save-lead-based-paint-hazards-landlord/{id?}', 'ContractToolLandlordController@saveLeadBasedPaintHazardsLandlord')->name('saveLeadBasedPaintHazardsLandlord');
	Route::post('save-lead-based-paint-hazards-tenant/{id?}', 'ContractToolTenantController@saveLeadBasedPaintHazardsTenant')->name('saveLeadBasedPaintHazardsTenant');
    });
    Route::group(['middleware' => 'OnlyUsers'], function () {
	Route::group(['namespace' => 'ContractTools'], function () {

	    Route::post('save-seller-property-condition-disclosure/{id?}', 'ContractToolSellerController@saveSellerPropertyConditionDisclosure')->name('saveSellerPropertyConditionDisclosure');

	    // Contract Tools Sale    //Seller
	    //check Property session through (middleware)
	    Route::group(['middleware' => 'checkPropertyId'], function () {

		//Review Offer from Buyer Side
		//sign document
		Route::get('sd-thank-you-seller-for-pd', 'ContractToolSellerController@sdThankYouSellerForPd')->name('sdThankYouSellerForPd');

		Route::post('save-seller-questionnaire/{id?}', 'ContractToolSellerController@saveSellerQuestionnaire')->name('saveSellerQuestionnaire');
		Route::group(['middleware' => 'checkSignatureValues'], function () {
		    Route::get('disclosure-by-buyer-update', 'ContractToolBuyerController@disclosureByBuyerUpdate')->name('disclosureByBuyerUpdate');

		    //need
		    Route::get('disclosures-rent-contract-tool-review-tenant', 'ContractToolTenantController@disclosuresRentContractToolReviewTenant')->name('disclosuresRentContractToolReviewTenant');
		    //need
		    Route::post('thank-you-for-review-summary-key-terms', 'ContractToolTenantController@thankYouForReviewSummaryKeyTerms')->name('thankYouForReviewSummaryKeyTerms');
		    Route::get('thank-you-to-seller-for-answer', 'ContractToolSellerController@thankYouToSellerForAnswer')->name('thankYouToSellerForAnswer');
		});
		Route::post('sd-thank-you-for-review-summary-key-terms-tenant', 'ContractToolTenantController@sdThankyouForReviewSummaryKeyTermsTenant')->name('sdThankyouForReviewSummaryKeyTermsTenant');
	    });
	    //check Offer session through (middleware)
	    Route::group(['middleware' => 'checkOfferValues'], function () {
		Route::group(['middleware' => 'checkDeletedUserOffer'], function () {
		    Route::group(['middleware' => 'checkSignatureValues'], function () {
			Route::get('questions-set-for-seller/{id?}', 'ContractToolSellerController@questionsSetForSeller')->name('questionsSetForSeller');
			Route::get('thank-you-lead-based/{value?}', 'ContractToolSellerController@thankYouLeadBased')->name('thankYouLeadBased');
			Route::get('seller-property-condition-disclosure', 'ContractToolSellerController@sellerPropertyConditionDisclosure')->name('sellerPropertyConditionDisclosure');
			Route::get('thankyou-pd', 'ContractToolSellerController@thankyouPd')->name('thankyouPd');
			Route::get('update-sale-agreement-byseller-contract', 'ContractToolSellerController@updateSaleAgreementBysellerContract')->name('updateSaleAgreementBysellerContract');
			Route::get('question-set-for-buyer', 'ContractToolBuyerController@questionSetForBuyer')->name('questionSetForBuyer');
			Route::get('thank-you-to-buyer-for-answer', 'ContractToolBuyerController@thankYouToBuyerForAnswer')->name('thankYouToBuyerForAnswer');
			Route::get('thank-you-accept-offer', 'ContractToolBuyerController@thankYouAcceptOffer')->name('thankYouAcceptOffer');
			Route::get('advisory-to-buyers-and-sellers', 'ContractToolBuyerController@advisoryToBuyersAndSellers')->name('advisoryToBuyersAndSellers');
			Route::get('advisory-to-buyers-and-sellers-thank-you-buyer', 'ContractToolBuyerController@advisoryToBuyersAndSellersThankYouBuyer')->name('advisoryToBuyersAndSellersThankYouBuyer');
			Route::get('thank-you-lead-based-buyer', 'ContractToolBuyerController@thankYouLeadBasedBuyer')->name('thankYouLeadBasedBuyer');
			Route::get('thankyou-pd-buyer', 'ContractToolBuyerController@thankyouPdBuyer')->name('thankyouPdBuyer');
			Route::get('VA-FHA-loan-addendum-by-buyer', 'ContractToolBuyerController@vaFhaloanAddendumByBuyer')->name('vaFhaloanAddendumByBuyer');
			Route::get('va-fha-thank-you-for-buyer', 'ContractToolBuyerController@checkPostClosing')->name('checkPostClosing');
			Route::get('update-sale-agreement-by-buyer', 'ContractToolBuyerController@updateSaleAgreementByBuyer')->name('updateSaleAgreementByBuyer');
			Route::get('thankyou-purchase-agreement-by-buyer', 'ContractToolBuyerController@thankyouPurchaseAgreementByBuyer')->name('thankyouPurchaseAgreementByBuyer');
		    });

		    // when the seller or buyer is business.
		    Route::get('business-contract-tools', 'ContractToolSellerController@BusinessContractTools')->name('BusinessContractTools');

		    Route::get('questions-to-seller-property/{value?}', 'ContractToolSellerController@questionsToSellerProperty')->name('questionsToSellerProperty');
		    Route::get('post-closing-questions-thankyou', 'ContractToolSellerController@postClosingQuestionsThankyou')->name('postClosingQuestionsThankyou');

		    Route::get('contract-tools', 'ContractToolSellerController@contractTools')->name('contractTools');
		    Route::get('post-closing-occupancy-agreement', 'ContractToolSellerController@postClosingOccupancyAgreement')->name('postClosingOccupancyAgreement');

		    Route::get('thankyou-purchase-agreement', 'ContractToolSellerController@thankyouPurchaseAgreement')->name('thankyouPurchaseAgreement');

		    Route::post('save-update-sale-agreement-byseller-contract', 'ContractToolSellerController@saveUpdateSaleAgreementBysellerContract')->name('saveUpdateSaleAgreementBysellerContract');
		    Route::post('save-questions-to-seller-post-closing', 'ContractToolSellerController@saveQuestionSellerPostClosing')->name('saveQuestionSellerPostClosing');
		    Route::post('save-questions-to-seller-post-additional_closing', 'ContractToolSellerController@saveQuestionSellerPostAdditionalClosing')->name('saveQuestionSellerPostAdditionalClosing');

		    //Review Offer from Buyer Side
		    Route::get('summary-key-terms-for-buyer', 'ContractToolBuyerController@summaryKeyTermsForBuyer')->name('summaryKeyTermsForBuyer');
		    Route::get('purchase-agreement-by-buyer', 'ContractToolBuyerController@purchaseAgreementByBuyer')->name('purchaseAgreementByBuyer');
		    Route::get('va-thank-you-for-buyer', 'ContractToolBuyerController@vaThankYouForBuyer')->name('vaThankYouForBuyer');
		    Route::get('lead-thank-you-for-buyer', 'ContractToolBuyerController@checkVaFhaBuyer')->name('checkVaFhaBuyer');
		    Route::get('post-closing-occupancy-agreement-by-buyer', 'ContractToolBuyerController@postClosingOccupancyAgreementByBuyer')->name('postClosingOccupancyAgreementByBuyer');
		    Route::get('post-closing-thankyou-by-buyer', 'ContractToolBuyerController@postClosingThankyouByBuyer')->name('postClosingThankyouByBuyer');

		    Route::post('store-question-set-for-buyer/{id?}', 'ContractToolBuyerController@storeQuestionSetForBuyer')->name('storeQuestionSetForBuyer');
		    //sign documents buyer
		    Route::get('sd-advisory-to-buyers-and-sellers-thank-you-buyer', 'ContractToolBuyerController@sdAdvisoryToBuyersAndSellersThankYouBuyer')->name('sdAdvisoryToBuyersAndSellersThankYouBuyer');
		    Route::get('sd-summary-key-terms-for-buyer', 'ContractToolBuyerController@sdSummaryKeyTermsForBuyer')->name('sdSummaryKeyTermsForBuyer');
		    Route::get('sd-thank-you-buyer-for-pd', 'ContractToolBuyerController@sdThankYouBuyerForPd')->name('sdThankYouBuyerForPd');
		    Route::get('sd-thank-you-buyer-for-pd-va-fha', 'ContractToolBuyerController@sdThankYouBuyerForPd')->name('sdThankYouBuyerForPd');
		    Route::get('sd-advisory-to-buyers-and-sellers', 'ContractToolBuyerController@sdAdvisoryToBuyersAndSellers')->name('sdAdvisoryToBuyersAndSellers');
		    Route::get('sd-thankyou-purchase-agreement-by-buyer', 'ContractToolBuyerController@sdThankyouPurchaseAgreementByBuyer')->name('sdThankyouPurchaseAgreementByBuyer');
		    Route::get('sd-lead-based-paint-hazards-update-by-buyer', 'ContractToolBuyerController@sdLeadBasedPaintHazardsUpdateByBuyer')->name('sdLeadBasedPaintHazardsUpdateByBuyer');
		    Route::get('sd-va-fha-thank-you-buyer', 'ContractToolBuyerController@sdCheckVaFha')->name('sdCheckVaFha');
		    Route::get('sd-VA-FHA-loan-addendum-by-buyer', 'ContractToolBuyerController@sdVaFhaloanAddendumByBuyer')->name('sdVaFhaloanAddendumByBuyer');
		    Route::get('sd-va-fha-thank-you-for-buyer', 'ContractToolBuyerController@sdVaFhaThankYouForBuyer')->name('sdVaFhaThankYouForBuyer');
		    Route::get('sd-post-closing-occupancy-agreement-by-buyer', 'ContractToolBuyerController@sdPostClosingOccupancyAgreementByBuyer')->name('sdPostClosingOccupancyAgreementByBuyer');
		    Route::get('sd-post-closing-thankyou-by-buyer', 'ContractToolBuyerController@sdPostClosingThankyouByBuyer')->name('sdPostClosingThankyouByBuyer');
		    Route::get('sd-post-closing-thankyou-buyer', 'ContractToolBuyerController@sdCheckSignaturePostClosingBuyer')->name('sdCheckSignaturePostClosingBuyer');
		    Route::get('sd-thank-you-buyer-necessary-forms', 'ContractToolBuyerController@sdThankYouBuyerNecessaryForms')->name('sdThankYouBuyerNecessaryForms');
		    Route::get('sd-sale-agreement-review-by-buyer', 'ContractToolBuyerController@sdSaleAgreementReviewByBuyer')->name('sdSaleAgreementReviewByBuyer');
		    Route::get('sd-update-sale-agreement-buyer', 'ContractToolBuyerController@sdUpdateSaleAgreementBuyer')->name('sdUpdateSaleAgreementBuyer');


		    Route::post('advisory-signature', 'ContractToolBuyerController@advisorySignature')->name('advisorySignature');
		    Route::post('disclaimer-signature', 'ContractToolBuyerController@disclaimerSignature')->name('disclaimerSignature');
		    Route::post('sale-agreement-signature', 'ContractToolBuyerController@saleAgreementSignature')->name('saleAgreementSignature');
		    Route::post('lead-based-signature', 'ContractToolBuyerController@leadBasedSignature')->name('leadBasedSignature');
		    Route::post('va-fha-addendum-signature', 'ContractToolBuyerController@vaFhaSignature')->name('vaFhaSignature');
		    Route::post('post-closing-occupancy-agreement-signature', 'ContractToolBuyerController@postClosingSignature')->name('postClosingSignature');
		    Route::post('sale-agreement-signature-seller', 'ContractToolBuyerController@saleAgreementSignatureSeller')->name('saleAgreementSignatureSeller');

		    //sign documents seller
		    Route::get('sd-summary-key-terms-for-seller', 'ContractToolSellerController@sdSummaryKeyTermsForSeller')->name('sdSummaryKeyTermsForSeller');
		    Route::get('sd-advisory-to-buyers-and-sellers-sellers', 'ContractToolSellerController@sdAdvisoryToBuyersAndSellersSellers')->name('sdAdvisoryToBuyersAndSellersSellers');
		    Route::get('sd-advisory-to-buyers-and-sellers-thank-you', 'ContractToolSellerController@sdAdvisoryToBuyersAndSellersThankYou')->name('sdAdvisoryToBuyersAndSellersThankYou');
		    Route::get('sd-disclosure-by-seller-update', 'ContractToolSellerController@sdDisclosureBySellerUpdate')->name('sdDisclosureBySellerUpdate');
		    Route::get('sd-lead-based-paint-hazards-update-by-seller', 'ContractToolSellerController@sdLeadBasedPaintHazardsUpdateBySeller')->name('sdLeadBasedPaintHazardsUpdateBySeller');
		    Route::get('sd-thank-you-seller-necessary-forms', 'ContractToolSellerController@sdThankYouSellerNecessaryForms')->name('sdThankYouSellerNecessaryForms');
		    Route::get('sd-va-fha-thank-you-for-seller', 'ContractToolSellerController@sdVaFhaThankYouForSeller')->name('sdVaFhaThankYouForSeller');
		    Route::get('sd-VA-FHA-loan-addendum-by-seller', 'ContractToolSellerController@sdVaFhaloanAddendumBySeller')->name('sdVaFhaloanAddendumBySeller');
		    Route::get('sd-va-fha-thank-you-seller', 'ContractToolSellerController@sdCheckVaFhaSeller')->name('sdCheckVaFhaSeller');
		    Route::get('sd-post-closing-thankyou-seller', 'ContractToolSellerController@sdCheckSignaturePostClosingSeller')->name('sdCheckSignaturePostClosingSeller');
		    Route::get('sd-post-closing-occupancy-agreement-by-seller', 'ContractToolSellerController@sdPostClosingOccupancyAgreementBySeller')->name('sdPostClosingOccupancyAgreementBySeller');
		    Route::get('sd-post-closing-thankyou-by-seller', 'ContractToolSellerController@sdPostClosingThankyouBySeller')->name('sdPostClosingThankyouBySeller');
		    Route::get('sd-sale-agreement-review-by-seller', 'ContractToolSellerController@sdSaleAgreementReviewBySeller')->name('sdSaleAgreementReviewBySeller');
		});
	    });
	    Route::get('sign-offers-sale-buyer-partner/{id}', 'ContractToolBuyerController@signOffersSaleBuyerPartner')->name('signOffersSaleBuyerPartner');
	    Route::get('sign-offers-sale-seller-partner/{id}', 'ContractToolSellerController@signOffersSaleSellerPartner')->name('signOffersSaleSellerPartner');

	    Route::get('sign-offers-rent-tenant-partner/{id}', 'ContractToolTenantController@signOffersRentTenantPartner')->name('signOffersRentTenantPartner');
	    Route::get('sign-offers-rent-landlord-partner/{id}', 'ContractToolLandlordController@signOffersRentLandlordPartner')->name('signOffersRentLandlordPartner');

	    //sign documents buyer (use both offer and property_id)
	    Route::get('sd-disclosure-by-buyer-update', 'ContractToolBuyerController@sdDisclosureByBuyerUpdate')->name('sdDisclosureByBuyerUpdate');



	    //sign documents seller
	    Route::get('sd-update-sale-agreement', 'ContractToolSellerController@sdUpdateSaleAgreement')->name('sdUpdateSaleAgreement');
	    Route::get('sd-thankyou-purchase-agreement', 'ContractToolSellerController@sdThankyouPurchaseAgreement')->name('sdThankyouPurchaseAgreement');
	    //    Route::get('va-fha-thank-you-for-buyer', 'ContractToolBuyerController@vaFhaThankYouForBuyer')->name('vaFhaThankYouForBuyer');

	    Route::post('save-landlord-property-condition-disclosure/{id?}', 'ContractToolSellerController@saveSellerPropertyConditionDisclosure')->name('saveLandlordPropertyConditionDisclosure');

	    Route::group(['middleware' => 'checkOfferValues'], function () {
		Route::group(['middleware' => 'checkDeletedUserOffer'], function () {
		    // Rent Contract tool landlord
		    Route::get('contract-tools-rent', 'ContractToolLandlordController@contractToolsRent')->name('contractToolsRent');
		    //check Offer session through (middleware)
		    Route::group(['middleware' => 'checkSignatureValues'], function () {
			//need
			Route::get('questions-to-landlord', 'ContractToolLandlordController@questionsToLandlord')->name('questionsToLandlord');
			Route::get('add-signers-contract-rent-landlord', 'ContractToolLandlordController@addSignersContractRentLandlord')->name('addSignersContractRentLandlord');
			//need
			Route::get('thankyou-discloser-tool', 'ContractToolLandlordController@thankyouDiscloserTool')->name('thankyouDiscloserTool');
			//need
			Route::get('thankyou-lease-agreement-landlord', 'ContractToolLandlordController@thankyouLeaseAgreementLandlord')->name('thankyouLeaseAgreementLandlord');
			//need
			Route::get('lease-agreement', 'ContractToolLandlordController@leaseAgreement')->name('leaseAgreement');
			//need
			Route::get('thank-you-to-landlord-for-answer', 'ContractToolLandlordController@thankYouToLandlordForAnswer')->name('thankYouToLandlordForAnswer');
			//need
			Route::get('disclosures-rent-contract-tool', 'ContractToolLandlordController@disclosuresRentContractTool')->name('disclosuresRentContractTool');

			//need
			Route::get('question-set-for-tenant', 'ContractToolTenantController@questionSetForTenant')->name('questionSetForTenant');
			//need
			Route::get('lease-agreement-review-tenant', 'ContractToolTenantController@leaseAgreementReviewTenant')->name('leaseAgreementReviewTenant');
			//need
			Route::get('thank-you-lead-based-disclosure-for-rent-tenant', 'ContractToolTenantController@thankYouLeadBasedDisclosureForRentTenant')->name('thankYouLeadBasedDisclosureForRentTenant');
			//need
			Route::get('thankyou-discloser-tool-tenant', 'ContractToolTenantController@thankyouDiscloserToolTenant')->name('thankyouDiscloserToolTenant');
			//need
			Route::get('add-signers-contract-rent-tenant', 'ContractToolTenantController@addSignersContractRentTenant')->name('addSignersContractRentTenant');
			//need
			Route::get('thankyou-lease-agreement-tenant', 'ContractToolTenantController@thankyouLeaseAgreementTenant')->name('thankyouLeaseAgreementTenant');
		    });

		    Route::get('sd-summary-key-terms-for-landlord', 'ContractToolLandlordController@sdSummaryKeyTermsForLandlord')->name('sdSummaryKeyTermsForLandlord');
		    Route::post('save-lease-agreement', 'ContractToolLandlordController@saveLeaseAgreement')->name('saveLeaseAgreement');
		    Route::post('save-questions-to-landlord/{id?}', 'ContractToolLandlordController@saveQuestionsToLandlord')->name('saveQuestionsToLandlord');
		    //Sign documents landlord
		    Route::post('sd-thank-you-for-review-summary-key-terms-landlord', 'ContractToolLandlordController@sdThankyouForReviewSummaryKeyTermsLandlord')->name('sdThankyouForReviewSummaryKeyTermsLandlord');
		    Route::get('sd-thank-you-landlord-for-pd', 'ContractToolLandlordController@sdThankYouLandlordForPd')->name('sdThankYouLandlordForPd');
		    Route::get('sd-lease-agreement-by-landlord', 'ContractToolLandlordController@sdLeaseAgreementByLandlord')->name('sdLeaseAgreementByLandlord');
		    Route::get('sd-thankyou-lease-agreement-landlord', 'ContractToolLandlordController@sdThankyouLeaseAgreementLandlord')->name('sdThankyouLeaseAgreementLandlord');
		    Route::get('sd-lead-based-paint-hazards-disclosure-for-rent-by-landlord', 'ContractToolLandlordController@sdLeadBasedPaintHazardsDisclosureForRentByLandlord')->name('sdLeadBasedPaintHazardsDisclosureForRentByLandlord');
		    Route::get('sd-thank-you-landlord-necessary-forms', 'ContractToolLandlordController@sdThankYouLandlordNecessaryForms')->name('sdThankYouLandlordNecessaryForms');



		    Route::post('save-add-signers-contract-rent-tenant/{id?}', 'ContractToolTenantController@saveAddSignersContractRentTenant')->name('saveAddSignersContractRentTenant');

		    Route::get('thankyou-for-rent-offer', 'ContractToolTenantController@thankyouForRentOffer')->name('thankyouForRentOffer');


		    Route::get('summary-key-terms-for-tenant', 'ContractToolTenantController@summaryKeyTermsForTenant')->name('summaryKeyTermsForTenant');


		    //Sign documents tenant
		    Route::get('sd-thank-you-tenant-for-pd', 'ContractToolTenantController@sdThankYouTenantForPd')->name('sdThankYouTenantForPd');
		    Route::get('sd-lease-agreement-by-tenant', 'ContractToolTenantController@sdLeaseAgreementByTenant')->name('sdLeaseAgreementByTenant');
		    Route::get('sd-thankyou-lease-agreement-tenant', 'ContractToolTenantController@sdThankyouLeaseAgreementTenant')->name('sdThankyouLeaseAgreementTenant');
		    Route::get('sd-lead-based-paint-hazards-disclosure-for-rent-by-tenant', 'ContractToolTenantController@sdLeadBasedPaintHazardsDisclosureForRentByTenant')->name('sdLeadBasedPaintHazardsDisclosureForRentByTenant');
		    Route::get('sd-thank-you-tenant-necessary-forms', 'ContractToolTenantController@sdThankYouTenantNecessaryForms')->name('sdThankYouTenantNecessaryForms');

		    //rent signature
		    Route::post('disclaimer-signature-rent', 'ContractToolTenantController@disclaimerSignatureRent')->name('disclaimerSignatureRent');
		    Route::post('sale-agreement-signature-rent', 'ContractToolTenantController@saleAgreementSignatureRent')->name('saleAgreementSignatureRent');
		    Route::post('lead-based-signature-rent', 'ContractToolTenantController@leadBasedSignatureRent')->name('leadBasedSignatureRent');
		    Route::get('sd-summary-key-terms-for-tenant', 'ContractToolTenantController@sdSummaryKeyTermsForTenant')->name('sdSummaryKeyTermsForTenant');


		    Route::get('sd-disclosures-rent-tenant', 'ContractToolTenantController@sdDisclosuresRentTenant')->name('sdDisclosuresRentTenant');
		    Route::get('sd-disclosures-rent-landlord', 'ContractToolLandlordController@sdDisclosuresRentLandlord')->name('sdDisclosuresRentLandlord');
		});
	    });
	});
    });
    Route::post('contract-tool-signers', 'SignerController@contractToolSigner')->name('contractToolSigner');

    Route::get('sale-agreement-signature-Pdf/', 'PdfController@saleAgreementSignPdf')->name('saleAgreementSignPdf');
    Route::get('Va-Fha-signature-Pdf', 'PdfController@VaFhsSignPdf')->name('VaFhsSignPdf');
    Route::get('post-closing-signature-Pdf', 'PdfController@postClosingSignPdf')->name('postClosingSignPdf');
    Route::get('advisory-signature-Pdf', 'PdfController@advisorySignPdf')->name('advisorySignPdf');
    Route::get('lead-based-signature-Pdf', 'PdfController@leadBasedSignPdf')->name('leadBasedSignPdf');
    Route::get('property-disclaimer-signature-Pdf', 'PdfController@propertyDisclaimerSignPdf')->name('propertyDisclaimerSignPdf');

    Route::get('rent-agreement-signature-Pdf/', 'PdfController@rentAgreementSignPdf')->name('rentAgreementSignPdf');
    Route::get('lead-based-rent-signature-Pdf', 'PdfController@leadBasedRentSignPdf')->name('leadBasedRentSignPdf');
    Route::get('property-disclaimer-rent-signature-Pdf', 'PdfController@propertyDisclaimerRentSignPdf')->name('propertyDisclaimerRentSignPdf');
    //Network searched user details show
    Route::get('network/user-details/{id}', 'NetworkController@userDetails')->name('network.userDetails');
    Route::get('network/request-sent/{id}', 'NetworkController@requestSent')->name('request.sent');
    Route::get('network/received-requests', 'NetworkController@receivedRequests')->name('received.requests');
    Route::get('network/sent-requests', 'NetworkController@sentRequests')->name('sent.requests');
    Route::get('network/accept-request/{id}', 'NetworkController@acceptRequest')->name('accept.request');
    Route::get('network/reject-request/{id}', 'NetworkController@rejectRequest')->name('reject.request');
    Route::get('network/cancel-request/{id}', 'NetworkController@cancelRequest')->name('cancel.request');
    Route::get('my-network', 'NetworkController@myNetwork')->name('myNetwork');
    Route::get('network/delete-connection/{id}', 'NetworkController@deleteConnection')->name('delete.connection');
    Route::get('network/profile-rating', 'NetworkController@profileRating')->name('profile.rating');

    Route::group(['middleware' => 'OnlyUsers'], function () {
	//Signers
	Route::get('signers', 'SignerController@index')->name('signer.index');
	Route::get('signer/create', 'SignerController@create')->name('signer.create');
	Route::post('signer/store', 'SignerController@signStore')->name('signer.store');
	Route::get('signer/resend-activation/{id}', 'SignerController@resendActivation')->name('resend.activation');
	Route::get('signer/delete/{id}', 'SignerController@deleteSigner')->name('delete.signer');
	Route::get('signer/view/{id}', 'SignerController@signerView')->name('signer.view');

	//My documents
	Route::get('received-documents', 'MyDocumentsController@receivedDocuments')->name('receivedDocuments');
	Route::get('sent-documents', 'MyDocumentsController@sentDocuments')->name('sentDocuments');
	Route::get('received-document-details-rent', 'MyDocumentsController@receivedDocumentDetailsRent')->name('receivedDocumentDetailsRent');
	Route::get('received-document-details-sale', 'MyDocumentsController@receivedDocumentDetailsSale')->name('receivedDocumentDetailsSale');
	Route::get('sent-document-details-rent', 'MyDocumentsController@sentDocumentDetailsRent')->name('sentDocumentDetailsRent');
	Route::get('sent-document-details-sale', 'MyDocumentsController@sentDocumentDetailsSale')->name('sentDocumentDetailsSale');
	Route::get('sent-documents-details', 'MyDocumentsController@sentDocumentDetails')->name('sentDocumentDetails');
	Route::get('download-documents-rent', 'MyDocumentsController@downloadDocumentsRent')->name('downloadDocumentsRent');
	Route::get('download-documents-sale', 'MyDocumentsController@downloadDocumentsSale')->name('downloadDocumentsSale');

	//Favorites
	Route::get('favorites', 'FavoriteController@index')->name('favorites');
	Route::get('favorite/store/{id}', 'FavoriteController@favoriteStore')->name('favorite.store');
	Route::get('favorite/delete/{id}', 'FavoriteController@favoriteDelete')->name('favorite.delete');

	// sign documents for partners or co-signers
	Route::get('partners-sign-documents', 'ContractTools\SignDocumentsController@partnersSignDocuments')->name('partnersSignDocuments');
	Route::get('sign-documents-buyer', 'ContractTools\SignDocumentsController@signDocumentsBuyer')->name('signDocumentsBuyer');
	Route::get('sign-documents-seller', 'ContractTools\SignDocumentsController@signDocumentsSeller')->name('signDocumentsSeller');
	Route::get('sign-documents-landlord', 'ContractTools\SignDocumentsController@signDocumentsLandlord')->name('signDocumentsLandlord');
	Route::get('sign-documents-tenant', 'ContractTools\SignDocumentsController@signDocumentsTenant')->name('signDocumentsTenant');
    });
    Route::get('back-to-market/{id}', 'PropertyController@backToMarket')->name('backToMarket');
    Route::get('change-property-status/{id}', 'PropertyController@changePropertyStatus')->name('changePropertyStatus');
    require_once __DIR__ . '/other.php';
});

Route::get('signer/account-confirm/{token}', 'SignerController@accountConfirm')->name('account.confirm');


