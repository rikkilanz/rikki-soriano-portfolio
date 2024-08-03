/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./pages/**/*.{js,ts,jsx,tsx,mdx}",
    "./components/**/*.{js,ts,jsx,tsx,mdx}",
    "./app/**/*.{js,ts,jsx,tsx,mdx}",
  ],
  theme: {
    extend: {
      colors: {
        // Use for majority of designs (backgroud color, buttons, headers)
        "princetonorange": "#FE950B",
        // Hover button color
        "orangepeel": "#FEA634",
        // Section backgroun color, large heading color
        "papayawhip": "#FFEFD5",
        // no clue
        "babypowder": "#FDFFFC",
        // Black text
        "black": "#0A0908",
        "walnut": "#696047"
      },
      fontFamily: {
        gibson: ["canada-type-gibson", "sans-serif"],
      },
    },
  },
  plugins: [],
};
