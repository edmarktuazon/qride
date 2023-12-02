/** @format */

document.addEventListener("DOMContentLoaded", function () {
	function submitReport(reportType) {
		const xhr = new XMLHttpRequest();
		const reportUrl = `../../report_sms_${reportType}.php`;

		xhr.open("POST", reportUrl, true);
		xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

		xhr.onreadystatechange = function () {
			if (xhr.readyState === 4) {
				if (xhr.status === 200) {
					Swal.fire({
						icon: "success",
						title: "Success!",
						text: "Your report has been submitted and recorded",
					}).then(function () {
						window.location.href = "../../thankyou.php";
					});
				} else {
					alert("Error sending report. Server response: " + xhr.status);
				}
			}
		};

		const concern = document.getElementById("message").value;
		const emailAddress = document.getElementById("email_address").value;
		const complainantNumber =
			document.getElementById("complainant_number").value;
		let rating = null;

		for (let i = 1; i <= 5; i++) {
			const radio = document.querySelector(
				'input[name="rating_' + i + '"]:checked'
			);
			if (radio) {
				rating = radio.value;
				break;
			}
		}

		const data =
			"message=" +
			encodeURIComponent(concern) +
			"email_address=" +
			encodeURIComponent(emailAddress) +
			"&complainant_number=" +
			encodeURIComponent(complainantNumber) +
			"&rating=" +
			encodeURIComponent(rating);

		xhr.send(data);
	}

	const submitAlbertReport = document.getElementById("submitAlbertReportNonUa");
	if (submitAlbertReport) {
		submitAlbertReport.addEventListener("click", function () {
			submitReport("albert");
		});
	}

	const submitAlexReport = document.getElementById("submitAlexReportNonUa");
	if (submitAlexReport) {
		submitAlexReport.addEventListener("click", function () {
			submitReport("alex");
		});
	}

	const submitCharlonReport = document.getElementById(
		"submitCharlonReportNonUa"
	);
	if (submitCharlonReport) {
		submitCharlonReport.addEventListener("click", function () {
			submitReport("charlon");
		});
	}

	const submitEdgarReport = document.getElementById("submitEdgarReportNonUa");
	if (submitEdgarReport) {
		submitEdgarReport.addEventListener("click", function () {
			submitReport("edgar");
		});
	}

	const submitEdwinReport = document.getElementById("submitEdwinReportNonUa");
	if (submitEdwinReport) {
		submitEdwinReport.addEventListener("click", function () {
			submitReport("edwin");
		});
	}

	const submitEfrenReport = document.getElementById("submitEfrenReportNonUa");
	if (submitEfrenReport) {
		submitEfrenReport.addEventListener("click", function () {
			submitReport("efren");
		});
	}

	const submitErnestoReport = document.getElementById(
		"submitErnestoReportNonUa"
	);
	if (submitErnestoReport) {
		submitErnestoReport.addEventListener("click", function () {
			submitReport("ernesto");
		});
	}

	const submitHerbertReport = document.getElementById(
		"submitHerbertReportNonUa"
	);
	if (submitHerbertReport) {
		submitHerbertReport.addEventListener("click", function () {
			submitReport("herbert");
		});
	}

	const submitJMReport = document.getElementById("submitJMReportNonUa");
	if (submitJMReport) {
		submitJMReport.addEventListener("click", function () {
			submitReport("jm");
		});
	}

	const submitKathronReport = document.getElementById(
		"submitKathronReportNonUa"
	);
	if (submitKathronReport) {
		submitKathronReport.addEventListener("click", function () {
			submitReport("kathron");
		});
	}

	const submitMarcelinoReport = document.getElementById(
		"submitMarcelinoReport"
	);
	if (submitMarcelinoReport) {
		submitMarcelinoReport.addEventListener("click", function () {
			submitReport("marcelino");
		});
	}

	const submitRennelReport = document.getElementById("submitRennelReportNonUa");
	if (submitRennelReport) {
		submitRennelReport.addEventListener("click", function () {
			submitReport("rennel");
		});
	}

	const submitRicardoReport = document.getElementById(
		"submitRicardoReportNonUa"
	);
	if (submitRicardoReport) {
		submitRicardoReport.addEventListener("click", function () {
			submitReport("ricardo");
		});
	}

	const submitRogerReport = document.getElementById("submitRogerReportNonUa");
	if (submitRogerReport) {
		submitRogerReport.addEventListener("click", function () {
			submitReport("roger");
		});
	}

	const submitLeoncioReport = document.getElementById(
		"submitLeoncioReportNonUa"
	);
	if (submitLeoncioReport) {
		submitLeoncioReport.addEventListener("click", function () {
			submitReport("leoncio");
		});
	}

	const submitJimmyReport = document.getElementById("submitJimmyReportNonUa");
	if (submitJimmyReport) {
		submitJimmyReport.addEventListener("click", function () {
			submitReport("jimmy");
		});
	}

	const submitReynaldoReport = document.getElementById(
		"submitReynaldoReportNonUa"
	);
	if (submitReynaldoReport) {
		submitReynaldoReport.addEventListener("click", function () {
			submitReport("reynaldo");
		});
	}
});
