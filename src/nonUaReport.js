/** @format */
// delete data in table
const confirmDelete = (id) => {
	Swal.fire({
		title: "Are you sure?",
		text: "You won't be able to revert this!",
		icon: "warning",
		confirmButtonText: "Yes, delete it!",
		showCancelButton: true,
	}).then((result) => {
		if (result.isConfirmed) {
			window.location.href =
				"admin_non_ua_report_dashboard.php?delete_id=" + id;
		}
	});
};

// Function to handle report, saving data to db and admin, and user session.
function setupReportListener(buttonId, redirectUrl, driverName) {
	// Function to set the driver_name in sessionStorage
	function setDriverName(driverName) {
		sessionStorage.setItem("driver_name", driverName);
	}
	const nextBtn = document.querySelector(buttonId);

	if (nextBtn) {
		nextBtn.addEventListener("click", () => {
			const messageTextarea = document.getElementById("message");
			const complainantNum = document.getElementById("complainant_number");
			const emailAddress = document.getElementById("email_address");

			const messageValue = messageTextarea.value;
			const complainantNumValue = complainantNum.value;
			const emailAddressValue = emailAddress.value;

			if (complainantNumValue === "" || emailAddressValue === "") {
				Swal.fire({
					icon: "error",
					title: "Please enter your active mobile number and email address",
					text: "Make sure you enter a correct format of mobile number and email address",
				});
			} else {
				sessionStorage.setItem("user_message", messageValue);
				sessionStorage.setItem("complainant_number", complainantNumValue);
				sessionStorage.setItem("email_address", emailAddressValue);

				// Set the driver_name in sessionStorage based on the current page
				setDriverName(driverName);

				window.location.href = redirectUrl;
			}
		});
	}
}

