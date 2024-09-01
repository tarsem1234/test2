<?php
//generate pdf's
Route::get('lead-based-paint-hazards-pdf/{id}','PdfController@leadBasedPaintHazardsPdf')->name('leadBasedPaintHazardsPdf');
Route::get('property-condition-disclaimerPdf-pdf/{id}','PdfController@propertyDisclaimerPdf')->name('propertyDisclaimerPdf');
