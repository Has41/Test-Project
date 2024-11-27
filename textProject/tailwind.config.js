/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    fontFamily: {
      'Gothic': ["Noto Sans Gothic", 'sans-serif'],
      'sans': ['ui-sans-serif', 'system-ui'],
      'serif': ['ui-serif', 'Georgia'],
      'mono': ['ui-monospace', 'SFMono-Regular'],
      'display': ['Oswald'],
      'body': ['"Open Sans"'],
      'poppins': ['Poppins', 'sans-serif'],  // Main Poppins font
    },
    extend: {
      colors: {
        customBg: '#010039', // Custom background color
        customHover: '#030254', // Custom hover color
        customGray: '#6B7280', // Custom gray color
      },
      fontWeight: {
        thin: 100,
        extralight: 200,
        light: 300,
        regular: 400,
        medium: 500,
       semibold: 600,
        bold: 700,
        extrabold: 800,
        black: 900,
      },
    },
  },
  plugins: [],
};
