// import { Application } from "@splinetool/runtime";

// const canvas = document.getElementById("canvas3d");
// const app = new Application(canvas);
// app.load("https://prod.spline.design/pSltKjPMNRN5TeCm/scene.splinecode");

import { Application } from "@splinetool/runtime";

document.querySelectorAll("[data-spline]").forEach((canvas) => {
  new Application(canvas).load(canvas.getAttribute("data-spline")).then((e) => {
    // Remove style attribute to prevent canvas from being hidden
    canvas.removeAttribute("style");
  });
  canvas.removeAttribute("data-spline");
});
