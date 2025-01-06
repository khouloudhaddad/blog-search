/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./public/**/*.php", // Include all PHP files in the public directory
    "./src/**/*.php", // Include PHP files in the src directory
    "./public/**/*.html", // If you use HTML files
    "./public/**/*.js", // Include JS files if any
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
