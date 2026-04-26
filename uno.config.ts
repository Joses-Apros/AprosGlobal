// uno.config.ts
import { defineConfig } from "unocss"
import presetUno from "@unocss/preset-uno"
import {
  presetAttributify,
} from 'unocss'
import transformerDirectives from "@unocss/transformer-directives"
import presetAutoprefixer from "unocss-preset-autoprefixer"
import { presetCalc } from "unocss-preset-calc"
import presetIcons from "@unocss/preset-icons"
import transformerVariantGroup from "@unocss/transformer-variant-group"


const calc = (value: number) => `calc(${value} * clamp(0px,100vw,1440px) / var(--width-screen))`

export default defineConfig({
  content: {
    filesystem: [
      "./templates/**/**.php",
      "./partials/**/**.php",
      "./header.php",
      "./footer.php",
      "./single-**.php",
      "./single.php",
      "./404.php",
      "./functions.php",
    ],
  },
  presets: [
    presetAttributify(),
    presetUno(),
    presetCalc({
      max: 1440,
      min: 375,
    }),
    presetAutoprefixer(),
    presetIcons(),
  ],
  // ...UnoCSS options

  rules: [
    ["leading-normal", { "line-height": "normal" }],
    ["noise", {
      "background-image": "var(--noise-img)",
      "animation": "noise-animation 1s steps(3) infinite"
    }]
  ],
  shortcuts: [
    {
      // container: "md:px-133 px-20",
      boton: "md:h-56 h-46 min-w-139 max-w-auto rounded-full border-1 border-solid border-white relative hover:bg-white cursor-pointer",
      boton_outline: "h-56 min-w-139 max-w-auto rounded-full relative cursor-pointer",
    }

  ],
  theme: {
    colors: {
      c_titulos: "#15F2C6",
      blue: "#070926",
      c_box: "#1A1C37",
      gray_hover: "#e6e6e6",
      sky: "#00CEFF",
      green: "#15F2C6",
      white2: "#F4F4F4",
      plomo: "#55555e",
    },
    fontFamily: {
      galano: ["Galano_Grotesque", "sans-serif"],
      galano_alt: ["Galano_Grotesque_Alt", "sans-serif"],
      poppins: ["Poppins", "sans-serif"],
      // nunito: ["Nunito", "sans-serif"],
    },
    container: {
      center: true,
      padding: {
        xs: calc(20),
        md: calc(133),
      },
      maxWidth: {
        md: "100%",
        "2xl": "1440px",
      },
    },
    breakpoints: {
      xs: "320px",
      // => @media (min-width: 640px) { ... }

      sm: "640px",
      // => @media (min-width: 640px) { ... }

      md: "768px",
      // => @media (min-width: 768px) { ... }

      lg: "1440px",
      // // => @media (min-width: 1024px) { ... }

      // xl: "1280px",
      // // => @media (min-width: 1280px) { ... }

      // "2xl": "1536px",
      // // => @media (min-width: 1536px) { ... }

      "3xl": "1920px",
      // // => @media (min-width: 1920px) { ... }
    },
  },
  transformers: [transformerDirectives(), transformerVariantGroup()],
})
