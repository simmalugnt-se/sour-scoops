import { Application } from "@splinetool/runtime";

const canvas = document.getElementById("canvas3d");
console.log(canvas, Application);
const app = new Application(canvas);
app.load("https://prod.spline.design/pSltKjPMNRN5TeCm/scene.splinecode");
