/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        'bike-primary': '#E76F51',
      }
    },
  },
  plugins: [require("daisyui")],
}

