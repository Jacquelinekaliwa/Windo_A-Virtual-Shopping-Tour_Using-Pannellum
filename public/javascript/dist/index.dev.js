"use strict";

document.addEventListener("DOMContentLoaded", function () {
  pannellum.viewer('panorama', {
    type: 'equirectangular',
    panorama: 's.jpg',
    autoLoad: true,
    showZoomCtrl: false,
    hotSpots: [{
      pitch: 10,
      yaw: 150,
      type: "info",
      text: "Information hotspot",
      URL: "https://example.com"
    }, {
      pitch: -10,
      yaw: -150,
      type: "scene",
      text: "Move to another scene",
      sceneId: "otherScene"
    }],
    scenes: {
      otherScene: {
        type: "equirectangular",
        panorama: "path_to_another_360_image.jpg"
      }
    }
  });
});
//# sourceMappingURL=index.dev.js.map
