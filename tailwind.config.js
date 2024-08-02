/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./pages/**/*.{js,ts,jsx,tsx,mdx}",
    "./components/**/*.{js,ts,jsx,tsx,mdx}",
    "./app/**/*.{js,ts,jsx,tsx,mdx}",
  ],
  theme: {
    extend: {
      // backgroundImage: {
      //   "gradient-radial": "radial-gradient(var(--tw-gradient-stops))",
      //   "gradient-conic":
      //     "conic-gradient(from 180deg at 50% 50%, var(--tw-gradient-stops))",
      // },
      colors: {
        // Use for majority of designs (backgroud color, buttons, headers)
        "princetonorange": "#FE950B",
        "orangepeel": "#FEA634",
        "papayawhip": "#FFEFD5",
        "babypowder": "#FDFFFC",
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
