// vite.config.js
import { defineConfig } from "vite";
import FullReload from "vite-plugin-full-reload";
import UnoCSS from "unocss/vite";

export default defineConfig({
  plugins: [
    UnoCSS(),
    FullReload([
      "templates/**/*.php",
      "partials/**/*.php",
      "./header.php",
      "./footer.php",
      "./single.php",
      "./single-**.php",
    ]),
  ],
  server: {
    origin: "http://localhost:5173",
    cors: true, // <-- permite CORS desde cualquier origen
  },
  base: "./",
});
