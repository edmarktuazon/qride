<style>
#qrcodes-container {
    display: flex;
    justify-content: center;
    gap: 100px;
}
</style>

<!-- Include necessary scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/davidshimjs/qrcodejs@gh-pages/qrcode.min.js"></script>

<!-- Create a container for the QR codes -->
<div id="qrcodes-container"></div>

<script>
// Define an array of objects, each containing a title and a link
var qrCodesData = [{
        title: "First driver info qr code",
        link: "http://qride.infinityfreeapp.com/driver-info/juan_info.php"
    },
    {
        title: "QR Code 2",
        link: "http://qride.infinityfreeapp.com/driver-info/jimmy_info.php"
    },
    {
        title: "QR Code 3",
        link: "https://example.com/link3"
    },
    // Add more objects with titles and links as needed
];

function generateQRCodeWithTitle(data) {
    var qrcodeDiv = document.createElement("div");
    qrcodeDiv.className = "qrcode-item";


    var titleElement = document.createElement("h2");
    titleElement.textContent = data.title;
    qrcodeDiv.appendChild(titleElement);

    var qrcode = new QRCode(qrcodeDiv, data.link);

    var downloadLink = document.createElement("a");
    downloadLink.href = qrcode._el.querySelector("img").src;
    downloadLink.download = "qrcode.png";
    downloadLink.textContent = "Download QR Code";

    qrcodeDiv.appendChild(downloadLink);

    document.getElementById("qrcodes-container").appendChild(qrcodeDiv);
}

for (var i = 0; i < qrCodesData.length; i++) {
    generateQRCodeWithTitle(qrCodesData[i]);
}
</script>