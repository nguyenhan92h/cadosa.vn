function geoplugin_request() { return '123.16.167.57';} 
function geoplugin_status() { return '200';} 
function geoplugin_credit() { return 'Some of the returned data includes GeoLite data created by MaxMind, available from <a href=\'http://www.maxmind.com\'>http://www.maxmind.com</a>.';} 
function geoplugin_city() { return 'Hanoi';} 
function geoplugin_region() { return 'Ha Nội';} 
function geoplugin_regionCode() { return '44';} 
function geoplugin_regionName() { return 'Ha Nội';} 
function geoplugin_areaCode() { return '0';} 
function geoplugin_dmaCode() { return '0';} 
function geoplugin_countryCode() { return 'VN';} 
function geoplugin_countryName() { return 'Vietnam';} 
function geoplugin_continentCode() { return 'AS';} 
function geoplugin_latitude() { return '21.0333';} 
function geoplugin_longitude() { return '105.85';} 
function geoplugin_currencyCode() { return 'VND';} 
function geoplugin_currencySymbol() { return '&#8363;';} 
function geoplugin_currencySymbol_UTF8() { return '₫';} 
function geoplugin_currencyConverter(amt, symbol) { 
	if (!amt) { return false; } 
	var converted = amt * 22530.23; 
	if (converted <0) { return false; } 
	if (symbol === false) { return Math.round(converted * 100)/100; } 
	else { return '&#8363;'+(Math.round(converted * 100)/100);} 
	return false; 
} 
