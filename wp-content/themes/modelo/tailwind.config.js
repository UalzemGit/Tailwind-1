/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{php,html,js}"],
  theme: {
    // FAREMOS NOSSAS CONFIGURAÇÕES PERSONALIZADAS EXTENDENDO CLASSES NOVAS NO TAILWIND:

    extend: {
      // INICIANDO MINHAS CORES PERSONALIZADAS:
      //  OBS: TODA VEZ QUE CRIAR UM NOVO ITEM TEMOS QUE REBUILDAR O PROJETO
      colors: {
        "red-ualzem": "#900000",
        "pink-ualzem": "#BE00F9",
        "black-ualzem": "#00005B",
        "black-ualze": "#00005B",
      },
      // FINALIZANDO MINHAS CORES PERSONALIZADAS

      //***************************************
      // INICIANDO MEU NOVO FONT-SIZE PERSONALIZADO:
      fontSize: {
        "ualzem-size": "9.66rem",
        "ualzem-paragrafo": "1.11rem",
      },
      // FINALIZANDO MEUS NOVOS FONT-SIZE PERSONALIZADO
      //*****************************************************************************************************************************************************************************************
      //  INICIANDO OS EXTENDS DO SPOTIFY CLONE:

      spacing: {
        // spacing engloba margin, padding, width, height
        14: "3.5rem",
        "125px": "125px",
        "132px": "132px",
      },
      colors: {
        hoverspt: "#18d760",
        "purple-main": "#2d46b9",
        "green-main": "#1ed760",
        "red-ualzem": "#900000",
        "pink-ualzem": "#BE00F9",
        "black-ualzem": "#00005B",
        "black-ualze": "#00005B",
      },
      backgroundImage: (theme) => ({
        "spotify-theme": "url('../img/bursts.svg')",
        "spotify-theme-mobile": "url('../img/bursts-mobile.svg')",
      }),
      backgroundSize: {
        "175%": "175%",
        "195%": "195%",
      },
      backgroundPosition: {
        banner: "46% 4%",
        "banner-mobile": "top 25% center",
      },
      fontSize: {
        "9xl": "9rem",
        "ualzem-size": "9.66rem",
        "ualzem-paragrafo": "1.11rem",
      },

      // FINALIZANDO OS EXTENDS DO SPOTIFY CLONE
      //******************************************************************************************************************************************************************************************** */
    },
  },
  plugins: [],
};
