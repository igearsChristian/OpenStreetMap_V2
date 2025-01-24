var infoPanel = document.getElementById("infoPanel");
var infoText = document.getElementById("infoText");
var infoImage = document.getElementById("infoImage");

function showInfoPanel(text, img) {
  if (infoPanel.classList.contains("active")) {
    infoPanel.classList.remove("active");
  } else {
    infoText.innerHTML = text;
    infoImage.src = img;
    infoPanel.classList.add("active");
  }
}

var controlPanel = document.getElementById("controlPanel");
var toggleButton = document.getElementById("toggleButton");
const layersControl = document.querySelector(".leaflet-control-layers");

// Add an event listener to the toggle button
toggleButton.addEventListener("click", function () {
  controlPanel.classList.toggle("active"); // Toggle the active class
  toggleButton.textContent = controlPanel.classList.contains("active")
    ? "←"
    : "→";

  layersControl.style.display = controlPanel.classList.contains("active")
    ? "block"
    : "none";
});

function switchMapLayer() {
  var selectedLayer = document.querySelector(
    'input[name="options"]:checked'
  ).value;

  if (selectedLayer === "street") {
    map.removeLayer(satelliteLayer);
    map.addLayer(streetLayer);
  } else if (selectedLayer === "satellite") {
    map.removeLayer(streetLayer);
    map.addLayer(satelliteLayer);
  }
}

// Event listener for radio buttons
document
  .getElementById("mapSelector")
  .addEventListener("change", switchMapLayer);

//Marker panel logic
function toggleMarkers() {
  if (document.getElementById("toggleIT").checked) {
    map.addLayer(IT_group);
  } else {
    map.removeLayer(IT_group);
  }

  if (document.getElementById("toggleCommerical").checked) {
    map.addLayer(Commerical_group);
  } else {
    map.removeLayer(Commerical_group);
  }
}

// Event listeners for checkboxes
document
  .getElementById("markerSelector")
  .addEventListener("change", toggleMarkers);
