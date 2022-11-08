// https://tailwindcss.com/docs/configuration
module.exports = {
  content: ["./index.php", "./app/**/*.php", "./resources/**/*.{php,vue,js}"],
  theme: {
    container: {
      center: true,
      padding: "1rem",
    },
    extend: {
      colors: {
        primary: "#d59cd5",
        secondary: "#53c4c8",
      }, // Extend Tailwind's default colors
    },
  },
  plugins: [
    require("tailwindcss-debug-screens"),
    require("@tailwindcss/forms"),
  ],
};
