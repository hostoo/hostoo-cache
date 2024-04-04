const hostoo_ui_events = [
	'mouseover',
	'click',
	'keydown',
	'wheel',
	"touchmove",
	"touchstart",
];
var hostoo_delay_i = 0;
var urlCreator = window.URL || window.webkitURL;

// const hostoo_js_delay_timer = setTimeout( hostoo_load_delayed_js, 70 );

hostoo_ui_events.forEach(function (e) {
	window.addEventListener(e, hostoo_load_delayed_js_forced, { passive: true });
});

function hostoo_load_delayed_js_forced() {
	console.log('[Hostoo] Start Load JS Delayed');
	// clearTimeout( hostoo_js_delay_timer );
	hostoo_ui_events.forEach(function (e) {
		window.removeEventListener(e, hostoo_load_delayed_js_forced, { passive: true });
	});
	hostoo_load_delayed_js(true);

	document.querySelectorAll('iframe[data-hostoo-src]').forEach(function (e) {
		e.setAttribute('src', e.getAttribute('data-hostoo-src'));
	});
}

function hostoo_load_delayed_js(is_forced) {
	if (is_forced) {
		console.log('[Hostoo] Force running delayed JS');
	}

	hostoo_load_one();
}

function hostoo_inline2src(data) {
	try {
		var src = urlCreator.createObjectURL(new Blob([data.replace(/^(?:<!--)?(.*?)(?:-->)?$/gm, "$1")], {
			type: "text/javascript"
		}));
	} catch (e) {
		var src = "data:text/javascript;base64," + btoa(data.replace(/^(?:<!--)?(.*?)(?:-->)?$/gm, "$1"));
	}

	return src;
}

function hostoo_load_one() {
	hostoo_delay_i++;
	var e = document.querySelector('script[type="hostoo/javascript"][data-i="' + hostoo_delay_i + '"]');
	if (!e) {
		console.log('[Hostoo] All Loaded!');
		return;
	}

	console.log('[Hostoo] Load i=' + e.getAttribute('data-i'), '-----', e);

	var e2 = document.createElement('script');

	e2.addEventListener('load', function () {
		console.log('[Hostoo] loaded --- ' + e2.getAttribute('data-i'));
		hostoo_load_one();
	}, { passive: true });

	e2.addEventListener('error', function () {
		console.log('[Hostoo] loaded error! --- ' + e2.getAttribute('data-i'));
		hostoo_load_one();
	}, { passive: true });

	var attrs = e.getAttributeNames();

	attrs.forEach(function (aname) {
		if (aname == 'type') return;
		e2.setAttribute(aname == 'data-src' ? 'src' : aname, e.getAttribute(aname));
	});
	e2.type = 'text/javascript';
	if (!e2.src && e.textContent) {
		e2.src = hostoo_inline2src(e.textContent);
		// e2.textContent = e.textContent;
	}
	// setTimeout(function(){
	e.after(e2);
	// document.head.appendChild(e2);
	e.remove();
	// },0);
	// e2 = e.cloneNode(true)
	// e2.setAttribute( 'type', 'text/javascript' );
	// e2.setAttribute( 'data-delayed', '1' );
}