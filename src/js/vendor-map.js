const vendors = [
  {
    name: "Gelato d'oro",
    phone: "555-555-5555",
    address: "via dei Coronari, 00186 Roma, Italy",
    lat: 41.89193,
    lng: 12.51133,
  },
  {
    name: "Eiscafé Tucholsky",
    phone: "555-555-5555",
    address: "Tucholskystraße, 10117 Berlin, Germany",
    lat: 52.520008,
    lng: 13.404954,
  },
  {
    name: "La Glace",
    phone: "555-555-5555",
    address: "Strøget, 1164 København K, Denmark",
    lat: 55.6760968,
    lng: 12.5683371,
  },
  {
    name: "Café Givral",
    phone: "555-555-5555",
    address: "20 Đinh Tiên Hoàng, Hàng Bồ, Hoàn Kiếm, Hà Nội, Vietnam",
    lat: 21.0294498,
    lng: 105.8544441,
  },
  {
    name: "Gelato Gourmet",
    phone: "555-555-5555",
    address: "7-11 Argyle St, The Rocks NSW 2000, Australia",
    lat: -33.8688,
    lng: 151.2093,
  },
  {
    name: "Kulfi House",
    phone: "555-555-5555",
    address: "Janpath, Connaught Place, New Delhi, Delhi 110001, India",
    lat: 28.6315,
    lng: 77.2167,
  },
  {
    name: "Sorbetero",
    phone: "555-555-5555",
    address: "R. 24 de Julho, 1200-109 Lisboa, Portugal",
    lat: 38.7139,
    lng: -9.1394,
  },
  {
    name: "Teatro del Gelato",
    phone: "555-555-5555",
    address: "Piazza di Pasquino, 00186 Rome, Italy",
    lat: 41.89193,
    lng: 12.51133,
  },
  {
    name: "Fågelbrohus Eis Café",
    phone: "555-555-5555",
    address: "Fågelbrohusvägen, 131 32 Nacka, Sweden",
    lat: 59.34266,
    lng: 18.09818,
  },
];

function addDataLayer(map, data) {
  if (!map.getSource("markers")) {
    map.addSource("markers", {
      type: "geojson",
      data: data,
    });
  } else {
    map.getSource("markers").setData(data);
  }

  map.loadImage(
    `${vendorMapData.templateUrl}/src/images/map-marker.png`,
    function (error, image) {
      if (error) throw error;
      map.addImage("pin", image);
      map.addLayer({
        id: `markers`,
        type: "symbol",
        source: "markers",
        layout: {
          "icon-image": "pin",
          "icon-size": 0.1,
          "icon-allow-overlap": true,
        },
      });
    }
  );
}

new Vue({
  el: "#map",
  data: {
    vendors: vendors,
    map: null,
  },
  methods: {},
  mounted() {
    // Create a new div inside the map container, give it id of "mapboxMap" and set the height to 100%
    const mapContainer = document.getElementById("map");
    const mapboxMap = document.createElement("div");
    mapboxMap.id = "mapboxMap";
    mapboxMap.style.height = "100%";
    mapContainer.appendChild(mapboxMap);
    mapboxgl.accessToken =
      "pk.eyJ1IjoiandhZXJuIiwiYSI6InNuR3pHWkkifQ.wCx5mNvW43zVLDj-8F-zBw";
    this.map = new mapboxgl.Map({
      container: "mapboxMap", // container ID
      style: "mapbox://styles/jwaern/cldbn31er004g01p5rkm58tyk", // style URL
      scrollZoom: false,
    });
    this.map.on("load", () => {
      addDataLayer(this.map, {
        type: "FeatureCollection",
        features: vendors.map((marker) => ({
          type: "Feature",
          geometry: {
            type: "Point",
            coordinates: [marker.lng, marker.lat],
          },
          properties: marker,
        })),
      });
    });

    let id = 0;
    const popup = new mapboxgl.Popup({
      closeButton: false,
    });
    this.map.on("click", "markers", (e) => {
      id = e.features[0].properties.id;
      const coordinates = e.features[0].geometry.coordinates.slice();
      const placeholder = document.createElement("div");
      placeholder.innerHTML = `
        <div class="map-popup">
            <div class="map-popup__content">
                <h3>${e.features[0].properties.name}</h3>
                <p>${e.features[0].properties.address}</p>
                <p>${e.features[0].properties.phone}</p>
            </div>
        </div>
        `;

      popup.setLngLat(coordinates).setDOMContent(placeholder).addTo(this.map);
    });

    this.map.on("mouseenter", "markers", () => {
      this.map.getCanvas().style.cursor = "pointer";
    });
    this.map.on("mouseleave", "markers", () => {
      this.map.getCanvas().style.cursor = "";
    });
  },
});
