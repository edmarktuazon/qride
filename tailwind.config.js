/**
 * @format
 * @type {import('tailwindcss').Config}
 */

module.exports = {
	content: [
		"./*.{php,js}",
		"./includes/**/*.{php,js}",
		"./driver-info/*.{php,js}",
		"./driver-info/confirmation/*.{php,js}",
		"./driver-info/concern/*.{php,js}",
		"./driver-info/rating/*.{php,js}",
		"./src/**/*.{css,js}",
	],
	theme: {
		extend: {
			fontFamily: {
				roboto: ["'Roboto', sans-serif;"],
				inter: ["'Inter', sans-serif;"],
			},
		},
		colors: {
			"shade-white": "#FFFFFF",
			"shade-black": "#000000",
			"shade-yellow": "#FCCB27",
			"shade-deep-blue": "#007BB0",
			"shade-blue": "#0047BD",
			"shade-lighter-blue": "#06F",
			"shade-gray": "#B4B4B4",
			"shade-light-gray": "#EAEAEA",
			"shade-white-gray": "#EBEFF2",
			"shade-green": "#00AB59",
			"shade-purple": "#4340DA",
			"shade-dark-gray": "#7D7D7D",
			"shade-dark-gray-blue": "#323C47",
			"shade-dim-gray": "#949494",
			"shade-blue-purple": "#1D307C",
			"shade-purple": "#6926D7",
		},
		backgroundImage: {
			"hero-bg-pattern-img": "url('../assets/images/form-banner-img.jpg')",
			"hero-bg-pattern-gradient":
				"url('../assets/images/form-gradient-img.jpg')",
		},
	},
	plugins: [require("daisyui")],
};
