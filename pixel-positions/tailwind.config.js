/** @type {import('tailwindcss').Config} */
// export default {
//     content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
//     theme: {
//         extend: {
//             colors: {
//                 black: "#060606",
//             },
//             fontFamily: {
//                 "hanken-grotesk": [
//                     "Hanken Grotesk", "sans-serif"
//                 ]
//             }
//         },
//     },
//     plugins: [],
// };


module.exports = {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            colors: {
                black: "#060606",
            },
             fontFamily: {
                "hanken-grotesk": [
                    "Hanken Grotesk", "sans-serif"
                ]
            },
            fontSize: {
                "2xs": "10px"
             }
        },
    },
    plugins: [],
};
