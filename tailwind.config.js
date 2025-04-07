const { Container } = require("postcss");

module.exports = {
    content: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
    ],
    theme: {
      extend: {},
      container: {
        center: true,
        padding: '1rem',
      },
    },
    plugins: [],
  };
  