
		window.addEventListener('load', function (e) {
			var exclusionState = window.localStorage.plausible_ignore == "true"

			if (exclusionState) {
				document.getElementById("plausible_button").innerHTML = 'Tracking activated'
			} else {
				document.getElementById("plausible_button").innerHTML = 'Tracking deactivated'
			}
		});

		function toggleExclusion(e) {
			var exclusionState = window.localStorage.plausible_ignore == "true"

			if (exclusionState) {
				delete window.localStorage.plausible_ignore
				document.getElementById("plausible_button").innerHTML = 'Tracking deactivated'
			} else {
				window.localStorage.plausible_ignore = "true"
				document.getElementById("plausible_button").innerHTML = 'Trackin activated'
			}
		}
	
