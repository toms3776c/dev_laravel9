module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        fontFamily: {
            Notosans: ['Noto Sans JP'],
        },
    },
  },
  plugins: [
    require("daisyui")
  ],
  daisyui: {
      themes: ["bumblebee"]
  },
}
