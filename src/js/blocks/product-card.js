import { Application } from "@splinetool/runtime";

document.querySelectorAll("[data-spline]").forEach((canvas) => {
  const app = new Application(canvas);
  app.load("https://prod.spline.design/LvRa4Y-edxnROzmX/scene.splinecode");
  canvas.removeAttribute("data-spline");
});
