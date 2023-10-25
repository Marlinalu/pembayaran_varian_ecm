!function(w,d,i,s){function l(){if(!d.getElementById(i)){var f=d.getElementsByTagName(s)[0],e=d.createElement(s);e.type="text/javascript",e.async=!0,e.src="https://canny.io/sdk.js",f.parentNode.insertBefore(e,f)}}if("function"!=typeof w.Canny){var c=function(){c.q.push(arguments)};c.q=[],w.Canny=c,"complete"===d.readyState?l():w.attachEvent?w.attachEvent("onload",l):w.addEventListener("load",l,!1)}}(window,document,"canny-jssdk","script");

(function() {
	Canny("identify", {
		appID: "651275a5088c91634aeefd8e",
		user: {
			email: ona_canny_params.user_email,
			name: ona_canny_params.user_name,
			id: ona_canny_params.user_id,

			// These fields are optional, but recommended:
			avatarURL: ona_canny_params.user_avatar,
			// created: new Date(user.created).toISOString(),
		},
	});
})()								
	