document.addEventListener("DOMContentLoaded", function () {
	const isAdminLoggedIn =
		"<?php echo isset($_SESSION['username']) ? 'true' : 'false'; ?>";

	if (isAdminLoggedIn) {
		const sessionUsername =
			"<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>";
		sessionStorage.setItem("admin_username", sessionUsername);
	}

	const storedMessage = sessionStorage.getItem("user_message");
	const storedComplainantNumber = sessionStorage.getItem("complainant_number");
	const storedEmailAddress = sessionStorage.getItem("email_address");

	if (storedEmailAddress !== null) {
		document.getElementById("email_address").value = storedEmailAddress;
		sessionStorage.removeItem("email_address");
	}
	if (storedMessage !== null) {
		document.getElementById("message").value = storedMessage;
		sessionStorage.removeItem("user_message");
	}

	if (storedComplainantNumber !== null) {
		document.getElementById("complainant_number").value =
			storedComplainantNumber;
		sessionStorage.removeItem("complainant_number");
	}

	function submitReport(formData) {
		const xhr = new XMLHttpRequest();
		xhr.open("POST", "../../admin_non_ua_report_dashboard.php", true);

		xhr.onreadystatechange = function () {
			if (xhr.readyState === 4 && xhr.status === 200) {
				// Handle the response here if needed
				// console.log(xhr.responseText);
			}
		};

		xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
		xhr.send(JSON.stringify(formData));
	}

	function setupSubmitListener(submitButtonId) {
		const submitReportBtn = document.getElementById(submitButtonId);

		if (submitReportBtn) {
			submitReportBtn.addEventListener("click", function () {
				const driverName = document.getElementById("driver_name").value;
				const plateNumber = document.getElementById("plate_number").value;
				const emailAddress = document.getElementById("email_address").value;
				const complainantNumber =
					document.getElementById("complainant_number").value;
				const reason = document.getElementById("message").value;
				const driverImage = document.getElementById("driver_image_url").value;

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

				const formData = {
					driver_name: driverName,
					plate_number: plateNumber,
					email_address: emailAddress,
					complainant_number: complainantNumber,
					message: reason,
					rating: rating,
					driver_image_url: driverImage,
					admin_username: sessionStorage.getItem("admin_username"),
				};

				submitReport(formData);
			});
		}
	}

	// Non UA
	setupReportListener(
		"#nextBtnAlbert",
		"../../driver-info/rating/rate_albert.php",
		"Albert"
	);
	setupSubmitListener("submitAlbertReportNonUa");

	setupReportListener(
		"#nextBtnAlex",
		"../../driver-info/rating/rate_alex.php",
		"Alex"
	);
	setupSubmitListener("submitAlexReportNonUa");

	setupReportListener(
		"#nextBtnCharlon",
		"../../driver-info/rating/rate_charlon.php",
		"Charlon"
	);
	setupSubmitListener("submitCharlonReportNonUa");

	setupReportListener(
		"#nextBtnEdgar",
		"../../driver-info/rating/rate_edgar.php",
		"Edgar"
	);
	setupSubmitListener("submitEdgarReportNonUa");

	setupReportListener(
		"#nextBtnEdwin",
		"../../driver-info/rating/rate_edwin.php",
		"Edwin"
	);
	setupSubmitListener("submitEdwinReportNonUa");

	setupReportListener(
		"#nextBtnEfren",
		"../../driver-info/rating/rate_efren.php",
		"Efren"
	);
	setupSubmitListener("submitEfrenReportNonUa");

	setupReportListener(
		"#nextBtnErnesto",
		"../../driver-info/rating/rate_ernesto.php",
		"Ernesto"
	);
	setupSubmitListener("submitErnestoReportNonUa");

	setupReportListener(
		"#nextBtnHerbert",
		"../../driver-info/rating/rate_herbert.php",
		"Herbert"
	);
	setupSubmitListener("submitHerbertReportNonUa");

	setupReportListener(
		"#nextBtnJM",
		"../../driver-info/rating/rate_jm.php",
		"JM"
	);
	setupSubmitListener("submitJMReportNonUa");

	setupReportListener(
		"#nextBtnKathron",
		"../../driver-info/rating/rate_kathron.php",
		"Kathron"
	);
	setupSubmitListener("submitKathronReportNonUa");

	setupReportListener(
		"#nextBtnMarcelino",
		"../../driver-info/rating/rate_marcelino.php",
		"Marcelino"
	);
	setupSubmitListener("submitMarcelinoReportNonUa");

	setupReportListener(
		"#nextBtnRennel",
		"../../driver-info/rating/rate_rennel.php",
		"Rennel"
	);
	setupSubmitListener("submitRennelReportNonUa");

	setupReportListener(
		"#nextBtnRicardo",
		"../../driver-info/rating/rate_ricardo.php",
		"Ricardo"
	);
	setupSubmitListener("submitRicardoReportNonUa");

	setupReportListener(
		"#nextBtnReynaldoM",
		"../../driver-info/rating/rate_reynaldo_m.php",
		"Reynaldo M"
	);
	setupSubmitListener("submitReynaldoMReportNonUa");

	setupReportListener(
		"#nextBtnRoger",
		"../../driver-info/rating/rate_roger.php",
		"Roger"
	);
	setupSubmitListener("submitRogerReportNonUa");

	setupReportListener(
		"#nextBtnJimmy",
		"../../driver-info/rating/rate_jimmy.php",
		"Jimmy"
	);
	setupSubmitListener("submitJimmyReport");

	setupReportListener(
		"#nextBtnReynaldo",
		"../../driver-info/rating/rate_reynaldo.php",
		"Reynaldo"
	);
	setupSubmitListener("submitReynaldoReportNonUa");

	setupReportListener(
		"#nextBtnLeoncio",
		"../../driver-info/rating/rate_leoncio.php",
		"Leoncio"
	);
	setupSubmitListener("submitLeoncioReportNonUa");

	// Set the driver_name in sessionStorage based on the current page
	const isAlbertPage = window.location.pathname.includes("rate_albert.php");
	const isAlexPage = window.location.pathname.includes("rate_alex.php");
	const isCharlonPage = window.location.pathname.includes("rate_charlon.php");
	const isEdgarPage = window.location.pathname.includes("rate_edgar.php");
	const isEdwinPage = window.location.pathname.includes("rate_edwin.php");
	const isEfrenPage = window.location.pathname.includes("rate_efren.php");
	const isErnestoPage = window.location.pathname.includes("rate_ernesto.php");
	const isHerbertPage = window.location.pathname.includes("rate_herbert.php");
	const isJMPage = window.location.pathname.includes("rate_jm.php");
	const isKathronPage = window.location.pathname.includes("rate_kathron.php");
	const isMarcelinoPage =
		window.location.pathname.includes("rate_marcelino.php");
	const isRennelPage = window.location.pathname.includes("rate_rennel.php");
	const isRicardoPage = window.location.pathname.includes("rate_ricardo.php");
	const isReynaldoMPage = window.location.pathname.includes(
		"rate_reynaldo_m.php"
	);
	const isRogerPage = window.location.pathname.includes("rate_roger.php");
	const isJimmyPage = window.location.pathname.includes("rate_jimmy.php");
	const isReynaldoPage = window.location.pathname.includes("rate_reynaldo.php");
	const isLeoncioPage = window.location.pathname.includes("rate_leoncio.php");

	if (isAlbertPage) {
		setDriverName("Albert");
	} else if (isAlexPage) {
		setDriverName("Alex");
	} else if (isCharlonPage) {
		setDriverName("Charlon");
	} else if (isEdgarPage) {
		setDriverName("Edgar");
	} else if (isEdwinPage) {
		setDriverName("Edwin");
	} else if (isEfrenPage) {
		setDriverName("Efren");
	} else if (isErnestoPage) {
		setDriverName("Ernesto");
	} else if (isHerbertPage) {
		setDriverName("Herbert");
	} else if (isJMPage) {
		setDriverName("JM");
	} else if (isKathronPage) {
		setDriverName("kathron");
	} else if (isMarcelinoPage) {
		setDriverName("Marcelino");
	} else if (isRennelPage) {
		setDriverName("Rennel");
	} else if (isRicardoPage) {
		setDriverName("Ricardo");
	} else if (isReynaldoMPage) {
		setDriverName("Reynaldo M");
	} else if (isJimmyPage) {
		setDriverName("Jimmy");
	} else if (isReynaldoPage) {
		setDriverName("Reynaldo");
	} else if (isLeoncioPage) {
		setDriverName("Leoncio");
	} else {
		return;
	}
});
